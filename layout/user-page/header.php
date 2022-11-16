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
  <nav class="navbar navbar-expand-lg navbar-primary bg-primary" id="home">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleNav" aria-controls="toggleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand col-8 col-auto mr-auto text-white" aria-current="page" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">
        <h2><i class="fa fa-bars"></i> Menu</h2>
      </a>
      <div class="collapse navbar-collapse justify-content-end" id="toggleNav">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#about-us"><i class="fa fa-user"></i> <?= $_SESSION['user']->access_name ?></a></li>

          <li class="nav-item"><a class="nav-link btn btn-light font-bold text-primary" href="module/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
          <!-- <li class="nav-item"><a class="nav-link btn btn-primary font-bold text-primary" aria-current="page" href="module/logout.php" data-bs-toggle="modal" data-bs-target="#modal_id_1"><i class="fa fa-power-off"></i> Logout</a></li> -->
        </ul>
      </div>
    </div>
  </nav>


  <div class="offcanvas offcanvas-start text-white bg-primary col-sm" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="d-flex flex-column flex-shrink-0 p-3 vh-100">
      <h2 class="text-center">Menor's Quail Farm</h2>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li><a href="#" name="dashboard" class="nav-link sidebar-btn sidebar-btn active"> Dashboard</a></li>
        <li><a href="#" name="customers" class="nav-link sidebar-btn"> Customer Accounts</a></li>
        <li><a href="#" name="users" class="nav-link sidebar-btn"> Users Accounts</a></li>
        <li><a href="#" name="categories" class="nav-link sidebar-btn"> Categories</a></li>
        <li><a href="#" name="products" class="nav-link sidebar-btn"> Products</a></li>
        <li><a href="#" name="inventory" class="nav-link sidebar-btn"> Inventory</a></li>
        <li><a href="#" name="orders" class="nav-link sidebar-btn"> Orders</a></li>
        <li><a href="#" name="x" class="nav-link sidebar-btn"> Reports</a></li>
        <!-- <li><a href="#" name="x" class="nav-link sidebar-btn"><i class="fa fa-desktop"></i> Walkin(POS)</a></li> -->
        <!-- <li><a href="#" name="transactions" class="nav-link sidebar-btn"><i class="fa fa-file-text"></i> Transactions</a></li> -->
        <!-- <li><a href="#" name="system" class="nav-link sidebar-btn"><i class="fa fa-cog"></i> System</a></li> -->
        <hr>

      </ul>
      <hr>

    </div>
  </div>