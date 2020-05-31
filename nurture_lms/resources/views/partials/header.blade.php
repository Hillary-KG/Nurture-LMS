<!-- Header 
    ============================================= -->
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default attr-border-none navbar-fixed white bootsnav on no-full navbar-transparent" style="background: #3a44ae;">

        <!-- Start Top Search -->
        <div class="container">
            <div class="row">
                <div class="top-search">
                    <div class="input-group">
                        <form action="#">
                            <input type="text" name="text" class="form-control" placeholder="Search">
                            <button type="submit">
                                <i class="ti-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="ti-search"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="{{asset ('img/logo.jpeg')}}" class="logo logo-display" alt="Logo" style="height: 50px;width: 70px;border-radius: 20%;">
                    <img src="{{asset ('img/logo.jpeg')}}" class="logo logo-scrolled" alt="Logo" style="height: 50px;width: 70px;border-radius: 20%;">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                        <!-- <ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
                            <li><a href="index.html">Home Version One</a></li>
                            <li><a href="index-2.html">Home Version Two</a></li>
                            <li><a href="index-3.html">Home Version Three</a></li>
                            <li><a href="index-4.html">Home Version Four</a></li>
                            <li><a href="index-5.html">Home Version Five</a></li>
                            <li><a href="index-6.html">Home Version Six</a></li>
                            <li><a href="index-7.html">Home Version Seven <span class="badge">New</span></a></li>
                            <li><a href="index-8.html">Home Version Eight <span class="badge">New</span></a></li>
                        </ul> -->
                    </li>
                    <li><a href="{{url ('about')}}">About Us</a></li>
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
                            
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery</a>
                                <ul class="dropdown-menu animated">
                                    <li><a href="gallery-grid-colum.html">Grid Colum</a></li>
                                    <li><a href="gallery-masonary-colum.html">Masonary Colum</a></li>
                                </ul>
                            </li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="404.html">Error Page</a></li>
                        </ul>
                    </li> -->
                    <li >
                        <a href="{{url ('courses')}}"class="dropdown-toggle" data-toggle="dropdown">Courses</a>
                        <!-- <ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
                            <li><a href="courses-grid.html">Course Grid</a></li>
                            <li><a href="courses-carousel.html">Course Carousel</a></li>
                            <li><a href="course-details.html">Course Details</a></li>
                        </ul> -->
                    </li>
                    <li>
                        <a href="{{url ('tutors')}}"> Teachers</a>
                        <!-- <ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
                            <li><a href="advisor-carousel.html">Advisor Carousel</a></li>
                            <li><a href="advisor-grid.html">Advisor Grid</a></li>
                            <li><a href="advisor-details.html">Advisor Details</a></li>
                        </ul> -->
                    </li>
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Event</a>
                        <ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
                            <li><a href="event-1.html">Event Version One</a></li>
                            <li><a href="event-2.html">Event Version Two</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                        <ul class="dropdown-menu animated">
                            <li><a href="blog-standard.html">Blog Standard</a></li>
                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-single.html">Blog Single Standard</a></li>
                            <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                            <li><a href="blog-single-right-sidebar.html">Single Right Sidebar</a></li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="{{url ('contact')}}">contact</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->