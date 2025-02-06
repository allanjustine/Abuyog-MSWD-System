<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficiary Edit Form</title>

    <!-- Include necessary stylesheets -->
    @if(Auth::user()->usertype === 'admin')
    @include('admin.css')
    @elseif(Auth::user()->usertype === 'operator')
    @include('operator.css')
    @else
    @include('employee.css')
    @endif

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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
                        Edit Beneficiary Information for Aics
                        @if(Auth::user()->usertype === 'admin')
                        <a href="{{ url('/showbeneficiaries_admin') }}" class="btn btn-back btn-sm float-end">Back</a>
                        @elseif(Auth::user()->usertype === 'operator')
                        <a href="{{ url('/showbeneficiaries_operator') }}" class="btn btn-back btn-sm float-end">Back</a>
                        @else
                        <a href="{{ url('/display_beneficiaries') }}" class="btn btn-back btn-sm float-end">Back</a>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="/update-aics/{{ $beneficiary->id }}" id="update-aics" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="row form-row">
                                <div class="col-md-3">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" name="last_name" value="{{ $beneficiary->last_name }}">
                                    @error('last_name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" name="first_name" value="{{ $beneficiary->first_name }}">
                                    @error('first_name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="middleName" class="form-label">Middle Name (Optional)</label>
                                    <input type="text" class="form-control" id="middleName" name="middle_name" value="{{ $beneficiary->middle_name }}">
                                    @error('middle_name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <label for="placeOfBirth" class="form-label">Place of Birth</label>
                                    <input type="text" class="form-control" id="placeOfBirth" name="place_of_birth" value="{{ $beneficiary->place_of_birth }}">
                                    @error('place_of_birth')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-row">
                                <div class="col-md-3">
                                    <label for="dateOfBirth" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="dateOfBirth" name="date_of_birth" value="{{ $beneficiary->date_of_birth->format('Y-m-d') }}">
                                    @error('date_of_birth')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="text" class="form-control" id="age" name="age" readonly value="{{ $beneficiary->age }}">
                                </div>
                                <div class="col-md-3">
                                    <label for="religion" class="form-label">Religion</label>
                                    <input type="text" class="form-control" id="religion" name="religion" value="{{ $beneficiary->religion }}">
                                    @error('religion')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $beneficiary?->phone }}">
                                    @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- Additional Information Section -->
                            <fieldset class="p-3 mb-3 border">
                                <legend class="w-auto px-2">Additional Information</legend>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="barangaySelect" class="form-label">Barangay</label>
                                        <select name="barangay" id="barangaySelect" class="form-select">
                                            <option value="">Select Barangay</option>
                                            @foreach ($barangays as $barangay)
                                            <option value="{{ $barangay->id }}" data-lat="{{ $barangay->latitude }}" data-lng="{{ $barangay->longitude }}" {{ $barangay->id == $beneficiary->barangay_id ? 'selected' : '' }}>
                                                {{ $barangay->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('barangay')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="civilStatus" class="form-label">Civil Status</label>
                                        <select class="form-select" id="civilStatus" name="civil_status">
                                            <option value="">Select</option>
                                            <option value="Single" {{ $beneficiary->civil_status == 'Single' ? 'selected' : '' }}>Single</option>
                                            <option value="Married" {{ $beneficiary->civil_status == 'Married' ? 'selected' : '' }}>Married</option>
                                            <option value="Widowed" {{ $beneficiary->civil_status == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                                            <option value="Divorced" {{ $beneficiary->civil_status == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                        </select>
                                        @error('civil_status')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <div class="col-md-6">
                                        <label for="educationalAttainment" class="form-label">Educational
                                            Attainment</label>
                                        <select class="form-select" id="educationalAttainment" name="educational_attainment">
                                            <option value="">Select</option>
                                            <option value="No Formal Education" {{ $beneficiary->educational_attainment == 'No Formal Education' ? 'selected' : '' }}>No Formal Education</option>
                                            <option value="Elementary" {{ $beneficiary->educational_attainment == 'Elementary' ? 'selected' : '' }}>Elementary</option>
                                            <option value="High School" {{ $beneficiary->educational_attainment == 'High School' ? 'selected' : '' }}>High School</option>
                                            <option value="College" {{ $beneficiary->educational_attainment == 'College' ? 'selected' : '' }}>College</option>
                                            <option value="Postgraduate" {{ $beneficiary->educational_attainment == 'Postgraduate' ? 'selected' : '' }}>Postgraduate</option>
                                        </select>
                                        @error('educational_attainment')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="occupation" class="form-label">Occupation</label>
                                        <input type="text" class="form-control" id="occupation" name="occupation" value="{{ $beneficiary->occupation }}">
                                        @error('occupation')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="p-3 mb-3 border">
                                <legend class="w-auto px-2">Family Composition</legend>

                                <!-- Family Member 1 -->
                                @forelse($beneficiary->familyCompositions as $index => $fc)
                                <div @if($index % 2) style="background-color:rgba(0, 0, 0, 0.136);" @endif class="p-2 rounded">
                                    <div class="row form-row">
                                        <div class="col-md-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name[{{ $fc->id }}]" value="{{ $fc->name ?? '' }}">
                                            @error('name.*')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col-md-3">
                                            <label for="relationship" class="form-label">Relationship</label>
                                            <input type="text" class="form-control" id="relationship" name="relationship[{{ $fc->id }}]" value="{{ $fc->relationship ?? '' }}">
                                            @error('relationship.*')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col-md-3">
                                            <label for="age" class="form-label">Age</label>
                                            <input type="number" class="form-control" id="age" name="age_fc[{{ $fc->id }}]" value="{{ $fc->age ?? '' }}">
                                            @error('age_fc.*')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="gender_fc" class="form-label">Gender</label>
                                            <select class="form-select" id="gender" name="gender_fc[{{ $fc->id }}]">
                                                <option value="">Select</option>
                                                <option value="Male" {{ $fc->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                                <option value="Female" {{ $fc->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                            </select>
                                            @error('gender_fc.*')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row form-row">
                                        <div class="col-md-4">
                                            <label for="civilStatus" class="form-label">Civil Status</label>
                                            <select class="form-select" id="civilStatus" name="civil_status_fc[{{ $fc->id }}]">
                                                <option value="" hidden selected>Select</option>
                                                <option value="" disabled>Select</option>
                                                <option value="Single" {{ $fc->civil_status == 'Single' ? 'selected' : '' }}>Single</option>
                                                <option value="Married" {{ $fc->civil_status == 'Married' ? 'selected' : '' }}>Married</option>
                                                <option value="Widowed" {{ $fc->civil_status == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                                                <option value="Divorced" {{ $fc->civil_status == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                            </select>
                                            @error('civil_status_fc.*')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="occupation" class="form-label">Occupation</label>
                                            <input type="text" class="form-control" id="occupation" name="occupation_fc[{{ $fc->id }}]" value="{{ $fc->occupation ?? '' }}">
                                            @error('occupation_fc.*')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="educationalAttainment" class="form-label">Educational
                                                Attainment</label>
                                            <select class="form-select" id="educationalAttainment" name="educational_attainment_fc[{{ $fc->id }}]">
                                                <option value="">Select</option>
                                                <option value="No Formal Education" {{ $fc->educational == 'No Formal Education' ? 'selected' : '' }}>No Formal Education</option>
                                                <option value="Elementary" {{ $fc->educational == 'Elementary' ? 'selected' : '' }}>Elementary</option>
                                                <option value="High School" {{ $fc->educational == 'High School' ? 'selected' : '' }}>High School</option>
                                                <option value="College" {{ $fc->educational == 'College' ? 'selected' : '' }}>College</option>
                                                <option value="Postgraduate" {{ $fc->educational == 'Postgraduate' ? 'selected' : '' }}>Postgraduate</option>
                                            </select>
                                            @error('educational_attainment_fc.*')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="mt-2 border-b family-member family-member-row" id="familyMemberFields">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- Remove Button -->
                                        <button type="button" class="btn btn-sm btn-danger remove-family-member" style="display: none;">
                                            &times;
                                        </button>
                                    </div>
                                    <input type="hidden" name="family_composition_data[]">
                                    <div class="row form-row">
                                        <div class="col-md-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name[]" value="{{ old('name.0') }}">
                                            @error('name.*')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col-md-3">
                                            <label for="relationship" class="form-label">Relationship</label>
                                            <input type="text" class="form-control" id="relationship" name="relationship[]" value="{{ old('relationship.0') }}">
                                            @error('relationship.*')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col-md-3">
                                            <label for="age" class="form-label">Age</label>
                                            <input type="number" class="form-control" id="age" name="age_fc[]" value="{{ old('age_fc.0') }}">
                                            @error('age_fc.*')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="gender_fc" class="form-label">Gender</label>
                                            <select class="form-select" id="gender" name="gender_fc[]">
                                                <option value="">Select</option>
                                                <option value="Male" {{ old('gender_fc.0') == 'Male' ? 'selected' : '' }}>Male</option>
                                                <option value="Female" {{ old('gender_fc.0') == 'Female' ? 'selected' : '' }}>Female</option>
                                            </select>
                                            @error('gender_fc.*')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row form-row">
                                        <div class="col-md-4">
                                            <label for="civilStatus" class="form-label">Civil Status</label>
                                            <select class="form-select" id="civilStatus" name="civil_status_fc[]">
                                                <option value="" hidden selected>Select</option>
                                                <option value="" disabled>Select</option>
                                                <option value="Single" {{ old('civil_status.0') == 'Single' ? 'selected' : '' }}>Single</option>
                                                <option value="Married" {{ old('civil_status.0') == 'Married' ? 'selected' : '' }}>Married</option>
                                                <option value="Widowed" {{ old('civil_status.0') == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                                                <option value="Divorced" {{ old('civil_status.0') == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                            </select>
                                            @error('civil_status_fc.*')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="occupation" class="form-label">Occupation</label>
                                            <input type="text" class="form-control" id="occupation" name="occupation_fc[]" value="{{ old('occupation_fc.0') }}">
                                            @error('occupation_fc.*')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="educationalAttainment" class="form-label">Educational
                                                Attainment</label>
                                            <select class="form-select" id="educationalAttainment" name="educational_attainment_fc[]">
                                                <option value="">Select</option>
                                                <option value="No Formal Education" {{ old('educational_attainment_fc.0') == 'No Formal Education' ? 'selected' : '' }}>No Formal Education</option>
                                                <option value="Elementary" {{ old('educational_attainment_fc.0') == 'Elementary' ? 'selected' : '' }}>Elementary</option>
                                                <option value="High School" {{ old('educational_attainment_fc.0') == 'High School' ? 'selected' : '' }}>High School</option>
                                                <option value="College" {{ old('educational_attainment_fc.0') == 'College' ? 'selected' : '' }}>College</option>
                                                <option value="Postgraduate" {{ old('educational_attainment_fc.0') == 'Postgraduate' ? 'selected' : '' }}>Postgraduate</option>
                                            </select>
                                            @error('educational_attainment_fc.*')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="addFamilyComposition" class="mt-2 btn btn-primary float-end">Add Field</button>
                                @endforelse
                            </fieldset>
                            <fieldset class="p-3 mb-3 border">
                                <legend class="w-auto px-2">Other Information</legend>

                                <!-- Case Number -->
                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <label for="caseNo" class="form-label">Case No</label>
                                        <input type="text" class="form-control" id="caseNo" name="case_no" value="{{ $beneficiary?->aicsDetails[0]->case_no ?? '' }}">
                                        @error('case_no')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- New or Old -->
                                    <div class="col-md-4">
                                        <label for="new_or_old" class="form-label">New or Old</label>
                                        <select class="form-select" id="new_or_old" name="new_or_old">
                                            <option value="">Select</option>
                                            <option value="New" {{ isset($beneficiary->aicsDetails[0]) && $beneficiary->aicsDetails[0]->new_or_old == 'New' ? 'selected' : '' }}>New</option>
                                            <option value="Old" {{ isset($beneficiary->aicsDetails[0]) && $beneficiary->aicsDetails[0]->new_or_old == 'Old' ? 'selected' : '' }}>Old</option>
                                        </select>
                                        @error('new_or_old')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Date Applied -->
                                    <div class="col-md-4">
                                        <label for="dateApplied" class="form-label">Date Applied</label>
                                        <input type="date" class="form-control" id="dateApplied" name="date_applied" value="{{ isset($beneficiary->aicsDetails[0]) ? $beneficiary->aicsDetails[0]->date_applied->format('Y-m-d') : '' }}">
                                        @error('date_applied')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Source of Referral -->
                                <div class="row form-row">
                                    <div class="col-md-6">
                                        <label for="sourceReferral" class="form-label">Source of Referral</label>
                                        <input type="text" class="form-control" id="sourceReferral" name="source_of_referral" value="{{ isset($beneficiary->aicsDetails[0]) ? $beneficiary->aicsDetails[0]->source_of_referral : '' }}">
                                        @error('source_of_referral')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Problem Presented -->
                                    <div class="col-md-6">
                                        <label for="problemPresented" class="form-label">Problem Presented</label>
                                        <input type="text" class="form-control" id="problemPresented" name="problem_presented" value="{{ isset($beneficiary->aicsDetails[0]) ? $beneficiary->aicsDetails[0]->problem_presented : '' }}">
                                        @error('problem_presented')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Findings -->
                                <div class="row form-row">
                                    <div class="col-md-6">
                                        <label for="findings" class="form-label">Findings</label>
                                        <textarea class="form-control" id="findings" name="findings">{{ isset($beneficiary->aicsDetails[0]) ? $beneficiary->aicsDetails[0]->findings : '' }}</textarea>
                                        @error('findings')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Action Taken -->
                                    <div class="col-md-6">
                                        <label for="actionTaken" class="form-label">Action Taken</label>
                                        <textarea class="form-control" id="actionTaken" name="action_taken">{{ isset($beneficiary->aicsDetails[0]) ? $beneficiary->aicsDetails[0]->action_taken : '' }}</textarea>
                                        @error('action_taken')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>


                            <button type="submit" class="btn btn-success btn-sm" style="width: 200px; position: fixed; bottom: 20px; right: 5%; z-index: 1000;">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let fieldCount = 1;
            document.getElementById('addFamilyComposition').addEventListener('click', function() {
                const newRow = document.querySelector('.family-member-row').cloneNode(true);

                const inputs = newRow.querySelectorAll('input, select');
                inputs.forEach(input => {
                    const name = input.getAttribute('name');
                    input.setAttribute('name', name.replace(/\[\d+\]/, `[${fieldCount}]`));
                    input.value = '';
                });

                const removeButton = newRow.querySelector('.remove-family-member');
                removeButton.style.display = 'inline-block';

                document.getElementById('familyMemberFields').appendChild(newRow);

                fieldCount++;

                removeButton.addEventListener('click', function() {
                    newRow.remove();
                });
            });
        });

    </script>

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
        document.getElementById('dateOfBirthFc').addEventListener('change', function() {
            const dobFc = new Date(this.value); // Get selected date of birth
            const todayFc = new Date(); // Get current date
            let ageFc = todayFc.getFullYear() - dobFc.getFullYear(); // Calculate age based on the year
            const m = todayFc.getMonth() - dobFc.getMonth(); // Check the month difference
            if (m < 0 || (m === 0 && todayFc.getDate() < dobFc.getDate())) {
                ageFc--; // Adjust age if birthday hasn't occurred yet this year
            }
            document.getElementById('ageFc').value = ageFc; // Set the calculated age in the "Age" field
        });
        document.getElementById('religion').addEventListener('change', function() {
            if (this.value === 'Other') { // Check if "Other" is selected
                document.getElementById('otherReligionDiv').classList.remove('d-none'); // Show "Other" input field
            } else {
                document.getElementById('otherReligionDiv').classList.add('d-none'); // Hide "Other" input field
            }
        });

    </script>
</body>

</html>
