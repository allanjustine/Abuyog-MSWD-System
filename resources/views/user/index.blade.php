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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Add Bootstrap CSS (if not already included) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
        /* Gradient Background Animation */
        body {
            animation: gradientLoop 10s ease infinite;
            background: linear-gradient(45deg, #230290, #ffbc8f, #8aff7a, #f3505e);
            background-size: 400% 400%;
            color: #000000;
            /* Ensure text is visible on dark background */
            font-family: 'Poppins', sans-serif;
            /* Use Poppins for a cool font */
            /* Add a clean font for readability */
        }

        /* Define the animation for the gradient loop */
        @keyframes gradientLoop {
            0% {
                background-position: 0% 50%;
            }

            25% {
                background-position: 50% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            75% {
                background-position: 50% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Other styling adjustments */
        .navbar {
            background-color: #3e8f4f;
        }

        .navbar a {
            color: #ffffff !important;
        }

        .btn-danger {
            background-color: #317af7;
            border-color: #ebe3e300;
        }

        footer {
            background-color: #222;
            color: #ffffff;
        }

        footer a {
            color: #ffffff;
        }

        footer a:hover {
            color: #f0ad4e;
        }

        /* Customize color for the phone and email icons */
        .mai-call,
        .mai-mail {
            color: #ff6f61;
            /* Adjusted color */
        }

        /* Customize color for the divider */
        .divider {
            color: #bbb;
            /* Light gray color for divider */
        }

        /* Hover effect for links */
        .site-info a:hover {
            color: #ff6f61;
            /* Hover effect for links */
            text-decoration: none;
        }

        .typing-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        #animated-text {
            font-size: 64px;
            font-weight: bold;
            color: #8f0000;
            border-right: 2px solid #000000;
            /* Blinking cursor */
            white-space: nowrap;
            overflow: hidden;
            width: fit-content;
        }

        .content .title {
            text-shadow: 2px 4px 4px rgba(0, 0, 0, 0.7);
            /* Adds black shadow */
        }

        .content span {
            text-shadow: 1px 2px 4px rgba(244, 236, 236, 0.5);
            /* Subtle shadow for smaller text */
        }
    </style>

</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right">
                        <div class="site-info">
                            <a href="tel:+09123456789">
                                <span class="mai-call" style="color: #0007df;"></span> +09123456789
                            </a>
                            <span class="divider" style="color: #bbb;">|</span>
                            <a href="mailto:mswd@gmail.com">
                                <span class="mai-mail" style="color: #ff0000;"></span> mswd@gmail.com
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>

        <nav class="shadow-sm navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand">
                    <img src="../assets/img/mswd-logo.png" alt="MSWD" style="height:40px; width: 43px;">
                    <span class="text-danger">MSWD</span> - Abuyog, Leyte
                </a>
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
                            <a class="nav-link" href="#services-section">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact-section">Contact</a>
                        </li>

                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('myapplication') }}"
                                        style="background-color:rgb(238, 131, 64); font-weight:bold;">My Applications</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">@csrf</form>
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
                </div>
            </div>
        </nav>
    </header>

    <!-- Swiper Section -->
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <img src="../assets/img/mswd-2.jpg" alt="MSWD Image 1">
                <div class="content">
                    <h3 class="title">
                        MUNICIPAL SOCIAL WELFARE AND DEVELOPMENT OFFICE</h3>
                    <span>Municipality Of Abuyog</span>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <img src="../assets/img/mswd-1.jpg" alt="MSWD Image 2">
                <div class="content">
                    <h3 class="title">
                        MUNICIPAL SOCIAL WELFARE AND DEVELOPMENT OFFICE</h3>
                    <span>Municipality Of Abuyog</span>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <img src="../assets/img/mswd-3.jpg" alt="MSWD Image 3">
                <div class="content">
                    <h3 class="title">
                        MUNICIPAL SOCIAL WELFARE AND DEVELOPMENT OFFICE</h3>
                    <span>Municipality Of Abuyog</span>
                </div>
            </div>
        </div>
        <!-- Swiper Navigation -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>



    <div class="bg-light">
        <div class="py-3 page-section mt-md-n5 custom-index">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Vision -->
                    <div class="py-3 col-md-4 py-md-0">
                        <div class="card-service wow fadeInUp" data-bs-toggle="modal" data-bs-target="#visionModal">
                            <div class="text-white circle-shape bg-secondary">
                                <span class="mai-bulb"></span>
                            </div>
                            <p>Vision</p>
                        </div>
                    </div>

                    <!-- Mission -->
                    <div class="py-3 col-md-4 py-md-0">
                        <div class="card-service wow fadeInUp" data-bs-toggle="modal" data-bs-target="#missionModal">
                            <div class="text-white circle-shape bg-primary">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                            <p>Mission</p>
                        </div>
                    </div>

                    <!-- Mandate -->
                    <div class="py-3 col-md-4 py-md-0">
                        <div class="card-service wow fadeInUp" data-bs-toggle="modal" data-bs-target="#mandateModal">
                            <div class="text-white circle-shape bg-accent">
                                <span class="mai-clipboard"></span>
                            </div>
                            <p>Mandate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vision Modal -->
    <div class="modal fade" id="visionModal" tabindex="-1" aria-labelledby="visionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="visionModalLabel">Vision</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your vision content goes here.
                </div>
            </div>
        </div>
    </div>

    <!-- Mission Modal -->
    <div class="modal fade" id="missionModal" tabindex="-1" aria-labelledby="missionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="missionModalLabel">Mission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your mission content goes here.
                </div>
            </div>
        </div>
    </div>

    <!-- Mandate Modal -->
    <div class="modal fade" id="mandateModal" tabindex="-1" aria-labelledby="mandateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mandateModalLabel">Mandate</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your mandate content goes here.
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="typing-container">
        <h1 id="animated-text"></h1>
    </div> -->


    <div id="services-section">
        @include('user.services')
    </div>

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
    <script src="../assets/js/script.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            centeredSlides: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });


        document.addEventListener("DOMContentLoaded", function () {
            const texts = [
                "MUNICIPAL SOCIAL WELFARE", "AND", "DEVELOPMENT OFFICE", "Municipality Of Abuyog"
            ]; // Add your texts here
            const animatedTextElement = document.getElementById("animated-text");
            let currentTextIndex = 0;
            let charIndex = 0;

            function typeText() {
                const currentText = texts[currentTextIndex];

                // Add the next character
                animatedTextElement.textContent = currentText.slice(0, charIndex);
                charIndex++;

                // If the text is fully typed, pause, then start the next text
                if (charIndex > currentText.length) {
                    setTimeout(() => {
                        charIndex = 0; // Reset for the next text
                        currentTextIndex = (currentTextIndex + 1) % texts.length; // Move to the next text
                        typeText();
                    }, 1000); // Pause before starting the next text
                } else {
                    setTimeout(typeText, 150); // Delay between each character
                }
            }

            // Start the typing effect
            typeText();
        });
    </script>

    <!-- Bootstrap JS (for modal functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>