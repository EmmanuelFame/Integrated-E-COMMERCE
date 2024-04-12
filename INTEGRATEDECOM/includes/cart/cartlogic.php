<?php

// session_start(); //I put it in the main component cart.php file
if (isset($_POST['add_to_cart'])) {

  if (isset($_SESSION['cart'])) {

    $product_array_ids = array_column($_SESSION['cart'], "product_id");
    if (!in_array($_POST['product_id'], $product_array_ids)) {

      $product_id = $_POST['product_id'];

      $product_array = array(
        'product_id' => $_POST['product_id'],
        'product_name' => $_POST['product_name'],
        'price' => $_POST['price'],
        'product_quantity' => $_POST['product_quantity'],
        'image_url' => $_POST['image_url']
      );

      $_SESSION['cart'][$product_id] = $product_array;
    } else {
      echo "<script>alert('This product is already in your cart!')</script>";
    }
  } else {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $product_quantity = $_POST['product_quantity'];
    $image_url = $_POST['image_url'];

    $product_array = array(
      'product_id' => $product_id,
      'product_name' => $product_name,
      'price' => $price,
      'product_quantity' => $product_quantity,
      'image_url' => $image_url
    );

    $_SESSION['cart'][$product_id] = $product_array;
  }


  calculateTotalCart();
} else if (isset($_POST['remove_product'])) {

  $product_id = $_POST['product_id'];

  unset($_SESSION['cart'][$product_id]);

  calculateTotalCart();
} elseif (isset($_POST['edit_quantity'])) {
  //getting the quantity from the form
  $product_id = $_POST['product_id'];
  $product_quantity = $_POST['product_quantity'];

  //getting the product array from the session
  $product_array = $_SESSION['cart'][$product_id];


  //updating the product quantity to the new value
  $product_array['product_quantity'] = $product_quantity;

  //setting the value back into session
  $_SESSION['cart'][$product_id] = $product_array;

  calculateTotalCart();
} else {
  // header('location:index.php');
}


function calculateTotalCart()
{
  $total_price = 0;
  $total_quantity = 0;

  foreach ($_SESSION['cart'] as $key => $value) {
    $product = $_SESSION['cart'][$key];


    $quantity = $product['product_quantity'];
    $price = $product['price'];

    $total_price = $total_price + ($quantity * $price);
    $total_quantity = $total_quantity + $quantity;
  }

  $_SESSION['total'] = $total_price;
  $_SESSION['quantity'] = $total_quantity;
}
