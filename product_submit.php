<?php
// Database connection settings
$servername = "localhost";
$username = "root"; // replace with your MySQL username
$password = ""; // replace with your MySQL password
$dbname = "classicmodels";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$productCode = $_POST['productCode'];
$productName = $_POST['productName'];
$productLine = $_POST['productLine'];
$productScale = $_POST['productScale'];
$productVendor = $_POST['productVendor'];
$productDescription = $_POST['productDescription'];
$quantityInStock = $_POST['quantityInStock'];
$buyPrice = $_POST['buyPrice'];
$MSRP = $_POST['MSRP'];

// Insert data into Products table
$sql = "INSERT INTO Products (productCode, productName, productLine, productScale, productVendor, productDescription, quantityInStock, buyPrice, MSRP)
        VALUES ('$productCode', '$productName', '$productLine', '$productScale', '$productVendor', '$productDescription', $quantityInStock, $buyPrice, $MSRP)";

if ($conn->query($sql) === TRUE) {
    echo "New product created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
