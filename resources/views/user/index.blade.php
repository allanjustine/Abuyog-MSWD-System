<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>MSWD | Municipality of Abuyog</title>
    @laravelPWA


    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="text-sm col-sm-8">
                        <div class="social-mini-button">
                            <a href=""><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                    <div class="text-sm text-right col-sm-4">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-danger"></span> +09123456789</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-danger"></span> mswd@gmail.com</a>
                        </div>

                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="shadow-sm navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand">
                    <img src="../assets/img/mswd-logo.png" alt="mswd" style="height:40px; width: 43px;  ">
                    <span class="text-danger">MSWD</span>- Abuyog, Leyte</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="ml-auto navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="doctors.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>

                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('myapplication') }}"
                                        style="background-color:red; font-weight:bold;">My
                                        Applications</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('profile.show') }}">
                                            Profile
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="btn btn-danger ml-lg-3" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-danger ml-lg-3" href="{{ route('register') }}">Register</a>
                                </li>

                            @endauth
                        @endif

                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>


    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif




    <!-- swiper -->
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="../assets/img/mswd-2.jpg" alt="">
                <div class="content">
                    <h3 class="title">
                        MUNICIPAL SOCIAL WELFARE AND DEVELOPMENT OFFICE</h3>
                    <span>Municipality Of Abuyog</span>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="../assets/img/mswd-1.jpg" alt="">
                <div class="content">
                    <h3 class="title">MUNICIPAL SOCIAL WELFARE AND DEVELOPMENT OFFICE</h3>
                    <span>
                        Municipality Of Abuyog</span>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="../assets/img/mswd-3.jpg" alt="">
                <div class="content">
                    <h3 class="title">MUNICIPAL SOCIAL WELFARE AND DEVELOPMENT OFFICE</h3>
                    <span>Municipality Of Abuyog</span>
                </div>
            </div>
        </div>

        <!-- Add Pagination and Navigation -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>


    <div class="bg-light">
        <div class="py-3 page-section mt-md-n5 custom-index">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="py-3 col-md-4 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="text-white circle-shape bg-secondary">
                                <span class="mai-bulb"></span>
                            </div>
                            <p>Vision</p>
                        </div>
                    </div>
                    <div class="py-3 col-md-4 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="text-white circle-shape bg-primary">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                            <p>Mission</p>
                        </div>
                    </div>
                    <div class="py-3 col-md-4 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="text-white circle-shape bg-accent">
                                <span class="mai-clipboard"></span>
                            </div>
                            <p>Mandate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .page-section -->











        @include('user.services')



        <footer class="page-footer">
            <div class="container">
                <div class="row px-md-3">
                    <div class="py-3 col-sm-6 col-lg-3">
                        <h5>Company</h5>
                        <ul class="footer-menu">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Editorial Team</a></li>
                            <li><a href="#">Protection</a></li>
                        </ul>
                    </div>
                    <div class="py-3 col-sm-6 col-lg-3">
                        <h5>More</h5>
                        <ul class="footer-menu">
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">Join as Doctors</a></li>
                        </ul>
                    </div>
                    <div class="py-3 col-sm-6 col-lg-3">
                        <h5>Contact</h5>
                        <p class="mt-2 footer-link">Brgy. Nalibunan Abuyog, Leyte</p>
                        <a href="#" class="footer-link">09123456789</a>
                        <a href="#" class="footer-link">mswd@gmail.com</a>

                        <h5 class="mt-3">Social Media</h5>
                        <div class="mt-3 footer-sosmed">
                            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                        </div>
                    </div>
                </div>

                <hr>
            </div>
        </footer>

        <script src="../assets/js/jquery-3.5.1.min.js"></script>

        <script src="../assets/js/bootstrap.bundle.min.js"></script>

        <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

        <script src="../assets/vendor/wow/wow.min.js"></script>

        <script src="../assets/js/theme.js"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const swiper = new Swiper('.mySwiper', {
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                });
            });
        </script>

</body>

</html>

<script src="{{ asset('/serviceworker.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/serviceworker.js").then(function(reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
