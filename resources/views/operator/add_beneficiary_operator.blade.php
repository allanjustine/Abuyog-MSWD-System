<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficiary Registration Form</title>

    <!-- Include necessary stylesheets -->
    @include('operator.css')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            font-size: 1.5rem;
            background-color: #5cb85c;
            color: white;
            font-weight: bold;
        }

        .btn-back {
            background-color: #6c757d;
            color: white;
            font-weight: bold;
        }

        .form-control {
            border-radius: 0.375rem;
        }

        .alert {
            margin-bottom: 20px;
        }

        .row>.col-md-3 {
            margin-bottom: 15px;
        }

        fieldset {
            margin-top: 20px;
        }

        legend {
            font-weight: bold;
            font-size: 1.1rem;
        }

        .form-row {
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('operator.sidebar')
        @include('operator.navbar')

        <div class="container">
            <div class="container" align="center" style="padding:10px;">

                @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        Add Beneficiary Information
                        <a href="{{ url('/showbeneficiary') }}" class="btn btn-back btn-sm float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('uploadbeneficiary') }}" method="POST">
                            @csrf

                            <div class="row form-row">
                                <div class="col-md-3">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" name="last_name" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" name="first_name" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="middleName" class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" id="middleName" name="middle_name">
                                </div>
                                <div class="col-md-3">
                                    <label for="suffix" class="form-label">Suffix</label>
                                    <input type="text" class="form-control" id="suffix" name="suffix">
                                </div>
                            </div>

                            <div class="row form-row">
                                <div class="col-md-3">
                                    <label for="dateOfBirth" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="dateOfBirth" name="date_of_birth"
                                        required>
                                </div>
                                <div class="col-md-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="text" class="form-control" id="age" name="age" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" name="gender" required>
                                        <option value="">Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="placeOfBirth" class="form-label">Place of Birth</label>
                                    <input type="text" class="form-control" id="placeOfBirth" name="place_of_birth"
                                        required>
                                </div>
                            </div>

                            <!-- Additional Information Section -->
                            <fieldset class="border p-3 mb-3">
                                <legend class="w-auto px-2">Additional Information</legend>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="barangaySelect" class="form-label">Barangay</label>
                                        <select name="barangay" id="barangaySelect" class="form-select" required>
                                            <option value="">Select Barangay</option>
                                            @foreach ($barangays as $barangay)
                                            <option value="{{ $barangay->id }}" data-lat="{{ $barangay->latitude }}"
                                                data-lng="{{ $barangay->longitude }}">
                                                {{ $barangay->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="civilStatus" class="form-label">Civil Status</label>
                                        <select class="form-select" id="civilStatus" name="civil_status" required>
                                            <option value="">Select</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Divorced">Divorced</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="educationalAttainment" class="form-label">Educational
                                            Attainment</label>
                                        <select class="form-select" id="educationalAttainment"
                                            name="educational_attainment">
                                            <option value="">Select</option>
                                            <option value="No Formal Education">No Formal Education</option>
                                            <option value="Elementary">Elementary</option>
                                            <option value="High School">High School</option>
                                            <option value="College">College</option>
                                            <option value="Postgraduate">Postgraduate</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="occupation" class="form-label">Occupation</label>
                                        <input type="text" class="form-control" id="occupation" name="occupation">
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <div class="col-md-3">
                                        <label for="religion" class="form-label">Religion</label>
                                        <select class="form-select" id="religion" name="religion">
                                            <option value="">Select</option>
                                            <option value="Christianity">Christianity</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Hinduism">Hinduism</option>
                                            <option value="Buddhism">Buddhism</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3 d-none" id="otherReligionDiv">
                                        <label for="otherReligion" class="form-label">Please Specify</label>
                                        <input type="text" class="form-control" id="otherReligion" name="other_religion"
                                            placeholder="Type your religion">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="monthlyIncome" class="form-label">Monthly Income</label>
                                        <select name="monthly_income" class="form-select" id="monthlyIncome" required>
                                            <option value="">Select Income</option>
                                            <option value="Below 5,000" {{ old('monthly_income')=='Below 5,000'
                                                ? 'selected' : '' }}>Below
                                                5,000</option>
                                            <option value="5,000 - 10,000" {{ old('monthly_income')=='5,000 - 10,000'
                                                ? 'selected' : '' }}>5,000
                                                - 10,000</option>
                                            <option value="10,000 - 15,000" {{ old('monthly_income')=='10,000 - 15,000'
                                                ? 'selected' : '' }}>
                                                10,000 - 15,000</option>
                                            <option value="Above 15,000" {{ old('monthly_income')=='Above 15,000'
                                                ? 'selected' : '' }}>Above
                                                15,000</option>
                                        </select>
                                    </div>


                                    <div class="col-md-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="tel" class="form-control" name="phone" id="phone"
                                            placeholder="Enter phone number" required>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="program_enrolled" class="form-label">Program Enrolled</label>
                                        <select name="program_enrolled" class="form-select" id="program_enrolled">
                                            <option value="">Select Program</option>
                                            @foreach ($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 d-none" id="disabilityType">
                                    <div class="mb-3 d-flex flex-column">
                                        <label for="disability_type">Disability Type:</label>
                                        <select name="disability_type" id="disability_type">
                                            <option hidden selected value="">Select Disability Type</option>
                                            <option disabled value="">Select Disability Type</option>
                                            <option value="Visual Impairment" {{
                                                old('disability_type')=='Visual Impairment' ? 'selected' : '' }}>Visual
                                                Impairment</option>
                                            <option value="Hearing Impairment" {{
                                                old('disability_type')=='Hearing Impairment' ? 'selected' : '' }}>
                                                Hearing Impairment</option>
                                            <option value="Mobility Impairment" {{
                                                old('disability_type')=='Mobility Impairment' ? 'selected' : '' }}>
                                                Mobility Impairment</option>
                                            <option value="Cognitive Impairment" {{
                                                old('disability_type')=='Cognitive Impairment' ? 'selected' : '' }}>
                                                Cognitive Impairment</option>
                                            <option value="Speech Impairment" {{
                                                old('disability_type')=='Speech Impairment' ? 'selected' : '' }}>Speech
                                                Impairment</option>
                                            <option value="Mental Health Impairment" {{
                                                old('disability_type')=='Mental Health Impairment' ? 'selected' : '' }}>
                                                Mental Health Impairment</option>
                                            <option value="Severe Physical Impairment" {{
                                                old('disability_type')=='Severe Physical Impairment' ? 'selected' : ''
                                                }}>Severe Physical Impairment</option>
                                            <option value="Chronic Illness" {{ old('disability_type')=='Chronic Illness'
                                                ? 'selected' : '' }}>Chronic Illness</option>
                                            <option value="Hearing and Speech Impairment" {{
                                                old('disability_type')=='Hearing and Speech Impairment' ? 'selected'
                                                : '' }}>Hearing and Speech Impairment</option>
                                            <option value="Other" {{ old('disability_type')=='Other' ? 'selected' : ''
                                                }}>Other</option>
                                        </select>
                                    </div>
                                </div>
                    </div>

                    </fieldset>
                    <!-- Case Numbers Section -->
                    <fieldset class="border p-3 mb-3">
                        <legend class="w-auto px-2">ID Number</legend>
                        <div class="row form-row">
                            <div class="col-md-3">
                                <label for="id_number" class="form-label">ID Number</label>
                                <input type="text" class="form-control" id="id_number" name="id_number">
                            </div>

                            <button type="submit" class="btn btn-success btn-sm"
                                style="width: 200px; position: fixed; bottom: 20px; right: 5%; z-index: 1000;">
                                Submit
                            </button>

                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('dateOfBirth').addEventListener('change', function() {
            const dob = new Date(this.value); // Get selected date of birth
            const today = new Date(); // Get current date
            let age = today.getFullYear() - dob.getFullYear(); // Calculate age based on the year
            const m = today.getMonth() - dob.getMonth(); // Check the month difference
            if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
                age--; // Adjust age if birthday hasn't occurred yet this year
            }
            document.getElementById('age').value = age; // Set the calculated age in the "Age" field
        });
        document.getElementById('religion').addEventListener('change', function() {
            if (this.value === 'Other') { // Check if "Other" is selected
                document.getElementById('otherReligionDiv').classList.remove('d-none'); // Show "Other" input field
            } else {
                document.getElementById('otherReligionDiv').classList.add('d-none'); // Hide "Other" input field
            }
        });
    </script>

    <script>
        document.getElementById('program_enrolled').addEventListener('change', function() {
        const selectedProgram = this.value;

        const disabilityTypeDiv = document.getElementById('disabilityType');
        const disabilityTypeDiv2 = document.getElementById('disability_type');
        if(selectedProgram == 2) {
            disabilityTypeDiv.classList.remove('d-none');
            disabilityTypeDiv2.setAttribute('required', 'required');
        } else {
            disabilityTypeDiv2.removeAttribute('required');
            disabilityTypeDiv.classList.add('d-none');
        }
    })
    </script>
</body>

</html>
