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
                    Beneficiaries
                    <a href="{{ url('/add_beneficiary_view') }}" class="btn btn-success btn-sm float-end">Add New</a>
                </div>

                <!-- Align the search form to the right -->
                <form action="{{ url('beneficiary_search') }}" method="get" class="text-end">
                    @csrf
                    <input type="search" name="search" placeholder="Search.." class="form-control d-inline-block"
                        style="width: auto;">
                    <input type="submit" class="btn btn-primary d-inline-block" value="Search">
                </form>
                @if (session('success'))
                <div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                @endif
                <div class="card-body table-responsive">
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
                                    <td>{{ $beneficiary->service ? $beneficiary->service->name : 'No Program' }} <br> <strong>{{ $beneficiary->service->id === 2 ? '(Disability Type: ' . $beneficiary->disability_type . ')' : '' }}</strong></td>
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
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label><strong>Gender:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->gender }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Civil Status:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->civil_status }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>ID Number:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->id_number }}" disabled>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="pt-3 form-group border-top">
                                                    <h3 class="fs-3"><strong>Benefit Record</strong></h3>
                                                    <div>
                                                        @if ($beneficiary->receiveds->count() === 0) <a
                                                            href="{{ url('apply-benefits', $beneficiary->id) }}"
                                                            class="btn btn-primary">Apply Benefit</a>
                                                        @else
                                                        <div class="container mt-5">
                                                            <!-- Table Header -->
                                                            <div class="text-white row bg-primary font-weight-bold">
                                                                <div class="p-2 col-3">Item Type</div>
                                                                <div class="p-2 col-3">Remarks</div>
                                                                <div class="p-2 col-3">Date Received</div>
                                                                <div class="p-2 col-3">Date Expired</div>
                                                            </div>

                                                            @foreach ($beneficiary->receiveds as $received)

                                                            <div class="row border-bottom">
                                                                <div class="p-2 col-3">{{ $received->item_type }}</div>
                                                                <div class="p-2 col-3">{{ $received->remarks }}</div>
                                                                <div class="p-2 col-3">{{
                                                                    $received->date_received->format('F d, Y') }}</div>
                                                                <div class="p-2 col-3">{{ $received->date_expired->format('F
                                                                    d, Y') }}</div>

                                                                @if ($loop->last && $received->date_expired <= now()) <a
                                                                    href="{{ url('apply-benefits', $beneficiary->id) }}"
                                                                    class="mt-3 btn btn-primary">Apply Benefit</a>
                                                                    @endif
                                                            </div>

                                                            @endforeach
                                                        </div>
                                                        @endif
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
        </div>
    </div>

    @include('admin.script')
</body>

</html>
