<!-- Meniu -->
<?php
    
    function meniu() {
        $meniu = array(
            '1' => array ('Log out', 'index.php'),
            '2' => array ('Create event', 'create_event.php'),
            '3' => array ('All events', 'all_events.php'),
            '4' => array ('Calendar', 'events.php')
        );	
        
        $nr_meniuri = count($meniu);	
            for ($i=1; $i<=$nr_meniuri; $i++)
                echo "<a class='menu' href='".$meniu[$i][1]."'>&emsp;&emsp;".$meniu[$i][0]."</a>";
    }
?>