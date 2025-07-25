<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>Reader | Hugo Personal Blog Template</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="This is meta description">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Hugo 0.74.3" />

    <!-- plugins -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="plugins/slick/slick.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css" media="screen">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <meta property="og:title" content="Reader | Hugo Personal Blog Template" />
    <meta property="og:description" content="This is meta description" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00" />
</head>

<body>
    <!-- navigation -->
    <header class="navigation fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-white alert alert-dark">
                <a class="navbar-brand order-1" href="index.html">
                <h1 id='hb'>l'HB</h1>
                </a>
                <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/"> accueil  </a>
                            
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                nos services <i class="ti-angle-down ml-1"></i>
                            </a>
                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="shop">shop</a>

                                <a class="dropdown-item" href="about-us.html">About Us</a>

                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Pages <i class="ti-angle-down ml-1"></i>
                            </a>
                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="author.html">Author</a>

                                <a class="dropdown-item" href="author-single.html">Author Single</a>

                                <a class="dropdown-item" href="advertise.html">Advertise</a>

                                <a class="dropdown-item" href="post-details.html">Post Details</a>

                                <a class="dropdown-item" href="post-elements.html">Post Elements</a>

                                <a class="dropdown-item" href="tags.html">Tags</a>

                                <a class="dropdown-item" href="search-result.html">Search Result</a>

                                <a class="dropdown-item" href="search-not-found.html">Search Not Found</a>

                                <a class="dropdown-item" href="privacy-policy.html">Privacy Policy</a>

                                <a class="dropdown-item" href="terms-conditions.html">Terms Conditions</a>

                                <a class="dropdown-item" href="404.html">404 Page</a>

                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">inscription</a>
                        </li>
                    </ul>
                </div>

                <div class="order-2 order-lg-3 d-flex align-items-center">
                    <select class="m-2 border-0 bg-transparent" id="select-language">
                        <option id="en" value="" selected>En</option>
                        <option id="fr" value="">Fr</option>
                    </select>

                    <!-- search -->
                    <form class="search-bar">
                        <input id="search-query" name="s" type="search" placeholder="recherce">
                    </form>

                    <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse"
                        data-target="#navigation">
                        <i class="ti-menu"></i>
                    </button>
                </div>

            </nav>
        </div>
    </header>

    <main id="main" class="main">

    
@yield('content')
    

  </main>
  
    <!-- /navigation -->
    <div class="header text-center alert alert-dark">
        <div class="container alert alert-dark " id='bg'  >
            <div class="row alert alert-dark" >
                <div class="col-lg-9 mx-auto alert alert-dark" >
                 <h1 class="mb-4" id='hb'>Bienvenue a L'HB</h1>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="text-default" href="">
                                &nbsp; &nbsp; </a></li>
                        <li class="list-inline-item text-primary">WELCOM</li><br><br>
                     <a class="btn btn-primary" id='' href='reservation'>faite vos reservations</a>

                    </ul>
                </div>
            </div>
        </div>



        

        <svg class="header-shape-1" width="39" height="40" viewBox="0 0 39 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z"
                stroke="#040306" stroke-miterlimit="10" />
            <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
            <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
                stroke-miterlimit="10" />
        </svg>


        <svg class="header-shape-2" width="39" height="39" viewBox="0 0 39 39" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d)">
                <path class="path"
                    d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z" />
                <path
                    d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z"
                    stroke="#040306" stroke-miterlimit="10" />
            </g>
            <defs>
                <filter id="filter0_d" x="0.905273" y="0" width="37.8663" height="38.1979" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                    <feOffset dy="4" />
                    <feGaussianBlur stdDeviation="2" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                </filter>
            </defs>
        </svg>


        <svg class="header-shape-3" width="39" height="40" viewBox="0 0 39 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z"
                stroke="#040306" stroke-miterlimit="10" />
            <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
            <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
                stroke-miterlimit="10" />
        </svg>


        <svg class="header-border" height="240" viewBox="0 0 2202 240" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1 123.043C67.2858 167.865 259.022 257.325 549.762 188.784C764.181 125.427 967.75 112.601 1200.42 169.707C1347.76 205.869 1901.91 374.562 2201 1"
                stroke-width="2" />
        </svg>
    </div>

    <section class="section-sm">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <div class="image-wrapper">
                        <img id='image' class="img-fluid w-100" src="images/h.jpg">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="content pl-lg-3 pl-0">
                        <h2 id='hb' class=' alert alert-dark'>BIENVENUE A L'HOTEL DE BOUNTOUNDOUR</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Velit massa vitae felis augue. In
                            venenatis scelerisque accumsan egestas mattis. Massa feugiat in sem pellentesque.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-sm d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 id='hb' class=' alert alert-dark'>Servire nos clients <br> est notre objectif principal</h2>
                </div>



                <div class="card" style="width: 30rem;" >
                    <img id='image' src="images/VAC.jpg"  class="card-img-top" alt="...">
                    <div class="card-body" id='bgc'>
                        <h3 id='res' class="border-bottom pb-3 mb-3 mx-2">Reserver vos logements de vacance </h3>
                        </h3>
                        <p id=class="mb-2">Disponible avec des logements de qualite luxe et bien equiper</p>
                        <p id='res'>l'HB a Saint-louis</p>
                    </div>
                </div>

                <div class="card" style="width: 30rem;" >
                    <img id='image' src="images/conf.jpg" class=" img-fluid card-img-top" alt="...">
                    <div class="card-body" id='bgc'>
                        <h3 id='res' class="border-bottom pb-3 mb-3 mx-2"> Reserver vos salles de conference</h3>
                        <p class="mb-2">Disponible avec des salles de luxe et bien equiper</p>
                        <p id='res'>l'HB Saint-louis</p>
                    </div>
                </div>


                

                <div class="card" style="width: 30rem;">
                <br><br> <br><br><br><br><br>... <img id='image' src="images/ch.jpg" class="card-img-top" alt="...">
                    <div class="card-body" id='bgc'>
                        <h3 class="border-bottom pb-3 mb-3 mx-2" id='res'>Reserver vos chambres a coucher</h3>
                        <p class="mb-2">Disponible avec des chembres de luxe et bien equiper</p>
                        <p id='res'>l'HB a Saint-louis</p>
                    </div>
                </div>

                <div class="card" style="width: 30rem;">
                   ... <img id='image' src="images/table.jpg" class="card-img-top" alt="...">
                    <div class="card-body" id='bgc'>
                        <h3 class="border-bottom pb-3 mb-3 mx-2" id='res'>Reserver vite vos tables a manger </h3>
                        <p class="mb-2">Disponible avec des tables de luxe et bien equiper</p>
                        <p id='res'>l'HB a Saint-louis</p>

                    </div>
                </div>

            </div>
        </div>       
    </section>

    <section class="section wave">
        <img src="images/backgrounds/wave-bg.svg" class="wave-bg">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <h2 class="mb-4">L'ideal, pour un sejour unique</h2>
                    <p>Situer au Senegal,dans la commune de de Gandiol dans un village de nature extraordinaire denommé "keur Barka"</p>
                </div>
                 <div class="col-lg-4 col-md-6">
                  <img src="images/mission.png" class="img-fluid">
                </div>
            </div>
        </div>


        <svg class="wave-shape-1" width="39" height="40" viewBox="0 0 39 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z"
                stroke="#040306" stroke-miterlimit="10" />
            <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
            <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
                stroke-miterlimit="10" />
        </svg>


        <svg class="wave-shape-2" width="39" height="39" viewBox="0 0 39 39" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d)">
                <path class="path"
                    d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z" />
                <path
                    d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z"
                    stroke="#040306" stroke-miterlimit="10" />
            </g>
            <defs>
                <filter id="filter0_d" x="0.905273" y="0" width="37.8663" height="38.1979" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                    <feOffset dy="4" />
                    <feGaussianBlur stdDeviation="2" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                </filter>
            </defs>
        </svg>


        <svg class="wave-shape-3" width="39" height="40" viewBox="0 0 39 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z"
                stroke="#040306" stroke-miterlimit="10" />
            <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
            <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
                stroke-miterlimit="10" />
        </svg>


        <svg class="wave-shape-4" width="39" height="39" viewBox="0 0 39 39" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d)">
                <path class="path"
                    d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z" />
                <path
                    d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z"
                    stroke="#040306" stroke-miterlimit="10" />
            </g>
            <defs>
                <filter id="filter0_d" x="0.905273" y="0" width="37.8663" height="38.1979" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                    <feOffset dy="4" />
                    <feGaussianBlur stdDeviation="2" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                </filter>
            </defs>
        </svg>
    </section>

    
    <section class="section-sm">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 order-2 order-md-1 text-center text-md-left">
                    <h2  class="mb-4">Noublie pas d'abonnee a notre page</h2>
                     <h2 id='t'>   "merveille&digiTal&Tech”</h2>
                    <a href="https://www.youtube.com/channel/UCx9qVW8VF0LmTi4OF2F8YdA" class="btn btn-primary">visiter
                        notre chaine</a>
                </div>
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0 order-1 order-md-2">
                    <div class="video-wrapper">
                        <img src="images/M.PNG" class="img-fluid">
                        <a class="play-btn video-btn" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/dyZcRRWiuuw" data-target="#myModal" href="#"><i
                                class="ti-control-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 bg-transparent">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="mb-5">Books That Written By Me</h2>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card border-0 rounded-0 text-center shadow-none overflow-hidden">
                        <a href="#!">
                            <div class="book-cover">
                                <img src="images/MISSION.PNG" alt="" class="card-img-top rounded-0">
                            </div>
                            <div class="card-body">
                                <h4 class="text-uppercase mb-3">Book of Earth</h4>
                                <p class="h4">$25.00</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card border-0 rounded-0 text-center shadow-none overflow-hidden">
                        <a href="#!">
                            <div class="book-cover">
                                <img src="images/MISSION.PNG" alt="" class="card-img-top rounded-0">
                            </div>
                            <div class="card-body">
                                <h4 class="text-uppercase mb-3">Book of Earth</h4>
                                <p class="h4">$25.00</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card border-0 rounded-0 text-center shadow-none overflow-hidden"
                        class="instagram-slider">
                        <a href="#!">
                            <div class="book-cover">
                                <img src="images/MISSION.PNG" alt="" class="card-img-top rounded-0">
                            </div>
                            <div class="card-body">
                                <h4 class="text-uppercase mb-3">Book of Earth</h4>
                                <p class="h4">$25.00</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card border-0 rounded-0 text-center shadow-none overflow-hidden">
                        <a href="#!">
                            <div class="book-cover">
                                <img src="images/MISSION.PNG" alt="" class="card-img-top rounded-0">
                            </div>
                            <div class="card-body">
                                <h4 class="text-uppercase mb-3">Book of Earth</h4>
                                <p class="h4">$25.00</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center" class="instagram-slider">
                    <h2 class="mb-5">My Contents also published <br> on these websites</h2>
                    <ul class="list-inline logo-list">

                        <li class="list-inline-item"><img class="img-fluid" src="images/logos/logo-1.png"></li>

                        <li class="list-inline-item"><img class="img-fluid" src="images/logos/logo-2.png"></li>

                        <li class="list-inline-item"><img class="img-fluid" src="images/logos/logo-3.png"></li>

                        <li class="list-inline-item"><img class="img-fluid" src="images/logos/logo-4.png"></li>

                        <li class="list-inline-item"><img class="img-fluid" src="images/logos/logo-5.png"></li>

                        <li class="list-inline-item"><img class="img-fluid" src="images/logos/logo-6.png"></li>

                        <li class="list-inline-item"><img class="img-fluid" src="images/logos/logo-7.png"></li>

                        <li class="list-inline-item"><img class="img-fluid" src="images/logos/logo-8.png"></li>

                        <li class="list-inline-item"><img class="img-fluid" src="images/logos/logo-9.png"></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <svg class="footer-border" height="214" viewBox="0 0 2204 214" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M2203 213C2136.58 157.994 1942.77 -33.1996 1633.1 53.0486C1414.13 114.038 1200.92 188.208 967.765 118.127C820.12 73.7483 263.977 -143.754 0.999958 158.899"
                stroke-width="2" />
        </svg>

        <div class="instafeed text-center mb-5">
            <h2 class="h3 mb-4" id='hb'>Nos repas de luxe et de qualite</h2>

            <div class="instagram-slider">
                <div class="instagram-post"><img src="images/instagram/1.jpg"></div>
                <div class="instagram-post"><img src="images/instagram/2.jpg"></div>
                <div class="instagram-post"><img src="images/instagram/4.jpg"></div>
                <div class="instagram-post"><img src="images/instagram/3.jpg"></div>
                <div class="instagram-post"><img src="images/instagram/2.jpg"></div>
                <div class="instagram-post"><img src="images/instagram/1.jpg"></div>
                <div class="instagram-post"><img src="images/instagram/3.jpg"></div>
                <div class="instagram-post"><img src="images/instagram/4.jpg"></div>
                <div class="instagram-post"><img src="images/instagram/2.jpg"></div>
                <div class="instagram-post"><img src="images/instagram/4.jpg"></div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 text-center text-md-left mb-4">
                    <ul class="list-inline footer-list mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Alioune Sidibe</a></li>
                        <li class="list-inline-item"><a href="terms-conditions.html">developpeur web</a></li>
                    </ul>
                </div>
                <div class="col-md-2 text-center mb-4">
                    <a href="index.html"><img class="img-fluid" width="100px" src="images/LOG.png"
                            alt="Reader | Hugo Personal Blog Template"></a>
                </div>
                <div class="col-md-5 text-md-right text-center mb-4">
                    <ul class="list-inline footer-list mb-0">

                        <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>

                        <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>

                        <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>

                        <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>

                        <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>

                    </ul>
                </div>
                <div class="col-12">
                    <div class="border-bottom border-default"></div>
                </div>
            </div>
        </div>
    </footer>


    <!-- JS Plugins -->
    <script src="plugins/jQuery/jquery.min.js"></script>

    <script src="plugins/bootstrap/bootstrap.min.js"></script>

    <script src="plugins/slick/slick.min.js"></script>

    <script src="plugins/instafeed/instafeed.min.js"></script>


    <!-- Main Script -->
    <script src="js/script.js"></script>
</body>

</html>