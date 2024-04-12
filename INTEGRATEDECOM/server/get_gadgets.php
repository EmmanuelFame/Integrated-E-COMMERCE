<?php

include('connection.php');

$stmt = $conn->prepare("SELECT * FROM products WHERE category='gadget' LIMIT 4");
$stmt->execute();

$gadgets = $stmt->get_result();
