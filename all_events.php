<?php
    require_once 'header.php';
?>

        <div class="create_event_box">
            <div class="title">
                <p id="cal">All events</p>
            </div>

            <?php
                include "functions/all_events.php";
            ?>
            
        </div>
<!-- Div-ul de la calendar_box -->
    </div>
<!-- Div-ul de la flex -->
</div>

<?php
    require_once 'footer.php';
?>