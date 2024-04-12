<!-- <nav class="navbar navbar-expand-lg fixed-top bg-white " style="background-color: #D8BFD8 !important;  z-index: 10; position: relative;">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="./assets/images/logo.png" alt="logo" class="logo" />
    </a>
    <h2 class="brand">E~Commerce</h2>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse nav-buttons navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="shop.php">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a href='cart.php'>
            <i style="position: relative;" class="fa-solid iclass fas fa-cart-shopping">
              </span>
            </i></a>
        </li>
        <li class="nav-item">
          <a href="account.php"><i class="fa-solid iclass fas fa-user"></i></a>
        </li>

      </ul>
    </div>
  </div>
</nav> -->



  <!--Nav Bar-->
  <div class="ctar " style="position:relative;background-color: purple !important; ">
  <nav  class="container ctar relative p-5 mx-auto " style="font-size: 16px; width:100% !important; background-color: purple !important; color:white !important;" >
    <!--Flex Container-->
    <div class="flex items-center justify-between">
     
    <!--logo-->
    <div>
          <img src="./assets/images/logo.png" alt="logo" style="width:100px; height:100px; border-top-left-radius:50%;" />
        </div>
      <h2 class="brand mx-1 sm:flex hidden">E~Commerce</h2>

       
      <!--menu items-->
      <!-- <div class="hidden md:flex"> -->
      <div class="hidden md:flex nav-buttons" style="text-decoration: none; ">
     
      
        <a class="mx-4"  aria-current="page" href="index.php">Home</a>
      
        <a class="mx-4"  aria-current="page" href="shop.php">Shop</a>
        
        <a  class="mx-4" aria-current="page" href="#">Blog</a>
  
        <a class="mx-4"  aria-current="page" href="contact.php">Contact Us</a>
       
        <a class="mx-4" href="account.php" style="font-size: 1.4rem;" ><i class="fa-solid iclass fas fa-user"></i></a>

        <a class="mx-4" href='cart.php' >
            <i style="position: relative;font-size: 1.8rem;" class="fa-solid iclass fas fa-cart-shopping">
              <?php if (isset($_SESSION['quantity']) && $_SESSION['quantity'] != 0) { ?>
                <span class="cart-quantity"> <?php echo $_SESSION['quantity']; ?> </span>
              <?php } ?>
            </i></a>
           
         
           
              
              </div>
        
    


    <!--Mobile Menu-->
    <div class="md:hidden mx-4 "  style="text-decoration: none; color:blue !important;z-index: 11;">
      <div id="menu" class="absolute flex-col items-center self-end hidden py-8 mt-10 space-y-6 font-bold bg-dark sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
      <a class="nav-link active" style="list-style: none;" aria-current="page" href="index.php">Home</a>
      <a class="nav-link active" style="list-style: none;" aria-current="page" href="shop.php">Shop</a>
      <a class="nav-link active" style="list-style: none;" aria-current="page" href="#">Blog</a>
      <a class="nav-link active" style="list-style: none;" aria-current="page" href="contact.php">Contact Us</a>
      <a href='cart.php' style="list-style: none;">
            <i style="position: relative;" class="fa-solid iclass fas fa-cart-shopping">
              <?php if (isset($_SESSION['quantity']) && $_SESSION['quantity'] != 0) { ?>
                <span class="cart-quantity"> <?php echo $_SESSION['quantity']; ?> </span>
              <?php } ?>
            </i></a>
            <a href="account.php" style="list-style: none;"><i class="fa-solid iclass fas fa-user"></i></a>
      
      </div>
              </div>

    </div>
  </nav>
  <div>
      
      <button id="menu-btn" style="position: absolute;
  top: 80px;
  right: 20px;
  font-size: 18px;" class="block  flex-end hamburger md:hidden focus:outline-none">
      <span class="hamburger-top"></span>
      <span class="hamburger-middle"></span>
      <span class="hamburger-bottom"></span>
    </button>
    </div>
  </div>
  <script>
    const btn = document.getElementById('menu-btn');
const nav = document.getElementById('menu');

btn.addEventListener('click', () => {
    btn.classList.toggle('open');
    nav.classList.toggle('flex');
    nav.classList.toggle('hidden');
});
  </script>
  <!-- <style>
  .ctar {
  background-image: url("assets/images/eagle1.jpg");
  /* background-repeat: no-repeat; */
}
@media (max-width: 576px) {
  .cta {
    background-image: url("assets/images/eagle2.jpg");
  }
}
</style> -->
