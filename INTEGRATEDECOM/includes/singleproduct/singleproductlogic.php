<?php

include('server/connection.php');

if (isset($_GET['product_id'])) {

  $product_id = $_GET['product_id'];

  $stmt = $conn->prepare("SELECT * FROM products WHERE product_id=? ");
  $stmt->bind_param("i", $product_id);
  $stmt->execute();

  $product = $stmt->get_result();
} else {
  header('Location: index.php');
}
