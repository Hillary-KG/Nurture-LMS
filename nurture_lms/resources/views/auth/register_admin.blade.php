<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Edocom - Education & LMS Template">

    <!-- ========== Page Title ========== -->
    <title>Nurture:Login</title>

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
    <div class="top-bar-area bg-dark text-light">
        <div class="container">
            <div class="row">

                <div class="col-md-8 address-info text-left">
                    <div class="info">
                        <ul>
                            <li>
                                <i class="fas fa-copy"></i> Total courses: <strong>23400</strong>
                            </li>
                            <li>
                                <i class="fas fa-user-shield"></i> Instructor: <strong>655</strong>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i> Help Line: <strong>+123 456 7890</strong>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 link text-right">
                    <ul>
                        <li>
                            <a href="#">Register</a>
                        </li>
                        <li>
                            <a href="#">Login</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Start Login 
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div id="ajax_loader" class="" style="display: none; text-align: center;">
                        <img src="img/preloader.gif" alt="processing request ..." style="width: 40px; height: 40px;"><br>
                        <p>
                            Please wait ...
                        </p>
                    </div>
                    <div class="alert alert-danger" role="alert" style="display: none;" id="login_errors"></div>
                    <form action="#" id="register_admin" class="white-popup-block">
                        <div class="login-custom">
                            <div class="heading">
                                <h4><i class="fas fa-edit"></i> Register Now</h4>
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="First Name*" type="text" id="firstName" name="first_name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Last Name*" type="text" id="lastName" name="last_name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Phone Number*" type="text" id="phoneNo" name="phone_no">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email*" type="email" id="email" name="email_address">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Gender*" type="text" id="gender" name="gender">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password*" type="text" id="pswd" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Repeat Password*" type="text" id="confirmPassword" name="confirm_password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit">
                                        Sign up
                                    </button>
                                </div>
                            </div>
                            <p class="link-bottom">Are you a member? <a href="#">Login now</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <!-- Single item -->
                    <div class="col-md-4 col-sm-6 item equal-height">
                        <div class="f-item about">
                            <h4>About</h4>
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address.
                            </p>
                            <ul>
                                <li>
                                    <p>Email <span><a href="mailto:info@example.com">info@example.com</a></span></p>
                                </li>
                                <li>
                                    <p>Office <span>144, Jalkheri Street, Seattle, WA 98104-2648.</span></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single item -->

                    <!-- Single item -->
                    <div class="col-md-2 col-sm-6 item equal-height">
                        <div class="f-item link">
                            <h4>Categories</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> All Courses</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Event</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Digital Marketing</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Design & Branding</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Storytelling</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Education</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Geography</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single item -->

                    <!-- Single item -->
                    <div class="col-md-2 col-sm-6 item equal-height">
                        <div class="f-item link">
                            <h4>Support</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Documentation</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Forums</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Language Packs</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Release Status</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> LearnPress</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single item -->

                    <!-- Single item -->
                    <div class="col-md-4 col-sm-6 item equal-height">
                        <div class="f-item popular-courses">
                            <h4>Popular Courses</h4>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Subjects allied to Creative arts and design</a>
                                        <ul class="meta">
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </li>
                                            <li>(128) enrolled</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Business and administrative subjects</a>
                                        <ul class="meta">
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li>(98) enrolled</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Business and administrative subjects</a>
                                        <ul class="meta">
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </li>
                                            <li>(688) enrolled</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single item -->
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2020. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms of user</a>
                            </li>
                            <li>
                                <a href="#">License</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset ('js/js.cookie.min.js') }}"></script>
    <script src="{{ asset ('js/jquery-1.12.4.min.js') }}"></script>
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
    <script src="{{ asset ('js/auth.js') }}"></script>

</body>

</html>