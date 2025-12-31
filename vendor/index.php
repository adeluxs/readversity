<?php
session_start();
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Retrieve salt for the user
    $salt_query = "SELECT salt FROM oc_customer WHERE email = ?";
    $stmt = $conn->prepare($salt_query);
    if (!$stmt) {
        die("SQL Error: " . $conn->error);
    }
    
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($salt);
        $stmt->fetch();
        $stmt->close();

        // Hash password using retrieved salt
        $hashed_password = sha1($salt . sha1($salt . sha1($password)));

        // Validate customer credentials
        $sql = "SELECT customer_id FROM oc_customer WHERE email = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            die("SQL Error: " . $conn->error);
        }

        $stmt->bind_param("ss", $email, $hashed_password);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($customer_id);
            $stmt->fetch();
            $stmt->close();

            // Fetch corresponding vendor_id
            $vendor_sql = "SELECT vendor_id FROM oc_lts_vendor WHERE customer_id = ?";
            $vendor_stmt = $conn->prepare($vendor_sql);
            if (!$vendor_stmt) {
                die("SQL Error: " . $conn->error);
            }

            $vendor_stmt->bind_param("i", $customer_id);
            $vendor_stmt->execute();
            $vendor_stmt->store_result();
            
            if ($vendor_stmt->num_rows > 0) {
                $vendor_stmt->bind_result($vendor_id);
                $vendor_stmt->fetch();
                $_SESSION['vendor_id'] = $vendor_id;
                header("Location: dashboard.php");
                exit();
            } else {
                $error = "No vendor account linked to this user.";
            }
            $vendor_stmt->close();
        } else {
            $error = "Invalid login credentials!";
        }
        $stmt->close();
    } else {
        $error = "Email not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Super Vendor Login</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body style="font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
        <div style="background: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); text-align: center; width: 350px;">
            <img src="https://www.lockbook.org/image/catalog/logo/exp6.jpg" alt="Company Logo" style="width: 120px; margin-bottom: 20px;">
            <h2 style="margin-bottom: 20px; color: #333;">Super Vendor Login</h2>
            <?php if (isset($error)) echo "<p style='color: red; font-size: 14px; margin-bottom: 10px;'>" . htmlspecialchars($error) . "</p>"; ?>
            <form method="post">
                <input type="email" name="email" placeholder="Email" required style="width: 95%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 5px;">
                <input type="password" name="password" placeholder="Password" required style="width: 95%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 5px;">
                <button type="submit" style="width: 100%; padding: 10px; background: #00abe0; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">Login</button>
            </form>
        </div>
    </body>
</html>