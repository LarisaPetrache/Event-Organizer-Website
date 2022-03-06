<!-- Create event -->
<?php

    include 'connectDB.php';

    if(isset($_POST['event_name']) && isset($_POST['event_date'])){
        
        $evName=$_POST['event_name'];
        $evDate=$_POST['event_date'];

        //Getting user id
        include 'functions/getID.php';

        //Insert the event into database
        $sql="insert into events (id_event, id_user, event_name, date) 
        values ('', '".$id."', '".$evName."', '".$evDate."');";

        $insert_result = $conn->query($sql);

        echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Event Created !"
                    });
                </script>';

    }
    $conn->close();
?>
