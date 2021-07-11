<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from edumin.dexignlab.com/xhtml/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Dec 2020 15:51:24 GMT -->
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>E - Exam</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link rel="stylesheet" href="{{asset('assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/admin/css/skin.css')}}">
	<link rel="stylesheet" href="{{asset('assets/admin/vendor/datatables/css/jquery.dataTables.min.css')}}">
    @yield('page_css')
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}



</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{asset('assets/admin/images/logo-white-2.png')}}" alt="">
                <img class="logo-compact" src="{{asset('assets/admin/images/logo-text-white.png')}}" alt="">
                <img class="brand-title" src="{{asset('assets/admin/images/logo-text-white.png')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->

            @include('admin.layout.header')

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

      @include('admin.layout.sidebar')


		<!--**********************************
            Content body start
        ***********************************-->
        @yield('content')
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignlab.com/" target="_blank">DexignLab</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************

        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('assets')}}/admin/vendor/global/global.min.js?{{time()}}"></script>

	<script src="{{asset('assets')}}/admin/js/custom.min.js?{{time()}}"></script>


    <!-- Chart Morris plugin files -->
    <script src="{{asset('assets/admin/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/morris/morris.min.js')}}"></script>

     <!-- Datatable -->
     <script src="{{asset('assets/admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
     <script src="{{asset('assets/admin/js/plugins-init/datatables.init.js')}}"></script>



	<!-- Chart piety plugin files -->
    <script src="{{asset('assets/admin/vendor/peity/jquery.peity.min.js')}}"></script>

		<!-- Demo scripts -->
    <script src="{{asset('assets/admin/js/dashboard/dashboard-2.js')}}"></script>

	<!-- Svganimation scripts -->
    <script src="{{asset('assets/admin/vendor/svganimation/vivus.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/svganimation/svg.animation.js')}}"></script>
    <script src="{{asset('assets/admin/js/styleSwitcher.js')}}"></script>

    @yield('page_js')






</body>

<!-- Mirrored from edumin.dexignlab.com/xhtml/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Dec 2020 15:51:27 GMT -->
</html>
