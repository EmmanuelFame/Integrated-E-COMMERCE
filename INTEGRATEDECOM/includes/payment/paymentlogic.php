<?php
// session_start(); //I put it in the main component
if (!empty($_SESSION['order_pay_btn'])) {
  $order_status =  $_POST['order_status'];
  $order_total_price = $_POST['order_total_price'];

  header('Location: payment.php');
} else {
  // header('location: index.php');
}
