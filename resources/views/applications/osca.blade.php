<form action="/submit-application/osca/{{ $service->id }}" method="POST" class="form-container" id="myForm">
    @csrf

    <p style="color: red; font-weight: normal;">
        Please fill up completely and correctly the required information before each item below. For items
        that are not associated to you, leave it blank.
        <span style="font-weight: bold;">Required items are also marked with an asterisk (*)</span> so
        please fill it up correctly.
    </p>
    <!-- User Information Section -->
    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Last Name (Apelyido) <span style="color: red;">*</span></label>
            <input type="text" name="last_name" class="form-control" placeholder="Last Name"
                value="{{ Auth::user()->last_name }}" readonly style="text-transform: uppercase;">
            @error('last_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label>First Name (Pangalan) <span style="color: red;">*</span></label>
            <input type="text" name="first_name" class="form-control" placeholder="First Name"
                value="{{ Auth::user()->first_name }}" readonly style="text-transform: uppercase;">
            @error('fist_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label>Middle Name (Gitnang Pangalan) </label>
            <input type="text" name="middle_name" class="form-control" placeholder="Middle Name"
                value="{{ Auth::user()->middle_name }}" readonly style="text-transform: uppercase;">
            @error('middle_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Birthdate <span style="color: red;">*</span> - Indicate your birthdate correctly</label>
            <input type="date" name="date_of_birth" class="form-control" id="birthdate"
                value="{{ Auth::user()->date_of_birth }}" required>
            @error('date_of_birth')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label>Age <span style="color: red;">*</span></label>
            <input type="text" name="age" class="form-control" id="age" placeholder="Age" readonly
                value="{{ Auth::user()->age }}">
            @error('age')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Gender <span style="color: red;">*</span></label>
            <select name="gender" class="form-control" required>
                <option value="" disabled selected>SELECT GENDER </option>
                <option value="Female" {{ Auth::user()->gender =='Female' ? 'selected' : '' }}>
                    FEMALE</option>
                <option value="Male" {{ Auth::user()->gender =='Male' ? 'selected' : '' }}>MALE
                </option>
                <option value="Rather not to say" {{ Auth::user()->gender =='Rather not to say' ? 'selected' : ''
                    }}>RATHER NOT TO SAY
                </option>
            </select>
            @error('gender')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label>Place of birth:</label>
            <input type="text" name="place_of_birth" class="form-control" placeholder="Place of Birth"
                value="{{ old('place_of_birth', $birthplace ?? '') }}" style="text-transform: uppercase;">
            @error('place_of_birht')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label>Civil Status <span style="color: red;">*</span></label>
            <select name="civil_status" class="form-control" required>
                <option value="" disabled selected>SELECT STATUS</option>
                <option value="Single" {{ (old('civil_status', $status ?? '' )=='Single' ) ? 'selected' : '' }}>SINGLE
                </option>
                <option value="Married" {{ (old('civil_status', $status ?? '' )=='Married' ) ? 'selected' : '' }}>
                    MARRIED</option>
                <option value="Widow/Widower" {{ (old('civil_status', $status ?? '' )=='Widow/Widower' ) ? 'selected'
                    : '' }}>
                    WIDOW/WIDOWER</option>
                <option value="Separated" {{ (old('civil_status', $status ?? '' )=='Separated' ) ? 'selected' : '' }}>
                    SEPARATED</option>
            </select>
            @error('civil_status')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            Complete Address <span style="color: red;">*</span>
            <input type="text" name="complete_address" class="form-control" placeholder="Complete Address"
                value="{{ old('complete_address', $address ?? '') }}" required style="text-transform: uppercase;">
            @error('complete_address')
            <small class="text-danger">{{ $message }}</small>
            @enderror
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
            @error('barangay')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Educational Attainment <span style="color: red;">*</span>:</label>
            <select name="educational_attainment" class="form-control" required>
                <option value="" disabled selected>SELECT</option>
                <option value="Not Attended School" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='Not Attended School' ) ? 'selected' : '' }}>Not
                    Attended School</option>
                <option value="Elementary Level" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='Elementary Level' ) ? 'selected' : '' }}>
                    Elementary Level</option>
                <option value="Elementary Graduate" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='Elementary Graduate' ) ? 'selected' : '' }}>
                    Elementary Graduate</option>
                <option value="Highschool Level" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='Highschool Level' ) ? 'selected' : '' }}>
                    Highschool Level</option>
                <option value="Highschool Graduate" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='Highschool Graduate' ) ? 'selected' : '' }}>
                    Highschool Graduate</option>
                <option value="Vocational" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='Vocational' ) ? 'selected' : '' }}>
                    Vocational</option>
                <option value="College Level" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='College Level' ) ? 'selected' : '' }}>
                    College Level</option>
                <option value="College Graduate" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='College Graduate' ) ? 'selected' : '' }}>College
                    Graduate</option>
                <option value="Post Graduate" {{ (old('educational_attainment', $educational_attainment ?? ''
                    )=='Post Graduate' ) ? 'selected' : '' }}>Post
                    Graduate</option>
            </select>
            @error('educational_attainment')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label>Occupation:</label>
            <input type="text" name="occupation" class="form-control" placeholder="Occupation"
                value="{{ old('occupation', $occupation ?? '') }}" style="text-transform: uppercase;">
            @error('occupation')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label>Annual Income:</label>
            <input type="text" name="annual_income" class="form-control" placeholder="Annual Income"
                value="{{ old('annual_income', $annual_income ?? '') }}">
            @error('annual_income')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="form-group">Other Skills:
        <input type="text" name="other_skills" class="form-control" placeholder="Other Skills"
            value="{{ old('other_skills', $other_skills ?? '') }}" style="text-transform: uppercase;">
        @error('other_skills')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Phone <span style="color: red;">*</span></label>
            <input type="text" name="phone" class="form-control" placeholder="Phone"
                value="{{ old('phone', $phone ?? Auth::user()->phone) }}" readonly>
        </div>
        <div class="form-group col-md-4">
            <label>Email:</label>
            <input type="text" name="email" class="form-control" placeholder="Email"
                value="{{ old('email', $email ?? Auth::user()->email) }}" readonly>
        </div>
        <div class="form-group col-md-4">
            <label>Date for Personal Appearance <span style="color: red;">*</span></label>
            <input type="date" name="appearance_date" id="appearance_date" class="form-control" required>
            @error('appearance_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
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
                            if (memberCount >= 10) {
                                Swal.fire({
                                    icon: 'warning', // Icon for the alert (e.g., 'success', 'error', 'warning', 'info', 'question')
                                    title: 'Limit Reached',
                                    text: 'Maximum of 10 family members only.', // The message
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
                                                                                                                    <input type="text" name="name[]" id="name" class="form-control" value="${member.name || ''}" required style="text-transform: uppercase;">
                                                                                                                </div>
                                                                                                                <div class="form-group col-md-4">
                                                                                                                    <label for="relationship">Relation to Client:</label>
                                                                                                                    <input type="text" name="relationship[]" id="relationship" class="form-control" value="${member.relation || ''}" required style="text-transform: uppercase;">
                                                                                                                </div>
                                                                                                                <div class="form-group col-md-4">
                                                                                                                    <label for="age">Age:</label>
                                                                                                                    <input type="number" name="age_fc[]" id="age" class="form-control" value="${member.age || ''}" required style="text-transform: uppercase;">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-row">
                                                                                                                <div class="form-group col-md-4">
                                                                                                                    <label for="civil_status_fc">Civil Status:</label>
                                                                                                                    <input type="text" name="civil_status_fc[]" id="civil_status_fc" class="form-control" value="${member.civil_status || ''}" required style="text-transform: uppercase;">
                                                                                                                </div>
                                                                                                                <div class="form-group col-md-4">
                                                                                                                    <label for="occupation_fc">Occupation:</label>
                                                                                                                    <input type="text" name="occupation_fc[]" id="occupation_fc" class="form-control" value="${member.occupation || ''}" style="text-transform: uppercase;">
                                                                                                                </div>
                                                                                                                <div class="form-group col-md-4">
                                                                                                                    <label for="income">Income:</label>
                                                                                                                    <input type="text" name="income[]" id="income" class="form-control" value="${member.income || ''}" >
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
                        console.log(memberCount);
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const birthdateInput = document.getElementById('birthdate');
        const ageInput = document.getElementById('age');
        const submitButton = document.getElementById('submit-button');

        function calculateAge(birthdate) {
            const today = new Date();
            const birthDate = new Date(birthdate);
            let age = today.getFullYear() - birthDate.getFullYear();
            const monthDiff = today.getMonth() - birthDate.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            return age;
        }

        birthdateInput.addEventListener('change', function () {
            const birthdate = birthdateInput.value;
            if (birthdate) {
                const age = calculateAge(birthdate);
                ageInput.value = age;

                if (age < 60) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Invalid Age',
                        text: 'Applicants must be 60 years old or older to apply for OSCA.',
                        confirmButtonText: 'OK'
                    });
                    // Clear the birthdate and age fields
                    birthdateInput.value = '';
                    ageInput.value = '';
                }
            }
        });

        submitButton.addEventListener('click', function (e) {
            const age = parseInt(ageInput.value, 10);
            if (age < 60 || isNaN(age)) {
                e.preventDefault(); // Prevent form submission
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Submission',
                    text: 'Please ensure the applicant is 60 years old or older.',
                    confirmButtonText: 'OK'
                });
            }
        });
    });
</script>
