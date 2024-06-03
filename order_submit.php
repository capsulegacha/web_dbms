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
$orderNumber = $_POST['orderNumber'];
$orderDate = $_POST['orderDate'];
$requiredDate = $_POST['requiredDate'];
$shippedDate = $_POST['shippedDate'];
$status = $_POST['status'];
$comments = !empty($_POST['comments']) ? $_POST['comments'] : NULL; // Set comments to NULL if empty
$customerNumber = $_POST['customerNumber'];

// Check if customerNumber exists in customers table
$checkCustomer = "SELECT customerNumber FROM customers WHERE customerNumber = ?";
$stmt = $conn->prepare($checkCustomer);
$stmt->bind_param("i", $customerNumber);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Prepare and bind the insert statement
    $sql = "INSERT INTO orders (orderNumber, orderDate, requiredDate, shippedDate, status, comments, customerNumber) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssssi", $orderNumber, $orderDate, $requiredDate, $shippedDate, $status, $comments, $customerNumber);
    
    try {
        $stmt->execute();
        echo "New order created successfully";
    } catch (mysqli_sql_exception $e) {
        if ($e->getCode() == 1062) { // Duplicate entry error code
            echo "Error: Duplicate entry for order number. Please use a unique order number.";
        } else {
            echo "Error: " . $e->getMessage();
        }
    }
} else {
    echo "Customer number does not exist";
}

// Close connections
$stmt->close();
$conn->close();
?>
