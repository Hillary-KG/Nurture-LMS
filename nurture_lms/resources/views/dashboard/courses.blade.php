@extends('master')
@section('content')

<!-- Start Popular Courses
    ============================================= -->
<div class="popular-courses-area weekly-top-items default-padding bottom-less">
    <div class="container">
        <h1>Courses</h1>
        <hr>
        <div class="row">
            <div class="top-course-items">
                @foreach($courses as $course)
                <!-- Single Item -->
                
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="<?php echo asset("storage/$course->thumbnail") ?>" alt="Thumb">
                            <div class="overlay">
                                <a href="#">
                                    <h4 style="color: white;">Tutor: {{ $course->tutor->first_name }} {{ $course->tutor->last_name }}</h4>
                                    <!-- <img src="{{asset ('img/team/1.jpg')}}" alt="Thumb"> -->
                                </a>
                                <ul>
                                    <li><i class="fas fa-clock"></i> {{$course->duration }} hrs</li>
                                    <li><i class="fas fa-list-ul"></i> {{$course->enrollment()->count()}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#">{{ $course->category->categoty }}</a>
                                        <!-- <a href="#">Tech</a> -->
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
                                <a href="#">{{ $course->course_name }}</a>
                            </h4>
                            <p>
                                {{ $course->description }}
                            </p>
                            <div class="footer-meta">
                                <a class="btn btn-sm enrollBtn" id="{{ $course->id }}" data-toggle="modal" data-target="#exampleModal" style="background: #173d12; color:#ffff;" type="button">Enroll Now</a>
                                <h4>${{ ($course->cost)/100 }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->

                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buy Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-success" role="alert" id="_alert" style="display:none;"></div>
            <div class="modal-body" id="_modal">
            
                
            </div>
            <div class="modal-footer">
                <div class="col-md-12">
                    <div class="row" text-right>
                        <button type="button" class="btn btn-secondary" style="background: #173d12; color:#ffff;" id="subPurchase">
                            Buy Now
                        </button>
                    </div>
                </div>
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->


<!-- End Popular Courses -->
@endsection('content')

@section('scripts')
<script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.enrollBtn').click(function (e) {
            e.preventDefault();
            var $course_id = $(this).attr('id');  
            var $modal_body = '<p>To make a purchase pay via M-Pesa Paybill Number 090909 and Acc Number as your phone no.<br>'+
                'Enter the transaction number below and submit to complete.</p>'+
                '<form id="purchaseForm" class="white-popup-block">'+
                    '<div class="login-custom">'+
                        '<div class="heading">'+
                            '<h4></i>Buy Course Now</h4>'+
                        '</div>'+
                        '<input class="form-control" type="hidden" value="'+$course_id+'" name="course_id">'+
                        '<div class="col-md-12">'+
                            '<div class="row">'+
                                '<div class="form-group">'+
                                    '<input class="form-control" placeholder="Phone Number*" type="text" name="phone_no">'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="col-md-12">'+
                            '<div class="row">'+
                                '<div class="form-group">'+
                                    '<input class="form-control" placeholder="Transaction ID*" type="text" name="trans_id">'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</form>';
            $('#_modal').html($modal_body);
        });
        $("#subPurchase").click(function (e) {
            e.preventDefault();
            console.log("I was clicked");
            submitDetails();
        });

        function submitDetails() {
            console.log("lolololololo");
            var $data = $("#purchaseForm").serializeArray();
            console.log("data is here", $data);

            $.ajax({
                type:'POST',
                url: '/api/purchases/create',
                dataType: 'json',
                data: $data,
                success: function (res) {
                    if (!res.success) {
                        $('#_alert').toggleClass().css('display', 'block').html('<div class="iq-alert-text">Opps! Something went wrong</div></div>').delay(3000).fadeOut();
                    }
                    $('#_alert').css('display', 'block').html('<div class="iq-alert-text">Success!</div></div>').delay(3000).fadeOut();
                },
                error: function (jqXHR) {
                    var response = $.parseJSON(jqXHR.responseText);
                    // array.forEach(element => {
                        
                    // });
                    $('#_alert').toggleClass('alert-success alert-danger').css('display', 'block').html('<div class="iq-alert-text">Failed! Please ensure you entered: phone and transaction Id</div></div>').delay(3000).fadeOut();
                    console.log("Errr", response);
                }
            });
        }
     
</script>
@endsection('scripts')