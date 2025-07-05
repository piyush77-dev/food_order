<?php
$servername = "sql305.infinityfree.com";
$username = "if0_39394952";
$password = "Piyushkr999";
$database = "if0_39394952_food_order";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("❌ Database Connection Failed: " . mysqli_connect_error());
}
?>
