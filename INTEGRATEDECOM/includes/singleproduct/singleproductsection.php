<section class="container single-product my-5 pt-5">
  <div class="row mt-5">

    <?php while ($row = $product->fetch_assoc()) { ?>


      <div class="col-lg-5  col-md-6 col-sm-12">
        <img style="height: 400px!important; width:400px!important;border-radius: 5%;
  margin-bottom: 1rem;
  transition: 0.3s all;" class="img-fluid  w-100 pb-1" src="./assets/images/<?php echo $row['image_url'] ?>" id="mainImage" />
        <div class="small-img-group">
          <div class="small-img-col">
            <img src="assets/images/<?php echo $row['image_url'] ?>" width="100%" class="small-img" />
          </div>
          <div class="small-img-col">
            <img src="assets/images/<?php echo $row['image_url4'] ?>" width="100%" class="small-img" />
          </div>
          <div class="small-img-col">
            <img src="assets/images/<?php echo $row['image_url2'] ?>" width="100%" class="small-img" />
          </div>
          <div class="small-img-col">
            <img src="assets/images/<?php echo $row['image_url3'] ?>" width="100%" class="small-img" />
          </div>
        </div>
      </div>


      <div class="col-lg-6 col-md-12 col-12">
        <h6> </h6>
        <h3 class="py-4">
          <?php echo $row['product_name'] ?>
        </h3>
        <h2>$
          <?php echo $row['price'] ?>
        </h2>
        <form method="POST" action="cart.php">
          <input type="hidden" name="product_id"  value="<?php echo $row['product_id'] ?>" />
          <input type="hidden" name="image_url" value="<?php echo $row['image_url'] ?>" />
          <input type="hidden" name="price" value="<?php echo $row['price'] ?>" />
          <input type="hidden" name="product_name" value="<?php echo $row['product_name'] ?>" />
          <input type="number" name="product_quantity" value="1" />
          <button style="backround-color:purple !important; color:blue;" class="btn-danger btn" type="submit" name="add_to_cart">Add to Cart</button>
        </form>
        <h4 class="mt-5 mb-5">Product Details</h4>
        <span>
          <?php echo $row['description'] ?>
        </span>
      </div>

    <?php } ?>
  </div>
</section>