<div id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">E~Commerce</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" />

      <!-- Heading -->
      <div class="sidebar-heading">Control</div>

      <!-- Nav Item - Utilities Collapse Menu -->

      <!-- Divider -->
      <hr class="sidebar-divider" />
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="admindashboard.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item active">
        <a href="adminproducts.php" class="nav-link">
          <i class="fas fa-fw fa-table"></i>
          <span>Products</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="adminaccount.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Accounts</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="add_product.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Add new product</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="adminhelp.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Help</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" />
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <li class="nav-item"><a class="nav-link text-gray-600 small" href="adminlogout.php?logout=1">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-600"></i>
                Logout
              </a></li>
            <div class="topbar-divider d-none d-sm-block"></div>


            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">

              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="assets/images/undraw_profile.svg" />
              </a>
            </li>


          </ul>

        </nav>