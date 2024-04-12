<section id="orders" class="orders container my-5 pt-5 py-3">
  <div class="container mt-5">
    <h2 class="font-weight-bold text-center">Order Details</h2>
    <hr class="mx-auto" />
  </div>
  <table class="mt-5 pt-5 mx-auto">
    <tr>
      <th>Product Name</th>
      <th>Price</th>
      <th>Quantity</th>

    </tr>
    <?php
    foreach ($order_details as $row) { ?>
      <tr>
        <td>
          <div class="product-info">
            <img src="assets/images/<?php echo $row['product_image']; ?>">
            <span></span>
            <div>
              <p class="mt-3"><?php echo $row['product_name']; ?></p>
            </div>
          </div>
        </td>
        <td>
          <span>$<?php echo $row['product_price']; ?></span>
        </td>
        <td>
          <span><?php echo $row['product_quantity']; ?></span>
        </td>

      </tr>
    <?php } ?>

  </table>



</section>