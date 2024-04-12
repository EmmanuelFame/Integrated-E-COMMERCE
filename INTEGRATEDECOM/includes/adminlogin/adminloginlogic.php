<?php
// session_start(); //I put it in the main component
include 'server/connection.php';

if (isset($_SESSION['admin_logged_in'])) {
  header("location: admindashboard.php");
  exit;
}

if (isset($_POST['login_btn'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];

  // Hash the password
  $hashed_password = md5($password);

  // Prepare and execute the query
  $step = $conn->prepare("SELECT admin_id, admin_name, admin_email, admin_password FROM admins WHERE admin_email = ? AND admin_password = ? LIMIT 1 ");
  $step->bind_param('ss', $email, $hashed_password);

  if ($step->execute()) {
    $step->bind_result($admin_id, $admin_name, $admin_email, $admin_password);
    $step->store_result();

    if ($step->num_rows() == 1) {
      $row = $step->fetch();
      $_SESSION['admin_id'] = $admin_id;
      $_SESSION['admin_name'] = $admin_name;
      $_SESSION['admin_email'] = $admin_email;
      $_SESSION['admin_logged_in'] = true;

      header("location: admindashboard.php?login_success=Logged in successfully");
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
