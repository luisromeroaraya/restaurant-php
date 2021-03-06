<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Empanadas Restaurant</title>
        <meta charset="utf-8" />

        <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
        <link rel="manifest" href="icons/site.webmanifest">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        
    </head>

    <body class="container bg-image">

        <header class="container d-flex justify-content-center bg-light fixed-top">
            <nav class="navbar navbar-expand-md navbar-light bg-light d-flex">
                <a class="navbar-brand" href="index.html"><img src="images/logo.svg" height="80px" alt="Logo Empanadas"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link m-auto" href="index.html">Welcome</a>
                        <a class="nav-item nav-link m-auto" href="menu.html">Menu</a>
                        <a class="nav-item nav-link m-auto active" aria-current="page" href="gallery.php">Gallery</a>
                        <a class="nav-item nav-link m-auto" href="restaurants.html">Restaurants</a>
                        <a class="nav-item nav-link m-auto" href="contact.php">Contact</a>
                        <a class="nav-item nav-link m-auto" href="backoffice.php">Backoffice</a>
                    </div>
                </div>
            </nav>
        </header>

        <main class="mask"> 
            <section id=jumbotron>
                <div id="carouselBanner" class="carousel slide carousel-fade shadow" data-bs-ride="carousel">
                    <!--INDICATORS-->
                    <ul class="carousel-indicators">
                        <li data-bs-target="#carouselBanner" data-bs-slide-to="0" role="button"></li>
                        <li data-bs-target="#carouselBanner" data-bs-slide-to="1" role="button"></li>
                        <li data-bs-target="#carouselBanner" data-bs-slide-to="2" role="button"></li>
                        <li data-bs-target="#carouselBanner" data-bs-slide-to="3" role="button" class="active"></li>
                        <li data-bs-target="#carouselBanner" data-bs-slide-to="4" role="button"></li>
                    </ul>
                    <!-- SLIDESHOW -->
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="img-fluid w-100" src="images/empanada_tucumana_argentina-md.jpg" alt="Empanada Tucumana Argentina"/>
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="display-3">Argentina</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <a class="btn btn-light btn-md" href="index.html#argentina" role="button">Learn more ??</a>
                              </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid w-100" src="images/empanada_saltena_bolivia-md.jpg" alt="Empanada Saltena Bolivia" />
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="display-3">Bolivia</h2>
                                <p>Lorem ipsum quidem fuga numquam iste aliquid.</p>
                                <a class="btn btn-light btn-md" href="index.html#bolivia" role="button">Learn more ??</a>
                              </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid w-100" src="images/empanada_pastel_brasil-md.jpg" alt="Empanada Pastel Brasil" />
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="display-3">Brasil</h2>
                                <p>Lorem ipsum inventore ratione architecto at quis a, iusto qui.</p>
                                <a class="btn btn-light btn-md" href="index.html#brasil" role="button">Learn more ??</a>
                              </div>
                        </div>
                        <div class="carousel-item active">
                            <img class="img-fluid w-100" src="images/empanada_pabelloncriollo_venezuela-md.jpg" alt="Empanada Pabellon Criollo Venezuela" />
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="display-3">Venezuela</h2>
                                <p>Lorem ipsum quae repudiandae ex magni officiis.</p>
                                <a class="btn btn-light btn-md" href="index.html#venezuela" role="button">Learn more ??</a>
                              </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid w-100" src="images/empanada_pino_chile-md.jpg" alt="Empanada Pino Chile" />
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="display-3">Chile</h2>
                                <p>Lorem ipsum quae repudiandae ex magni officiis.</p>
                                <a class="btn btn-light btn-md" href="index.html#chile" role="button">Learn more ??</a>
                              </div>
                        </div>
                    </div>
                    <!--CONTROLS-->
                    <a class="carousel-control-prev" href="#carouselBanner" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselBanner" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>

            <section class="container text-dark" id=middle>
                <div class="row d-flex justify-content-center mb-4">
                    <article class="col-12 col-md-10 mb-4" id=pictures>
                        <h2 class="text-center">Gallery</h2>
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <?php
                                include "../db.php"; // open database
                                $request = $db->query('SELECT * FROM gallery'); // get elements from database
                                // show elements from database
                                while ($image = $request->fetch()) {
                                    $country = $image['country'];
                                    $text = $image['text'];
                                    $filename = "gallery/".$image['filename'];
                                    echo"   <div class='col'>
                                            <div class='card h-100'>
                                            <a href=$filename><img src=$filename class='card-img-top' alt=$text></a>
                                            <div class='card-body'>
                                            <h5 class='card-title'>$country</h5>
                                            <p class='card-text'>$text</p>
                                            </div>
                                            </div>
                                            </div>
                                        ";
                                }
                                $request->closeCursor(); // close database
                                
                            ?>
                        </div>
                    </article>
                </div>
            </section>
        </main>

        <footer class="container bg-light fixed-bottom">
            <div class="row text-center">
                <div class="col text-dark">
                    <p>??2020 by Empanadas. Created with Visual Studio Code.</p>
                </div>
                <div class="col text-dark">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm text-dark" href="https://www.facebook.com" role="button"><i class="fab fa-facebook"></i></a>
                            <a class="btn-floating btn-sm text-dark" href="https://www.twitter.com" role="button"><i class="fab fa-twitter"></i></a>
                            <a class="btn-floating btn-sm text-dark" href="https://www.instagram.com" role="button"><i class="fab fa-instagram"></i></a>
                            <a class="btn-floating btn-sm text-dark" href="https://www.youtube.com" role="button"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    </body>
</html>