<?php
session_start();
include 'connection.php';

// Redirect if not logged in
if (!isset($_SESSION['vendor_id'])) {
    header("Location: index.php");
    exit();
}

$vendor_id = $_SESSION['vendor_id'];
$data = [];

// Fetch subvendors and their total sales
$query1 = "
    SELECT 
        sm.sub_v_email AS subvendor_email,
        c.firstname,
        c.lastname,
        v.store_name,
        SUM(op.total) AS total_sales,
        SUM(op.quantity) AS total_books_sold
    FROM oc_super_vendor_mapping sm
    JOIN oc_customer c ON sm.sub_vendor_oc_customer_id = c.customer_id
    JOIN oc_lts_vendor v ON c.customer_id = v.customer_id
    JOIN oc_lts_order_product op ON v.vendor_id = op.vendor_id
    JOIN oc_order o ON op.order_id = o.order_id
    WHERE sm.super_vendor_id = ?
    AND o.order_status_id = 5
    AND o.date_added >= '2025-02-12 00:00:00'
    GROUP BY sm.sub_v_email, c.firstname, c.lastname, v.store_name
";

$stmt1 = $conn->prepare($query1);
$stmt1->bind_param("i", $vendor_id);
$stmt1->execute();
$stmt1->bind_result($subvendor_email, $firstname, $lastname, $store_name, $total_sales, $total_books_sold);
$data['subvendors'] = [];

while ($stmt1->fetch()) {
    $data['subvendors'][] = [
        'subvendor_email' => $subvendor_email,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'store_name' => $store_name,
        'total_sales' => $total_sales,
        'total_books_sold' => $total_books_sold
    ];
}
$stmt1->close();

// Fetch sales breakdown per sub-vendor
$query2 = "
    SELECT 
        sm.sub_v_email AS subvendor_email,
        subvendor.firstname AS subvendor_firstname,
        subvendor.lastname AS subvendor_lastname,
        v.store_name,
        op.product_id,
        op.quantity,
        op.price,
        op.total,
        op.tax,
        op.date_added,
        buyer.firstname AS buyer_firstname,
        buyer.lastname AS buyer_lastname,
        buyer.email AS buyer_email,
        o.order_status_id
    FROM oc_super_vendor_mapping sm
    JOIN oc_customer subvendor ON sm.sub_vendor_oc_customer_id = subvendor.customer_id
    JOIN oc_lts_vendor v ON subvendor.customer_id = v.customer_id
    JOIN oc_lts_order_product op ON v.vendor_id = op.vendor_id
    JOIN oc_order o ON op.order_id = o.order_id
    JOIN oc_customer buyer ON o.customer_id = buyer.customer_id
    WHERE sm.super_vendor_id = ?
    AND o.order_status_id = 5
    AND op.date_added >= '2025-02-12 00:00:00'
    ORDER BY op.date_added DESC
";

$stmt2 = $conn->prepare($query2);
$stmt2->bind_param("i", $vendor_id);
$stmt2->execute();
$stmt2->bind_result($subvendor_email, $subvendor_firstname,$subvendor_lastname, $store_name, $product_id, $quantity, $price, $total, $tax, $date_added, $buyer_firstname, $buyer_lastname, $buyer_email, $order_status_id);
$data['sales_breakdown'] = [];

while ($stmt2->fetch()) {
    $data['sales_breakdown'][] = [
        'subvendor_email' => $subvendor_email,
        'subvendor_firstname' => $subvendor_firstname,
        'subvendor_lastname' => $subvendor_lastname,
        'store_name' => $store_name,
        'product_id' => $product_id,
        'quantity' => $quantity,
        'price' => $price,
        'total' => $total,
        'tax' => $tax,
        'date_added' => $date_added,
        'buyer_firstname' => $buyer_firstname,
        'buyer_lastname' => $buyer_lastname,
        'buyer_email' => $buyer_email,
        'order_status_id' => $order_status_id
    ];
}
$stmt2->close();

// Get Super-Vendor Revenue (20%)
$query3 = "
    SELECT SUM(op.total) * 0.20 AS super_vendor_revenue
    FROM oc_super_vendor_mapping sm
    JOIN oc_customer c ON sm.sub_vendor_oc_customer_id = c.customer_id
    JOIN oc_lts_vendor v ON c.customer_id = v.customer_id
    JOIN oc_lts_order_product op ON v.vendor_id = op.vendor_id
    JOIN oc_order o ON op.order_id = o.order_id
    WHERE sm.super_vendor_id = ?
    AND o.order_status_id = 5  -- Ensure only completed orders count
    AND op.date_added >= '2025-02-12 00:00:00'
";

$stmt3 = $conn->prepare($query3);
$stmt3->bind_param("i", $vendor_id);
$stmt3->execute();
$stmt3->bind_result($super_vendor_revenue);
$stmt3->fetch();
$data['super_vendor_revenue'] = $super_vendor_revenue ?? 0;
$stmt3->close();

// Get LockBook Payout (80%)
$query4 = "
    SELECT SUM(op.total) * 0.80 AS lockbook_payout
    FROM oc_super_vendor_mapping sm
    JOIN oc_customer c ON sm.sub_vendor_oc_customer_id = c.customer_id
    JOIN oc_lts_vendor v ON c.customer_id = v.customer_id
    JOIN oc_lts_order_product op ON v.vendor_id = op.vendor_id
    JOIN oc_order o ON op.order_id = o.order_id  -- Fix: Join oc_order
    WHERE sm.super_vendor_id = ?
    AND o.order_status_id = 5  -- Ensure only completed orders coount
    AND op.date_added >= '2025-02-12 00:00:00'
";

$stmt4 = $conn->prepare($query4);
$stmt4->bind_param("i", $vendor_id);
$stmt4->execute();
$stmt4->bind_result($lockbook_payout);
$stmt4->fetch();
$data['lockbook_payout'] = $lockbook_payout ?? 0;
$stmt4->close();

// Calculate Total Amount
$data['total_amount'] = $data['super_vendor_revenue'] + $data['lockbook_payout'];


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <img src="https://www.lockbook.org/image/catalog/logo/exp6.jpg" alt="LockBook Logo" class="logo">
    
    <h1>Vendor Dashboard</h1>
    <button class="logout-btn" onclick="window.location.href='logout.php'">Logout</button>


    <!-- Subvendor Sales Summary -->
    <h2>Subvendors & Total Sales</h2>
    <table>
        <tr>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Store Name</th>
            <th>Total Books Sold</th>
            <th>Total Sales (₦)</th>
        </tr>
        <?php foreach ($data['subvendors'] as $subvendor) { ?>
            <tr>
                <td><?= htmlspecialchars($subvendor['subvendor_email']) ?></td>
                <td><?= htmlspecialchars($subvendor['firstname']) ?></td>
                <td><?= htmlspecialchars($subvendor['lastname']) ?></td>
                <td><?= htmlspecialchars($subvendor['store_name']) ?></td>
                <td><?= number_format($subvendor['total_books_sold']) ?></td>
                <td>₦<?= number_format($subvendor['total_sales'], 2) ?></td>
            </tr>
        <?php } ?>
    </table>

    <!-- Sales Breakdown Per Sub-Vendor -->
    <h2>Sales Breakdown</h2>
    <div style="max-height: 400px; overflow-y: auto; overflow-x: auto; border: 1px solid #ddd;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="position: sticky; top: 0; background-color: #fff; z-index: 10;">
                    <th style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">No</th>
                    <th style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">Buyer's Name</th>
                    <th style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">Buyer's Email</th>
                    <th style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">SubVendor Name</th>
                    <th style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">SubVendor Email</th>
                    <th style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">Store Name</th>
                    <th style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">Prod. ID</th>
                    <th style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">Qty & Prc</th>
                    <th style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">Total (₦)</th>
                    <th style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; foreach ($data['sales_breakdown'] as $sale) { ?>
                    <tr>
                        <td style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">
                        <?= $count++ ?>
                        <td style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">
                            <?= htmlspecialchars($sale['buyer_lastname'] . " " . $sale['buyer_firstname']) ?>
                        </td>
                        <td style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">
                            <?= htmlspecialchars(strlen($sale['buyer_email']) > 24 ? substr($sale['buyer_email'], 0, 21) . '...' : $sale['buyer_email']) ?>
                        </td>
                        <td style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">
                            <?= htmlspecialchars($sale['subvendor_lastname'] . " " . $sale['subvendor_firstname']) ?>
                        </td>
                        <td style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">
                            <?= htmlspecialchars(strlen($sale['subvendor_email']) > 23 ? substr($sale['subvendor_email'], 0, 21) . '..' : $sale['subvendor_email']) ?>
                        </td>
                        <td style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">
                            <?= htmlspecialchars($sale['store_name']) ?>
                        </td>
                        <td style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">
                            <?= $sale['product_id'] ?>
                        </td>
                        <td style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">
                            <?= $sale['quantity'] . " - ₦" . number_format($sale['price']) ?>
                        </td>
                        <td style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">
                            ₦<?= number_format($sale['total'], 2) ?>
                        </td>
                        <td style="border: 1px solid #ddd; padding: 8px; white-space: nowrap;">
                            <?= $sale['date_added'] ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <!-- Financial Summary -->
    <h2>Financial Summary</h2>
    <p><strong>Super Vendor Revenue (20% of Total Sales):</strong> ₦<?= number_format($data['super_vendor_revenue'], 2) ?></p>
    <p><strong>LockBook Payout (80% of Total Sales):</strong> ₦<?= number_format($data['lockbook_payout'], 2) ?></p>
    <p><strong>Total Amount:</strong> ₦<?= number_format($data['total_amount'], 2) ?></p>
</div>

</body>
</html>