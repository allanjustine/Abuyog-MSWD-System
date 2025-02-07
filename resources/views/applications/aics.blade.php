<form action="/submit-application/aics/{{ $service->id }}" method="POST" style="margin-left: 8%; margin-right:8%;"
    class="form-container" id="myForm">
    @csrf

    <p style="color: red; font-weight: normal;">
        Please fill up completely and correctly the required information before each item below. For items that
        are not associated to you, leave it blank.
        <span style="font-weight: bold;">Required items are also marked with an asterisk (*)</span> so please
        fill it up correctly.
    </p>

    <div class="form-group" style="font-weight: normal; "> Full Name (First
        Name,
        Middle Name, Last Name, Suffix)<span style="color: red;">*</span>
        <input type="text" name="full_name" class="form-control" placeholder="Full Name"
            value="{{ Auth::user()->first_name }}, {{ Auth::user()->middle_name }}, {{ Auth::user()->last_name }}, {{ Auth::user()->suffix }}"
            readonly>
    </div>
    <div class="form-row" style="font-weight: normal;">
        <div class="form-group col-md-4">
            <label for="email">Email: <span class="text-danger">*</span></label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ Auth::user()->email }}"
                readonly>
        </div>

        <div class="form-group col-md-4">
            <label for="phone">Phone: <span class="text-danger">*</span></label>
            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ Auth::user()->phone }}"
                readonly>
        </div>

        <div class="form-group col-md-4">
            <label for="appearance_date">Date for Personal Appearance: <span class="text-danger">*</span></label>
            <input type="date" id="date_applied" name="appearance_date" class="form-control" required>
        </div>
    </div>

    <!--<div class="form-group">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <label for="date_applied">Date for Personal Appearance:</label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <input type="date" id="date_applied" name="date_applied" class="form-control"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    min="?php echo date('Y-m-d', strtotime('+1 day')); ?>">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>-->



    <div class="form-row">
        <div class="form-group col-md-5">
            <label>Birthdate <span style="color: red;">*</span> - Indicate your birthdate correctly</label>
            <input type="date" name="date_of_birth" class="form-control" id="birthdate"
                value="{{ Auth::user()?->date_of_birth->format('m-d-y') }}" required>
        </div>
        <div class="form-group col-md-1">
            <label>Age <span style="color: red;">*</span></label>
            <input type="text" name="age" class="form-control" id="age" placeholder="Age"
                value="{{ Auth::user()->age }}" readonly>
        </div>
        <div class="form-group col-md-3">
            <label>Place of Birth: <span style="color: red;">*</span></label>
            <input type="text" name="place_of_birth" class="form-control" placeholder="Place of Birth"
                value="{{ old('birthplace', $birthplace ?? '') }}" required>
        </div>
        <div class="form-group col-md-3">
            <label>Types of Assistance <span style="color: red;">*</span></label>
            <select name="type_of_assistance" class="form-control" required>
                <option value="" disabled selected>Select</option>
                <option value="Medical Assistance" {{ (old('type_of_assistance')=='Medical Assistance' ) ? 'selected'
                    : '' }}>Medical Assistance</option>
                <option value="Burial Assistance" {{ (old('type_of_assistance')=='Burial Assistance' ) ? 'selected' : ''
                    }}>Burial Assistance</option>
                <option value="Transportation Assistance" {{ (old('type_of_assistance')=='Transportation Assistance' )
                    ? 'selected' : '' }}>Transportation Assistance</option>
                <option value="Food Assistance" {{ (old('type_of_assistance')=='Food Assistance' ) ? 'selected' : '' }}>
                    Food Assistance</option>
                <option value="Emergency Shelter Assistance" {{
                    (old('type_of_assistance')=='Emergency Shelter Assistance' ) ? 'selected' : '' }}>Emergency Shelter
                    Assistance</option>
                <option value="Educational Assistance" {{ (old('type_of_assistance')=='Educational Assistance' )
                    ? 'selected' : '' }}>Educational Assistance</option>
            </select>
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
            <select name="barangay" id="" class="form-control" required>
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
                <option value="Not Attended School" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='Not Attended School' ) ? 'selected' : '' }}>Not Attended School</option>
                <option value="Elementary Level" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='Elementary Level' ) ? 'selected' : '' }}>Elementary Level</option>
                <option value="Elementary Graduate" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='Elementary Graduate' ) ? 'selected' : '' }}>Elementary Graduate</option>
                <option value="Highschool Level" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='Highschool Level' ) ? 'selected' : '' }}>Highschool Level</option>
                <option value="Highschool Graduate" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='Highschool Graduate' ) ? 'selected' : '' }}>Highschool Graduate</option>
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
            <input type="text" name="occupation" class="form-control" placeholder="Occupation" required
                value="{{ old('occupation', $occupation ?? '') }}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="civil_status">Civil Status: <span class="text-danger">*</span></label>
            <input type="text" name="civil_status" class="form-control" value="{{ old('civil_status', $status ?? '') }}" required>
        </div>

        <div class="form-group col-md-4">
            <label for="source_of_referral">Referral Source:</label>
            <input type="text" name="source_of_referral" class="form-control" placeholder="Referral Source"
                value="{{ old('source_of_referral', $referral_source ?? '') }}" required>
                @error('source_of_referral')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
        </div>

        <div class="form-group col-md-4">
            <label for="religion">Religion:</label>
            <input type="text" name="religion" class="form-control" placeholder="Religion"
                value="{{ old('religion', $religion ?? '') }}" required>
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
                        familyMemberDiv.innerHTML = `

                                                                                                                                        <h5>Family Member ${memberCount}</h5>
                                                                                                                                        <div class="form-row">
                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="name">Name:</label>
                                                                                                                                                <input type="text" name="name[]" id="name" class="form-control" value="${member.name || ''}" required>
                                                                                                                                            </div>

                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="age_fc">Age:</label>
                                                                                                                                                <input type="number" name="age_fc[]" id="age_fc" class="form-control" value="${member.age || ''}" required>
                                                                                                                                            </div>

                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="gender_fc">Sex: <span style="color: red;">*</span></label>
                                                                                                                                                <select name="gender_fc[]" id="gender_fc" class="form-control" required>
                                                                                                                                                    <option value="Male" ${member.sex === 'Male' ? 'selected' : ''}>Male</option>
                                                                                                                                                    <option value="Female" ${member.sex === 'Female' ? 'selected' : ''}>Female</option>
                                                                                                                                                </select>
                                                                                                                                            </div>
                                                                                                                                        </div>

                                                                                                                                        <div class="form-row">
                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="civil_status_fc">Civil Status:</label>
                                                                                                                                                <input type="text" name="civil_status_fc[]" id="civil_status_fc" class="form-control" value="${member.civil_status || ''}" required>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="relationship">Relation:</label>
                                                                                                                                                <input type="text" name="relationship[]" id="relationship" class="form-control" required value="${member.relation || ''}">
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group col-md-4">
                                                                                                                                                <label for="educational_attainment_fc">Educational Attainment:</label>
                                                                                                                                                <input type="text" name="educational_attainment_fc[]" id="educational_attainment_fc" class="form-control" value="" required>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="form-row">
                                                                                                                                            <div class="form-group col-md-12">
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
