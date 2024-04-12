<button class="btn btn-primary mx-auto mt-5" style="z-index: 10; position: relative; background-color: purple; color: white; display:flex; justify-content: center; align-items: center; border: none; width: 100px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><strong>Search</strong><img src="assets/images/filter.svg" alt="Filter" /></button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Search Products</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <section id="search" class=" ms-2">
      <div class="container mt-5 py-5">
        <p>Search Products</p>
        <hr>
      </div>

      <form action="shop.php" method="POST">
        <div class="row mx-auto container">
          <div class="col-lg-12 col-md-12 col-sm-12">

            <p>Category</p>
            <div class="form-check">
              <input class="form-check-input" value="shoe" type="radio" name="category" id="category_one" <?php if (isset($category) && $category == 'shoe') {
                                                                                                            echo 'checked';
                                                                                                          } ?>>
              <label class="form-check-label" for="flexCheckDefault1"></label>
              Shoes
            </div>
            <div class="form-check">
              <input class="form-check-input" value="jacket" type="radio" name="category" id="category_two" <?php if (isset($category) && $category == 'jacket') {
                                                                                                              echo 'checked';
                                                                                                            } ?>>
              <label class="form-check-label" for="flexCheckDefault2"></label>
              Jackets
            </div>
            <div class="form-check">
              <input class="form-check-input" value="gadget" type="radio" name="category" id="category_three" <?php if (isset($category) && $category == 'gadget') {
                                                                                                                echo 'checked';
                                                                                                              } ?>>
              <label class="form-check-label" for="flexCheckDefault3"></label>
              Gadgets
            </div>
            <div class="form-check">
              <input class="form-check-input" value="shirt" type="radio" name="category" id="category_four" <?php if (isset($category) && $category == 'shirt') {
                                                                                                              echo 'checked';
                                                                                                            } ?>>
              <label class="form-check-label" for="flexCheckDefault4"></label>
              Shirts
            </div>
          </div>
        </div>



        <div class="row mx-auto container">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <p>Price</p>
            <input type="range" id="customRange2" min="1" name="price" value="<?php if (isset($price)) {
                                                                                echo $price;
                                                                              } else {
                                                                                echo "100";
                                                                              } ?>" max="1000" class="form-range w-50" />
            <div class="w-50">
              <span style="float: left;">$1</span>
              <span style="float: right;">$1000</span>
            </div>
          </div>
        </div>


        <div class="form-group my-3 mx-3">
          <input type="submit" name="search" value="Search" class="btn btn-primary">
        </div>





  </div>
  </form>


  </section>
</div>
</div>