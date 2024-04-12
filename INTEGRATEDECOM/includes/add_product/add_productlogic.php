<?php

if (isset($_POST['create_product'])) {

  $product_name = $_POST['title'];
  $product_description = $_POST['description'];
  $product_price = $_POST['price'];
  $product_category = $_POST['category'];
  $product_color = $_POST['color'];
  $product_offer = $_POST['special_offer'];

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


  $step = $conn->prepare("INSERT INTO products (product_name,description,price,category,color,special_offer,image_url,image_url2,image_url3,image_url4)
    VALUES (?,?,?,?,?,?,?,?,?,?); 
   ");
  $step->bind_param('ssssssssss', $product_name, $product_description, $product_price, $product_category, $product_color, $product_offer, $image_name1, $image_name2, $image_name3, $image_name4);

  if ($step->execute()) {
    header("location: adminproducts.php?product_created=Product has been created successfully");
  } else {
    header("location: adminproducts.php?product_failed=Something went wrong");
  };
}
