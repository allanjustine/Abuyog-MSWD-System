<form action="/submit-application/osca/{{ $service->id }}" method="POST" class="form-container" id="myForm">
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
    <!-- User Information Section -->
    <div class="form-row" hidden>
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

    <div class="form-row" hidden>
        <div class="form-group col-md-3">
            <label>Birthdate <span style="color: red;">*</span> </label>
            <input type="date" name="date_of_birth" class="form-control" id="birthdate"
                value="{{ Auth::user()?->date_of_birth?->format('Y-m-d') }}" required readonly>
            @error('date_of_birth')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-1">
            <label>Age <span style="color: red;">*</span></label>
            <input type="text" name="age" class="form-control" id="age" placeholder="Age" readonly
                value="{{ Auth::user()->age }}">
            @error('age')
                <small class="text-danger">{{ $message }}</small>
            @enderror
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
        <div class="form-group col-md-4" hidden>
            <label>Place of Birth <span style="color: red;">*</span></label>
            <input type="text" name="place_of_birth" class="form-control" placeholder="Birthplace"
                value="{{ old('place_of_birth', Auth::user()?->basicInfo?->place_of_birth) }}">
        </div>
        <div class="form-group col-md-4" hidden>
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
        <div class="form-group col-md-4" hidden>
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
    </div>




    <div class="form-row">
        <div class="form-group col-md-4" hidden>
            <label>Occupation:</label>
            <input type="text" name="occupation" class="form-control" placeholder="Occupation"
                value="{{ old('occupation', Auth::user()?->basicInfo?->occupation) }}">
        </div>
        <div class="form-group col-md-6">
            <label>Annual Income:</label>
            <input type="text" name="annual_income" class="form-control" placeholder="Annual Income"
                value="{{ old('annual_income', Auth::user()?->basicInfo?->annual_income ?? '') }}">
            @error('annual_income')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label>Other Skills:</label>
            <input type="text" name="other_skills" class="form-control" placeholder="Other Skills"
                value="{{ old('other_skills', Auth::user()?->basicInfo?->skills ?? '') }}" style="text-transform: uppercase;">
            @error('other_skills')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <h5><i class="fa-solid fa-clipboard-list"></i> <strong>APPLICATION DETAILS</strong></h5>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Date for Personal Appearance <span style="color: red;">*</span></label>
            <input type="date" name="appearance_date" id="appearance_date" class="form-control" required>
            @error('appearance_date')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <h5><i class="fa-solid fa-users"></i> <strong>FAMILY COMPOSITION</strong></h5>
    </div>

    {{-- <div class="form-group">
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
    </div> --}}

    {{-- <script>
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
    </script> --}}

    <div class="mt-3 d-flex flex-column align-items-end">
        {{-- <div class="mb-2 form-check">
            <input type="checkbox" name="save_for_next_application" class="form-check-input"
                id="save_for_next_application" {{ session()->has('saved_application_data') ? 'checked' : '' }}>
            <label class="form-check-label" for="save_for_next_application">
                Save my information for the next application
            </label>
        </div> --}}
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
