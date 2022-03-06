<!-- Getting user id -->
<?php

    $username=$_SESSION['name'];
    $sql='select id_user from users where user = "'.$username.'"';
        
    $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
    
    while($row = mysqli_fetch_array($result))
        $id = $row['id_user'];

?>