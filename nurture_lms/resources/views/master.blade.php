<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nurture">

    <!-- ========== Page Title ========== -->
    <title>Nurture</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset ('img/logo.jpeg') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset ('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset ('css/flaticon-set.css')}}" rel="stylesheet">
    <link href="{{asset ('css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset ('css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset ('css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset ('css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset ('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset ('css/bootsnav.css')}}" rel="stylesheet">
    <link href="{{asset ('css/style.css')}}" rel="stylesheet">
    <link href="{{asset ('css/responsive.css')}}" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
   @include('partials.top_nav')
    <!-- End Header Top -->
    
    @include('partials.header')


    @yield('content')

    <!-- Start Footer 
    ============================================= -->
   @include('partials.footer')
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset ('js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('js/equal-height.min.js') }}"></script>
    <script src="{{ asset ('js/jquery.appear.js') }}"></script>
    <script src="{{ asset ('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset ('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset ('js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset ('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset ('js/wow.min.js') }}"></script>
    <script src="{{ asset ('js/progress-bar.min.js') }}"></script>
    <script src="{{ asset ('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset ('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset ('js/count-to.js') }}"></script>
    <script src="{{ asset ('js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset ('js/loopcounter.js') }}"></script>
    <script src="{{ asset ('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset ('js/bootsnav.js') }}"></script>
    <script src="{{ asset ('js/main.js') }}"></script>
    
    @yield('scripts')

</body>
</html>