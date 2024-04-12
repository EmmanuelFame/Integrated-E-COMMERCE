<?php
if (isset($_GET['order_id'])) {
  $order_id = $_GET['order_id'];
  $step = $conn->prepare("SELECT * FROM orders WHERE order_id=?");
  $step->bind_param("i", $order_id);
  $step->execute();
  $orders = $step->get_result();
} else if (isset($_POST['edit_order'])) {

  $order_id = $_POST['order_id'];
  $order_status = $_POST['order_status'];


  $step = $conn->prepare(" UPDATE  orders SET order_status=? WHERE order_id=? ");
  $step->bind_param("si", $order_status, $order_id);
  if ($step->execute()) {
    header('location: admindashboard.php?edit_success_message=Order has been updated successfully');
    exit;
  } else {
    header('location: admindashboard.php?edit_failure_message=Could not update order');
    exit;
  }
} else {
  header('location: admindashboard.php');
  exit;
}
