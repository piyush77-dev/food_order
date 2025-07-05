CREATE TABLE orders (
  id INT AUTO_INCREMENT PRIMARY KEY,
  food_name VARCHAR(100),
  quantity INT,
  customer_name VARCHAR(100),
  address TEXT,
  phone VARCHAR(20),
  email VARCHAR(100),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
