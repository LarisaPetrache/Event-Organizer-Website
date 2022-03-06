<!-- Show the events for this month -->
<style>
.month_events{
    background-color: rgb(69, 56, 112);
    color: rgb(218, 212, 245);
    border: none;
    font-size: 14px;
    resize: none;
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

    $this_month = intval(date("m"));
    $today = intval(date("j"));

    $sql= 'select event_name, day(date) as day from events where id_user = "'.$id.'" and 
    month(date) = "'.$this_month.'" and
    day(date) >= "'.$today.'" 
    order by day';

    $result = $conn->query($sql);

    echo "<textarea readonly rows='26' cols='40' class='month_events'>";
    $OK=0;
      while($row = mysqli_fetch_array($result)){
        $OK=1;
        echo $row['day']." - ".$row['event_name']."\r\n";
      }
      if($OK == 0)
        echo "No events yet.";
    echo "</textarea>";

?>
