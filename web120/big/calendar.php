<?php 
    include "includes/header.php";
?>

<!-- START LEFT COL -->
<section>
    <!-- Show/Hide Month View Calendar based upon resolution-->
    <div class='month-view embed-container'>
        <iframe src='https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FLos_Angeles&src=bnNsMzNsdjhmYm9iam5zYTQxNWtwMHNpcGtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23F6BF26&showTitle=0' style='border-width:0' width='800' height='600' frameborder='0' scrolling='no'></iframe>
    </div>

    <!-- Show/Hide Agenda View Calendar based upon resolution-->
    <div class="embed-container agenda-view">
    <iframe src='https://calendar.google.com/calendar/embed?mode=AGENDA&height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FLos_Angeles&src=bnNsMzNsdjhmYm9iam5zYTQxNWtwMHNpcGtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23F6BF26&showTitle=0' style='border-width:0' width='800' height='600' frameborder='0' scrolling='no'></iframe>
    </div>
</section>
<!-- END LEFT COL -->
    
<!-- START RIGHT COL -->
<aside>
    <h3>Free-ish Calendars</h3>
    <!-- Provide 3 or more links to free-ish calendar resources that developers like yourself might consider. Examples you should look into: localendar.com, tockify.com, and time.ly -->
    <ol>
        <li><a href="https://www.lifewire.com/free-online-calendars-1357935" target="_blank">Lifewire - List of the Best Online Calendars</a></li>
        <li><a href="https://www.techsoup.org/support/articles-and-how-tos/free-easy-ways-to-add-a-calendar" target="_blank">TechSoup - Free Ways to Add a Calendar to Your Website</a></li>
        <li><a href="https://localendar.com/elsie" target="_blank">Localendar</a></li>
    </ol>
    
    <!-- Video example -->
    <h3>Upcoming Events</h3>
    <h4>Northwest Folklife Festival &#40;May 24 - May 27&#41;</h4>
    <a href="https://www.nwfolklife.org/festival/" target="_blank">www.nwfolklife.org/festival/</a>
</aside>
<!-- END RIGHT COL -->

<?php 
    include "includes/footer.php";
?>