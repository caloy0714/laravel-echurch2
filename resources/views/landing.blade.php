<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Church</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:500i&amp;display=swap">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('img/image.png') }}">

  </head>
  <body class="scrollspy-example" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" tabindex="0">
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-dark position-absolute w-100" id="navbar">
        <div class="container"><a class="navbar-brand d-block d-lg-none" href="#!"><img src="img/logo-alt.svg" alt="..." width="60"></a>
          <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span></span><span></span><span></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link" href="#hero">Home </a></li>
            </ul>
            <ul class="navbar-nav d-none d-lg-block px-4">
              <li class="nav-item m-0"><a class="navbar-brand m-0" href="#!"><img src="img/logo-alt.svg" alt="..." width="80"></a></li>
            </ul>
            <ul class="navbar-nav me-auto">
              @auth
                  <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a></li>
                  @else
                  <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Log in</a></li>
                
                  @if (Route::has('register'))
                  <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                  @endif
              @endauth
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Hero Slider -->
    <section class="text-center pt-lg-0 hero-home" id="hero">
      <div class="swiper hero-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide hero-slide bg-cover py-5 with-border-image d-flex align-items-center" style="background: url(img/hero-bg-1.jpg)">
            <div class="container text-white py-5 my-5 index-forward">
              <h1 class="text-uppercase text-xl mt-5">Holy Rosary Parish</h1>
              <div class="row">
                <div class="col-lg-7 mx-auto">
                  <p class="lead">How beautiful are your works, Lord, in wisdom You have made them all.</p><a class="btn btn-primary px-4" href="text.html">Events</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide hero-slide bg-cover py-5 with-border-image d-flex align-items-center" style="background: url(img/hero-bg-3.JPG)">
            <div class="container text-white py-5 my-5 index-forward">
              <h1 class="text-uppercase text-xl mt-5">Pisamban Maragul</h1>
              <div class="row">
                <div class="col-lg-7 mx-auto">
                  <p class="lead">Visit your local church and become a part of the flock by contributing to the community in any way you possibly can.</p><a class="btn btn-primary px-4" href="text.html">Events</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next swiper-nav-custom d-none d-lg-block"></div>
        <div class="swiper-button-prev swiper-nav-custom d-none d-lg-block"></div>
        <div class="swiper-pagination py-3 d-block d-lg-none"></div>
      </div>
    </section>
    
    <!-- Services Section -->
    <section class="py-5" id="services">
      <div class="container py-5">
        <header class="mb-4 text-center mb-5">
          <p class="text-serif mb-0 text-primary">Watch our services online</p>
          <h2 class="text-uppercase">Our services        </h2>
        </header>
        <div class="row text-center gy-4">
          <div class="col-lg-4"><i class="fas text-primary mb-4 fa-3x fa-church"></i>
            <h3 class="h5">Tour the chapel</h3>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
          </div>
          <div class="col-lg-4"><i class="fas text-primary mb-4 fa-3x fa-bible"></i>
            <h3 class="h5">Baptismal</h3>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
          </div>
          <div class="col-lg-4"><i class="fas text-primary mb-4 fa-3x fa-praying-hands"></i>
            <h3 class="h5">Mass Intentions</h3>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur elit sed do eiusmod tempor incididunt labore.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Scroll Top Button--><a class="scroll-top" href="#"><i class="fas fa-long-arrow-alt-up"></i></a>
    <footer class="pt-5 text-white" style="background: #4B61D1">
      <div class="container pt-5">
        <div class="row mb-5 pb-5">
          <div class="col-md-4 col-sm-12"><img class="mb-3" src="img/logo-alt.svg" alt="..." width="140">
            <p class="text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="col-md-4 col-sm-12">
            <h5 class="mb-4 mt-3">Upcoming events</h5>
            <ul class="list-unstyled">
              <li class="mb-2">
                <h6 class="mb-1"> <a class="reset-anchor text-primary" href="#!">Building a Church Fellowship</a></h6>
                <p class="text-small mb-0">New York, 18 April 2020</p>
              </li>
              <li class="mb-2">
                <h6 class="mb-1"> <a class="reset-anchor text-primary" href="#!">Sermon: Hope For Us</a></h6>
                <p class="text-small mb-0">New York, 18 April 2020</p>
              </li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-12">
            <h5 class="mb-4 mt-3">Newsletter</h5>
            <p class="text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="input-group">
              <input class="form-control border-dark text-white rounded-0 bg-none" type="search" placeholder="Enter your email address" aria-label="email address" aria-describedby="button-addon2">
              <button class="btn btn-primary px-4" id="button-addon2" type="submit"><i class="fas fa-paper-plane"></i></button>
            </div>
          </div>
        </div>
        
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/countdown.js') }}"></script>
    <script src="{{ asset('vendor/progressbar.js/progressbar.js') }}"></script>
    <script src="{{ asset('js/front.js') }}"></script>

    <script>
    function injectSvgSprite(path) {
        var ajax = new XMLHttpRequest();
        ajax.open("GET", path, true);
        ajax.send();
        ajax.onload = function (e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
        }
    }
    // Update the URL to your SVG sprite file using the asset function
    injectSvgSprite('{{ asset('icons/orion-svg-sprite.svg') }}');
</script>

<!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  </body>
</html>