<!DOCTYPE html>
<html lang="en">

<!-- Bootstra, Fontawesom, Style, Animate -->
<?php require_once 'layouts/head.php' ?>

<body>
  <!-- Header -->
  <header id="my-header">
    <!-- Navbar -->
    <?php require_once 'components/navbar.php' ?>

    <div class="text-center mt-5 animated fadeInUpBig delay-1s" style="color: blanchedalmond;">
      <h1 class="display-4">
        The house is your
        <b style="color: #d62d20; font-family: Verdana;">Store!</b>
      </h1>
      <p class="lead">
        You can only buy from home and whatever you want, use your card and
        shop
      </p>
    </div>
  </header>

  <!-- Methods Payment -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6 text-center py-5 my-4">
          <i class="fab fa-cc-paypal" style="font-size: 100px;color: gray;opacity: 0.7;"></i>
        </div>
        <div class="col-lg-3 col-sm-6 text-center py-5 my-4">
          <i class="fab fa-cc-mastercard" style="font-size: 100px;color: gray;opacity: 0.7;"></i>
        </div>
        <div class="col-lg-3 col-sm-6 text-center py-5 my-4">
          <i class="fab fa-cc-jcb" style="font-size: 100px;color: gray;opacity: 0.7;"></i>
        </div>
        <div class="col-lg-3 col-sm-6 text-center py-5 my-4">
          <i class="fab fa-cc-amazon-pay" style="font-size: 100px;color: gray;opacity: 0.7;"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- About Us with a letter article -->
  <section class="section-about-us text-center">
    <div class="row justify-content-center py-5">
      <h1 class="lead text-light display-4 mx-1 wow shake">
        About This WebSite
      </h1>
    </div>
    <div class="explore-about wow fadeInLeft">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <h3 class="mb-3 lead display-4">
            <i class="fas fa-campground mr-1"></i>Pyramids<b style="color: #d62d20; font-family: Courier New;">Shop</b>
          </h3>
          <p>
            A miniature company that strives to serve it the best of its
            ability, by providing speedy delivery, quality in goods and very
            suitable prices. You can learn more about this
          </p>
          <a href="./about.html"><button class="btn btn-outline-danger">Learn more</button></a>
        </div>
        <div class="col-md-6">
          <img class="img-fluid w-75 my-2" src="./image/company.svg" alt="company" />
        </div>
      </div>
    </div>
  </section>

  <!-- Shope with fast -->
  <section class="shope-with-fast mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
          <img src="./image/shope-fast.svg" alt="fast" class="img-fluid w-100 m-4" />
        </div>
        <div class="col-md-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
          <div class="m-2 lead text-center">
            <h3 class="display-4 mb-4">
              Fast Shopping
            </h3>
            <p>
              You can buy from any site you want and the speed of the original
              is as you want, maybe you are tired of the delay of the request
              months and days of sight just ask and specify the period you
              control the commodity and the period
            </p>
            <p>
              Companies that support fast payment and participate more than 60
              companies buy online only subscribe what you want and make your
              home your dream market
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Join us -->
  <section class="join-us py-5">
    <div class="container">
      <div class="row">
        <div class="col text-center lead">
          <h1 class="diplay-4 my-4">Join Us</h1>
          <p>
            You can join and buy a one-month subscription for free. Just try
            and hurry and wait
          </p>
          <a href="register.php">
            <button class="btn btn-outline-danger px-3">
              Sign Up
            </button>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php require_once 'components/footer.php' ?>

  <!-- Scripts Bootstrap and Fontawsom and Wow -->
  <?php require_once 'layouts/scripts.php' ?>
</body>

</html>