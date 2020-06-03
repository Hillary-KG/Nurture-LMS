@extends('master')
@section('content')

<div id="mainContent">
    <!-- Start Banner 
        ============================================= -->
        <div class="banner-area">
            <div id="bootcarousel" class="carousel content-less text-light top-pad text-dark slide animate_text" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner carousel-zoom">
                    <div class="item bg-cover active" style="background-image: url(assets/img/banner/25.jpg);">
                        <div class="box-table">
                            <div class="box-cell shadow dark">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="content">
                                                <h4 data-animation="animated fadeInUp" class="animated fadeInUp">Welcome to Educom</h4>
                                                <h2 data-animation="animated fadeInLeft" class="animated fadeInLeft">Learn from us and Accelerate <strong>Your Bright Future.</strong></h2>
                                                <a data-animation="animated fadeInDown" class="btn btn-light border btn-md animated fadeInDown" href="#">Learn More</a>
                                                <a data-animation="animated fadeInUp" class="btn btn-theme effect btn-md animated fadeInUp" href="#">View Courses</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item bg-cover" style="background-image: url(assets/img/banner/21.jpg);">
                        <div class="box-table">
                            <div class="box-cell shadow dark">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="content">
                                                <h4 data-animation="animated fadeInUp" class="">Upgrade your knowledge</h4>
                                                <h2 data-animation="animated fadeInLeft" class="">Learn From Best Online <strong>Training Course</strong></h2>
                                                <a data-animation="animated fadeInDown" class="btn btn-light border btn-md" href="#">Learn More</a>
                                                <a data-animation="animated fadeInUp" class="btn btn-theme effect btn-md" href="#">View Courses</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Wrapper for slides -->

                <!-- Left and right controls -->
                <a class="left carousel-control shadow" href="#bootcarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control shadow" href="#bootcarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- End Banner -->

        <!-- Start Features 
        ============================================= -->
        <div class="features-area default-padding-bottom fixed bottom-less bg-color text-light">
            <div class="container">
                <div class="row">
                    <div class="features">
                        <div class="equal-height col-md-3 col-sm-6" style="height: 330px;">
                            <div class="item mariner">
                                <a href="#">
                                    <div class="icon">
                                        <i class="ti-panel"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Expert faculty</h4>
                                        <p>
                                            attention say frankness intention out dashwoods now curiosity. Stronger ecstatic as no judgment daughter.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="equal-height col-md-3 col-sm-6" style="height: 330px;">
                            <div class="item brilliantrose">
                                <a href="#">
                                    <div class="icon">
                                        <i class="ti-ruler-pencil"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Best Teachers</h4>
                                        <p>
                                            attention say frankness intention out dashwoods now curiosity. Stronger ecstatic as no judgment daughter.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="equal-height col-md-3 col-sm-6" style="height: 330px;">
                            <div class="item casablanca">
                                <a href="#">
                                    <div class="icon">
                                        <i class="ti-server"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Online Courses</h4>
                                        <p>
                                            attention say frankness intention out dashwoods now curiosity. Stronger ecstatic as no judgment daughter.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="equal-height col-md-3 col-sm-6" style="height: 330px;">
                            <div class="item malachite">
                                <a href="#">
                                    <div class="icon">
                                        <i class="ti-desktop"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Scholarship</h4>
                                        <p>
                                            attention say frankness intention out dashwoods now curiosity. Stronger ecstatic as no judgment daughter.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Features -->

        <!-- Start Search
        ============================================= -->
        <div class="search-area text-center default-padding-bottom">
            <div class="container">
                <div class="search-course">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="search-content">
                            <div class="row">
                                <h2>Learn a new skill online on your time</h2>
                                <h4>34,460 Online Courses</h4>
                                <form action="#">
                                    <input type="text" placeholder="Enter course name" class="form-control" name="text">
                                    <button type="submit">
                                        Search Courses
                                    </button>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search -->

        <!-- Start Categories 
        ============================================= -->
        <div class="category-area default-padding-bottom">
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
                        <div class="col-md-4 col-sm-6 equal-height" style="height: 205px;">
                            <div class="item mariner">
                                <a href="#">
                                    <div class="item-box">
                                        <div class="icon">
                                            <i class="flaticon-algorithm"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Analysis of Algorithms</h5>
                                            <p>
                                                Current enrolled <strong>1278</strong>
                                            </p>
                                            <span>28 Courses</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height" style="height: 205px;">
                            <div class="item java">
                                <a href="#">
                                    <div class="item-box">
                                        <div class="icon">
                                            <i class="flaticon-nanotech"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Computer Science</h5>
                                            <p>
                                                Current enrolled <strong>9577</strong>
                                            </p>
                                            <span>56 Courses</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height" style="height: 205px;">
                            <div class="item malachite">
                                <a href="#">
                                    <div class="item-box">
                                        <div class="icon">
                                            <i class="flaticon-data-mining"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Data Science</h5>
                                            <p>
                                                Current enrolled <strong>2544</strong>
                                            </p>
                                            <span>29 Courses</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height" style="height: 205px;">
                            <div class="item brilliantrose">
                                <a href="#">
                                    <div class="item-box">
                                        <div class="icon">
                                            <i class="flaticon-chip"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Engineering</h5>
                                            <p>
                                                Current enrolled <strong>6788</strong>
                                            </p>
                                            <span>87 Courses</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height" style="height: 205px;">
                            <div class="item casablanca">
                                <a href="#">
                                    <div class="item-box">
                                        <div class="icon">
                                            <i class="flaticon-sketch"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Architecture</h5>
                                            <p>
                                                Current enrolled <strong>1766</strong>
                                            </p>
                                            <span>39 Courses</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height" style="height: 205px;">
                            <div class="item emerald">
                                <a href="#">
                                    <div class="item-box">
                                        <div class="icon">
                                            <i class="flaticon-paint-palette"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Art &amp; Design</h5>
                                            <p>
                                                Current enrolled <strong>4355</strong>
                                            </p>
                                            <span>36 Courses</span>
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

        <!-- Start Popular Courses
        ============================================= -->
        <div class="popular-courses-area bg-dark active-dots carousel-shadow weekly-top-items default-padding">
            <!-- Fidex BG -->
            <div class="fixed-bg" style="background-image: url(assets/img/bg.png);"></div>
            <!-- End Fidex BG -->
            <div class="container">
                <div class="row">
                    <div class="site-heading text-light text-center">
                        <div class="col-md-8 col-md-offset-2">
                            <h2>Popular Courses</h2>
                            <p>
                                Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-course-items courses-carousel owl-carousel owl-theme owl-loaded owl-drag">
                            <!-- Single Item -->
                            
                            <!-- Single Item -->
                            <!-- Single Item -->
                            
                            <!-- Single Item -->
                            <!-- Single Item -->
                            
                            <!-- Single Item -->
                            <!-- Single Item -->
                            
                            <!-- Single Item -->
                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-390px, 0px, 0px); transition: all 0.25s ease 0s; width: 1560px;"><div class="owl-item" style="width: 360px; margin-right: 30px;"><div class="item">
                                <div class="thumb">
                                    <img src="assets/img/courses/1.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <a href="#">
                                            <img src="assets/img/team/1.jpg" alt="Thumb">
                                        </a>
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 04:15:38</li>
                                            <li><i class="fas fa-list-ul"></i> 32</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#">Education</a>
                                                <a href="#">Tech</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <span>(1k)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4>
                                        <a href="#">data science and software</a>
                                    </h4>
                                    <p>
                                        Wisdom praise things she before. Be mother itself vanity favour do me of. Begin sex was power joy after had walls miles. 
                                    </p>
                                    <div class="footer-meta">
                                        <a class="btn btn-theme effect btn-sm" href="#">Enroll Now</a>
                                        <h4>$23.00</h4>
                                    </div>
                                </div>
                            </div></div><div class="owl-item active" style="width: 360px; margin-right: 30px;"><div class="item">
                                <div class="thumb">
                                    <img src="assets/img/courses/2.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <a href="#">
                                            <img src="assets/img/team/2.jpg" alt="Thumb">
                                        </a>
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 08:27:00</li>
                                            <li><i class="fas fa-list-ul"></i> 65</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#">Illustration</a>
                                                <a href="#">Design</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(2k)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4>
                                        <a href="#">Social Science &amp; Humanities</a>
                                    </h4>
                                    <p>
                                        Wisdom praise things she before. Be mother itself vanity favour do me of. Begin sex was power joy after had walls miles. 
                                    </p>
                                    <div class="footer-meta">
                                        <a class="btn btn-theme effect btn-sm" href="#">Enroll Now</a>
                                        <h4>$39.00</h4>
                                    </div>
                                </div>
                            </div></div><div class="owl-item active" style="width: 360px; margin-right: 30px;"><div class="item">
                                <div class="thumb">
                                    <img src="assets/img/courses/3.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <a href="#">
                                            <img src="assets/img/team/3.jpg" alt="Thumb">
                                        </a>
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 04:15:38</li>
                                            <li><i class="fas fa-list-ul"></i> 32</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#">Science</a>
                                                <a href="#">Tech</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.6k)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4>
                                        <a href="#">Programming Masterclass</a>
                                    </h4>
                                    <p>
                                        Wisdom praise things she before. Be mother itself vanity favour do me of. Begin sex was power joy after had walls miles. 
                                    </p>
                                    <div class="footer-meta">
                                        <a class="btn btn-theme effect btn-sm" href="#">Enroll Now</a>
                                        <h4>$54.00</h4>
                                    </div>
                                </div>
                            </div></div><div class="owl-item active" style="width: 360px; margin-right: 30px;"><div class="item">
                                <div class="thumb">
                                    <img src="assets/img/courses/4.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <a href="#">
                                            <img src="assets/img/team/4.jpg" alt="Thumb">
                                        </a>
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 04:15:38</li>
                                            <li><i class="fas fa-list-ul"></i> 32</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#">Education</a>
                                                <a href="#">Tech</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <span>(1k)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4>
                                        <a href="#">Professional Web Development</a>
                                    </h4>
                                    <p>
                                        Wisdom praise things she before. Be mother itself vanity favour do me of. Begin sex was power joy after had walls miles. 
                                    </p>
                                    <div class="footer-meta">
                                        <a class="btn btn-theme effect btn-sm" href="#">Enroll Now</a>
                                        <h4>$23.00</h4>
                                    </div>
                                </div>
                            </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots"><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div></div></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Popular Courses -->

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
                        <div class="testimonial-items testimonial-carousel owl-carousel owl-theme text-center owl-loaded owl-drag">
                            <!-- Single Item -->
                            
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            
                            <!-- End Single Item -->
                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1755px, 0px, 0px); transition: all 0.25s ease 0s; width: 4095px;"><div class="owl-item cloned" style="width: 555px; margin-right: 30px;"><div class="item">
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
                            </div></div><div class="owl-item cloned" style="width: 555px; margin-right: 30px;"><div class="item">
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
                            </div></div><div class="owl-item" style="width: 555px; margin-right: 30px;"><div class="item">
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
                            </div></div><div class="owl-item active" style="width: 555px; margin-right: 30px;"><div class="item">
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
                            </div></div><div class="owl-item active" style="width: 555px; margin-right: 30px;"><div class="item">
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
                            </div></div><div class="owl-item cloned" style="width: 555px; margin-right: 30px;"><div class="item">
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
                            </div></div><div class="owl-item cloned" style="width: 555px; margin-right: 30px;"><div class="item">
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
                            </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonials -->
</div>
    
@endsection('content')

@section('scripts')
<script>
    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        //register student
        $("#register_student").submit(function(e) {
            e.preventDefault();
            var $data = $(this).serializeArray();
            console.log("sub data", $data);

            $.ajax({
                type: 'POST',
                url: '/api/auth/registerStudent',
                data: $data,
                dataType: 'json',
                beforeSend: function() {
                    $("#ajax_loader").css('display', 'block');
                },

                success: function(response) {
                    var $expTime = new Date(new Date().getTime() + 15 * 60 * 1000);
                    console.log("success res is===>", response);
                    // console.log("");
                    $("#ajax_loader").css('display', 'none');
                    if (!response.success) {
                        $("#login_errors").text(response.message).delay(3000).fadeOut();
                        // $(".alert").css('display', 'block');
                        location.reload();
                    }
                    Cookies.set('token', response.access_token, {
                        expires: $expTime
                    });
                    // console.log("success!!!!!!!!!!!!!!!!");

                    location.href = '/login';
                },
                error: function(jqXHR) {
                    $("#ajax_loader").css('display', 'none');
                    var response = $.parseJSON(jqXHR.responseText);
                    console.log("res is===>", response);

                    $("#login_errors").css('display', 'block').html('<div class="">' + response.error + '</div>').delay(3000).fadeOut();
                }

            });
        });
        //register student
        $("#courseSearch").submit(function(e) {
            e.preventDefault();
            var $data = $(this).serializeArray();
            console.log("sub data", $data);

            $.ajax({
                type: 'GET',
                url: '/api/course/search',
                data: $data,
                dataType: 'json',
                beforeSend: function() {
                    $("#ajax_loader").css('display', 'block');
                },

                success: function(response) {
                    if (!response.success) {
                        $("#login_errors").text(response.message).delay(3000).fadeOut();
                        // $(".alert").css('display', 'block');
                    }
                    console.log("data com", response.data);
                    var $couses = (function () {
                        var $course_str = "";
                        response.data.forEach(element => {
                            console.log("data com", element.course_name);
                            $course_str += '<div class="owl-item" style="width: 360px; margin-right: 30px;"><div class="item">'+
                                '<div class="thumb">'+
                                    '<img src="'+element.thumbnail+'"alt="Thumb">'+
                                    '<div class="overlay">'+
                                        '<a href="#">'+
                                            '<img src="'+element.tutor+'" alt="Thumb">'+
                                        '</a>'+
                                        '<ul>'+
                                            '<li><i class="fas fa-clock"></i>'+element.duration+'</li>'+
                                            '<li><i class="fas fa-list-ul"></i>'+element.enrollment_count+'</li>'+
                                        '</ul>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="info">'+
                                    '<div class="meta">'+
                                        '<ul>'+
                                            '<li>'+
                                                '<a href="#">'+element.category+'</a>'+
                                                // '<a href="#">Tech</a>'+
                                            '</li>'+
                                            '<li>'+
                                                '<i class="fas fa-star"></i>'+
                                                '<i class="fas fa-star"></i>'+
                                                '<i class="fas fa-star"></i>'+
                                                '<i class="fas fa-star"></i>'+
                                                '<i class="fas fa-star-half-alt"></i>'+
                                                '<span>('+element.reviews_count+')</span>'+
                                            '</li>'+
                                        '</ul>'+
                                    '</div>'+
                                    '<h4>'+
                                        '<a href="#">'+element.course_name+'</a>'+
                                    '</h4>'+
                                    '<p>'+
                                    +element.description+
                                    '</p>'+
                                    '<div class="footer-meta">'+
                                        '<a class="btn btn-theme effect btn-sm" href="#">Enroll Now</a>'+
                                        '<h4>$'+element.cost+'</h4>'+
                                    '</div>'+
                                '</div>'+
                            '</div>';
                            });
                            return $course_str;
                        })();
                    var $content = '<div class="popular-courses-area bg-dark active-dots carousel-shadow weekly-top-items default-padding">'+
                                    '<div class="fixed-bg" style="background-image: url(assets/img/bg.png);"></div>'+
                                    '<div class="container">'+
                                        '<div class="row">'+
                                            '<div class="site-heading text-light text-center">'+
                                                '<div class="col-md-8 col-md-offset-2">'+
                                                    '<h2>Popular Courses</h2>'+
                                                    '<p>'+
                                                        'Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression.'+
                                                    '</p>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="row">'+
                                        ' <div class="col-md-12">'+
                                                '<div class="top-course-items courses-carousel owl-carousel owl-theme owl-loaded owl-drag">'+
                                                    
                                                    '<div class="owl-stage-outer">'+
                                                        '<div class="owl-stage" style="transform: translate3d(-390px, 0px, 0px); transition: all 0.25s ease 0s; width: 1560px;">'+
                                                        $couses+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="owl-nav disabled">'+
                                                        '<div class="owl-prev"><i class="fa fa-angle-left"></i></div>'+
                                                        '<div class="owl-next"><i class="fa fa-angle-right"></i></div>'+
                                                    '</div>'+
                                                    '<div class="owl-dots">'+
                                                        '<div class="owl-dot"><span></span></div>'+
                                                        '<div class="owl-dot active"><span></span></div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>';
                    $("#mainContent").html($content);
                },
                error: function(jqXHR) {
                    $("#ajax_loader").css('display', 'none');
                    var response = $.parseJSON(jqXHR.responseText);
                    console.log("res is===>", response);

                    $("#login_errors").css('display', 'block').html('<div class="">' + response.error + '</div>').delay(3000).fadeOut();
                }

            });
        });
    });
</script>
@endsection('scripts')