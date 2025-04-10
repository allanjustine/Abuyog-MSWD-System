<form action="/submit-application/pwd/{{ $service->id }}" method="POST" class="form-container" id="myForm">
    @csrf
    <div class="d-flex justify-content-between align-items-center">
        <p style="color: red; font-weight: normal; margin-bottom: 20px;">
            <span style="font-weight: bold;">Please fill in all required fields marked with an asterisk (*)</span>
            Ensure the information is complete and accurate.
        </p>
        <a href="/myapplication" class="btn btn-light btn-icon"
            style="background-color: #6c757d; color: white; border: 1px solid #6c757d;">
            Back
        </a>
    </div>
    @if ($errors->any())
        <small class="text-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </small>
    @endif



    <div class="form-group" hidden>
        <h5><i class="fa-solid fa-user"></i> <strong>APPLICANT DETAILS</strong></h5>
    </div>
    <div class="form-row" hidden>
        <div class="form-group col-md-3">
            <label for="last_name">Last Name: <span style="color: red;">*</span></label>
            <input type="text" name="last_name" class="form-control" placeholder="Last Name"
                value="{{ Auth::user()->last_name }}" readonly>
        </div>

        <div class="form-group col-md-3">
            <label for="first_name">First Name: <span style="color: red;">*</span></label>
            <input type="text" name="first_name" class="form-control" placeholder="First Name"
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

    <div class="form-row" hidden>
        <div class="form-group col-md-3">
            <label>Date of Birth <span style="color: red;">*</span>:</label>
            <input type="date" name="date_of_birth" class="form-control" id="date_of_birth"
                value="{{ Auth::user()->date_of_birth->format('Y-m-d') }}" required>
        </div>
        <div class="form-group col-md-1">
            <label>Age <span style="color: red;">*</span></label>
            <input type="text" name="age" class="form-control" id="age" placeholder="Age" readonly
                value="{{ Auth::user()->age }}">
        </div>
        <div class="form-group col-md-2">
            <label>Phone <span style="color: red;">*</span>:</label>
            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ Auth::user()->phone }}"
                readonly>
        </div>
        <div class="form-group col-md-4">
            <label>Email:</label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ Auth::user()->email }}"
                readonly>
        </div>
        <div class="form-group col-md-2">
            <label>Gender <span style="color: red;">*</span></label>
            <input type="text" name="gender" class="form-control" placeholder="Gender"
                value="{{ Auth::user()->gender ?? '' }}" readonly>
        </div>
    </div>

    <div class="form-group" hidden>
        <h5><i class="fa-solid fa-map-marker-alt"></i> <strong>RESIDENCE ADDRESS</strong></h5>
    </div>

    <div class="form-row" hidden>
        <div class="form-group col-md-3">
            <label>House No. and Street <span style="color: red;">*</span></label>
            <input type="text" name="house_no_and_street" class="form-control" placeholder="House No. and Street"
                value="{{ old('house_no_and_street', Auth::user()?->basicInfo?->house_no_street) }}"
                required>
        </div>

        <div class="form-group col-md-3">
            <label>Barangay <span style="color: red;">*</span></label>
            <select name="barangay" id="" class="form-control">
                <option value="" hidden selected>Select Barangay</option>
                <option value="" disabled>Select Barangay</option>
                @foreach (\App\Models\Barangay::all() as $barangay)
                    <option value="{{ $barangay->id }}" {{ Auth::user()->barangay_id == $barangay->id ? 'selected' : '' }}>
                        {{ $barangay->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-2">
            <label>Municipality <span style="color: red;">*</span></label>
            <input type="text" name="municipality" class="form-control" placeholder="Municipality" value="{{ Auth::user()?->basicInfo?->municipality }}"
                required>
        </div>
        <div class="form-group col-md-2">
            <label>Province <span style="color: red;">*</span></label>
            <input type="text" name="province" class="form-control" placeholder="Province" value="{{ Auth::user()?->basicInfo?->province }}" required>
        </div>
        <div class="form-group col-md-2">
            <label>Region <span style="color: red;">*</span></label>
            <input type="text" name="region" class="form-control" placeholder="Region" value="{{ Auth::user()?->basicInfo?->region }}" required>
        </div>
    </div>

    <div class="form-group">
        <h5><i class="fa-solid fa-info-circle"></i> <strong>OTHER DETAILS</strong></h5>
    </div>

    <div class="form-row" hidden>
        <div class="form-group col-md-4">
            <label for="civil_status">Civil Status <span style="color: red;">*</span>:</label>
            <select name="civil_status" id="civil_status" class="form-control" required>
                <option value="" disabled selected>Select Status</option>
                <option value="Single" {{ old('civil_status', Auth::user()?->basicInfo?->civil_status) == 'Single' ? 'selected' : '' }}>
                    Single
                </option>
                <option value="Separated" {{ old('civil_status', Auth::user()?->basicInfo?->civil_status) == 'Separated' ? 'selected' : '' }}>
                    Separated
                </option>
                <option value="Cohabitation" {{ old('civil_status', Auth::user()?->basicInfo?->civil_status) == 'Cohabitation' ? 'selected' : '' }}>
                    Cohabitation (Live in)
                </option>
                <option value="Married" {{ old('civil_status', Auth::user()?->basicInfo?->civil_status) == 'Married' ? 'selected' : '' }}>
                    Married
                </option>
                <option value="Widowed" {{ old('civil_status', Auth::user()?->basicInfo?->civil_status) == 'Widowed' ? 'selected' : '' }}>
                    Widowed
                </option>
                <option value="Divorced" {{ old('civil_status', Auth::user()?->basicInfo?->civil_status) == 'Divorced' ? 'selected' : '' }}>
                    Divorced
                </option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label>Blood Type <span style="color: red;">*</span></label>
            <select name="blood_type" class="form-control" required>
                <option value="" disabled selected>Select Blood Type</option>
                <option value="A+" {{ old('blood_type', Auth::user()?->basicInfo?->blood_type) == 'A+' ? 'selected' : '' }}>A+</option>
                <option value="A-" {{ old('blood_type', Auth::user()?->basicInfo?->blood_type) == 'A-' ? 'selected' : '' }}>A-</option>
                <option value="B+" {{ old('blood_type', Auth::user()?->basicInfo?->blood_type) == 'B+' ? 'selected' : '' }}>B+</option>
                <option value="B-" {{ old('blood_type', Auth::user()?->basicInfo?->blood_type) == 'B-' ? 'selected' : '' }}>B-</option>
                <option value="AB+" {{ old('blood_type', Auth::user()?->basicInfo?->blood_type) == 'AB+' ? 'selected' : '' }}>AB+</option>
                <option value="AB-" {{ old('blood_type', Auth::user()?->basicInfo?->blood_type) == 'AB-' ? 'selected' : '' }}>AB-</option>
                <option value="O+" {{ old('blood_type', Auth::user()?->basicInfo?->blood_type) == 'O+' ? 'selected' : '' }}>O+</option>
                <option value="O-" {{ old('blood_type', Auth::user()?->basicInfo?->blood_type) == 'O-' ? 'selected' : '' }}>O-</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label>Landline No.:</label>
            <input type="text" name="landline_no" class="form-control" placeholder="Landline No."
                value="{{ old('landline_no', Auth::user()?->basicInfo?->land_line_no) }}">
        </div>
    </div>

    <div class="form-row" hidden>
        <div class="form-group col-md-6">
            <label for="educational_attainment">Educational Attainment <span style="color: red;">*</span></label>
            <select name="educational_attainment" id="educational_attainment" class="form-control" required>
                <option value="" disabled selected>Select Status</option>
                <option value="No Formal Education" {{ old('educational_attainment', Auth::user()?->basicInfo?->educational_attainment) === 'No Formal Education' ? 'selected' : '' }}>
                    None
                </option>
                <option value="Kindergarten" {{ old('educational_attainment', Auth::user()?->basicInfo?->educational_attainment) === 'Kindergarten' ? 'selected' : '' }}>
                    Kindergarten
                </option>
                <option value="Elementary" {{ old('educational_attainment', Auth::user()?->basicInfo?->educational_attainment) === 'Elementary' ? 'selected' : '' }}>
                    Elementary
                </option>
                <option value="High School" {{ old('educational_attainment', Auth::user()?->basicInfo?->educational_attainment) === 'High School' ? 'selected' : '' }}>
                    Junior High School
                </option>
                <option value="Senior High" {{ old('educational_attainment', Auth::user()?->basicInfo?->educational_attainment) === 'Senior High' ? 'selected' : '' }}>
                    Senior High School
                </option>
                <option value="College" {{ old('educational_attainment', Auth::user()?->basicInfo?->educational_attainment) === 'College' ? 'selected' : '' }}>
                    College
                </option>
                <option value="Vocational" {{ old('educational_attainment', Auth::user()?->basicInfo?->educational_attainment) === 'Vocational' ? 'selected' : '' }}>
                    Vocational
                </option>
                <option value="Post Graduate" {{ old('educational_attainment', Auth::user()?->basicInfo?->educational_attainment) === 'Post Graduate' ? 'selected' : '' }}>
                    Post Graduate
                </option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="occupation">Occupation:</label>
            <select name="occupation" id="occupation" class="form-control">

                <option value="" disabled selected>Select Types</option>
                <option value="Managers" {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Managers' ? 'selected' : '' }}>
                    Managers
                </option>
                <option value="Professionals" {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Professionals' ? 'selected' : '' }}>
                    Professionals
                </option>
                <option value="Technicians and Associate Professionals" {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Technicians and Associate Professionals' ? 'selected' : '' }}>
                    Technicians and Associate Professionals
                </option>
                <option value="Clerical Support Workers" {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Clerical Support Workers' ? 'selected' : '' }}>
                    Clerical Support Workers
                </option>
                <option value="Service and Sales Workers" {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Service and Sales Workers' ? 'selected' : '' }}>
                    Service and Sales Workers
                </option>
                <option value="Skilled Agricultural, Forestry and Fishery Workers" {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Skilled Agricultural, Forestry and Fishery Workers'
    ? 'selected'
    : '' }}>
                    Skilled Agricultural, Forestry and Fishery Workers
                </option>
                <option value="Craft and Related Trade Workers" {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Craft and Related Trade Workers' ? 'selected' : '' }}>
                    Craft and Related Trade Workers
                </option>
                <option value="Plant and Machine Operators and Assemblers" {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Plant and Machine Operators and Assemblers' ? 'selected' : '' }}>
                    Plant and Machine Operators and Assemblers
                </option>
                <option value="Elementary Occupations" {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Elementary Occupations' ? 'selected' : '' }}>
                    Elementary Occupations
                </option>
                <option value="Armed Forces Occupations" {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Armed Forces Occupations' ? 'selected' : '' }}>
                    Armed Forces Occupations
                </option>
                <option value="Others" {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Others' ? 'selected' : '' }}>
                    Others (Specify)
                </option>
            </select>
        </div>
        <div class="form-group" id="other_occupation" style="display: none;">
            <label for="other_occupation">Please specify:</label>
            <input type="text" name="other_occupation" id="specify_occupation" class="form-control"
                value="{{ old('other_occupation', $specify_occupation ?? '') }}" placeholder="Specify Others">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="status_of_employment">Status of Employment <span style="color: red;">*</span></label>
            <select name="status_of_employment" id="status_of_employment" class="form-control" required>
                <option value="" disabled selected>Select Status</option>
                <option value="Employed" {{ old('status_of_employment', Auth::user()?->basicInfo?->status_of_employment) === 'Employed' ? 'selected' : '' }}>
                    Employed
                </option>
                <option value="Unemployed" {{ old('status_of_employment', Auth::user()?->basicInfo?->status_of_employment) === 'Unemployed' ? 'selected' : '' }}>
                    Unemployed
                </option>
                <option value="Self-Employed" {{ old('status_of_employment', Auth::user()?->basicInfo?->status_of_employment) === 'Self-Employed' ? 'selected' : '' }}>
                    Self-Employed
                </option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="category_of_employment">Category of Employment:</label>
            <select name="category_of_employment" id="category_of_employment" class="form-control">
                <option value="" disabled selected>Select Category</option>
                <option value="Government" {{ old('category_of_employment', Auth::user()?->basicInfo?->category_of_employment) === 'Government' ? 'selected' : '' }}>
                    Government
                </option>
                <option value="Private" {{ old('category_of_employment', Auth::user()?->basicInfo?->category_of_employment) === 'Private' ? 'selected' : '' }}>
                    Private
                </option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="types_of_employment">Types of Employment:</label>
            <select name="types_of_employment" id="types_of_employment" class="form-control">
                <option value="" disabled selected>Select Types</option>
                <option value="Permanent Or Regular" {{ old('types_of_employment', Auth::user()?->basicInfo?->types_of_employment) === 'Permanent Or Regular' ? 'selected' : '' }}>
                    Permanent or Regular
                </option>
                <option value="Seasonal" {{ old('types_of_employment', Auth::user()?->basicInfo?->types_of_employment) === 'Seasonal' ? 'selected' : '' }}>
                    Seasonal
                </option>
                <option value="Casual" {{ old('types_of_employment', Auth::user()?->basicInfo?->types_of_employment) === 'Casual' ? 'selected' : '' }}>
                    Casual
                </option>
                <option value="Emergency" {{ old('types_of_employment', Auth::user()?->basicInfo?->types_of_employment) === 'Emergency' ? 'selected' : '' }}>
                    Emergency
                </option>
            </select>
        </div>
    </div>





    <!-- <div class="form-group col-md-6">
            <label for="gender">Sex <span style="color: red;">*</span></label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="" disabled selected>Select Sex</option>
                <option value="female" {{ old('gender', $sex ?? '') === 'female' ? 'selected' : '' }}>
                    Female
                </option>
                <option value="male" {{ old('gender', $sex ?? '') === 'male' ? 'selected' : '' }}>
                    Male
                </option>
            </select>
        </div> -->



    <div class="form-group">
        <h5><i class="fas fa-wheelchair"></i> <strong>DISABILITY DETAILS</strong></h5>
    </div>


    <div class="form-group">
        <label for="type_of_disability">Type of Disability: <span style="color: red;">*</span></label>
        <select name="type_of_disability" id="type_of_disability" class="form-control">
            <option value="" disabled selected>Select Disability</option>
            <option value="deaf" {{ old('type_of_disability', Auth::user()?->basicInfo?->type_of_disability) === 'deaf' ? 'selected' : '' }}>
                Deaf or Hard of Hearing
            </option>
            <option value="Intellectual Disability" {{ old('type_of_disability', Auth::user()?->basicInfo?->type_of_disability) === 'Intellectual Disability' ? 'selected' : '' }}>
                Intellectual Disability
            </option>
            <option value="Learning Disability" {{ old('type_of_disability', Auth::user()?->basicInfo?->type_of_disability) === 'Learning Disability' ? 'selected' : '' }}>
                Learning Disability
            </option>
            <option value="Mental Disability" {{ old('type_of_disability', Auth::user()?->basicInfo?->type_of_disability) === 'Mental Disability' ? 'selected' : '' }}>
                Mental Disability
            </option>
            <option value="Physical Disability (Orthopedic)" {{ old('type_of_disability', Auth::user()?->basicInfo?->type_of_disability) === 'Physical Disability (Orthopedic)'
    ? 'selected'
    : '' }}>
                Physical Disability(Orthopedic)
            </option>
            <option value="Speech and Language Impairment" {{ old('type_of_disability', Auth::user()?->basicInfo?->type_of_disability) === 'Speech and Language Impairment' ? 'selected' : '' }}>
                Psychosocial Disability
            </option>
            <option value="Visual Disability" {{ old('type_of_disability', Auth::user()?->basicInfo?->type_of_disability) === 'Visual Disability' ? 'selected' : '' }}>
                Speech and Language Impairment
            </option>
            <option value="Visual Disability" {{ old('type_of_disability', Auth::user()?->basicInfo?->type_of_disability) === 'Visual Disability' ? 'selected' : '' }}>
                Visual Disability
            </option>
            <option value="Cancer (RA11215)" {{ old('type_of_disability', Auth::user()?->basicInfo?->type_of_disability) === 'Cancer (RA11215)' ? 'selected' : '' }}>
                Cancer (RA11215)
            </option>
            <option value="Rare Disease (RA10747)" {{ old('type_of_disability', Auth::user()?->basicInfo?->type_of_disability) === 'Rare Disease (RA10747)' ? 'selected' : '' }}>
                Rare Disease(RA10747)
            </option>
        </select>
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
            <label>Cause of Disability: <span style="color: red;">*</span></label>
            <div>
                <label>
                    <input type="radio" name="cause_of_disability" value="Congenital/Inborn" {{ old('cause_of_disability', Auth::user()?->basicInfo?->cause_of_disability) === 'Congenital/Inborn' ? 'checked' : '' }} onclick="toggleFields()">
                    Congenital
                </label>
                <label style="margin-left: 20px;">
                    <input type="radio" name="cause_of_disability" value="Acquired" {{ old('cause_of_disability', Auth::user()?->basicInfo?->cause_of_disability) === 'Acquired' ? 'checked' : '' }} onclick="toggleFields()">
                    Acquired
                </label>
            </div>
        </div>
        <!-- Congenital Only Fields -->
        <div class="form-group col-md-9" id="congenitalFields" style="display: none;">
            <label for="congenital_inborn">Congenital or Inborn: <span style="color: red;">*</span></label>
            <select name="congenital_inborn" id="congenital_inborn" class="form-control"
                onchange="toggleSpecifyCongenital()">
                <option value="" disabled>Select Status</option>
                <option value="autism" {{ old('congenital_inborn', $congenital_or_inborn ?? '') === 'autism' ? 'selected' : '' }}>
                    Autism</option>
                <option value="adhd" {{ old('congenital_inborn', $congenital_or_inborn ?? '') === 'adhd' ? 'selected' : '' }}>
                    ADHD</option>
                <option value="cerebral" {{ old('congenital_inborn', $congenital_or_inborn ?? '') === 'cerebral' ? 'selected' : '' }}>
                    Cerebral Palsy</option>
                <option value="down_syndrome" {{ old('congenital_inborn', $congenital_or_inborn ?? '') === 'down_syndrome' ? 'selected' : '' }}>
                    Down Syndrome</option>
                <option value="Others" {{ old('congenital_inborn', $congenital_or_inborn ?? '') === 'others' ? 'selected' : '' }}>
                    Others (Specify)</option>
            </select>
        </div>
        <!-- Acquired Only Fields -->
        <div class="form-group col-md-9" id="acquiredFields" style="display: none;">
            <label for="acquired">Acquired Conditions: <span style="color: red;">*</span></label>
            <select name="acquired" id="acquired" class="form-control" onchange="toggleSpecifyAcquired()">
                <option value="" disabled>Select Status</option>
                <option value="chronic" {{ old('acquired', $for_acquired ?? '') === 'chronic' ? 'selected' : '' }}>
                    Chronic Illness</option>
                <option value="injury" {{ old('acquired', $for_acquired ?? '') === 'injury' ? 'selected' : '' }}>
                    Injury</option>
                <option value="Others" {{ old('acquired', $for_acquired ?? '') === 'others' ? 'selected' : '' }}>
                    Others (Specify)</option>
            </select>
        </div>
    </div>

    <div class="form-group" id="specifyCongenital" style="display: none;">
        <label for="other_congenital_inborn">Please specify:</label>
        <input type="text" name="other_congenital_inborn" id="other_congenital_inborn" class="form-control"
            value="{{ old('other_congenital_inborn', $specify_cause_of_disability_congenital ?? '') }}"
            placeholder="Specify Cause of Disability (Congenital)">
    </div>

    <div class="form-group" id="specifyAcquired" style="display: none;">
        <label for="other_acquired">Please specify:</label>
        <input type="text" name="other_acquired" id="other_acquired" class="form-control"
            value="{{ old('other_acquired', $specify_cause_of_disability_acquired ?? '') }}"
            placeholder="Specify Cause of Disability (Acquired)">
    </div>

    <div class="form-group">
        <h5><i class="fa-solid fa-clipboard-list"></i> <strong>APPLICATION DETAILS</strong></h5>
    </div>

    <div class="form-row">
        <div class="form-group col-md-3" id="applicationTypeDiv">
            <label for="application_type">Application Type <span style="color: red;">*</span>:</label>
            <select name="application_type" id="application_type" class="form-control" required>
                <option value="" disabled selected>Select Application Type</option>
                <option value="New Applicant" {{ old('application_type', Auth::user()?->basicInfo?->pwd_status) === 'New Applicant' ? 'selected' : '' }}>
                    New Applicant
                </option>
                <option value="Renewal" {{ old('application_type', Auth::user()?->basicInfo?->pwd_status) === 'Renewal' ? 'selected' : '' }}>
                    Renewal
                </option>
            </select>
        </div>

        <div class="form-group col-md-6" id="pwdNumberDiv">
            <label for="pwd_number">PWD NUMBER(RR-PPMM-BBB-NNNNNNN)</label>
            <input type="text" name="pwd_number" class="form-control" placeholder="Persons with Disability Number"
                value="{{ old('pwd_number', Auth::user()?->basicInfo?->pwd_number) }}">
            @error('pwd_number')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-3" id="dateForPersonalAppearanceDiv">
            <label>Date for Personal Appearance <span style="color: red;">*</span>:</label>
            <input type="date" name="appearance_date" id="appearance_date" class="form-control" required>
            @error('appearance_date')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

    </div>



    <div class="form-group">
        <h5><i class="fas fa-building"></i> <strong>ORGANIZATION INFORMATION</strong></h5>
    </div>



    <div class="form-row">
        <div class="form-group col-md-2">
            <label>Organization Affiliated:</label>
            <input type="text" name="organization_affiliated" class="form-control" placeholder="Organization Affiliated"
                value="{{ old('organization_affiliated', Auth::user()?->basicInfo?->organization_affiliated) }}">
        </div>
        <div class="form-group col-md-3">
            <label>Contact Person:</label>
            <input type="text" name="contact_person" class="form-control" placeholder="Contact Person"
                value="{{ old('contact_person', Auth::user()?->basicInfo?->contact_person) }}">
        </div>
        <div class="form-group col-md-3">
            <label>Office Address:</label>
            <input type="text" name="office_address" class="form-control" placeholder="Office Address"
                value="{{ old('office_address', Auth::user()?->basicInfo?->office_address) }}">
        </div>
        <div class="form-group col-md-2">
            <label>Tel. Nos.:</label>
            <input type="text" name="tel_no" class="form-control" placeholder="Tel. Nos."
                value="{{ old('tel_no', Auth::user()?->basicInfo?->tel_no) }}">
        </div>

        <div class="form-group col-md-2">
            <label>Email Address.:</label>
            <input type="email" name="email_address" class="form-control" placeholder="Email Address"
                value="{{ old('email_address', Auth::user()?->email) }}">
        </div>
    </div>


    <div class="form-row">
        <div class="form-group col-md-3">
            <label>SSS NO.:</label>
            <input type="text" name="sss_no" class="form-control" placeholder="SSS"
                value="{{ old('sss_no', Auth::user()?->basicInfo?->sss_no) }}">
        </div>
        <div class="form-group col-md-3">
            <label>GSIS NO.:</label>
            <input type="text" name="gsis_no" class="form-control" placeholder="GSIS"
                value="{{ old('gsis_no', Auth::user()?->basicInfo?->gsis_no) }}">
        </div>
        <div class="form-group col-md-2">
            <label>PAG-IBIG NO.:</label>
            <input type="text" name="pag_ibig_no" class="form-control" placeholder="PAG-IBIG"
                value="{{ old('pag_ibig_no', Auth::user()?->basicInfo?->pag_ibig_no) }}">
        </div>
        <div class="form-group col-md-2">
            <label>PSN NO.:</label>
            <input type="text" name="psn_no" class="form-control" placeholder="PSN"
                value="{{ old('psn_no', Auth::user()?->basicInfo?->psn_no) }}">
        </div>
        <div class="form-group col-md-2">
            <label>PhilHealth NO.:</label>
            <input type="text" name="philhealth_no" class="form-control" placeholder="PhilHealth"
                value="{{ old('philhealth_no', Auth::user()?->basicInfo?->philhealth_no) }}">
        </div>
    </div>


    <div class="form-group">
        <h5><i class="fa-solid fa-users"></i> <strong>FAMILY BACKGROUND</strong></h5>
    </div>

    <label><strong>FATHER'S NAME</strong></label>
    <div class="form-row">

        <!-- Father Fields -->
        <div class="form-group col-md-4">
            <label>Name:</label>
            <input type="text" name="father_name" class="form-control" placeholder="Father's Complete Name"
                value="{{ old('father_name', Auth::user()?->basicInfo?->father_name ?? '') }}">
        </div>
        <div class="form-group col-md-4">
            <label>Occupation:</label>
            <input type="text" name="father_occupation" class="form-control" placeholder="Father's Occupation"
                value="{{ old('father_occupation', Auth::user()?->basicInfo?->father_occupation ?? '') }}">
        </div>
        <div class="form-group col-md-4">
            <label>Contact No.:</label>
            <input type="text" name="father_phone" class="form-control" placeholder="Father's Contact Number"
                value="{{ old('father_phone', Auth::user()?->basicInfo?->father_contact ?? '') }}">
        </div>
    </div>

    <label><strong>MOTHER'S NAME</strong></label>
    <div class="form-row">
        <!-- Mother Fields -->
        <div class="form-group col-md-4">
            <label>Name:</label>
            <input type="text" name="mother_name" class="form-control" placeholder="Mother's Complete Name"
                value="{{ old('mother_name', Auth::user()?->basicInfo?->mother_name ?? '') }}">
        </div>
        <div class="form-group col-md-4">
            <label>Occupation:</label>
            <input type="text" name="mother_occupation" class="form-control" placeholder="Mother's Occupation"
                value="{{ old('mother_occupation', Auth::user()?->basicInfo?->mother_occupation ?? '') }}">
        </div>
        <div class="form-group col-md-4">
            <label>Contact No.:</label>
            <input type="text" name="mother_phone" class="form-control" placeholder="Mother's Contact Number"
                value="{{ old('mother_phone', Auth::user()?->basicInfo?->mother_contact ?? '') }}">
        </div>
    </div>

    <label><strong>GUARDIAN'S NAME</strong></label>
    <div class="form-row">
        <!-- Guardian Fields -->
        <div class="form-group col-md-4">
            <label>Name:</label>
            <input type="text" name="guardian_name" class="form-control" placeholder="Guardian's Complete Name"
                value="{{ old('guardian_name', Auth::user()?->basicInfo?->guardian_name ?? '') }}">
        </div>
        <div class="form-group col-md-4">
            <label>Occupation:</label>
            <input type="text" name="guardian_occupation" class="form-control" placeholder="Guardian's Occupation"
                value="{{ old('guardian_occupation', Auth::user()?->basicInfo?->guardian_occupation ?? '') }}">
        </div>
        <div class="form-group col-md-4">
            <label>Contact No.:</label>
            <input type="text" name="guardian_phone" class="form-control" placeholder="Guardian's Contact Number"
                value="{{ old('guardian_phone', Auth::user()?->basicInfo?->guardian_contact ?? '') }}">
        </div>
    </div>





    <!-- <div class="form-group">
        <label for="accomplished_by">Accomplished by:</label>
        {{-- onchange="toggleRoleFields()" --}}
        <select readonly name="accomplished_by" id="role" class="form-control">
            <option value="" disabled selected>Select</option>
            <option value="applicant" {{ old('accomplished_by', $role ?? '') === 'applicant' ? 'selected' : '' }}
                selected>Applicant
            </option>
            {{-- <option value="guardian" {{ old('accomplished_by', $role ?? '' )==='guardian' ? 'selected' : '' }}>
                Guardian
            </option>
            <option value="representative" {{ old('accomplished_by', $role ?? '' )==='representative' ? 'selected' : ''
                }}>
                Representative</option> --}}
        </select>
    </div> -->

    <!-- Applicant Fields -->
    {{-- id="applicant_fields" --}}
    <!-- <div>
        <div class="form-group">
            <label for="accb_last_name">Applicant Last Name:</label>
            <input type="text" name="accb_last_name" id="accb_last_name" class="form-control"
                value="{{ old('accb_last_name', Auth::user()->last_name ?? '') }}" readonly>
        </div>
        <div class="form-group">
            <label for="accb_first_name">Applicant First Name:</label>
            <input type="text" name="accb_first_name" id="accb_first_name" class="form-control"
                value="{{ old('accb_first_name', Auth::user()->first_name ?? '') }}" readonly>
        </div>
        <div class="form-group">
            <label for="accb_middle_name">Applicant Middle Name:</label>
            <input type="text" name="accb_middle_name" id="accb_middle_name" class="form-control"
                value="{{ old('accb_middle_name', Auth::user()->middle_name ?? '') }}" readonly>
        </div>
    </div> -->

    {{-- <!-- Guardian Fields -->
    <div id="guardian_fields" style="display: none;">
        <div class="form-group">
            <label for="accb_last_name">Guardian Last Name:</label>
            <input type="text" name="accb_last_name" id="accb_last_name" class="form-control"
                value="{{ old('accb_last_name', $guardian_lastname ?? '') }}">
        </div>
        <div class="form-group">
            <label for="accb_first_name">Guardian First Name:</label>
            <input type="text" name="accb_first_name" id="accb_first_name" class="form-control"
                value="{{ old('accb_first_name', $guardian_firstname ?? '') }}">
        </div>
        <div class="form-group">
            <label for="accb_middle_name">Guardian Middle Name:</label>
            <input type="text" name="accb_middle_name" id="accb_middle_name" class="form-control"
                value="{{ old('accb_middle_name', $guardian_middlename ?? '') }}">
        </div>
    </div>

    <!-- Representative Fields -->
    <div id="representative_fields" style="display: none;">
        <div class="form-group">
            <label for="accb_last_name">Representative Last Name:</label>
            <input type="text" name="accb_last_name" id="accb_last_name" class="form-control"
                value="{{ old('accb_last_name', $representative_lastname ?? '') }}">
        </div>
        <div class="form-group">
            <label for="accb_first_name">Representative First Name:</label>
            <input type="text" name="accb_first_name" id="accb_first_name" class="form-control"
                value="{{ old('accb_first_name', $representative_firstname ?? '') }}">
        </div>
        <div class="form-group">
            <label for="accb_middle_name">Representative Middle Name:</label>
            <input type="text" name="accb_middle_name" id="accb_middle_name" class="form-control"
                value="{{ old('accb_middle_name', $representative_middlename ?? '') }}">
        </div>
    </div> --}}


    <div class="mt-3 d-flex flex-column align-items-end">
        <div class="mb-2 form-check">
            <input type="checkbox" name="save_for_next_application" class="form-check-input"
                id="save_for_next_application" {{ session()->has('saved_application_data') ? 'checked' : '' }}>
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
        const occupation = document.getElementById('occupation');
        const otherOccupation = document.getElementById('other_occupation');
        const congenital = document.getElementById('congenitalFields');
        const otherCongenital = document.getElementById('specifyCongenital');
        const acquired = document.getElementById('acquiredFields');
        const otherAcquired = document.getElementById('specifyAcquired');

        occupation?.addEventListener('change', (e) => {
            const value = e.target.value;

            if(value == "Others") {
                otherOccupation.style.display = "block";
            } else {
                otherOccupation.style.display = "none";
            }
        });
        congenital?.addEventListener('change', (e) => {
            const value = e.target.value;
            console.log(value);

            if(value == "Others") {
                otherCongenital.style.display = "block";
            } else {
                otherCongenital.style.display = "none";
            }
        });
        acquired?.addEventListener('change', (e) => {
            const value = e.target.value;
            console.log(value);

            if(value == "Others") {
                otherAcquired.style.display = "block";
            } else {
                otherAcquired.style.display = "none";
            }
        });
    });
</script>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let dateInput = document.getElementById("appearance_date");

        // Set the minimum date to today
        let today = new Date().toISOString().split("T")[0]; // Get today's date in YYYY-MM-DD format
        dateInput.setAttribute("min", today);

        dateInput.addEventListener("change", function () {
            let selectedDate = new Date(this.value);
            let day = selectedDate.getDay(); // 0 = Sunday, 6 = Saturday

            if (day === 0 || day === 6) {
                Swal.fire({
                    icon: "warning",
                    title: "Weekends not allowed!",
                    text: "You can only apply on weekdays (Monday to Friday).",
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "Okay"
                });

                // Reset the date input field
                this.value = "";
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const applicationType = document.getElementById('application_type');
        const applicationTypeDiv = document.getElementById('applicationTypeDiv');
        const dateForPersonalAppearanceDiv = document.getElementById('dateForPersonalAppearanceDiv');
        const pwdNumberDiv = document.getElementById('pwdNumberDiv');

        application_type.addEventListener("change", function (e) {
            const { value } = e.target;
            if(value === "New Applicant") {
                applicationTypeDiv.classList.replace("col-md-3", "col-md-6");
                dateForPersonalAppearanceDiv.classList.replace("col-md-3", "col-md-6");
                pwdNumberDiv.style.display = "none";
            } else {
                applicationTypeDiv.classList.replace("col-md-6", "col-md-3");
                dateForPersonalAppearanceDiv.classList.replace("col-md-6", "col-md-3");
                pwdNumberDiv.style.display = "block";
            }
        })
    })
</script>
