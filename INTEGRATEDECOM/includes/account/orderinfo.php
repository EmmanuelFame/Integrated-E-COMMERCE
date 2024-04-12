<section id="orders" class="container orders my-5 py-3">
<style>
  body{
    background-image: url("https://i.pinimg.com/564x/14/b2/4b/14b24be18178987b01ec93a04dd2e842.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
</style>
  <div class="mt-3">
    <h2 class="font-weight-bold text-center">Your Order</h2>
    <hr class="mx-auto" />
  </div>
  <table class="mt-5 pt-5 text-center">
    <tr>
      <th>Order Id</th>
      <th>Order cost </th>
      <th>Order Status </th>
      <th>Order Date</th>
      <th>Order Details</th>
    </tr>
    <?php
    while ($row = $orders->fetch_assoc()) { ?>
      <tr>
        <td>
          <span><?php echo $row['order_id'] ?></span>
        </td>
        <td>
          <span>$<?php echo $row['order_cost'] ?></span>
        </td>
        <td>
          <span><?php echo $row['order_status'] ?></span>
        </td>

        <td>
          <span> <?php echo $row['order_date'] ?></span>
        </td>
        <td>
          <form action="order_details.php" method="POST">
            <input  type="hidden" name="order_status" value="<?php echo $row['order_status'] ?>" />
            <input type="hidden" name="order_id" value="<?php echo $row['order_id'] ?>" />
            <input class="buttons ordersdetail-btn" type="submit" name="order-details-btn" value="details" />
          </form>
        <td>
      </tr>
    <?php } ?>
  </table>
</section>