<!-- Begin Page Content -->
<div class="container-fluid">
  <p class="text-center" style="color: green"><?php if (isset($_GET['login_success'])) {
                                                echo $_GET['login_success'];
                                              } ?></p>
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data from the database</h1>
  <p class="mb-4">Welcome to E~Commerce Dashboard</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Orders</h6>
      <p class="text-center font-weight-bold" style="color: green"><?php if (isset($_GET['edit_success_message'])) {
                                                                      echo $_GET['edit_success_message'];
                                                                    } ?></p>
      <p class="text-center font-weight-bold" style="color: green"><?php if (isset($_GET['edit_failure_message'])) {
                                                                      echo $_GET['edit_failure_message'];
                                                                    } ?></p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Order Id</th>
              <th>Order Status</th>
              <th>User Id</th>
              <th>Order Date</th>
              <th>User Phone</th>
              <th>User Address</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Order Id</th>
              <th>Order Status</th>
              <th>User Id</th>
              <th>Order Date</th>
              <th>User Phone</th>
              <th>User Address</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($orders as $order) { ?>
              <tr>
                <td><?php echo $order['order_id']; ?></td>
                <td><?php echo $order['order_status']; ?></td>
                <td><?php echo $order['user_id']; ?></td>
                <td><?php echo $order['order_date']; ?></td>
                <td><?php echo $order['user_phone']; ?></td>
                <td><?php echo $order['user_address']; ?></td>
                <td><a class="btn btn-primary" href="edit_order.php?order_id=<?php echo $order['order_id']; ?>">Edit</a></td>
                <td><a class="btn btn-primary" href="delete_order.php?order_id=<?php echo $order['order_id']; ?>">Delete</a></td>
              </tr>
            <?php } ?>

          </tbody>
        </table>


        <nav aria-label="Page navigation example">
          <ul class="pagination mt-5">
            <li class="page-item <?php if ($page_no <= 1) {
                                    echo 'disabled';
                                  } ?> ">
              <a class="page-link" href="<?php if ($page_no <= 1) {
                                            echo '#';
                                          } else {
                                            echo "?page_no=" . ($page_no - 1);
                                          } ?>">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="?page_no=1">1</a></li>
            <li class="page-item"><a class="page-link" href="?page_no=2">2</a></li>

            <?php if ($page_no >= 3) { ?>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="<?php echo "?page_no=" . ($page_no); ?>"><?php echo $page_no; ?></a></li>
            <?php } ?>


            <li class="page-item <?php if ($page_no >= $total_no_of_pages) {
                                    echo 'disabled';
                                  } ?> ">
              <a class="page-link" href="<?php if ($page_no >= $total_no_of_pages) {
                                            echo '#';
                                          } else {
                                            echo "?page_no=" . ($page_no + 1);
                                          } ?>">Next</a>
            </li>
          </ul>
        </nav>

      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->