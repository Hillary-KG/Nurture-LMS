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
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <ul id="menuTab" class="nav nav-pills" style="border-width: 10px;background-color: #e8ece7;padding: 10px">
                        <li class="nav-item" style="padding-right: 20%;">
                            <a href="#purchases" class="nav-link active" style="background: #3a44ae;">Purchases</a>
                        </li>
                        <li class="nav-item" style="padding-right: 20%;">
                            <a href="#courses" class="nav-link" style="background: #3a44ae;">Courses</a>
                        </li>
                        <li class="nav-item" style="padding-right: 20%;">
                            <a href="#categories" class="nav-link" style="background: #3a44ae;">Course Categories</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="bs-example">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="purchases">
                            <h4 class="mt-2">Purchases</h4>
                            <div>
                                <h2>Purchases</h2>
                                <hr>
                                <div class="alert alert-success text-center" role="alert" id="purchase_alert" style="display:none; width:80%; margin-left: 10%;"></div>
                                <table class="table" id="purchaseTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Course</th>
                                            <th scope="col">Transaction</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Paying Phone</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($purchases as $purchase)
                                        <tr>
                                            <th scope="row">{{ $purchase->id }}</th>
                                            <td>{{ $purchase->course->course_name }}</td>
                                            <td>{{ $purchase->trans_id }}</td>
                                            @if($purchase->status == "pending")
                                            <td><span class="badge badge-pill badge-primary" style="padding: 7px;">{{ $purchase->status }}</span></td>
                                            @elseif($purchase->status === "approved")
                                            <td><span class="badge badge-pill badge-success" style="padding: 7px;">{{ $purchase->status }}</span></td>
                                            @else
                                            <td><span class="badge badge-pill badge-danger" style="padding: 7px;">{{ $purchase->status }}</span></td>
                                            @endif
                                            <td>{{ $purchase->user->first_name }} {{ $purchase->user->first_name }}</td>
                                            <td>{{ $purchase->phone_no }}</td>
                                            <td>
                                                <button class="btn btn-success effect btn-sm approvePurchase" id="{{ $purchase->id }}">approve</button>
                                                <button class="btn btn-primary effect btn-sm rejectPurchase" id="{{ $purchase->id }}">reject</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="courses">
                            <h4 class="mt-2">Courses</h4>
                            <div>
                                <h2>Courses</h2>
                                <hr>
                                <table class="table" id="coursesTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Tutor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($courses as $course)
                                        <tr>
                                            <td>{{ $course->id }}</td>
                                            <td>{{ $course->course_name }}</td>
                                            <td>{{ $course->category->categoty }}</td>
                                            <td>{{ $course->cost }}</td>
                                            <td>{{ $course->tutor->first_name }} {{ $course->tutor->last_name }}</td>

                                            <!-- <td><a class="btn btn-theme effect btn-sm" id="{{ $course->id }}" href="{{ url('/course') }}/{{ $course->id }}" target="_blank">watch</a></td> -->
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="categories">
                            <h4 class="mt-2">Course Catrgories</h4>
                            <div>
                                <h2>Course Categories</h2>
                                <div class="col-md-12">
                                    <div class="row" text-right>
                                        <button class="btn btn-secondary" type="button" style="background: #173d12; color:#ffff;" id="addCourse" data-toggle="modal" data-target="#exampleModal">
                                            Add Category
                                        </button>
                                    </div>
                                </div>
                                <hr>
                                <table class="table" id="categoriesTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->categoty }}</td>
                                            <td><a class="btn btn-theme effect btn-sm" id="{{ $category->id }}" id="deleteCategory">Delete</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
                <h5 class="modal-title" id="exampleModalLabel">Add Course Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-success text-center" role="alert" id="_alert" style="display:none; width:80%; margin-left: 10%;"></div>
            <div class="modal-body" id="_modal">
                <form id="addCategoryForm" class="white-popup-block">
                    <div class="login-custom">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <label for="courseName">Course Name</label>
                                    <input class="form-control" placeholder="Course Name*" type="text" name="category" id="categoryName">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row" text-right>
                                <input class="btn btn-secondary form-control" type="submit" value="Add Course" id="addCategory" style="background: #173d12; color:#ffff;">
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
    // $(document).ready(function(){ 

    // });
    $(function() {
        $("#menuTab a").click(function(e) {
            e.preventDefault();
            $(this).tab('show');
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#addCategoryForm").submit(function(e) {
            e.preventDefault();
            // var $form_data = new FormData(this);

            var formData = $(this).serializeArray();
            console.log("fomr data", formData);
            $.ajax({
                type: 'POST',
                url: '/api/courseCategory/create',
                data: formData,
                cache: false,
                success: function(res) {
                    if (!res.success) {
                        $('#_alert').toggleClass().css('display', 'block').html('<div class="iq-alert-text">Opps! Something went wrong</div></div>').delay(3000).fadeOut();
                    }
                    $('#addCategoryForm')[0].reset();
                    $('#_alert').css('display', 'block').html('<div class="iq-alert-text">Success!</div></div>').delay(3000).fadeOut();
                },
                error: function(jqXHR) {
                    var response = $.parseJSON(jqXHR.responseText);
                    // array.forEach(element => {

                    // });
                    $('#_alert').toggleClass('alert-success alert-danger').css('display', 'block').html('<div class="iq-alert-text">Failed!</div></div>').delay(3000).fadeOut();
                    console.log("Errr", response);
                }
            });
        });

        $(".approvePurchase").click(function(e) {
            e.preventDefault();
            var $id = $(this).attr('id');
            var $action = [];
            $action.push({
                "name": "action",
                "value": "approve"
            });
            $.ajax({
                type: 'PUT',
                url: '/api/purchases/update/' + $id,
                data: $action,
                cache: false,
                success: function(res) {
                    if (!res.success) {
                        $('#purchase_alert').toggleClass().css('display', 'block').html('<div class="iq-alert-text">Opps! Something went wrong</div></div>').delay(3000).fadeOut();
                    }
                    $('#addCategoryForm')[0].reset();
                    $('#purchase').css('display', 'block').html('<div class="iq-alert-text">Success!</div></div>').delay(3000).fadeOut();

                    $("#purchaseTable").load("/admin #purchaseTable");
                    // $(".approvePurchase").prop('disabled', true);
                    // $(".rejectPurchase").prop('disabled', true);
                },
                error: function(jqXHR) {
                    var response = $.parseJSON(jqXHR.responseText);
                    // array.forEach(element => {

                    // });
                    $('#purchase_alert').toggleClass('alert-success alert-danger').css('display', 'block').html('<div class="iq-alert-text">Failed!</div></div>').delay(3000).fadeOut();
                    console.log("Errr", response);
                }
            });
        });
        $(".rejectPurchase").click(function(e) {
            e.preventDefault();
            var $id = $(this).attr('id');
            var $action = [];
            $action.push({
                "name": "action",
                "value": "reject"
            });
            $.ajax({
                type: 'PUT',
                url: '/api/purchases/update/' + $id,
                data: $action,
                cache: false,
                success: function(res) {
                    if (!res.success) {
                        $('#purchase_alert').toggleClass().css('display', 'block').html('<div class="iq-alert-text">Opps! Something went wrong</div></div>').delay(3000).fadeOut();
                    }
                    $('#addCategoryForm')[0].reset();
                    $('#purchase_alert').css('display', 'block').html('<div class="iq-alert-text">Success!</div></div>').delay(3000).fadeOut();

                    $("#purchaseTable").load("/admin #purchaseTable");
                    // $(".approvePurchase").prop('disabled', true);
                    // $(".rejectPurchase").prop('disabled', true);

                },
                error: function(jqXHR) {
                    var response = $.parseJSON(jqXHR.responseText);
                    // array.forEach(element => {

                    // });
                    $('#purchase_alert').toggleClass('alert-success alert-danger').css('display', 'block').html('<div class="iq-alert-text">Failed!</div></div>').delay(3000).fadeOut();
                    console.log("Errr", response);
                }
            });
        });

    });
</script>
@endsection('scripts')