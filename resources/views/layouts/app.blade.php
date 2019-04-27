<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script defer src="/js/owl.carousel.min.js"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcXl4lo8V8yz070u5obbdHU-Nu0ayLhtM&callback=initMap">
    </script>
    <script src="/js/script.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body >
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="flaticon-animal-13"></i><span>MeetUP.se</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ Auth::user()->name }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                            </li>
                        @endguest

                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('add') }}">Add animal</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <main >
            @yield('content')
        </main>



        <div class="footer-gallery">
            <div id="owl-gallery" class="owl-carousel owl-theme top-centered-nav fade-effect mt-5 owl-loaded owl-drag">

                <div class="owl-stage-outer"><div class="owl-stage">
                        <div class="owl-item" ><div class="col-md-12 gallery-img rotate-img">
                                <a href="http://ingridkuhn.com/themes/woof!/img/gallery/gallery3.jpg" title="your caption here">
                                    <img src="http://ingridkuhn.com/themes/woof!/img/gallery/gallery3.jpg" class="border-double  img-fluid border-irregular1" alt="">
                                </a>
                            </div></div><div class="owl-item" ><div class="col-md-12 gallery-img rotate-img">
                                <a href="http://ingridkuhn.com/themes/woof!/img/gallery/gallery4.jpg" title="your caption here">
                                    <img src="http://ingridkuhn.com/themes/woof!/img/gallery/gallery4.jpg" class="border-double  img-fluid border-irregular2" alt="">
                                </a>
                            </div></div><div class="owl-item" ><div class="col-md-12 gallery-img rotate-img">
                                <a href="http://ingridkuhn.com/themes/woof!/img/gallery/gallery5.jpg" title="your caption here">
                                    <img src="http://ingridkuhn.com/themes/woof!/img/gallery/gallery5.jpg" class="border-double  img-fluid border-irregular1" alt="">
                                </a>
                            </div></div><div class="owl-item" ><div class="col-md-12 gallery-img rotate-img">
                                <a href="http://ingridkuhn.com/themes/woof!/img/gallery/gallery6.jpg" title="your caption here">
                                    <img src="http://ingridkuhn.com/themes/woof!/img/gallery/gallery6.jpg" class="border-double  img-fluid border-irregular2" alt="">
                                </a>
                            </div></div><div class="owl-item" ><div class="col-md-12 gallery-img rotate-img">
                                <!-- image -->
                                <a href="http://ingridkuhn.com/themes/woof!/img/gallery/gallery1.jpg" title="your caption here">
                                    <img src="http://ingridkuhn.com/themes/woof!/img/gallery/gallery1.jpg" class="border-double img-fluid border-irregular1" alt="">
                                </a>
                            </div></div><div class="owl-item" ><div class="col-md-12 gallery-img rotate-img">
                                <a href="http://ingridkuhn.com/themes/woof!/img/gallery/gallery2.jpg" title="your caption here">
                                    <img src="http://ingridkuhn.com/themes/woof!/img/gallery/gallery2.jpg" class="border-double img-fluid border-irregular2" alt="">
                                </a>
                            </div></div><div class="owl-item" ><div class="col-md-12 gallery-img rotate-img">
                                <a href="http://ingridkuhn.com/themes/woof!/img/gallery/gallery3.jpg" title="your caption here">
                                    <img src="http://ingridkuhn.com/themes/woof!/img/gallery/gallery3.jpg" class="border-double  img-fluid border-irregular1" alt="">
                                </a>
                            </div></div><div class="owl-item" ><div class="col-md-12 gallery-img rotate-img">
                                <a href="http://ingridkuhn.com/themes/woof!/img/gallery/gallery4.jpg" title="your caption here">
                                    <img src="http://ingridkuhn.com/themes/woof!/img/gallery/gallery4.jpg" class="border-double  img-fluid border-irregular2" alt="">
                                </a>
                            </div></div><div class="owl-item" ><div class="col-md-12 gallery-img rotate-img">
                                <a href="http://ingridkuhn.com/themes/woof!/img/gallery/gallery5.jpg" title="your caption here">
                                    <img src="http://ingridkuhn.com/themes/woof!/img/gallery/gallery5.jpg" class="border-double  img-fluid border-irregular1" alt="">
                                </a>
                            </div></div><div class="owl-item" ><div class="col-md-12 gallery-img rotate-img">
                                <a href="http://ingridkuhn.com/themes/woof!/img/gallery/gallery6.jpg" title="your caption here">
                                    <img src="http://ingridkuhn.com/themes/woof!/img/gallery/gallery6.jpg" class="border-double  img-fluid border-irregular2" alt="">
                                </a>
                            </div></div><div class="owl-item" ><div class="col-md-12 gallery-img rotate-img">
                                <!-- image -->
                                <a href="http://ingridkuhn.com/themes/woof!/img/gallery/gallery1.jpg" title="your caption here">
                                    <img src="http://ingridkuhn.com/themes/woof!/img/gallery/gallery1.jpg" class="border-double img-fluid border-irregular1" alt="">
                                </a>
                            </div></div><div class="owl-item" ><div class="col-md-12 gallery-img rotate-img">
                                <a href="http://ingridkuhn.com/themes/woof!/img/gallery/gallery2.jpg" title="your caption here">
                                    <img src="http://ingridkuhn.com/themes/woof!/img/gallery/gallery2.jpg" class="border-double img-fluid border-irregular2" alt="">
                                </a>
                            </div></div><div class="owl-item" ><div class="col-md-12 gallery-img rotate-img">
                                <a href="http://ingridkuhn.com/themes/woof!/img/gallery/gallery3.jpg" title="your caption here">
                                    <img src="http://ingridkuhn.com/themes/woof!/img/gallery/gallery3.jpg" class="border-double  img-fluid border-irregular1" alt="">
                                </a>
                            </div></div><div class="owl-item" ><div class="col-md-12 gallery-img rotate-img">
                                <a href="http://ingridkuhn.com/themes/woof!/img/gallery/gallery4.jpg" title="your caption here">
                                    <img src="http://ingridkuhn.com/themes/woof!/img/gallery/gallery4.jpg" class="border-double  img-fluid border-irregular2" alt="">
                                </a>
                            </div></div></div></div>
                </div>
        </div>

        <div class="footer-holder">
            <div class="container ">
              <div class="row">
                  <div class="col-md-3">
                      <a class="navbar-brand" href="{{ url('/') }}">
                          <i class="flaticon-animal-13"></i><span>MeetUP.se</span>
                      </a>
                  </div>

                  <div class="col-md-3">
                      SOCIAL MEDIAS
                  </div>

                  <div class="col-md-3">
                      <h4>Customer service</h4>
                      <a href="#">Constac us</a> <br>
                      <a href="#">Privacy Policy</a><br>
                      <a href="#">Cookie Policy</a><br>
                      <a href="#">Terms of Use</a><br>
                  </div>


                  <div class="col-md-3">
                      <h4>Information</h4>
                      <a href="#">Breeding & sale</a> <br>
                      <a href="#">Find & add</a><br>
                      <a href="#">Message & Meet</a><br>
                      <a href="#">Happy pet</a><br>

                  </div>

              </div>
            </div>
        </div>
    </div>
</body>
</html>
