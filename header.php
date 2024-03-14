<?php
/*
* The header for our theme
*/
?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/fontawesome/css/all.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- <title>VCLBD | Versatile Creation Ltd.</title> -->

    <?php wp_head(); ?> <!-- Header -->

  </head>


  <body <?php body_class(); ?>> <!-- Adding custom css class with an array array('custom','custom2') -->
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo esc_url(home_url())?>"><?php echo get_bloginfo('name') ?></a> <!-- Wordpress site name and site home url -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                </ul>
                </div>
            </div> 
        </nav>
        <section class="container-fluid">
            <div class="row position-relative d-flex justify-content-center align-items-center text-center">
            <img src="images/lake.jpg" alt="lake background" class="header_img">
            <div class="position-absolute feature-bg">
                <p class="feature-text">FULL RESPONSIVE<br> PREMIUM CORPORATE THEME<br> FOR WORDPRESS.</p>
            </div>    
            </div>
        </section>
    </header>