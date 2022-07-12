<?php
    include '_header.php';
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!-- ==========Header-Section========== -->
<header class="header-section">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <a href="index.php">
                    <img src="../assets/images/logo/someone_logo.png" alt="logo">
                </a>
            </div>
            <ul class="menu">
                <li>
                    <a class="<?= ($activePage == 'list user') ? 'active':''; ?>" href="list_users.php">Seek Partner</a>
                </li>
                <?php if(isset($_SESSION['user_id']) || isset($_SESSION['pseudo'])): ?>
                    <div class="dropdown">
                        <a type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?= get_avatar_url(get_session('email')) ?>" alt="Profile image for <?= get_session('speudo') ?>">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="profile.php">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="user_setting.php">Edit User</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php"><i class="fa fa-logout"></i> Log out</a>
                        </div>
                    </div>
                <?php else: ?>
                    <li><a class="<?= ($activePage == 'login') ? 'active':''; ?>" href="login.php">Login</a></li>
                    <li><a class="<?= ($activePage == 'register') ? 'active':''; ?>" href="register.php">Sign Up</a></li>
                <?php endif ?>
            </ul>
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
    <!-- ==========Header-Section========== -->