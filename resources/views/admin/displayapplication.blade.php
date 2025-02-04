<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Applications</title>

    @include('admin.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        /* Ensure text ellipsis for long program names */
        .text-ellipsis {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 150px;
        }

    </style>
</head>

<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.navbar')

        <div class="container">
            <div class="card" align="center" style="padding-top:80px;">
                <div class="card-header">
                    <h4 class="fw-bold fs-3">All Applications</h4>
                </div>

                <!-- Align the search form to the right -->
                <div class="mt-2 mb-3 d-flex justify-content-between align-items-center">

                    <div class="gap-2 d-flex align-items-center">
                        <form>
                            <div class="gap-2 d-flex">
                                <label for="filter" style="width: 220px;">Filter by Status:</label>
                                <select class="form-select" name="filter" id="">
                                    <option value="" hidden disabled>Filter by Status</option>
                                    <option value="" disabled>Filter by Status</option>
                                    <option value="all" {{ request()->filter == 'all' ? 'selected' : '' }}>All</option>
                                    <option value="accepted" {{ request()->filter == 'accepted' ? 'selected' : ''
                                        }}>Accepted</option>
                                    <option value="pending" {{ request()->filter == 'pending' ? 'selected' : ''
                                        }}>Pending
                                    </option>
                                    <option value="rejected" {{ request()->filter == 'rejected' ? 'selected' : ''
                                        }}>Rejected</option>
                                </select>
                                <button class="btn btn-primary" type="submit">Filter</button>
                            </div>
                        </form>
                        <form>
                            <input type="hidden" name="filter" value="">
                            <button class="btn btn-warning" type="submit">Reset Filter</button>
                        </form>
                    </div>
                    <form action="{{ route('application.search') }}" method="GET" class="d-flex">
                        @csrf
                        <input type="text" name="search" class="form-control me-2" placeholder="Search..." value="{{ request()->search }}" style="max-width: 300px;">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>

                <!-- Responsive Table -->
                <div class="table-responsive">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <table class="table table-sm table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Beneficiary Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Services Applied</th>
                                <th>Date Applied</th>
                                <th>Status</th>
                                <th>Accepted By</th>
                                <th>Approved By</th>
                                <th>Approved At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $apply)
                            <tr class="text-capitalize">
                                <td>{{ $apply->name }}</td>
                                <td>{{ $apply->email }}</td>
                                <td>{{ $apply->phone }}</td>
                                <td class="text-ellipsis" title="{{ $apply->service->name ?? 'No Service Assigned' }}">
                                    {{ $apply->service->name ?? 'No Service Assigned' }}
                                </td>
                                <td>{{ $apply->date_applied }}</td>
                                <td>

                                    @if ($apply->approved_at !== null && $apply->approved_by !== null)
                                    <span class="badge bg-success">Approved</span>
                                    @else

                                    <span class="badge @if ($apply->status == 'accepted') bg-primary
                                        @elseif ($apply->status == 'rejected') bg-danger
                                        @elseif ($apply->status == 'pending') bg-info
                                        @else bg-secondary @endif">
                                        {{ $apply->status }}
                                    </span>
                                    @endif
                                </td>
                                <td>{{ $apply->employee_name ?? 'Pending' }}</td>
                                <td>
                                    <strong>
                                        {{ $apply->approvedBy->first_name ?? "No" }} {{ $apply->approvedBy->last_name ??
                                        "data" }}
                                    </strong>
                                </td>
                                <td>{{ $apply->approved_at?->diffForHumans() ?? 'Pending' }}</td>
                                <td>
                                    <!-- View Button -->
                                    <div class="gap-2 d-flex flex-column">
                                        <a href="{{ route('admin.application.view', $apply->id) }}" class="btn btn-info btn-sm">
                                            View
                                        </a>
                                        @if ($apply->status === 'accepted' && $apply->approved_at === null &&
                                        $apply->approved_by === null)
                                        <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#ApproveModal{{ $apply->id }}">
                                            Approve
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#RejectModal{{ $apply->id }}">
                                            Reject
                                        </a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="ApproveModal{{ $apply->id }}" tabindex="-1" aria-labelledby="ApproveModal{{ $apply->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/approve-application/{{ $apply->id }}" method="POST">
                                            @csrf
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="ApproveModal{{ $apply->id }}Label">
                                                    Approving...
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to approve this application of <strong>{{
                                                        $apply->name
                                                        }}</strong> that accepted by <strong>{{ $apply->employee_name
                                                        }}</strong>?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Approve</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="RejectModal{{ $apply->id }}" tabindex="-1" aria-labelledby="RejectModal{{ $apply->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/reject-application/{{ $apply->id }}" method="POST">
                                            @csrf
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="RejectModal{{ $apply->id }}Label">Rejecting...</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to reject this application of <strong>{{
                                                        $apply->name
                                                        }}</strong> that accepted by <strong>{{ $apply->employee_name
                                                        }}</strong>?</p>
                                                <div class="mt-3 form-group">
                                                    <label for="cancellation_reason" class="text-info">If reject
                                                        please state an
                                                        cancellation reason:</label>
                                                    <textarea name="cancellation_reason" id="" placeholder="Cancellation Reason" class="form-control {{ $errors->has('cancellation_reason') ? 'is-invalid' : '' }}" cols="5"></textarea>
                                                    @error('cancellation_reason')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Reject</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3 d-flex justify-content-center">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>

        @include('admin.script')
    </div>
    <script>
        @if ($errors->any())
        $(document).ready(function() {
            $('#RejectModal{{ $apply->id }}').modal('show');
        });
        @endif
    </script>
</body>

</html>
