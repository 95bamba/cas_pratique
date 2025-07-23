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
    <header class="navigation fixed-top" class="alert alert-dark">
        <div class="container" class="alert alert-dark">
            <nav class="navbar navbar-expand-lg navbar-white alert alert-dark" class="">
                
                <h1 id='hb'>l'HB</h1>                
                <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/"  aria-expanded="false"> accueil  </a>
                           
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
                        <input id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
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

   


   <!-- JS Plugins -->
   <script src="plugins/jQuery/jquery.min.js"></script>

<script src="plugins/bootstrap/bootstrap.min.js"></script>

<script src="plugins/slick/slick.min.js"></script>

<script src="plugins/instafeed/instafeed.min.js"></script>


<!-- Main Script -->
<script src="js/script.js"></script>
</body>

</html>