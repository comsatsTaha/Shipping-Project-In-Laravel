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
                        <form method="post" action="{{ route('package.create') }}" autocomplete="off"
                        enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" name="ship_id" value="1"/>
                          
                        
                          @include('alerts.success')
                          <div class="row">
                          </div>
                            <div class="row">
                              <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label style="color:black;">{{__("Shipping Company")}}</label>
                                        <select name="shop_id" class="form-control"  required> 
                                          <option selected="true"  disabled="disabled"> Select Shipping Company </option>
                                          @foreach ($shipper as $item)
                                          <option value="{{$item->id}}"> {{$item->name}}</option>
                                          @endforeach
                                          
                                        
                                        </select>
                                        @include('alerts.feedback', ['field' => 'name'])
                                </div>
                            </div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label style="color: black">{{__("Sender Name")}}</label>
                                            <input type="text" name="sender_name" class="form-control"  required>
                                            @include('alerts.feedback', ['field' => 'sender_name'])
                                    </div>
                                </div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label style="color: black">{{__("Sender Phone No")}}</label>
                                            <input type="tel" name="sender_phone_no" class="form-control"  required >
                                            @include('alerts.feedback', ['field' => 'sender_phone_no'])
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3 pr-1">
                                <div class="form-group">
                                  <label style="color:black;" for="exampleInputEmail1">{{__("Sender Address")}}</label>
                                  <input type="text" name="sender_street" class="form-control"  required>
                                  @include('alerts.feedback', ['field' => 'sender_street'])
                                </div>
                              </div>
                              <div class="col-md-3 pr-1">
                                <div class="form-group">
                                  <label style="color:black;" for="exampleInputEmail1">{{__("Sender City")}}</label>
                                  <input type="text" name="sender_city" class="form-control" required>
                                  @include('alerts.feedback', ['field' => 'sender_city'])
                                </div>
                              </div>
                              <div class="col-md-3 pr-1">
                                <div class="form-group">
                                  <label style="color:black;" for="exampleInputEmail1">{{__("Sender Province")}}</label>
                                  <input type="text" name="sender_province" class="form-control"  required >
                                  @include('alerts.feedback', ['field' => 'sender_province'])
                                </div>
                              </div>
                              <div class="col-md-3 pr-1">
                                <div class="form-group">
                                  <label style="color:black;" for="exampleInputEmail1">{{__("Sender Postcode")}}</label>
                                  <input type="number" min="0" name="sender_postcode" class="form-control"  required >
                                  @include('alerts.feedback', ['field' => 'sender_postcode'])
                                </div>
                              </div>
                            </div>
                            {{-- Reciver --}}
                            <div class="row">
                              <div class="col-md-6 pr-1">
                                  <div class="form-group">
                                      <label style="color: black">{{__("Reciver Name")}}</label>
                                          <input type="text" name="reciver_name" class="form-control"   required>
                                          @include('alerts.feedback', ['field' => 'reciver_name'])
                                  </div>
                              </div>
                              <div class="col-md-6 pr-1">
                                  <div class="form-group">
                                      <label style="color: black">{{__("Reciver Phone No")}}</label>
                                          <input type="tel" name="reciver_phone_no" class="form-control"  required>
                                          @include('alerts.feedback', ['field' => 'reciver_phone_no'])
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-3 pr-1">
                              <div class="form-group">
                                <label style="color:black;" for="exampleInputEmail1">{{__("Reciver Address")}}</label>
                                <input type="text" name="reciver_street" class="form-control"   required>
                                @include('alerts.feedback', ['field' => 'reciver_street'])
                              </div>
                            </div>
                            <div class="col-md-3 pr-1">
                              <div class="form-group">
                                <label style="color:black;" for="exampleInputEmail1">{{__("Reciver City")}}</label>
                                <input type="text" name="reciver_city" class="form-control" required >
                                @include('alerts.feedback', ['field' => 'reciver_city'])
                              </div>
                            </div>
                            <div class="col-md-3 pr-1">
                              <div class="form-group">
                                <label style="color:black;" for="exampleInputEmail1">{{__("Reciver Province")}}</label>
                                <input type="text" name="reciver_province" class="form-control"  required>
                                @include('alerts.feedback', ['field' => 'reciver_province'])
                              </div>
                            </div>
                            <div class="col-md-3 pr-1">
                              <div class="form-group">
                                <label style="color:black;" for="exampleInputEmail1">{{__("Reciver Postcode")}}</label>
                                <input type="number" min="0" name="reciver_postcode" class="form-control"  required>
                                @include('alerts.feedback', ['field' => 'reciver_postcode'])
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4 pr-1">
                              <div class="form-check">
                                <label style="color:black;" class="form-check-label">
                                  <input class="form-check-input" type="checkbox" name="wants_contact_before_delivery">
                                  <span class="form-check-sign">Call Reciver Before Delivery</span>
                                </label>
                              </div>
                            </div>
                          </div>
                          {{-- Height width --}}
                          <div class="row">
                            <div class="col-md-4 pr-1">
                              <div class="form-group">
                                <label style="color:black;" for="exampleInputEmail1">{{__("Parcel Height")}}</label>
                                <input type="number" min="0" name="height" class="form-control"   required>
                                @include('alerts.feedback', ['field' => 'height'])
                              </div>
                            </div>
                            <div class="col-md-4 pr-1">
                              <div class="form-group">
                                <label style="color:black;" for="exampleInputEmail1">{{__("Parcel Width")}}</label>
                                <input type="number" min="0" name="width" class="form-control"   required>
                                @include('alerts.feedback', ['field' => 'width'])
                              </div>
                            </div>
                            <div class="col-md-4 pr-1">
                              <div class="form-group">
                                <label style="color:black;" for="exampleInputEmail1">{{__("Parcel Length")}}</label>
                                <input type="number" min="0" name="length" class="form-control"  required >
                                @include('alerts.feedback', ['field' => 'length'])
                              </div>
                            </div>
                            <div class="col-md-12 pr-1">
                              <div class="form-group">
                                <label style="color:black;" for="exampleInputEmail1">{{__("Comment")}}</label>
                                <textarea name="content" class="form-control"  cols="5" placeholder="Insert Additional Comments"></textarea>
                                @include('alerts.feedback', ['field' => 'content'])
                              </div>
                            </div>
                          </div>
                          <div class="card-footer ">
                            <button type="submit" class="btn btn-primary btn-round">{{__('Save')}}</button>
                          </div>
                          <hr class="half-rule"/>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
 
</body>
</html>
