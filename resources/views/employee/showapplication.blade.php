<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Applications</title>

    @include('employee.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: rgb(174, 164, 164);
            /* Light gray background */
        }

        .btn {

            color: black;
        }

        /* Button Colors */
        .btn-info {
            border-color: #007bff;
        }

        .btn-success {
            border-color: #28a745;
        }

        .btn-danger {
            border-color: #dc3545;
        }

        .btn-warning {
            border-color: #ffc107;
        }

        /* Hover Effect: Icon Design Change */
        .btn-info:hover i {
            color: #007bff;
            font-weight: bold;
        }

        .btn-success:hover i {
            color: #28a745;
            font-weight: bold;
        }

        .btn-danger:hover i {
            color: #dc3545;
            font-weight: bold;
        }

        .btn-warning:hover i {
            color: #ffc107;
            font-weight: bold;
        }

        /* On Click: Change Button Border and Text Color to Black */
        .btn:active {
            border-color: black;
            color: black;
        }

        .btn:active i {
            color: black;
        }



        /* Table Responsiveness */
        .table-responsive {
            overflow-x: auto;
        }

        /* Ellipsis for Overflowing Text */
        .text-ellipsis {
            max-width: 150px;
            /* Adjust as needed */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Add hover tooltip for full content */
        .text-ellipsis:hover {
            overflow: visible;
            white-space: normal;
            position: relative;
            z-index: 10;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 5px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('employee.sidebar')
        @include('employee.navbar')

        <div class="container-fluid fpage-body-wrapper">
            <div class="container mt-5">
                <div class="card" style="padding-top:20px;">
                    <div class="text-center card-header">
                        <h5 class="mt-2">All Applications</h5>
                    </div>

                    <!-- Search Bar -->
                    <div class="px-3 py-2 d-flex justify-content-end">
                        <form action="{{ route('apply.search') }}" method="GET" class="d-flex">
                            <input type="text" name="search" class="form-control me-2" placeholder="Search..."
                                value="{{ request()->search }}" style="max-width: 300px;">
                            <button type="submit" class="gap-1 btn btn-primary d-flex">
                                <i class="bi bi-search"></i> <span>Search</span>
                            </button>
                        </form>
                    </div>

                    <!-- Table -->
                    <div class="card-body">



                        @if (session('success'))
                        <div class="d-flex justify-content-center">
                            <div class="text-center alert alert-success w-50">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                                {{ session('success') }}
                            </div>
                        </div>
                        @endif

                        @if (session('error'))
                        <div class="d-flex justify-content-center">
                            <div class="text-center alert alert-danger w-50">
                                {{ session('error') }}
                            </div>
                        </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered table-striped">
                                <thead class="text-center">
                                    <tr>
                                        <th>Beneficiary Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Services Applied</th>
                                        <th>Scheduled Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    @php
                                    $customFields = json_decode($item->custom_fields, true);
                                    @endphp
                                    <tr id="application-{{ $item->id }}">
                                        <td>{{ $item->full_name }} {{ $customFields['last_name'] ?? '' }}</td>
                                        <td class="text-ellipsis">{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td class="text-ellipsis"
                                            title="{{ $item->service->name ?? 'No Service Assigned' }}">
                                            {{ $item->service->name ?? 'No Service Assigned' }}
                                        </td>
                                        <td>{{ $item?->appearance_date?->format('F d, Y') ?? 'No selected date' }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td class="text-center">
                                            <!-- Action Buttons -->
                                            <a href="#" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#viewModal{{ $item?->id }}">
                                                <i class="bi bi-eye">View</i>
                                            </a>
                                            @if ($item->status === 'pending')
                                            <button class="btn btn-success btn-sm"
                                                onclick="confirmApproval('{{ url('approved', $item->id) }}')">
                                                <i class="bi bi-check-circle"></i>
                                            </button>
                                            <button class="btn btn-danger btn-sm"
                                                onclick="showCancelModal({{ $item->id }})">
                                                <i class="bi bi-x-circle"></i>
                                            </button>
                                            @endif
                                            @if ($item->status === 'rejected')
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editReasonModal{{ $item->id }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            @endif
                                        </td>
                                    </tr>

                                    @include('admin.components.view-modal')
                                    <div class="modal fade" id="editReasonModal{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="editReasonModalLabel{{ $item->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="{{ url('edit-reason', $item->id) }}" method="POST">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editReasonModalLabel{{ $item->id }}">Edit Rejection
                                                            Reason
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <textarea class="form-control" name="reason" rows="3"
                                                            required>{{ $item->cancellation_reason }}</textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                {{ $data->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cancel Confirmation Modal -->
            <div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="cancelModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ url('cancelled') }}" method="POST">
                            @csrf
                            <input type="hidden" name="application_id" id="applicationId">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cancelModalLabel">Cancel Application</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to cancel this application?</p>
                                <div class="form-group">
                                    <label for="reason">Reason for Cancellation:</label>
                                    <textarea class="form-control" name="reason" id="reason" rows="3"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Confirm Cancellation</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('employee.script')


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function confirmApproval(approvalUrl) {
                Swal.fire({
                    title: '<span style="color: black;">Are you sure you want to approve this?</span>',
                    html: '<span style="color: black;">Please double-check the data of the applicant.</span>',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, approve it!',
                    cancelButtonText: 'Cancel',
                    background: '#f8f9fa', // Light background
                    customClass: {
                        title: 'swal-title-custom',
                        popup: 'swal-popup-custom',
                        icon: 'swal-icon-custom',
                    },
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: '<span style="color: black;">Processing...</span>',
                            html: '<span style="color: black;">Please wait while the application is being approved.</span>',
                            allowOutsideClick: false,
                            showConfirmButton: false,
                            didOpen: () => {
                                Swal.showLoading();
                                // Redirect to the approval URL
                                window.location.href = approvalUrl;
                            },
                            background: '#f8f9fa', // Light background
                        });
                    }
                });
            }
        </script>

        <style>
            /* Adjust the spacing between icon and title */
            .swal-popup-custom {
                padding: 20px !important;
                /* Adjust overall padding */
            }

            .swal-title-custom {
                margin-top: 8px !important;
                /* Reduce space below icon */
                color: black !important;
                /* Ensure title text is black */
            }

            .swal-icon-custom {
                margin-bottom: 8px !important;
                /* Reduce space below the icon */
            }
        </style>

        <script>
            function hideButtons(applicationId) {
                document.getElementById('approve-btn-' + applicationId).style.display = 'none';
                document.getElementById('cancel-btn-' + applicationId).style.display = 'none';
            }

            function showCancelModal(applicationId) {
                document.getElementById('applicationId').value = applicationId;
                var cancelModal = new bootstrap.Modal(document.getElementById('cancelModal'));
                cancelModal.show();
            }
        </script>


    </div>
</body>

</html>
