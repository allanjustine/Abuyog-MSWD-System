<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

    @include('employee.css')
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
        @include('employee.sidebar')
        @include('employee.navbar')

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
                        <a href="{{ url('/display_beneficiaries') }}" class="btn btn-back btn-sm float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <!-- Form to Edit Beneficiary -->
                        <form action="{{ url('updatebeneficiary', $beneficiary->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <!-- First Name and Middle Name -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="first_name" class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="first_name" id="first_name"
                                            value="{{ $beneficiary->first_name }}" placeholder="Enter first name"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="middle_name" class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" name="middle_name" id="middle_name"
                                            value="{{ $beneficiary->middle_name }}" placeholder="Enter middle name">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Last Name and Date of Birth -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="last_name" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="last_name" id="last_name"
                                            value="{{ $beneficiary->last_name }}" placeholder="Enter last name"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="date_of_birth" class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" name="date_of_birth"
                                            id="date_of_birth" value="{{ $beneficiary->date_of_birth }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Age and Email -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="age" class="form-label">Age</label>
                                        <input type="number" class="form-control" name="age" id="age"
                                            value="{{ $beneficiary->age }}" placeholder="Enter age" required readonly>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            value="{{ $beneficiary->email }}" placeholder="Enter email" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Gender and Civil Status -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select name="gender" class="form-select" id="gender" required>
                                            <option value="">Select Gender</option>
                                            <option value="Male"
                                                {{ $beneficiary->gender == 'Male' ? 'selected' : '' }}>
                                                Male</option>
                                            <option value="Female"
                                                {{ $beneficiary->gender == 'Female' ? 'selected' : '' }}>Female
                                            </option>
                                            <option value="Other"
                                                {{ $beneficiary->gender == 'Other' ? 'selected' : '' }}>
                                                Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="civil_status" class="form-label">Civil Status</label>
                                        <select name="civil_status" class="form-select" id="civil_status" required>
                                            <option value="">Select Civil Status</option>
                                            <option value="Single"
                                                {{ $beneficiary->civil_status == 'Single' ? 'selected' : '' }}>
                                                Single
                                            </option>
                                            <option value="Married"
                                                {{ $beneficiary->civil_status == 'Married' ? 'selected' : '' }}>
                                                Married
                                            </option>
                                            <option value="Widowed"
                                                {{ $beneficiary->civil_status == 'Widowed' ? 'selected' : '' }}>
                                                Widowed
                                            </option>
                                            <option value="Divorced"
                                                {{ $beneficiary->civil_status == 'Divorced' ? 'selected' : '' }}>
                                                Divorced
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div style="padding:15px">
                                <label>Barangay</label>
                                <select name="barangay_id" class="form-control">
                                    <option value="">Select Barangay</option>
                                    @foreach ($barangays as $barangay)
                                        <option value="{{ $barangay->id }}"
                                            {{ $barangay->id == $beneficiary->barangay_id ? 'selected' : '' }}>
                                            {{ $barangay->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Hidden Inputs for Latitude and Longitude -->
                            <input type="hidden" name="latitude" id="latitude"
                                value="{{ $beneficiary->latitude }}">
                            <input type="hidden" name="longitude" id="longitude"
                                value="{{ $beneficiary->longitude }}">
                    </div>

                    <div class="row">
                        <!-- Contact Number and Government ID Number -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" name="phone" id="phone"
                                    value="{{ $beneficiary->phone }}" placeholder="Enter phone number" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="gov_id_number" class="form-label">Government ID Number</label>
                                <input type="text" class="form-control" name="gov_id_number"
                                    value="{{ $beneficiary->gov_id_number }}" id="gov_id_number"
                                    placeholder="Enter ID number" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Program Specific ID and Program Type -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="program_specific_id" class="form-label">Program Specific
                                    ID</label>
                                <input type="text" class="form-control" name="program_specific_id"
                                    value="{{ $beneficiary->program_specific_id }}" id="program_specific_id"
                                    placeholder="Enter program ID" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="program_enrolled" class="form-label">Program Enrolled</label>
                                <select name="program_enrolled" class="form-select" id="program_enrolled">
                                    <option value="">Select Program</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}"
                                            {{ $beneficiary->program_enrolled == $service->id ? 'selected' : '' }}>
                                            {{ $service->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Date of Application and Assistance Availed -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="date_of_application" class="form-label">Date of
                                    Application</label>
                                <input type="date" class="form-control" name="date_of_application"
                                    value="{{ $beneficiary->date_of_application }}" id="date_of_application"
                                    required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="assistance_availed" class="form-label">Assistance
                                    Availed</label>
                                <input type="text" class="form-control" name="assistance_availed"
                                    value="{{ $beneficiary->assistance_availed }}" id="assistance_availed"
                                    placeholder="Enter assistance availed">
                            </div>
                        </div>
                    </div>

                    <!-- Form fields for the beneficiary go here -->
                    <button type="submit" class="btn btn-success">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Update Latitude and Longitude when Barangay is changed
        $(document).ready(function() {
            $('#barangaySelect').change(function() {
                var selectedOption = $(this).find(':selected');
                var latitude = selectedOption.data('lat');
                var longitude = selectedOption.data('lng');
                $('#latitude').val(latitude);
                $('#longitude').val(longitude);
                console.log(latitude, longitude); // Debugging line
            });
        });
    </script>
</body>

</html>
