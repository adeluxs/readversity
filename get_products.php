<?php
// Database configuration
$dbHost = 'localhost';
$dbUsername = 'lockbook_israel';
$dbPassword = 'Kehinde1.';
$dbName = 'lockbook_lockbook';

// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products from database
$sql = "SELECT p.product_id, pd.name AS product_name 
        FROM oc_product p
        INNER JOIN oc_product_description pd ON p.product_id = pd.product_id";
$result = $conn->query($sql);

// Check if query was successful
if ($result === false) {
    die("Error executing query: " . $conn->error);
}
// Fetch products that do not require shipping and have no uploaded files 

$query = "SELECT p.product_id, pd.name AS product_name FROM oc_product p JOIN oc_product_description pd ON p.product_id = pd.product_id WHERE p.shipping = 0 AND (p.url IS NULL OR p.url = '')";


$result = $conn->query($query);

$products = []; if ($result->num_rows > 0) { while ($row = $result->fetch_assoc()) { $products[] = $row; } }

$conn->close();

header('Content-Type: application/json'); echo json_encode($products); ?>