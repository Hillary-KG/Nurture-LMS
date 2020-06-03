<header id="home">
    <!-- Start Navigation -->
    <nav class="navbar navbar-default attr-border-none navbar-fixed white bootsnav on no-full navbar-transparent">

        <!-- Start Top Search -->
        <div class="container">
            <div class="row">
                <div class="top-search" style="display: block;">
                    <div class="input-group">
                        <form action="#" id="courseSearch">
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
                    <li class="dropdown">
                        <a href="{{url ('/')}}">Home</a>
                    </li>
                    <li><a href="{{url ('about')}}">About Us</a></li>
                    <li><a href="{{url ('courses')}}">Courses</a></li>
                    <li><a href="{{url ('tutors')}}">Tutors</a></li>
                    <li><a href="{{url ('contact')}}">Contact</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->

</header>