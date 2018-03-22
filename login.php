<?php
include ('config.php');
include (ROOT_PATH . '/includes/registration_login.php');
include (ROOT_PATH . '/includes/head_section.php');
?>
<div class="container">
    <?php include (ROOT_PATH . '/includes/navbar.php'); ?>
    <div style="width: 40%; margin: 20px auto;">
<form method="post" action="login.php">
        <h2>Login</h2>
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button name="login_btn" type="submit" class="btn">Log in</button>
    <p>
        Not yet a member? <a href="register.php">Sign up</a>
    </p>
</form>
    </div>
    <?php include (ROOT_PATH . '/includes/footer.php');?>
