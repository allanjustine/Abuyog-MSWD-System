<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>MSWD | Municipality of Abuyog</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">



    <style>
        /* Apply uppercase to all text inputs and textareas, except for the email input with a specific name */
        form input[type="text"]:not([name="email"]),
        form input[type="number"],
        form textarea {
            text-transform: uppercase;
        }

        /* You can also exclude based on the class or other attributes if necessary */


        /* Custom Form Styling */
        .form-container {
            background-color: rgb(245, 245, 245);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-container h5 {
            font-size: 1.2rem;
            color: #333;
        }

        .form-container label {
            color: #555;
        }

        .form-container .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-container .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .form-container .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }

        .form-container .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .form-row {
            margin-bottom: 1rem;
        }

        .form-row .form-group {
            margin-bottom: 0.8rem;
        }

        .form-check-label {
            font-size: 1rem;
        }

        .btn-danger {
            margin-top: 10px;
        }

        .btn-danger:hover {
            background-color: #dc3545;
            border-color: #c82333;
        }

        .btn-icon {
            border-width: 3px;
            /* Thicker border */
            border-radius: 5px;
            font-weight: bold;
            /* Bold text */
            padding: 8px 15px;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 8px;
            /* Space between icon and text */
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }

        .btn-icon i {
            font-size: 1.4rem;
            /* Larger icon for better visibility */
        }

        .btn-icon:hover {
            background-color: rgba(0, 0, 0, 0.05);
            border-color: rgba(0, 0, 0, 0.8);
            /* Darker border on hover */
            color: rgba(0, 0, 0, 0.8);
            /* Slightly darker text on hover */
        }

        .btn-blue {
            border: 2px solid blue;
            /* Blue border */
            color: blue;
            /* Blue text */
            background-color: transparent;
            font-weight: bold;
            /* Bold text */
            padding: 8px 15px;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }

        .btn-blue i {
            font-size: 1.4rem;
        }

        /* Hover effect for blue buttons */
        .btn-blue:hover {
            color: white;
            background-color: blue;
            border-color: blue;
        }

        .custom-heading {
            font-family: 'Poppins', sans-serif;
            /* Palitan ng mas magandang font */
            font-size: 2rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            /* Shadow effect */
            text-align: center;
            color: #333;

            margin-bottom: 20px;
            /* Darker text for better readability */
        }
    </style>

</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    {{-- <header>
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
                    <span class="text-danger">MSWD</span>- Abuyog, Leyteee</a>

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
    </header> --}}

    <div class="container">
        @if (Auth::user()->isBeneficiary())
            @include('components.basic-info-modal')
        @endif
        <h1 class="custom-heading">Application Form for {{ $service->name }}</h1>
        <!-- Form for service with ID = 1 OSCA -->
        @if ($service->id == 1)
        @include('applications.osca')
        @endif
        <!-- Form for service with ID = 2 PWD -->
        @if ($service->id == 2)
        @include('applications.pwd')
        @endif
        <!-- Form for service with ID = 3 SOLO PARENT-->
        @if ($service->id == 3)
        @include('applications.solo-parent')
        @endif
        <!-- Form for service with ID = 4 AICS-->
        @if ($service->id == 4)
        @include('applications.aics')
        @endif
    </div>


    <script>
        function confirmSubmission() {
            return confirm("Please double-check your information. Are you sure you want to submit this request?");
        }
    </script>


    <script>
        document.getElementById('birthdate').addEventListener('change', function () {
            const birthdate = new Date(this.value);
            const today = new Date();
            let age = today.getFullYear() - birthdate.getFullYear();
            const monthDifference = today.getMonth() - birthdate.getMonth();

            // Adjust age if the birthdate hasn't occurred yet this year
            if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthdate.getDate())) {
                age--;
            }

            document.getElementById('age').value = age >= 0 ? age : '';
        });
    </script>

    <script>
        function toggleFields() {
            const congenitalRadio = document.querySelector('input[name="cause_of_disability"][value="Congenital/Inborn"]');
            const acquiredRadio = document.querySelector('input[name="cause_of_disability"][value="Acquired"]');
            const congenitalFields = document.getElementById('congenitalFields');
            const acquiredFields = document.getElementById('acquiredFields');
            const congenitalInputs = congenitalFields.querySelectorAll('input, select');
            const acquiredInputs = acquiredFields.querySelectorAll('input, select');
            const otherCongenital = document.getElementById('specifyCongenital');
            const otherAcquired = document.getElementById('specifyAcquired');
            const congenital = document.getElementById('congenital_inborn');
            const acquired = document.getElementById('acquired');

            if (congenitalRadio.checked) {
                // Show congenital fields, hide and disable acquired fields
                congenitalFields.style.display = 'block';
                acquiredFields.style.display = 'none';
                congenitalInputs.forEach(input => input.disabled = false);
                acquiredInputs.forEach(input => input.disabled = true);
                otherAcquired.style.display = 'none';
                acquired.value = ''
                toggleSpecifyCongenital();
            } else if(acquiredRadio.checked) {
                // Show acquired fields, hide and disable congenital fields
                congenitalFields.style.display = 'none';
                acquiredFields.style.display = 'block';
                congenitalInputs.forEach(input => input.disabled = true);
                acquiredInputs.forEach(input => input.disabled = false);
                otherCongenital.style.display = "none";
                congenital.value = '';
                toggleSpecifyAcquired();
            }
        }

        function toggleSpecifyCongenital() {
            const congenitalOption = document.getElementById('congenital_or_inborn').value;
            const specifyCongenital = document.getElementById('specifyCongenital');
            if (congenitalOption === 'others') {
                specifyCongenital.style.display = 'block';
                document.getElementById('specify_cause_of_disability_congenital').disabled = false;
            } else {
                specifyCongenital.style.display = 'none';
                document.getElementById('specify_cause_of_disability_congenital').disabled = true;
            }
        }

        function toggleSpecifyAcquired() {
            const acquiredOption = document.getElementById('for_acquired').value;
            const specifyAcquired = document.getElementById('specifyAcquired');
            if (acquiredOption === 'others') {
                specifyAcquired.style.display = 'block';
                document.getElementById('specify_cause_of_disability_acquired').disabled = false;
            } else {
                specifyAcquired.style.display = 'none';
                document.getElementById('specify_cause_of_disability_acquired').disabled = true;
            }
        }


        function toggleSpecifyField() {
            const occupationField = document.getElementById('occupation_pwd'); // Dropdown
            const specifyField = document.getElementById('specify_field_occupation'); // Specify field container
            const specifyInput = document.getElementById('specify_occupation'); // Specify input

            if (occupationField && occupationField.value === 'others') {
                specifyField.style.display = 'block'; // Show Specify field
            } else {
                specifyField.style.display = 'none'; // Hide Specify field
                if (specifyInput) {
                    specifyInput.value = ''; // Clear input value
                }
            }
        }

        function toggleRoleFields() {
            const role = document.getElementById('role').value;

            // Hide all role-specific fields
            document.getElementById('applicant_fields').style.display = 'none';
            document.getElementById('guardian_fields').style.display = 'none';
            document.getElementById('representative_fields').style.display = 'none';

            // Show the fields based on the selected role
            if (role === 'applicant') {
                document.getElementById('applicant_fields').style.display = 'block';
            } else if (role === 'guardian') {
                document.getElementById('guardian_fields').style.display = 'block';
            } else if (role === 'representative') {
                document.getElementById('representative_fields').style.display = 'block';
            }
        }

        // Initialize the form to show or hide fields based on the selected radio button
        document.addEventListener('DOMContentLoaded', () => {
            toggleFields();
        });
        document.addEventListener('DOMContentLoaded', toggleRoleFields);
        document.getElementById('role').addEventListener('change', toggleRoleFields);
        document.addEventListener('DOMContentLoaded', toggleSpecifyField);
        document.getElementById('occupation_pwd').addEventListener('change', toggleSpecifyField);
    </script>

    <!--For Saturday and Sunday exception-->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dateInput = document.getElementById('date_applied');

            // Function to calculate the next valid date (excluding weekends)
            function getNextValidDate(date) {
                const day = date.getDay(); // Get day of the week (0 = Sunday, 6 = Saturday)
                if (day === 6) {
                    // If Saturday, move to Monday
                    date.setDate(date.getDate() + 2);
                } else if (day === 0) {
                    // If Sunday, move to Monday
                    date.setDate(date.getDate() + 1);
                }
                return date;
            }

            // Set minimum date to tomorrow
            const today = new Date();
            let nextValidDate = new Date(today);
            nextValidDate.setDate(today.getDate() + 1); // Start from tomorrow
            nextValidDate = getNextValidDate(nextValidDate); // Adjust for weekends

            // Format date to YYYY-MM-DD
            const minDate = nextValidDate.toISOString().split('T')[0];

            // Set the minimum date
            dateInput.setAttribute('min', minDate);

            // Disable selection of weekends with SweetAlert
            dateInput.addEventListener('input', function () {
                const selectedDate = new Date(this.value);
                const selectedDay = selectedDate.getDay();

                // If the selected day is Saturday or Sunday, clear the input and show SweetAlert
                if (selectedDay === 6 || selectedDay === 0) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Invalid Date',
                        text: 'Weekends are not allowed. Please choose a weekday.',
                    });
                    this.value = ''; // Clear the selected value
                }
            });
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('message'))
    <script>
        Swal.fire({
        title: "Success",
        icon: 'success',
        text: @json(session('message')),
        showConfirmButton: false,
        showCloseButton: true,
        showCancelButton: true,
        cancelButtonText: 'Close',
    });
    </script>
    @endif
    <script>
        document.getElementById('submit-button').addEventListener('click', function (event) {
            event.preventDefault();
            // Get all required inputs
            const formInputs = document.querySelectorAll('input[required]');
            let allValid = true;

            // Validate required fields
            formInputs.forEach(input => {
                if (!input.value.trim()) {
                    allValid = false;
                    input.classList.add('is-invalid'); // Highlight the invalid fields
                } else {
                    input.classList.remove('is-invalid'); // Remove highlight if valid
                }
            });

            if (!allValid) {
                Swal.fire({
                    title: 'Incomplete Form',
                    text: 'Please fill out all required fields before submitting.',
                    icon: 'error',
                    confirmButtonText: 'Okay'
                });
                return; // Exit if validation fails
            }

            // Show SweetAlert confirmation dialog
            Swal.fire({
                title: 'Are you sure?',
                text: 'Please double-check your application before submitting.'
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit the form immediately without loading animation
                    document.getElementById('myForm').submit();
                }
            });
        });

        // Optional: Automatically remove 'is-invalid' when the user types in the field
        document.querySelectorAll('input[required]').forEach(input => {
            input.addEventListener('input', function () {
                if (this.value.trim()) {
                    this.classList.remove('is-invalid');
                }
            });
        });
    </script>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.getElementById('submit-button').addEventListener('click', function (event) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: 'Please double-check your application before submitting.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
                reverseButtons: true
            }).then((result) => {
                if(result.isConfirmed) {
                    Swal.fire({
                        title: 'Submitting...',
                        html: `Please wait, submitting may take some time and checking empty fields.<br>Thank you for your patience.`,
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });


                    setTimeout(() => {
                        Swal.close();
                        document.getElementById('myForm').submit();
                    }, 4000);
                }
            });
        });
    </script>


</body>

</html>
