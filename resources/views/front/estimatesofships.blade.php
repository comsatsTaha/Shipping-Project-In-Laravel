<!doctype html>
<html lang="en">


<!-- Required meta tags -->
<title>C2C &mdash;</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('assets')}}/ui/fonts/icomoon/style.css">

<link rel="stylesheet" href="{{asset('assets')}}/ui/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('assets')}}/ui/css/jquery.fancybox.min.css">
<link rel="stylesheet" href="{{asset('assets')}}/ui/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{asset('assets')}}/ui/css/owl.theme.default.min.css">
<link rel="stylesheet" href="{{asset('assets')}}/ui/fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="{{asset('assets')}}/ui/css/aos.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('assets')}}/ui/css/style.css">    

<head>
    <title>c2c - Trunking Made Easy</title>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="panel-header panel-header-sm">
        
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">info@yourdomain.com</span></a>
              <span class="mx-md-2 d-inline-block"></span>
              <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">1+ (234) 5678 9101</span></a>


              <div class="float-right">

                <a href="#" class=""><span class="mr-2  icon-twitter"></span> <span class="d-none d-md-inline-block">Twitter</span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="#" class=""><span class="mr-2  icon-facebook"></span> <span class="d-none d-md-inline-block">Facebook</span></a>

              </div>

            </div>

          </div>

        </div>
      </div>

      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">


            <div class="site-logo">
              <a href="index.html" class="text-black"><span class="text-primary">C2C</a>
            </div>

            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="/" class="nav-link">Home</a></li>
                  <li><a href="/" class="nav-link">Services</a></li>


                  <li>
                    <a href="/" class="nav-link">About Us</a>
                    
                  </li>

                  <li><a href="/" class="nav-link">Why Us</a></li>

                  <li><a href="/" class="nav-link">Testimonials</a></li>
                  <li><a href="/" class="nav-link">Blog</a></li>
                  <li><a href="/login" class="nav-link">Login</a></li>
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">{{__(" Ships")}}</h5>
                        
                      </div>
                    <div class="card-body">
                    <table class="table">
                        <thead>
                          <td> Ship Image</td>
                            <td> Ship Name</td>
                            <td> Ship Type</td>
                            <td> Price form</td>
                            <td> Price To</td>
                            <td> Action</td>

                        </thead>
                        <tbody>
                           
                            @foreach($ships as $ship)
                            <tr>
                              <td> <img src="{{asset($ship->image)}}" width="200" height="200"/>
                            <td> {{$ship->name}}</td>
                            <td> {{$ship->type}}</td>
                            <td> {{$ship->price_from}}</td>
                            <td> {{$ship->price_to}}</td>
                            <td><a class="btn btn-success" href="{{route('frontorderwithestimate',$ship->id)}}"> Create Package</td>
                        </tr>
                            @endforeach
                       
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
 
</body>
</html>
