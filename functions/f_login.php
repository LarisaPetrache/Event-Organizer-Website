<!-- Login function -->

<?php

    session_start();
    include 'connectDB.php';

    if(isset($_POST['login_username'])){

        $username=$_POST['login_username'];
        $password=$_POST['login_password'];

        $sql="select * from users where user='".$username."'AND pass='".$password."' limit 1";

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            $_SESSION['name'] = $username;
            header('Location: events.php');
            exit();
        }
        else{
            
            echo '<script type="text/javascript">';
            echo ' alert("Incorrect username or password")';
            echo '</script>';
        }
    }
    $conn->close();

?>
