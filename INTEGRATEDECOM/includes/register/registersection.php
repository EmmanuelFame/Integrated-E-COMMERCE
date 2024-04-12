<section class="my-5 py-5">
  <div class="container text-center mt-3 pt-5">
    <h2 class="form-weight-bold">Register</h2>
    <hr class="mx-auto" />
  </div>
  <div class="mx-auto container">
    <form id="register-form" action="register.php" method="POST">
      <p style="color:red;"><?php

                            if (isset($_GET['error'])) {
                              echo $_GET['error'];
                            }

                            ?></p>
      <div class="form-group">
        <label for="register-name">Name</label>
        <input type="text" style="width: 100% !important; background-color:cadetblue;" class="form-control" name="name" placeholder="Enter your name" id="register-name" />
        <div class="form-group">
          <label for="register-email">Email</label>
          <input type="email" style="width: 100% !important; background-color:cadetblue;" class="form-control" name="email" placeholder="Enter your email" id="register-email" />
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" style="width: 100% !important; background-color:cadetblue;" class="form-control" name="password" placeholder="Enter your password" id="register-password" />
        </div>
        <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" style="width: 100% !important; background-color:cadetblue;" class="form-control" name="confirmPassword" placeholder="Enter your password" id="register-confirm-password" />
        </div>
        <div class="form-group">
          <input type="submit" style="width: 100% !important;" class="btn" name="register" value="Register" id="register-btn" />
        </div>
        <div class="form-group">
          <a class="btn" id="login-url register-btn" href="login.php">Do you have an account? Login.</a>
        </div>
      </div>
    </form>
  </div>
</section>