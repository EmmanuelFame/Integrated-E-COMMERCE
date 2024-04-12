<?php
if (isset($_GET['product_id'])) {
  $product_id = $_GET['product_id'];
  $step = $conn->prepare("SELECT * FROM products WHERE product_id=?");
  $step->bind_param("i", $product_id);
  $step->execute();
  $products = $step->get_result();
} else if (isset($_POST['edit_btn'])) {
  $product_id = $_POST['product_id'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $category = $_POST['category'];
  $color = $_POST['color'];
  $offer = $_POST['offer'];

  $step = $conn->prepare(" UPDATE  products SET product_name=?, description=?, price=?, category=?, color=?, special_offer=? WHERE product_id=? ");
  $step->bind_param("ssssssi", $title, $description, $price, $category, $color, $offer, $product_id);
  if ($step->execute()) {
    header('location: adminproducts.php?edit_success_message=Product has been updated successfully');
    exit;
  } else {
    header('location: adminproducts.php?edit_failure_message=Could not update product');
    exit;
  }
} else {
  header('adminproducts.php');
  exit;
}
