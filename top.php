<!DOCTYPE HTML>

<?php
    // function to allow easy insertion of gallery code
    include("functions.php");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Creative Commons Showcase"> 
    <meta name="keywords" content="Creative Commons, images, gallery">
    <meta name="author" content="Makaia Hayes-Hemi">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Creative Commons Showcase</title>

        <!-- Change font later -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/simple-lightbox.css" />
    <link rel="stylesheet" href="css/gallery.css" />
    <!-- Edit the name of your style sheet 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/navigation.css">

    <!-- link to JQuery -->
    <script src="js/j_query_min.js"></script>

</head>

<body>

    <div class="wrapper">
    

        <div class="logo">
                    <a href="index.php"><img class="responsive" src="images/camera_logo.png" alt="s" /></a>
        </div>  <!-- / logo -->

        <div class="top-title">
         <h2> Steven Photography</h2>
         <p style="font-style: italic;">Capturing life's precious moments</p>
        </div><!--/top title -->

            <div class="header">
                <div class="menu-header">
        
                <i class="fa fa-bars"></i>

                <div class="menu-content">
                    <ul>
                        <li><a class="home" href="index.php">Home</a></li>
                        <li><a class="nav dropbtn" href="#">Gallery<i
                        class="fa fa-chevron-down"></i></a>
                            <ul class="dropdown">
                                <li><a class="nav" href="index.php?page=insects">Portraits</a></li>
                                <li><a class="#">Landscapes</a></li>
                                <li><a class="#">Events</a></li>
                            </ul>
                    
                        </li>   <!-- / gallery dropdown -->
                        
                        <li><a href="#">About</a></li>
                        <li><a href="index.php?page=links">Links</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>   
                </div> <!-- / menu content-->
            

            </div> <!-- / menu header -->
        </div> <!-- / header -->

    