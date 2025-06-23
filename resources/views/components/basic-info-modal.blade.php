@if (!Auth::user()->basicInfo()->exists())
    <div class="modal-backdrop show" id="modalBackDrop"></div>
@endif
<div class="modal fade {{ !Auth::user()->basicInfo()->exists() ? ' show' : '' }}" id="staticBackdropLive"
    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel"
    aria-modal="true" role="dialog" @if (!Auth::user()->basicInfo()->exists()) style="display: block;" @endif>
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <form action="/update-or-create-basic-info" method="POST">
            @method('POST')
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailsModalLabel">Personal Information Details</h5>
                </div>
                <div class="modal-body" style="max-height: 75vh; overflow-y: auto;">
                    <!-- Basic Info -->

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Ops.!</strong> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <h3 class="mb-3 fw-bold fs-3"><i class="fas fa-sitemap"></i> Basic Information</h3>
                    <div class="mb-3 row">
                        {{--  <div class="col-md-6">
                            <label class="form-label">Place of Birth</label>
                            <input type="text" class="form-control" name="place_of_birth" placeholder="Birthplace"
                                value="{{ old('place_of_birth', Auth::user()?->basicInfo?->place_of_birth) }}">
                        </div>  --}}
                        <div class="col-md-6">
                            <label class="form-label">Place of Birth</label>
                            <input type="text" class="form-control" name="place_of_birth" placeholder="Birthplace"
                                value="{{ old('place_of_birth', strtoupper(Auth::user()?->basicInfo?->place_of_birth)) }}"
                                oninput="this.value = this.value.toUpperCase();">
                        </div>



                        {{--  <div class="col-md-6">
                            <label class="form-label">Place of Birth</label>
                            <input type="text" class="form-control" name="place_of_birth" value="Abuyog" readonly>

                        </div>  --}}

                        <div class="col-md-6">
                            <label class="form-label">House No./Street</label>
                            <input type="text" class="form-control" name="house_no_street"
                                placeholder="House No./Street"
                                value="{{ old('house_no_street', strtoupper(Auth::user()?->basicInfo?->house_no_street)) }}"
                                oninput="this.value = this.value.toUpperCase();">
                        </div>

                        {{--  <div class="col-md-4">
                            <label class="form-label">Municipality</label>
                            <input type="text" class="form-control" name="municipality" placeholder="Municipality"
                                value="{{ old('municipality', Auth::user()?->basicInfo?->municipality) }}">
                        </div>  --}}
                        <div class="col-md-4">
                            <label class="form-label">Municipality</label>
                            <input type="text" class="form-control" name="municipality" placeholder="Municipality"
                                value="ABUYOG" readonly>
                        </div>

                        {{--  <div class="col-md-4">
                            <label class="form-label">Province</label>
                            <input type="text" class="form-control" name="province" placeholder="Province"
                                value="{{ old('province', Auth::user()?->basicInfo?->province) }}">
                        </div>  --}}
                        <div class="col-md-4">
                            <label class="form-label">Province</label>
                            <input type="text" class="form-control" name="province" placeholder="Province"
                                value="LEYTE" readonly>
                        </div>

                        {{--  <div class="col-md-4">
                            <label class="form-label">Region</label>
                            <input type="text" class="form-control" name="region" placeholder="Region"
                                value="{{ old('region', Auth::user()?->basicInfo?->region) }}">
                        </div>  --}}
                        <div class="col-md-4">
                            <label class="form-label">Region</label>
                            <input type="text" class="form-control" name="region" placeholder="Region"
                                value="8" readonly>
                        </div>

                    </div>

                    <!-- Personal Info -->
                    <h3 class="mt-4 mb-3 fw-bold fs-3"><i class="fa-solid fa-shield"></i> Personal & Civil Details</h3>
                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label class="form-label">Religion</label>
                            <select name="religion" class="form-control" style="text-transform: uppercase;">
                                <option value="" disabled selected>Select Religion</option>
                                <option value="Christianity"
                                    {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Christianity' ? 'selected' : '' }}>
                                    Christianity</option>
                                <option value="Roman Catholic"
                                    {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Roman Catholic' ? 'selected' : '' }}>
                                    Roman Catholic</option>
                                <option value="Protestant"
                                    {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Protestant' ? 'selected' : '' }}>
                                    Protestant</option>
                                <option value="Islam"
                                    {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Islam' ? 'selected' : '' }}>
                                    Islam</option>
                                <option value="Hinduism"
                                    {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Hinduism' ? 'selected' : '' }}>
                                    Hinduism</option>
                                <option value="Buddhism"
                                    {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Buddhism' ? 'selected' : '' }}>
                                    Buddhism</option>
                                <option value="Judaism"
                                    {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Judaism' ? 'selected' : '' }}>
                                    Judaism</option>
                                <option value="Sikhism"
                                    {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Sikhism' ? 'selected' : '' }}>
                                    Sikhism</option>
                                <option value="Baha'i"
                                    {{ old('religion', Auth::user()?->basicInfo?->religion) == "Baha'i" ? 'selected' : '' }}>
                                    Bahai</option>
                                <option value="Taoism"
                                    {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Taoism' ? 'selected' : '' }}>
                                    Taoism</option>
                                <option value="Shinto"
                                    {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Shinto' ? 'selected' : '' }}>
                                    Shinto</option>
                                <option value="Agnostic"
                                    {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Agnostic' ? 'selected' : '' }}>
                                    Agnostic</option>
                                <option value="Atheist"
                                    {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Atheist' ? 'selected' : '' }}>
                                    Atheist</option>
                                <option value="Other"
                                    {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Other' ? 'selected' : '' }}>
                                    Other</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Civil Status</label>
                            <select class="form-control" style="text-transform: uppercase;" name="civil_status">
                                <option selected disabled>Select status</option>
                                <option
                                    {{ old('civil_status', Auth::user()?->basicInfo?->civil_status) == 'Single' ? 'selected' : '' }}>
                                    Single</option>
                                <option
                                    {{ old('civil_status', Auth::user()?->basicInfo?->civil_status) == 'Married' ? 'selected' : '' }}>
                                    Married</option>
                                <option
                                    {{ old('civil_status', Auth::user()?->basicInfo?->civil_status) == 'Widowed' ? 'selected' : '' }}>
                                    Widowed</option>
                                <option
                                    {{ old('civil_status', Auth::user()?->basicInfo?->civil_status) == 'Separated' ? 'selected' : '' }}>
                                    Separated</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Blood Type</label>
                            <select class="form-control" style="text-transform: uppercase;" name="blood_type">
                                <option selected disabled>Select blood type</option>
                                <option
                                    {{ old('blood_typ', Auth::user()?->basicInfo?->blood_type) == 'A+' ? 'selected' : '' }}>
                                    A+</option>
                                <option
                                    {{ old('blood_typ', Auth::user()?->basicInfo?->blood_type) == 'A-' ? 'selected' : '' }}>
                                    A-</option>
                                <option
                                    {{ old('blood_typ', Auth::user()?->basicInfo?->blood_type) == 'B+' ? 'selected' : '' }}>
                                    B+</option>
                                <option
                                    {{ old('blood_typ', Auth::user()?->basicInfo?->blood_type) == 'B-' ? 'selected' : '' }}>
                                    B-</option>
                                <option
                                    {{ old('blood_typ', Auth::user()?->basicInfo?->blood_type) == 'AB+' ? 'selected' : '' }}>
                                    AB+</option>
                                <option
                                    {{ old('blood_typ', Auth::user()?->basicInfo?->blood_type) == 'AB-' ? 'selected' : '' }}>
                                    AB-</option>
                                <option
                                    {{ old('blood_typ', Auth::user()?->basicInfo?->blood_type) == 'O+' ? 'selected' : '' }}>
                                    O+</option>
                                <option
                                    {{ old('blood_typ', Auth::user()?->basicInfo?->blood_type) == 'O-' ? 'selected' : '' }}>
                                    O-</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Land Line No.</label>
                            <input type="text" class="form-control" style="text-transform: uppercase;"
                                name="land_line_no" placeholder="Land Line No"
                                value="{{ old('land_line_no', Auth::user()?->basicInfo?->land_line_no) }}">
                        </div>
                    </div>

                    <!-- Employment Info -->
                    <h3 class="mt-4 mb-3 fw-bold fs-3"><i class="fas fa-user-tie"></i> Employment Details</h3>
                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label class="form-label">Educational Attainment</label>
                            <select name="educational_attainment" id="educational_attainment" class="form-control"
                                style="text-transform: uppercase;" required>
                                <option value="" disabled selected>Select Status</option>
                                <option value="No Formal Education"
                                    {{ old('educational_attainment', old('educational_attainment', Auth::user()?->basicInfo?->educational_attainment)) === 'No Formal Education' ? 'selected' : '' }}>
                                    None
                                </option>
                                <option value="Kindergarten"
                                    {{ old('educational_attainment', old('educational_attainment', Auth::user()?->basicInfo?->educational_attainment)) === 'Kindergarten' ? 'selected' : '' }}>
                                    Kindergarten
                                </option>
                                <option value="Elementary"
                                    {{ old('educational_attainment', old('educational_attainment', Auth::user()?->basicInfo?->educational_attainment)) === 'Elementary' ? 'selected' : '' }}>
                                    Elementary
                                </option>
                                <option value="High School"
                                    {{ old('educational_attainment', old('educational_attainment', Auth::user()?->basicInfo?->educational_attainment)) === 'High School' ? 'selected' : '' }}>
                                    Junior High School
                                </option>
                                <option value="Senior High"
                                    {{ old('educational_attainment', old('educational_attainment', Auth::user()?->basicInfo?->educational_attainment)) === 'Senior High' ? 'selected' : '' }}>
                                    Senior High School
                                </option>
                                <option value="College"
                                    {{ old('educational_attainment', old('educational_attainment', Auth::user()?->basicInfo?->educational_attainment)) === 'College' ? 'selected' : '' }}>
                                    College
                                </option>
                                <option value="Vocational"
                                    {{ old('educational_attainment', old('educational_attainment', Auth::user()?->basicInfo?->educational_attainment)) === 'Vocational' ? 'selected' : '' }}>
                                    Vocational
                                </option>
                                <option value="Post Graduate"
                                    {{ old('educational_attainment', old('educational_attainment', Auth::user()?->basicInfo?->educational_attainment)) === 'Post Graduate' ? 'selected' : '' }}>
                                    Post Graduate
                                </option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Occupation</label>
                            <select name="occupation" id="occupation" class="form-control" disabled
                                style="text-transform: uppercase;">

                                <option value="" disabled selected>Select Types</option>
                                <option value="Managers"
                                    {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Managers' ? 'selected' : '' }}>
                                    Managers
                                </option>
                                <option value="Professionals"
                                    {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Professionals' ? 'selected' : '' }}>
                                    Professionals
                                </option>
                                <option value="Technicians and Associate Professionals"
                                    {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Technicians and Associate Professionals' ? 'selected' : '' }}>
                                    Technicians and Associate Professionals
                                </option>
                                <option value="Clerical Support Workers"
                                    {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Clerical Support Workers' ? 'selected' : '' }}>
                                    Clerical Support Workers
                                </option>
                                <option value="Service and Sales Workers"
                                    {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Service and Sales Workers' ? 'selected' : '' }}>
                                    Service and Sales Workers
                                </option>
                                <option value="Skilled Agricultural, Forestry and Fishery Workers"
                                    {{ old('occupation', Auth::user()?->basicInfo?->occupation) ===
                                    'Skilled Agricultural, Forestry and Fishery Workers'
                                        ? 'selected'
                                        : '' }}>
                                    Skilled Agricultural, Forestry and Fishery Workers
                                </option>
                                <option value="Craft and Related Trade Workers"
                                    {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Craft and Related Trade Workers' ? 'selected' : '' }}>
                                    Craft and Related Trade Workers
                                </option>
                                <option value="Plant and Machine Operators and Assemblers"
                                    {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Plant and Machine Operators and Assemblers' ? 'selected' : '' }}>
                                    Plant and Machine Operators and Assemblers
                                </option>
                                <option value="Elementary Occupations"
                                    {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Elementary Occupations' ? 'selected' : '' }}>
                                    Elementary Occupations
                                </option>
                                <option value="Armed Forces Occupations"
                                    {{ old('occupation', Auth::user()?->basicInfo?->occupation) === 'Armed Forces Occupations' ? 'selected' : '' }}>
                                    Armed Forces Occupations
                                </option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Employment Status</label>
                            <select class="form-control" style="text-transform: uppercase;"
                                name="status_of_employment" id="status_of_employment" onchange="statusOfEmployment(this.value)">
                                <option selected disabled value="">Select status</option>
                                <option
                                    {{ old('status_of_employment', Auth::user()?->basicInfo?->status_of_employment) == 'Employed' ? 'selected' : '' }}>
                                    Employed</option>
                                <option
                                    {{ old('status_of_employment', Auth::user()?->basicInfo?->status_of_employment) == 'Unemployed' ? 'selected' : '' }}>
                                    Unemployed</option>
                                <option
                                    {{ old('status_of_employment', Auth::user()?->basicInfo?->status_of_employment) == 'Self-Employed' ? 'selected' : '' }}>
                                    Self-Employed</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Category of Employment</label>
                            <select class="form-control" style="text-transform: uppercase;"
                                name="category_of_employment" id="category_of_employment" disabled>
                                <option selected disabled>Select status</option>
                                <option
                                    {{ old('category_of_employment', Auth::user()?->basicInfo?->category_of_employment) == 'Government' ? 'selected' : '' }}>
                                    Government</option>
                                <option
                                    {{ old('category_of_employment', Auth::user()?->basicInfo?->category_of_employment) == 'Private' ? 'selected' : '' }}>
                                    Private</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Type of Employment</label>
                            <select name="types_of_employment" id="types_of_employment" class="form-control" disabled
                                style="text-transform: uppercase;">
                                <option value="" disabled selected>Select Types</option>
                                <option value="Permanent Or Regular"
                                    {{ old('types_of_employment', Auth::user()?->basicInfo?->types_of_employment) === 'Permanent Or Regular' ? 'selected' : '' }}>
                                    Permanent or Regular
                                </option>
                                <option value="Seasonal"
                                    {{ old('types_of_employment', Auth::user()?->basicInfo?->types_of_employment) === 'Seasonal' ? 'selected' : '' }}>
                                    Seasonal
                                </option>
                                <option value="Casual"
                                    {{ old('types_of_employment', Auth::user()?->basicInfo?->types_of_employment) === 'Casual' ? 'selected' : '' }}>
                                    Casual
                                </option>
                                <option value="Emergency"
                                    {{ old('types_of_employment', Auth::user()?->basicInfo?->types_of_employment) === 'Emergency' ? 'selected' : '' }}>
                                    Emergency
                                </option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Organization Affiliated</label>
                            <input type="text" class="form-control" name="organization_affiliated"
                                placeholder="Organization Affiliated" style="text-transform: uppercase;"
                                value="{{ old('organization_affiliated', Auth::user()?->basicInfo?->organization_affiliated) }}"
                                oninput="this.value = this.value.toUpperCase();">
                        </div>

                    </div>

                    <!-- Pwd Details -->
                    {{-- <h3 class="mt-4 mb-3 fw-bold fs-3"><i class="fas fa-wheelchair"></i> PWD Details</h3>
                    <div class="mb-3 row">
                        <div class="mb-2 col-md-6">
                            <label for="type_of_disability">Type of Disability: <span style="color: red;">*</span></label>
                            <select name="type_of_disability" id="type_of_disability" class="form-control">
                                <option value="" disabled selected>Select Disability</option>
                                <option value="deaf" {{ old('type_of_disability', $type_of_disability ?? '') === 'deaf' ? 'selected' : '' }}>
                                    Deaf or Hard of Hearing
                                </option>
                                <option value="Intellectual Disability" {{ old('type_of_disability', $type_of_disability ?? '') === 'Intellectual Disability' ? 'selected' : '' }}>
                                    Intellectual Disability
                                </option>
                                <option value="Learning Disability" {{ old('type_of_disability', $type_of_disability ?? '') === 'Learning Disability' ? 'selected' : '' }}>
                                    Learning Disability
                                </option>
                                <option value="Mental Disability" {{ old('type_of_disability', $type_of_disability ?? '') === 'Mental Disability' ? 'selected' : '' }}>
                                    Mental Disability
                                </option>
                                <option value="Physical Disability (Orthopedic)" {{ old('type_of_disability', $type_of_disability ?? '') === 'Physical Disability (Orthopedic)'
                        ? 'selected'
                        : '' }}>
                                    Physical Disability(Orthopedic)
                                </option>
                                <option value="Speech and Language Impairment" {{ old('type_of_disability', $type_of_disability ?? '') === 'Speech and Language Impairment' ? 'selected' : '' }}>
                                    Psychosocial Disability
                                </option>
                                <option value="Visual Disability" {{ old('type_of_disability', $type_of_disability ?? '') === 'Visual Disability' ? 'selected' : '' }}>
                                    Speech and Language Impairment
                                </option>
                                <option value="Visual Disability" {{ old('type_of_disability', $type_of_disability ?? '') === 'Visual Disability' ? 'selected' : '' }}>
                                    Visual Disability
                                </option>
                                <option value="Cancer (RA11215)" {{ old('type_of_disability', $type_of_disability ?? '') === 'Cancer (RA11215)' ? 'selected' : '' }}>
                                    Cancer (RA11215)
                                </option>
                                <option value="Rare Disease (RA10747)" {{ old('type_of_disability', $type_of_disability ?? '') === 'Rare Disease (RA10747)' ? 'selected' : '' }}>
                                    Rare Disease(RA10747)
                                </option>
                            </select>
                        </div>
                        <div class="mb-2 col-md-6">
                            <label for="application_type">Application Type <span style="color: red;">*</span>:</label>
                            <select name="pwd_status" id="pwd_status" class="form-control" required>
                                <option value="" disabled selected>Select Application Type</option>
                                <option value="New Applicant" {{ old('pwd_status', $pwd_status ?? '') === 'New Applicant' ? 'selected' : '' }}>
                                    New Applicant
                                </option>
                                <option value="Renewal" {{ old('pwd_status', $pwd_status ?? '') === 'Renewal' ? 'selected' : '' }}>
                                    Renewal
                                </option>
                            </select>
                        </div>
                        <div class="mb-2 col-md-12">
                            <label>Cause of Disability: <span style="color: red;">*</span></label>
                            <div>
                                <label>
                                    <input type="radio" name="cause_of_disability" value="Congenital/Inborn" {{ old('cause_of_disability', $cause_of_disability ?? '') === 'Congenital/Inborn' ? 'checked' : '' }}>
                                    Congenital
                                </label>
                                <label style="margin-left: 20px;">
                                    <input type="radio" name="cause_of_disability" value="Acquired" {{ old('cause_of_disability', $cause_of_disability ?? '') === 'Acquired' ? 'checked' : '' }}>
                                    Acquired
                                </label>
                            </div>
                        </div>
                        <div class="mb-2 form-group col-md-12">
                            <label for="pwd_number">PWD NUMBER(RR-PPMM-BBB-NNNNNNN) - <span style="font-size: 12px;" class="text-muted">If you don't have PWD number please leave it empty</span></label>
                            <input type="text" name="pwd_number" class="form-control" placeholder="Persons with Disability Number"
                                value="{{ old('pwd_number', $pwd_num ?? '') }}">
                        </div>
                    </div> --}}

                    {{-- <h3 class="mt-4 mb-3 fw-bold fs-3"><i class="fas fa-phone"></i> Emergency Contact</h3>
                    <div class="mb-3 row">
                        <div class="col-md-4">
                            <label class="form-label">Contact Person</label>
                            <input type="text" class="form-control" name="contact_person" placeholder="Contact Person" value="{{ Auth::user()?->basicInfo?->contact_person }}">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Office Address</label>
                            <input type="text" class="form-control" name="office_address" placeholder="Office Address" value="{{ Auth::user()?->basicInfo?->office_address }}">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Tel. No.</label>
                            <input type="text" class="form-control" name="tel_no" placeholder="Tel. No" value="{{ Auth::user()?->basicInfo?->tel_no }}">
                        </div>
                    </div> --}}

                    <!-- IDs -->
                    {{-- <h3 class="mt-4 mb-3 fw-bold fs-3"><i class="far fa-id-card"></i> Government IDs</h3>
                    <div class="mb-3 row">
                        <div class="col-md-4">
                            <label class="form-label">SSS No.</label>
                            <input type="text" class="form-control" name="sss_no" placeholder="SSS No" value="{{ Auth::user()?->basicInfo?->sss_no }}">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">GSIS No.</label>
                            <input type="text" class="form-control" name="gsis_no" placeholder="GSIS No" value="{{ Auth::user()?->basicInfo?->gsis_no }}">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Pag-IBIG No.</label>
                            <input type="text" class="form-control" name="pag_ibig_no" placeholder="Pag-IBIG No" value="{{ Auth::user()?->basicInfo?->pag_ibig_no }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">PhilHealth No.</label>
                            <input type="text" class="form-control" name="philhealth_no" placeholder="PhilHealth No" value="{{ Auth::user()?->basicInfo?->philhealth_no }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">PSN No.</label>
                            <input type="text" class="form-control" name="psn_no" placeholder="PSN No" value="{{ Auth::user()?->basicInfo?->psn_no }}">
                        </div>
                    </div> --}}

                    <!-- Other Info -->
                    {{-- <h3 class="mt-4 mb-3 fw-bold fs-3"><i class="fas fa-network-wired"></i> Other Information</h3>
                    <div class="mb-3 row">
                        <div class="col-md-4">
                            <label class="form-label">4Ps Beneficiary</label>
                            <select class="form-control" name="four_ps_beneficiary">
                                <option selected disabled>Select option</option>
                                <option {{ Auth::user()?->basicInfo?->four_ps_beneficiary == "Yes" ? "selected" : "" }}>Yes</option>
                                <option {{ Auth::user()?->basicInfo?->four_ps_beneficiary == "No" ? "selected" : "" }}>No</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Indigenous Person</label>
                            <select class="form-control" name="indigenouse_person">
                                <option selected disabled>Select option</option>
                                <option {{ Auth::user()?->basicInfo?->indigenouse_person == "Yes" ? "selected" : "" }}>Yes</option>
                                <option {{ Auth::user()?->basicInfo?->indigenouse_person == "No" ? "selected" : "" }}>No</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Company/Agency</label>
                            <input type="text" class="form-control" name="company_agency" placeholder="Company or Agency" value="{{ Auth::user()?->basicInfo?->company_agency }}">
                        </div>
                    </div> --}}

                    <!-- ICE -->
                    {{-- <h3 class="mt-4 mb-3 fw-bold fs-3"><i class="fas fa-phone"></i> In Case of Emergency</h3>
                    <div class="mb-3 row">
                        <div class="col-md-4">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="icoe_name" placeholder="Name" value="{{ Auth::user()?->basicInfo?->icoe_name }}">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Relationship</label>
                            <input type="text" class="form-control" name="icoe_relationship" placeholder="Relationship" value="{{ Auth::user()?->basicInfo?->icoe_relationship }}">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Contact Number</label>
                            <input type="text" class="form-control" name="icoe_contact_number" placeholder="Contact Number" value="{{ Auth::user()?->basicInfo?->icoe_contact_number }}">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="icoe_address" placeholder="Address" value="{{ Auth::user()?->basicInfo?->icoe_address }}">
                        </div>
                    </div> --}}

                    <!-- Skills and Income -->

                    {{-- <h3 class="mt-4 mb-3 fw-bold fs-3"><i class="fas fa-diagram-project"></i> Skills and Income</h3>
                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label class="form-label">Skills</label>
                            <input type="text" class="form-control" name="skills" placeholder="Skills" value="{{ Auth::user()?->basicInfo?->skills }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Annual Income</label>
                            <input type="text" class="form-control" name="annual_income" placeholder="Annual Income" value="{{ Auth::user()?->basicInfo?->annual_income }}">
                        </div>
                    </div> --}}
                    {{-- <div class="form-group">
                        <h5 class="fw-bold fs-3"><i class="fa-solid fa-users"></i> <strong>FAMILY BACKGROUND</strong></h5>
                    </div>

                    <label><strong>FATHER'S NAME</strong></label>
                    <div class="row">

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
                            <input type="text" name="father_contact" class="form-control" placeholder="Father's Contact Number"
                                value="{{ old('father_phone', Auth::user()?->basicInfo?->father_contact ?? '') }}">
                        </div>
                    </div>

                    <label><strong>MOTHER'S NAME</strong></label>
                    <div class="row">
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
                            <input type="text" name="mother_contact" class="form-control" placeholder="Mother's Contact Number"
                                value="{{ old('mother_phone', Auth::user()?->basicInfo?->mother_contact ?? '') }}">
                        </div>
                    </div>

                    <label><strong>GUARDIAN'S NAME</strong></label>
                    <div class="row">
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
                            <input type="text" name="guardian_contact" class="form-control" placeholder="Guardian's Contact Number"
                                value="{{ old('guardian_phone', Auth::user()?->basicInfo?->guardian_contact ?? '') }}">
                        </div>
                    </div> --}}

                    <fieldset id="familyComposition">
                        <legend class="w-auto px-2 fw-bold">Family Composition</legend>


                        @forelse(Auth::user()->familyCompositions as $index => $member)
                            <div class="pb-2 mt-2 border-b family-member family-member-row" id="familyMemberFields">
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Remove Button -->
                                    @if ($index > 0)
                                        <button type="button" class="btn btn-sm btn-danger remove-family-member">
                                            &times;
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-sm btn-danger remove-family-member"
                                            style="display: none;">
                                            &times;
                                        </button>
                                    @endif
                                </div>

                                <div class="row form-row">
                                    <div class="col-md-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name[]"
                                            value="{{ old("name.{$index}", $member->name) }}">
                                        @error("name.{$index}")
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="relationship" class="form-label">Relationship</label>
                                        <input type="text" class="form-control" id="relationship"
                                            name="relationship[]"
                                            value="{{ old("relationship.{$index}", $member->relationship) }}">
                                        @error("relationship.{$index}")
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="dateOfBirth" class="form-label">Birthday</label>
                                        <input type="date" class="form-control" id="dateOfBirthFc"
                                            name="birthday[]"
                                            value="{{ \Carbon\Carbon::parse(old("birthday.{$index}", $member->birthday))->format('Y-m-d') }}">
                                        @error("birthday.{$index}")
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-3">
                                        <label for="age" class="form-label">Age</label>
                                        <input type="number" class="form-control" id="age" name="age_fc[]"
                                            value="{{ old("age_fc.{$index}", $member->age) }}">
                                        @error("age_fc.{$index}")
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-select" id="gender" name="gender_fc[]">
                                            <option value="" hidden selected>Select</option>
                                            <option value="Male"
                                                {{ old("gender_fc.{$index}", $member->gender) == 'Male' ? 'selected' : '' }}>
                                                Male</option>
                                            <option value="Female"
                                                {{ old("gender_fc.{$index}", $member->gender) == 'Female' ? 'selected' : '' }}>
                                                Female</option>
                                        </select>
                                        @error("gender_fc.{$index}")
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="civilStatus" class="form-label">Civil Status</label>
                                        <select class="form-select" id="civilStatus" name="civil_status_fc[]">
                                            <option value="" hidden selected>Select</option>
                                            <option value="Single"
                                                {{ old("civil_status_fc.{$index}", $member->civil_status) == 'Single' ? 'selected' : '' }}>
                                                Single</option>
                                            <option value="Married"
                                                {{ old("civil_status_fc.{$index}", $member->civil_status) == 'Married' ? 'selected' : '' }}>
                                                Married</option>
                                            <option value="Widowed"
                                                {{ old("civil_status_fc.{$index}", $member->civil_status) == 'Widowed' ? 'selected' : '' }}>
                                                Widowed</option>
                                            <option value="Divorced"
                                                {{ old("civil_status_fc.{$index}", $member->civil_status) == 'Divorced' ? 'selected' : '' }}>
                                                Divorced</option>
                                        </select>
                                        @error("civil_status_fc.{$index}")
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="occupation" class="form-label">Occupation</label>
                                        <input type="text" class="form-control" id="occupation"
                                            name="occupation_fc[]"
                                            value="{{ old("occupation_fc.{$index}", $member->occupation) }}">
                                        @error("occupation_fc.{$index}")
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="col-md-6">
                                        <label for="educationalAttainment" class="form-label">Educational
                                            Attainment</label>
                                        <select class="form-select" id="educationalAttainment"
                                            name="educational_attainment_fc[]">
                                            <option value="">Select</option>
                                            <option value="No Formal Education"
                                                {{ old("educational_attainment_fc.{$index}", $member->educational) == 'No Formal Education' ? 'selected' : '' }}>
                                                No Formal Education</option>
                                            <option value="Elementary"
                                                {{ old("educational_attainment_fc.{$index}", $member->educational) == 'Elementary' ? 'selected' : '' }}>
                                                Elementary</option>
                                            <option value="High School"
                                                {{ old("educational_attainment_fc.{$index}", $member->educational) == 'High School' ? 'selected' : '' }}>
                                                High School</option>
                                            <option value="College"
                                                {{ old("educational_attainment_fc.{$index}", $member->educational) == 'College' ? 'selected' : '' }}>
                                                College</option>
                                            <option value="Postgraduate"
                                                {{ old("educational_attainment_fc.{$index}", $member->educational) == 'Postgraduate' ? 'selected' : '' }}>
                                                Postgraduate</option>
                                        </select>
                                        @error("educational_attainment_fc.{$index}")
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="income" class="form-label">Monthly Income</label>
                                        <select name="income[]" class="form-select" id="income[]">
                                            <option value="" hidden selected>Select Monthly Income</option>
                                            <option value="" disabled>Select Monthly Income</option>
                                            <option value="Below 60,000"
                                                {{ old("income.{$index}", $member->income) == 'Below 60,000' ? 'selected' : '' }}>
                                                Below 60,000</option>
                                            <option value="60,000 - 120,000"
                                                {{ old("income.{$index}", $member->income) == '60,000 - 120,000' ? 'selected' : '' }}>
                                                60,000 - 120,000</option>
                                            <option value="120,000 - 180,000"
                                                {{ old("income.{$index}", $member->income) == '120,000 - 180,000' ? 'selected' : '' }}>
                                                120,000 - 180,000</option>
                                            <option value="Above 180,000"
                                                {{ old("income.{$index}", $member->income) == 'Above 180,000' ? 'selected' : '' }}>
                                                Above 180,000</option>
                                        </select>
                                        @error("income.{$index}")
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="mt-2 border-b family-member family-member-row" id="familyMemberFields">
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Remove Button -->
                                    <button type="button" class="btn btn-sm btn-danger remove-family-member"
                                        style="display: none;">
                                        &times;
                                    </button>
                                </div>

                                <div class="row form-row">
                                    <div class="col-md-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name[]"
                                            value="{{ old('name.0') }}">
                                        @error('name.*')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="relationship" class="form-label">Relationship</label>
                                        <input type="text" class="form-control" id="relationship"
                                            name="relationship[]" value="{{ old('relationship.0') }}">
                                        @error('relationship.*')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="dateOfBirth" class="form-label">Birthday</label>
                                        <input type="date" class="form-control" id="dateOfBirthFc"
                                            name="birthday[]"
                                            value="{{ \Carbon\Carbon::parse(old('birthday.*'))->format('Y-m-d') }}">
                                        @error('birthday.*')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-3">
                                        <label for="age" class="form-label">Age</label>
                                        <input type="number" class="form-control" id="age" name="age_fc[]"
                                            value="{{ old('age_fc.0') }}">
                                        @error('age_fc.*')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-select" id="gender" name="gender_fc[]">
                                            <option value="" hidden selected>Select</option>
                                            <option value="Male"
                                                {{ old('gender_fc.0') == 'Male' ? 'selected' : '' }}>Male</option>
                                            <option value="Female"
                                                {{ old('gender_fc.0') == 'Female' ? 'selected' : '' }}>Female</option>
                                        </select>
                                        @error('gender_fc.*')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="civilStatus" class="form-label">Civil Status</label>
                                        <select class="form-select" id="civilStatus" name="civil_status_fc[]">
                                            <option value="" hidden selected>Select</option>
                                            <option value="Single"
                                                {{ old('civil_status_fc.0') == 'Single' ? 'selected' : '' }}>Single
                                            </option>
                                            <option value="Married"
                                                {{ old('civil_status_fc.0') == 'Married' ? 'selected' : '' }}>Married
                                            </option>
                                            <option value="Widowed"
                                                {{ old('civil_status_fc.0') == 'Widowed' ? 'selected' : '' }}>Widowed
                                            </option>
                                            <option value="Divorced"
                                                {{ old('civil_status_fc.0') == 'Divorced' ? 'selected' : '' }}>
                                                Divorced</option>
                                        </select>
                                        @error('civil_status_fc.*')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="occupation" class="form-label">Occupation</label>
                                        <input type="text" class="form-control" id="occupation"
                                            name="occupation_fc[]" value="{{ old('occupation_fc.0') }}">
                                        @error('occupation_fc.*')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="col-md-6">
                                        <label for="educationalAttainment" class="form-label">Educational
                                            Attainment</label>
                                        <select class="form-select" id="educationalAttainment"
                                            name="educational_attainment_fc[]">
                                            <option value="">Select</option>
                                            <option value="No Formal Education"
                                                {{ old('educational_attainment_fc.0') == 'No Formal Education' ? 'selected' : '' }}>
                                                No Formal Education</option>
                                            <option value="Elementary"
                                                {{ old('educational_attainment_fc.0') == 'Elementary' ? 'selected' : '' }}>
                                                Elementary</option>
                                            <option value="High School"
                                                {{ old('educational_attainment_fc.0') == 'High School' ? 'selected' : '' }}>
                                                High School</option>
                                            <option value="College"
                                                {{ old('educational_attainment_fc.0') == 'College' ? 'selected' : '' }}>
                                                College</option>
                                            <option value="Postgraduate"
                                                {{ old('educational_attainment_fc.0') == 'Postgraduate' ? 'selected' : '' }}>
                                                Postgraduate</option>
                                        </select>
                                        @error('educational_attainment_fc.*')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="income" class="form-label">Monthly Income</label>
                                        <select name="income[]" class="form-select" id="income[]">
                                            <option value="" hidden selected>Select Monthly Income</option>
                                            <option value="" disabled>Select Monthly Income</option>
                                            <option value="Below 60,000"
                                                {{ old('income.0') == 'Below 60,000' ? 'selected' : '' }}>Below 60,000
                                            </option>
                                            <option value="60,000 - 120,000"
                                                {{ old('income.0') == '60,000 - 120,000' ? 'selected' : '' }}>60,000 -
                                                120,000</option>
                                            <option value="120,000 - 180,000"
                                                {{ old('income.0') == '120,000 - 180,000' ? 'selected' : '' }}>120,000
                                                - 180,000</option>
                                            <option value="Above 180,000"
                                                {{ old('income.0') == 'Above 180,000' ? 'selected' : '' }}>Above
                                                180,000</option>
                                        </select>
                                        @error('income.*')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endforelse

                        <button type="button" id="addFamilyComposition" class="mt-2 btn btn-primary float-end">Add
                            Field</button>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        onclick="skipBasicInfo()">Skip for now</button> --}}
                    <button type="submit" class="btn btn-primary">Update Now</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    function skipBasicInfo() {
        const modal = document.getElementById('staticBackdropLive');
        const modalBackDrop = document.getElementById('modalBackDrop');
        console.log(modal, modalBackDrop)
        modal.style.display = 'none';
        modal.classList.remove('show');
        modalBackDrop.classList.remove('show');
        modalBackDrop.style.display = 'none';
    }
</script>

<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     const familyComposition = document.getElementById('familyComposition');
    //     const originalRow = document.querySelector('.family-member-row');
    //     let fieldCount = 1;

    //     document.getElementById('addFamilyComposition').addEventListener('click', function() {
    //         const newRow = originalRow.cloneNode(true);

    //         const inputs = newRow.querySelectorAll('input, select');
    //         inputs.forEach(input => {
    //             const name = input.getAttribute('name');
    //             input.setAttribute('name', name.replace(/\[\d+\]/, `[${fieldCount}]`));
    //             input.value = '';
    //         });

    //         newRow.querySelectorAll('.text-danger').forEach(el => el.remove());

    //         const removeButton = newRow.querySelector('.remove-family-member');
    //         removeButton.style.display = 'inline-block';

    //         removeButton.addEventListener('click', function() {
    //             newRow.remove();
    //         });

    //         familyComposition.insertBefore(newRow, this);

    //         fieldCount++;
    //     });

    //     document.querySelector('.family-member-row .remove-family-member').style.display = 'none';
    // });
    document.addEventListener('DOMContentLoaded', function() {
        const familyComposition = document.getElementById('familyComposition');
        const originalRow = document.querySelector('.family-member-row');

        // Start counting from the number of existing rows
        let fieldCount = {{ count(Auth::user()->familyCompositions) }};

        document.getElementById('addFamilyComposition').addEventListener('click', function() {
            const newRow = originalRow.cloneNode(true);

            // Update all input/select names with new index
            newRow.querySelectorAll('input, select, textarea').forEach(input => {
                const name = input.name.replace(/\[\d+\]/, `[${fieldCount}]`);
                input.name = name;
                input.value = '';
                input.id = name.replace(/\[|\]/g, '_') + fieldCount; // Fix IDs
                input.classList.remove('is-invalid');
            });

            // Clear validation errors
            newRow.querySelectorAll('.text-danger').forEach(el => el.remove());

            // Setup remove button
            const removeButton = newRow.querySelector('.remove-family-member');
            removeButton.style.display = 'inline-block';
            removeButton.addEventListener('click', function() {
                newRow.remove();
            });

            familyComposition.insertBefore(newRow, this);
            fieldCount++;
        });
    });
</script>

<script>
   const occupation = document.getElementById('occupation');
   const types_of_employment = document.getElementById('types_of_employment');
   const category_of_employment = document.getElementById('category_of_employment');

   function statusOfEmployment(value) {
       console.log(value !== "Unemployed")
        if(value !== "Unemployed") {
            types_of_employment.disabled = false;
            category_of_employment.disabled = false;
            occupation.disabled = false;
        } else {
            types_of_employment.disabled = true;
            category_of_employment.disabled = true;
            occupation.disabled = true;
        }
   }
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'warning',
                title: 'Fillup error',
                text: 'Opsss, Something went wrong on fillup form',
            });
        });
    </script>
@endif
