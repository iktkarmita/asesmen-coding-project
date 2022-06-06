<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>karmiteShop</title>
    
    @yield('stylesss')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 
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

<body >
   
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
                                    
                                  
                                   
                                </ul> <!-- navbar nav -->
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </header>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
