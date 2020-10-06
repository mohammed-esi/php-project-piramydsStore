<?php require 'php/contact.php' ?>
<!DOCTYPE html>
<html lang="en">
<!-- Bootstra, Fontawesom, Style, Animate -->
<?php require_once 'layouts/head.php' ?>

<body>
  <!-- Header -->
  <header id="header-about">
    <!-- Navbar -->
    <?php require_once 'components/navbar.php' ?>

    <div class="row">
      <div class="col-md-6 order-2 animated bounceInDown delay-1s">
        <img src="./image/contact.svg" alt="about" class="img-fluid w-100 h-100 mt-5" />
      </div>
      <div class="col-md-6 order-1">
        <div class="text-center animated bounceInUp delay-1s contact-content" style="color: blanchedalmond;">
          <h1 class="display-4">
            Contact Us
          </h1>
          <p class="lead">
            You can contact team of this website if you want knews more
            information for about this website or service.
          </p>
        </div>
      </div>
    </div>
  </header>

  <!-- Contact US -->
  <section id="contact" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card p-4">
            <div class="card-body wow bounceInRight" data-wow-duration="1s" data-wow-delay="1s">
              <h4 class="lead">Get In Touch</h4>
              <p class="lead">
                I hope you like the service and I also hope that you
                subscribe, and that you still have some inquiries in your
                mind, you can contact us
              </p>
              <h4>
                <i class="fas fa-map-marker-alt mr-2" style="color: #ff7700;"></i>Address
              </h4>
              <p>Msila MCA N02</p>
              <h4>
                <i class="fas fa-envelope-square mr-2" style="color: #ff7700;"></i>Email
              </h4>
              <p>zighed.mohammed.alamine@gmail.com</p>
              <h4>
                <i class="fas fa-phone-square mr-2" style="color: #ff7700;"></i>Phone
              </h4>
              <p>+21377544855</p>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card p-4">
            <div class="card-body">
              <h1 class="text-center wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">
                <i class="fas fa-campground text-dark"></i>Pyramids<b style="color: #d62d20; font-family: Courier New;">Shop</b>
              </h1>
              <h1 class="text-center text-secondary mt-3 diplay-4 lead wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">
                Contact Us
              </h1>
              <hr class="my-5 hr-mx" />
              <div class="conatiner my-5">
                <?php if ($msg) : ?>
                  <div class="my-4 alert <?php echo $msgClass ?> animate bounce display-1s">
                    <?php echo $msg ?>
                  </div>
                <?php endif; ?>
              </div>
              <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.2s">
                      <input type="text" name="first_name" class="form-control" placeholder="First Name" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.2s">
                      <input type="text" name="last_name" class="form-control" placeholder="Last Name" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.4s">
                      <input type="text" name="email" class="form-control" placeholder="Email" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.4s">
                      <input type="text" name="phone" class="form-control" placeholder="Phone Number" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.6s">
                      <textarea class="form-control" name="message" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group wow bounce" data-wow-duration="1s" data-wow-delay="1.8s">
                      <button type="submit" name="submit" class="btn btn-outline-danger btn-block">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Own Team -->
  <section class="py-5 text-center bg-light text-dark">
    <div class="container">
      <h1 class="display-4 lead my-4">Our Team</h1>
      <div class="row">
        <div class="col-md-4">
          <img src="./image/person-one.jpg" alt="person-one" class="img-fluid w-75 rounded-circle mb-2 wow rotateIn" data-wow-duration="1s" data-wow-delay="1s" />
          <h4 class="wow flipInX" data-wow-duration="1s" data-wow-delay="1.3s">
            Jane Doe
          </h4>
          <small class="wow flipInX" data-wow-duration="1s" data-wow-delay="1.3s">Marketing Manager</small>
        </div>
        <div class="col-md-4">
          <img src="./image/person-two.png" alt="person-two" class="img-fluid w-75 rounded-circle mb-2 wow rotateIn" data-wow-duration="1s" data-wow-delay="1s" />
          <h4 class="wow flipInX" data-wow-duration="1s" data-wow-delay="1.3s">
            Sara Williams
          </h4>
          <small class="wow flipInX" data-wow-duration="1s" data-wow-delay="1.3s">Business Manager</small>
        </div>
        <div class="col-md-4">
          <img src="./image/person-three.png" alt="person-three" class="img-fluid w-75 rounded-circle mb-2 wow rotateIn" data-wow-duration="1s" data-wow-delay="1s" />
          <h4 class="wow flipInX" data-wow-duration="1s" data-wow-delay="1.3s">
            John Doe
          </h4>
          <small class="wow flipInX" data-wow-duration="1s" data-wow-delay="1.3s">CEO</small>
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