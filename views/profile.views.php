<?php 
  $title = 'Profile';
  require './partials/_menu.php';
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
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <div class="search-overlay">
        <div class="close"><i class="fas fa-times"></i></div>
        <form action="#">
            <input type="text"  placeholder="Write what you want..">
        </form>
    </div>
    <!-- ==========Header-Section========== -->

    <!-- ==========Breadcrumb-Section========== -->
    <section class="breadcrumb-area profile-bc-area">
        <div class="container">
            <div class="content">
                <h2 class="title extra-padding">
                    <?= e($user->pseudo) ?>
                </h2>
                <ul class="breadcrumb-list extra-padding">
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>

                    <li>
                        Single Profile
                    </li>
                </ul>
                <div class="right">
                    <a href="user_setting.php" class="custom-button">
                        <i class="fa fa-edit"></i> Edit profile
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Breadcrumb-Section========== -->


    <!-- ========= Profile Section Start -->
    <section class="profile-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7">
                    <div class="left-profile-area">
                        <div class="profile-about-box">
                            <div class="top-bg"></div>
                            <div class="p-inner-content">
                                <div class="profile-img">
                                    <img src="<?= get_avatar_url($user->email) ?>" alt="Profile image for <?= e($user->pseudo) ?>">
                                    <div class="active-online"></div>
                                </div>
                                <h5 class="name">
                                    <?= e($user->name) ?><br>
                                </h5>
                                <small><a href="mailto:<?= e($user->email) ?>"><?= e($user->email) ?></a></small>
                                <ul class="p-b-meta-one">
                                    <li>
                                        <span>21 Years Old</span>
                                    </li>
                                    <li>
                                        <span> <i class="fas fa-map-marker-alt"></i>Paris,France</span>
                                    </li>
                                </ul>
                                <div class="p-b-meta-two">
                                    <div class="left">
                                        <div class="icon">
                                            <i class="far fa-heart"></i>
                                        </div> 257
                                    </div>
                                    <div class="right">
                                        <a href="#" class="custom-button">
                                            <i class="fab fa-cloudversify"></i> Get Premium
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-meta-box">
                            <ul class="p-m-b">
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#usermessage">
                                        <i class="far fa-envelope"></i>
                                        <div class="number">04</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#usernotification">
                                        <i class="far fa-bell"></i>
                                        <div class="number">04</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-cogs"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="profile-uplodate-photo">
                            <h4 class="p-u-p-header">
                                <i class="fas fa-camera"></i> 21 Upload Photos 
                            </h4>
                            <div class="p-u-p-list">
                                <div class="my-col">
                                    <div class="img">
                                        <img src="assets/images/profile/up1.jpg" alt="">
                                        <div class="overlay">
                                            <a href="assets/images/profile/up1.jpg" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-col">
                                    <div class="img">
                                        <img src="assets/images/profile/up2.jpg" alt="">
                                        <div class="overlay">
                                            <a href="assets/images/profile/up2.jpg" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-col">
                                    <div class="img">
                                        <img src="assets/images/profile/up3.jpg" alt="">
                                        <div class="overlay">
                                            <a href="assets/images/profile/up3.jpg" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-col">
                                    <div class="img">
                                        <img src="assets/images/profile/up4.jpg" alt="">
                                        <div class="overlay">
                                            <a href="assets/images/profile/up4.jpg" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-col">
                                    <div class="img">
                                        <img src="assets/images/profile/up5.jpg" alt="">
                                        <div class="overlay">
                                            <a href="assets/images/profile/up5.jpg" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-col">
                                    <div class="img">
                                        <img src="assets/images/profile/up6.jpg" alt="">
                                        <div class="overlay">
                                            <a href="assets/images/profile/up6.jpg" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="profile-main-content">
                        <ul class="top-menu">
                            <li>
                                <a href="single-profile.html">
                                    Activity 
                                </a>
                            </li>
                            <li>
                                <a href="single-profile2.html" class="active">
                                    Profile 
                                </a>
                            </li>
                            <li>
                                <a href="single-profile3.html">
                                    Friends  
                                    <div class="num">04</div>
                                </a>
                            </li>
                            <li>
                                <a href="profile-notfound.html">
                                    Groups 
                                    <div class="num">14</div>
                                </a>
                            </li>
                            <li>
                                <a href="profile-notfound.html">
                                    Media 
                                    <div class="num">47</div>
                                </a>
                            </li>
                        </ul>
                        <div class="info-box">
                            <div class="header">
                                <h4 class="title">
                                    Base
                                </h4>
                            </div>
                            <div class="content">
                                <ul class="infolist">
                                    <li>
                                        <span>
                                            Name
                                        </span>
                                        <span>
                                            Albert Don
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Birthday
                                        </span>
                                        <span>
                                            1998-01-19
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            I am a
                                        </span>
                                        <span>
                                            Man
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Looking for a
                                        </span>
                                        <span>
                                            Woman
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Marital status
                                        </span>
                                        <span>
                                            single
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Country
                                        </span>
                                        <span>
                                            France
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            City
                                        </span>
                                        <span>
                                            Paris
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="header">
                                <h4 class="title">
                                    Myself Summary
                                </h4>
                            </div>
                            <div class="content">
                                <p class="text">
                                    I don`t like talk too much to be honest and especially about myself. I am man of actions, I do a lot of sports, I adore to travel and to see the world.
                                </p>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="header">
                                <h4 class="title">
                                    Lifestyle
                                </h4>
                            </div>
                            <div class="content">
                                <ul class="infolist">
                                    <li>
                                        <span>
                                            Interests
                                        </span>
                                        <span>
                                            Billiards
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Looking for
                                        </span>
                                        <span>
                                            Just friends
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Smoking
                                        </span>
                                        <span>
                                            Never
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Language
                                        </span>
                                        <span>
                                            English 
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="header">
                                <h4 class="title">
                                    Physical
                                </h4>
                            </div>
                            <div class="content">
                                <ul class="infolist">
                                    <li>
                                        <span>
                                            Height
                                        </span>
                                        <span>
                                            5’10
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Weight
                                        </span>
                                        <span>
                                            71
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Hair Color
                                        </span>
                                        <span>
                                            Black
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Eye Color
                                        </span>
                                        <span>
                                            Brown
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Body Type
                                        </span>
                                        <span>
                                            Tall
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Ethnicity
                                        </span>
                                        <span>
                                            Middle Eastern
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-5 col-md-7">
                    <div class="profile-aside-area">
                        <div class="other-profile">
                            <div class="o-p-header">
                                <h6 class="title">
                                    You may like
                                </h6>
                            </div>
                            <div class="o-p-content">
                                <div class="p-u-p-list-slider owl-carousel">
                                    <div class="slider-item">
                                        <div class="p-u-p-list">
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img1.png" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img2.png" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img3.png" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img4.png" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img5.png" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img6.png" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img7.png" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img8.png" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <div class="p-u-p-list">
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img1.png" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img2.png" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img3.png" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img4.png" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img5.png" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img6.png" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img7.png" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="my-col">
                                                <div class="img">
                                                    <img src="assets/images/profile/op-img8.png" alt="">
                                                    <a href="#" class="light-box mfp-iframe"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-request">
                            <div class="c-r-heading">
                                <h6 class="title">
                                    <i class="far fa-comments"></i> Chat Request
                                </h6>
                            </div>
                            <div class="c-r-content">
                                <div class="c-r-content-list">
                                    <div class="single-c-r">
                                        <div class="left">
                                            <img src="assets/images/profile/c-r-img1.png" alt="">
                                            <div class="active-online"></div>
                                        </div>
                                        <div class="right">
                                            <h4 class="title">
                                                laura maria
                                            </h4>
                                            <p>
                                                true love is...
                                            </p>
                                        </div>
                                    </div>
                                    <div class="single-c-r">
                                        <div class="left">
                                            <img src="assets/images/profile/c-r-img2.png" alt="">
                                            <div class="active-online"></div>
                                        </div>
                                        <div class="right">
                                            <h4 class="title">
                                                laura maria
                                            </h4>
                                            <p>
                                                true love is...
                                            </p>
                                        </div>
                                    </div>
                                    <div class="single-c-r">
                                        <div class="left">
                                            <img src="assets/images/profile/c-r-img3.png" alt="">
                                            <div class="active-online"></div>
                                        </div>
                                        <div class="right">
                                            <h4 class="title">
                                                laura maria
                                            </h4>
                                            <p>
                                                true love is...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="load-more">
                                    load More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========= Profile Section Start -->
   
    <!-- ==========Newslater-Section========== -->

    <?php require './partials/_footer.php' ?>

<!-- Mirrored from pixner.net/peyamba/peyamba/single-profile2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:11:53 GMT -->
</html>