<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Sweet Alert Script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <title>Event Organizer</title>
</head>

<body>

    <?php

        //Check if any user is sign in
        session_start();
        if (!isset($_SESSION['name']))
        {
            header('Location: index.php');
        }

        date_default_timezone_set("Europe/Bucharest");
    ?>

    <header>

        <h1><i class="fa fa-book">_</i>Event Organizer</h1>
        <?php
            include 'functions/meniu.php';
            meniu();
        ?>

    </header>

    <section>
        <div class="box">
            <?php

                if(strcmp($_SESSION['name'],"admin") == 0)
                    echo '<img id="profile_img" src="images/profile_admin.jpg" alt="poza de profil">';
                else echo  '<img id="profile_img" src="images/profile.png" alt="poza de profil">';

            ?>
            <span id="nume">
                <?php
                    echo $_SESSION['name'];
                ?>
            </span>
        </div>

        <div class="flex">
            <div class="events">
                <h1><?php echo date("l"); ?></h1>
                <h1 style="font-size: 100px;"><?php echo date("d M"); ?></h1>
                <hr><br><br><br>

                <p>Events this month</p> <br>

                <?php
                    include "functions/events_this_month.php";
                ?>
            </div>
