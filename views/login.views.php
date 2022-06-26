<?php 
  $title = 'Register';
  require './partials/_menu.php';
  include './partials/_header.php' 
?>
<!-- ==========Preloader========== -->
  <div class="preloader">
    <div class="preloader-inner">
      <div class="preloader-icon">
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ==========Preloader========== -->



  <!-- ========== Login & Registation Section ========== -->
  <section class="log-reg">
    <div class="top-menu-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <a href="index.php" class="backto-home"><i class="fas fa-chevron-left"></i> Back to Home</a>
          </div>
          <div class="col-lg-2">
            <div class="logo">
              <img src="../assets/images/logo2.png" alt="logo">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="image image-log">
        </div>
        <div class="col-lg-7">
          <div class="log-reg-inner">
            <div class="section-header inloginp" style="padding: 0 1em!important;">
              <h4 class="title">
                Welcome to PEYAMBA
              </h4>
            </div>
            <div class="section-header">
              <?php include('partials/_errors.php') ?>
            </div>
            <div class="main-content inloginp">
              <form action="#" method="POST">
                <div class="form-group">
                  <label for="">Your Address or Pseudo</label>
                  <input type="text" require="required" name="identifiant" <?= get_input('identifiant') ?> class="my-form-control" placeholder="Enter Your Email or Pseudo">
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" require="required" name="password" class="my-form-control" placeholder="Enter Your Password">
                </div>
                <p class="f-pass">
                  Forgot your password? <a href="#">recover password</a>
                </p>
                <div class="button-wrapper">
                  <input type="submit" name="login" value="Connexion" class="custom-button">
                </div>
                <div class="or">
                  <p>OR</p>
                </div>
                <div class="or-content">
                  <p>Sign up with your email 
                  <a href="register.php" class="or-btn"><img src="assets/images/google.png" alt=""> Sign Up with Google </a>
                  <p class="or-signup">
                    Don't have an account? <a href="register.html">
                      Sign up here
                    </a>
                  </p>
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== Login & Registation Section ========== -->
  <?php require './partials/_footer.php' ?>

<!-- Mirrored from pixner.net/peyamba/peyamba/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:12:12 GMT -->
</html>