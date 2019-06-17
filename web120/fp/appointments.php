<?php
    include "includes/header.php";
?>

<!-- START LEFT COL -->
<section>
    
    <!-- Show/Hide Month View Calendar based upon resolution-->
    <div class='month-view embed-container'>
        <iframe src='https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FLos_Angeles&src=bnNsMzNsdjhmYm9iam5zYTQxNWtwMHNpcGtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23F6BF26&showTitle=0' style='border-width:0' width='800' height='600'></iframe>
    </div>

    <!-- Show/Hide Agenda View Calendar based upon resolution-->
    <div class="embed-container agenda-view">
    <iframe src='https://calendar.google.com/calendar/embed?mode=AGENDA&height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FLos_Angeles&src=bnNsMzNsdjhmYm9iam5zYTQxNWtwMHNpcGtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23F6BF26&showTitle=0' style='border-width:0' width='800' height='600'></iframe>
    </div>
</section>
<!-- END LEFT COL -->
    
<!-- START RIGHT COL -->
<aside>
    <h3>Schedule Appointments</h3>
    <p>Appointments are available 24/7, unless otherwise posted.<br />
    Refer to the calendar to check for available times.</p>
    <?php
    include "includes/schedule.php";
    ?>
</aside>
<!-- END RIGHT COL -->

<?php
    include "includes/footer.php";
?>