<!DOCTYPE html>
<html lang="en">
<head>
<title>Template</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="" />
<meta name="description" content="" />
<meta charset="utf-8">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/template.css" />
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/form.css" />
</head>
    
<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><a href="#"><i class="fa fa-fw fa-home"></i>
      Tristan's Final Project Template</a></h1>
    <nav>
        <ul class="topnav" id="myTopnav">
        <li><a href="#"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
        <li><a href="#"><span>About Us</span></a></li>
        <li><a href="#"><span>Find Help</span></a></li>
        <!-- Possible dropdown menu
        <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Link</span></a>
            <ul>
            <li><a href="#"><span>Sub Link 1</span></a></li>
            <li><a href="#"><span>Sub Link 2</span></a></li>
            <li><a href="#"><span>Sub Link 3</span></a></li>
            </ul>
        </li>
        -->
        <li><a href="#"><span>Appointments</span></a></li>
        <li><a href="#"><span>Contact Us</span></a></li>
        </ul>
    </nav>
</header> 
    
<!-- START LEFT COL -->
 <h2 class="pageID">Template</h2>
 
<!-- END HEADER -->

<!-- START LEFT COL -->
<section>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    
    <div class="box">
        <div class="box-item">
            <a href="https://placeholder.com"><img src="https://via.placeholder.com/100" alt="placeholder"></a>
        </div>
        <div class="box-item">
            <a href="https://placeholder.com"><img src="https://via.placeholder.com/100" alt="placeholder"></a>
        </div>
        <div class="box-item">
            <a href="https://placeholder.com"><img src="https://via.placeholder.com/100" alt="placeholder"></a>
        </div>
        <div class="box-item">
            <a href="https://placeholder.com"><img src="https://via.placeholder.com/100" alt="placeholder"></a>
        </div>
    </div>
</section>
<!-- END LEFT COL -->
    
<!-- START RIGHT COL -->
<aside>
    <h3>Header 3</h3>
    <ul>
        <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
        <li>Aliquam tincidunt mauris eu risus.</li>
        <li>Vestibulum auctor dapibus neque.</li>
    </ul>
</aside>
<!-- END RIGHT COL -->

<!-- START FOOTER -->
<footer>
  <p><small>&copy; 2018 - <?=date('Y')?> by <a href="#" target="_blank">Tristan Ramirez</a>, All Rights Reserved ~ <a href="#">Contact</a> ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
    </script>
</div>
<!-- END WRAPPER-->

</body>
</html>