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
                    <a class="<?= ($activePage == 'index') ? 'active':''; ?>" href="index.php">Home</a>
                </li>
                <?php if(isset($_SESSION['user_id']) || isset($_SESSION['pseudo'])): ?>
                    <li><a href="profile.php" class="<?= ($activePage == 'profile') ? 'active':''; ?>">Profile</a></li>
                    <button class="custom-button"><a href="logout.php"><i class="fa fa-logout"></i> Log out</a></button>
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