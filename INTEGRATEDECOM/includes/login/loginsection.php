<section class="my-2 py-2" style="outline: none;" >
  



<form id="login-form" action="login.php" method="POST">
  <p style="color: red;" class="text-center"><?php if (isset($_GET['error'])) {
    echo $_GET['error'];
  } ?>
</p">
  <div data-mdb-input-init class="form-outline mb-3">
    <label class="form-label" for="login-email">Email address</label>
    <input style="width: 100% !important; background-color:cadetblue;" type="email" id="login-email" name="email" class="form-control" />
    
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-3">
    <label class="form-label" for="login-password">Password</label>
    <input style="width: 100% !important; background-color:cadetblue;" type="password" id="login-password" name="password" class="form-control" />
    
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-3">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      
    </div>

    
  </div>

  <!-- Submit button -->
  <button type="submit" style="width: 100% !important;" value="login" name="login_btn" id="login-btn" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a id="register-url login-btn" href="register.php">Register</a></p>
  </div>
</form>

</section>
