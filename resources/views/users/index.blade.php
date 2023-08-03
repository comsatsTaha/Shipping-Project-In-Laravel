<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="#product/now-ui-dashboard-pro" />


    <!--  Social tags      -->
    <meta name="keywords"
        content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, now ui dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, now ui design, now ui dashboard bootstrap 4 dashboard">
    <meta name="description"
        content="Now UI Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">


    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Now Ui Dashboard PRO byC2C Shipping">
    <meta itemprop="description"
        content="Now UI Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">

    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/72/opt_nudp_thumbnail.jpg">


    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="[Now Ui Dashboard PRO] byC2C Shipping">

    <meta name="twitter:description"
        content="Now UI Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/72/opt_nudp_thumbnail.jpg">


    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Now Ui Dashboard PRO byC2C Shipping" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://demos.creative-tim.com/now-ui-dashboard-pro/examples/dashboard.html" />
    <meta property="og:image"
        content="https://s3.amazonaws.com/creativetim_bucket/products/72/opt_nudp_thumbnail.jpg" />
    <meta property="og:description"
        content="Now UI Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you." />
    <meta property="og:site_name" content="Creative Tim" />
    <title>
        Now UI Dashboard by C2C Shipping
    </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('assets') }}/demo/demo.css" rel="stylesheet" />

</head>

<body class="sidebar-mini clickup-chrome-ext_installed">


    <div class="wrapper">
        <div class="fixed-plugin">
            <div class="dropdown show-dropdown">
                  {{-- <a href="#" data-toggle="dropdown">
                      <i class="fa fa-cog fa-2x"> </i>
                  </a> --}}
                <ul class="dropdown-menu">
                    <li class="header-title"> Sidebar Background</li>
                    <li class="adjustments-line">
                        <a href="javascript:void(0)" class="switch-trigger background-color">
                            <div class="badge-colors text-center">
                                <span class="badge filter badge-yellow" data-color="yellow"></span>
                                <span class="badge filter badge-blue" data-color="blue"></span>
                                <span class="badge filter badge-green" data-color="green"></span>
                                <span class="badge filter badge-orange active" data-color="orange"></span>
                                <span class="badge filter badge-red" data-color="red"></span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>







                </ul>
            </div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf</form>

        @include('layouts.navbars.sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo">@admin User List @endadmin @client Active Shipper List @endclient</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        
                        <ul class="navbar-nav">
                           
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">{{ __('Account') }}</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item"
                                        href="{{ route('profile.edit') }}">{{ __('My profile') }}</a>
                                    <a class="dropdown-item"
                                        href="{{ route('profile.edit') }}">{{ __('Edit profile') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">

                                <h4 class="card-title">@admin User List @endadmin @client Active Shipper List @endclient</h4>
                                <div class="col-12 mt-2">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="toolbar">
                                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                                </div>
                                <table id="datatable" class="table table-striped table-bordered" cellspacing="0"
                                    width="100%">
                                    <thead>
                                        <tr>
                                            <th>Profile</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            @admin
                                            <th>Creation date</th>
                                            
                                            <th class="disabled-sorting text-right">Actions</th>
                                            @endadmin
                                            @client
                                            <th class="text-center"> Description</th>
                                            @endclient
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Profile</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            @admin
                                            <th>Creation date</th>
                                        
                                            <th class="disabled-sorting text-right">Actions</th>
                                            @endadmin
                                            @client
<th class="text-center"> Description</th>
                                            @endclient
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($users as $item)
                                            <tr>
                                                <td>
                                                    <span class="avatar avatar-sm rounded-circle">
                                                        <img src="{{ asset('assets') }}/img/default-avatar.png" alt=""
                                                            style="max-width: 80px; border-radiu: 100px">
                                                    </span>
                                                </td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                @if($item->status=="1")
                                                <td style="color:green">Active</td>
                                                @else
                                                <td style="color:red">Inactive</td>
                                                @endif
                                                @admin
                                                <td>{{ $item->created_at }}</td>
                                                
                                                <td class="text-right">
                                                    
                                                        <input data-id="{{ $item->id }}"
                                                            class="toggle-class bootstrap-switch" type="checkbox"
                                                            data-on-label="ON"
                                                            data-off-label="OFF"
                                                            {{ $item->status ? 'checked' : '' }}>
                                                   
                                                    <a type="button" href="/user-edit/{{ $item->id }}"
                                                        rel="tooltip" class="btn btn-warning btn-icon btn-large "
                                                        data-original-title="" title="">
                                                        <i class="now-ui-icons ui-1_settings-gear-63

                      -90"></i>
                                                    </a>
                                                </td>
                                                @endadmin

                                                @client
<td>
    {{$item->address}}
</td>
                                                @endclient
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <div class="col-md-6 offset-md-3 text-center">
                                    {!! $users->links() !!}
                                </div>
                            </div>

                            <!-- end content-->
                        </div>
                        <!--  end card  -->
                    </div>
                    <!-- end col-md-12 -->
                </div>

                <!-- end row -->
            </div>
            <footer class="footer">
                <div class=" container-fluid ">
                    <nav>
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    C2C Shipping
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    Blog
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <div class="copyright" id="copyright">
                        ©
                        <script>
                            document.getElementById('copyright').appendChild(document.createTextNode(new Date()
                                .getFullYear()))

                        </script>2020, Designed by
                        <a href="https://www.invisionapp.com" target="_blank"> Invision</a> . Coded by
                        <a href="#" target="_blank">C2C Shipping </a>&amp;
                        <a href="https://www.updivision.com" target="_blank"> Updivision</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets') }}/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
    <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('assets') }}/demo/demo.js"></script>
    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/changeStatus',
                    data: {
                        'status': status,
                        'user_id': user_id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            })
        })

    </script>
    @stack('js')
</body>

</html>
