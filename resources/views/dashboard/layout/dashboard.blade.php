
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Zinzer - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{asset('dashboard/assets/images/favicon.ico')}}">

        <!-- morris css -->
        <link rel="stylesheet" href="{{asset('dashboard/plugins/morris/morris.css')}}">

        <link href="{{asset('dashboard/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('dashboard/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('dashboard/assets/css/style.css')}}" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            @include('dashboard.layout.includes.sidebar')
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                  @include('dashboard.layout.includes.navbar')
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                 
                        <div class="container-fluid">
                            @if ($message = \Session::get('success'))
                                <div class="alert alert-success">
                                    {{ $message }}
                                </div>
                            @endif
                            @if ($message = \Session::get('error'))
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h4 class="page-title m-0"> <a href="{{ route($module_name . '.index') }}" >
                                                    {{ $module_name }}
                                                </a></h4>
                                            </div>
                                            {{-- <div class="col-md-4">
                                                <div class="float-right d-none d-md-block">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="ti-settings mr-1"></i> Settings
                                                        </button>
                                                        <div
                                                            class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end page-title-box -->
                                </div>
                            </div>
                            <!-- end page title -->
    
                            @yield('content')
                        </div><!-- container fluid -->
                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                @include('dashboard.layout.includes.footer')
        

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{asset('dashboard/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('dashboard/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('dashboard/assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('dashboard/assets/js/detect.js')}}"></script>
        <script src="{{asset('dashboard/assets/js/fastclick.js')}}"></script>
        <script src="{{asset('dashboard/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('dashboard/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('dashboard/assets/js/waves.js')}}"></script>
        <script src="{{asset('dashboard/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('dashboard/assets/js/jquery.scrollTo.min.js')}}"></script>

        <!--Morris Chart-->
        <script src="{{asset('dashboard/plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('dashboard/plugins/raphael/raphael.min.js')}}"></script>

        <!-- dashboard js -->
        <script src="{{asset('dashboard/assets/pages/dashboard.int.js')}}"></script>        

        <!-- App js -->
        <script src="{{asset('dashboard/assets/js/app.js')}}"></script>

    </body>
</html>