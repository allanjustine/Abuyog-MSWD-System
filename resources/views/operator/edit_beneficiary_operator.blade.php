<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Beneficiary</title>

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
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('operator.sidebar')
        @include('operator.navbar')

        <div class="container" align="center" style="padding:10px;">

            <div class="container">
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
                        Edit Beneficiary
                        <a href="{{ url('/showbeneficiary') }}" class="btn btn-back btn-sm float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <!-- Form to Edit Beneficiary -->
                        <form action="{{ url('update_beneficiary_operator', $beneficiary->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <!-- First Name and Middle Name -->
                                <div class="row form-row">
                                    <div class="col-md-3">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="last_name"
                                            value="{{ $beneficiary->last_name }}" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstName" name="first_name"
                                            value="{{ $beneficiary->first_name }}" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="middleName" class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" id="middleName" name="middle_name"
                                            value="{{ $beneficiary->middle_name }}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="suffix" class="form-label">Suffix</label>
                                        <input type="text" class="form-control" id="suffix" name="suffix"
                                            value="{{ $beneficiary->suffix }}">
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <div class="col-md-3">
                                        <label for="dateOfBirth" class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" id="dateOfBirth" name="date_of_birth"
                                            value="{{ $beneficiary->date_of_birth }}" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="age" class="form-label">Age</label>
                                        <input type="text" class="form-control" id="age" name="age"
                                            value="{{ $beneficiary->age }}" readonly>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-select" id="gender" name="gender" required>
                                            <option value="">Select</option>
                                            <option value="Male"
                                                {{ $beneficiary->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                            <option value="Female"
                                                {{ $beneficiary->gender == 'Female' ? 'selected' : '' }}>Female
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="placeOfBirth" class="form-label">Place of Birth</label>
                                        <input type="text" class="form-control" id="placeOfBirth"
                                            name="place_of_birth" value="{{ $beneficiary->place_of_birth }}" required>
                                    </div>
                                </div>

                                <!-- Additional Information Section -->
                                <fieldset class="border p-3 mb-3">
                                    <legend class="w-auto px-2">Additional Information</legend>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="barangaySelect" class="form-label">Barangay</label>
                                            <select name="barangay" id="barangaySelect" class="form-select" required>
                                                <option value="">Select Barangay</option>
                                                @foreach ($barangays as $barangay)
                                                    <option value="{{ $barangay->id }}"
                                                        data-lat="{{ $barangay->latitude }}"
                                                        data-lng="{{ $barangay->longitude }}"
                                                        {{ $beneficiary->barangay_id == $barangay->id ? 'selected' : '' }}>
                                                        {{ $barangay->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="civilStatus" class="form-label">Civil Status</label>
                                            <select class="form-select" id="civilStatus" name="civil_status"
                                                required>
                                                <option value="">Select</option>
                                                <option value="Single"
                                                    {{ $beneficiary->civil_status == 'Single' ? 'selected' : '' }}>
                                                    Single</option>
                                                <option value="Married"
                                                    {{ $beneficiary->civil_status == 'Married' ? 'selected' : '' }}>
                                                    Married</option>
                                                <option value="Widowed"
                                                    {{ $beneficiary->civil_status == 'Widowed' ? 'selected' : '' }}>
                                                    Widowed</option>
                                                <option value="Divorced"
                                                    {{ $beneficiary->civil_status == 'Divorced' ? 'selected' : '' }}>
                                                    Divorced</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="educationalAttainment" class="form-label">Educational
                                                Attainment</label>
                                            <select class="form-select" id="educationalAttainment"
                                                name="educational_attainment">
                                                <option value="">Select</option>
                                                <option value="No Formal Education"
                                                    {{ $beneficiary->educational_attainment == 'No Formal Education' ? 'selected' : '' }}>
                                                    No Formal Education</option>
                                                <option value="Elementary"
                                                    {{ $beneficiary->educational_attainment == 'Elementary' ? 'selected' : '' }}>
                                                    Elementary</option>
                                                <option value="High School"
                                                    {{ $beneficiary->educational_attainment == 'High School' ? 'selected' : '' }}>
                                                    High School</option>
                                                <option value="College"
                                                    {{ $beneficiary->educational_attainment == 'College' ? 'selected' : '' }}>
                                                    College</option>
                                                <option value="Postgraduate"
                                                    {{ $beneficiary->educational_attainment == 'Postgraduate' ? 'selected' : '' }}>
                                                    Postgraduate</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="occupation" class="form-label">Occupation</label>
                                            <input type="text" class="form-control" id="occupation"
                                                name="occupation" value="{{ $beneficiary->occupation }}">
                                        </div>
                                    </div>

                                    <div class="row form-row">
                                        <div class="col-md-3">
                                            <label for="religion" class="form-label">Religion</label>
                                            <select class="form-select" id="religion" name="religion">
                                                <option value="">Select</option>
                                                <option value="Christianity"
                                                    {{ $beneficiary->religion == 'Christianity' ? 'selected' : '' }}>
                                                    Christianity</option>
                                                <option value="Islam"
                                                    {{ $beneficiary->religion == 'Islam' ? 'selected' : '' }}>Islam
                                                </option>
                                                <option value="Hinduism"
                                                    {{ $beneficiary->religion == 'Hinduism' ? 'selected' : '' }}>
                                                    Hinduism</option>
                                                <option value="Buddhism"
                                                    {{ $beneficiary->religion == 'Buddhism' ? 'selected' : '' }}>
                                                    Buddhism</option>
                                                <option value="Other"
                                                    {{ $beneficiary->religion == 'Other' ? 'selected' : '' }}>Other
                                                </option>
                                            </select>
                                        </div>

                                        <div class="col-md-3 d-none" id="otherReligionDiv">
                                            <label for="otherReligion" class="form-label">Please Specify</label>
                                            <input type="text" class="form-control" id="otherReligion"
                                                name="other_religion" value="{{ $beneficiary->other_religion }}"
                                                placeholder="Type your religion">
                                        </div>

                                        <div class="col-md-3">
                                            <label for="monthlyIncome" class="form-label">Monthly Income</label>
                                            <select name="monthly_income" class="form-select" id="monthlyIncome"
                                                required>
                                                <option value="">Select Income</option>
                                                <option value="Below 5,000"
                                                    {{ $beneficiary->monthly_income == 'Below 5,000' ? 'selected' : '' }}>
                                                    Below 5,000</option>
                                                <option value="5,000 - 10,000"
                                                    {{ $beneficiary->monthly_income == '5,000 - 10,000' ? 'selected' : '' }}>
                                                    5,000 - 10,000</option>
                                                <option value="10,000 - 15,000"
                                                    {{ $beneficiary->monthly_income == '10,000 - 15,000' ? 'selected' : '' }}>
                                                    10,000 - 15,000</option>
                                                <option value="Above 15,000"
                                                    {{ $beneficiary->monthly_income == 'Above 15,000' ? 'selected' : '' }}>
                                                    Above 15,000</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="tel" class="form-control" name="phone" id="phone"
                                                value="{{ $beneficiary->phone }}" required>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="{{ $beneficiary->email }}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="program_enrolled" class="form-label">Program Enrolled</label>
                                            <select name="program_enrolled" class="form-select"
                                                id="program_enrolled">
                                                <option value="">Select Program</option>
                                                @foreach ($services as $service)
                                                    <option value="{{ $service->id }}"
                                                        {{ $beneficiary->program_enrolled == $service->id ? 'selected' : '' }}>
                                                        {{ $service->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>

                                <!-- ID Number Section -->
                                <fieldset class="border p-3 mb-3">
                                    <legend class="w-auto px-2">ID Number</legend>
                                    <div class="row form-row">
                                        <div class="col-md-3">
                                            <label for="id_number" class="form-label">ID Number</label>
                                            <input type="text" class="form-control" id="id_number"
                                                name="id_number" value="{{ $beneficiary->id_number }}">
                                        </div>
                                    </div>
                                </fieldset>

                                <button type="submit" class="btn btn-success btn-sm"
                                    style="width: 200px; position: fixed; bottom: 20px; right: 5%; z-index: 1000;">
                                    Update Beneficiary
                                </button>


                                <script>
                                    // Update Latitude and Longitude fields based on Barangay selection
                                    document.getElementById('barangaySelect').addEventListener('change', function() {
                                        var selectedOption = this.options[this.selectedIndex];
                                        document.getElementById('latitude').value = selectedOption.getAttribute('data-lat');
                                        document.getElementById('longitude').value = selectedOption.getAttribute('data-lng');
                                    });
                                </script>
</body>

</html>
