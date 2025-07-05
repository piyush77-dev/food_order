<?php 
$food = isset($_GET['food']) ? $_GET['food'] : 'Food Item'; 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Order <?php echo htmlspecialchars($food); ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

 
  <nav style="text-align:center; margin-bottom:20px;">
  <a href="index.php" class="nav-btn">Home</a>
</nav>


  <h1 style="text-align:center; color: #e65100;">Order <?php echo htmlspecialchars($food); ?></h1>

 <form action="payment.php" method="POST">

    <!-- Hidden field to send food name -->
    <input type="hidden" name="food_name" value="<?php echo htmlspecialchars($food); ?>">

    <label>Quantity</label>
    <input type="number" name="quantity" required placeholder="Enter quantity" min="1">

    <label>Your Name</label>
    <input type="text" name="customer_name" required placeholder="Enter your name">

    <label>Delivery Address</label>
    <textarea name="address" required placeholder="Enter full address"></textarea>

    <label>Phone</label>
    <input type="text" name="phone" required placeholder="Enter contact number">

    <label>Email</label>
    <input type="email" name="email" required placeholder="Enter your email">

    <button type="submit">Place Order</button>
  </form>

</body>
</html>
