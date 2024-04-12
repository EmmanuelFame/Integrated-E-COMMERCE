<?php
if (!isset($_SESSION['admin_logged_in'])) {
  header("location: admindashboard.php");
  exit;
}


if (isset($_GET['product_id'])) {
  $product_id = $_GET['product_id'];

  $step = $conn->prepare("DELETE FROM products WHERE product_id=?");
  $step->bind_param("i", $product_id);
  if ($step->execute()) {
    header("location: adminproducts.php?deleted_success_message=Product deleted successfully");
  } else {
    header("location: adminproducts.php?deleted_failure_message=Could not delete product");
  }
}
