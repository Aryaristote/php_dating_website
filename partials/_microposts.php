<?php foreach($microposts as $micropost): ?>
    <div class="profile-single-post">
        <div class="p-s-p-header-area">
            <div class="img">
                <img class="rounded-circle" src="<?= get_avatar_url($user->email) ?>" alt="">
                <div class="active-online"></div>
            </div>
            <h6 class="name">
                <?= e($user->pseudo." ".$user->name) ?>
            </h6>
            <span class="is-varify">
                <i class="fas fa-check"></i>
            </span>
            <span class="post-time">
                <?= e($micropost->created_at) ?>
            </span>
        </div>
        <div class="p-s-p-content">
            <p>
                <?= nl2br(e($micropost->content)) ?>
            </p>
        </div>
        <div class="p-s-p-content-footer">
            <div class="left">
                <a href="#" class="comment">Comment</a>
                <a href="#" class="link"><i class="far fa-star"></i></a>
            </div>
            <div class="right">
                <a href="#" class="link"><i class="far fa-star"></i></a>
                <select class="nice-select select-bar">
                    <option value="">ALL</option>
                    <option value="">NEW</option>
                    <option value="">OLD</option>
                    <option value="">POPULAR</option>
                </select>
            </div>
        </div>
    </div>
<?php endforeach ?>

    <div class="profile-single-post">
        <div class="p-s-p-header-area">
            <div class="img">
                <img src="assets/images/profile/profile-user-sm.png" alt="">
                <div class="active-online"></div>
            </div>
            <h6 class="name">
                Albert Don
            </h6>
            <span class="is-varify">
                <i class="fas fa-check"></i>
            </span>
            <span class="usewrname">
                @albertdon
            </span>
            <span class="post-time">
                . 19h
            </span>
        </div>
        <div class="p-s-p-content">
            <p>
                Lorem ipsum dolor sit amet, consectetur 
                adipiscing elit. Nam vel porta felis.
            </p>
            <img src="assets/images/profile/s-p-img1.jpg" alt="">
        </div>
        <div class="p-s-p-content-footer">
            <div class="left">
                <a href="#" class="comment">Comment</a>
                <a href="#" class="link"><i class="far fa-star"></i></a>
            </div>
            <div class="right">
                <a href="#" class="link"><i class="far fa-star"></i></a>
                <select class="nice-select select-bar">
                    <option value="">ALL</option>
                    <option value="">NEW</option>
                    <option value="">OLD</option>
                    <option value="">POPULAR</option>
                </select>
            </div>
        </div>
    </div>
<a href="#" class="load-more">Load More Posts..</a>