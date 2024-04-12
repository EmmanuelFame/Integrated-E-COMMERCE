<section class="cart container my-5 py-5">
  <div class="container mt-5">
    <h2 class="font-weight-bold">Your Cart</h2>
    <hr />
  </div>
  <table class="mt-5 pt-5">
    <tr style="background-color:purple;" class="tablehead">
      <th>Product</th>
      <th>Quantity</th>
      <th>Subtotal</th>
    </tr>

    <?php if (isset($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $key => $value) { ?>
        <tr>
          <td>
            <div class="product-info">
              <img src="./assets/images/<?php echo $value['image_url'] ?>" />
              <div>
                <p>
                  <?php echo $value['product_name'] ?>
                </p>
                <small><span>$</span>
                  <?php echo $value['price'] ?>
                </small>
                <br />
                <form method="post" action="">
                  <input type="hidden" name="product_id" value="<?php echo $value['product_id'] ?>" />
                  <input type="submit" name="remove_product" class="remove-btn" value="remove" />
                </form>
              </div>
            </div>
          </td>
          <td>

            <form method="POST" action="cart.php">
              <input type="number" name="product_quantity" value="<?php echo $value['product_quantity'] ?>" />
              <input type="hidden" name="product_id" value="<?php echo $value['product_id'] ?>" />
              <input type="submit" class="edit-btn" value="edit" name="edit_quantity" />
            </form>
          </td>
          <td>
            <span>$</span>
            <span class="product-price">
              <?php echo $value['product_quantity'] * $value['price'] ?>
            </span>
          </td>
        </tr>

    <?php }
    } ?>

  </table>

  <div class="cart-total">
    <table>
      <!-- <tr>
          <td>Subtotal</td>
          <td>$300</td>
        </tr> -->
      <tr>
        <td>Total</td>
        <td>$
          <?php if (isset($_SESSION['total'])) {
            echo $_SESSION['total'];
          } ?>
        </td>
      </tr>
    </table>
  </div>
  <div class="checkout-container">
    <form method="POST" action="checkout.php">
      <input value="checkout" type="submit" name="checkout " style="color:white; font-size: 1.2rem; background-color:black;" class="btn " />
    </form>

  </div>
</section>