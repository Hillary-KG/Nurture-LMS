@extends('master')
@section('content')

<!-- Start Blog
    ============================================= -->
<div class="blog-area full-blog blog-standard full-blog default-padding">
    <div class="container">
        <div class="row">
            <div class="blog-items">
                <div class="blog-content col-md-10 col-md-offset-1">
                    <div class="content-items">

                        <!-- Single Item -->
                        <div class="single-item">
                            <div class="item">
                                <div class="thumb text-center">
                                    <a href="#">
                                        <img src="{{asset ('img/logo.jpeg')}}" alt="Thumb" style="width: 30%;height: 40%;">
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <h3>About Us</h3>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="content">
                                        <h2>We are Nurture.</h2>
                                        <p>Nurturing you through high quality learning content and world-class tutors. We are the leading global marketplace for learning and instruction
                                            By connecting students all over the world to the best instructors, Nurture is helping individuals reach their goals and pursue their dreams.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                    <!-- End Blog Items -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->
@endsection('content')
@section('scripts')
@endsection('scripts')