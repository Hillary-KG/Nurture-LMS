<!-- Start Header Top 
    ============================================= -->
<div class="top-bar-area bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 logo-box">
                <div class="logo">
                    <a href="index.html"><img src="{{asset ('img/logo.jpeg')}}" alt="Logo" style="height: 50px; width: 50px;"></a>
                </div>
            </div>
            <div class="col-md-8 address-info text-left">
                <div class="info">
                    <ul>
                        <li>
                            <i class="fas fa-copy"></i> Total courses: <strong>23400</strong>
                        </li>
                        <li>
                            <i class="fas fa-user-shield"></i> Instructor: <strong>655</strong>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i> Help Line: <strong>+123 456 7890</strong>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 link text-right">
                <ul>
                    <li>
                        <a href="{{ url ('/registerStudent') }}">Register</a>
                    </li>
                    <li>
                        <a href="{{ url ('/login') }}">Login</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
<!-- End Header Top -->