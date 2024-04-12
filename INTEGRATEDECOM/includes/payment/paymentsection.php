<section class="my-5 py-5">
  <div class="container text-center mt-3 pt-5">
    <h2 class="form-weight-bold">Payment</h2>
    <hr class="mx-auto" />
  </div>
  <div style="width: auto;" class="mx-auto container text-center">



    <?php if (isset($_POST['order_status']) && $_POST['order_status'] == 'Unpaid') { ?>
      <?php $ammount = strval($_POST['order_total_price']); ?>
      <?php $order_id = $_POST['order_id']; ?>
      <p>Total Payment: $ <?php echo $_POST['order_total_price']; ?></p>
      </p>
      <!-- <input type="submit" class="btn btn-primary buttons" value="Pay Now" /> -->
      <!-- Set up a container element for the button -->
      <div style="width: 270px; margin: auto; display: block; float:none;" id="paypal-button-container"></div>


    <?php } else if (isset($_SESSION['total']) && $_SESSION['total'] != 0) { ?>
      <?php $ammount = strval($_SESSION['total']); ?>
      <?php $order_id = $_SESSION['order_id']; ?>
      <p>Total Payment: $ <?php echo $_SESSION['total']; ?></p>
      <!-- <input type="submit" class="btn btn-primary buttons" value="Pay Now" /> -->
      <!-- Set up a container element for the button -->
      <div style="width: 270px; margin: auto; display: block; float:none;" id="paypal-button-container"></div>




    <?php } else { ?>
      <p>Please add items to cart</p>

    <?php } ?>






  </div>
</section>