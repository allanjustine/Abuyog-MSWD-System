<form action="/submit-application/solo-parent/{{ $service->id }}" method="POST" class="form-container" id="myForm">
    @csrf
    <input type="hidden" name="service_id" value="{{ $service->id }}">

    <p style="color: red; font-weight: normal; margin-left:1%; margin-right: 5%">
        Please fill up completely and correctly the required information before each item below. For items that
        are not associated to you, leave it blank.
        <span style="font-weight: bold;">Required items are also marked with an asterisk (*)</span> so please
        fill it up correctly.
    </p>

    <div class="form-group"> Full Name:
        <input type="text" name="full_name" class="form-control" placeholder="Full Name"
            value="{{ Auth::user()->first_name }}, {{ Auth::user()->middle_name }}, {{ Auth::user()->last_name }}, {{ Auth::user()->suffix }}"
            readonly>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Phone <span style="color: red;">*</span></label>
            <input type="text" name="phone" class="form-control" placeholder="Phone"
                value="{{ Auth::user()->phone }}" readonly>
        </div>
        <div class="form-group col-md-4">
            <label>Email:</label>
            <input type="text" name="email" class="form-control" placeholder="Email"
                value="{{ Auth::user()->email }}" readonly>
        </div>
        <div class="form-group col-md-4">
            <label>Date for Personal Appearance <span style="color: red;">*</span></label>
            <input type="date" name="appearance_date" id="appearance_date" class="form-control" required>
            @error('appearance_date')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Birthdate <span style="color: red;">*</span> - Indicate your birthdate correctly</label>
            <input type="date" name="date_of_birth" class="form-control" id="date_of_birth"
                value="{{ old('date_of_birth', Auth::user()->date_of_birth ?? '') }}" required>
        </div>
        <div class="form-group col-md-2">
            <label>Age <span style="color: red;">*</span></label>
            <input type="text" name="age" class="form-control" id="age" placeholder="Age"
                value="{{ old('age', Auth::user()->age ?? '') }}" readonly>
        </div>
        <div class="form-group col-md-2">
            <label>Gender <span style="color: red;">*</span></label>
            <select name="gender" class="form-control" required>
                <option value="" disabled selected>Select Gender</option>
                <option value="Female" {{ (old('gender', Auth::user()->gender ?? '' )=='Female' ) ? 'selected' : '' }}>Female
                </option>
                <option value="Male" {{ (old('gender', Auth::user()->gender ?? '' )=='Male' ) ? 'selected' : '' }}>Male</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label>Place of Birth: <span style="color: red;">*</span></label>
            <input type="text" name="place_of_birth" class="form-control" placeholder="Place of Birth"
                value="{{ old('place_of_birth', $birthplace ?? '') }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            Complete Address <span style="color: red;">*</span>
            <input type="text" name="complete_address" class="form-control" placeholder="Complete Address"
                value="{{ old('complete_address', $address ?? '') }}" required style="text-transform: uppercase;">
        </div>
        <div class="form-group col-md-6">
            Barangay <span style="color: red;">*</span>
            <select name="barangay" id="" class="form-control">
                <option value="" hidden selected>Select Barangay</option>
                <option value="" disabled>Select Barangay</option>
                @foreach (\App\Models\Barangay::all() as $barangay)
                <option value="{{ $barangay->id }}" {{ Auth::user()->barangay_id == $barangay->id ?
                    'selected' : '' }}>{{ $barangay->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Educational Attainment <span style="color: red;">*</span></label>
            <select name="educational_attainment" class="form-control" required>
                <option value="" disabled selected>Select</option>
                <option value="Not Attended School" {{ (old('educational_attainment', $educational_attainment
                    ?? '' )=='Not Attended School' ) ? 'selected' : '' }}>Not Attended School</option>
                <option value="Elementary Level" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='Elementary Level' ) ? 'selected' : '' }}>Elementary Level</option>
                <option value="Elementary Graduate" {{ (old('educational_attainment', $educational_attainment
                    ?? '' )=='Elementary Graduate' ) ? 'selected' : '' }}>Elementary Graduate</option>
                <option value="Highschool Level" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='Highschool Level' ) ? 'selected' : '' }}>Highschool Level</option>
                <option value="Highschool Graduate" {{ (old('educational_attainment', $educational_attainment
                    ?? '' )=='Highschool Graduate' ) ? 'selected' : '' }}>Highschool Graduate</option>
                <option value="Vocational" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='Vocational' ) ? 'selected' : '' }}>Vocational</option>
                <option value="College Level" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='College Level' ) ? 'selected' : '' }}>College Level</option>
                <option value="College Graduate" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='College Graduate' ) ? 'selected' : '' }}>College Graduate</option>
                <option value="Post Graduate" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='Post Graduate' ) ? 'selected' : '' }}>Post Graduate</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label>Occupation:</label>
            <input type="text" name="occupation" class="form-control" placeholder="Occupation"
                value="{{ old('occupation', $occupation ?? '') }}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="civil_status">Civil Status:</label>
            <input type="text" name="civil_status" class="form-control" placeholder="Civil Status"
                value="{{ old('civil_status', $status ?? '') }}">
        </div>
        <div class="form-group col-md-6">
            <label for="religion">Religion:</label>
            <input type="text" name="religion" class="form-control" placeholder="Religion"
                value="{{ old('religion', $religion ?? '') }}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="company_agency">Company/Agency:</label>
            <input type="text" name="company_agency" class="form-control" placeholder="Company or Agency"
                value="{{ old('company_agency', $company_or_agency ?? '') }}">
        </div>

        <div class="form-group col-md-6">
            <label for="monthly_income">Monthly Income:</label>
            <input type="text" name="monthly_income" class="form-control" placeholder="Monthly Income"
                value="{{ old('monthly_income', $monthly_income ?? '') }}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="four_ps_beneficiary">Are you a 4Ps Beneficiary? <span
                    style="color: red;">*</span></label>
            <select name="four_ps_beneficiary" class="form-control" required>
                <option value="" disabled selected>Select</option>
                <option value="Yes" {{ (old('four_ps_beneficiary', $fourps_beneficiary ?? '' )=='Yes' )
                    ? 'selected' : '' }}>Yes</option>
                <option value="No" {{ (old('four_ps_beneficiary', $fourps_beneficiary ?? '' )=='No' )
                    ? 'selected' : '' }}>No</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="indigenous_person">Are you an Indigenous Person? <span
                    style="color: red;">*</span></label>
            <select name="indigenous_person" class="form-control" required>
                <option value="" disabled selected>Select</option>
                <option value="Yes" {{ (old('indigenous_person', $indigenous_person ?? '' )=='Yes' )
                    ? 'selected' : '' }}>Yes</option>
                <option value="No" {{ (old('indigenous_person', $indigenous_person ?? '' )=='No' ) ? 'selected'
                    : '' }}>No</option>
            </select>
        </div>
    </div>


    <div class="form-group">
        <label style="font-weight:bold;">FAMILY COMPOSITION</label>
        <div id="family-compo-container">
            <!-- Dynamic family member inputs will be added here -->
        </div>
        <div class="d-flex justify-content-end mt-2">
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

                function addFamilyCompo(member = {}) {
                    if (memberCount >= 6) {
                        Swal.fire({
                            icon: 'warning', // Icon for the alert (e.g., 'success', 'error', 'warning', 'info', 'question')
                            title: 'Limit Reached',
                            text: 'Maximum of 6 family members only.', // The message
                            confirmButtonText: 'OK', // Text for the confirm button
                        });
                        return;
                    }

                    memberCount++;

                    const familyMemberDiv = document.createElement('div');
                    familyMemberDiv.className = 'family-member mb-3';
                    familyMemberDiv.innerHTML = `

                                                                                                                                <h5>Family Member ${memberCount}</h5>
                                                                                                                                <div class="form-row">
                                                                                                                                    <div class="form-group col-md-4">
                                                                                                                                        <label for="name">Name:</label>
                                                                                                                                        <input type="text" name="name[]" id="name" class="form-control" value="${member.name || ''}" required>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group col-md-4">
                                                                                                                                        <label for="relationship">Relation to Client:</label>
                                                                                                                                        <input type="text" name="relationship[]" id="relationship" class="form-control" value="${member.relation || ''}" required>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group col-md-4">
                                                                                                                                        <label for="age">Age:</label>
                                                                                                                                        <input type="number" name="age_fc[]" id="age" class="form-control" value="${member.age || ''}" required>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="form-row">
                                                                                                                                    <div class="form-group col-md-4">
                                                                                                                                         <label for="birthday">Birthday: <span style="color: red;">*</span></label>
                                                                                                                                        <input type="date" name="birthday[]" id="birthday" class="form-control" value="${member.birthday || ''}" required>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group col-md-4">
                                                                                                                                        <label for="civil_status">Civil Status:</label>
                                                                                                                                        <input type="text" name="civil_status_fc[]" id="civil_status" class="form-control" value="${member.civil_status || ''}" required>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group col-md-4">
                                                                                                                                        <label for="educational_attainment_fc">Educational Attainment: <span style="color: red;">*</span></label>
                                                                                                                                            <input type="text" name="educational_attainment_fc[]" id="educational_attainment_fc" class="form-control" value="${member.education || ''}"required>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="form-row">
                                                                                                                                    <div class="form-group col-md-6">
                                                                                                                                        <label for="occupation">Occupation:</label>
                                                                                                                                        <input type="text" name="occupation_fc[]" id="occupation" class="form-control" value="${member.occupation || ''}">
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group col-md-6">
                                                                                                                                        <label for="income">Monthly:</label>
                                                                                                                                        <input type="text" name="income[]" id="income" class="form-control" value="${member.monthly || ''}">
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <hr>
                                                                                                                            `;

                    // Add the new family member to the container
                    familyInfoContainer.appendChild(familyMemberDiv);
                }

                // Function to remove the last family member
                function removeLastFamilyCompo() {
                    if (memberCount > 0) {
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



    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="classification_circumtances">Classification or Circumstances of being a Solo Parent:</label>
            <input type="text" name="classification_circumtances" class="form-control"
                placeholder="Classification/Circumstances of SOLO PARENT"
                value="{{ old('classification_circumtances', $classification_of_SP ?? '') }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="needs_problems">Needs or Problems of being a Solo Parent:</label>
            <input type="text" name="needs_problems" class="form-control"
                placeholder="Needs/Problems of SOLO PARENT"
                value="{{ old('needs_problems', $needs_or_problems ?? '') }}">
        </div>
    </div>

    <div class="form-group">
        <h5><strong>IN CASE OF EMERGENCY</strong></h5>
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="emergency_name">Name:</label>
            <input type="text" name="emergency_name" class="form-control"
                placeholder="Emergency Contact Name"
                value="{{ old('emergency_name', $emergency_contact_name ?? '') }}">
        </div>

        <div class="form-group col-md-3">
            <label for="emergency_address">Address:</label>
            <input type="text" name="emergency_address" class="form-control"
                placeholder="Emergency Contact Address"
                value="{{ old('emergency_address', $emergency_contact_address ?? '') }}">
        </div>

        <div class="form-group col-md-3">
            <label for="emergency_relationship">Relationship:</label>
            <input type="text" name="emergency_relationship" class="form-control"
                placeholder="Emergency Contact Relationship"
                value="{{ old('emergency_relationship', $emergency_contact_relationship ?? '') }}">
        </div>

        <div class="form-group col-md-3">
            <label for="emergency_contact_number">Contact Number:</label>
            <input type="text" name="emergency_contact_number" class="form-control"
                placeholder="Emergency Contact Number"
                value="{{ old('emergency_contact_number', $emergency_contact_number ?? '') }}">
        </div>
    </div>

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
