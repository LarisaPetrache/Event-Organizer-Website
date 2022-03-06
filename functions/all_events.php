<!-- Show all user's events -->
<style>
.all_events{
    background: none;
    color: rgb(218, 212, 245);
    border: none;
    resize: none;

    font-size: 20px;
    padding: 20px 0px 20px 27px;
}

textarea::-webkit-scrollbar {
  width: 1em;
}

textarea::-webkit-scrollbar-thumb {
  background-color: none;
}
</style>

<?php

    include 'connectDB.php';
    include 'functions/getID.php';

    $month = array( 
        '1' => "January",
        '2' => "February",
        '3' => "March",
        '4' => "April",
        '5' => "May",
        '6' => "June",
        '7' => "July",
        '8' => "August",
        '9' => "September",
        '10' => "October",
        '11' => "November",
        '12' => "December",
    );

    $content = "";
    foreach($month as $i => $name){
        $sql= "select event_name, day(date) as day, month(date) as month from events where id_user = $id
        and month(date) = $i
        order by month,day";

        $result = $conn->query($sql);

        $content .= $name."\r\n"."\r\n";
        while($row = mysqli_fetch_array($result))
            $content .="✦ ".$row['day']." - ".$row['event_name']."\r\n";
        $content .= "\r\n";

    }

    echo "<textarea readonly rows='25' cols='100' class='all_events'>";
        echo $content;
    echo "</textarea>";

?>
