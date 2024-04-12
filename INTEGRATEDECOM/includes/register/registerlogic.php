<?php
// session_start(); //I put it in the main component


if (isset($_SESSION['logged_in'])) {
  header("location: account.php");
  exit;
}


if (isset($_POST['register'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $confirmPassword = md5($_POST['confirmPassword']);

  if ($password !== $confirmPassword) {
    header("location: register.php?error=Passwords do not match ");
  } elseif (strlen($password) < 6) {
    header("location: register.php?error=password must be at least 6 characters long");
  } else {

    $step1 = $conn->prepare("SELECT count(*) FROM users WHERE email =? ");
    $step1->bind_param("s", $email);
    $step1->execute();
    $step1->bind_result($num_rows);
    $step1->store_result();
    $step1->fetch();

    if ($num_rows !== 0) {
      header("location: register.php?error=Email already exists");
    } else {
      $step = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?,?,?) ");

      $step->bind_param("sss", $name, $email, $password);
      if ($step->execute()) {
        $user_id = $step->insert_id;
        $_SESSION['user_id'] = $user_id;
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        $_SESSION['logged_in'] = true;
        header("location: account.php?register=You registered successfully");
      } else {
        header("location: register.php?error=Something went wrong, account could not be created");
      };
    }
  }
}
