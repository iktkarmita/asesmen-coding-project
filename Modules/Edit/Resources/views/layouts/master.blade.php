<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--====== Title ======-->
    <title>Edit Produk</title>

    @yield('styles')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('vendor/https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}"
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js">
    </script>
    <!-- Styles -->
    <link href="{{ asset('css/stle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/produk.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">


    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ 'assets/css/style.css' }}">
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{ 'assets/css/responsive.css' }}">

</head>

<body id="page-top" style="background: rgb(196, 217, 245)">
    <!--====== HEADER PART ENDS ======-->


    <!--====== PRELOADER PART END ======-->

    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-gradient-dark  topbar  static-top shadow "
                style="background: linear-gradient(30deg,hsla(0,0%,100%,.1),rgba(71,144,240,.507))">
                <button id="sidebarToggleTop" class="btn sidebar-ToggleTop btn-link d-md-none rounded-circle mr-3"
                    style="background: white;">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Sidebar Toggle (Topbar) -->
                <div class="sidebar-brand-icon">
                    <a href="{{ url('/') }}">
                        <i class="fab fa-fw  fa-korvue text-white text-bold fs-2">armiteShop</i>
                </div>

                <!-- Topbar Search -->

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown mb-4">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </ul>

            </nav>
            <!-- Page Wrapper -->
            <div id="wrapper">

                <!-- Sidebar - Brand -->
                <ul class="navbar-nav wy-nav-side shift bg-gradient-dark sidebar sidebar-dark  accordion mainwrapper collapsed"
                    id="accordionSidebar"
                    style="background: linear-gradient(90deg,hsla(0,0%,100%,.1),rgba(71,144,240,.507))">


                    <a class="sidebar-brand d-flex align-items-center justify-content-center " href="">
                        <div class="sidebar-brand-icon">
                            <i class="fab fa-fw  fa-korvue"></i>
                        </div>
                        <div class="sidebar-brand-text mx-3 ">Menu</div>
                    </a>


                    <!-- Divider -->
                    <hr class="sidebar-divider">
                    <!-- Nav Item - Dashboard -->

                    <!-- QUERY Menu ------->
                    <div class="sidebar-heading ">
                        Admin
                    </div>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/post') }}">
                            <i class="fas fa-upload"></i>
                            <span>Post Produk</span>
                        </a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/edit') }}">
                            <i class="fas fa-shopping-cart"></i>
                            <span>Edit Produk</span>
                        </a>
                    </li>
                    <hr class="sidebar-divider mt-3">


                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-md-none d-md-inline">
                        <button id="sidebarToggle" class=" rounded-circle border-0 "></button>
                    </div>

                </ul>

                <main class="py-4 ml-2">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    </div>
    </div>



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    @yield('scripts')

    <script>
        window.onbeforeunload = function() {
            window.scrollTo(0, 0);
        }
    </script>


</body>

</html>
