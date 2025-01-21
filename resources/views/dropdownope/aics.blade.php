<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AICs</title>

    @include('operator.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Make sure Font Awesome is included in the head section -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>
    <style>
    /* Wrap long messages within table cells */
    #smsLogsTable td {
        white-space: normal;
        word-break: break-word;
    }

    /* Limit the table row height if needed */
    #smsLogsTable td {
        max-width: 300px; /* Adjust to your preference */
        overflow: hidden;
    }

    /* Add optional hover effect to view full message */
    #smsLogsTable td:hover {
        overflow: visible;
        position: relative;
        z-index: 1;
    }
</style>
</head>

<body>
    <div class="container-scroller">

        @include('operator.sidebar')

        @include('operator.navbar')

        <div class="container">
            <div class="card" align="center" style="padding-top:80px;">
                <div class="card-header">
                    AICs
                    <a href="{{ url('/add_beneficiary_operator') }}" class="btn btn-success btn-sm float-end ms-2">Add
                        New</a>

                   <!-- Send SMS Modal -->
<div class="modal fade" id="sendSmsModal" tabindex="-1" aria-labelledby="sendSmsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sendSmsModalLabel">Send SMS to Beneficiaries</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="confirmSendBulkSmsBtn">Send SMS</button>
            </div>
        </div>
    </div>
</div>
                   
<a href="#" class="btn btn-secondary btn-sm float-end ms-2" id="viewLogsButton"
                        data-bs-toggle="modal" data-bs-target="#logsModal">
                        <i class="fa fa-history"></i> Logs
                    </a>

 <!-- Logs Modal -->
<div class="modal fade" id="logsModal" tabindex="-1" aria-labelledby="logsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logsModalLabel">SMS Logs</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Make the table responsive -->
                <div class="table-responsive">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th>Message</th>
                                <th>Recipient</th>
                                <th>Date Sent</th>
                                <th>Status</th>
                                <th>Reason</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="smsLogsTable">
                            <!-- Logs will be dynamically populated -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


                    <!-- Logs Modal -->
                    <div class="modal fade" id="logsModal" tabindex="-1" aria-labelledby="logsModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="logsModalLabel">SMS Logs</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-sm table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Message</th>
                                                <th>Recipient</th>
                                                <th>Date Sent</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="smsLogsTable">
                                            <!-- Logs will be populated dynamically -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!-- Modal -->
                    <div class="modal fade" id="sendSmsModal" tabindex="-1" aria-labelledby="sendSmsModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="sendSmsModalLabel">Send SMS to Beneficiary</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- SMS Message Input -->
                                    <textarea class="form-control" id="smsMessage" rows="4" placeholder="Type your message here..."></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="sendSmsBtn"
                                        data-bs-dismiss="modal">Send SMS</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{--  <a href="{{ url('send-sms', $beneficiaries->first()->id) }}"
                        class="btn btn-primary btn-sm float-end">Send
                        SMS</a>  --}}
                </div>
            </div>

            <!-- Align the search form to the right -->
            <form action="{{ url('beneficiary_search_ope') }}" method="get" class="text-end">
                @csrf
                <input type="search" name="search" placeholder="Search.." class="form-control d-inline-block"
                    style="width: auto;">
                <input type="submit" class="btn btn-primary d-inline-block" value="Search">
            </form>

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
                            <td>{{ $beneficiary->service ? $beneficiary->service->name : 'No Program' }}
                            </td>
                            <td>{{ $beneficiary->barangay->name ?? 'No Barangay' }}</td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <!-- View Button -->
                                    <button class="btn btn-info btn-sm" type="button" data-bs-toggle="modal"
                                        data-bs-target="#viewModal{{ $beneficiary->id }}">
                                        View
                                    </button>

                                    <!-- Edit Button -->
                                    <a class="btn btn-success btn-sm ms-2"
                                        href="{{ url('edit_beneficiary_operator', $beneficiary->id) }}">Edit</a>

                                    <!-- Delete Button with Modal Trigger -->
                                    <button class="btn btn-danger btn-sm ms-2" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $beneficiary->id }}">
                                        Delete
                                    </button>
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
                                                        value="{{ $beneficiary->middle_name ?? 'N/A' }}" disabled>
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
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><strong>Age:</strong></label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $beneficiary->age }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label><strong>Gender:</strong></label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $beneficiary->gender }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><strong>Civil Status:</strong></label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $beneficiary->civil_status }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label><strong>Gov ID Number:</strong></label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $beneficiary->gov_id_number }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label><strong>Program Specific ID:</strong></label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $beneficiary->program_specific_id }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Date of Application:</strong></label>
                                            <input type="text" class="form-control"
                                                value="{{ $beneficiary->date_of_application }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Assistance Availed:</strong></label>
                                            <input type="text" class="form-control"
                                                value="{{ $beneficiary->assistance_availed }}" disabled>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Delete Confirmation Modal -->
                        <div class="modal fade" id="deleteModal{{ $beneficiary->id }}" tabindex="-1"
                            aria-labelledby="deleteModalLabel{{ $beneficiary->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="text-white modal-header bg-danger">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $beneficiary->id }}">
                                            Confirm Deletion</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete
                                            <strong>{{ $beneficiary->first_name }}
                                                {{ $beneficiary->last_name }}</strong>? This action cannot
                                            be
                                            undone.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <a class="btn btn-danger"
                                            href="{{ url('deletebeneficiaries', $beneficiary->id) }}">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <!-- Check if there are beneficiaries and set the JavaScript variable accordingly -->
    @if ($beneficiaries->isNotEmpty())
        <script>
            var beneficiaryId = '{{ $beneficiaries->first()->id }}'; // Get the beneficiary ID
        </script>
    @else
        <script>
            console.error('No beneficiaries available.');
        </script>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
<script>
document.getElementById('sendBulkSmsBtn').addEventListener('click', function () {
    // Show the modal
    const smsModal = new bootstrap.Modal(document.getElementById('sendSmsModal'));
    smsModal.show();
});

document.getElementById('confirmSendBulkSmsBtn').addEventListener('click', function () {
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
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify({ phoneNumbers, message }),
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



<script>
    // Fetch and Populate Logs on Modal Open
document.getElementById('viewLogsButton').addEventListener('click', function () {
    fetch('/fetch-sms-logs')
        .then((response) => response.json())
        .then((data) => {
            const logsTable = document.getElementById('smsLogsTable');
            logsTable.innerHTML = '';

            data.logs.forEach((log) => {
                const statusClass = log.status === 'Failed' ? 'text-danger' : 'text-success';
                const reason = log.reason || 'N/A';

                const row = `
                    <tr>
                        <td>${log.message}</td>
                        <td>${log.phone_number}</td>
                        <td>${new Date(log.created_at).toLocaleString()}</td>
                        <td class="${statusClass}">${log.status}</td>
                        <td>${reason}</td>
                        <td>
                            ${
                                log.status === 'Failed'
                                    ? `<button class="btn btn-primary btn-sm resendBtn" data-id="${log.id}">Resend</button>`
                                    : ''
                            }
                        </td>
                    </tr>
                `;
                logsTable.insertAdjacentHTML('beforeend', row);
            });

            // Attach event listeners to Resend buttons
            document.querySelectorAll('.resendBtn').forEach((button) => {
                button.addEventListener('click', function () {
                    const logId = this.dataset.id;
                    resendSms(logId);
                });
            });
        })
        .catch((error) => {
            console.error('Error fetching SMS logs:', error);
        });
});

// Resend SMS Functionality
function resendSms(logId) {
    Swal.fire({
        title: 'Resending SMS...',
        text: 'Please wait while the SMS is being resent.',
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        },
    });

    fetch(`/resend-sms/${logId}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'SMS Resent Successfully',
                    text: data.message,
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Failed to Resend SMS',
                    text: data.message,
                });
            }

            // Refresh the logs
            document.getElementById('viewLogsButton').click();
        })
        .catch((error) => {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'An error occurred while resending SMS.',
            });
            console.error('Error resending SMS:', error);
        });
}

</script>

    @include('admin.script')
</body>

</html>
