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
        <div class="row">
            <div class="col-xl-4 col-md-5">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <button class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <span>My Profile</span>
                                <div class="t-icon">
                                    <i class="fas fa-plus"></i>
                                    <i class="fas fa-minus"></i>
                                </div>
                            </button>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul class="links">
                                    <li>
                                        <a class="active" href="user-setting.html">Profile Info</a>
                                    </li>
                                    <li>
                                        <a href="user-notification.html">Notifications</a>
                                    </li>
                                    <li>
                                        <a href="user-friend-request.html">Friend Requests</a>
                                    </li>
                                    <li>
                                        <a href="user-badges.html">Badges</a>
                                    </li>
                                </ul>
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
                <div class="row">
                    <div class="col-lg-6">
                        <div class="profile-about-box">
                            <div class="top-bg"></div>
                            <div class="p-inner-content">
                                <div class="profile-img">
                                    <img src="../assets/images/profile/profile-user.png" alt="">
                                    
                                    <div class="active-online"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="up-photo-card mb-30">
                            <div class="icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="content">
                                <h4>
                                    Change Avatar
                                </h4>
                                <span>
                                    120x120p size minimum
                                </span>
                            </div>
                        </div>
                        <div class="up-photo-card">
                            <div class="icon">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="content">
                                <h4>
                                    Change Cover
                                </h4>
                                <span>
                                    1200x300p size minimum
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-info-box mt-30">
                    <div class="header">
                        About your Profile
                    </div>
                    <form data-parsley-validation method="post" class="content container">
                        <div class=" col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Profile Name</label>
                                    <input type="text" id="username" name="username" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Ville</label>
                                    <input type="text" id="username" name="username" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Pays</label>
                                    <input type="text" id="username" name="username" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Sex</label>
                                    <select name="" id="" required="required">
                                        <option value="" disabled selected>Select options</option>
                                        <option value="B">Man</option>
                                        <option value="G">Woman</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Twitter</label>
                                    <input type="text" id="username" name="username" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Github</label>
                                    <input type="text" id="username" name="username" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                                <label for="">Biography*</label>
                                <textarea rows="30" name="" placeholder="Write a little description about you..."></textarea>
                        </div><br>
                        <div class="col-md-12">
                            <div class="row" style="width: 102%">
                                <a href="profile.php" class="col-md-6">Discard All</a>
                                <input type="submit" class="col-md-6 submit-btn1">
                            </div>
                        </div>
                    </form>
                    <!-- <form data-parsley-validation method="post" class="content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label>Profile Name</label>
                                    <input for="name" require="required" type="text" placeholder="Profile Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Country</label>
                                <select name="" id="">
                                    <option value="" disabled selected>Select Country</option>
                                    <option value="">Man</option>
                                    <option value="">Woman</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Country</label>
                                    <input type="text" placeholder="Profile Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Town</label>
                                    <input type="text" placeholder="Public Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Github</label>
                                    <input type="text" placeholder="Profile Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Twitter</label>
                                    <input type="text" placeholder="Public Email">
                                </div>
                            </div>
                            <div class="own-checkbox col-md-6">
                                <small style="color: #333" for="">Are you single ?</small>
                                <label class="toggler-wrapper style-3">
                                    <input type="checkbox" >
                                    <div class="toggler-slider">
                                        <div class="toggler-knob"></div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Biography*</label>
                                    <textarea name="" placeholder="Write a little description about you..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Birthday</label>
                                    <input type="date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Occupation</label>
                                    <input type="text" placeholder="Occupation">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Status</label>
                                    <select name="" id="">
                                        <option value="">In a Relationship</option>
                                        <option value="">Single</option>
                                        <option value="">Marid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Birthplace</label>
                                    <input type="text" placeholder="Birthplace">
                                </div>
                            </div>
                        </div>
                        <div class="buttons  mt-30">
                            <input type="submit" name="login" value="Save Changes" class="custom-button">
                            <button class="custom-button2">Discard All</button>
                        </div>
                    </form> -->
                </div>
                <!-- <div class="input-info-box mt-30">
                    <div class="header">
                        Interests
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Favourite TV Shows</label>
                                    <textarea name="" placeholder="Favourite TV Shows"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Favourite Music Bands / Artists</label>
                                    <textarea name="" placeholder="Favourite Music Bands / Artists"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Favourite Movies</label>
                                    <textarea name="" placeholder="Favourite Movies"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Favourite Games </label>
                                    <textarea name="" placeholder="Favourite Games "></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Favourite Games </label>
                                    <textarea name="" placeholder="Favourite Games"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-info-box mt-30">
                    <div class="header">
                        Jobs & Education
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Title or Place</label>
                                    <input type="text" placeholder="Title or Place">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Year Started</label>
                                    <select name="" id="">
                                        <option value="">2014</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Year End</label>
                                    <select name="" id="">
                                        <option value="">2017</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Description</label>
                                    <textarea name="" id="" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Title or Place</label>
                                    <input type="text" placeholder="Title or Place">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Year Started</label>
                                    <select name="" id="">
                                        <option value="">2014</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="my-input-box">
                                    <label for="">Year End</label>
                                    <select name="" id="">
                                        <option value="">2017</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-input-box">
                                    <label for="">Description</label>
                                    <textarea name="" id="" placeholder="Description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- ========= Profile Section Start -->

<!-- ==========Newslater-Section========== -->
<?php require './partials/_footer.php' ?>

<!-- Mirrored from pixner.net/peyamba/peyamba/user-setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:10:00 GMT -->

</html>