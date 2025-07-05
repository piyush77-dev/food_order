<?php
// Enable error reporting (optional for debugging)
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";

// Get all form values
$food = $_POST['food_name'];
$qty = $_POST['quantity'];
$name = $_POST['customer_name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$payment = $_POST['payment_method'];

// Insert data into the orders table
$sql = "INSERT INTO orders (food_name, quantity, customer_name, address, phone, email, payment_method)
        VALUES ('$food', $qty, '$name', '$address', '$phone', '$email', '$payment')";

// Check if insertion is successful
if (mysqli_query($conn, $sql)) {
    // ✅ Pass email to success page so user can view their own orders
    header("Location: success.php?email=" . urlencode($email));
    exit();
} else {
    echo "❌ Error saving your order: " . mysqli_error($conn);
}
?>
