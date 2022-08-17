<?php
    $title = 'list user';
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
                    Members
                </h2>
            </div>
        </div>
    </section>
    <!-- ==========Breadcrumb-Section========== -->

    <!-- ==========Community-Section========== -->
    <section class="community-section inner-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-filter">
                        <div class="left">
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                                <i class="fas fa-sliders-h"></i> Filter your search
                            </a>
                        </div>
                        <div class="right">
                            <span class="span">
                                Order By :
                            </span>
                            <div class="filter-right">
                                <select class="nice-select select-bar">
                                    <option value="">Latest Active</option>
                                    <option value="">NEW</option>
                                    <option value="">OLD</option>
                                    <option value="">POPULAR</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($users as $user): ?>
                <div class="col-lg-6">
                    <div class="single-friend">
                        <a href="profile.php?id=<?= $user->user_id ?>" class="name">
                            <img style="border-radius: 10px;" src="<?= get_avatar_url(get_session('email'), 120) ?>">
                            <div class="content">
                                <?= e($user->pseudo." ".$user->name ) ?>
                                <span class="isvarify">
                                    <i class="fas fa-check-circle"></i>
                                </span>
                                <p class="date">
                                    <?= $user->created_at ?>
                                </p>
                                <a href="profile.php?id=<?= $user->user_id ?>" class="connnect-btn">
                                    Connected
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endforeach ?>
            </div><br>
            <div class="row"><?= $pagination ?></div>
        </div>
    </section>
    <!-- ==========Community-Sectionn========== -->

    <!-- Filter Modal -->
    <div class="modal fade filter-p" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-between">
                    <h6 class="modal-title" id="exampleModalCenterTitle">Filter your search</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="join-now-box">
                        <div class="single-option">
                            <p class="title">
                                I am a :
                            </p>
                            <div class="option">
                                <div class="s-input mr-3">
                                    <input type="radio" name="gender" id="male"><label for="male">Male</label>
                                </div>
                                <div class="s-input">
                                    <input type="radio" name="gender" id="female"><label for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="single-option gender">
                            <p class="title">
                                Seeking a :
                            </p>
                            <div class="option">
                                <div class="s-input mr-4">
                                    <input type="radio" name="seeking" id="males"><label for="males">Man</label>
                                </div>
                                <div class="s-input">
                                    <input type="radio" name="seeking" id="females"><label for="females">Woman</label>
                                </div>
                            </div>
                        </div>
                        <div class="single-option age">
                            <p class="title">
                                Ages :
                            </p>
                            <div class="option">
                                <div class="s-input mr-3">
                                    <select class="select-bar">
                                        <option value="">18</option>
                                        <option value="">20</option>
                                        <option value="">24</option>
                                    </select>
                                </div>
                                <div class="separator">
                                    -
                                </div>
                                <div class="s-input ml-3">
                                    <select class="select-bar">
                                        <option value="">30</option>
                                        <option value="">35</option>
                                        <option value="">40</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="single-option last">
                            <p class="title">
                                Country :
                            </p>
                            <div class="option">
                                <div class="s-input mr-3">
                                    <select class="select-bar">
                                        <option>Select Country</option>
                                        <option value="">India</option>
                                        <option value="">Japan</option>
                                        <option value="">England</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="joun-button">
                            <button class="custom-button">Join Now!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========Newslater-Section========== -->
    <?php require './partials/_footer.php' ?>
<!-- Mirrored from pixner.net/peyamba/peyamba/members.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 19:10:32 GMT -->

</html>