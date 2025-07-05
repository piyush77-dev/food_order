<?php
include "db.php";

$email = isset($_GET['email']) ? $_GET['email'] : '';
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Orders</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body { color: #222; }
    table {
      width: 90%;
      margin: 30px auto;
      border-collapse: collapse;
      background: white;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: center;
    }
    th {
      background-color: #e65100;
      color: white;
    }
  </style>
</head>
<body>

<h2 style="text-align:center;">🍽️ Your Orders</h2>

<?php
if ($email != '') {
  $result = mysqli_query($conn, "SELECT * FROM orders WHERE email = '$email'");
  if (mysqli_num_rows($result) > 0) {
    echo "<table>
            <tr>
              <th>Food</th>
              <th>Quantity</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Payment</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
              <td>{$row['food_name']}</td>
              <td>{$row['quantity']}</td>
              <td>{$row['address']}</td>
              <td>{$row['phone']}</td>
              <td>{$row['payment_method']}</td>
            </tr>";
    }
    echo "</table>";
  } else {
    echo "<p style='text-align:center;'>No orders found for <strong>$email</strong></p>";
  }
} else {
  echo "<p style='text-align:center; color:red;'>Please provide your email in the URL, like: <br><code>my_orders.php?email=youremail@example.com</code></p>";
}
?>

</body>
</html>
