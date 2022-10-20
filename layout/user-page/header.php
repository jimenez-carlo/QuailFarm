<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menor's Quail Farm</title>
  <link rel="icon" href="images/landing/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/custom.css" />
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/datable.js"></script>
  <script src="js/datable.bootstrap.js"></script>
  <script src="js/datatable.buttons.js"></script>
  <script src="js/main.js"></script>
  <script src="js/user-page.js"></script>
</head>
<script>
  var base_url = "<?php echo "http://" . $_SERVER['SERVER_NAME'] . str_replace("index.php", "", strtok($_SERVER["REQUEST_URI"], '?')); ?>";
</script>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="home">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleNav" aria-controls="toggleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand col-8 col-auto mr-auto text-warning" aria-current="page" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">
        <h2><i class="fa fa-bars"></i> Menu</h2>
      </a>
      <div class="collapse navbar-collapse justify-content-end" id="toggleNav">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#about-us"><i class="fa fa-user"></i> My Profile</a></li>
          <li class="nav-item"><a class="nav-link btn btn-warning font-bold text-dark" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#modal_id_1"><i class="fa fa-power-off"></i> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="offcanvas offcanvas-start text-white bg-dark col-sm" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="d-flex flex-column flex-shrink-0 p-3 vh-100">
      <h2 class="text-center">Menor's Quail Farm</h2>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li><a href="#" name="dashboard" class="nav-link sidebar-btn sidebar-btn active"><i class="fa fa-tachometer"></i> Dashboard</a></li>
        <li><a href="#" name="customers" class="nav-link sidebar-btn"><i class="fa fa-users"></i> Customer Accounts</a></li>
        <li><a href="#" name="users" class="nav-link sidebar-btn"><i class="fa fa-users"></i> Users Accounts</a></li>
        <li><a href="#" name="categories" class="nav-link sidebar-btn"><i class="fa fa-tag"></i> Categories</a></li>
        <li><a href="#" name="products" class="nav-link sidebar-btn"><i class="fa fa-tags"></i> Products</a></li>
        <li><a href="#" name="inventory" class="nav-link sidebar-btn"><i class="fa fa-archive"></i> Inventory</a></li>
        <li><a href="#" name="orders" class="nav-link sidebar-btn"><i class="fa fa-cube"></i> Orders</a></li>
        <li><a href="#" name="x" class="nav-link sidebar-btn"><i class="fa fa-files-o"></i> Reports</a></li>
        <li><a href="#" name="x" class="nav-link sidebar-btn"><i class="fa fa-desktop"></i> Walkin(POS)</a></li>
        <!-- <li><a href="#" name="transactions" class="nav-link sidebar-btn"><i class="fa fa-file-text"></i> Transactions</a></li> -->
        <!-- <li><a href="#" name="system" class="nav-link sidebar-btn"><i class="fa fa-cog"></i> System</a></li> -->
        <hr>

      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong><?php echo $_SESSION['user']->first_name; ?></strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
      </div>
    </div>
  </div>