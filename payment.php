<?php
// Get order details from order.php
$food = $_POST['food_name'];
$qty = $_POST['quantity'];
$name = $_POST['customer_name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Choose Payment</title>
  <link rel="stylesheet" href="style.css">
  <style>
    form {
      max-width: 500px;
      margin: 50px auto;
      background: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      color: #e65100;
    }
    label {
      display: block;
      margin: 15px 0 5px;
      font-weight: bold;
    }
    select, button {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
    button {
      background-color: #e65100;
      color: white;
      border: none;
      cursor: pointer;
    }
    button:hover {
      background-color: #bf360c;
    }
  </style>
</head>
<body>

  <form action="insert_order.php" method="POST">
    <h2>💳 Choose Your Payment Method</h2>

    <!-- Hidden fields to forward all data -->
    <input type="hidden" name="food_name" value="<?php echo htmlspecialchars($food); ?>">
    <input type="hidden" name="quantity" value="<?php echo htmlspecialchars($qty); ?>">
    <input type="hidden" name="customer_name" value="<?php echo htmlspecialchars($name); ?>">
    <input type="hidden" name="address" value="<?php echo htmlspecialchars($address); ?>">
    <input type="hidden" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
    <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">

    <label style="color: #222; font-weight: bold;">Select a payment method</label>

    <select name="payment_method" required>
      <option value="">-- Select --</option>
      <option value="UPI">UPI</option>
      <option value="Card">Card</option>
      <option value="Cash on Delivery">Cash on Delivery</option>
    </select>

    <button type="submit">Confirm & Place Order</button>
  </form>

</body>
</html>
