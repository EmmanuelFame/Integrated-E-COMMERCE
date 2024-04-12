<div class="mx-auto container">
  <h2 class="text-center">Add Products.</h2>
  <form id="create-form" enctype="multipart/form-data" action="add_product.php" method="POST">
    <p style="color:red;"><?php

                          if (isset($_GET['error'])) {
                            echo $_GET['error'];
                          }

                          ?></p>
    <div class="form-group mt-2">

      <input type="hidden" name="product_id" value="product_id" />
      <label for="Title">Title</label>
      <input type="text" class="form-control" value="title" name="title" placeholder="Title" id="product-name" required />
      <div class="form-group mt-2">
        <label for="description">Description</label>
        <input type="text" class="form-control" name="description" value="description" placeholder="Description" id="product-description" />
      </div>
      <div class="form-group mt-2">
        <label>Price</label>
        <input type="number" class="form-control" name="price" value="price" placeholder="price" id="product-price" />
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
        <input type="text" class="form-control" name="color" value="color" placeholder="color" id="product-color" />

      </div>
      <div class="form-group mt-2">
        <label>Special Offer</label>
        <input type="text" class="form-control" name="special_offer" value="special_offer" placeholder="5" id="product-offer" />

      </div>
      <div class="form-group mt-2">
        <label>Image 1</label>
        <input type="file" class="form-control" name="image1" value="image1" placeholder="image1" id="image1" />

      </div>
      <div class="form-group mt-2">
        <label>Image 2</label>
        <input type="file" class="form-control" name="image2" value="image2" placeholder="image2" id="image2" />

      </div>
      <div class="form-group mt-2">
        <label>Image 3</label>
        <input type="file" class="form-control" name="image3" value="image3" placeholder="image3" id="image3" />

      </div>
      <div class="form-group mt-2">
        <label>Image 4</label>
        <input type="file" class="form-control" name="image4" value="image4" placeholder="image4" id="image4" />

      </div>
      <div class="form-group mt-3">
        <input type="submit" class="btn btn-primary" name="create_product" value="Create" id="add-btn" />
      </div>

    </div>
  </form>
</div>