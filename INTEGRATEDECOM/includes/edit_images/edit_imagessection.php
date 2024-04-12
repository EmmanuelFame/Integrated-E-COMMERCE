<div class="mx-auto container">
  <h2 class="text-center">Edit Images.</h2>
  <form id="create-form" enctype="multipart/form-data" action="edit_images.php" method="POST">
    <p style="color:red;"><?php

                          if (isset($_GET['error'])) {
                            echo $_GET['error'];
                          }

                          ?></p>

    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
    <input type="hidden" name="product_name" value="<?php echo $product_name; ?>" />
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
      <input type="submit" class="btn btn-primary" name="update_images" value="Update" id="update-btn" />
    </div>

</div>
</form>
</div>