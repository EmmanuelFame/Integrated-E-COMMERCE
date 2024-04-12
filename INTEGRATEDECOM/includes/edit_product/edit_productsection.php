<div class="mx-auto container">
  <h2 class="text-center">Edit Products.</h2>
  <form id="edit-form" action="edit_product.php" method="POST">
    <p style="color:red;"><?php

                          if (isset($_GET['error'])) {
                            echo $_GET['error'];
                          }

                          ?></p>
    <div class="form-group mt-2">
      <?php foreach ($products as $product) { ?>
        <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>" />
        <label for="Title">Title</label>
        <input type="text" class="form-control" value="<?php echo $product['product_name']; ?>" name="title" placeholder="Title" id="product-name" required />
        <div class="form-group mt-2">
          <label for="description">Description</label>
          <input type="text" class="form-control" name="description" value="<?php echo $product['description']; ?>" placeholder="Description" id="product-description" />
        </div>
        <div class="form-group mt-2">
          <label>Price</label>
          <input type="number" class="form-control" name="price" value="<?php echo $product['price']; ?>" placeholder="price" id="product-price" />
        </div>
        <div class="form-group mt-2">
          <label>Category</label>
          <select class="form-select" required name="category" id="product-category">
            <option value="shirt">shirt</option>
            <option value="jacket">jacket</option>
            <option value="shoe">shoe</option>
            <option value="gadget">gadget</option>

          </select>
        </div>
        <div class="form-group mt-2">
          <label>Color</label>
          <input type="text" class="form-control" name="color" value="<?php echo $product['color']; ?>" placeholder="color" id="product-color" />
        </div>
        <div class="form-group mt-2">
          <label>Special Offer/Sale</label>
          <input type="number" class="form-control" name="offer" value="<?php echo $product['special_offer']; ?>" placeholder="sale %" id="product-offer" />
        </div>

        <div class="form-group mt-3">
          <input type="submit" class="btn btn-primary" name="edit_btn" value="Edit" id="edit-btn" />
        </div>
      <?php } ?>
    </div>
  </form>
</div>