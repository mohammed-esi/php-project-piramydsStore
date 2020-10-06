<!DOCTYPE html>
<html lang="en">

<!-- Bootstra, Fontawesom, Style, Animate -->
<?php require_once 'layouts/head.php' ?>

<body>
  <!-- Section Login -->
  <div class="container my-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card p-4">
          <div class="card-body">
            <h1 class="text-center wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">
              <i class="fas fa-campground text-dark mr-1"></i>Pyramids<b style="color: #d62d20; font-family: Courier New;">Shop</b>
            </h1>
            <h1 class="text-center text-secondary mt-3 diplay-4 lead wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">
              Register
            </h1>
            <hr class="my-5 hr-mx" />
            <div class="row">
              <div class="col-md-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.1s">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="First Name" />
                </div>
              </div>
              <div class="col-md-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.2s">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Last Name" />
                </div>
              </div>
              <div class="col-md-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.3s">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email" />
                </div>
              </div>
              <div class="col-md-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.4s">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Password" />
                </div>
              </div>
              <div class="col-md-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Config Password" />
                </div>
              </div>
              <div class="col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.6s">
                <div class="form-group">
                  <a href="regestration_failed.php" style="text-decoration: none"><button type="button" class="btn btn-outline-danger btn-block">Register</button></a>
                </div>
              </div>
            </div>

            <hr class="my-5 hr-mx" />

            <div class="row">
              <div class="col-md-12">
                <h6 class="text-center lead">
                  Go back to
                  <a href="index.php" class="text-dark">Home</a> OR
                  <a href="login.php" class="text-dark">Login</a>
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts Bootstrap and Fontawsom and Wow -->
  <?php require_once 'layouts/scripts.php' ?>
</body>

</html>