<!doctype html>
<html lang="en">

  <head>
    <title>Trips</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{url('public/assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public/assets')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{url('public/assets')}}/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{url('public/assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('public/assets')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="{{url('public/assets')}}/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{url('public/assets')}}/css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.html" class="font-weight-bold">
                  <img src="{{url('public/assets')}}/images/logo.png" alt="Image" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="{{url('home')}}" class="nav-link">Home</a></li>
                  <li><a href="{{url('login')}}" class="nav-link">Login</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('{{url('public/assets')}}/images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-5" data-aos="fade-up">
              <h1 class="mb-3 text-white">Mountain Climb</h1>
              <p>Gunung-gunung yang ada di Indonesia</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-10">
                    <div class="heading-39101 mb-5">
                    <span class="backdrop text-center">Content</span>
                    <span class="subtitle-39191">Content</span>
                    <h3>Content</h3>
                    </div>
                </div>
                @foreach($list_artikel as $artikel)
                  <div class="col-md-12" style="text-align: left;">
                      <h4>{{$loop->iteration}}. <a href="{{url('detail')}}/{{$artikel->id}}" style="color: black;" >{{$artikel->judul}}</a></h4>
                      <p>{{$artikel->isi}}</p>
                      <p>Penulis: {{$artikel->writer->nama}}</p>
                      <hr>
                  </div>
                @endforeach
            </div>
        </div>
    </div>

    <footer class="main-footer bg-light">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <div class="border-top pt-3">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Ade Maulana Alfaqi</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="{{url('public/assets')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('public/assets')}}/js/jquery-migrate-3.0.0.js"></script>
    <script src="{{url('public/assets')}}/js/popper.min.js"></script>
    <script src="{{url('public/assets')}}/js/bootstrap.min.js"></script>
    <script src="{{url('public/assets')}}/js/owl.carousel.min.js"></script>
    <script src="{{url('public/assets')}}/js/jquery.sticky.js"></script>
    <script src="{{url('public/assets')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{url('public/assets')}}/js/jquery.animateNumber.min.js"></script>
    <script src="{{url('public/assets')}}/js/jquery.fancybox.min.js"></script>
    <script src="{{url('public/assets')}}/js/jquery.stellar.min.js"></script>
    <script src="{{url('public/assets')}}/js/jquery.easing.1.3.js"></script>
    <script src="{{url('public/assets')}}/js/bootstrap-datepicker.min.js"></script>
    <script src="{{url('public/assets')}}/js/isotope.pkgd.min.js"></script>
    <script src="{{url('public/assets')}}/js/aos.js"></script>

    <script src="{{url('public/assets')}}/js/main.js"></script>

  </body>

</html>

