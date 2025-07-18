<!DOCTYPE HTML>

<?php
    //function ti allow easy insert of gallery code
    include("functions.php")
?>

<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="Creative Commons Showcase">
    <meta name="keywords" content="Creative Commons, images, gallery">
    <meta name="author" content="Miss Gottschalk">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">


    <title>Steven Photography Studio - Portraits, Events & Landscapes</title>


    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet">


    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/simple-lightbox.css" />
    <link rel="stylesheet" href="css/gallery.css" />


    <!-- Edit the name of your style sheet 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/navigation.css" />
    <link rel="stylesheet" href="css/form.css" />


    <!--/Link to JQuery -->
    <script src="js/j_query_min.js"></script>


</head>


<body>


<div class="wrapper">

    <div class="logo">
        <a href="index.php"><img class="responsive" src="images/camera_logo.png"
        alt="s" /></a>
    </div><!--/logo -->

    <div class="top-title">
        <h2> Steven Photography</h2>
        <p style="font-style: italic;">Capturing life's precious moments</p>
    </div><!--/top title -->


    <div class="header">
        <div class="menu-header">
        
            <i class="fa fa-bars"></i>

            <div class="menu-content">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a class="dropbtn" href="#">Gallery <iclass="fa fa-chevron-down></i></a>
                        <ul class="dropdown">
                            <li><a class nav="nav" href="index.php?page=portraits">Portraits</a></li>
                            <li><a class nav="nav" href="index.php?page=landscapes">Landscapes</a></li>
                            <li><a class nav="nav" href="index.php?page=events">Events</a></li>
                        </ul>
                
                    </li> <!--/gallery dropdown -->
                    <li><a class nav="nav" href="#">About</a></li>
                    <li><a class nav="nav" href="index.php?page=links">links</a></li>
                    <li><a class nav="nav" href="index.php?page=contact">Contact</a></li>
                </ul>
            </div>
        
        </div>

    </div><!--/header -->
    
    <!--/main div -->
    <?php

    if (!isset($_REQUEST['page'])) {
        include("home.php");
    }


    else {
        // prevents users from navigating through the file system
        $page=preg_replace('/[^0-9a-zA-Z]-/','', $_REQUEST['page']);
        include("$page.php");
    }
    ?>



    <div class="box footer">
        CC Steven 20XX
    </div> <!--/footer -->

</div><!--/wrapper -->

    <!--/Add jquary -->
    <script>
        $('.dropbtn').click(function()
            {
                $('.dropdown').toggleClass('display');
            }
        )

        // naviagtion button clickable
        $('.fa-bars').click(function()
        {
            $('.menu-content').toggle('');
        })

    </script>

    <script src="js/simple-lightbox.min.js"></script>


    <script>
     (function() {
        var $gallery = new SimpleLightbox('.gallery a', {});
     })();
    </script>


</body>
</html>





