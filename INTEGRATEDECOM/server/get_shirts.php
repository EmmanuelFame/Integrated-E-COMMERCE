<?php

include('connection.php');

$stmt = $conn->prepare("SELECT * FROM products WHERE category='shirt' LIMIT 4");
$stmt->execute();

$shirts = $stmt->get_result();
