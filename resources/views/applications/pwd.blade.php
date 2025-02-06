<form action="/submit-application/pwd/{{ $service->id }}" method="POST" class="form-container" id="myForm">
    @csrf
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


    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="application_type">Application Type <span style="color: red;">*</span>:</label>
            <select name="application_type" id="application_type" class="form-control" required>
                <option value="" disabled selected>Select Application Type</option>
                <option value="New Application" {{ old('application_type', $application_type ?? ''
                    )==='New Application' ? 'selected' : '' }}>
                    New Applicant
                </option>
                <option value="Renewal" {{ old('application_type', $application_type ?? '' )==='Renewal'
                    ? 'selected' : '' }}>
                    Renewal
                </option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="pwd_number">PWD NUMBER(RR-PPMM-BBB-NNNNNNN)</label>
            <input type="text" name="pwd_number" class="form-control" placeholder="Persons with Disability Number"
                value="{{ old('pwd_number', $pwd_num ?? '') }}">
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
            <input type="date" name="appearance_date" id="appearance_date" class="form-control" required>
            @error('appearance_date')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-3">
            <label>Landline No.:</label>
            <input type="text" name="landline_no" class="form-control" placeholder="Landline No."
                value="{{ old('landline_no', $landline ?? '') }}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Blood Type <span style="color: red;">*</span></label>
            <input type="text" name="blood_type" class="form-control" placeholder="Blood Type"
                value="{{ old('blood_type', $blood_type ?? '') }}" required>
        </div>
        <div class="form-group col-md-6">
            <label for="gender">Sex <span style="color: red;">*</span></label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="" disabled selected>Select Sex</option>
                <option value="female" {{ old('gender', $sex ?? '' )==='female' ? 'selected' : '' }}>
                    Female
                </option>
                <option value="male" {{ old('gender', $sex ?? '' )==='male' ? 'selected' : '' }}>
                    Male
                </option>
            </select>
        </div>
    </div>


    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Date of Birth <span style="color: red;">*</span>:</label>
            <input type="date" name="date_of_birth" class="form-control" id="date_of_birth"
                value="{{ old('date_of_birth', Auth::user()->date_of_birth ?? '') }}" required>
        </div>
        <div class="form-group col-md-2">
            <label>Age <span style="color: red;">*</span></label>
            <input type="text" name="age" class="form-control" id="age" placeholder="Age" readonly
                value="{{ old('age', Auth::user()->age ?? '') }}">
        </div>
        <div class="form-group col-md-6">
            <label for="civil_status">Civil Status <span style="color: red;">*</span>:</label>
            <select name="civil_status" id="civil_status" class="form-control" required>
                <option value="" disabled selected>Select Status</option>
                <option value="Single" {{ old('civil_status', $civil_status ?? '' )==='Single' ? 'selected' : ''
                    }}>
                    Single
                </option>
                <option value="Separated" {{ old('civil_status', $civil_status ?? '' )==='Separated'
                    ? 'selected' : '' }}>
                    Separated
                </option>
                <option value="Cohabitation" {{ old('civil_status', $civil_status ?? '' )==='Cohabitation'
                    ? 'selected' : '' }}>
                    Cohabitation(Live in)
                </option>
                <option value="Married" {{ old('civil_status', $civil_status ?? '' )==='Married' ? 'selected'
                    : '' }}>
                    Married
                </option>
                <option value="Widowed" {{ old('civil_status', $civil_status ?? '' )==='Widowed' ? 'selected' : ''
                    }}>
                    Widowed
                </option>
                <option value="Divorced" {{ old('civil_status', $civil_status ?? '' )==='Divorced' ? 'selected' : ''
                    }}>
                    Divorced
                </option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="type_of_disability">Type of Disability:</label>
        <select name="type_of_disability" id="type_of_disability" class="form-control">
            <option value="" disabled selected>Select Disability</option>
            <option value="deaf" {{ old('type_of_disability', $type_of_disability ?? '' )==='deaf' ? 'selected'
                : '' }}>
                Deaf or Hard of Hearing
            </option>
            <option value="intellectual" {{ old('type_of_disability', $type_of_disability ?? ''
                )==='intellectual' ? 'selected' : '' }}>
                Intellectual Disability
            </option>
            <option value="learning" {{ old('type_of_disability', $type_of_disability ?? '' )==='learning'
                ? 'selected' : '' }}>
                Learning Disability
            </option>
            <option value="mental" {{ old('type_of_disability', $type_of_disability ?? '' )==='mental'
                ? 'selected' : '' }}>
                Mental Disability
            </option>
            <option value="physical" {{ old('type_of_disability', $type_of_disability ?? '' )==='physical'
                ? 'selected' : '' }}>
                Physical Disability(Orthopedic)
            </option>
            <option value="psychosocial" {{ old('type_of_disability', $type_of_disability ?? ''
                )==='psychosocial' ? 'selected' : '' }}>
                Psychosocial Disability
            </option>
            <option value="speech" {{ old('type_of_disability', $type_of_disability ?? '' )==='speech'
                ? 'selected' : '' }}>
                Speech and Language Impairment
            </option>
            <option value="visual" {{ old('type_of_disability', $type_of_disability ?? '' )==='visual'
                ? 'selected' : '' }}>
                Visual Disability
            </option>
            <option value="cancer" {{ old('type_of_disability', $type_of_disability ?? '' )==='cancer'
                ? 'selected' : '' }}>
                Cancer (RA11215)
            </option>
            <option value="rare_disease" {{ old('type_of_disability', $type_of_disability ?? ''
                )==='rare_disease' ? 'selected' : '' }}>
                Rare Disease(RA10747)
            </option>
        </select>
    </div>

    <div class="form-group">
        <label>Cause of Disability:</label>
        <div>
            <label>
                <input type="radio" name="cause_of_disability" value="congenital" {{ old('cause_of_disability',
                    $cause_of_disability ?? '' )==='congenital' ? 'checked' : '' }} onclick="toggleFields()">
                Congenital
            </label>
            <label style="margin-left: 20px;">
                <input type="radio" name="cause_of_disability" value="acquired" {{ old('cause_of_disability',
                    $cause_of_disability ?? '' )==='acquired' ? 'checked' : '' }} onclick="toggleFields()">
                Acquired
            </label>
        </div>
    </div>

    <!-- Congenital Only Fields -->
    <div class="form-group" id="congenitalFields" style="display: none;">
        <label for="congenital_inborn">Congenital or Inborn:</label>
        <select name="congenital_inborn" id="congenital_inborn" class="form-control"
            onchange="toggleSpecifyCongenital()">
            <option value="" disabled>Select Status</option>
            <option value="autism" {{ old('congenital_inborn', $congenital_or_inborn ?? '' )==='autism'
                ? 'selected' : '' }}>
                Autism</option>
            <option value="adhd" {{ old('congenital_inborn', $congenital_or_inborn ?? '' )==='adhd'
                ? 'selected' : '' }}>
                ADHD</option>
            <option value="cerebral" {{ old('congenital_inborn', $congenital_or_inborn ?? '' )==='cerebral'
                ? 'selected' : '' }}>
                Cerebral Palsy</option>
            <option value="down_syndrome" {{ old('congenital_inborn', $congenital_or_inborn ?? ''
                )==='down_syndrome' ? 'selected' : '' }}>
                Down Syndrome</option>
            <option value="others" {{ old('congenital_inborn', $congenital_or_inborn ?? '' )==='others'
                ? 'selected' : '' }}>
                Others (Specify)</option>
        </select>
    </div>

    <div class="form-group" id="specifyCongenital" style="display: none;">
        <label for="other_congenital_inborn">Please specify:</label>
        <input type="text" name="other_congenital_inborn"
            id="other_congenital_inborn" class="form-control"
            value="{{ old('other_congenital_inborn', $specify_cause_of_disability_congenital ?? '') }}"
            placeholder="Specify Cause of Disability (Congenital)">
    </div>

    <!-- Acquired Only Fields -->
    <div class="form-group" id="acquiredFields" style="display: none;">
        <label for="acquired">Acquired Conditions:</label>
        <select name="acquired" id="acquired" class="form-control" onchange="toggleSpecifyAcquired()">
            <option value="" disabled>Select Status</option>
            <option value="chronic" {{ old('acquired', $for_acquired ?? '' )==='chronic' ? 'selected' : ''
                }}>
                Chronic Illness</option>
            <option value="injury" {{ old('acquired', $for_acquired ?? '' )==='injury' ? 'selected' : '' }}>
                Injury</option>
            <option value="others" {{ old('acquired', $for_acquired ?? '' )==='others' ? 'selected' : '' }}>
                Others (Specify)</option>
        </select>
    </div>

    <div class="form-group" id="specifyAcquired" style="display: none;">
        <label for="other_acquired">Please specify:</label>
        <input type="text" name="other_acquired" id="other_acquired"
            class="form-control"
            value="{{ old('other_acquired', $specify_cause_of_disability_acquired ?? '') }}"
            placeholder="Specify Cause of Disability (Acquired)">
    </div>



    <div class="form-group">
        <h5><strong>RESIDENCE ADDRESS</strong></h5>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label>House No. and Street <span style="color: red;">*</span></label>
            <input type="text" name="house_no_and_street" class="form-control" placeholder="House No. and Street"
                value="{{ old('house_no_and_street', $street ?? '') }}" required>
        </div>

        <div class="form-group col-md-3">
            <label>Barangay <span style="color: red;">*</span></label>
            <select name="barangay" id="" class="form-control">
                <option value="" hidden selected>Select Barangay</option>
                <option value="" disabled>Select Barangay</option>
                @foreach (\App\Models\Barangay::all() as $barangay)
                <option value="{{ $barangay->id }}" {{ Auth::user()->barangay_id == $barangay->id ?
                    'selected' : '' }}>{{ $barangay->name }}</option>
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
                <option value="none" {{ old('educational_attainment', $educational_attainment ?? '' )==='none'
                    ? 'selected' : '' }}>
                    None
                </option>
                <option value="kindergarten" {{ old('educational_attainment', $educational_attainment ?? ''
                    )==='kindergarten' ? 'selected' : '' }}>
                    Kindergarten
                </option>
                <option value="elementary" {{ old('educational_attainment', $educational_attainment ?? ''
                    )==='elementary' ? 'selected' : '' }}>
                    Elementary
                </option>
                <option value="junior_high" {{ old('educational_attainment', $educational_attainment ?? ''
                    )==='junior_high' ? 'selected' : '' }}>
                    Junior High School
                </option>
                <option value="senior_high" {{ old('educational_attainment', $educational_attainment ?? ''
                    )==='senior_high' ? 'selected' : '' }}>
                    Senior High School
                </option>
                <option value="college" {{ old('educational_attainment', $educational_attainment ?? ''
                    )==='college' ? 'selected' : '' }}>
                    College
                </option>
                <option value="vocational" {{ old('educational_attainment', $educational_attainment ?? ''
                    )==='vocational' ? 'selected' : '' }}>
                    Vocational
                </option>
                <option value="post_graduate" {{ old('educational_attainment', $educational_attainment ?? ''
                    )==='post_graduate' ? 'selected' : '' }}>
                    Post Graduate
                </option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="occupation">Occupation:</label>
            <select name="occupation" id="occupation" class="form-control">

                <option value="" disabled selected>Select Types</option>
                <option value="manager" {{ old('occupation', $occupation_pwd ?? '' )==='manager'
                    ? 'selected' : '' }}>
                    Managers
                </option>
                <option value="professional" {{ old('occupation', $occupation_pwd ?? '' )==='professional'
                    ? 'selected' : '' }}>
                    Professionals
                </option>
                <option value="technicians" {{ old('occupation', $occupation_pwd ?? '' )==='technicians'
                    ? 'selected' : '' }}>
                    Technicians and Associate Professionals
                </option>
                <option value="clerical" {{ old('occupation', $occupation_pwd ?? '' )==='clerical'
                    ? 'selected' : '' }}>
                    Clerical Support Workers
                </option>
                <option value="service_and_sales" {{ old('occupation', $occupation_pwd ?? ''
                    )==='service_and_sales' ? 'selected' : '' }}>
                    Service and Sales Workers
                </option>
                <option value="skilled_agri" {{ old('occupation', $occupation_pwd ?? '' )==='skilled_agri'
                    ? 'selected' : '' }}>
                    Skilled Agricultural, Forestry and Fishery Workers
                </option>
                <option value="craft" {{ old('occupation', $occupation_pwd ?? '' )==='craft' ? 'selected'
                    : '' }}>
                    Craft and Related Trade Workers
                </option>
                <option value="plant_and_machine" {{ old('occupation', $occupation_pwd ?? ''
                    )==='plant_and_machine' ? 'selected' : '' }}>
                    Plant and Machine Operators and Assemblers
                </option>
                <option value="elementary_occupation" {{ old('occupation', $occupation_pwd ?? ''
                    )==='elementary_occupation' ? 'selected' : '' }}>
                    Elementary Occupations
                </option>
                <option value="armed_forces" {{ old('occupation', $occupation_pwd ?? '' )==='armed_forces'
                    ? 'selected' : '' }}>
                    Armed Forces Occupations
                </option>
                <option value="others" {{ old('occupation', $occupation_pwd ?? '' )==='others' ? 'selected'
                    : '' }}>
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
                <option value="employed" {{ old('status_of_employment', $status_of_employment ?? ''
                    )==='employed' ? 'selected' : '' }}>
                    Employed
                </option>
                <option value="unemployed" {{ old('status_of_employment', $status_of_employment ?? ''
                    )==='unemployed' ? 'selected' : '' }}>
                    Unemployed
                </option>
                <option value="self_employed" {{ old('status_of_employment', $status_of_employment ?? ''
                    )==='self_employed' ? 'selected' : '' }}>
                    Self-Employed
                </option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="category_of_employment">Category of Employment:</label>
            <select name="category_of_employment" id="category_of_employment" class="form-control">
                <option value="" disabled selected>Select Category</option>
                <option value="government" {{ old('category_of_employment', $category_of_employment ?? ''
                    )==='government' ? 'selected' : '' }}>
                    Government
                </option>
                <option value="private" {{ old('category_of_employment', $category_of_employment ?? ''
                    )==='private' ? 'selected' : '' }}>
                    Private
                </option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="types_of_employment">Types of Employment:</label>
            <select name="types_of_employment" id="types_of_employment" class="form-control">
                <option value="" disabled selected>Select Types</option>
                <option value="Permanent Or Regular" {{ old('types_of_employment', $types_of_employment ?? ''
                    )==='Permanent Or Regular' ? 'selected' : '' }}>
                    Permanent or Regular
                </option>
                <option value="Seasonal" {{ old('types_of_employment', $types_of_employment ?? '' )==='Seasonal'
                    ? 'selected' : '' }}>
                    Seasonal
                </option>
                <option value="Casual" {{ old('types_of_employment', $types_of_employment ?? '' )==='Casual'
                    ? 'selected' : '' }}>
                    Casual
                </option>
                <option value="Emergency" {{ old('types_of_employment', $types_of_employment ?? ''
                    )==='Emergency' ? 'selected' : '' }}>
                    Emergency
                </option>
            </select>
        </div>
    </div>




    <div class="form-group">
        <h5><strong>ORGANIZATION INFORMATION</strong></h5>
    </div>

    <div class="form-row">
        <div class="form-group col-md-2">
            <label>Organization Affiliated:</label>
            <input type="text" name="organization_affiliated" class="form-control" placeholder="Organization Affiliated"
                value="{{ old('organization_affiliated', $org_affiliate ?? '') }}">
        </div>
        <div class="form-group col-md-3">
            <label>Contact Person:</label>
            <input type="text" name="contact_person" class="form-control" placeholder="Contact Person"
                value="{{ old('contact_person', $org_contact_person ?? '') }}">
        </div>
        <div class="form-group col-md-3">
            <label>Office Address:</label>
            <input type="text" name="office_address" class="form-control" placeholder="Office Address"
                value="{{ old('office_address', $org_office ?? '') }}">
        </div>
        <div class="form-group col-md-2">
            <label>Tel. Nos.:</label>
            <input type="text" name="tel_no" class="form-control" placeholder="Tel. Nos."
                value="{{ old('tel_no', $org_tel_no ?? '') }}">
        </div>

        <div class="form-group col-md-2">
            <label>Email Address.:</label>
            <input type="email" name="email_address" class="form-control" placeholder="Email Address"
                value="{{ old('email_address', $email ?? '') }}">
        </div>
    </div>


    <div class="form-row">
        <div class="form-group col-md-3">
            <label>SSS NO.:</label>
            <input type="text" name="sss_no" class="form-control" placeholder="SSS"
                value="{{ old('sss_no', $sss_no ?? '') }}">
        </div>
        <div class="form-group col-md-3">
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
            <input type="text" name="father_phone" class="form-control" placeholder="Father's Contact Number"
                value="{{ old('father_phone', $father_contact ?? '') }}">
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
            <input type="text" name="mother_phone" class="form-control" placeholder="Mother's Contact Number"
                value="{{ old('mother_phone', $mother_contact ?? '') }}">
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
            <input type="text" name="guardian_phone" class="form-control"
                placeholder="Guardian's Contact Number"
                value="{{ old('guardian_phone', $guardian_contact ?? '') }}">
        </div>
    </div>





    <div class="form-group">
        <label for="accomplished_by">Accomplished by:</label>
        {{-- onchange="toggleRoleFields()" --}}
        <select readonly name="accomplished_by" id="role" class="form-control">
            <option value="" disabled selected>Select</option>
            <option value="applicant" {{ old('accomplished_by', $role ?? '' )==='applicant' ? 'selected' : '' }} selected>Applicant
            </option>
            {{-- <option value="guardian" {{ old('accomplished_by', $role ?? '' )==='guardian' ? 'selected' : '' }}>Guardian
            </option>
            <option value="representative" {{ old('accomplished_by', $role ?? '' )==='representative' ? 'selected' : '' }}>
                Representative</option> --}}
        </select>
    </div>

    <!-- Applicant Fields -->
    {{-- id="applicant_fields" --}}
    <div>
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
    </div>

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
            <input type="text" name="accb_first_name" id="accb_first_name"
                class="form-control"
                value="{{ old('accb_first_name', $representative_firstname ?? '') }}">
        </div>
        <div class="form-group">
            <label for="accb_middle_name">Representative Middle Name:</label>
            <input type="text" name="accb_middle_name" id="accb_middle_name"
                class="form-control"
                value="{{ old('accb_middle_name', $representative_middlename ?? '') }}">
        </div>
    </div> --}}


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
