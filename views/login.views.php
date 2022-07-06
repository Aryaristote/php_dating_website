<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/flaticon.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/odometer.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/jquery.animatedheadline.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <!-- <link rel="stylesheet" href="assets/css/dark.css"> -->

  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

  <title><?= $title = 'Login' ?></title>


</head>

<body>
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
            <a href="index.php" class="backto-home"><i class="fas fa-chevron-left"></i> Home</a>
          </div>
          <div class="col-lg-7 ">
            <div class="logo">
              <img src="../assets/images/logo/someone_logo.png" alt="logo" width="70">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-end">
        <div class="image image-log">
        </div>
        <div class="col-lg-7">
          <div class="log-reg-inner">
            <div class="section-header inloginp">
              <h2 class="title">
                Find love in 3 simple click...
              </h2>
            </div>
            <div class="main-content inloginp">
              <div class="col-lg-12">
                <?php include './partials/_flash.php'; ?>
              </div>
              
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