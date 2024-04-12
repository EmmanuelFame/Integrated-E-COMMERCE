<?php
session_start();
include('connection.php');


if (isset($_GET['transaction_id']) && isset($_GET['order_id'])) {
  $order_id = $_GET['order_id'];
  $transaction_id = $_GET['transaction_id'];
  $order_status = "Paid";
  $user_id = $_SESSION['user_id'];
  $payment_date = date("Y-m-d H:i:s");



  //1. change order status to paid
  $step1 = $conn->prepare(" UPDATE  orders SET order_status=? WHERE order_id=? ");
  $step1->bind_param("si", $order_status, $order_id);

  $step1->execute();

  //2. Store payment information in the database
  $step2 = $conn->prepare("INSERT INTO payments (order_id,user_id,transaction_id,payment_date)
                      VALUES (?,?,?,?); ");

  $step2->bind_param('iiss', $order_id, $user_id, $transaction_id, $payment_date);
  $step2->execute();

  //3. go to user Account. 
  header("location: ../account.php?payment_message=Payment Successful, Thanks for your patronage💝");
} else {
  header("location: index.php");
  exit;
}
