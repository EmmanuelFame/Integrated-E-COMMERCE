<?php
include "server/connection.php";

if (isset($_POST['order-details-btn']) && isset($_POST['order_id'])) {

  $order_id = $_POST['order_id'];
  $order_status = $_POST['order_status'];


  $stmt = $conn->prepare("SELECT * FROM order_items WHERE order_id=? ");
  $stmt->bind_param("i", $order_id);
  $stmt->execute();
  $order_details = $stmt->get_result();
  $order_total_price = calculateTotalOrderPrice($order_details);
} else {
  header("location: account.php");
  exit;
}

function calculateTotalOrderPrice($order_details)
{
  $total = 0;

  foreach ($order_details as $row) {
    $product_price = $row['product_price'];
    $product_quantity = $row['product_quantity'];

    $total = $total + ($product_price * $product_quantity);
  }

  return $total;
}
