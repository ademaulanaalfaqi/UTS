<!doctype html>
<html lang="en">

  <head>
    <title>Login</title>
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


    <div class="site-section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-10">
            <div class="heading-39101 mb-5">
              <span class="backdrop text-center">Login</span>
              <span class="subtitle-39191">Login</span>
              <h3>Login</h3>
            </div>
          </div>
        </div>
       
        <div class="row">
          <div class="col-lg-8 mb-5" style="margin-left: 190px;" >
            @include('admin.utils.notif')
            <form action="{{url('login')}}" method="post">
            @csrf
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email address" name="email">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12 mr-auto">
                  <button type="submit" class="btn btn-block btn-primary text-white py-3 px-5">Login</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        
      </div>
    </div> <!-- END .site-section -->


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

