<?php

/**
 * Unpaid, 
 * Paid, 
 * Shipped, 
 * Delivered, 
 * Cancelled
 */
if ($order_status == "Unpaid") { ?>
  <form style="text-align: center;" action="payment.php" method="POST">
    <input type="hidden" name="order_id" value="<?php echo $order_id; ?>" />
    <input type="hidden" name="order_total_price" value="<?php echo $order_total_price; ?>" />
    <input type="hidden" name="order_status" value="<?php echo $order_status; ?>" />

    <button type="submit" name="order_pay_btn" class="btn btn-primary mt-1">Pay Now</button>
  </form>



<?php } ?>