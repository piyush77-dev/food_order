<?php
// Get the email from URL
$email = isset($_GET['email']) ? $_GET['email'] : '';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Order Success</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background-color: #fefefe;
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 40px;
    }
    .success-box {
      background: #fff3e0;
      border: 2px solid #ff9800;
      padding: 30px;
      display: inline-block;
      border-radius: 10px;
      box-shadow: 0 0 10px #ccc;
    }
    .success-box h1 {
      color: #e65100;
    }
    .success-box p {
      font-size: 18px;
      margin-bottom: 20px;
    }
    .btn {
      padding: 10px 20px;
      background: #e65100;
      color: white;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      text-decoration: none;
      transition: background 0.3s ease;
    }
    .btn:hover {
      background: #bf360c;
    }
  </style>
</head>
<body>

  <div class="success-box">
    <h1>✅ Order Placed Successfully!</h1>
    <p>Thank you for your order. We'll prepare your delicious food shortly.</p>

    <?php if ($email): ?>
      <a href="my_orders.php?email=<?php echo htmlspecialchars($email); ?>" class="btn">📦 View My Orders</a>
    <?php endif; ?>

    <br><br>
    <a href="index.php" class="btn">🏠 Back to Menu</a>
  </div>

</body>
</html>
