<?php
    require_once 'header.php';
?>

    <link rel="stylesheet" href="styles/create_event_style.css">

        <div class="create_event_box">
            <div class="title">
                <p id="cal">Create New Event</p>
            </div> 

            <form method="POST" action="" class="form_box">
                <div class="text_box">
                    <label for="name">Event name</label><br>
                    <input type="text" name="event_name" placeholder="" class="create_input">
                </div>

                <div class="text_box">
                    <label for="date">Date</label><br>
                    <input type="date" name="event_date" class="create_input" max="2021-12-31" min="2021-01-01">
                </div>

                    <br>
                    <div style="display: flex;">
                        <input type="submit" name="submit" value="Create" class="submit_btn">
                        <input type="reset" value="Reset" class="submit_btn">
                    </div>
            </form>

            <?php
                include 'functions/f_create_event.php';
            ?>

        </div>
<!-- Div-ul de la calendar_box -->
    </div>
<!-- Div-ul de la flex -->
</div>

<?php
    require_once 'footer.php';
?>
