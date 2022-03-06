<?php
require_once 'login_header.php';
include 'functions/f_login.php';

?>
    <div class="login-box">
        <h1 id="title">Login</h1>
        <form method="POST" action="">
            <div class="text-box">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="login_username" placeholder="Username" class="login_input">
            </div>

            <div class="text-box">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" name="login_password" placeholder="Password" class="login_input">
            </div>

                <br>
                <input type="submit" name="submit" value="Login" class="submit_btn">

        </form>
        <br><br>
        <p style="text-align:center;">Are you new ? <a href="register.php" style="text-decoration:none;">Sign up here</a></p>
    </div>

<?php

require 'login_footer.php';
?>

