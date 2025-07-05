<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';
?>

<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Food Ordering</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav style="text-align:center; margin-bottom:20px;">
  <a href="index.php" style="margin-right: 20px;">Home</a>
  
</nav>

  <div class="hero">
  <h1>🍕 Craving Something Delicious?</h1>
  <p>Order your favorite food online — hot & fresh, delivered fast!</p>
  <a href="order.php" class="order-btn">🚀 Order Now</a>
</div>

  <div class="menu">
    <?php
    $result = mysqli_query($conn, "SELECT * FROM menu");
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<div class='item'>";
      echo "<img src='images/{$row['image']}' width='150'><br>";
      echo "<h3>".$row['name']."</h3>";
      echo "<p>₹".$row['price']."</p>";
      echo "<a href='order.php?food=".$row['name']."'>Order Now</a>";
      echo "</div>";
    }
    ?>
  </div>
</body>
</html>