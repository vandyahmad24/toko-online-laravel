<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('admin/assets/images/favicon.png')}}" type="image/png">
    <title>@yield('title')</title>

    <!--Begin  Page Level  CSS -->
    <link href="{{asset('admin/assets/plugins/morris-chart/morris.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet" />
    <!--End  Page Level  CSS -->
    <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/responsive.css')}}" rel="stylesheet">
    <script src="{{asset('admin/assets/js/jqueryku.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="sticky-header">


    <!--Start left side Menu-->
    <div class="left-side sticky-left-side">

        <!--logo-->
        <div class="logo">
            <a href="#"><img src="{{asset('admin/assets/images/logo.png')}}" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="#"><img src="{{asset('admin/assets/images/logo-icon.png')}}" alt=""></a>
        </div>
        <!--logo-->

        <div class="left-side-inner">
            <!--Sidebar nav-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="{{url('/dashboard')}}"><i class="icon-home"></i> <span>Dashboard</span></a></li>

                </li>
                <li class="menu-list"><a href="#"><i class="icon-folder-alt"></i> <span>Kategori</span></a>
                    <ul class="sub-menu-list">
                        <li class="active"><a href="{{url('/dashboard/kategori')}}"> Lihat Kategori</a></li>
                        <li><a href="{{url('/dashboard/tambah_kategori')}}"> Tambah Kategori</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="icon-layers"></i> <span>Barang</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{url('/dashboard/barang')}}"> Daftar Barang</a></li>
                        <li><a href="{{url('/dashboard/tambah_barang')}}"> Tambah Barang</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="icon-people"></i> <span>Manajemen User</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{url('/dashboard/user')}}"> Daftar User</a></li>
                        <li><a href="{{url('/dashboard/tambah_user')}}"> Tambah User</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="ti-layout-media-center-alt"></i> <span>Manajemen
                            Template</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{url('/dashboard/template')}}"> Daftar Template</a></li>
                        <li><a href="#"> Belum tau</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/dashboard/order')}}"><i class="icon-plane"></i> <span>Order</span></a></li>
                <li><a href="{{url('/dashboard/config')}}"><i class="ti-settings"></i> <span>Konfigurasi</span></a></li>

                </li>



            </ul>
            <!--End sidebar nav-->

        </div>
    </div>
    <!--End left side menu-->


    <!-- main content start-->
    <div class="main-content">

        <!-- header section start-->
        <div class="header-section">

            <a class="toggle-btn"><i class="fa fa-bars"></i></a>

            <form class="searchform">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
            </form>

            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">Notifications</h5>
                            <ul class="dropdown-list normal-list">
                                <li class="message-list message-scroll-list">
                                    <a href="#">
                                        <span class="photo"> <img
                                                src="{{asset('admin/assets/images/users/avatar-8.jpg')}}"
                                                class="img-circle" alt="img"></span>
                                        <span class="subject">John Doe</span>
                                        <span class="message"> New tasks needs to be done</span>
                                        <span class="time">15 minutes ago</span>
                                    </a>

                                    <a href="#">
                                        <span class="photo"> <img
                                                src="{{asset('admin/assets/images/users/avatar-7.jpg')}}"
                                                class="img-circle" alt="img"></span>
                                        <span class="subject">John Doe</span>
                                        <span class="message"> New tasks needs to be done</span>
                                        <span class="time">10 minutes ago</span>
                                    </a>

                                    <a href="#">
                                        <span class="photo"> <img
                                                src="{{asset('admin/assets/images/users/avatar-6.jpg')}}"
                                                class="img-circle" alt="img"></span>
                                        <span class="subject">John Doe</span>
                                        <span class="message"> New tasks needs to be done</span>
                                        <span class="time">20 minutes ago</span>
                                    </a>

                                    <a href="#">
                                        <span class="photo"> <img
                                                src="{{asset('admin/assets/images/users/avatar-6.jpg')}}"
                                                class="img-circle" alt="img"></span>
                                        <span class="subject">John Doe</span>
                                        <span class="message"> New tasks needs to be done</span>
                                        <span class="time">20 minutes ago</span>
                                    </a>
                                </li>
                                <li class="last"> <a href="#">All Messages</a> </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            {{ Auth::user()->name }}
                            <span class=" caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li> <a href="#"> <i class="fa fa-wrench"></i> Settings </a> </li>
                            <li> <a href="#"> <i class="fa fa-user"></i> Profile </a> </li>
                            <li> <a href="#"> <i class="fa fa-info"></i> Help </a> </li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"> <i class="fa fa-lock"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->


        <!--body wrapper start-->
        <div class="wrapper">

            <!--Start Page Title-->
            <div class="page-title-box">
                <h4 class="page-title">@yield('title') </h4>

                <div class="clearfix"></div>
            </div>
            <!--End Page Title-->

            <!--Start row-->
            <div class="row">
                <div class="container">
                    <div class="analytics-box">

                    </div>
                </div>
            </div>
            <!--End row-->

            <!--Start row-->
            <div class="row">
                <!--Start info box-->
                @yield('content')
                <!-- Start inbox widget-->
            </div>
            <!--End row-->

        </div>
        <!-- End Wrapper-->


        <!--Start  Footer -->
        <!--End footer -->

    </div>
    <footer class="footer-main"> 2017 &copy; Meter admin Template. </footer>

    <!--End main content -->



    <!--Begin core plugin -->


    <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/moment/moment.js')}}"></script>
    <script src="{{asset('admin/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('admin/assets/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('admin/assets/js/functions.js')}}"></script>


    <!-- End core plugin -->

    <!--Begin Page Level Plugin-->
    <!-- <script src="{{asset('admin/assets/plugins/morris-chart/morris.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/morris-chart/raphael-min.js')}}"></script> -->
    <!-- <script src="{{asset('admin/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script> -->
    <!--  <script src="{{asset('admin/assets/pages/dashboard.js')}}"></script> -->

    <!--End Page Level Plugin-->


</body>

</html>