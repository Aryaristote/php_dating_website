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
          <div class="col-lg-5">
            <a href="index.php" class="backto-home"><i class="fas fa-chevron-left"></i> Back to Home</a>
          </div>
          <div class="col-lg-7 ">
            <div class="logo">
              <img src="../assets/images/logo2.png" alt="logo">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="image">
        </div>
        <div class="col-lg-7">
          <div class="log-reg-inner">
          
            <div class="section-header">
              <?php include('partials/_errors.php') ?>
            </div>

            <div class="section-header">
              <p>Let's create your profile! Just fill in the fields below, and we’ll get a new account.</p>
            </div>
            <div class="main-content">
              <form data-parsley-validate action="#" method="POST">
                <div class="form-group">
                  <label for="name">Username*</label>
                  <input require="required" type="text" value="<?= get_input('name') ?>" name="name" id="name" class="my-form-control" placeholder="Enter Your name">
                </div>
                <div class="form-group">
                  <label for="name">Pseudo*</label>
                  <input require="required" type="text" value="<?= get_input('pseudo') ?>" name="pseudo" id="speudo" class="my-form-control" placeholder="Enter Your speudo">
                </div>
                <div class="form-group">
                  <label for="email">Email Address*</label>
                  <input type="email" value="<?= get_input('email') ?>" name="email" id="email" class="my-form-control" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                  <label for="password">Password*</label>
                  <input type="password" id="password_confirm" name="password" class="my-form-control" placeholder="Enter Your Password">
                </div>
                <div class="form-group">
                  <label for="password">Confirm Password*</label>
                  <input type="password" id="password_confirm" name="password_confirm" class="my-form-control" placeholder="Confirm Your Password">
                </div>
                <input type="submit" class="custom-button" value="Register" name="register">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== Login & Registation Section ========== -->

  <?php require './partials/_footer.php' ?>


<!-- Mirrored from pixner.net/peyamba/peyamba/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:12:12 GMT -->
</html>