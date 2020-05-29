@extends('master')
@section('content')
<!-- Start Banner 
    ============================================= -->
<div class="banner-area shadow bg-fixed dark text-center text-light" style="background-image: url(assets/img/banner/11.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="box-table">
                    <div class="box-cell">
                        <div class="content search-content">
                            <h2>Start Learning Today</h2>
                            <!-- <ul>
                                    <li><i class="fas fa-drafting-compass"></i> Architecture</li>
                                    <li><i class="fas fa-book"></i> Education</li>
                                    <li><i class="fas fa-globe-asia"></i> Geography</li>
                                </ul> -->
                            <div class="col-md-8 col-md-offset-2">
                                <div class="row">
                                    <form action="#">
                                        <input type="text" placeholder="Enter course name" class="form-control" name="text">
                                        <button type="submit">
                                            <i class="ti-search"></i> Search
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- Start Weekly Top
    ============================================= -->

<!-- End Weekly Top -->

<!-- Start Registrationg 
    ============================================= -->
<div class="registration-area default-padding bg-dark text-light">
    <!-- Fixed BG-->
    <div class="fixed-bg bg-cover" style="background-image: url({{asset ('/img/banner/3.jpg') }});"></div>
    <!-- End Fixed BG-->
    <div class="container">
        <div class="row">
            <div class="col-md-7 countdown">
                <h2>Register today</h2>
                <h4>Get 50s of online Courses For Free!</h4>
                <p>
                    Own partiality motionless was old excellence she inquietude contrasted. Sister giving so wicket cousin of an he rather marked. Of on game part body rich. Adapted mr savings venture it or comfort affixed friends. Considered sympathize ten uncommonly occasional assistance sufficient not. Letter of on become he tended active enable to. Vicinity relation sensible sociable surprise screened no up as.
                </p>
                <ul>
                    <li>Design Instruments for Communication</li>
                    <li>Own partiality motionless</li>
                    <li>Considered sympathize</li>
                    <li>Letter of on become</li>
                </ul>
                <div class="counter-class" data-date="2020-3-24 23:59:59">
                    <!-- Date Formate Input yyyy-mm-dd hh:mm:ss -->
                    <div class="row">
                        <div class="item-list">
                            <div class="counter-item">
                                <div class="item">
                                    <span class="counter-days"></span> Days
                                </div>
                            </div>
                            <div class="counter-item">
                                <div class="item">
                                    <span class="counter-hours"></span> Hours
                                </div>
                            </div>
                            <div class="counter-item">
                                <div class="item">
                                    <span class="counter-minutes"></span> Minutes
                                </div>
                            </div>
                            <div class="counter-item">
                                <div class="item">
                                    <span class="counter-seconds"></span> Seconds
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 reg-form">
                <form action="#">
                    <h5>Free</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" placeholder="First Name" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" placeholder="Last Name" type="text">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" placeholder="Email*" type="email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <select>
                                    <option value="1">Chose Subject</option>
                                    <option value="2">Computer Engineering</option>
                                    <option value="4">Accounting Technologies</option>
                                    <option value="5">Web Development</option>
                                    <option value="6">Machine Language</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" placeholder="Phone" type="text">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit">
                                Rigister Now
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Registrationg -->

<!-- Start Categories 
    ============================================= -->
<div class="category-area default-padding">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Top Categories</h2>
                    <p>
                        Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression.
                    </p>
                </div>
            </div>
        </div>
        <div class="category-items">
            <div class="row">
                
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item mariner">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="flaticon-algorithm"></i>
                                    </div>
                                    <div class="info">
                                        <h5></h5>
                                        <!-- <p>
                                                Current enrolled <strong>1278</strong>
                                            </p>
                                            <span>28 Courses</span> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                   
            </div>
        </div>
    </div>
</div>
<!-- End Categories -->

<!-- Start Advisor 
    ============================================= -->

<!-- End Advisor -->

<!-- Start Event 
    ============================================= -->

<!-- End Event -->

<!-- Start Fun Factor 
    ============================================= -->
<div class="fun-factor-area default-padding text-center bg-fixed shadow dark-hard" style="background-image: url(assets/img/banner/4.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <div class="icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="info">
                        <span class="timer" data-to="212" data-speed="5000"></span>
                        <span class="medium">National Awards</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <div class="icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div class="info">
                        <span class="timer" data-to="128" data-speed="5000"></span>
                        <span class="medium">Best Teachers</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="info">
                        <span class="timer" data-to="8970" data-speed="5000"></span>
                        <span class="medium">Students Enrolled</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <div class="icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="info">
                        <span class="timer" data-to="640" data-speed="5000"></span>
                        <span class="medium">Cources</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Fun Factor -->

<!-- Start Testimonials 
    ============================================= -->
<div class="testimonials-area carousel-shadow active-dots bg-gray default-padding bg-cover" style="background-image: url(assets/img/shape-bg.png);">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>What Students Says</h2>
                    <p>
                        Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-items testimonial-carousel owl-carousel owl-theme text-center">
                    <!-- Single Item -->
                    <div class="item">
                        <div class="icon">
                            <i class="ti-quote-left"></i>
                        </div>
                        <div class="content">
                            <p>
                                Regret eat looked warmth easily far should now. Prospect at me wandered on extended wondered thoughts appetite to. Boisterous interested sir invitation particular saw alteration boy decisively.
                            </p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <img src="assets/img/team/1.jpg" alt="Thumb">
                        </div>
                        <div class="author">
                            <h4>Jonat Harik</h4>
                            <span>Student of DIU</span>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="icon">
                            <i class="ti-quote-left"></i>
                        </div>
                        <div class="content">
                            <p>
                                Ashamed herself has distant can studied mrs. Led therefore its middleton perpetual fulfilled provision frankness. Small he drawn after among every three no.
                            </p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <img src="assets/img/team/2.jpg" alt="Thumb">
                        </div>
                        <div class="author">
                            <h4>Bunah Ahem</h4>
                            <span>Student of COO</span>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="icon">
                            <i class="ti-quote-left"></i>
                        </div>
                        <div class="content">
                            <p>
                                Regret eat looked warmth easily far should now. Prospect at me wandered on extended wondered thoughts appetite to. Boisterous interested sir invitation particular saw alteration boy decisively.
                            </p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <img src="assets/img/team/3.jpg" alt="Thumb">
                        </div>
                        <div class="author">
                            <h4>Proda Huk</h4>
                            <span>Student of ICC</span>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials -->

<!-- Start Blog 
    ============================================= -->

<!-- End Blog -->

<!-- Start Newsletter 
    ============================================= -->
<div class="newsletter-area">
    <div class="container">
        <div class="subscribe-items shadow theme-hard default-padding bg-cover" style="background-image: url(assets/img/banner/11.jpg);">
            <div class="row">
                <div class="col-md-7 left-info">
                    <div class="info-box">
                        <div class="icon">
                            <i class="flaticon-email"></i>
                        </div>
                        <div class="info">
                            <h3>Subscribe to our newsletter</h3>
                            <p>
                                Prospect humoured mistress to by proposal marianne attended. Simplicity the far admiration preference everything.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <form action="#">
                        <div class="input-group">
                            <input type="email" placeholder="Enter your e-mail here" class="form-control" name="email">
                            <button type="submit">
                                Subscribe <i class="fa fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Newsletter -->
@endsection('content')