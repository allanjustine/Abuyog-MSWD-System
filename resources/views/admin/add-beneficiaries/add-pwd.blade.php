<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficiary Registration Form</title>

    <!-- Include necessary stylesheets -->
    @if(Auth::user()->usertype === 'admin')
    @include('admin.css')
    @elseif(Auth::user()->usertype === 'operator')
    @include('operator.css')
    @else
    @include('employee.css')
    @endif

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
        @if(Auth::user()->usertype === 'admin')
        @include('admin.sidebar')
        @include('admin.navbar')
        @elseif(Auth::user()->usertype === 'operator')

        @include('operator.sidebar')

        @include('operator.navbar')
        @else
        @include('employee.sidebar')

        @include('employee.navbar')

        @endif

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
                        Add Beneficiary Information for Pwd
                        @if(Auth::user()->usertype === 'admin')
                        <a href="{{ url('/showbeneficiaries_admin') }}" class="btn btn-back btn-sm float-end">Back</a>
                        @elseif(Auth::user()->usertype === 'operator')
                        <a href="{{ url('/showbeneficiaries_operator') }}"
                            class="btn btn-back btn-sm float-end">Back</a>
                        @else
                        <a href="{{ url('/display_beneficiaries') }}" class="btn btn-back btn-sm float-end">Back</a>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="/add-pwd" method="POST">
                            @csrf

                            <div class="row form-row">
                                <div class="col-md-3">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" name="last_name">
                                    @error('last_name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" name="first_name">
                                    @error('first_name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="middleName" class="form-label">Middle Name (Optional)</label>
                                    <input type="text" class="form-control" id="middleName" name="middle_name">
                                    @error('middle_name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <label for="placeOfBirth" class="form-label">Place of Birth</label>
                                    <input type="text" class="form-control" id="placeOfBirth" name="place_of_birth">
                                    @error('place_of_birth')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-row">
                                <div class="col-md-3">
                                    <label for="dateOfBirth" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="dateOfBirth" name="date_of_birth">
                                    @error('date_of_birth')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="text" class="form-control" id="age" name="age" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="religion" class="form-label">Religion</label>
                                    <input type="text" class="form-control" id="religion" name="religion">
                                    @error('religion')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" name="gender">
                                        <option value="">Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    @error('gender')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- Additional Information Section -->
                            <fieldset class="p-3 mb-3 border">
                                <legend class="w-auto px-2">Additional Information</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="barangaySelect" class="form-label">Barangay</label>
                                        <select name="barangay" id="barangaySelect" class="form-select">
                                            <option value="">Select Barangay</option>
                                            @foreach ($barangays as $barangay)
                                            <option value="{{ $barangay->id }}" data-lat="{{ $barangay->latitude }}"
                                                data-lng="{{ $barangay->longitude }}">
                                                {{ $barangay->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('barangay')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="civilStatus" class="form-label">Civil Status</label>
                                        <select class="form-select" id="civilStatus" name="civil_status">
                                            <option value="">Select</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Divorced">Divorced</option>
                                        </select>
                                        @error('civil_status')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="annualIncome" class="form-label">Annual Income</label>
                                        <select name="annual_income" class="form-select" id="annualIncome">
                                            <option value="" hidden selected>Select Income</option>
                                            <option value="" disabled>Select Income</option>
                                            <option value="Below 60,000" {{ old('annual_income')=='Below 60,000'
                                                ? 'selected' : '' }}>Below 60,000</option>
                                            <option value="60,000 - 120,000" {{ old('annual_income')=='60,000 - 120,000'
                                                ? 'selected' : '' }}>60,000 - 120,000</option>
                                            <option value="120,000 - 180,000" {{
                                                old('annual_income')=='120,000 - 180,000' ? 'selected' : '' }}>120,000 -
                                                180,000</option>
                                            <option value="Above 180,000" {{ old('annual_income')=='Above 180,000'
                                                ? 'selected' : '' }}>Above 180,000</option>
                                        </select>
                                        @error('annual_income')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <div class="col-md-4">
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
                                        @error('educational_attainment')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="occupation" class="form-label">Occupation</label>
                                        <input type="text" class="form-control" id="occupation" name="occupation">
                                        @error('occupation')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="phone" class="form-label">Contact Number</label>
                                        <input type="text" class="form-control" id="phone" name="phone">
                                        @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="p-3 mb-3 border">
                                <legend class="w-auto px-2 text-uppercase">Other Information</legend>

                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <label for="applicationType" class="form-label">Application Type</label>
                                        <select class="form-select" id="applicationType" name="application_type">
                                            <option value="" hidden selected>Select Application Type</option>
                                            <option value="" disabled>Select Application Type</option>
                                            <option value="New Applicant">New Applicant</option>
                                            <option value="Renewal">Renewal</option>
                                        </select>
                                        @error('application_type')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="pwd_number" class="form-label">PWD Number</label>
                                        <input type="text" class="form-control" id="pwd_number" name="pwd_number"
                                            placeholder="(RR-PPMM-BBB-NNNNNNN)">
                                        @error('pwd_number')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="blood_type" class="form-label">Blood Type</label>
                                        <input type="text" class="form-control" id="blood_type" name="blood_type">
                                        @error('blood_type')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <label for="disabilityType" class="form-label">Type of Disability</label>
                                        <select class="form-select" id="disabilityType" name="type_of_disability">
                                            <option value="" hidden selected>Select Type of Disability</option>
                                            <option value="" disabled>Select Type of Disability</option>
                                            <option value="Deaf or Heard of Hearing">Deaf or Heard of Hearing</option>
                                            <option value="Intellectual Disability">Intellectual Disability</option>
                                            <option value="Learning Disability">Learning Disability</option>
                                            <option value="Mental Disability">Mental Disability</option>
                                            <option value="Physical Disability (Orthopedic)">Physical Disability
                                                (Orthopedic)</option>
                                            <option value="Psychological Disability">Psychological Disability</option>
                                            <option value="Speech and Language Impairment">Speech and Language
                                                Impairment</option>
                                            <option value="Visual Disability">Visual Disability</option>
                                            <option value="Rare Disease (RA10747)">Rare Disease (RA10747)</option>
                                        </select>
                                        @error('type_of_disability')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>


                                    <div class="col-md-4">
                                        <label for="causeOfDisability" class="form-label">Cause of Disability</label>
                                        <select class="form-select" id="causeOfDisability" name="cause_of_disability">
                                            <option value="" hidden selected>Select Cause of Disability</option>
                                            <option value="" disabled>Select Cause of Disability</option>
                                            <option value="Congenital/Inborn" {{
                                                old('cause_of_disability')=='Congenital/Inborn' ? 'selected' : '' }}>
                                                Congenital/Inborn</option>
                                            <option value="Acquired" {{ old('cause_of_disability')=='Acquired'
                                                ? 'selected' : '' }}>Acquired</option>
                                            {{-- <option value="Autism" {{ old('cause_of_disability')=='Autism'
                                                ? 'selected' : '' }}>Autism</option>
                                            <option value="ADHD" {{ old('cause_of_disability')=='ADHD' ? 'selected' : ''
                                                }}>ADHD</option>
                                            <option value="Cerebral Palsy" {{
                                                old('cause_of_disability')=='Cerebral Palsy' ? 'selected' : '' }}>
                                                Cerebral Palsy</option>
                                            <option value="Down Syndrome" {{ old('cause_of_disability')=='Down Syndrome'
                                                ? 'selected' : '' }}>Down Syndrome</option>
                                            <option value="Other" {{ old('cause_of_disability')=='Other' ? 'selected'
                                                : '' }}>Other (Specify)</option> --}}
                                        </select>
                                        <input type="text"
                                            class="form-control mt-2 {{ $errors->has('other_cause_of_disability') ? 'is-invalid' : 'd-none' }}"
                                            id="otherCauseOfDisability" name="other_cause_of_disability"
                                            placeholder="Specify Cause of Disability">
                                        @error('cause_of_disability')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        @error('other_cause_of_disability')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4 {{ $errors->has('acquired') ? 'is-invalid' : 'd-none' }}" id="acquiredDiv">
                                        <label for="acquired" class="form-label">Acquired</label>
                                        <select class="form-select" id="acquired" name="acquired">
                                            <option value="" hidden selected>Select Acquired</option>
                                            <option value="" disabled>Select Acquired</option>
                                            <option value="Chronic Illness" {{ old('acquired')=='Chronic Illness'
                                                ? 'selected' : '' }}>Chronic Illness</option>
                                            <option value="Cerebral Palsy" {{ old('acquired')=='Cerebral Palsy'
                                                ? 'selected' : '' }}>Cerebral Palsy</option>
                                            <option value="Injury" {{ old('acquired')=='Injury' ? 'selected' : '' }}>
                                                Injury</option>
                                            <option value="Other" {{ old('acquired')=='Other' ? 'selected' : '' }}>Other
                                                (Specify)</option>
                                        </select>
                                        <input type="text"
                                            class="form-control mt-2 {{ $errors->has('other_acquired') ? 'is-invalid' : 'd-none' }}"
                                            id="otherAcquired" name="other_acquired" placeholder="Specify Acquired">
                                        @error('other_acquired')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        @error('acquired')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4 {{ $errors->has('congenital_inborn') ? 'is-invalid' : 'd-none' }}" id="congenitalInbornDiv">
                                        <label for="congenitalInborn" class="form-label">Congenital/Inborn Cause</label>
                                        <select class="form-select" id="congenitalInborn" name="congenital_inborn">
                                            <option value="" hidden selected>Select Congenital/Inborn Cause</option>
                                            <option value="" disabled>Select Congenital/Inborn Cause</option>
                                            <option value="Autism" {{ old('congenital_inborn')=='Autism' ? 'selected'
                                                : '' }}>Autism</option>
                                            <option value="ADHD" {{ old('congenital_inborn')=='ADHD' ? 'selected' : ''
                                                }}>ADHD</option>
                                            <option value="Cerebral Palsy" {{ old('congenital_inborn')=='Cerebral Palsy'
                                                ? 'selected' : '' }}>Cerebral Palsy</option>
                                            <option value="Down Syndrome" {{ old('congenital_inborn')=='Down Syndrome'
                                                ? 'selected' : '' }}>Down Syndrome</option>
                                            <option value="Other" {{ old('congenital_inborn')=='Other' ? 'selected' : ''
                                                }}>Other (Specify)</option>
                                        </select>
                                        <input type="text"
                                            class="form-control mt-2 {{ $errors->has('other_congenital_inborn') ? 'is-invalid' : 'd-none' }}"
                                            id="otherCongenitalInborn" name="other_congenital_inborn"
                                            placeholder="Specify Congenital Inborn">
                                        @error('congenital_inborn')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        @error('other_congenital_inborn')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 {{ $errors->has('congenital_inborn') ? 'd-none' : ($errors->has('acquired') ? 'd-none' : '') }}" id="selectedRemoved">
                                        <label for="congenitalInborn" class="form-label">Select Cause of disability first</label>
                                        <input type="text" class="form-control" disabled placeholder="Select Cause of disability first">
                                    </div>
                                </div>

                                <!-- Address and Contact Info -->
                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <label for="houseNo" class="form-label">House No. and Street</label>
                                        <input type="text" class="form-control" id="houseNo" name="house_no_and_street">
                                        @error('house_no_and_street')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="municipality" class="form-label">Municipality</label>
                                        <input type="text" class="form-control" id="municipality" name="municipality">
                                        @error('municipality')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="province" class="form-label">Province</label>
                                        <input type="text" class="form-control" id="province" name="province">
                                        @error('province')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <label for="region" class="form-label">Region</label>
                                        <input type="text" class="form-control" id="region" name="region">
                                        @error('region')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="landline" class="form-label">Landline No.</label>
                                        <input type="text" class="form-control" id="landline" name="landline_no">
                                        @error('landline_no')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email_address">
                                        @error('email_address')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Employment Information -->
                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <label for="employmentStatus" class="form-label">Status of Employment</label>
                                        <select class="form-select" id="employmentStatus" name="status_of_employment">
                                            <option value="" hidden selected>Select Status of Employment</option>
                                            <option value="" disabled>Select Status of Employment</option>
                                            <option value="Employed">Employed</option>
                                            <option value="Unemployed">Unemployed</option>
                                            <option value="Self-Employed">Self-Employed</option>
                                            <option value="Retired">Retired</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        @error('status_of_employment')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="categoryOfEmployment" class="form-label">Category of
                                            Employment</label>
                                        <select class="form-select" id="categoryOfEmployment"
                                            name="category_of_employment">
                                            <option value="" hidden selected>Select Category of Employment</option>
                                            <option value="" disabled>Select Category of Employment</option>
                                            <option value="Full-Time">Full-Time</option>
                                            <option value="Part-Time">Part-Time</option>
                                            <option value="Contractual">Contractual</option>
                                            <option value="Temporary">Temporary</option>
                                            <option value="Volunteer">Volunteer</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        @error('category_of_employment')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="typesOfEmployment" class="form-label">Types of Employment</label>
                                        <select class="form-select" id="typesOfEmployment" name="types_of_employment">
                                            <option value="" hidden selected>Select Types of Employment</option>
                                            <option value="" disabled>Select Types of Employment</option>
                                            <option value="Office">Office</option>
                                            <option value="Field">Field</option>
                                            <option value="Remote">Remote</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        @error('types_of_employment')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Organization Information -->

                                <legend class="w-auto px-2 text-uppercase">Organization Information</legend>
                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <label for="organizationAffiliated" class="form-label">Organization
                                            Affiliated</label>
                                        <input type="text" class="form-control" id="organizationAffiliated"
                                            name="organization_affiliated">
                                        @error('organization_affiliated')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="contactPerson" class="form-label">Contact Person</label>
                                        <input type="text" class="form-control" id="contactPerson"
                                            name="contact_person">
                                        @error('contact_person')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="officeAddress" class="form-label">Office Address</label>
                                        <input type="text" class="form-control" id="officeAddress"
                                            name="office_address">
                                        @error('office_address')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <label for="telNo" class="form-label">Tel. No.</label>
                                        <input type="text" class="form-control" id="telNo" name="tel_no">
                                        @error('tel_no')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="sssNo" class="form-label">SSS No.</label>
                                        <input type="text" class="form-control" id="sssNo" name="sss_no">
                                        @error('sss_no')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="gsisNo" class="form-label">GSIS No.</label>
                                        <input type="text" class="form-control" id="gsisNo" name="gsis_no">
                                        @error('gsis_no')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <label for="pagIbigNo" class="form-label">Pag-ibig No.</label>
                                        <input type="text" class="form-control" id="pagIbigNo" name="pag_ibig_no">
                                        @error('pag_ibig_no')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="psnNo" class="form-label">PSN No.</label>
                                        <input type="text" class="form-control" id="psnNo" name="psn_no">
                                        @error('psn_no')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="philHealthNo" class="form-label">PhilHealth No.</label>
                                        <input type="text" class="form-control" id="philHealthNo" name="philhealth_no">
                                        @error('philhealth_no')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Accomplished By -->
                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <label for="accomplishedBy" class="form-label">Accomplished By</label>
                                        <select class="form-select" id="accomplishedBy" name="accomplished_by">
                                            <option value="" hidden selected>Select Accomplished By</option>
                                            <option value="" disabled>Select Accomplished By</option>
                                            <option value="Applicant">Applicant</option>
                                            <option value="Guardian">Guardian</option>
                                            <option value="Representative">Representative</option>
                                        </select>
                                        @error('accomplished_by')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <legend class="w-auto px-2 text-uppercase">Family Background</legend>
                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <label for="fathersName" class="form-label">Fathers Name</label>
                                        <input type="text" class="form-control" id="fathersName" name="father_name">
                                        @error('father_name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="occupation" class="form-label">Occupation</label>
                                        <input type="text" class="form-control" id="occupation"
                                            name="father_occupation">
                                        @error('father_occupation')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="fatherPhone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="fatherPhone" name="father_phone">
                                        @error('father_phone')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <label for="mothersName" class="form-label">Mothers Name</label>
                                        <input type="text" class="form-control" id="mothersName" name="mother_name">
                                        @error('mother_name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="occupation" class="form-label">Occupation</label>
                                        <input type="text" class="form-control" id="occupation"
                                            name="mother_occupation">
                                        @error('mother_occupation')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="motherPhone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="motherPhone" name="mother_phone">
                                        @error('mother_phone')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <label for="guardiansName" class="form-label">Guardians Name</label>
                                        <input type="text" class="form-control" id="guardiansName" name="guardian_name">
                                        @error('guardian_name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="occupation" class="form-label">Occupation</label>
                                        <input type="text" class="form-control" id="occupation"
                                            name="guardian_occupation">
                                        @error('guardian_occupation')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="guardianPhone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="guardianPhone"
                                            name="guardian_phone">
                                        @error('guardian_phone')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>


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
        document.addEventListener('DOMContentLoaded', function() {
            const acquired = document.getElementById('acquired');
            const otherAcquired = document.getElementById('otherAcquired');
            const causeOfDisability = document.getElementById('causeOfDisability');
            const otherCauseOfDisability = document.getElementById('otherCauseOfDisability');
            const congenitalInborn = document.getElementById('congenitalInborn');
            const otherCongenitalInborn = document.getElementById('otherCongenitalInborn');
            const selectedRemoved = document.getElementById('selectedRemoved');
            const acquiredDiv = document.getElementById('acquiredDiv');
            const congenitalInbornDiv = document.getElementById('congenitalInbornDiv');

            acquired.addEventListener('change', function(event) {
                if (this.value === 'Other') {
                    otherAcquired.classList.remove('d-none');
                } else {
                    otherAcquired.classList.add('d-none');
                }
            });

            causeOfDisability.addEventListener('change', function() {
                // if (this.value === 'Other') {
                //     otherCauseOfDisability.classList.remove('d-none');
                // } else {
                //     otherCauseOfDisability.classList.add('d-none');
                // }
                if (this.value === 'Congenital/Inborn') {
                    congenitalInbornDiv.classList.remove('d-none');
                    selectedRemoved.classList.add('d-none');
                    acquiredDiv.classList.add('d-none');
                    otherCauseOfDisability.classList.add('d-none');
                } else if(this.value === 'Acquired') {
                    congenitalInbornDiv.classList.add('d-none');
                    selectedRemoved.classList.add('d-none');
                    acquiredDiv.classList.remove('d-none');
                    otherCauseOfDisability.classList.add('d-none');
                } else {
                    congenitalInbornDiv.classList.add('d-none');
                    acquiredDiv.classList.add('d-none');
                    otherCauseOfDisability.classList.add('d-none');
                }
            });

            congenitalInborn.addEventListener('change', function() {
                if (this.value === 'Other') {
                    otherCongenitalInborn.classList.remove('d-none');
                } else {
                    otherCongenitalInborn.classList.add('d-none');
                }
            });
        })

    </script>
</body>

</html>
