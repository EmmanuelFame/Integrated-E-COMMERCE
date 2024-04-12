<?php
if (isset($_GET['product_id'])) {
  $product_id = $_GET['product_id'];
  $product_name = $_GET['product_name'];
} else if (isset($_POST['update_images'])) {

  $product_id = $_POST['product_id'];
  $product_name = $_POST['product_name'];

  //this are the image files itself
  $image1 = $_FILES['image1']['tmp_name'];
  $image2 = $_FILES['image2']['tmp_name'];
  $image3 = $_FILES['image3']['tmp_name'];
  $image4 = $_FILES['image4']['tmp_name'];

  //This are the image urls
  $image_name1 = $product_name . "1.jpeg"; //Blue Shirt1.jpeg
  $image_name2 = $product_name . "2.jpeg"; //Blue Shirt2.jpeg
  $image_name3 = $product_name . "3.jpeg";
  $image_name4 = $product_name . "4.jpeg";



  move_uploaded_file($image1, "./assets/images/" . $image_name1);
  move_uploaded_file($image2, "./assets/images/" . $image_name2);
  move_uploaded_file($image3, "./assets/images/" . $image_name3);
  move_uploaded_file($image4, "./assets/images/" . $image_name4);


  $step = $conn->prepare("UPDATE products SET image_url=?,image_url2=?,image_url3=?,image_url4=? WHERE product_id=?");
  $step->bind_param('ssssi', $image_name1, $image_name2, $image_name3, $image_name4, $product_id);

  if ($step->execute()) {
    header("location: adminproducts.php?images_updated=Images have been updated successfully");
  } else {
    header("location: adminproducts.php?images_failed=Something went wrong");
  }
} else {
  header("location: adminproducts.php");
}
