<!-- Register function -->
<?php

    session_start();
    include 'connectDB.php';
    
    if(isset($_POST['register_username'])){
        
        $username=$_POST['register_username'];
        $password=$_POST['register_password'];
        $rpassword=$_POST['rep_password'];

        if(strcmp($password,$rpassword) == 0){
            if(strlen($password) >= 6){

                $sql="insert into users (id_user, user, pass) values ('', '".$username."', '".$password."');";
    
                if ($conn->query($sql) === TRUE) {
                    $_SESSION['name'] = $username;
                    header('Location: events.php');
                }
            }
            else {
                echo '<script type="text/javascript">';
                echo ' alert("Password length must be longer than 6 characters")';
                echo '</script>';
            }
        }
        else {
                echo '<script type="text/javascript">';
                echo ' alert("Password doesnt match")';
                echo '</script>';
        }
    }

    $conn->close();
?>