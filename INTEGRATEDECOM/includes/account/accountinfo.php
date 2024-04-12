<section class="my-5 py-5">
  <div class="row container mx-auto">
    <?php if (isset($_GET['payment_message'])) { ?>
      <p class="mt-5 text-center" style="color: green"><?php echo $_GET['payment_message']; ?></p>
    <?php } ?>
    <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
      <p class="text-center" style="color: green"><?php if (isset($_GET['register_success'])) {
                                                    echo $_GET['register_success'];
                                                  } ?></p>
      <p class="text-center" style="color: green"><?php if (isset($_GET['login_success'])) {
                                                    echo $_GET['login_success'];
                                                  } ?></p>
      <h3 class="font-weight-bold">Account Info</h3>
      <hr class="mx-auto" />
      <div class="account-info">
        <p>Name: <span><?php if (isset($_SESSION['name'])) {
                          echo $_SESSION['name'];
                        } ?></span></p>
        <p>Email: <span> <?php if (isset($_SESSION['email'])) {
                            echo $_SESSION['email'];
                          } ?></span></p>
        <p><a href="#orders" id="orders-btn">Your orders</a></p>
        <p><a href="account.php?logout=1" id="logout-btn">Logout</a></p>
      </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-12">
      <form id="account-form" method="POST" action="account.php">
        <p class="text-center" style="color: red"><?php if (isset($_GET['error'])) {
                                                    echo $_GET['error'];
                                                  } ?></p>
        <p class="text-center" style="color: green"><?php if (isset($_GET['message'])) {
                                                      echo $_GET['message'];
                                                    } ?></p>

        <h3>Change Password</h3>
        <hr class="mx-auto" />
        <div class="form group">
          <label>Password</label>
          <input type="password" style="width: 100% !important; background-color:cadetblue;" class="form-control" id="account-password" placeholder="password" name="password" required />
        </div>
        <div class="form group">
          <label>Confirm Password</label>
          <input type="password" style="width: 100% !important; background-color:cadetblue;" class="form-control" id="account-password-confirm" placeholder="confirm password" name="confirmPassword" required />
        </div>
        <div class="form group">
          <input type="submit" style="width: 100% !important;" name="change_password" value="Change" class="btn" id="change-pass-btn" />
        </div>
      </form>
    </div>
  </div>
</section>