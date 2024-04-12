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
      <h6 class="m-0 font-weight-bold text-primary">Products</h6>
      <p class="text-center font-weight-bold" style="color: green"><?php if (isset($_GET['edit_success_message'])) {
                                                                      echo $_GET['edit_success_message'];
                                                                    } ?></p>
      <p class="text-center font-weight-bold" style="color: green"><?php if (isset($_GET['deleted_success_message'])) {
                                                                      echo $_GET['deleted_success_message'];
                                                                    } ?></p>
      <p class="text-center font-weight-bold" style="color: red"><?php if (isset($_GET['edit_failure_message'])) {
                                                                    echo $_GET['edit_failure_message'];
                                                                  } ?></p>
      <p class="text-center font-weight-bold" style="color: red"><?php if (isset($_GET['deleted_failure_message'])) {
                                                                    echo $_GET['deleted_failure_message'];
                                                                  } ?></p>
      <p class="text-center font-weight-bold" style="color: green"><?php if (isset($_GET['product_created'])) {
                                                                      echo $_GET['product_created'];
                                                                    } ?></p>
      <p class="text-center font-weight-bold" style="color: red"><?php if (isset($_GET['product_failed'])) {
                                                                    echo $_GET['product_failed'];
                                                                  } ?></p>
      <p class="text-center font-weight-bold" style="color: green"><?php if (isset($_GET['images_updated'])) {
                                                                      echo $_GET['images_updated'];
                                                                    } ?></p>
      <p class="text-center font-weight-bold" style="color: red"><?php if (isset($_GET['images_failed'])) {
                                                                    echo $_GET['images_failed'];
                                                                  } ?></p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Product Id</th>
              <th>Product Image</th>
              <th>Product Name</th>
              <th>Product Price</th>
              <th>Product Offer</th>
              <th>Product Category</th>
              <th>Product Description</th>
              <th>Edit Images</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Product Id</th>
              <th>Product Image</th>
              <th>Product Name</th>
              <th>Product Price</th>
              <th>Product Offer</th>
              <th>Product Category</th>
              <th>Product Description</th>
              <th>Edit Images</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </tfoot>
          <tbody>

            <?php foreach ($products as $products) { ?>
              <tr>
                <td><?php echo $products['product_id']; ?></td>
                <td><img style="height: 70px; width: 70;" src="<?php echo "./assets/images/" . $products['image_url']; ?>" /></td>
                <td><?php echo $products['product_name']; ?></td>
                <td><?php echo "$" . $products['price']; ?></td>
                <td><?php echo $products['special_offer'] . "%"; ?></td>
                <td><?php echo $products['category']; ?></td>
                <td><?php echo $products['description']; ?></td>

                <td><a class="btn btn-warning" href="<?php echo "edit_images.php?product_id=" . $products['product_id'] . "&product_name=" . $products['product_name']; ?>">Edit</a></td>

                <td><a class="btn btn-primary" href="<?php echo "edit_product.php?product_id=" . $products['product_id'] . "&product_name=" . $products['product_name']; ?>">Edit</a></td>

                <td><a class="btn btn-primary" href="delete_product.php?product_id=<?php echo $products['product_id']; ?>">Delete</a></td>
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