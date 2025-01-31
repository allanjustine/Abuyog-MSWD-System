<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficiaries</title>

    @include('employee.css')
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

        @include('employee.sidebar')

        @include('employee.navbar')

        <div class="container">
            <div class="card" align="center" style="padding-top:80px;">
                <div class="card-header">
                    Beneficiaries
                </div>

                <!-- Align the search form to the right -->
                <form action="{{ url('beneficiary_search_emp') }}" method="get" class="text-end">
                    @csrf
                    <input type="search" name="search" placeholder="Search.." class="form-control d-inline-block"
                        style="width: auto;">
                    <input type="submit" class="btn btn-primary d-inline-block" value="Search">
                </form>

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

                                            <!-- Edit Button -->
                                            <a class="btn btn-success btn-sm ms-2"
                                                href="{{ url('edit_beneficiaries_employee', $beneficiary->id) }}">Edit</a>

                                            <!-- Deceased Button with Modal Trigger -->
                                            <button class="btn btn-danger btn-sm ms-2 deceased-btn"
                                                data-id="{{ $beneficiary->id }}"
                                                data-name="{{ $beneficiary->first_name }} {{ $beneficiary->last_name }}">
                                                Deceased
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
                                                                value="{{ $beneficiary->program_specific_id }}"
                                                                disabled>
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

                                <!-- Deceased Confirmation Modal
                                    <div class="modal fade" id="deceasedModal{{ $beneficiary->id }}" tabindex="-1"
                                        aria-labelledby="deceasedModalLabel{{ $beneficiary->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="text-white modal-header bg-danger">
                                                    <h5 class="modal-title" id="deceasedModalLabel{{ $beneficiary->id }}">
                                                        Mark as Deceased
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to mark
                                                        <strong>{{ $beneficiary->first_name }}
                                                            {{ $beneficiary->last_name }}</strong> as deceased? This action will
                                                        remove them from the
                                                        beneficiaries list and store their information in the deceased records.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <a class="btn btn-danger"
                                                        href="{{ url('mark_deceased', $beneficiary->id) }}">Mark as Deceased</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                // Select all buttons with the deceased-btn class
                document.querySelectorAll('.deceased-btn').forEach(button => {
                    button.addEventListener('click', function() {
                        const beneficiaryId = this.getAttribute('data-id'); // Get beneficiary ID
                        const beneficiaryName = this.getAttribute('data-name'); // Get beneficiary name

                        // Trigger SweetAlert confirmation
                        Swal.fire({
                            title: `<span style="color: black;">Mark as Deceased</span>`,
                            html: `<p>Are you sure you want to mark <strong>${beneficiaryName}</strong> as deceased?</p>
                           <p>This action will remove them from the beneficiaries list and store their information in the deceased records.</p>`,
                            icon: 'warning',
                            customClass: {
                                icon: 'custom-swal-icon'
                            },
                            showCancelButton: true,
                            confirmButtonColor: '#d33',
                            cancelButtonColor: '#6c757d',
                            confirmButtonText: 'Yes, mark as deceased',
                            cancelButtonText: 'Cancel'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Redirect to the route to mark as deceased
                                window.location.href = `/mark_deceased/${beneficiaryId}`;
                            }
                        });
                    });
                });

                // Check for success session and display SweetAlert
                @if (session('success'))
                    Swal.fire({
                        icon: 'success',
                        title: '<span style="color: black;">Success</span>',
                        text: '{{ session('success') }}',
                        background: '#f8f9fa',
                        confirmButtonColor: '#28a745',
                        customClass: {
                            icon: 'custom-swal-icon'
                        }
                    });
                @endif
            });
        </script>

        <!-- Custom CSS -->
        <style>
            .custom-swal-icon {
                margin-top: 15px;
                /* Adjust spacing above the icon */
                margin-bottom: 15px;
                /* Adjust spacing below the icon */
            }
        </style>
        @include('admin.script')
</body>

</html>
