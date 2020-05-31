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
                                    <form action="#" method="GET" id="courseSearch">
                                        <input type="text" placeholder="Enter course name" class="form-control" name="couse">
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
<!-- Start Registrationg 
    ============================================= -->
    <div class="registration-area default-padding bg-dark text-light">
        <!-- Fixed BG-->
        <div class="fixed-bg bg-cover" style="background-image: url('img/banner/3.jpg');"></div>
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
                    <h5>Free</h5>
                    <form id="register_student">
                        <div class="row">


                            <div class="col-md-6">

                                <div class="form-group">
                                    <input class="form-control" placeholder="First Name*" type="text" id="firstName" name="first_name">
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input class="form-control" placeholder="Last Name*" type="text" id="lastName" name="last_name">

                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input class="form-control" placeholder="Phone Number*" type="text" id="phoneNo" name="phone_no">
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input class="form-control" placeholder="Email*" type="email" id="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input class="form-control" placeholder="Password*" type="password" id="pswd" name="password">
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input class="form-control" placeholder="Repeat Password*" type="password" id="confirmPassword" name="confirm_password">
                                </div>

                            </div>
                            <div class="col-md-12">
                                <button type="submit">
                                    Rigister Now
                                </button>
                            </div>

                        </div>
                    </form>
                    <!-- <form action="#">
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
                </form> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Registrationg -->
<!-- Start Weekly Top
    ============================================= -->

<!-- End Weekly Top -->

<div id="mainContent">  
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

</div>

<!-- Start Testimonials 
    ============================================= -->

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
                    var $couses = (function () {
                    var $cats_str = "";
                    response.data.forEach(element => {
                        // console.log("type", element.charge);

                        $cats_str +='<div class="col-md-4 col-sm-6 equal-height">'+
                                        '<div class="item">'+
                                            '<div class="thumb">'+
                                                '<img src="'+element.thumbnail+'" alt="Thumb">'+
                                                '<div class="overlay">'+
                                                    '<a href="#">'+
                                                        '<h4 style="color: white;">Tutor:' + element.first_name+' '+ element.last_name+'</h4>'+
                                                    '</a>'+
                                                    '<ul>'+
                                                        '<li><i class="fas fa-clock"></i>' +element.duration+ 'hrs</li>'+
                                                        '<li><i class="fas fa-list-ul"></i>' +element.enrollment+'</li>'+
                                                    '</ul>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="info">'+
                                                '<div class="meta">'+
                                                    '<ul>'+
                                                        '<li>'+
                                                            '<a href="#">'+element.category+'</a>'+
                                                        '</li>'+
                                                        '<li>'+
                                                            '<i class="fas fa-star"></i>'+
                                                            '<i class="fas fa-star"></i>'+
                                                            '<i class="fas fa-star"></i>'+
                                                            '<i class="fas fa-star"></i>'+
                                                            '<i class="fas fa-star-half-alt"></i>'+
                                                            '<span>(1k)</span>'+
                                                        '</li>'+
                                                    '</ul>'+
                                                '</div>'+
                                                '<h4>'+
                                                    '<a href="#">'+element.course_name+'</a>'+
                                                '</h4>'+
                                                '<p>'+
                                                    element.description+
                                                '</p>'+
                                                '<div class="footer-meta">'+
                                                    '<a class="btn btn-sm enrollBtn" id="'+element.id+'" data-toggle="modal" data-target="#exampleModal" style="background: #173d12; color:#ffff;" type="button">Enroll Now</a>'
                                                    '<h4>$'+(element.cost)/100+'</h4>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>';
                        });
                        return $cats_str;
                    })();
                    var $content = '<div class="popular-courses-area weekly-top-items default-padding bottom-less">'+
                                        '<div class="container">'+
                                            '<h1>Courses</h1>'+
                                            '<hr>'+
                                            '<div class="row">'+
                                                '<div class="top-course-items">'+
                                                    $couses+
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