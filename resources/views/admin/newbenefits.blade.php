<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Assistance to Beneficiaries</title>

    @include('admin.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-scroller">

        @include('admin.sidebar')

        @include('admin.navbar')

        <div class="container">
            <div class="card" align="center" style="padding-top:80px;">
                <div class="card-header">
                    Add New Assistance to Selected Beneficiaries

                </div>


                <div class="container mt-4">
                    <!-- Filter Button -->
                    <div class="text-start mb-3">
                        <button type="button" class="btn btn-warning btn-md" data-bs-toggle="modal"
                            data-bs-target="#addAssistanceModal">
                            Filter Beneficiaries by New Assistance
                        </button>
                    </div>

                    <!-- Send SMS Buttons -->
                    <div class="d-flex justify-content-end mb-3">
                        <a href="#" class="btn btn-primary btn-md me-2" id="sendBulkSmsBtn">
                            <i class="fa fa-paper-plane"></i> Send SMS to All
                        </a>
                    </div>

                    <!-- Send SMS Modal -->
                    <div class="modal fade" id="sendSmsModal" tabindex="-1" aria-labelledby="sendSmsModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="sendSmsModalLabel">Send SMS to Beneficiaries</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="bulkSmsForm">
                                        <!-- Message Input -->
                                        <div class="mb-3">
                                            <label for="bulkSmsMessage" class="form-label">Message</label>
                                            <textarea class="form-control" id="bulkSmsMessage" rows="4" placeholder="Type your message here..." required></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="confirmSendBulkSmsBtn">Send
                                        SMS</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add Assistance Button -->
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-info btn-lg" data-bs-toggle="modal"
                            data-bs-target="#addselectedAssistanceModal" style="width: 60%;">
                            Add Assistance to Selected Beneficiaries
                        </button>
                    </div>
                </div>


                <div id="totalNumberContainer" class="my-3">
                    <strong>Total Number of Beneficiaries:</strong>
                    <span id="totalNumber">{{ $totalBeneficiaries }}</span>
                </div>


                <!-- Add Assistance Modal -->
                <div class="modal fade" id="addAssistanceModal" tabindex="-1" aria-labelledby="addAssistanceLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <!-- Align the search form to the right -->
                        <form action="/add_assistance" method="GET" class="mt-3" id="addAssistanceForm">
                            @csrf
                            <div class="modal-content">
                                <h5 style="margin-top:5%;">Filter Beneficiaries by New Assistance</h5>
                                <div class="row" style="padding: 0 15px;">
                                    <div class="col-md-6 mb-3">
                                        <label for="min_age" class="form-label" style="margin-top: 5%;">Age
                                            From</label>
                                        <input type="number" class="form-control" id="min_age" name="min_age"
                                            min="0">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="max_age" class="form-label" style="margin-top: 5%;">Age To</label>
                                        <input type="number" class="form-control" id="max_age" name="max_age"
                                            min="0">
                                    </div>
                                </div>
                                <div class="row" style="padding: 0 15px;">
                                    <div class="col-md-6 mb-3">
                                        <label for="limit" class="form-label" style="margin-top: 5%;">Limit of
                                            Beneficiaries that will receive the assistance</label>
                                        <input type="number" class="form-control" id="limit" name="limit">
                                    </div>
                                    <!-- Service Section -->
                                    <div class="col-md-6 mb-3">
                                        <label for="service_id" class="form-label" style="margin-top: 5%;">Select
                                            Programs (if applicable)</label>
                                        <div class="p-1 border rounded" style="margin-top:5%;">
                                            <select name="service_id" id="service_id" class="form-control">
                                                <option value="">-- Select Service --</option>
                                                @foreach ($services as $service)
                                                    <option value="{{ $service->id }}"
                                                        {{ request('service_id') == $service->id ? 'selected' : '' }}>
                                                        {{ $service->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding: 0 15px;">
                                    <div class="col-md-6 mb-3">
                                        <label for="name_of_assistance" class="form-label"
                                            style="margin-top: 5%;">Exclude Beneficiaries Who Received
                                            Assistance Before</label>
                                        <select name="name_of_assistance[]" id="name_of_assistance"
                                            class="form-control" multiple style="height: 200px;">
                                            @foreach ($assistanceList as $assistance)
                                                <option value="{{ $assistance }}"
                                                    {{ isset($nameOfAssistance) && in_array($assistance, (array) $nameOfAssistance) ? 'selected' : '' }}>
                                                    {{ $assistance }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <small class="text-muted">Hold Ctrl (Windows) or Cmd (Mac) to select multiple
                                            options.</small>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="barangaySelect" class="form-label" style="margin-top: 5%;">Select
                                            Barangay (if applicable)</label>
                                        <div class="p-1 border rounded" style="margin-top:5%;">
                                            <select name="barangay" id="barangaySelect" class="form-control">
                                                <option value="">-- Select Barangay --</option>
                                                @foreach ($barangays as $barangay)
                                                    <option value="{{ $barangay->id }}"
                                                        {{ request('barangay') == $barangay->id ? 'selected' : '' }}>
                                                        {{ $barangay->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="beneficiaryList" class="mt-3">
                                    <!-- Filtered beneficiaries will be dynamically added here -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success" id="submitButton">Generate
                                        Beneficiaries</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- <form action="{{ url('beneficiary_search') }}" method="get" class="text-end">
                    @csrf
                    <input type="search" name="search" placeholder="Search.." class="form-control d-inline-block"
                        style="width: auto;">
                    <input type="submit" class="btn btn-primary d-inline-block" value="Search">
                </form> -->

                <div class="table-responsive">
                    <table class="table table-sm table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Program Enrolled</th>
                                <th>Barangay</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($beneficiaries as $beneficiary)
                                <tr>

                                    <td>{{ $beneficiary->first_name }}</td>
                                    <td>{{ $beneficiary->middle_name }}</td>
                                    <td>{{ $beneficiary->last_name }}</td>
                                    <td>{{ $beneficiary->email }}</td>
                                    <td>{{ $beneficiary->phone }}</td>
                                    <td>{{ $beneficiary->service ? $beneficiary->service->name : 'No Program' }}</td>
                                    <td>{{ $beneficiary->barangay->name ?? 'No Barangay' }}</td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            <!-- View Button -->
                                            <button class="btn btn-info btn-sm" type="button" data-bs-toggle="modal"
                                                data-bs-target="#viewModal{{ $beneficiary->id }}">
                                                View
                                            </button>
                                            <!-- Remove Button
                                                                                                                                                                        <button class="btn btn-danger btn-sm" type="button"
                                                                                                                                                                            onclick="removeBeneficiaryRow({{ $beneficiary->id }})">
                                                                                                                                                                            Remove
                                                                                                                                                                        </button> -->
                                        </div>
                                    </td>
                                </tr>

                                <!-- View Modal -->
                                <div class="modal fade" id="viewModal{{ $beneficiary->id }}" tabindex="-1"
                                    aria-labelledby="viewModalLabel{{ $beneficiary->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewModalLabel{{ $beneficiary->id }}">
                                                    Beneficiary Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label><strong>First Name:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->first_name }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Middle Name:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->middle_name ?? 'N/A' }}"
                                                                disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Last Name:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->last_name }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Email:</strong></label>
                                                            <input type="email" class="form-control"
                                                                value="{{ $beneficiary->email }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Monthly Income:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->monthly_income ?? 'N/A' }}"
                                                                disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Gender:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->gender }}" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label><strong>Phone:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->phone }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Program Enrolled:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->service ? $beneficiary->service->name : 'No Program' }}"
                                                                disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Barangay:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->barangay->name ?? 'No Barangay' }}"
                                                                disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Date of Birth:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->date_of_birth }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Age:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->age }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Civil Status:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->civil_status }}" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label><strong>ID Number:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->id_number }}" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Assistance Details -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h5><strong>Assistance Received:</strong></h5>
                                                        @foreach ($beneficiary->benefitsReceived as $benefit)
                                                            <div class="row mb-3">
                                                                <!-- Name of Assistance -->
                                                                <div class="col-md-3">
                                                                    <label><strong>Name of Assistance:</strong></label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $benefit->name_of_assistance }}"
                                                                        disabled>
                                                                </div>
                                                                <!-- Type of Assistance -->
                                                                <div class="col-md-3">
                                                                    <label><strong>Type of Assistance:</strong></label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $benefit->type_of_assistance }}"
                                                                        disabled>
                                                                </div>
                                                                <!-- Amount -->
                                                                <div class="col-md-3">
                                                                    <label><strong>Amount:</strong></label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $benefit->amount }}" disabled>
                                                                </div>
                                                                <!-- Date Received -->
                                                                <div class="col-md-3">
                                                                    <label><strong>Date Received:</strong></label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $benefit->date_received ?? 'Not Yet Received' }}"
                                                                        disabled>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>


                                <!-- Add Assistance Modal -->
                                <div class="modal fade" id="addselectedAssistanceModal" tabindex="-1"
                                    aria-labelledby="addAssistanceLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <form action="{{ route('addAssistanceToBeneficiaries') }}" method="POST">
                                            @csrf
                                            <div class="modal-content">
                                                <h5 style="margin-top:5%;">Add Assistance to Beneficiaries</h5>

                                                <div class="row" style="padding: 0 15px;">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="name_of_assistance" class="form-label">Name of
                                                            Assistance</label>
                                                        <input type="text" name="name_of_assistance"
                                                            class="form-control" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <div class="form-group">
                                                            <label for="type_of_assistance">Type of Assistance</label>
                                                            <select name="type_of_assistance" class="form-control">
                                                                <option value="Medical">Medical</option>
                                                                <option value="Burial">Burial</option>
                                                                <option value="Transportation">Transportation</option>
                                                                <option value="Foods">Foods</option>
                                                                <option value="Emergency Shelter">Emergency Shelter
                                                                </option>
                                                                <option value="Educational">Educational</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-6 mb-3">
                                                        <label for="amount" class="form-label">Amount</label>
                                                        <input type="number" name="amount" class="form-control">
                                                    </div>
                                                </div>

                                                <!-- Dynamically add beneficiary IDs as hidden inputs -->
                                                @foreach ($beneficiaries as $beneficiary)
                                                    <input type="hidden" name="beneficiary_ids[]"
                                                        value="{{ $beneficiary->id }}">
                                                @endforeach

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success">Submit
                                                        Assistance</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                </div>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: '<span style="color: #000;">Success</span>', // Make title text black
                text: '{{ session('success') }}',
                background: '#f8f9fa', // Light gray background for better contrast
                iconColor: '#28a745', // Green icon color
                confirmButtonColor: '#28a745', // Button matches success color
                customClass: {
                    popup: 'swal-custom-popup' // Add a class to customize further with CSS
                }
            });
        @endif
    </script>

    <!-- Optional CSS for Further Customization -->
    <style>
        .swal-custom-popup {
            padding: 20px !important;
            /* Adjust padding */
        }

        .swal2-icon {
            margin-top: 20px !important;
            /* Push icon lower */
        }

        .swal2-title {
            font-size: 1.5rem !important;
            /* Adjust title font size */
            margin-top: 10px !important;
            /* Add some spacing above title */
        }

        .swal2-content {
            font-size: 1rem !important;
            /* Adjust text font size */
        }
    </style>




    <script>
        $(document).ready(function() {
            // When the modal is opened, collect the filtered beneficiaries
            $('#addselectedAssistanceModal').on('show.bs.modal', function() {
                // Collect the filtered beneficiaries from the DOM (you can adjust this based on your filter result display)
                let filteredBeneficiaries = [];
                // Loop through your table rows and check if they are part of the filtered list
                $('table tbody tr').each(function() {
                    // Assuming rows with filtered beneficiaries have a specific class or identifier
                    if ($(this).hasClass('filtered')) { // Adjust this condition as needed
                        filteredBeneficiaries.push($(this).data('id'));
                    }
                });

                // Set the hidden input with the beneficiary IDs
                $('#beneficiary_ids').val(filteredBeneficiaries.join(','));
            });
        });
    </script>
    <!-- <script>
        function removeBeneficiaryRow(beneficiaryId) {
            // Find the row by beneficiary ID and hide it
            const row = document.querySelector(`#beneficiaryRow${beneficiaryId}`);
            if (row) {
                row.style.display = 'none';
            }
        }
    </script> -->



    <script>
        document.getElementById('sendBulkSmsBtn').addEventListener('click', function() {
            // Show the modal
            const smsModal = new bootstrap.Modal(document.getElementById('sendSmsModal'));
            smsModal.show();
        });

        document.getElementById('confirmSendBulkSmsBtn').addEventListener('click', function() {
            const message = document.getElementById('bulkSmsMessage').value.trim();

            if (!message) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Please enter a message to send.',
                });
                return;
            }

            Swal.fire({
                title: 'Sending SMS...',
                text: 'Please wait while the messages are being sent.',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                },
            });

            // Collect phone numbers from the table
            const phoneNumbers = Array.from(document.querySelectorAll('tbody tr td:nth-child(5)')).map(
                (td) => td.textContent.trim()
            );

            // Send an AJAX POST request
            fetch('/send-bulk-sms', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content'),
                    },
                    body: JSON.stringify({
                        phoneNumbers,
                        message
                    }),
                })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: `${data.message}`,
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Failed',
                            text: 'Failed to send some messages. Please try again.',
                        });
                    }

                    // Close the modal
                    const smsModal = bootstrap.Modal.getInstance(document.getElementById('sendSmsModal'));
                    smsModal.hide();
                })
                .catch((error) => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'An error occurred while sending SMS. Please try again.',
                    });
                    console.error('Error sending bulk SMS:', error);
                });
        });
    </script>


    @include('admin.script')
</body>

</html>
