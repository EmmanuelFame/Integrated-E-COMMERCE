<?php

if (!isset($_SESSION['admin_logged_in'])) {
  header("location: adminlogin.php");
  exit;
}

if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
  //if user has already entered page then)
  $page_no = $_GET["page_no"];
} else {
  $page_no = 1;
}


$step = $conn->prepare("SELECT COUNT(*) As total_records FROM orders");
$step->execute();
$step->bind_result($total_records);
$step->store_result();
$step->fetch();

$total_records_per_page = 3;
$offset = ($page_no - 1) * $total_records_per_page;

$previous_page = $page_no - 1;
$next_page = $page_no + 1;

$adjacents = "3";

$total_no_of_pages = ceil($total_records / $total_records_per_page);

$stmt1 = $conn->prepare("SELECT * FROM orders LIMIT $offset, $total_records_per_page ");
$stmt1->execute();
$orders = $stmt1->get_result();
