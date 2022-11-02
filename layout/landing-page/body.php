<main>
  <div id="myCarousel" class="carousel slide carousel-container" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/landing/banner.webp" class="d-block w-100" />
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Menor's Quail Farm</h1>
            <p>Always Fresh Eggs!</p>
            <p><a class="btn btn-lg btn-dark font-bold text-warning" href="#">ORDER NOW</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/landing/benefits.webp" class="d-block w-100 img-contain" />
      </div>
      <div class="carousel-item">
        <img src="images/landing/farm2.jpg" class="d-block w-100" />

        <div class="container">
          <div class="carousel-caption">
            <h1>Fresh out of farm</h1>
            <p>Always Fresh Eggs!</p>
            <p><a class="btn btn-lg btn-warning font-bold" href="#products">Check Products!</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="container marketing" id="about-us">

    <div class="pricing-header p-3 pb-md-4 text-center vh-50 mg-rem-btn-4">
      <h1 class=" display-4 fw-normal">About Us</h1>
      <p class="fs-5 text-muted">To be soon</p>
    </div>

    <hr class="featurette-divider">

    <div class="row mg-rem-btn-4" id="products">
      <h1 class=" display-4 fw-normal text-center" style="margin-bottom:2rem">Products</h1>
      <div class="col-lg-4 d-flex flex-column justify-content-center">
        <img src="images/landing/male_quail.jpg" class="rounded-circle align-self-center round-img" alt="" />
        <h2 class="fw-normal text-warning">Male Quail</h2>
        <p>Kal</p>
        <p><a class="btn btn-warning font-bold" href="#" data-bs-toggle="modal" data-bs-target="#modalLogin">BUY NOW »</a></p>
      </div>
      <div class="col-lg-4 d-flex flex-column justify-content-center">
        <img src="images/landing/female_quail.png" class="rounded-circle align-self-center round-img" alt="" />

        <h2 class="fw-normal text-warning">Female Quail</h2>
        <p>Laying Eggs</p>
        <p><a class="btn btn-warning font-bold" href="#" data-bs-toggle="modal" data-bs-target="#modalLogin">BUY NOW »</a></p>
      </div>
      <div class="col-lg-4 d-flex flex-column justify-content-center">
        <img src="images/landing/quail_egg.jpg" class="rounded-circle align-self-center round-img" alt="" />
        <h2 class="fw-normal text-warning">Quail Egg</h2>
        <p>Egg</p>
        <p><a class="btn btn-warning font-bold" href="#" data-bs-toggle="modal" data-bs-target="#modalLogin">BUY NOW »</a></p>
      </div>
    </div>

    <hr class="featurette-divider">
    <div class="row g-5">
      <h1 class=" display-4 fw-normal text-center" style="margin-bottom:2rem" id="contact-us">Contact Us</h1>
      <div class="col-md-5 col-lg-4 order-md-last">
        <h2 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-dark">Located at <i class="fa fa-map-marker"></i></span>
        </h2>
        <img src="images/landing/map.jpg" alt="" style="width:100%">
      </div>
      <div class="col-md-7 col-lg-8">
        <h2 class="mb-3 text-dark">Email & Phone number</h2>
        <div class="row g-3">
          <div class="col-12">
            <div class="input-group has-validation">
              <span class="input-group-text"><i class="fa fa-google"></i> mail:</span>
              <span class="input-group-text">astinpugi@gmail.com</span>
            </div>
          </div>
          <div class="col-12">
            <div class="input-group has-validation">
              <span class="input-group-text">Phone:</span>
              <span class="input-group-text"> 09216339005</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /END THE FEATURETTES -->
    <hr class="featurette-divider">
  </div><!-- /.container -->
</main>

<?php include('layout/landing-page/modal/login.php'); ?>