<?php


if (isset($_POST['search']) && isset($_POST['category'])) {

  if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
    //if user has already entered page then)
    $page_no = $_GET["page_no"];
  } else {
    $page_no = 1;
  }

  $price = $_POST['price'];
  $category = $_POST['category'];

  $step = $conn->prepare("SELECT COUNT(*) As total_records FROM products WHERE category=? AND price <=?");
  $step->bind_param("si", $category, $price);
  $step->execute();
  $step->bind_result($total_records);
  $step->store_result();
  $step->fetch();

  $total_records_per_page = 8;
  $offset = ($page_no - 1) * $total_records_per_page;

  $previous_page = $page_no - 1;
  $next_page = $page_no + 1;

  $adjacents = "8";

  $total_no_of_pages = ceil($total_records / $total_records_per_page);

  $stmt1 = $conn->prepare("SELECT * FROM products WHERE category=? AND price <=?  LIMIT $offset, $total_records_per_page ");
  $stmt1->bind_param("si", $category, $price);
  $stmt1->execute();
  $products = $stmt1->get_result();
} else {
  // //return all products from database if the products are small
  // $stmt = $conn->prepare("SELECT * FROM products");
  // $stmt->execute();

  // $products = $stmt->get_result();

  if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
    //if user has already entered page then)
    $page_no = $_GET["page_no"];
  } else {
    $page_no = 1;
  }

  //return total number of products in database
  $stmt = $conn->prepare("SELECT COUNT(*) As total_records FROM products");
  $stmt->execute();
  $stmt->bind_result($total_records);
  $stmt->store_result();
  $stmt->fetch();


  //concept of pagination
  $total_records_per_page = 8;
  $offset = ($page_no - 1) * $total_records_per_page;

  $previous_page = $page_no - 1;
  $next_page = $page_no + 1;

  $adjacents = "8";

  $total_no_of_pages = ceil($total_records / $total_records_per_page);

  //get all products
  $stmt1 = $conn->prepare("SELECT * FROM products  LIMIT $offset, $total_records_per_page ");
  $stmt1->execute();
  $products = $stmt1->get_result();
}
