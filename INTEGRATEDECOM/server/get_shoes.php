<?php

include('connection.php');

$stmt = $conn->prepare("SELECT * FROM products WHERE category='shoe' LIMIT 4");
$stmt->execute();

$shoes = $stmt->get_result();
