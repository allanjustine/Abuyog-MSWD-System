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
                    <div class="d-flex justify-content-end float-end">
                        <form class="d-flex" method="GET">
                            <input type="search" name="search" class="form-control me-2" value="{{ request('search') }}" placeholder="Search..." />
                            <button type="submit" class="btn btn-primary"><i class="fas fa-magnifying-glass"></i></button>
                        </form>
                    </div>

                    {{--  <!-- Search Bar -->
                    <div class="px-3 py-2 d-flex justify-content-end">
                        <form action="{{ route('apply.search') }}" method="GET" class="d-flex">
                            <input type="text" name="search" class="form-control me-2" placeholder="Search..."
                                value="{{ request()->search }}" style="max-width: 300px;">
                            <button type="submit" class="gap-1 btn btn-primary d-flex">
                                <i class="bi bi-search"></i> <span>Search</span>
                            </button>
                        </form>
                    </div>  --}}

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
                                        <!-- <th>Email</th> -->
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
                                            <!-- <td class="text-ellipsis">{{ $item->email }}</td> -->
                                            <td>{{ $item->phone }}</td>
                                            <td class="text-ellipsis"
                                                title="{{ $item->service->name ?? 'No Service Assigned' }}">
                                                {{ $item->service->name ?? 'No Service Assigned' }}
                                            </td>
                                            <td>{{ $item?->appearance_date?->format('F d, Y') ?? 'No selected date' }}
                                            </td>
                                            <td>{{ $item->status }}</td>
                                            <td class="text-start">
                                                <div class="d-flex gap-1">
                                                    <!-- Action Buttons -->
                                                    <a href="#" class="btn btn-info btn-md" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal{{ $item?->id }}">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    @if ($item->status === 'pending')
                                                        <button class="btn btn-success btn-md"
                                                        data-bs-toggle="modal"
                                                            data-bs-target="#ApproveModal{{ $item->id }}"
                                                        >
                                                            <i class="bi bi-check-circle"></i>
                                                        </button>
                                                        {{-- <button class="btn btn-success btn-md"
                                                            onclick="confirmApproval('{{ url('approved', $item->id) }}')">
                                                            <i class="bi bi-check-circle"></i>
                                                        </button> --}}
                                                        <button class="btn btn-danger btn-md"
                                                            onclick="showCancelModal({{ $item->id }})">
                                                            <i class="bi bi-x-circle"></i>
                                                        </button>
                                                    @endif

                                                </div>
                                            </td>
                                        </tr>

                                        @include('admin.components.view-modal')
                                        <div class="modal fade" id="editReasonModal{{ $item->id }}" tabindex="-1"
                                            aria-labelledby="editReasonModalLabel{{ $item->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ url('edit-reason', $item->id) }}" method="POST">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="editReasonModalLabel{{ $item->id }}">Edit
                                                                Rejection
                                                                Reason
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <textarea class="form-control" name="reason" rows="3" required>{{ $item->cancellation_reason }}</textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                Changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="ApproveModal{{ $item->id }}" tabindex="-1"
                                            aria-labelledby="ApproveModal{{ $item->id }}Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="/approved/{{ $item->id }}" method="GET">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5"
                                                                id="ApproveModal{{ $item->id }}Label">
                                                                Confirming...
                                                            </h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
                                                            <p>Do you want to accept this application?
                                                            </p>
                                                            <p>
                                                                Ensure that the applicant has submitted all the required
                                                                documents before you approve.
                                                            </p>

                                                            @if ($item->service->id == 4)
                                                                {{-- AICS service --}}
                                                                @php
                                                                    // Safely check if aicsDetails is not empty before accessing the first element
                                                                    $aicsType = isset($item->aicsDetails[0])
                                                                        ? $item->aicsDetails[0]->type_of_assistance
                                                                        : 'Default';
                                                                    $requirements = [];
                                                                @endphp

                                                                @switch($aicsType)
                                                                    @case('Medical Assistance')
                                                                        @php
                                                                            $requirements = [
                                                                                'Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy',
                                                                                'Medical Certification/Clinical Abstract issued within 3 months (with signature and license number of the attending physician) - 1 original and 2 photocopy',
                                                                                'Statement of Account/Billing Statement(for Billing) - 1 original and 2 photocopy',
                                                                                'Pharmacy Receipt - 1 original and 2 photocopy',
                                                                                "Doctor's Prescription - 1 original and 2 photocopy",
                                                                                'Fully accomplished Application Form',
                                                                            ];
                                                                        @endphp
                                                                    @break

                                                                    @case('Burial Assistance')
                                                                        @php
                                                                            $requirements = [
                                                                                'Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy',
                                                                                'Registered Death Certificate - 1 original and 2 photocopy',
                                                                                'Funeral Contract - 1 original and 2 photocopy',
                                                                                'Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy',
                                                                                "Senior Citizen's Id (deceased senior citizen) - Certified True Copy and 2 photocopy",
                                                                                'Fully accomplished Application Form',
                                                                            ];
                                                                        @endphp
                                                                    @break

                                                                    @case('Transportation Assistance')
                                                                        @php
                                                                            $requirements = [
                                                                                'Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy',
                                                                                'Social Case Study Report - 2 Original Copy',
                                                                                'Letter Request - 1 original and 2 photocopy',
                                                                                'Fully accomplished Application Form',
                                                                            ];
                                                                        @endphp
                                                                    @break

                                                                    @case('Food Assistance')
                                                                        @php
                                                                            $requirements = [
                                                                                'Intake/Interview of clients suffering from starvation to determine eligibility for assistance',
                                                                                'Fully accomplished Application Form',
                                                                            ];
                                                                        @endphp
                                                                    @break

                                                                    @case('Emergency Shelter Assistance')
                                                                        @php
                                                                            $requirements = [
                                                                                'Fully accomplished Application Form',
                                                                                'Bureau of Fire Protection Certification',
                                                                                "Intake/Interview of client to determine one's eligibility for assistance",
                                                                                'Picture of the damaged house - 3 copies',
                                                                            ];
                                                                        @endphp
                                                                    @break

                                                                    @case('Educational Assistance')
                                                                        @php
                                                                            $requirements = [
                                                                                'Any valid ID/Barangay Certificate/ Certificate of Indigency - 3 photocopies',
                                                                                'School ID of student/beneficiary - 3 photocopies',
                                                                                'Certificate of Enrollment or Registration - 1 original and 2 photocopy',
                                                                                'Assessment Form/Statement of Account - 1 original and 2 photocopy',
                                                                                'Social Case Study Report (SCSR) from the MSWDO',
                                                                                'Fully accomplished Application Form',
                                                                            ];
                                                                        @endphp
                                                                    @break

                                                                    @default
                                                                        @php
                                                                            $requirements = ['No specific requirements'];
                                                                        @endphp
                                                                @endswitch
                                                            @else
                                                                {{-- Other services' requirements --}}
                                                                @switch($item->service->id)
                                                                    @case(1)
                                                                        @php
                                                                            $requirements = [
                                                                                'Valid ID',
                                                                                'Accomplished Certification and Authorization',
                                                                                'Certificate of Existence',
                                                                                'Fully accomplished Application Form',
                                                                            ];
                                                                        @endphp
                                                                    @break

                                                                    @case(2)
                                                                        @php
                                                                            $requirements = [
                                                                                'Updated Barangay Certificate',
                                                                                '1x1 ID Picture',
                                                                                'Birth Certificate / Voter\'s Certification',
                                                                                'Medical Certificate',
                                                                                'Whole Body picture of PWD applicant',
                                                                                'Fully accomplished Application Form',
                                                                            ];
                                                                        @endphp
                                                                    @break

                                                                    @case(3)
                                                                        @php
                                                                            $requirements = [
                                                                                'Certificate of No Marriage (CENOMAR)',
                                                                                '2×2 Photo',
                                                                                'Fully accomplished Application Form',
                                                                                'PSA Birth Certificate/s',
                                                                                'Spouse’s Death Certificate',
                                                                                'Certificate of Annulment/Nullity of Marriage',
                                                                                'Income Tax Return (ITR) or Document Showing Income Level',
                                                                                'Barangay Certificate',
                                                                                'Proof of Financial Status',
                                                                                'Supporting Documents/Certificates',
                                                                            ];
                                                                        @endphp
                                                                    @break

                                                                    @default
                                                                        @php
                                                                            $requirements = ['No specific requirements'];
                                                                        @endphp
                                                                @endswitch
                                                            @endif

                                                            <div x-data="{ open: false }" class="d-flex justify-content-center flex-column">
                                                                <button type="button" class="btn btn-primary"
                                                                    @click="open = !open">View Checklist</button>
                                                                <ul class="ml-3 fw-bold text-uppercase text-start"
                                                                    style="list-style: square" x-cloak x-show="open"
                                                                    id="requirements-list">
                                                                    @foreach ($requirements as $index => $requirement)
                                                                        <li><input type="checkbox"
                                                                                class="requirement-checkbox{{ $item->id }}">
                                                                            {{ $requirement }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            <p id="message{{ $item->id }}"
                                                                class="text-success fw-bold fs-4" style="display: none;"><i
                                                                    class="mdi mdi-check-all"></i> All requirements are
                                                                checked!</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">No</button>
                                                            <button type="submit" class="btn btn-primary"
                                                                id="button-approve{{ $item->id }}"
                                                                style="display: none;">Yes, Confirm</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {

                                                const checkboxes = document.querySelectorAll(".requirement-checkbox{{ $item->id }}");
                                                const message = document.getElementById('message{{ $item->id }}');
                                                const button = document.getElementById('button-approve{{ $item->id }}');
                                                const aicsDiv = document.getElementById('aics-data{{ $item->id }}');

                                                function checkAllChecked() {
                                                    const allChecked = Array.from(checkboxes).every(checkbox => checkbox.checked);
                                                    if (allChecked) {
                                                        message.style.display = 'block';
                                                        button.style.display = 'block';
                                                        aicsDiv.style.display = 'block';
                                                    } else {
                                                        message.style.display = 'none';
                                                        button.style.display = 'none';
                                                        aicsDiv.style.display = 'none';
                                                    }
                                                }

                                                checkboxes.forEach(checkbox => {
                                                    checkbox.addEventListener('change', checkAllChecked);
                                                });

                                                checkAllChecked();
                                            });
                                        </script>
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
                                    <textarea class="form-control" name="reason" id="reason" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
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
                    title: '<span style="color: black;">Are you sure you want to accept this application?</span>',
                    // html: '<span style="color: black;">Please double-check the data of the applicant.</span>',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No',
                    background: '#f8f9fa', // Light background
                    customClass: {
                        title: 'swal-title-custom',
                        popup: 'swal-popup-custom',
                        icon: 'swal-icon-custom',
                    },
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect to the approval URL immediately without loading animation
                        window.location.href = approvalUrl;
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
