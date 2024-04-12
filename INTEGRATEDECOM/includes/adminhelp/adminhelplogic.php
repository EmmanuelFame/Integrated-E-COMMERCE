<?php
if (!isset($_SESSION['admin_logged_in'])) {
  header("location: adminlogin.php");
  exit;
}
