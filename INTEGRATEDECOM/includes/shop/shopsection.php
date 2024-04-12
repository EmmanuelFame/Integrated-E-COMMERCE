<section id="shop" class="featured">

  <div class="container my-5 py-5">

    <h1>Our Catalog</h1>

    <hr />
    <p>Here you can check out our products</p>
  </div>
  <div class="row mx-auto mint container-fluid">

    <?php while ($row = $products->fetch_assoc()) { ?>
      <div onclick="window.location.href='single_product.php?product_id=<?php echo $row['product_id']; ?>';" class="product col-lg-3 col-md-4 text-center col-sm-12">
        <img class="img-fluid mb-3" src="./assets/images/<?php echo $row['image_url']; ?>" />
        <div class="star">
          <i class="fa-solid fas fa-star"></i>
          <i class="fa-solid fas fa-star"></i>
          <i class="fa-solid fas fa-star"></i>
          <i class="fa-solid fas fa-star"></i>
          <i class="fa-solid fas fa-star"></i>
        </div>
        <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
        <h4 class="p-price mb-3">$<?php echo $row['price']; ?></h4>
        <a class="buy-btn buttons mt-2 mb-3 " style="text-decoration: none;" href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>">Buy now</a>
      </div>
    <?php } ?>

  </div>

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
</section>