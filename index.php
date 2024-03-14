<?php
/*
* The main template file
*/
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VCLBD | Versatile Creation Ltd.</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/fontawesome/css/all.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="index.html">VCLBD</a>
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
    <div class="container-fluid text-center py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3>Welcome to Versatile Creation Ltd.</h3>
                <img src="images/divider-purple.png" alt="divider" class="w-25" />
            </div>
        </div>

        <div class="row mt-4 d-flex justify-content-around">
            <div class="col-sm-3">
                <img src="images/makeup.jpg" alt="Makeup Image" class="card-img-top rounded-circle">
                <div class="card-body">
                    <p class="card-text">Hair &amp; make up</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="images/candles.jpg" alt="Candles Image " class="card-img-top rounded-circle">
                <div class="card-body">
                    <p class="card-text">Spa Facilities</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="images/retreat.jpg" alt="Retreat Image" class="card-img-top rounded-circle">
                <div class="card-body">
                    <p class="card-text">Take a tour</p>
                </div>
            </div>

        </div>

    </div>

    <div class="container-fluid text-center bg-dark py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3 class="text-light">Latest Spa Offers</h3>
                <img src="images/divider-silver.png" alt="divider" class="pb-4 w-25"/>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <h4 class="card-header py-5">
                        Family swim package<span class="font-weight-bold">$60</span>
                    </h4>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Our most popular swim package, great value for families or groups up to 12 people.</p>
                        </blockquote>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item font-italic">Up to 12 people</li>
                        <li class="list-group-item font-italic">Private session</li>
                        <li class="list-group-item font-italic">Swim lessons also available</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <h4 class="card-header py-5">
                        For the bride<span class="font-weight-bold">$40</span>
                    </h4>
                    <div class="card-body"> 
                        <blockquote class="blockquote mb-0">
                            <p>Our wedding packages are perfect for your big day. We can cater for groups large or small</p>
                        </blockquote>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item font-italic">Hair &amp; make up</li>
                        <li class="list-group-item font-italic">Groups or any size</li>
                        <li class="list-group-item font-italic">Champagne &amp; cocktails available</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <h4 class="card-header py-5">
                        Weekend pass<span class="font-weight-bold">$60</span>
                    </h4>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Take full advantage of all of the facilities we have to offer with our unlimited weekend position-absolute.</p>
                        </blockquote>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item font-italic">Pool &amp; sauna</li>
                        <li class="list-group-item font-italic">Full use of our gym</li>
                        <li class="list-group-item font-italic">Includes 2 treatments per person</li>
                    </ul>
                </div>
            </div>
        </div><!--Row-->
    </div><!--Container-->

    <!-- About Us Section -->

    <div class="container-fluid py-5 text-center bg-light">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <h3>About Us</h3>
                <img src="images/divider-purple.png" alt="divider" class="pb-4 w-25">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <p class="text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quas esse impedit quibusdam qui laudantium distinctio doloribus enim explicabo corporis, ut est velit obcaecati, sequi dignissimos libero ratione. Ullam, ad!
                    Similique, obcaecati magni voluptates eum ad quae minus architecto odio ipsum dicta nesciunt, neque alias nulla ut placeat aliquid ab accusamus? Reprehenderit, obcaecati facilis. Dicta ipsa molestias eos facilis iure!
                    Exercitationem adipisci obcaecati aliquid cumque modi sint nam neque ad eveniet tempora suscipit repellat repudiandae mollitia eaque sed non velit illo vitae quae enim, ab eum ducimus optio? Est, dolorum.
                    Iure quidem cum non ratione labore, corporis optio asperiores dolores? Hic beatae impedit dicta eum animi quibusdam ad. Molestias reiciendis facilis corporis culpa eos ex iste tempore at odit! Itaque!
                    Non adipisci id incidunt vel odio a aperiam, quibusdam, repellendus temporibus quaerat similique possimus placeat est reprehenderit, asperiores nemo recusandae ex. Illo ut reprehenderit quibusdam facilis magni recusandae cupiditate! Accusantium?
                </p>
            </div>
        </div>
    </div>

    <!-- Price List Section -->

    <div class="container-fluid py-5 bg-dark">
        <div class="row">
            <div class="col-sm-6 offset-md-3 text-center">
                <h3 class="text-light">Price List</h3>
                <img src="images/divider-silver.png" alt="divider" class="pb-4 w-25">
            </div>
        </div>
        <div class="row my-4">
            <div class="col-sm-8">
                <img src="images/massage.jpg" alt="massage picture">
            </div>
            <div class="col-sm-4">
                <h4 class="title text-center">Massages</h4>
                <ul class="text-light">
                    <li class="list-group-item">Massage 1 <em>-$10</em></li>
                    <li class="list-group-item">Massage 2 <em>-$10</em></li>
                    <li class="list-group-item">Massage 3 <em>-$10</em></li>
                    <li class="list-group-item">Massage 4 <em>-$10</em></li>
                    <li class="list-group-item">Massage 5 <em>-$10</em></li>
                </ul>
            </div>
            </div>
            <div class="row my-4">
                <div class="col-sm-4">
                    <h4 class="title text-center">Facials</h4>
                    <ul class="text-light">
                        <li class="list-group-item">Facial 1 <em>-$10</em></li>
                        <li class="list-group-item">Facial 2 <em>-$10</em></li>
                        <li class="list-group-item">Facial 3 <em>-$10</em></li>
                        <li class="list-group-item">Facial 4 <em>-$10</em></li>
                        <li class="list-group-item">Facial 5 <em>-$10</em></li>
                    </ul>
                </div>
                <div class="col-sm-8">
                    <img src="images/facial.jpg" alt="facial picture">
                </div>
            </div>
            <div class="row my-4">
                <div class="col-sm-8">
                    <img src="images/cosmetics.jpg" alt="cosmetics picture">
                </div>
                <div class="col-sm-4">
                    <h4 class="title text-center">Cosmetics</h4>
                    <ul class="text-light">
                        <li class="list-group-item">Cosmetics 1 <em>-$10</em></li>
                        <li class="list-group-item">Cosmetics 2 <em>-$10</em></li>
                        <li class="list-group-item">Cosmetics 3 <em>-$10</em></li>
                        <li class="list-group-item">Cosmetics 4 <em>-$10</em></li>
                        <li class="list-group-item">Cosmetics 5 <em>-$10</em></li>
                    </ul>
                </div>
                </div>
        </div>
        <!--Footer Section-->
        <footer class="container-fluid py-5">
            <div class="row">
                <div class="col-sm-4">
                    <h5>Stay Connected:</h5>
                <form>
                    <div class="row">
                        <div class="col-md-8">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">
                                Sign up
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- social media icons -->
                <div class="my-3">
                    <i class="fab fa-facebook-square fa-2x"></i>
                    <i class="fab fa-instagram-square fa-2x"></i>
                    <i class="fab fa-pinterest-square fa-2x"></i>
                    <i class="fab fa-youtube-square fa-2x"></i>
                </div>
                </div>
                <div class="col-sm-4">
                    <h5>Out Setting</h5>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eveniet accusantium praesentium quibusdam nihil perferendis qui adipisci vitae necessitatibus dolor omnis, iste quo sit accusamus ex. Tempora modi natus similique.
                    Quibusdam beatae, ex recusandae velit dignissimos nesciunt quae sunt enim. Odit ipsa hic autem molestiae natus officia perspiciatis, cumque dicta inventore reiciendis, cupiditate repellat porro asperiores incidunt nulla fuga quisquam! </p>
                </div>
                <div class="col-sm-4">
                    <h5>Navigation</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="blog.html">Blog</a></li>
                        <li class="list-group-item"><a href="contact.html">Contact</a></li>
                        <li class="list-group-item"><a href="privacy-policy.html">Pivacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    <!-- JS -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>