<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="css/plyr.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>


        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>
    
        <!-- Header Section Begin -->
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="header__logo">
                            <a href={{route('inicio') }}>
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="header__nav">
                            <nav class="header__menu mobile-menu">
                                <ul>
                                    <li class="active"><a href="{{route('inicio') }}">Inicio</a></li>
                                    <li><a href="categories">Categories <span class="arrow_carrot-down"></span></a>
                                        <ul class="dropdown">
                                            <li><a href={{route('categories') }}>Categories</a></li>
                                            <li><a href={{route('anime-details') }}>Anime Details</a></li>
                                            <li><a href={{route('anime-watching') }}>Anime Watching</a></li>
                                            <li><a href={{route('blog-details') }}>Blog Details</a></li>
                                            <li><a href={{route('signup') }}>Sign Up</a></li>
                                            <li><a href={{route('login') }}>Login</a></li>
                                        </ul>
                                    </li>
                                    <li><a href={{route('inicio') }}>Our Blog</a></li>
                                    <li><a href="#">Contacts</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="header__right">
                            <a href="#" class="search-switch"><span class="icon_search"></span></a>
                            <a href={{route('login') }}><span class="icon_profile"></span></a>
                        </div>
                    </div>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </header>

    <main>
        @yield('content')
    </main>


<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href={{route('inicio') }}><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="{{route('inicio')}}">Homepage</a></li>
                        <li><a href={{route('categories')}}>Categories</a></li>
                        <li><a href={{route('blog')}}>Our Blog</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

              </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>

    <script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/player.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>