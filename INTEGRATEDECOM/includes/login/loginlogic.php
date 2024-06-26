<?php
// session_start(); //I put it in the main component
include 'server/connection.php';

if (isset($_SESSION['logged_in'])) {
  header("location: account.php");
  exit;
}

if (isset($_POST['login_btn'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Hash the password
  $hashed_password = md5($password);

  // Prepare and execute the query
  $step = $conn->prepare("SELECT user_id, username, email, password FROM users WHERE email = ? AND password = ? LIMIT 1 ");
  $step->bind_param('ss', $email, $hashed_password);

  if ($step->execute()) {
    $step->bind_result($user_id, $username, $email, $password);
    $step->store_result();

    if ($step->num_rows() == 1) {
      $row = $step->fetch();
      $_SESSION['user_id'] = $user_id;
      $_SESSION['username'] = $username;
      $_SESSION['email'] = $email;
      $_SESSION['logged_in'] = true;
      // $_SESSION['password'] = $password;

      header("location: account.php?login_success=Logged in successfully");
      exit; // Always exit after a header redirect
    } else {
      header("location: login.php?error=Could not verify your account");
      exit; // Always exit after a header redirect
    }
  } else {
    header('location: login.php?error=Something went wrong');
    exit; // Always exit after a header redirect
  }
}
?>
