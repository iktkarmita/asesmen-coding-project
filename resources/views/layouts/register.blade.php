<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>karmite</title>
    
    @yield('styless')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ 'assets/css/magnific-popup.css' }}">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ 'assets/css/slick.css' }}">
    
    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ 'assets/css/LineIcons.css' }}">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ 'assets/css/default.css' }}">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ 'assets/css/style.css' }}">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{ 'assets/css/responsive.css' }}">
  
    
</head>

<body style="background: rgb(255, 255, 255)">
   
    <!--====== HEADER PART ENDS ======-->
    <div id="app">

      <!--====== PRELOADER PART START ======-->
    
        <div class="preloader">
                <div class="spin">
                    <div class="cube1"></div>
                    <div class="cube2"></div>
                </div>
            </div>
        
        <!--====== PRELOADER PART END ======-->
        
        <!--====== HEADER PART START ======-->
        
        <header class="header-area" style="background: linear-gradient(30deg,hsla(0,0%,100%,.1),rgba(71,144,240,.507))">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-fixed-top navbar-expand-lg" >
                            <a class="navbar-brand text-bold " href="{{ url('/') }}" style="color: black">
                              KarmiteShop
                            </a> <!-- Logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="bar-icon"></span>
                                <span class="bar-icon"></span>
                                <span class="bar-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto ">
                                    <li class="nav-item ">
                                        <a data-scroll-nav="0" href="{{ url('/') }}#home">HomePage</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="{{ url('/post') }}">Explore All</a> 
                                    </li>
                                   
                                    <li class="nav-item">
                                        <a data-scroll-nav="0" href="{{ url('/') }}#product">Products</a>
                                    </li>
                                    <li class="nav-item">
                                   
                                        <a data-scroll-nav="0" href="{{ url('/') }}#team">Web Dev</a>
                                    </li>
                                  
                                    @if (Route::has('login'))
                                       <li class="nav-item">
                                           <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                        </li>
                                                @if (Route::has('register'))
                                                <li class="nav-item active">  
                                                    <a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                                </li>    
                                                @endif   
                                    @endif
                                </ul> <!-- navbar nav -->
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </header>


        @yield('contentt')
    </div>
    


    <!--====== jquery js ======-->
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    
    
    <!--====== Slick js ======-->
    <script src="{{ asset('assets/js/slick.min.js' )}}"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

    
    <!--====== nav js ======-->
    <script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
    
    <!--====== Nice Number js ======-->
    <script src="{{ asset('assets/js/jquery.nice-number.min.js') }}"></script>
    
    <!--====== Main js ======-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @yield('scriptss')

    <script>
        window.onbeforeunload = function(){
            window.scrollTo(0,0);
        }
    </script>
</body>

</html>