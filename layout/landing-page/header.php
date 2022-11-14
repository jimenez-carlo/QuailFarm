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
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/main.js"></script>
  <script src="js/landing-page.js"></script>
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
      <a class="navbar-brand col-8 col-auto mr-auto text-white" href="#">
        <h2> Menor's Quail Farm</h2>
      </a>
      <div class="collapse navbar-collapse justify-content-end" id="toggleNav">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" data-link="menu" href="index.php"> Home</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" data-link="menu" href="#" name="about_us_1">About Us</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" data-link="menu" href="#" name="products_1"> Products </a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" data-link="menu" href="#" name="contact_us_1"> Contact Us</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" data-link="menu" href="#" name="tutorial_1"> Tutorial</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" data-link="menu" href="#" name="login_1"> Login</a></li>
          <!-- <li class="nav-item"><a class="nav-link active btn btn-light font-bold text-dark" aria-current="page" data-bs-toggle="modal" data-bs-target="#modalLogin"> Login</a></li> -->
        </ul>
      </div>
    </div>
  </nav>