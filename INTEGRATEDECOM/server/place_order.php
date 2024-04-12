<?php
session_start();
include('connection.php');

if (!isset($_SESSION['logged_in'])) {
  header('location: ../checkout.php?message=Please Login/Register to place an order');
  exit;
} else {

  if (isset($_POST['place_order'])) {
    //steps to take
    //1st get user info and store it in 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $address = $_POST['address'];

    $order_cost = $_SESSION['total'];
    $order_status = "Unpaid";
    $user_id = $_SESSION['user_id'];
    $order_date = date("Y-m-d H:i:s");

    $stmt = $conn->prepare("INSERT INTO orders (order_cost,order_status,user_id,user_phone,user_city,user_address,order_date)
                      VALUES (?,?,?,?,?,?,?); ");

    $stmt->bind_param('isiisss', $order_cost, $order_status, $user_id, $phone, $city, $address, $order_date);

    $stmt_status = $stmt->execute();


    if (!$stmt_status) {
      header("loaction: index.php");
      exit;
    }

    //2nd isue new order and store order in database
    $order_id = $stmt->insert_id;



    //3rd get product from cart(from session)

    $_SESSION['cart'];
    foreach ($_SESSION['cart'] as $key => $value) {
      $product = $_SESSION['cart'][$key];

      $product_id = $product['product_id'];
      $product_name = $product['product_name'];
      $product_image = $product['image_url'];
      $product_price = $product['price'];
      $product_quantity = $product['product_quantity'];

      //4th store each single items order_items in database
      $stmt1 = $conn->prepare("INSERT INTO order_items (order_id,product_id,product_name,product_image,product_price,product_quantity,user_id,order_date)
        VALUES (?,?,?,?,?,?,?,?); ");

      $stmt1->bind_param('iissiiis', $order_id, $product_id, $product_name, $product_image, $product_price, $product_quantity, $user_id, $order_date);

      $stmt1->execute();
    }




    //5th remove everything from cart
    // unset($_SESSION['cart']); //untill payment is made


    $_SESSION['order_id'] = $order_id;

    //6th inform usere wether the order was successfully created
    header('location: ../payment.php?order_status=Order placed successfully');
  }
}
