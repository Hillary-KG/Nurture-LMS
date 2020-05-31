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
                        <!-- <li class="nav-item" style="padding-right: 20%;">
                            <a href="#purchases" class="nav-link active" style="background: #3a44ae;">Purchases</a>
                        </li> -->
                        <li class="nav-item" style="padding-right: 20%;">
                            <a href="#courses" class="nav-link" style="background: #3a44ae;">Courses</a>
                        </li>
                        <!-- <li class="nav-item" style="padding-right: 20%;">
                            <a href="#categories" class="nav-link" style="background: #3a44ae;">Course Categories</a>
                        </li> -->
                    </ul>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="bs-example">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="courses">
                            <h4 class="mt-2">Courses</h4>
                            <div>
                                <hr>
                                <table class="table" id="coursesTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Course Name</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Learn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($enrollments as $course)
                                        <tr>
                                            <td>{{ $course->course->course_name }}</td>
                                            <td>{{ $course->course->category->categoty }}</td>
                                            <td><a class="btn btn-theme effect btn-sm" id="{{ $course->course->id }}" href="{{ url('/course') }}/{{ $course->course->id }}" target="_blank">watch</a></td>
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
    });
</script>
@endsection('scripts')