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

    <!-- Start Categories 
    ============================================= -->
    <div class="category-area default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>My Courses</h2>
                        <p>
                             
                        </p>
                    </div>
                </div>
            </div>
            <div class="category-items">
                <div class="row">
                    @foreach ($courses as $course)
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item mariner">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="flaticon-algorithm"></i>
                                    </div>
                                    <div class="info">
                                        <h5>{{$course->course_name}}</h5>
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
                    @endforeach
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

    

   
    <!-- Start Blog 
    ============================================= -->
    
    <!-- End Blog -->

    <!-- Start Newsletter 
    ============================================= -->
   
    <!-- End Newsletter -->
    @endsection('content')