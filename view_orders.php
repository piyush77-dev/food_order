<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM orders");
?>

<!DOCTYPE html>
<head>
  <title>Admin - View Orders</title>
  <link rel="stylesheet" href="style.css">

  <style>
    table {
      width: 90%;
      margin: 0 auto;
      border-collapse: collapse;
      background-color: #333;
      color: white;
      font-family: Arial, sans-serif;
    }

    th, td {
      border: 1px solid #555;
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: #00cc99;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: #444;
    }

    tr:hover {
      background-color: #555;
    }
  </style>
</head>


  <!-- Navbar -->
  <nav style="text-align:center; margin-bottom:20px;">
    <a href="index.php" style="margin-right: 20px;">Home</a>
    <a href="view_orders.php">Admin: View Orders</a>
  </nav>

  <!-- Heading -->
  <h1>📦 All Orders</h1>

  <!-- Orders Table -->
  <table>
    <tr>
      <th>Food</th>
      <th>Qty</th>
      <th>Customer</th>
      <th>Address</th>
      <th>Phone</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
        <td>{$row['food_name']}</td>
        <td>{$row['quantity']}</td>
        <td>{$row['customer_name']}</td>
        <td>{$row['address']}</td>
        <td>{$row['phone']}</td>
      </tr>";
    }
    ?>
  </table>

</body>
</html>
