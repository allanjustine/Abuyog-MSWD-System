<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficiaries</title>

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
                    <span class="fw-bold fs-3">
                        Beneficiaries
                    </span>
                    <a href="{{ url('/add_beneficiary_view') }}" class="btn btn-success btn-sm float-end">Add New</a>
                </div>

                <!-- Align the search form to the right -->
                <form action="{{ url('beneficiary_search') }}" method="get" class="my-3 text-end">
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
                                    <div class="gap-2 d-flex justify-content-around flex-column">
                                        <!-- View Button -->
                                        <button class="btn btn-info btn-sm" type="button" data-bs-toggle="modal"
                                            data-bs-target="#viewModal{{ $beneficiary->id }}">
                                            View
                                        </button>

                                        <!-- Edit Button -->
                                        <a class="btn btn-success btn-sm ms-2"
                                            href="{{ url('editbeneficiaries', $beneficiary->id) }}">Edit</a>

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
                                                    <div class="form-group">
                                                        <label><strong>Monthly Income:</strong></label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $beneficiary->monthly_income ?? 'N/A' }}"
                                                            disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><strong>Civil Status:</strong></label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $beneficiary->civil_status }}" disabled>
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
                                                    <div class="mb-3 row">
                                                        <!-- Name of Assistance -->
                                                        <div class="col-md-3">
                                                            <label><strong>Name of Assistance:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $benefit->name_of_assistance }}" disabled>
                                                        </div>
                                                        <!-- Type of Assistance -->
                                                        <div class="col-md-3">
                                                            <label><strong>Type of Assistance:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $benefit->type_of_assistance }}" disabled>
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
                                        {{ $beneficiary->last_name }}</strong>? This action cannot be
                                    undone.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
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
            <div class="card" align="center" style="padding-top:80px;">
                <div class="card-header">
                    <span class="fw-bold fs-3">
                        Applicants
                    </span>
                    {{-- <a href="{{ url('/add_beneficiary_view') }}" class="btn btn-success btn-sm float-end">Add
                        New</a> --}}
                </div>

                <!-- Align the search form to the right -->
                {{-- <form action="{{ url('beneficiary_search') }}" method="get" class="my-3 text-end">
                    @csrf
                    <input type="search" name="search" placeholder="Search.." class="form-control d-inline-block"
                        style="width: auto;">
                    <input type="submit" class="btn btn-primary d-inline-block" value="Search">
                </form> --}}

                <div class="table-responsive">
                    <table class="table table-sm table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Program Enrolled</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applications as $application)
                            <tr>
                                <td>{{ $application->name }}</td>
                                <td>{{ $application->email }}</td>
                                <td>{{ $application->phone }}</td>
                                <td>{{ $application->service ? $application->service->name : 'No Program' }}</td>
                                <td>
                                    <div class="gap-2 d-flex justify-content-around flex-column">
                                        <!-- View Button -->
                                        <button class="btn btn-info btn-sm" type="button" data-bs-toggle="modal"
                                            data-bs-target="#viewModalData{{ $application->id }}">
                                            View
                                        </button>

                                        <!-- Edit Button -->
                                        <a class="btn btn-success btn-sm ms-2"
                                            href="{{ url('editbeneficiaries', $application->id) }}">Edit</a>

                                        <!-- Delete Button with Modal Trigger -->
                                        <button class="btn btn-danger btn-sm ms-2" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $application->id }}">
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- View Modal -->
                            <div class="modal fade" id="viewModalData{{ $application->id }}" tabindex="-1"
                                aria-labelledby="viewModalDataLabel{{ $application->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewModalDataLabel{{ $application->id }}">
                                                Application Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><strong>Name:</strong></label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $application->name }}" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><strong>Email:</strong></label>
                                                        <input type="email" class="form-control"
                                                            value="{{ $application->email }}" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><strong>Approved By:</strong></label>
                                                        <input type="approved By" class="form-control"
                                                            value="{{ $application->approvedBy->first_name ?? 'No' }} {{ $application->approvedBy->last_name ?? 'Data' }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><strong>Phone:</strong></label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $application->phone }}" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><strong>Program Enrolled:</strong></label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $application->service ? $application->service->name : 'No Program' }}"
                                                            disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><strong>Approved At:</strong></label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $application?->approved_at->diffForHumans() ?? 'Pending' }}"
                                                            disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="border-b fw-bold fs-5">Field Filled</p>
                                                    <p class="mt-2">
                                                        @php
                                                        $customFields = json_decode($application->custom_fields, true);
                                                        @endphp

                                                        @if (!empty($customFields) && is_array($customFields))
                                                    <ul>
                                                        @foreach ($customFields as $key => $value)
                                                        <li>
                                                            <strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong>
                                                            @if (is_array($value))
                                                            <pre>{{ json_encode($value, JSON_PRETTY_PRINT) }}</pre>
                                                            @else
                                                            {{ $value }}
                                                            @endif
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                    @else
                                                    <p>No custom fields found.</p>
                                                    @endif
                                                    </p>
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
                </div>

                <!-- Delete Confirmation Modal -->
                <div class="modal fade" id="deleteModal{{ $application->id }}" tabindex="-1"
                    aria-labelledby="deleteModalLabel{{ $application->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="text-white modal-header bg-danger">
                                <h5 class="modal-title" id="deleteModalLabel{{ $application->id }}">
                                    Confirm Deletion</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete
                                    <strong>{{ $application->first_name }}
                                        {{ $application->last_name }}</strong>? This action cannot be
                                    undone.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <a class="btn btn-danger"
                                    href="{{ url('deletebeneficiaries', $application->id) }}">Delete</a>
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

    @include('admin.script')
</body>

</html>
