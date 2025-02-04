<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficiary Registration Form</title>

    <!-- Include necessary stylesheets -->
    @include('admin.css')

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
        @include('admin.sidebar')
        @include('admin.navbar')

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
                        Add Beneficiary Information for Solo Parent
                        @if(Auth::user()->usertype === 'admin')
                        <a href="{{ url('/showbeneficiaries_admin') }}" class="btn btn-back btn-sm float-end">Back</a>
                        @elseif(Auth::user()->usertype === 'operator')
                        <a href="{{ url('/showbeneficiaries_operator') }}" class="btn btn-back btn-sm float-end">Back</a>
                        @else
                        <a href="{{ url('/display_beneficiaries') }}" class="btn btn-back btn-sm float-end">Back</a>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="/add-solo-parent" method="POST">
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
                                            <option value="{{ $barangay->id }}" data-lat="{{ $barangay->latitude }}" data-lng="{{ $barangay->longitude }}">
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
                                            <option value="Below 60,000" {{ old('annual_income') == 'Below 60,000' ? 'selected' : '' }}>Below 60,000</option>
                                            <option value="60,000 - 120,000" {{ old('annual_income') == '60,000 - 120,000' ? 'selected' : '' }}>60,000 - 120,000</option>
                                            <option value="120,000 - 180,000" {{ old('annual_income') == '120,000 - 180,000' ? 'selected' : '' }}>120,000 - 180,000</option>
                                            <option value="Above 180,000" {{ old('annual_income') == 'Above 180,000' ? 'selected' : '' }}>Above 180,000</option>
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
                                        <select class="form-select" id="educationalAttainment" name="educational_attainment">
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
                            <fieldset class="p-3 mb-3 border" id="familyComposition">
                                <legend class="w-auto px-2">Family Composition</legend>

                                <div class="mt-2 border-b family-member family-member-row" id="familyMemberFields">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- Remove Button -->
                                        <button type="button" class="btn btn-sm btn-danger remove-family-member" style="display: none;">
                                            &times;
                                        </button>
                                    </div>

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
                                            <label for="dateOfBirth" class="form-label">Birthday</label>
                                            <input type="date" class="form-control" id="dateOfBirthFc" name="birthday[]" value="{{ \Carbon\Carbon::parse(old('birthday.*'))->format('Y-m-d') }}">
                                            @error('birthday.*')
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
                                    </div>

                                    <div class="row form-row">
                                        <div class="col-md-6">
                                            <label for="civilStatus" class="form-label">Civil Status</label>
                                            <select class="form-select" id="civilStatus" name="civil_status_fc[]">
                                                <option value="" hidden selected>Select</option>
                                                <option value="Single" {{ old('civil_status_fc.0') == 'Single' ? 'selected' : '' }}>Single</option>
                                                <option value="Married" {{ old('civil_status_fc.0') == 'Married' ? 'selected' : '' }}>Married</option>
                                                <option value="Widowed" {{ old('civil_status_fc.0') == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                                                <option value="Divorced" {{ old('civil_status_fc.0') == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                            </select>
                                            @error('civil_status_fc.*')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="occupation" class="form-label">Occupation</label>
                                            <input type="text" class="form-control" id="occupation" name="occupation_fc[]" value="{{ old('occupation_fc.0') }}">
                                            @error('occupation_fc.*')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-6">
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
                                        <div class="col-md-6">
                                            <label for="income" class="form-label">Monthly Income</label>
                                            <select name="income" class="form-select" id="income[]">
                                                <option value="" hidden selected>Select Monthly Income</option>
                                                <option value="" disabled>Select Monthly Income</option>
                                                <option value="Below 60,000" {{ old('income.0') == 'Below 60,000' ? 'selected' : '' }}>Below 60,000</option>
                                                <option value="60,000 - 120,000" {{ old('income.0') == '60,000 - 120,000' ? 'selected' : '' }}>60,000 - 120,000</option>
                                                <option value="120,000 - 180,000" {{ old('income.0') == '120,000 - 180,000' ? 'selected' : '' }}>120,000 - 180,000</option>
                                                <option value="Above 180,000" {{ old('income.0') == 'Above 180,000' ? 'selected' : '' }}>Above 180,000</option>
                                            </select>
                                            @error('income.*')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <button type="button" id="addFamilyComposition" class="mt-2 btn btn-primary float-end">Add Field</button>
                            </fieldset>
                            <fieldset class="p-3 mb-3 border">
                                <legend class="w-auto px-2">Other Information</legend>

                                <!-- Company/Agency -->
                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <label for="company_agency" class="form-label">Company/Agency</label>
                                        <input type="text" class="form-control" id="company_agency" name="company_agency">
                                        @error('company_agency')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- 4Ps Beneficiary -->
                                    <div class="col-md-4">
                                        <label for="4psBeneficiary" class="form-label">4Ps Beneficiary</label>
                                        <select class="form-select" id="4psBeneficiary" name="four_ps_beneficiary">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        @error('four_ps_beneficiary')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Indigenous Person -->
                                    <div class="col-md-4">
                                        <label for="indigenousPerson" class="form-label">Indigenous Person</label>
                                        <select class="form-select" id="indigenousPerson" name="indigenous_person">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        @error('indigenous_person')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Solo Parent Classification -->
                                <div class="row form-row">
                                    <div class="col-md-6">
                                        <label for="soloParent" class="form-label">Classification/Circumtances, of being a solo parent?</label>
                                        <textarea type="text" class="form-control" id="soloParentNeeds" name="classification_circumtances"></textarea>
                                        @error('classification_circumtances')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="soloParentNeeds" class="form-label">Needs/Problems of Being a Solo Parent</label>
                                        <textarea type="text" class="form-control" id="soloParentNeeds" name="needs_problems"></textarea>
                                        @error('needs_problems')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Emergency Contact -->
                                <legend class="w-auto px-2">IN CASE OF EMERGENCY</legend>
                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <label for="emergencyName" class="form-label">Emergency Name</label>
                                        <input type="text" class="form-control" id="emergencyName" name="emergency_name">
                                        @error('emergency_name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="emergencyAddress" class="form-label">Emergency Address</label>
                                        <input type="text" class="form-control" id="emergencyAddress" name="emergency_address">
                                        @error('emergency_address')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="emergencyContactNumber" class="form-label">Emergency Contact Number</label>
                                        <input type="text" class="form-control" id="phone" name="emergency_contact_number">
                                        @error('emergency_contact_number')
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
            const dob = new Date(this.value); // Get selected date of birth
            const today = new Date(); // Get current date
            let age = today.getFullYear() - dob.getFullYear(); // Calculate age based on the year
            const m = today.getMonth() - dob.getMonth(); // Check the month difference
            if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
                age--; // Adjust age if birthday hasn't occurred yet this year
            }
            document.getElementById('ageFc').value = age; // Set the calculated age in the "Age" field
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
