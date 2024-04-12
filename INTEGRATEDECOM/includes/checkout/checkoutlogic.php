<?php
// session_start(); //I put it in the main component

if (!empty($_SESSION['cart'])) {
} else {
  header('location: index.php');
}
