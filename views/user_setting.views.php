<?php
    $title = 'Edit Profile';
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
        <input type="text" placeholder="Write what you want..">
    </form>
</div>
<!-- ==========Header-Section========== -->

<!-- ==========Breadcrumb-Section========== -->
<section class="breadcrumb-area profile-bc-area">
    <div class="container">
        <div class="content">
            <h2 class="title extra-padding">
                Edit Profile
            </h2>
            <ul class="breadcrumb-list extra-padding">
                <li>
                    <a href="profile.php">
                        Profile
                    </a>
                </li>
                <li>
                    Edit Profile
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ==========Breadcrumb-Section========== -->

<!-- ========= Profile Section Start -->
<section class="user-setting-section">
    <div class="container">
        <form method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xl-4 col-md-5">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                            <div class="profile-about-box">
                                <div class="top-bg"></div>
                                <div class="p-inner-content">
                                    <div class="profile-img">
                                        <img src="<?= get_avatar_url(get_session('email'), 120) ?>" alt="Profile image for <?= get_session('email') ?>">
                                        <div class="active-online"></div>
                                    </div>
                                </div>
                                <div class="text-center change-img">
                                    <div  class="custom-button">
                                        <i class="fa fa-camera"></i> Edit image
                                    </div>
                                    <input required="required" name="file" class="image-input" ref="file" type="file" accept="image/*"/>
                                </div><br>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="icon">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <span>
                                        Account
                                    </span>
                                    <div class="t-icon">
                                        <i class="fas fa-plus"></i>
                                        <i class="fas fa-minus"></i>
                                    </div>
                                </button>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="links">
                                        <li>
                                            <a href="user-account-info.html">Account Info</a>
                                        </li>
                                        <li>
                                            <a href="user-change-pass.html">Change Password</a>
                                        </li>
                                        <li>
                                            <a href="user-privicy-setting.html">Privacy Settings</a>
                                        </li>
                                        <li>
                                            <a href="user-verify-account.html">Verified account</a>
                                        </li>
                                        <li>
                                            <a href="user-close-account.html">Close Account</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="icon">
                                        <i class="far fa-credit-card"></i>
                                    </div>
                                    <span>
                                        Subscriptions & Payments
                                    </span>
                                    <div class="t-icon">
                                        <i class="fas fa-plus"></i>
                                        <i class="fas fa-minus"></i>
                                    </div>
                                </button>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="links">
                                        <li>
                                            <a href="user-billing.html">Billing & Payout</a>
                                        </li>
                                        <li>
                                            <a href="user-plan.html">Upgrade Membership Plan</a>
                                        </li>
                                        <li>
                                            <a href="user-purchase.html">View Purchase History</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-md-7 ">
                    <div class="page-title">
                        Profile Info
                    </div>
                    <?php if(isset($errors)): ?>
                        <?php foreach($errors as $error): ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <?= $error ?>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>
                    <div class="col-lg-12">
                        <?php include './partials/_flash.php '?>
                    </div>
                    <div class="input-info-box mt-30">
                        <div class="header">
                            About your Profile
                        </div>
                            <?php if(!empty($_GET['id']) && $_GET['id'] === get_session('user_id')): ?>
                                <!-- If you edit the url it's hide the edit profile fomm -->
                                <div class="content container">
                                    <div class=" col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profile Pseudo</label>
                                                <input type="text" id="pseudo" value="<?= get_input('name') ? get_input('peudo'): e($user->pseudo) ?>" name="pseudo" >
                                            </div>
                                            <div class="col-md-6">
                                                <label>Profile Name</label>
                                                <input type="text" id="username" value="<?= get_input('name') ? get_input('name'): e($user->name) ?>" name="name" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Sex</label>
                                                <select name="sex" id="" >
                                                    <option value="" disabled selected>Select options</option>
                                                    <option value="Man" <?= $user->sex == "Man" ? "selected" : "" ?> >Man</option>
                                                    <option value="Woman" <?= $user->sex == "Woman" ? "selected" : "" ?>>Woman</option>
                                                </select>
                                            </div>
                                            <div class="own-checkbox col-md-6">
                                                <small style="color: #333" for="">Are you single ?</small>
                                                <label class="toggler-wrapper style-3">
                                                    <input type="checkbox" id="checkbox" name="available_for_date" /> <!-- $user->available_for_date ? "checked" : "" to set a default value -->
                                                    <div class="toggler-slider">
                                                        <div class="toggler-knob"></div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Country</label>
                                                <input type="text" value="<?= get_input('country') ?: e($user->country) ?>" id="username" name="country" >
                                            </div>
                                            <div class="col-md-6">
                                                <label>Town</label>
                                                <input type="text" id="username" value="<?= get_input('city') ?: e($user->city) ?>" value="<?= e($user->city) ?>" name="city" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Twitter</label>
                                                <input type="text" id="username" value="<?= e($user->twitter) ?>" name="twitter">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Github</label>
                                                <input type="text" id="username" value="<?= e($user->github) ?>" name="github">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Biography*</label>
                                        <textarea rows="3" name="bio" placeholder="Write a little description about you..."><?= e($user->bio) ?></textarea>
                                    </div><br>
                                    <div class="col-md-12">
                                        <div class="row" style="width: 102%">
                                            <a href="profile.php" class="col-md-6">Discard All</a>
                                            <input type="submit" name="update" class="col-md-6 submit-btn1">
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- ========= Profile Section Start -->

<!-- ==========Newslater-Section========== -->
<?php require './partials/_footer.php' ?>

<!-- Mirrored from pixner.net/peyamba/peyamba/user-setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:10:00 GMT -->

</html>