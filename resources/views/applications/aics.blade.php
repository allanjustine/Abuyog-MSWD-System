<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<form action="/submit-application/aics/{{ $service->id }}" method="POST" class="form-container" id="myForm">
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
    <div class="form-group" style="font-weight: normal; " hidden> Full Name <span style="color: red;">*</span>
        <input type="text" name="full_name" class="form-control" placeholder="Full Name"
            value="{{ Auth::user()->first_name }} {{ Auth::user()->middle_name }} {{ Auth::user()->last_name }} {{ Auth::user()->suffix }}"
            readonly>
    </div>
    <div class="form-row" hidden>
        <div class="form-group col-md-3">
            <label>Date of birth <span style="color: red;">*</span></label>
            <input type="date" name="date_of_birth" class="form-control" id="birthdate"
                value="{{ Auth::user()?->date_of_birth->format('Y-m-d') }}" required readonly>
        </div>
        <div class="form-group col-md-1">
            <label>Age <span style="color: red;">*</span></label>
            <input type="text" name="age" class="form-control" id="age" placeholder="Age"
                value="{{ Auth::user()->age }}" readonly>
        </div>
        <div class="form-group col-md-3">
            <label for="phone">Phone: <span class="text-danger">*</span></label>
            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ Auth::user()->phone }}"
                readonly>
        </div>
        <div class="form-group col-md-5">
            <label for="email">Email: <span class="text-danger">*</span></label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ Auth::user()->email }}"
                readonly>
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

    <!-- <div class="form-row">
        <div class="form-group col-md-6">
            <label>Complete Address <span style="color: red;">*</span></label>
            <input type="text" name="complete_address" class="form-control" placeholder="Complete Address"
                value="{{ old('complete_address', $complete_address ?? '') }}" required>
        </div>
        <div class="form-group col-md-6">
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
    </div> -->

    <div class="form-group" hidden>
        <h5><i class="fa-solid fa-info-circle"></i> <strong>OTHER DETAILS</strong></h5>
    </div>


    <div class="form-row" style="font-weight: normal;" hidden>
        <div class="form-group col-md-4">
            <label>Place of Birth <span style="color: red;">*</span></label>
            <input type="text" name="place_of_birth" class="form-control" placeholder="Birthplace"
                value="{{ old('place_of_birth', Auth::user()?->basicInfo?->place_of_birth) }}">
        </div>
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
        <div class="form-group col-md-4">
            <label>Occupation:</label>
            <input type="text" name="occupation" class="form-control" placeholder="Occupation"
                value="{{ old('occupation', Auth::user()?->basicInfo?->occupation) }}">
        </div>
    </div>



    <div class="form-row" hidden>
        <div class="form-group col-md-4">
            <label for="civil_status">Civil Status <span style="color: red;">*</span></label>
            <select name="civil_status" class="form-control">
                <option value="" disabled selected>Select Civil Status</option>
                <option value="Single" {{ old('civil_status', Auth::user()?->basicInfo?->civil_status) == 'Single' ? 'selected' : '' }}>
                    Single</option>
                <option value="Married" {{ old('civil_status', Auth::user()?->basicInfo?->civil_status) == 'Married' ? 'selected' : '' }}>
                    Married</option>
                <option value="Widowed" {{ old('civil_status', Auth::user()?->basicInfo?->civil_status) == 'Widowed' ? 'selected' : '' }}>
                    Widowed</option>
                <option value="Separated" {{ old('civil_status', Auth::user()?->basicInfo?->civil_status) == 'Separated' ? 'selected' : '' }}>
                    Separated</option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="religion">Religion:</label>
            <select name="religion" class="form-control">
                <option value="" disabled selected>Select Religion</option>
                <option value="Christianity" {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Christianity' ? 'selected' : '' }}>
                    Christianity</option>
                <option value="Roman Catholic" {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Roman Catholic' ? 'selected' : '' }}>
                    Roman Catholic</option>
                <option value="Protestant" {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Protestant' ? 'selected' : '' }}>
                    Protestant</option>
                <option value="Islam" {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Islam' ? 'selected' : '' }}>
                    Islam</option>
                <option value="Hinduism" {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Hinduism' ? 'selected' : '' }}>
                    Hinduism</option>
                <option value="Buddhism" {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Buddhism' ? 'selected' : '' }}>
                    Buddhism</option>
                <option value="Judaism" {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Judaism' ? 'selected' : '' }}>
                    Judaism</option>
                <option value="Sikhism" {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Sikhism' ? 'selected' : '' }}>
                    Sikhism</option>
                <option value="Baha'i" {{ old('religion', Auth::user()?->basicInfo?->religion) == "Baha'i" ? 'selected' : '' }}>
                    Bahai</option>
                <option value="Taoism" {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Taoism' ? 'selected' : '' }}>
                    Taoism</option>
                <option value="Shinto" {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Shinto' ? 'selected' : '' }}>
                    Shinto</option>
                <option value="Agnostic" {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Agnostic' ? 'selected' : '' }}>
                    Agnostic</option>
                <option value="Atheist" {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Atheist' ? 'selected' : '' }}>
                    Atheist</option>
                <option value="Other" {{ old('religion', Auth::user()?->basicInfo?->religion) == 'Other' ? 'selected' : '' }}>
                    Other</option>
            </select>
        </div>

    </div>

    <div class="form-group">
        <h5><i class="fa-solid fa-clipboard-list"></i> <strong>PROGRAM DETAILS</strong></h5>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Type of Assistance <span style="color: red;">*</span></label>
            <select name="type_of_assistance" class="form-control" required>
                <option value="" disabled selected>Select</option>
                <option value="Medical Assistance" {{ str_contains(implode(',', $type_of_assistance_data), 'Medical Assistance') ? 'disabled' : '' }} {{ old('type_of_assistance') == 'Medical Assistance' ? 'selected' : '' }}>
                    Medical Assistance {{ str_contains(implode(',', $type_of_assistance_data), 'Medical Assistance') ? '-Not Available-' : '' }}</option>
                <option value="Burial Assistance" {{ str_contains(implode(',', $type_of_assistance_data), 'Burial Assistance') ? 'disabled' : '' }} {{ old('type_of_assistance') == 'Burial Assistance' ? 'selected' : '' }}>Burial Assistance {{ str_contains(implode(',', $type_of_assistance_data), 'Burial Assistance') ? '-Not Available-' : '' }}
                </option>
                <option value="Transportation Assistance" {{ str_contains(implode(',', $type_of_assistance_data), 'Transportation Assistance') ? 'disabled' : '' }} {{ old('type_of_assistance') == 'Transportation Assistance' ? 'selected' : '' }}>
                    Transportation Assistance {{ str_contains(implode(',', $type_of_assistance_data), 'Transportation Assistance') ? '-Not Available-' : '' }}</option>
                <option value="Food Assistance" {{ str_contains(implode(',', $type_of_assistance_data), 'Food Assistance') ? 'disabled' : '' }} {{ old('type_of_assistance') == 'Food Assistance' ? 'selected' : '' }}>
                    Food Assistance {{ str_contains(implode(',', $type_of_assistance_data), 'Food Assistance') ? '-Not Available-' : '' }}</option>
                <option value="Emergency Shelter Assistance" {{ str_contains(implode(',', $type_of_assistance_data), 'Emergency Shelter Assistance') ? 'disabled' : '' }} {{ old('type_of_assistance') == 'Emergency Shelter Assistance' ? 'selected' : '' }}>Emergency
                    Shelter
                    Assistance {{ str_contains(implode(',', $type_of_assistance_data), 'Emergency Shelter Assistance') ? '-Not Available-' : '' }}</option>
                <option value="Educational Assistance" {{ str_contains(implode(',', $type_of_assistance_data), 'Educational Assistance') ? 'disabled' : '' }} {{ old('type_of_assistance') == 'Educational Assistance' ? 'selected' : '' }}>
                    Educational Assistance {{ str_contains(implode(',', $type_of_assistance_data), 'Educational Assistance') ? '-Not Available-' : '' }}</option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="appearance_date">Date for Personal Appearance: <span class="text-danger">*</span></label>
            <input type="date" id="date_applied" name="appearance_date" class="form-control" required>
        </div>
        <div class="form-group col-md-4">
            <label for="source_of_referral">Referral Source:</label>
            <input type="text" name="source_of_referral" class="form-control" placeholder="Referral Source"
                value="{{ old('source_of_referral') }}"
                required>
            @error('source_of_referral')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>




    <div class="form-group">
        <h5><i class="fa-solid fa-users"></i> <strong>FAMILY COMPOSITION</strong></h5>
    </div>


    <div class="form-group">
        <div id="family-compo-container">
            <!-- Dynamic family member inputs will be added here -->
        </div>
        <div class="mt-2 d-flex justify-content-end">
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
                familyMemberDiv.innerHTML =
                    `

                                                                                                                                        <h5>Family Member ${memberCount}</h5>
                                                                                                                                        <div class="form-row">
                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="name">Name:</label>
                                                                                                                                                <input type="text" name="name[]" id="name" class="form-control" value="${member.name || ''}" required>
                                                                                                                                            </div>

                                                                                                                                            <div class="form-group col-md-2">
                                                                                                                                                <label for="age_fc">Age:</label>
                                                                                                                                                <input type="number" name="age_fc[]" id="age_fc" class="form-control" value="${member.age || ''}" required>
                                                                                                                                            </div>

                                                                                                                                            <div class="form-group col-md-2">
                                                                                                                                                <label for="gender_fc">Sex:</label>
                                                                                                                                                <select name="gender_fc[]" id="gender_fc" class="form-control" required>
                                                                                                                                                    <option value="Male" ${member.sex === 'Male' ? 'selected' : ''}>Male</option>
                                                                                                                                                    <option value="Female" ${member.sex === 'Female' ? 'selected' : ''}>Female</option>
                                                                                                                                                </select>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="civil_status_fc">Civil Status:</label>
                                                                                                                                                <input type="text" name="civil_status_fc[]" id="civil_status_fc" class="form-control" value="${member.civil_status || ''}" required>
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="form-row">

                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="relationship">Relation:</label>
                                                                                                                                                <input type="text" name="relationship[]" id="relationship" class="form-control" required value="${member.relationship || ''}">
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="educational_attainment_fc">Educational Attainment:</label>
                                                                                                                                                <input type="text" name="educational_attainment_fc[]" id="educational_attainment_fc" class="form-control" value="${member.educational || ''}" required>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="occupation_fc">Occupation:</label>
                                                                                                                                                <input type="text" name="occupation_fc[]" id="occupation_fc" class="form-control" value="${member.occupation || ''}" required>
                                                                                                                                            </div>
                                                                                                                                        </div>



                                                                                                                                        <hr>
                                                                                                                                    `;
                // Add the new family member to the container
                familyInfoContainer.appendChild(familyMemberDiv);
            }

            // Function to remove the last family member
            function removeLastFamilyCompo() {
                if (memberCount > 1) {
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
