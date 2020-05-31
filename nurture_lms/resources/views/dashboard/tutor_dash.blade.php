@extends('master')
@section('content')
<div class="popular-courses-area weekly-top-items default-padding bottom-less">
    <div class="container">

        <div class="row">
            <!-- <div class="col-lg-2 col-md-2 text-center">
                    <div class="navbar flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                    </div>
                </div> -->
            <div class="col-lg-10 col-md-10">
                <div>
                    <h2>Courses</h2>
                    <div class="col-md-12">
                        <div class="row" text-right>
                            <button class="btn btn-secondary" type="button" style="background: #173d12; color:#ffff;" id="addCourse" data-toggle="modal" data-target="#exampleModal">
                                Add Course
                            </button>
                        </div>
                    </div>
                    <hr>
                    <table class="table" id="purchaseTable">
                        <thead>
                            <tr>
                                <th scope="col">Course Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Learn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $course)
                            <tr>
                                <td>{{ $course->course_name }}</td>
                                <td>{{ $course->category->categoty }}</td>
                                <td><a class="btn btn-theme effect btn-sm" id="{{ $course->id }}" href="{{ url('/course') }}/{{ $course->id }}" target="_blank">watch</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-success text-center" role="alert" id="_alert" style="display:none; width:80%; margin-left: 10%;"></div>
            <div class="modal-body" id="_modal">
                <form id="courseForm" class="white-popup-block" enctype="multipart/form-data">
                    '<div class="login-custom">
                        <div class="heading">
                            <h4></i>Add Course</h4>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                <label for="courseName">Course Name</label>
                                    <input class="form-control" placeholder="Course Name*" type="text" name="course_name" id="courseName">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                <label for="courseDesc">Course Description</label>
                                    <textarea class="form-control" id="course_desc" rows="5" name="description" id="courseDesc"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                <label for="courseCost">Course Cost</label>
                                    <input class="form-control" placeholder="Price*" type="text" name="cost" id="courseCost">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <label for="courseDuration">Course Duration</label>
                                    <input class="form-control" placeholder="Course Duration*" type="text" name="duration" id="courseDuration">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <label for="courseCategory">Course Category</label>
                                    <select class="form-control" name="category" id="courseCategory">
                                        <option>Select Course Category</option>
                                        @foreach($categories as $element)
                                        <option value="{{$element->id}}">{{$element->categoty}}</option>;
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <label for="courseThumbnail">Course Image</label>
                                    <input class="form-control" type="file" name="thumbnail" id="courseThumbnail">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <label for="courseVideo">Course Video</label>
                                    <input class="form-control" type="file" name="course_video" id="courseVideo">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row" text-right>
                            <input class="btn btn-secondary form-control" type="submit" value="Add Course" id="addCourseBtn" style="background: #173d12; color:#ffff;">
                                <!-- <button type="submit" class="btn btn-secondary" style="background: #173d12; color:#ffff;" id="addCourseBtn">
                                    Add
                                </button> -->
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <!-- <div class="col-md-12">
                    <div class="row" text-right>
                        <button type="button" class="btn btn-secondary" style="background: #173d12; color:#ffff;" id="addCourseBtn">
                            Add
                        </button>
                    </div>
                </div> -->
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            </div>
        </div>
    </div>
</div>
@endsection('content')

@section('scripts')
<script>
    console.log("clclclclclc");
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // $('#addCourse').click(function (e) {
    //     e.preventDefault();


    //     var $course_id = $(this).attr('id');
    //     const $categories = {!! json_encode($categories->toArray()) !!};
    //     var $cats_str = "";

    //     var $cats = (function () {
    //     var $cats_str = "";

    //     $categories.forEach(element => {
    //         // console.log("clclclclclc", element.categoty);
    //         $cats_str += '<option value="'+element.id+'">'+ element.categoty +'</option>';
    //         });
    //         return $cats_str;
    //         })();

    //     var $modal_body ='<form id="courseForm" class="white-popup-block" enctype="multipart/form-data">'+
    //             '<div class="login-custom">'+
    //                 '<div class="heading">'+
    //                     '<h4></i>Add Course</h4>'+
    //                 '</div>'+
    //                 '<div class="col-md-12">'+
    //                     '<div class="row">'+
    //                         '<div class="form-group">'+
    //                             '<input class="form-control" placeholder="Course Name*" type="text" name="course_name">'+
    //                         '</div>'+
    //                     '</div>'+
    //                 '</div>'+
    //                 '<div class="col-md-12">'+
    //                     '<div class="row">'+
    //                         '<div class="form-group">'+
    //                             '<textarea class="form-control" id="course_desc" rows="5" name="description"></textarea>'+
    //                         '</div>'+
    //                     '</div>'+
    //                 '</div>'+
    //                 '<div class="col-md-12">'+
    //                     '<div class="row">'+
    //                         '<div class="form-group">'+
    //                             '<input class="form-control" placeholder="Price*" type="text" name="cost">'+
    //                         '</div>'+
    //                     '</div>'+
    //                 '</div>'+
    //                 '<div class="col-md-12">'+
    //                     '<div class="row">'+
    //                         '<div class="form-group">'+
    //                             '<input class="form-control" placeholder="Course Duration*" type="text" name="duration">'+
    //                         '</div>'+
    //                     '</div>'+
    //                 '</div>'+
    //                 '<div class="col-md-12">'+
    //                     '<div class="row">'+
    //                         '<div class="form-group">'+
    //                             '<select class="form-control" name="category">'+
    //                                 '<option>Select Course Category</option>'+
    //                                 $cats+
    //                             '</select>'+
    //                         '</div>'+
    //                     '</div>'+
    //                 '</div>'+
    //                 '<div class="col-md-12">'+
    //                     '<div class="row">'+
    //                         '<div class="form-group">'+
    //                         '<label for="courseThumbnail">Course Thumbnail</label>'+
    //                             '<input class="form-control" type="file" name="thumbnail" id="courseThumbnail">'+
    //                         '</div>'+
    //                     '</div>'+
    //                 '</div>'+
    //                 '<div class="col-md-12">'+
    //                     '<div class="row">'+
    //                         '<div class="form-group">'+
    //                         '<label for="courseVideo">Course Video</label>'+
    //                             '<input class="form-control" type="file" name="course_video" id="courseVideo">'+
    //                         '</div>'+
    //                     '</div>'+
    //                 '</div>'+
    //             '</div>'+
    //         '</form>';
    //     $('#_modal').html($modal_body);
    // });
    // $("#addCourseBtn").click(function(e) {
    //     e.preventDefault();
    //     console.log("I was clicked");
    //     var $form_data = new FormData($('form')[0]);
    //     submitDetails($form_data);
    // });

    $("#courseForm").submit(function(e) {
        e.preventDefault(); 
        // var $form_data = new FormData(this);
        
        var formData = new FormData($("#courseForm")[0]);
        console.log("fomr data", formData);
        $.ajax({
            type: 'POST',
            url: '/api/course/create',
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            enctype: 'multipart/form-data',
            success: function(res) {
                if (!res.success) {
                    $('#_alert').toggleClass().css('display', 'block').html('<div class="iq-alert-text">Opps! Something went wrong</div></div>').delay(3000).fadeOut();
                }
                $('#courseForm')[0].reset();
                $('#_alert').css('display', 'block').html('<div class="iq-alert-text">Success!</div></div>').delay(3000).fadeOut();
            },
            error: function(jqXHR) {
                var response = $.parseJSON(jqXHR.responseText);
                // array.forEach(element => {

                // });
                $('#_alert').toggleClass('alert-success alert-danger').css('display', 'block').html('<div class="iq-alert-text">Failed! Please ensure you entered: phone and transaction Id</div></div>').delay(3000).fadeOut();
                console.log("Errr", response);
            }
        });
    });
</script>
@endsection('scripts')