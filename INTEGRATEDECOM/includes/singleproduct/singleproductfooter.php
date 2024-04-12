<!-- <footer class="mt-5 py-5">
  <div class="row container mx-auto pt-5">
    <div class="col-lg-3 col-md-6 col-sm-12">
      <img class="logo" src="./assets/images/logo.png" />
      <p class="pt-3">
        We have the best products available at affordable prices
      </p>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
      <h5 class="pb-2">Featured</h5>
      <ul class="text-uppercase">
        <li><a href="#">Men</a></li>
        <li><a href="#">Women</a></li>
        <li><a href="#">Boys</a></li>
        <li><a href="#">Girls</a></li>
        <li><a href="#">Clothes</a></li>
      </ul>
    </div>
    <div class="address col-lg-3 col-md-6 col-sm-12">
      <h5 class="pb-2">Contact Us</h5>
      <div>
        <h6 class="text-uppercase">Address</h6>
        <p>5434 LingoStan, Jupiter.</p>
      </div>
      <div>
        <h6 class="text-uppercase">Phone</h6>
        <p>123 654 789 00</p>
      </div>
      <div>
        <h6 class="text-uppercase">Email</h6>
        <p>emmanueltest@gmail.com</p>
      </div>
    </div>
    <div class="footer-one col-lg-3 col-md-6 col-sm-12">
      <h5 class="pb-2">Instagram</h5>
      <div class="row">
        <img src="./assets/images/gad5.jpg" class="img-fluid w-25 h-100 m-2" />
        />
        <img src="./assets/images/pro1 (9).jpg" class="img-fluid w-25 h-100 m-2" />
        <img src="./assets/images/coat1 (2).jpg" class="img-fluid w-25 h-100 m-2" />
        <img src="./assets/images/pro1 (11).jpg" class="img-fluid w-25 h-100 m-2" />
        <img src="./assets/images/product1.jpg" class="img-fluid w-25 h-100 m-2" />
      </div>
    </div>
    <div class="copyright mt-5">
      <div class="row container mx-auto">
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
          <img src="./assets/images/mastercard.jpg" />
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 text-nowrap mb-2">
          <p>E~Commerce @ 2024 All Rights Reserved</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<script>
  var mainImage = document.getElementById("mainImage")
  var smallImage = document.getElementsByClassName("small-img")

  for (let i = 0; i < 4; i++) {
    smallImage[i].onclick = function() {
      mainImage.src = smallImage[i].src
    }
  }
</script>
</body>
</html> -->







<section id="cta" class="mt-3" style="background-color:purple;">
    <!--Flex Container-->
    <div class="container flex flex-col items-center justify-between px-6 py-24 mx-auto space-y-12 md:py-12 md:flex-row md:space-y-0">
      <!--Heading-->
      <h2 class="text-5xl font-bold leading-tight text-center text-white md:text-4xl md:max-w-xl md:text-left">
        Register and start shopping with us now
      </h2>
      <!--button-->
      <div>
        <a href="register.php" class="p-3 px-6 pt-2 bg-white rounded-full shadow-2xl text-brightRed baseline hover:bg-gray-900 ">Get Started</a>
      </div>
    </div>
  </section>
<footer class="bg-veryDarkBlue">
    <!--main flex-container -->
    <div class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0">
      <!--Logo and social links container-->
      <div class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start">
        <div class="mx-auto my-6 text-center text-white md:hidden">
          Copyright &copy; 2024, All rights reserved.
        </div>
        <!--logo-->
        <div>
          <img src="./assets/images/logo.png" alt="logo" class="h-8" />
        </div>
        <!--social links-->
        <div class="flex justify-center space-x-4">
          <!--link one-->
          <a href="#" >
            <img src="assets/images/icon-facebook.svg" alt="facebook" class="h-8" />
          </a>
          <!--link two-->
          <a href="#" >
            <img src="assets/images/icon-youtube.svg" alt="facebook" class="h-8" />
          </a>
          <!--link three-->
          <a href="#" >
            <img src="assets/images/icon-twitter.svg" alt="facebook" class="h-8" />
          </a>
          <!--link four-->
          <a href="#" >
            <img src="assets/images/icon-pinterest.svg" alt="facebook" class="h-8" />
          </a>
          <!--link five-->
          <a href="#" >
            <img src="assets/images/icon-instagram.svg" alt="facebook" class="h-8" />
          </a>
        </div>
      </div>
      <!--list container-->
      <div class="flex justify-around space-x-32">
        <div class="flex flex-col space-y-3 text-white">
          <a href="index.php" class="hover:text-brightRed">Home</a>
          <a href="#" class="hover:text-brightRed">orders</a>
          <a href="#" class="hover:text-brightRed">Products</a>
          <a href="#" class="hover:text-brightRed">Contact</a>
        </div>
        <div class="flex flex-col space-y-3 text-white">
          <a href="http://emmanuelfame.github.io/Calculator/" target="_blank" class="hover:text-brightRed">Calculator</a>
          <a href="#" class="hover:text-brightRed">Community</a>
          <a href="#" class="hover:text-brightRed">Privacy policy</a>
        </div>
      </div>
      <!--Input container-->
      <div class="flex flex-col justify-between">
        
         <div class="flex space-x-3">
          <h1>E-Commerce</h1>
          <button class="px-6 py-2 text-white rounded-full bg-brightRed hover:bg-brightRedLight focus:outline-none"><a href="cart.php">Check your cart</a></button> 
         </div>
        
        <!--Copyright-->
        <div class="hidden text-white md:block">
          Copyright &copy; 2024, All rights reserved
        </div>
      </div>
    </div>
  </footer>
  <script>
  var mainImage = document.getElementById("mainImage")
  var smallImage = document.getElementsByClassName("small-img")
  var 

  for (let i = 0; i < 4; i++) {
    smallImage[i].onclick = function() {
      mainImage.src = smallImage[i].src
    }
  }
</script> 
</body>
</html>