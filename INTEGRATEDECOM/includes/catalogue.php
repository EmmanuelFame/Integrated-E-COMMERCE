<section class="featured">
    <div class="container text-center my-5 pb-5">
        <h1>Our Catalogue</h1>
        <h3><span>Featured</span> Products</h3>
        <hr class="mx-auto" />
        <p>Here you can check out our featured products</p>
    </div>
    <div class="row mx-auto mint container-fluid">
        <?php include 'server/get_featured_products.php'; ?>
        <?php while ($row = $featured_products->fetch_assoc()) { ?>


        <div class="product  card col-lg-3 col-md-4 text-center col-sm-12">
            <img class="img-fluid mb-3 hover-zoom ripple ripple-surface ripple-surface-light"
                src="./assets/images/<?php echo $row['image_url']; ?>" />
            <div class="star">
                <i class="fa-solid fas fa-star"></i>
                <i class="fa-solid fas fa-star"></i>
                <i class="fa-solid fas fa-star"></i>
                <i class="fa-solid fas fa-star"></i>
                <i class="fa-solid fas fa-star"></i>
            </div>
            <h5 class="p-name card-title">
                <?php echo $row['product_name']; ?>
            </h5>
            <h4 class="p-price">
                $
                <?php echo $row['price']; ?>
            </h4>
            <a href="<?php echo 'single_product.php?product_id=' . $row['product_id']; ?>"><button class="buy-btn buttons mb-3">Buy now</button></a>
        </div>

        <?php } ?>
    </div>
</section>