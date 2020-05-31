@extends('master')
@section('content')
<!-- Start Advisor 
    ============================================= -->
<div class="advisor-area bg-gray default-padding bottom-less bg-cover">
    <div class="container">
        <div class="row">
            <div class="advisor-items col-3 text-light text-center">
                @foreach($tutors as $tutor)
                <!-- Single item -->
                <div class="col-md-4 col-sm-6 single-item">
                    <div class="item">
                        <div class="thumb">
                            <img src="<?php echo asset("$tutor->thumbnail")?>" alt="Thumb">
                            <ul>
                                <li class="facebook">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="dribbble">
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </li>
                                <li class="youtube">
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="info">
                            <span>Art Teacher</span>
                            <h4>{{ $tutor->first_name }} {{ $tutor->last_name }}</h4>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End Advisor -->
@endsection('content')
@section('scripts')
@endsection('scripts')