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
    </style>

</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="social-mini-button">
                            <a href=""><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-danger"></span> +09123456789</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-danger"></span> mswd@gmail.com</a>
                        </div>

                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand">
                    <img src="../assets/img/mswd-logo.png" alt="mswd" style="height:40px; width: 43px;  ">
                    <span class="text-danger">MSWD</span>- Abuyog, Leyte</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
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

    <div class="container">
        <h1>Application Form for {{ $service->name }}</h1>

        <!-- Form for service with ID = 2 PWD -->
        @if ($service->id == 2)
                <form action="{{ url('submit-application') }}" method="POST" class="form-container">
                    @csrf
                    <input type="hidden" name="service_id" value="{{ $service->id }}">

                    <p style="color: red; font-weight: normal;">
                        Please fill up completely and correctly the required information before each item below. For items
                        that
                        are not associated to you, leave it blank.
                        <span style="font-weight: bold;">Required items are also marked with an asterisk (*)</span> so
                        please
                        fill it up correctly.
                    </p>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="last_name">Last Name: <span style="color: red;">*</span></label>
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name"
                                value="{{ Auth::user()->last_name }}" readonly>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="name">First Name: <span style="color: red;">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="First Name"
                                value="{{ Auth::user()->first_name }}" readonly>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="middle_name">Middle Name:</label>
                            <input type="text" name="middle_name" class="form-control" placeholder="Middle Name"
                                value="{{ Auth::user()->middle_name }}" readonly>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="suffix">Suffix:</label>
                            <input type="text" name="suffix" class="form-control" placeholder="Suffix"
                                value="{{ Auth::user()->suffix }}" readonly>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="application_type">Application Type <span style="color: red;">*</span>:</label>
                            <select name="application_type" id="application_type" class="form-control" required>
                                <option value="" disabled selected>Select Application Type</option>
                                <option value="new_applicant" {{ old('application_type', $application_type ?? '') === 'new_applicant' ? 'selected' : '' }}>
                                    New Applicant
                                </option>
                                <option value="renewal" {{ old('application_type', $application_type ?? '') === 'renewal' ? 'selected' : '' }}>
                                    Renewal
                                </option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="pwd_num">PWD NUMBER(RR-PPMM-BBB-NNNNNNN)</label>
                            <input type="text" name="pwd_num" class="form-control" placeholder="Persons with Disability Number"
                                value="{{ old('pwd_num', $pwd_num ?? '') }}">
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Phone <span style="color: red;">*</span>:</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone"
                                value="{{ Auth::user()->phone }}" readonly>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Email:</label>
                            <input type="text" name="email" class="form-control" placeholder="Email"
                                value="{{ Auth::user()->email }}" readonly>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Date for Personal Appearance <span style="color: red;">*</span>:</label>
                            <input type="date" name="date_applied" id="date_applied" class="form-control" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Landline No.:</label>
                            <input type="text" name="landline" class="form-control" placeholder="Landline No."
                                value="{{ old('landline', $landline ?? '') }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Blood Type <span style="color: red;">*</span></label>
                            <input type="text" name="blood_type" class="form-control" placeholder="Blood Type"
                                value="{{ old('blood_type', $blood_type ?? '') }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sex">Sex <span style="color: red;">*</span></label>
                            <select name="sex" id="sex" class="form-control" required>
                                <option value="" disabled selected>Select Sex</option>
                                <option value="female" {{ old('sex', $sex ?? '') === 'female' ? 'selected' : '' }}>
                                    Female
                                </option>
                                <option value="male" {{ old('sex', $sex ?? '') === 'male' ? 'selected' : '' }}>
                                    Male
                                </option>
                            </select>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Date of Birth <span style="color: red;">*</span>:</label>
                            <input type="date" name="birthdate" class="form-control" id="birthdate"
                                value="{{ old('birthdate', $birthdate ?? '') }}" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Age <span style="color: red;">*</span></label>
                            <input type="text" name="age" class="form-control" id="age" placeholder="Age" readonly
                                value="{{ old('age', $age ?? '') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="civil_status">Civil Status <span style="color: red;">*</span>:</label>
                            <select name="civil_status" id="civil_status" class="form-control" required>
                                <option value="" disabled selected>Select Status</option>
                                <option value="single" {{ old('civil_status', $civil_status ?? '') === 'single' ? 'selected' : '' }}>
                                    Single
                                </option>
                                <option value="separated" {{ old('civil_status', $civil_status ?? '') === 'separated' ? 'selected' : '' }}>
                                    Separated
                                </option>
                                <option value="cohabitation" {{ old('civil_status', $civil_status ?? '') === 'cohabitation' ? 'selected' : '' }}>
                                    Cohabitation(Live in)
                                </option>
                                <option value="married" {{ old('civil_status', $civil_status ?? '') === 'married' ? 'selected' : '' }}>
                                    Married
                                </option>
                                <option value="widow" {{ old('civil_status', $civil_status ?? '') === 'widow' ? 'selected' : '' }}>
                                    Widow/er
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="type_of_disability">Type of Disability:</label>
                        <select name="type_of_disability" id="type_of_disability" class="form-control">
                            <option value="" disabled selected>Select Disability</option>
                            <option value="deaf" {{ old('type_of_disability', $type_of_disability ?? '') === 'deaf' ? 'selected' : '' }}>
                                Deaf or Hard of Hearing
                            </option>
                            <option value="intellectual" {{ old('type_of_disability', $type_of_disability ?? '') === 'intellectual' ? 'selected' : '' }}>
                                Intellectual Disability
                            </option>
                            <option value="learning" {{ old('type_of_disability', $type_of_disability ?? '') === 'learning' ? 'selected' : '' }}>
                                Learning Disability
                            </option>
                            <option value="mental" {{ old('type_of_disability', $type_of_disability ?? '') === 'mental' ? 'selected' : '' }}>
                                Mental Disability
                            </option>
                            <option value="physical" {{ old('type_of_disability', $type_of_disability ?? '') === 'physical' ? 'selected' : '' }}>
                                Physical Disability(Orthopedic)
                            </option>
                            <option value="psychosocial" {{ old('type_of_disability', $type_of_disability ?? '') === 'psychosocial' ? 'selected' : '' }}>
                                Psychosocial Disability
                            </option>
                            <option value="speech" {{ old('type_of_disability', $type_of_disability ?? '') === 'speech' ? 'selected' : '' }}>
                                Speech and Language Impairment
                            </option>
                            <option value="visual" {{ old('type_of_disability', $type_of_disability ?? '') === 'visual' ? 'selected' : '' }}>
                                Visual Disability
                            </option>
                            <option value="cancer" {{ old('type_of_disability', $type_of_disability ?? '') === 'cancer' ? 'selected' : '' }}>
                                Cancer (RA11215)
                            </option>
                            <option value="rare_disease" {{ old('type_of_disability', $type_of_disability ?? '') === 'rare_disease' ? 'selected' : '' }}>
                                Rare Disease(RA10747)
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Cause of Disability:</label>
                        <div>
                            <label>
                                <input type="radio" name="cause_of_disability" value="congenital" {{ old('cause_of_disability', $cause_of_disability ?? '') === 'congenital' ? 'checked' : '' }} onclick="toggleFields()">
                                Congenital
                            </label>
                            <label style="margin-left: 20px;">
                                <input type="radio" name="cause_of_disability" value="acquired" {{ old('cause_of_disability', $cause_of_disability ?? '') === 'acquired' ? 'checked' : '' }} onclick="toggleFields()">
                                Acquired
                            </label>
                        </div>
                    </div>

                    <!-- Congenital Only Fields -->
                    <div class="form-group" id="congenitalFields" style="display: none;">
                        <label for="congenital_or_inborn">Congenital or Inborn:</label>
                        <select name="congenital_or_inborn" id="congenital_or_inborn" class="form-control"
                            onchange="toggleSpecifyCongenital()">
                            <option value="" disabled>Select Status</option>
                            <option value="autism" {{ old('congenital_or_inborn', $congenital_or_inborn ?? '') === 'autism' ? 'selected' : '' }}>
                                Autism</option>
                            <option value="adhd" {{ old('congenital_or_inborn', $congenital_or_inborn ?? '') === 'adhd' ? 'selected' : '' }}>
                                ADHD</option>
                            <option value="cerebral" {{ old('congenital_or_inborn', $congenital_or_inborn ?? '') === 'cerebral' ? 'selected' : '' }}>
                                Cerebral Palsy</option>
                            <option value="down_syndrome" {{ old('congenital_or_inborn', $congenital_or_inborn ?? '') === 'down_syndrome' ? 'selected' : '' }}>
                                Down Syndrome</option>
                            <option value="others" {{ old('congenital_or_inborn', $congenital_or_inborn ?? '') === 'others' ? 'selected' : '' }}>
                                Others (Specify)</option>
                        </select>
                    </div>

                    <div class="form-group" id="specifyCongenital" style="display: none;">
                        <label for="specify_cause_of_disability_congenital">Please specify:</label>
                        <input type="text" name="specify_cause_of_disability_congenital"
                            id="specify_cause_of_disability_congenital" class="form-control"
                            value="{{ old('specify_cause_of_disability_congenital', $specify_cause_of_disability_congenital ?? '') }}"
                            placeholder="Specify Cause of Disability (Congenital)">
                    </div>

                    <!-- Acquired Only Fields -->
                    <div class="form-group" id="acquiredFields" style="display: none;">
                        <label for="for_acquired">Acquired Conditions:</label>
                        <select name="for_acquired" id="for_acquired" class="form-control" onchange="toggleSpecifyAcquired()">
                            <option value="" disabled>Select Status</option>
                            <option value="chronic" {{ old('for_acquired', $for_acquired ?? '') === 'chronic' ? 'selected' : '' }}>
                                Chronic Illness</option>
                            <option value="injury" {{ old('for_acquired', $for_acquired ?? '') === 'injury' ? 'selected' : '' }}>
                                Injury</option>
                            <option value="others" {{ old('for_acquired', $for_acquired ?? '') === 'others' ? 'selected' : '' }}>
                                Others (Specify)</option>
                        </select>
                    </div>

                    <div class="form-group" id="specifyAcquired" style="display: none;">
                        <label for="specify_cause_of_disability_acquired">Please specify:</label>
                        <input type="text" name="specify_cause_of_disability_acquired" id="specify_cause_of_disability_acquired"
                            class="form-control"
                            value="{{ old('specify_cause_of_disability_acquired', $specify_cause_of_disability_acquired ?? '') }}"
                            placeholder="Specify Cause of Disability (Acquired)">
                    </div>



                    <div class="form-group">
                        <h5><strong>RESIDENCE ADDRESS</strong></h5>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>House No. and Street <span style="color: red;">*</span></label>
                            <input type="text" name="street" class="form-control" placeholder="House No. and Street"
                                value="{{ old('street', $street ?? '') }}" required>
                        </div>
                        @php
                            $barangays = [
                                "Alangilan",
                                "Anibongan",
                                "Bagacay",
                                "Bahay",
                                "Balinsasayao",
                                "Balocawe",
                                "Balocawehay",
                                "Barayong",
                                "Bayabas",
                                "Bito",
                                "Buaya",
                                "Buenavista",
                                "Bulak",
                                "Bunga",
                                "Buntay",
                                "Burubud-an",
                                "Cadac-an",
                                "Cagbolo",
                                "Can-aporong",
                                "Canmarating",
                                "Can-uguib",
                                "Capilian",
                                "Combis",
                                "Dingle",
                                "Guintagbucan",
                                "Hampipila",
                                "Katipunan",
                                "Kikilo",
                                "Laray",
                                "Lawa-an",
                                "Libertad",
                                "Loyonsawang",
                                "Mag-atubang",
                                "Mahagna",
                                "Mahayahay",
                                "Maitum",
                                "Malaguicay",
                                "Matagnao",
                                "Nalibunan",
                                "Nebga",
                                "New Taligue",
                                "Odiongan",
                                "Old Taligue",
                                "Pagsang-an",
                                "Paguite",
                                "Parasanon",
                                "Picas Sur",
                                "Pilar",
                                "Pinamanagan",
                                "Salvacion",
                                "San Francisco",
                                "San Isidro",
                                "San Roque",
                                "Santa Fe",
                                "Santa Lucia",
                                "Santo Niño",
                                "Tabigue",
                                "Tadoc",
                                "Tib-o",
                                "Tinalian",
                                "Tinocolan",
                                "Tuy-a",
                                "Victory"
                            ];
                        @endphp

                        <div class="form-group col-md-3">
                            <label>Barangay <span style="color: red;">*</span></label>
                            <select name="barangay" class="form-control" required>
                                <option value="" disabled {{ old('barangay', $barangay ?? '') == '' ? 'selected' : '' }}>
                                    Select Barangay
                                </option>
                                @foreach ($barangays as $barangay)
                                    <option value="{{ $barangay }}" {{ old('barangay', $barangay ?? '') == $barangay ? 'selected' : '' }}>
                                        {{ $barangay }}
                                    </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group col-md-2">
                            <label>Municipality <span style="color: red;">*</span></label>
                            <input type="text" name="municipality" class="form-control" placeholder="Municipality"
                                value="Abuyog" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Province <span style="color: red;">*</span></label>
                            <input type="text" name="province" class="form-control" placeholder="Province" value="Leyte"
                                required>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Region <span style="color: red;">*</span></label>
                            <input type="text" name="region" class="form-control" placeholder="Region" value="Region VIII"
                                required>
                        </div>
                    </div>




                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="educational_attainment">Educational Attainment <span
                                    style="color: red;">*</span></label>
                            <select name="educational_attainment" id="educational_attainment" class="form-control" required>
                                <option value="" disabled selected>Select Status</option>
                                <option value="none" {{ old('educational_attainment', $educational_attainment ?? '') === 'none' ? 'selected' : '' }}>
                                    None
                                </option>
                                <option value="kindergarten" {{ old('educational_attainment', $educational_attainment ?? '') === 'kindergarten' ? 'selected' : '' }}>
                                    Kindergarten
                                </option>
                                <option value="elementary" {{ old('educational_attainment', $educational_attainment ?? '') === 'elementary' ? 'selected' : '' }}>
                                    Elementary
                                </option>
                                <option value="junior_high" {{ old('educational_attainment', $educational_attainment ?? '') === 'junior_high' ? 'selected' : '' }}>
                                    Junior High School
                                </option>
                                <option value="senior_high" {{ old('educational_attainment', $educational_attainment ?? '') === 'senior_high' ? 'selected' : '' }}>
                                    Senior High School
                                </option>
                                <option value="college" {{ old('educational_attainment', $educational_attainment ?? '') === 'college' ? 'selected' : '' }}>
                                    College
                                </option>
                                <option value="vocational" {{ old('educational_attainment', $educational_attainment ?? '') === 'vocational' ? 'selected' : '' }}>
                                    Vocational
                                </option>
                                <option value="post_graduate" {{ old('educational_attainment', $educational_attainment ?? '') === 'post_graduate' ? 'selected' : '' }}>
                                    Post Graduate
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="occupation_pwd">Occupation:</label>
                            <select name="occupation_pwd" id="occupation_pwd" class="form-control">

                                <option value="" disabled selected>Select Types</option>
                                <option value="manager" {{ old('occupation_pwd', $occupation_pwd ?? '') === 'manager' ? 'selected' : '' }}>
                                    Managers
                                </option>
                                <option value="professional" {{ old('occupation_pwd', $occupation_pwd ?? '') === 'professional' ? 'selected' : '' }}>
                                    Professionals
                                </option>
                                <option value="technicians" {{ old('occupation_pwd', $occupation_pwd ?? '') === 'technicians' ? 'selected' : '' }}>
                                    Technicians and Associate Professionals
                                </option>
                                <option value="clerical" {{ old('occupation_pwd', $occupation_pwd ?? '') === 'clerical' ? 'selected' : '' }}>
                                    Clerical Support Workers
                                </option>
                                <option value="service_and_sales" {{ old('occupation_pwd', $occupation_pwd ?? '') === 'service_and_sales' ? 'selected' : '' }}>
                                    Service and Sales Workers
                                </option>
                                <option value="skilled_agri" {{ old('occupation_pwd', $occupation_pwd ?? '') === 'skilled_agri' ? 'selected' : '' }}>
                                    Skilled Agricultural, Forestry and Fishery Workers
                                </option>
                                <option value="craft" {{ old('occupation_pwd', $occupation_pwd ?? '') === 'craft' ? 'selected' : '' }}>
                                    Craft and Related Trade Workers
                                </option>
                                <option value="plant_and_machine" {{ old('occupation_pwd', $occupation_pwd ?? '') === 'plant_and_machine' ? 'selected' : '' }}>
                                    Plant and Machine Operators and Assemblers
                                </option>
                                <option value="elementary_occupation" {{ old('occupation_pwd', $occupation_pwd ?? '') === 'elementary_occupation' ? 'selected' : '' }}>
                                    Elementary Occupations
                                </option>
                                <option value="armed_forces" {{ old('occupation_pwd', $occupation_pwd ?? '') === 'armed_forces' ? 'selected' : '' }}>
                                    Armed Forces Occupations
                                </option>
                                <option value="others" {{ old('occupation_pwd', $occupation_pwd ?? '') === 'others' ? 'selected' : '' }}>
                                    Others (Specify)
                                </option>
                            </select>
                        </div>
                        <div class="form-group" id="specify_field_occupation" style="display: none;">
                            <label for="specify_occupation">Please specify:</label>
                            <input type="text" name="specify_occupation" id="specify_occupation" class="form-control"
                                value="{{ old('specify_occupation', $specify_occupation ?? '') }}" placeholder="Specify Others">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="status_of_employment">Status of Employment <span style="color: red;">*</span></label>
                            <select name="status_of_employment" id="status_of_employment" class="form-control" required>
                                <option value="" disabled selected>Select Status</option>
                                <option value="employed" {{ old('status_of_employment', $status_of_employment ?? '') === 'employed' ? 'selected' : '' }}>
                                    Employed
                                </option>
                                <option value="unemployed" {{ old('status_of_employment', $status_of_employment ?? '') === 'unemployed' ? 'selected' : '' }}>
                                    Unemployed
                                </option>
                                <option value="self_employed" {{ old('status_of_employment', $status_of_employment ?? '') === 'self_employed' ? 'selected' : '' }}>
                                    Self-Employed
                                </option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="category_of_employment">Category of Employment:</label>
                            <select name="category_of_employment" id="category_of_employment" class="form-control">
                                <option value="" disabled selected>Select Category</option>
                                <option value="government" {{ old('category_of_employment', $category_of_employment ?? '') === 'government' ? 'selected' : '' }}>
                                    Government
                                </option>
                                <option value="private" {{ old('category_of_employment', $category_of_employment ?? '') === 'private' ? 'selected' : '' }}>
                                    Private
                                </option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="types_of_employment">Types of Employment:</label>
                            <select name="types_of_employment" id="types_of_employment" class="form-control">
                                <option value="" disabled selected>Select Types</option>
                                <option value="permanent_or_regular" {{ old('types_of_employment', $types_of_employment ?? '') === 'permanent_or_regular' ? 'selected' : '' }}>
                                    Permanent or Regular
                                </option>
                                <option value="seasonal" {{ old('types_of_employment', $types_of_employment ?? '') === 'seasonal' ? 'selected' : '' }}>
                                    Seasonal
                                </option>
                                <option value="casual" {{ old('types_of_employment', $types_of_employment ?? '') === 'casual' ? 'selected' : '' }}>
                                    Casual
                                </option>
                                <option value="emergency" {{ old('types_of_employment', $types_of_employment ?? '') === 'emergency' ? 'selected' : '' }}>
                                    Emergency
                                </option>
                            </select>
                        </div>
                    </div>




                    <div class="form-group">
                        <h5><strong>ORGANIZATION INFORMATION</strong></h5>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Organization Affiliated:</label>
                            <input type="text" name="org_affiliate" class="form-control" placeholder="Organization Affiliated"
                                value="{{ old('org_affiliate', $org_affiliate ?? '') }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Contact Person:</label>
                            <input type="text" name="org_contact_person" class="form-control" placeholder="Contact Person"
                                value="{{ old('org_contact_person', $org_contact_person ?? '') }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Office Address:</label>
                            <input type="text" name="org_office" class="form-control" placeholder="Office Address"
                                value="{{ old('org_office', $org_office ?? '') }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Tel. Nos.:</label>
                            <input type="text" name="org_tel_no" class="form-control" placeholder="Tel. Nos."
                                value="{{ old('org_tel_no', $org_tel_no ?? '') }}">
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label>SSS NO.:</label>
                            <input type="text" name="sss_no" class="form-control" placeholder="SSS"
                                value="{{ old('sss_no', $sss_no ?? '') }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label>GSIS NO.:</label>
                            <input type="text" name="gsis_no" class="form-control" placeholder="GSIS"
                                value="{{ old('gsis_no', $gsis_no ?? '') }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label>PAG-IBIG NO.:</label>
                            <input type="text" name="pag_ibig_no" class="form-control" placeholder="PAG-IBIG"
                                value="{{ old('pag_ibig_no', $pag_ibig_no ?? '') }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label>PSN NO.:</label>
                            <input type="text" name="psn_no" class="form-control" placeholder="PSN"
                                value="{{ old('psn_no', $psn_no ?? '') }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label>PhilHealth NO.:</label>
                            <input type="text" name="philhealth_no" class="form-control" placeholder="PhilHealth"
                                value="{{ old('philhealth_no', $philhealth_no ?? '') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><strong>FAMILY BACKGROUND</strong></h5>
                    </div>


                    <div class="form-row">
                        <!-- Father Fields -->
                        <div class="form-group col-md-4">
                            <label>Father's Name:</label>
                            <input type="text" name="father_name" class="form-control" placeholder="Father's Complete Name"
                                value="{{ old('father_name', $father_name ?? '') }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Father's Occupation:</label>
                            <input type="text" name="father_occupation" class="form-control" placeholder="Father's Occupation"
                                value="{{ old('father_occupation', $father_occupation ?? '') }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Father's Contact No.:</label>
                            <input type="text" name="father_contact" class="form-control" placeholder="Father's Contact Number"
                                value="{{ old('father_contact', $father_contact ?? '') }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <!-- Mother Fields -->
                        <div class="form-group col-md-4">
                            <label>Mother's Name:</label>
                            <input type="text" name="mother_name" class="form-control" placeholder="Mother's Complete Name"
                                value="{{ old('mother_name', $mother_name ?? '') }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Mother's Occupation:</label>
                            <input type="text" name="mother_occupation" class="form-control" placeholder="Mother's Occupation"
                                value="{{ old('mother_occupation', $mother_occupation ?? '') }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Mother's Contact No.:</label>
                            <input type="text" name="mother_contact" class="form-control" placeholder="Mother's Contact Number"
                                value="{{ old('mother_contact', $mother_contact ?? '') }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <!-- Guardian Fields -->
                        <div class="form-group col-md-4">
                            <label>Guardian's Name:</label>
                            <input type="text" name="guardian_name" class="form-control" placeholder="Guardian's Complete Name"
                                value="{{ old('guardian_name', $guardian_name ?? '') }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Guardian's Occupation:</label>
                            <input type="text" name="guardian_occupation" class="form-control"
                                placeholder="Guardian's Occupation"
                                value="{{ old('guardian_occupation', $guardian_occupation ?? '') }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Guardian's Contact No.:</label>
                            <input type="text" name="guardian_contact" class="form-control"
                                placeholder="Guardian's Contact Number"
                                value="{{ old('guardian_contact', $guardian_contact ?? '') }}">
                        </div>
                    </div>





                    <div class="form-group">
                        <label for="role">Accomplished by:</label>
                        <select name="role" id="role" class="form-control" onchange="toggleRoleFields()">
                            <option value="" disabled selected>Select</option>
                            <option value="applicant" {{ old('role', $role ?? '') === 'applicant' ? 'selected' : '' }}>Applicant
                            </option>
                            <option value="guardian" {{ old('role', $role ?? '') === 'guardian' ? 'selected' : '' }}>Guardian
                            </option>
                            <option value="representative" {{ old('role', $role ?? '') === 'representative' ? 'selected' : '' }}>
                                Representative</option>
                        </select>
                    </div>

                    <!-- Applicant Fields -->
                    <div id="applicant_fields" style="display: none;">
                        <div class="form-group">
                            <label for="applicant_lastname">Applicant Last Name:</label>
                            <input type="text" name="applicant_lastname" id="applicant_lastname" class="form-control"
                                value="{{ old('applicant_lastname', $applicant_lastname ?? '') }}">
                        </div>
                        <div class="form-group">
                            <label for="applicant_firstname">Applicant First Name:</label>
                            <input type="text" name="applicant_firstname" id="applicant_firstname" class="form-control"
                                value="{{ old('applicant_firstname', $applicant_firstname ?? '') }}">
                        </div>
                        <div class="form-group">
                            <label for="applicant_middlename">Applicant Middle Name:</label>
                            <input type="text" name="applicant_middlename" id="applicant_middlename" class="form-control"
                                value="{{ old('applicant_middlename', $applicant_middlename ?? '') }}">
                        </div>
                    </div>

                    <!-- Guardian Fields -->
                    <div id="guardian_fields" style="display: none;">
                        <div class="form-group">
                            <label for="guardian_lastname">Guardian Last Name:</label>
                            <input type="text" name="guardian_lastname" id="guardian_lastname" class="form-control"
                                value="{{ old('guardian_lastname', $guardian_lastname ?? '') }}">
                        </div>
                        <div class="form-group">
                            <label for="guardian_firstname">Guardian First Name:</label>
                            <input type="text" name="guardian_firstname" id="guardian_firstname" class="form-control"
                                value="{{ old('guardian_firstname', $guardian_firstname ?? '') }}">
                        </div>
                        <div class="form-group">
                            <label for="guardian_middlename">Guardian Middle Name:</label>
                            <input type="text" name="guardian_middlename" id="guardian_middlename" class="form-control"
                                value="{{ old('guardian_middlename', $guardian_middlename ?? '') }}">
                        </div>
                    </div>

                    <!-- Representative Fields -->
                    <div id="representative_fields" style="display: none;">
                        <div class="form-group">
                            <label for="representative_lastname">Representative Last Name:</label>
                            <input type="text" name="representative_lastname" id="representative_lastname" class="form-control"
                                value="{{ old('representative_lastname', $representative_lastname ?? '') }}">
                        </div>
                        <div class="form-group">
                            <label for="representative_firstname">Representative First Name:</label>
                            <input type="text" name="representative_firstname" id="representative_firstname"
                                class="form-control"
                                value="{{ old('representative_firstname', $representative_firstname ?? '') }}">
                        </div>
                        <div class="form-group">
                            <label for="representative_middlename">Representative Middle Name:</label>
                            <input type="text" name="representative_middlename" id="representative_middlename"
                                class="form-control"
                                value="{{ old('representative_middlename', $representative_middlename ?? '') }}">
                        </div>
                    </div>


                    <div class="d-flex flex-column align-items-end mt-3">
                        <div class="form-check mb-2">
                            <input type="checkbox" name="save_for_next_application" class="form-check-input"
                                id="save_for_next_application">
                            <label class="form-check-label" for="save_for_next_application">
                                Save my information for the next application
                            </label>
                        </div>
                        <button type="submit" id="submit-button" class="btn btn-blue btn-icon">
                            <i class="fas fa-save"></i> <span>Submit</span>
                        </button>
                    </div>
                </form>
                <!-- Add this to your form -->
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const birthdateInput = document.getElementById('birthdate');
                        const ageInput = document.getElementById('age');

                        birthdateInput.addEventListener('change', function () {
                            const birthdate = new Date(birthdateInput.value);
                            const today = new Date();

                            // Calculate age
                            let age = today.getFullYear() - birthdate.getFullYear();
                            const monthDiff = today.getMonth() - birthdate.getMonth();

                            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthdate.getDate())) {
                                age--;
                            }

                            // Update the age input
                            ageInput.value = age;

                            // Validate age
                            if (age < 0 || age > 59) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Invalid Age',
                                    text: 'The age must be between 0 and 59 for PWD.',
                                });
                                birthdateInput.value = ''; // Clear invalid input
                                ageInput.value = ''; // Clear calculated age
                            }
                        });
                    });
                </script>

        @endif















        <!-- Form for service with ID = 1 OSCA -->
        @if ($service->id == 1)
            <form action="{{ url('submit-application') }}" method="POST" class="form-container">
                @csrf
                <input type="hidden" name="service_id" value="{{ $service->id }}">

                <p style="color: red; font-weight: normal;">
                    Please fill up completely and correctly the required information before each item below. For items
                    that are not associated to you, leave it blank.
                    <span style="font-weight: bold;">Required items are also marked with an asterisk (*)</span> so
                    please fill it up correctly.
                </p>

                <!-- User Information Section -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Last Name (Apelyido) <span style="color: red;">*</span></label>
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name"
                            value="{{ Auth::user()->last_name }}" readonly style="text-transform: uppercase;">
                    </div>
                    <div class="form-group col-md-4">
                        <label>First Name (Pangalan) <span style="color: red;">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="First Name"
                            value="{{ Auth::user()->first_name }}" readonly style="text-transform: uppercase;">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Middle Name (Gitnang Pangalan) </label>
                        <input type="text" name="middle_name" class="form-control" placeholder="Middle Name"
                            value="{{ Auth::user()->middle_name }}" readonly style="text-transform: uppercase;">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Birthdate <span style="color: red;">*</span> - Indicate your birthdate correctly</label>
                        <input type="date" name="birthdate" class="form-control" id="birthdate"
                            value="{{ old('birthdate', $birthdate ?? '') }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Age <span style="color: red;">*</span></label>
                        <input type="text" name="age" class="form-control" id="age" placeholder="Age" readonly
                            value="{{ old('age', $age ?? '') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Sex <span style="color: red;">*</span></label>
                        <select name="sex" class="form-control" required>
                            <option value="" disabled selected>SELECT GENDER </option>
                            <option value="Female" {{ (old('sex', $sex ?? '') == 'Female') ? 'selected' : '' }}>
                                FEMALE</option>
                            <option value="Male" {{ (old('sex', $sex ?? '') == 'Male') ? 'selected' : '' }}>MALE
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Place of birth:</label>
                        <input type="text" name="birthplace" class="form-control" placeholder="Place of Birth"
                            value="{{ old('birthplace', $birthplace ?? '') }}" style="text-transform: uppercase;">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Civil Status <span style="color: red;">*</span></label>
                        <select name="status" class="form-control" required>
                            <option value="" disabled selected>SELECT STATUS</option>
                            <option value="Single" {{ (old('status', $status ?? '') == 'Single') ? 'selected' : '' }}>SINGLE
                            </option>
                            <option value="Married" {{ (old('status', $status ?? '') == 'Married') ? 'selected' : '' }}>
                                MARRIED</option>
                            <option value="Widow/Widower" {{ (old('status', $status ?? '') == 'Widow/Widower') ? 'selected' : '' }}>WIDOW/WIDOWER</option>
                            <option value="Separated" {{ (old('status', $status ?? '') == 'Separated') ? 'selected' : '' }}>
                                SEPARATED</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    Complete Address <span style="color: red;">*</span>
                    <input type="text" name="address" class="form-control" placeholder="Complete Address"
                        value="{{ old('address', $address ?? '') }}" required style="text-transform: uppercase;">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Educational Attainment <span style="color: red;">*</span>:</label>
                        <select name="educational_attainment" class="form-control" required>
                            <option value="" disabled selected>SELECT</option>
                            <option value="Not Attended School" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Not Attended School') ? 'selected' : '' }}>Not
                                Attended School</option>
                            <option value="Elementary Level" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Elementary Level') ? 'selected' : '' }}>
                                Elementary Level</option>
                            <option value="Elementary Graduate" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Elementary Graduate') ? 'selected' : '' }}>
                                Elementary Graduate</option>
                            <option value="Highschool Level" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Highschool Level') ? 'selected' : '' }}>
                                Highschool Level</option>
                            <option value="Highschool Graduate" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Highschool Graduate') ? 'selected' : '' }}>
                                Highschool Graduate</option>
                            <option value="Vocational" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Vocational') ? 'selected' : '' }}>
                                Vocational</option>
                            <option value="College Level" {{ (old('educational_attainment', $educational_attainment ?? '') == 'College Level') ? 'selected' : '' }}>
                                College Level</option>
                            <option value="College Graduate" {{ (old('educational_attainment', $educational_attainment ?? '') == 'College Graduate') ? 'selected' : '' }}>College
                                Graduate</option>
                            <option value="Post Graduate" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Post Graduate') ? 'selected' : '' }}>Post
                                Graduate</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Occupation:</label>
                        <input type="text" name="occupation" class="form-control" placeholder="Occupation"
                            value="{{ old('occupation', $occupation ?? '') }}" style="text-transform: uppercase;">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Annual Income:</label>
                        <input type="text" name="annual_income" class="form-control" placeholder="Annual Income"
                            value="{{ old('annual_income', $annual_income ?? '') }}">
                    </div>
                </div>

                <div class="form-group">Other Skills:
                    <input type="text" name="other_skills" class="form-control" placeholder="Other Skills"
                        value="{{ old('other_skills', $other_skills ?? '') }}" style="text-transform: uppercase;">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Phone <span style="color: red;">*</span></label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone"
                            value="{{ old('phone', $phone ?? Auth::user()->phone) }}" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control" placeholder="Email"
                            value="{{ old('email', $email ?? Auth::user()->email) }}" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Date for Personal Appearance <span style="color: red;">*</span></label>
                        <input type="date" name="date_applied" id="date_applied" class="form-control" required>
                    </div>
                </div>



                <div class="form-group">
                    <label style="font-weight:bold;">FAMILY COMPOSITION</label>
                    <div id="family-compo-container">
                        <!-- Dynamic family member inputs will be added here -->
                    </div>
                    <div class="d-flex justify-content-end mt-2">
                        <button type="button" id="add-family-compo" class="btn btn-outline-primary btn-icon me-2">
                            <i class="fas fa-plus"></i> <span>Add Family Member</span>
                        </button>
                        <button type="button" id="remove-family-compo" class="btn btn-outline-danger btn-icon">
                            <i class="fas fa-trash"></i> <span>Remove</span>
                        </button>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const familyInfoContainer = document.getElementById('family-compo-container');
                        const addFamilyMemberBtn = document.getElementById('add-family-compo');
                        const removeFamilyMemberBtn = document.getElementById('remove-family-compo');
                        let memberCount = 0;

                        // Family members data from the server
                        const savedFamilyMembers = @json($familyMembers);

                        // Function to add a new family member form
                        function addFamilyCompo(member = {}) {
                            if (memberCount >= 10) {
                                Swal.fire({
                                    icon: 'warning', // Icon for the alert (e.g., 'success', 'error', 'warning', 'info', 'question')
                                    title: 'Limit Reached',
                                    text: 'Maximum of 10 family members only.', // The message
                                    confirmButtonText: 'OK', // Text for the confirm button
                                });
                                return;
                            }

                            memberCount++;

                            const familyMemberDiv = document.createElement('div');
                            familyMemberDiv.className = 'family-member mb-3';
                            familyMemberDiv.innerHTML = `
                                                                                                            <h5>Family Member ${memberCount}</h5>
                                                                                                            <div class="form-row">
                                                                                                                <div class="form-group col-md-4">
                                                                                                                    <label for="person_name_${memberCount}">Name:</label>
                                                                                                                    <input type="text" name="person_name_${memberCount}" id="person_name_${memberCount}" class="form-control" value="${member.name || ''}" required style="text-transform: uppercase;">
                                                                                                                </div>
                                                                                                                <div class="form-group col-md-4">
                                                                                                                    <label for="relation_${memberCount}">Relation to Client:</label>
                                                                                                                    <input type="text" name="relation_${memberCount}" id="relation_${memberCount}" class="form-control" value="${member.relation || ''}" required style="text-transform: uppercase;">
                                                                                                                </div>
                                                                                                                <div class="form-group col-md-4">
                                                                                                                    <label for="age_${memberCount}">Age:</label>
                                                                                                                    <input type="number" name="age_${memberCount}" id="age_${memberCount}" class="form-control" value="${member.age || ''}" required style="text-transform: uppercase;">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-row">
                                                                                                                <div class="form-group col-md-4">
                                                                                                                    <label for="civil_${memberCount}">Civil Status:</label>
                                                                                                                    <input type="text" name="civil_${memberCount}" id="civil_${memberCount}" class="form-control" value="${member.civil_status || ''}" required style="text-transform: uppercase;">
                                                                                                                </div>
                                                                                                                <div class="form-group col-md-4">
                                                                                                                    <label for="occupation_${memberCount}">Occupation:</label>
                                                                                                                    <input type="text" name="occupation_${memberCount}" id="occupation_${memberCount}" class="form-control" value="${member.occupation || ''}" style="text-transform: uppercase;">
                                                                                                                </div>
                                                                                                                <div class="form-group col-md-4">
                                                                                                                    <label for="income_${memberCount}">Income:</label>
                                                                                                                    <input type="text" name="income_${memberCount}" id="income_${memberCount}" class="form-control" value="${member.income || ''}" >
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <hr>
                                                                                                        `;

                            // Add the new family member to the container
                            familyInfoContainer.appendChild(familyMemberDiv);
                        }

                        // Function to remove the last family member
                        function removeLastFamilyCompo() {
                            if (memberCount > 0) {
                                const lastMember = familyInfoContainer.lastElementChild;
                                familyInfoContainer.removeChild(lastMember);
                                memberCount--;
                            }
                        }

                        // Load saved family members
                        if (savedFamilyMembers && savedFamilyMembers.length > 0) {
                            savedFamilyMembers.forEach(member => addFamilyCompo(member));
                        } else {
                            // Add an empty form for the first family member if no data is found
                            addFamilyCompo();
                        }

                        // Add event listeners to the buttons
                        addFamilyMemberBtn.addEventListener('click', addFamilyCompo);
                        removeFamilyMemberBtn.addEventListener('click', removeLastFamilyCompo);
                    });
                </script>





                <div class="d-flex flex-column align-items-end mt-3">
                    <div class="form-check mb-2">
                        <input type="checkbox" name="save_for_next_application" class="form-check-input"
                            id="save_for_next_application">
                        <label class="form-check-label" for="save_for_next_application">
                            Save my information for the next application
                        </label>
                    </div>
                    <button type="submit" id="submit-button" class="btn btn-blue btn-icon">
                        <i class="fas fa-save"></i> <span>Submit</span>
                    </button>
                </div>

            </form>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const birthdateInput = document.getElementById('birthdate');
                    const ageInput = document.getElementById('age');
                    const submitButton = document.getElementById('submit-button');

                    function calculateAge(birthdate) {
                        const today = new Date();
                        const birthDate = new Date(birthdate);
                        let age = today.getFullYear() - birthDate.getFullYear();
                        const monthDiff = today.getMonth() - birthDate.getMonth();
                        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                            age--;
                        }
                        return age;
                    }

                    birthdateInput.addEventListener('change', function () {
                        const birthdate = birthdateInput.value;
                        if (birthdate) {
                            const age = calculateAge(birthdate);
                            ageInput.value = age;

                            if (age < 60) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Invalid Age',
                                    text: 'Applicants must be 60 years old or older to apply for OSCA.',
                                    confirmButtonText: 'OK'
                                });
                                // Clear the birthdate and age fields
                                birthdateInput.value = '';
                                ageInput.value = '';
                            }
                        }
                    });

                    submitButton.addEventListener('click', function (e) {
                        const age = parseInt(ageInput.value, 10);
                        if (age < 60 || isNaN(age)) {
                            e.preventDefault(); // Prevent form submission
                            Swal.fire({
                                icon: 'error',
                                title: 'Invalid Submission',
                                text: 'Please ensure the applicant is 60 years old or older.',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                });
            </script>

        @endif













        <!-- Form for service with ID = 3 SOLO PARENT-->
        @if ($service->id == 3)
            <form action="{{ url('submit-application') }}" method="POST" class="form-container">
                @csrf
                <input type="hidden" name="service_id" value="{{ $service->id }}">

                <p style="color: red; font-weight: normal; margin-left:1%; margin-right: 5%">
                    Please fill up completely and correctly the required information before each item below. For items that
                    are not associated to you, leave it blank.
                    <span style="font-weight: bold;">Required items are also marked with an asterisk (*)</span> so please
                    fill it up correctly.
                </p>

                <div class="form-group"> Full Name:
                    <input type="text" name="name" class="form-control" placeholder="Full Name"
                        value="{{ Auth::user()->first_name }} {{ Auth::user()->middle_name }} {{ Auth::user()->last_name }} {{ Auth::user()->suffix }}"
                        readonly>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Phone <span style="color: red;">*</span></label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone"
                            value="{{ Auth::user()->phone }}" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control" placeholder="Email"
                            value="{{ Auth::user()->email }}" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Date for Personal Appearance <span style="color: red;">*</span></label>
                        <input type="date" name="date_applied" id="date_applied" class="form-control" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Birthdate <span style="color: red;">*</span> - Indicate your birthdate correctly</label>
                        <input type="date" name="birthdate" class="form-control" id="birthdate"
                            value="{{ old('birthdate', $birthdate ?? '') }}" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Age <span style="color: red;">*</span></label>
                        <input type="text" name="age" class="form-control" id="age" placeholder="Age"
                            value="{{ old('age', $age ?? '') }}" readonly>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Gender <span style="color: red;">*</span></label>
                        <select name="sex" class="form-control" required>
                            <option value="" disabled selected>Select Gender</option>
                            <option value="Female" {{ (old('sex', $sex ?? '') == 'Female') ? 'selected' : '' }}>Female
                            </option>
                            <option value="Male" {{ (old('sex', $sex ?? '') == 'Male') ? 'selected' : '' }}>Male</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Place of Birth: <span style="color: red;">*</span></label>
                        <input type="text" name="birthplace" class="form-control" placeholder="Place of Birth"
                            value="{{ old('birthplace', $birthplace ?? '') }}">
                    </div>
                </div>
                <div class="form-group"> Complete Address: <span style="color: red;">*</span>
                    <input type=" text" name="address" class="form-control" value="{{ old('address', $address ?? '') }} "
                        required style="text-transform: uppercase;">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Educational Attainment <span style="color: red;">*</span></label>
                        <select name="educational_attainment" class="form-control" required>
                            <option value="" disabled selected>Select</option>
                            <option value="Not Attended School" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Not Attended School') ? 'selected' : '' }}>Not Attended School</option>
                            <option value="Elementary Level" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Elementary Level') ? 'selected' : '' }}>Elementary Level</option>
                            <option value="Elementary Graduate" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Elementary Graduate') ? 'selected' : '' }}>Elementary Graduate</option>
                            <option value="Highschool Level" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Highschool Level') ? 'selected' : '' }}>Highschool Level</option>
                            <option value="Highschool Graduate" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Highschool Graduate') ? 'selected' : '' }}>Highschool Graduate</option>
                            <option value="Vocational" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Vocational') ? 'selected' : '' }}>Vocational</option>
                            <option value="College Level" {{ (old('educational_attainment', $educational_attainment ?? '') == 'College Level') ? 'selected' : '' }}>College Level</option>
                            <option value="College Graduate" {{ (old('educational_attainment', $educational_attainment ?? '') == 'College Graduate') ? 'selected' : '' }}>College Graduate</option>
                            <option value="Post Graduate" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Post Graduate') ? 'selected' : '' }}>Post Graduate</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Occupation:</label>
                        <input type="text" name="occupation" class="form-control" placeholder="Occupation"
                            value="{{ old('occupation', $occupation ?? '') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="status">Civil Status:</label>
                        <input type="text" name="status" class="form-control" placeholder="Civil Status"
                            value="{{ old('status', $status ?? '') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="religion">Religion:</label>
                        <input type="text" name="religion" class="form-control" placeholder="Religion"
                            value="{{ old('religion', $religion ?? '') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="company_or_agency">Company/Agency:</label>
                        <input type="text" name="company_or_agency" class="form-control" placeholder="Company or Agency"
                            value="{{ old('company_or_agency', $company_or_agency ?? '') }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="monthly_income">Monthly Income:</label>
                        <input type="text" name="monthly_income" class="form-control" placeholder="Monthly Income"
                            value="{{ old('monthly_income', $monthly_income ?? '') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="fourps_beneficiary">Are you a 4Ps Beneficiary? <span
                                style="color: red;">*</span></label>
                        <select name="fourps_beneficiary" class="form-control" required>
                            <option value="" disabled selected>Select</option>
                            <option value="Yes" {{ (old('fourps_beneficiary', $fourps_beneficiary ?? '') == 'Yes') ? 'selected' : '' }}>Yes</option>
                            <option value="No" {{ (old('fourps_beneficiary', $fourps_beneficiary ?? '') == 'No') ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="indigenous_person">Are you an Indigenous Person? <span
                                style="color: red;">*</span></label>
                        <select name="indigenous_person" class="form-control" required>
                            <option value="" disabled selected>Select</option>
                            <option value="Yes" {{ (old('indigenous_person', $indigenous_person ?? '') == 'Yes') ? 'selected' : '' }}>Yes</option>
                            <option value="No" {{ (old('indigenous_person', $indigenous_person ?? '') == 'No') ? 'selected' : '' }}>No</option>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label style="font-weight:bold;">FAMILY COMPOSITION</label>
                    <div id="family-compo-container">
                        <!-- Dynamic family member inputs will be added here -->
                    </div>
                    <div class="d-flex justify-content-end mt-2">
                        <button type="button" id="add-family-compo" class="btn btn-outline-primary btn-icon me-2">
                            <i class="fas fa-plus"></i> <span>Add Family Member</span>
                        </button>
                        <button type="button" id="remove-family-compo" class="btn btn-outline-danger btn-icon">
                            <i class="fas fa-trash"></i> <span>Remove</span>
                        </button>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const familyInfoContainer = document.getElementById('family-compo-container');
                        const addFamilyMemberBtn = document.getElementById('add-family-compo');
                        const removeFamilyMemberBtn = document.getElementById('remove-family-compo');
                        let memberCount = 0;

                        // Family members data from the server
                        const savedFamilyMembers = @json($familyMembers);

                        function addFamilyCompo(member = {}) {
                            if (memberCount >= 6) {
                                Swal.fire({
                                    icon: 'warning', // Icon for the alert (e.g., 'success', 'error', 'warning', 'info', 'question')
                                    title: 'Limit Reached',
                                    text: 'Maximum of 6 family members only.', // The message
                                    confirmButtonText: 'OK', // Text for the confirm button
                                });
                                return;
                            }

                            memberCount++;

                            const familyMemberDiv = document.createElement('div');
                            familyMemberDiv.className = 'family-member mb-3';
                            familyMemberDiv.innerHTML = `

                                                                                                                                        <h5>Family Member ${memberCount}</h5>
                                                                                                                                        <div class="form-row">
                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="person_name_${memberCount}">Name:</label>
                                                                                                                                                <input type="text" name="person_name_${memberCount}" id="person_name_${memberCount}" class="form-control" value="${member.name || ''}" required>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="relation_${memberCount}">Relation to Client:</label>
                                                                                                                                                <input type="text" name="relation_${memberCount}" id="relation_${memberCount}" class="form-control" value="${member.relation || ''}" required>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="age_${memberCount}">Age:</label>
                                                                                                                                                <input type="number" name="age_${memberCount}" id="age_${memberCount}" class="form-control" value="${member.age || ''}" required>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="form-row">
                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                 <label for="birthday_${memberCount}">Birthday: <span style="color: red;">*</span></label>
                                                                                                                                                <input type="date" name="birthday_${memberCount}" id="birthday_${memberCount}" class="form-control" value="${member.birthday || ''}" required>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="civil_${memberCount}">Civil Status:</label>
                                                                                                                                                <input type="text" name="civil_${memberCount}" id="civil_${memberCount}" class="form-control" value="${member.civil_status || ''}" required>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="education_${memberCount}">Educational Attainment: <span style="color: red;">*</span></label>
                                                                                                                                                    <input type="text" name="education_${memberCount}" id="education_${memberCount}" class="form-control" value="${member.education || ''}"required>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="form-row"> 
                                                                                                                                            <div class="form-group col-md-6">
                                                                                                                                                <label for="occupation_${memberCount}">Occupation:</label>
                                                                                                                                                <input type="text" name="occupation_${memberCount}" id="occupation_${memberCount}" class="form-control" value="${member.occupation || ''}">
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group col-md-6">
                                                                                                                                                <label for="monthly_${memberCount}">Monthly:</label>
                                                                                                                                                <input type="text" name="monthly_${memberCount}" id="monthly_${memberCount}" class="form-control" value="${member.monthly || ''}">
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <hr>
                                                                                                                                    `;

                            // Add the new family member to the container
                            familyInfoContainer.appendChild(familyMemberDiv);
                        }

                        // Function to remove the last family member
                        function removeLastFamilyCompo() {
                            if (memberCount > 0) {
                                const lastMember = familyInfoContainer.lastElementChild;
                                familyInfoContainer.removeChild(lastMember);
                                memberCount--;
                            }
                        }

                        // Load saved family members
                        if (savedFamilyMembers && savedFamilyMembers.length > 0) {
                            savedFamilyMembers.forEach(member => addFamilyCompo(member));
                        } else {
                            // Add an empty form for the first family member if no data is found
                            addFamilyCompo();
                        }

                        // Add event listeners to the buttons
                        addFamilyMemberBtn.addEventListener('click', addFamilyCompo);
                        removeFamilyMemberBtn.addEventListener('click', removeLastFamilyCompo);
                    });
                </script>



                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="classification_of_SP">Classification or Circumstances of being a Solo Parent:</label>
                        <input type="text" name="classification_of_SP" class="form-control"
                            placeholder="Classification/Circumstances of SOLO PARENT"
                            value="{{ old('classification_of_SP', $classification_of_SP ?? '') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="needs_or_problems">Needs or Problems of being a Solo Parent:</label>
                        <input type="text" name="needs_or_problems" class="form-control"
                            placeholder="Needs/Problems of SOLO PARENT"
                            value="{{ old('needs_or_problems', $needs_or_problems ?? '') }}">
                    </div>
                </div>

                <div class="form-group">
                    <h5><strong>IN CASE OF EMERGENCY</strong></h5>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="emergency_contact_name">Name:</label>
                        <input type="text" name="emergency_contact_name" class="form-control"
                            placeholder="Emergency Contact Name"
                            value="{{ old('emergency_contact_name', $emergency_contact_name ?? '') }}">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="emergency_contact_address">Address:</label>
                        <input type="text" name="emergency_contact_address" class="form-control"
                            placeholder="Emergency Contact Address"
                            value="{{ old('emergency_contact_address', $emergency_contact_address ?? '') }}">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="emergency_contact_relationship">Relationship:</label>
                        <input type="text" name="emergency_contact_relationship" class="form-control"
                            placeholder="Emergency Contact Relationship"
                            value="{{ old('emergency_contact_relationship', $emergency_contact_relationship ?? '') }}">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="emergency_contact_number">Contact Number:</label>
                        <input type="text" name="emergency_contact_number" class="form-control"
                            placeholder="Emergency Contact Number"
                            value="{{ old('emergency_contact_number', $emergency_contact_number ?? '') }}">
                    </div>
                </div>

                <div class="d-flex flex-column align-items-end mt-3">
                    <div class="form-check mb-2">
                        <input type="checkbox" name="save_for_next_application" class="form-check-input"
                            id="save_for_next_application">
                        <label class="form-check-label" for="save_for_next_application">
                            Save my information for the next application
                        </label>
                    </div>
                    <button type="submit" id="submit-button" class="btn btn-blue btn-icon">
                        <i class="fas fa-save"></i> <span>Submit</span>
                    </button>
                </div>
            </form>
        @endif
    </div>






    <!-- Form for service with ID = 4 AICS-->
    @if ($service->id == 4)
        <form action="{{ url('submit-application') }}" method="POST" style="margin-left: 8%; margin-right:8%;"
            class="form-container">
            @csrf
            <input type="hidden" name="service_id" value="{{ $service->id }}">

            <p style="color: red; font-weight: normal;">
                Please fill up completely and correctly the required information before each item below. For items that
                are not associated to you, leave it blank.
                <span style="font-weight: bold;">Required items are also marked with an asterisk (*)</span> so please
                fill it up correctly.
            </p>

            <div class="form-group" style="font-weight: normal; "> Full Name (First
                Name,
                Middle Name, Last Name, Suffix)<span style="color: red;">*</span>
                <input type="text" name="name" class="form-control" placeholder="Full Name"
                    value="{{ Auth::user()->first_name }} {{ Auth::user()->middle_name }} {{ Auth::user()->last_name }} {{ Auth::user()->suffix }}"
                    readonly>
            </div>
            <div class="form-row" style="font-weight: normal;">
                <div class="form-group col-md-4">
                    <label for="email">Email: <span class="text-danger">*</span></label>
                    <input type="text" name="email" class="form-control" placeholder="Email"
                        value="{{ Auth::user()->email }}" readonly>
                </div>

                <div class="form-group col-md-4">
                    <label for="phone">Phone: <span class="text-danger">*</span></label>
                    <input type="text" name="phone" class="form-control" placeholder="Phone"
                        value="{{ Auth::user()->phone }}" readonly>
                </div>

                <div class="form-group col-md-4">
                    <label for="date_applied">Date for Personal Appearance: <span class="text-danger">*</span></label>
                    <input type="date" id="date_applied" name="date_applied" class="form-control" required>
                </div>
            </div>

            <!--<div class="form-group">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <label for="date_applied">Date for Personal Appearance:</label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <input type="date" id="date_applied" name="date_applied" class="form-control"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    min="?php echo date('Y-m-d', strtotime('+1 day')); ?>">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>-->



            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Birthdate <span style="color: red;">*</span> - Indicate your birthdate correctly</label>
                    <input type="date" name="birthdate" class="form-control" id="birthdate"
                        value="{{ old('birthdate', $birthdate ?? '') }}" required>
                </div>
                <div class="form-group col-md-1">
                    <label>Age <span style="color: red;">*</span></label>
                    <input type="text" name="age" class="form-control" id="age" placeholder="Age" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label>Place of Birth: <span style="color: red;">*</span></label>
                    <input type="text" name="birthplace" class="form-control" placeholder="Place of Birth"
                        value="{{ old('birthplace', $birthplace ?? '') }}">
                </div>
                <div class="form-group col-md-4">
                    <label>Types of Assistance <span style="color: red;">*</span></label>
                    <select name="aics_type" class="form-control" required>
                        <option value="" disabled selected>Select</option>
                        <option value="Medical Assistance" {{ (old('aics_type', $customFields['aics_type'] ?? '') == 'Medical Assistance') ? 'selected' : '' }}>Medical Assistance</option>
                        <option value="Burial Assistance" {{ (old('aics_type', $customFields['aics_type'] ?? '') == 'Burial Assistance') ? 'selected' : '' }}>Burial Assistance</option>
                        <option value="Transportation Assistance" {{ (old('aics_type', $customFields['aics_type'] ?? '') == 'Transportation Assistance') ? 'selected' : '' }}>Transportation Assistance</option>
                        <option value="Food Assistance" {{ (old('aics_type', $customFields['aics_type'] ?? '') == 'Food Assistance') ? 'selected' : '' }}>Food Assistance</option>
                        <option value="Emergency Shelter Assistance" {{ (old('aics_type', $customFields['aics_type'] ?? '') == 'Emergency Shelter Assistance') ? 'selected' : '' }}>Emergency Shelter Assistance</option>
                        <option value="Educational Assistance" {{ (old('aics_type', $customFields['aics_type'] ?? '') == 'Educational Assistance') ? 'selected' : '' }}>Educational Assistance</option>
                    </select>
                </div>
            </div>
            <div class="form-group"> Complete Address:
                <input type="text" name="address" class="form-control" value="{{ old('address', $address ?? '') }}">
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Educational Attainment <span style="color: red;">*</span></label>
                    <select name="educational_attainment" class="form-control" required>
                        <option value="" disabled selected>Select</option>
                        <option value="Not Attended School" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Not Attended School') ? 'selected' : '' }}>Not Attended School</option>
                        <option value="Elementary Level" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Elementary Level') ? 'selected' : '' }}>Elementary Level</option>
                        <option value="Elementary Graduate" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Elementary Graduate') ? 'selected' : '' }}>Elementary Graduate</option>
                        <option value="Highschool Level" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Highschool Level') ? 'selected' : '' }}>Highschool Level</option>
                        <option value="Highschool Graduate" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Highschool Graduate') ? 'selected' : '' }}>Highschool Graduate</option>
                        <option value="Vocational" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Vocational') ? 'selected' : '' }}>Vocational</option>
                        <option value="College Level" {{ (old('educational_attainment', $educational_attainment ?? '') == 'College Level') ? 'selected' : '' }}>College Level</option>
                        <option value="College Graduate" {{ (old('educational_attainment', $educational_attainment ?? '') == 'College Graduate') ? 'selected' : '' }}>College Graduate</option>
                        <option value="Post Graduate" {{ (old('educational_attainment', $educational_attainment ?? '') == 'Post Graduate') ? 'selected' : '' }}>Post Graduate</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Occupation:</label>
                    <input type="text" name="occupation" class="form-control" placeholder="Occupation"
                        value="{{ old('occupation', $occupation ?? '') }}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="status">Civil Status: <span class="text-danger">*</span></label>
                    <input type="text" name="status" class="form-control" value="{{ old('status', $status ?? '') }}"
                        required>
                </div>

                <div class="form-group col-md-4">
                    <label for="referral_source">Referral Source:</label>
                    <input type="text" name="referral_source" class="form-control" placeholder="Referral Source"
                        value="{{ old('referral_source', $referral_source ?? '') }}">
                </div>

                <div class="form-group col-md-4">
                    <label for="religion">Religion:</label>
                    <input type="text" name="religion" class="form-control" placeholder="Religion"
                        value="{{ old('religion', $religion ?? '') }}">
                </div>
            </div>



            <div class="form-group">
                <label style="font-weight:bold;">FAMILY COMPOSITION</label>
                <div id="family-compo-container">
                    <!-- Dynamic family member inputs will be added here -->
                </div>
                <div class="d-flex justify-content-end mt-2">
                    <button type="button" id="add-family-compo" class="btn btn-outline-primary btn-icon me-2">
                        <i class="fas fa-plus"></i> <span>Add Family Member</span>
                    </button>
                    <button type="button" id="remove-family-compo" class="btn btn-outline-danger btn-icon">
                        <i class="fas fa-trash"></i> <span>Remove</span>
                    </button>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const familyInfoContainer = document.getElementById('family-compo-container');
                    const addFamilyMemberBtn = document.getElementById('add-family-compo');
                    const removeFamilyMemberBtn = document.getElementById('remove-family-compo');
                    let memberCount = 0;

                    // Family members data from the server
                    const savedFamilyMembers = @json($familyMembers);

                    // Function to add a new family member form
                    function addFamilyCompo(member = {}) {
                        if (memberCount >= 8) {
                            Swal.fire({
                                icon: 'warning', // Icon for the alert (e.g., 'success', 'error', 'warning', 'info', 'question')
                                title: 'Limit Reached',
                                text: 'Maximum of 8 family members only.', // The message
                                confirmButtonText: 'OK', // Text for the confirm button
                            });
                            return;
                        }

                        memberCount++;

                        const familyMemberDiv = document.createElement('div');
                        familyMemberDiv.className = 'family-member mb-3';
                        familyMemberDiv.innerHTML = `

                                                                                                                                        <h5>Family Member ${memberCount}</h5>
                                                                                                                                        <div class="form-row">
                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="person_name_${memberCount}">Name:</label>
                                                                                                                                                <input type="text" name="person_name_${memberCount}" id="person_name_${memberCount}" class="form-control" value="${member.name || ''}" required>
                                                                                                                                            </div>

                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="age_${memberCount}">Age:</label>
                                                                                                                                                <input type="number" name="age_${memberCount}" id="age_${memberCount}" class="form-control" value="${member.age || ''}" required>
                                                                                                                                            </div>

                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="sex_${memberCount}">Sex: <span style="color: red;">*</span></label>
                                                                                                                                                <select name="sex_${memberCount}" id="sex_${memberCount}" class="form-control" required>
                                                                                                                                                    <option value="Male" ${member.sex === 'Male' ? 'selected' : ''}>Male</option>
                                                                                                                                                    <option value="Female" ${member.sex === 'Female' ? 'selected' : ''}>Female</option>
                                                                                                                                                </select>
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="form-row">
                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="civil_${memberCount}">Civil Status:</label>
                                                                                                                                                <input type="text" name="civil_${memberCount}" id="civil_${memberCount}" class="form-control" value="${member.civil_status || ''}" required>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="relation_${memberCount}">Relation:</label>
                                                                                                                                                <input type="text" name="relation_${memberCount}" id="relation_${memberCount}" class="form-control" value="${member.relation || ''}">
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="education_${memberCount}">Educational Attainment:</label>
                                                                                                                                                <input type="text" name="education_${memberCount}" id="education_${memberCount}" class="form-control" value="${member.education || ''}">
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="form-row">
                                                                                                                                            <div class="form-group col-md-12">
                                                                                                                                                <label for="occupation_${memberCount}">Occupation:</label>
                                                                                                                                                <input type="text" name="occupation_${memberCount}" id="occupation_${memberCount}" class="form-control" value="${member.occupation || ''}" required>
                                                                                                                                            </div>

                                                                                                                                        </div>


                                                                                                                                        <hr>
                                                                                                                                    `;
                        // Add the new family member to the container
                        familyInfoContainer.appendChild(familyMemberDiv);
                    }

                    // Function to remove the last family member
                    function removeLastFamilyCompo() {
                        if (memberCount > 0) {
                            const lastMember = familyInfoContainer.lastElementChild;
                            familyInfoContainer.removeChild(lastMember);
                            memberCount--;
                        }
                    }

                    // Load saved family members
                    if (savedFamilyMembers && savedFamilyMembers.length > 0) {
                        savedFamilyMembers.forEach(member => addFamilyCompo(member));
                    } else {
                        // Add an empty form for the first family member if no data is found
                        addFamilyCompo();
                    }

                    // Add event listeners to the buttons
                    addFamilyMemberBtn.addEventListener('click', addFamilyCompo);
                    removeFamilyMemberBtn.addEventListener('click', removeLastFamilyCompo);
                });
            </script>







            <div class="d-flex flex-column align-items-end mt-3">
                <div class="form-check mb-2">
                    <input type="checkbox" name="save_for_next_application" class="form-check-input"
                        id="save_for_next_application">
                    <label class="form-check-label" for="save_for_next_application">
                        Save my information for the next application
                    </label>
                </div>
                <button type="submit" id="submit-button" class="btn btn-blue btn-icon">
                    <i class="fas fa-save"></i> <span>Submit</span>
                </button>
            </div>
        </form>
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
            const congenitalRadio = document.querySelector('input[name="cause_of_disability"][value="congenital"]');
            const congenitalFields = document.getElementById('congenitalFields');
            const acquiredFields = document.getElementById('acquiredFields');
            const congenitalInputs = congenitalFields.querySelectorAll('input, select');
            const acquiredInputs = acquiredFields.querySelectorAll('input, select');

            if (congenitalRadio.checked) {
                // Show congenital fields, hide and disable acquired fields
                congenitalFields.style.display = 'block';
                acquiredFields.style.display = 'none';
                congenitalInputs.forEach(input => input.disabled = false);
                acquiredInputs.forEach(input => input.disabled = true);
                toggleSpecifyCongenital();
            } else {
                // Show acquired fields, hide and disable congenital fields
                congenitalFields.style.display = 'none';
                acquiredFields.style.display = 'block';
                congenitalInputs.forEach(input => input.disabled = true);
                acquiredInputs.forEach(input => input.disabled = false);
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

    <script>
        document.getElementById('submit-button').addEventListener('click', function () {
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
                text: 'Please double-check your application before submitting.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, Submit',
                cancelButtonText: 'Cancel',
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    // Show loading animation
                    Swal.fire({
                        title: 'Submitting...',
                        text: 'Please wait while we process your application.',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    // Simulate form submission (replace with actual submission logic)
                    setTimeout(() => {
                        Swal.close(); // Close the loading animation
                        // Redirect to the "my_applications" page

                    }, 2000); // Simulate a 2-second delay
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


</body>

</html>