<div class="mx-auto container">
  <h2 class="text-center">Edit Orders.</h2>
  <form id="edit-order-form" action="edit_order.php" method="POST">
    <?php foreach ($orders as $order) { ?>
      <p style="color:red;"><?php

                            if (isset($_GET['error'])) {
                              echo $_GET['error'];
                            }

                            ?></p>
      <div class="form-group mt-3">
        <label>Order Id</label>
        <p class="my-4"><?php echo $order['order_id']; ?></p>
      </div>
      <div class="form-group mt-3">
        <label>Order Price</label>
        <p class="my-4"><?php echo $order['order_cost']; ?></p>
      </div>
      <input type="hidden" name="order_id" value="<?php echo $order['order_id']; ?>">
      <div class="form-group mt-3">
        <label>Order Status</label>
        <select class="form-select mt-3" required name="order_status">

          <option <?php if ($order['order_status'] == 'Unpaid') {
                    echo 'selected';
                  } ?> value="Unpaid"> Unpaid</option>
          <option <?php if ($order['order_status'] == 'Paid') {
                    echo 'selected';
                  } ?> value="Paid">Paid</option>
          <option <?php if ($order['order_status'] == 'Shipped') {
                    echo 'selected';
                  } ?> value="Shipped">Shipped</option>
          <option <?php if ($order['order_status'] == 'Delivered') {
                    echo 'selected';
                  } ?> value="Delivered">Delivered</option>
        </select>
      </div>
      <div class="form-group mt-3">
        <label>Order Date</label>
        <p class="my-4"><?php echo $order['order_date']; ?></p>
      </div>


      <div class="form-group mt-3">
        <input type="submit" class="btn btn-primary" name="edit_order" value="Edit" id="edit-btn" />
      </div>
    <?php } ?>

</div>
</form>
</div>