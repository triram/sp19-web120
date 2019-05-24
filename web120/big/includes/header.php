<?php 
    include 'big-config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="" />
<meta name="description" content="" />
<meta charset="utf-8">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/big.css" />
<link rel="stylesheet" href="css/form.css" />
</head>
    
<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i>
      Tristan's Web Developer Examples</a></h1>
    <nav id="cssmenu">
        <ul>
        <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120 Portal</span></a></li>
        <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
        <li><a href="flexbox.php"><span>Flexbox</span></a></li>
        <li><a href="galleries.php"><span>Galleries</span></a></li>
        <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
            <ul>
            <li><a href="calendar.php"><span>Calendar</span></a></li>
            <li><a href="map.php"><span>Map</span></a></li>
            <li><a href="youtube.php"><span>YouTube</span></a></li>
            </ul>
        </li>
        <li><a href="shoppingcarts.php"><span>Shopping Carts</span></a></li>
        <li><a href="siteapp.php"><span>Site vs App</span></a></li>
        <li><a href="webcam.php"><span>Web Cam</span></a></li>
        </ul>
    </nav>
</header> 
    
<!-- START LEFT COL -->
 <h2 class="pageID"><?=$PageID?></h2>

    
