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
                                                <h2></i> Contact Us</h2>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="content">
                                        <div class="meta">
                                            <ul>
                                                <li>
                                                    <h3>Call Us On: +2547 18 247 242</h3>
                                                    <h3>Email Us On: nurture@nurture.org</h3>
                                                </li>
                                            </ul>
                                            <p>We're glad to have you on board &#x1F60A</p>
                                    </div>
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