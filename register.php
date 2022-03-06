<?php
require 'login_header.php';
include 'functions/f_register.php';
?>

    <div class="login-box">
        <h1 id="title">Sign up</h1>
        <form method="POST" action="">
            <div class="text-box">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="register_username" placeholder="Username" class="login_input">
            </div>

            <div class="text-box">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" name="register_password" placeholder="Password" class="login_input">
            </div>

            <div class="text-box">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" name="rep_password" placeholder="Repeat password" class="login_input">
            </div>

                <br>
                <input type="submit" name="submit" value="Register" class="submit_btn" id="myButton">

        </form>
        <br><br>
        <p>Already have an account? <a href="login.php">Sign in</a></p>
    </div>

<?php

require 'login_footer.php';
?>