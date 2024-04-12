<?php


if (!isset($_SESSION['logged_in'])) {
  header('location: login.php');
  exit();
}

if (isset($_GET['logout'])) {
  if (isset($_SESSION['logged_in'])) {
    unset($_SESSION['logged_in']);
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['email']);
    header('location: login.php');
    exit();
  }
}

if (isset($_POST['change_password'])) {
  $password = md5($_POST['password']);
  $confirmPassword = md5($_POST['confirmPassword']);
  $email = $_SESSION['email'];

  if ($password !== $confirmPassword) {
    header("location: account.php?error=Passwords do not match ");
  } elseif (strlen($password) < 6) {
    header("location: account.php?error=password must be at least 6 characters long");
  } else {
    $step1 = $conn->prepare(" UPDATE  users SET password=? WHERE email=? ");
    $step1->bind_param("ss", $password, $email);
    if ($step1->execute()) {
      header("location: account.php?message=Your password has been updated successfully");
    } else {
      header("location: account.php?error=Could not update your password");
    };
  }
}


//getting orders to display in the account
if (isset($_SESSION['logged_in'])) {
  $user_id = $_SESSION['user_id'];
  $stmt = $conn->prepare("SELECT * FROM orders WHERE user_id=? ");
  $stmt->bind_param("i", $user_id);
  $stmt->execute();

  $orders = $stmt->get_result();
}
