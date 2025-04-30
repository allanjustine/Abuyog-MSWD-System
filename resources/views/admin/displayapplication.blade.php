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

        .swal2-title {
            color: red !important;
        }
    </style>
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --success-color: #4cc9f0;
            --danger-color: #f72585;
            --warning-color: #f8961e;
            --info-color: #4895ef;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --border-radius: 8px;
            --box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        body {
            background-color: #f5f7fb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            border: none;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            overflow: hidden;
            background-color: white;
        }

        .card-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 1.5rem;
            border-bottom: none;
        }

        .table-responsive {
            border-radius: var(--border-radius);
            overflow: hidden;
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background-color: #f1f3f9;
            color: var(--dark-color);
            font-weight: 600;
            border-bottom: 2px solid #e9ecef;
            padding: 1rem;
        }

        .table tbody td {
            padding: 1rem;
            vertical-align: middle;
            border-top: 1px solid #f0f0f0;
        }

        .table tbody tr:hover {
            background-color: rgba(67, 97, 238, 0.05);
        }

        .badge {
            font-weight: 500;
            padding: 0.5em 0.75em;
            border-radius: 20px;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .bg-primary {
            background-color: var(--primary-color) !important;
        }

        .bg-success {
            background-color: #2ecc71 !important;
        }

        .bg-info {
            background-color: var(--info-color) !important;
        }

        .bg-danger {
            background-color: var(--danger-color) !important;
        }

        .bg-warning {
            background-color: var(--warning-color) !important;
        }

        .btn {
            border-radius: var(--border-radius);
            font-weight: 500;
            padding: 0.5rem 1.25rem;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn-sm {
            padding: 0.35rem 0.75rem;
            font-size: 0.85rem;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            transform: translateY(-2px);
        }

        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .form-control,
        .form-select {
            border-radius: var(--border-radius);
            padding: 0.5rem 1rem;
            border: 1px solid #e0e0e0;
            transition: var(--transition);
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.25);
        }

        .search-box {
            position: relative;
            max-width: 300px;
        }

        .search-box .btn {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .text-ellipsis {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 150px;
        }

        .action-dropdown {
            position: relative;
        }

        .action-dropdown-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--primary-color);
            color: white;
            border: none;
            transition: var(--transition);
        }

        .action-dropdown-btn:hover {
            background-color: var(--secondary-color);
            transform: scale(1.1);
        }

        .action-dropdown-content {
            position: absolute;
            right: 0;
            top: 50px;
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 0.5rem;
            min-width: 180px;
            z-index: 10;
            display: none;
        }

        .action-dropdown-content.show {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        .action-dropdown-content a,
        .action-dropdown-content button {
            display: block;
            width: 100%;
            text-align: left;
            padding: 0.5rem 1rem;
            margin-bottom: 0.25rem;
            border-radius: 4px;
            color: var(--dark-color);
            text-decoration: none;
            transition: var(--transition);
        }

        .action-dropdown-content a:hover,
        .action-dropdown-content button:hover {
            background-color: #f8f9fa;
            color: var(--primary-color);
        }

        .filter-section {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: var(--box-shadow);
        }

        .filter-title {
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--dark-color);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .filter-title i {
            color: var(--primary-color);
        }

        .pagination {
            justify-content: center;
            margin-top: 1.5rem;
        }

        .page-item.active .page-link {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .page-link {
            color: var(--primary-color);
            border-radius: var(--border-radius) !important;
            margin: 0 0.25rem;
            border: 1px solid #e0e0e0;
        }

        .alert {
            border-radius: var(--border-radius);
            border: none;
            box-shadow: var(--box-shadow);
        }

        .modal-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }

        .modal-title {
            font-weight: 600;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .status-badge {
            font-size: 0.7rem;
            padding: 0.35rem 0.75rem;
        }

        .empty-state {
            padding: 3rem;
            text-align: center;
            color: #6c757d;
        }

        .empty-state i {
            font-size: 3rem;
            color: #dee2e6;
            margin-bottom: 1rem;
        }

        .empty-state h5 {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .swal2-title {
            color: red !important;
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
                                {{-- <div>
                                    <label for="filter" style="width: 220px;">Filter by Status:</label>
                                    <select class="form-select" name="filter" id="">
                                        <option value="" hidden disabled>Filter by Status</option>
                                        <option value="" disabled>Filter by Status</option>
                                        <option value="" {{ request()->filter == '' ? 'selected' : '' }}>All
                                        </option>
                                        <option value="accepted" {{ request()->filter == 'accepted' ? 'selected' : ''
                                            }}>Accepted</option>
                                        <option value="pending" {{ request()->filter == 'pending' ? 'selected' : '' }}>
                                            Pending
                                        </option>
                                        <option value="rejected" {{ request()->filter == 'rejected' ? 'selected' : ''
                                            }}>Rejected</option>
                                    </select>
                                </div> --}}
                                <div>
                                    <label for="from">From:</label>
                                    <input type="date" name="from" value="{{ request()->from }}" class="form-control">
                                </div>
                                <div>
                                    <label for="to">To:</label>
                                    <input type="date" name="to" value="{{ request()->to }}" class="form-control">
                                </div>
                                <div class="mt-4"><button class="btn btn-primary" type="submit">Filter</button></div>
                            </div>
                        </form>
                        <form class="mt-4">
                            <input type="hidden" name="filter" value="">
                            <input type="hidden" name="from" value="">
                            <input type="hidden" name="to" value="">
                            <button class="btn btn-warning" type="submit">Reset Filter</button>
                        </form>
                    </div>

                    <div class="d-flex justify-content-end float-end mt-4">
                        <form class="d-flex" method="GET">
                            <input type="search" name="search" class="form-control me-2" value="{{ request('search') }}"
                                placeholder="Search..." />
                            <button type="submit" class="btn btn-primary"><i
                                    class="fas fa-magnifying-glass"></i></button>
                        </form>
                    </div>
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
                                <th>Services Applied</th>
                                <th>Date Applied</th>
                                <th>Status</th>
                                <th>Accepted By</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                            <tr class="text-capitalize">
                                <td>{{ $item->full_name }}</td>
                                <td class="text-ellipsis" title="{{ $item->service->name ?? 'No Service Assigned' }}">
                                    {{ $item->service->name ?? 'No Service Assigned' }}
                                </td>
                                <td>{{ $item?->appearance_date?->format('F d, Y') ?? $item?->created_at?->format('F d,
                                    Y') }}
                                </td>
                                <td>
                                    @if($item?->created_at->lt(now()->subYears(5)) && $item->program_enrolled === 3)
                                    <span class="badge bg-danger">Expired</span>
                                    @elseif($item?->created_at->lt(now()->subYears(1)) && $item->program_enrolled === 2)
                                    <span class="badge bg-danger">Expired</span>
                                    @elseif ($item->approved_at !== null && $item->approved_by !== null)
                                    <span class="badge bg-success">Approved (Ready for realease)</span>
                                    @else
                                    <span class="badge @if ($item->status == 'accepted') bg-primary
                                        @elseif ($item->status == 'rejected') bg-danger
                                        @elseif ($item->status == 'pending') bg-info
                                        @else bg-secondary @endif">
                                        {{ $item->status }}
                                    </span>
                                    @endif
                                </td>
                                <td>{{ $item->acceptedBy->full_name ?? 'Pending' }}</td>
                                <td>
                                    <!-- View Button -->
                                    <div x-data="{ open: false, loading: true }"
                                        class="d-flex justify-content-center flex-column" x-init="loading = false">
                                        <button type="button" @click="open = !open"
                                            class="mb-3 btn btn-primary rounded-full d-flex align-items-center justify-content-center">
                                            <span class="spinner-border spinner-border-sm" x-show="loading"></span><i
                                                class="mdi mdi-minus" x-show="open" x-cloak></i><i class="mdi mdi-plus"
                                                x-show="!open" x-cloak></i></button>
                                        <div x-cloak x-show="open">
                                            <div class="gap-2 d-flex flex-column">
                                                <a href="#" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#viewModal{{ $item?->id }}">
                                                    View
                                                </a>
                                                @if ($item->status === 'approved')
                                                <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#releasedModal{{ $item->id }}">
                                                    Release
                                                </a>
                                                @if ($item->message_count < 2) <form @if ($item->phone !== null)
                                                    action="/send-sms/{{ $item->id }}" id="sendSmsForm" method="POST"
                                                    @endif>
                                                    @csrf
                                                    <button @if ($item->phone === null) id="noPhone" @else id="sendSms"
                                                        @endif
                                                        type="submit"
                                                        class="btn btn-warning btn-dark btn-sm w-100 d-flex gap-1
                                                        align-items-center justify-content-center">
                                                        <i class="mdi mdi-send"></i>
                                                        <span>{{ $item->message_count < 1 ? 'Send SMS' : 'Resend SMS'
                                                                }}</span>
                                                    </button>
                                                    </form>
                                                    @endif
                                                    @endif
                                                    @if ($item->status === 'accepted' && $item->approved_at === null &&
                                                    $item->approved_by === null)
                                                    <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#ApproveModal{{ $item->id }}">
                                                        Approve
                                                    </a>
                                                    @endif
                                                    {{-- @if ($item?->service->name === 'OSCA(Office of Senior
                                                    Citizens)')
                                                    <a class="btn btn-success btn-sm"
                                                        href="/edit-osca/{{ $item?->id }}">Edit</a>
                                                    @elseif($item?->service->name === 'PWD(Persons with Disabilities)')
                                                    <a class="btn btn-success btn-sm"
                                                        href="/edit-pwd/{{ $item?->id }}">Edit</a>
                                                    @elseif($item?->service->name === 'Solo Parent')
                                                    <a class="btn btn-success btn-sm"
                                                        href="/edit-solo-parent/{{ $item?->id }}">Edit</a>
                                                    @elseif($item?->service->name === 'AICS(Assistance to Individuals in
                                                    Crisis)')
                                                    <a class="btn btn-success btn-sm"
                                                        href="/edit-aics/{{ $item?->id }}">Edit</a>
                                                    @endif --}}
                                                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#RejectModal{{ $item->id }}">
                                                        Reject
                                                    </a>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="releasedModal{{ $item?->id }}" tabindex="-1"
                                aria-labelledby="releasedModalLabel{{ $item?->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <form action="/released/{{ $item?->id }}" method="POST">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="text-white modal-header bg-danger">
                                                <h5 class="modal-title" id="releasedModalLabel{{ $item?->id }}">
                                                    Processing for release...</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to marked
                                                    <strong>{{ $item?->first_name }}
                                                        {{ $item?->last_name }}</strong> as for released? This
                                                    action cannot be
                                                    undone.
                                                </p>
                                                @if ($item->service->id === 4)
                                                <p class="fw-bold fs-5">For AICS, Please Enter an Amount</p>
                                                <p class="fw-bold fs-6">Do you wish to continue this release?
                                                    Application Type Of Assitance got <span
                                                        class="fw-bold text-danger">{{
                                                        $item?->aicsDetails[0]?->type_of_assistance ?? 'Not set'
                                                        }}</span>
                                                </p>
                                                <input type="number" name="amount" class="form-control" required
                                                    placeholder="Enter Amount">
                                                @endif
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button class="btn btn-danger" type="submit">Yes, Sure</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal fade" id="ApproveModal{{ $item->id }}" tabindex="-1"
                                aria-labelledby="ApproveModal{{ $item->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/approve-application/{{ $item->id }}" method="POST">
                                            @csrf
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="ApproveModal{{ $item->id }}Label">
                                                    Confirming...
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
                                                <p>Do you want to proceed with this application approval of
                                                    <strong>{{ $item?->name ?? 'Not set' }}</strong> that accepted
                                                    by
                                                    <strong>{{ $item?->acceptedBy?->full_name ?? 'Pending' }}</strong>?
                                                </p>

                                                @if ($item->service->id == 4)
                                                <div class="container" id="aics-data{{ $item->id }}">
                                                    <h2 class="mt-3 fw-bold text-uppercase fs-4 ">For AICS Types
                                                    </h2>
                                                    <div class="form-row row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="case_no" class="text-start d-block">Case
                                                                    No.</label>
                                                                <input type="text" name="case_no" required
                                                                    placeholder="Please enter case no."
                                                                    class="form-control">
                                                                @error('case_no')
                                                                <small class="text-danger">{{ $message ?? "" }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="new_or_old" class="text-start d-block">New
                                                                    or Old</label>
                                                                <select name="new_or_old" id="" required
                                                                    class="form-select">
                                                                    <option value="" hidden selected>
                                                                        Please select new or old</option>
                                                                    <option value="" disabled>Please
                                                                        select new or old</option>
                                                                    <option value="New">New</option>
                                                                    <option value="Old">Old</option>
                                                                </select>
                                                                @error('new_or_old')
                                                                <small class="text-danger">{{ $message ?? "" }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-row row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="problem_presented"
                                                                    class="text-start d-block">Problem Presented</label>
                                                                <textarea name="problem_presented" required
                                                                    placeholder="Please enter problem presented."
                                                                    class="form-control" rows="4"></textarea>
                                                                @error('problem_presented')
                                                                <small class="text-danger">{{ $message ?? "" }}</small>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-row row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="findings"
                                                                    class="text-start d-block">Findings</label>
                                                                <textarea name="findings" required
                                                                    placeholder="Please enter findings."
                                                                    class="form-control" rows="4"></textarea>
                                                                @error('findings')
                                                                <small class="text-danger">{{ $message ?? "" }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-row row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="action_taken"
                                                                    class="text-start d-block">Action Taken</label>
                                                                <textarea name="action_taken" required
                                                                    placeholder="Please enter action taken."
                                                                    class="form-control" rows="4"></textarea>
                                                                @error('action_taken')
                                                                <small class="text-danger">{{ $message ?? "" }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                @endif
                                                @if ($item->service->id == 3)
                                                <div class="container" id="aics-data{{ $item->id }}">
                                                    <h2 class="mt-3 fw-bold text-uppercase fs-4">For Solo
                                                        Parents</h2>
                                                    <h2 class="mt-3 fw-bold text-uppercase fs-4 text-danger">
                                                        FOR SPD/SPO USE ONLY</h2>
                                                    <div class="form-row row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="card_number" class="text-start d-block">Solo
                                                                    Parent
                                                                    Identification Card Number.</label>
                                                                <input type="text" name="card_number" required
                                                                    placeholder="Please enter solo parent identification card number."
                                                                    class="form-control">
                                                                @error('card_number')
                                                                <small class="text-danger">{{ $message ?? "" }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="id_type" class="text-start d-block">ID
                                                                    Type</label>
                                                                <select name="id_type" id="" required
                                                                    class="form-select">
                                                                    <option value="" hidden selected>
                                                                        Please select ID Type</option>
                                                                    <option value="" disabled>Please
                                                                        select ID Type</option>
                                                                    <option value="New">New</option>
                                                                    <option value="Renewal">Renewal</option>
                                                                </select>
                                                                @error('id_type')
                                                                <small class="text-danger">{{ $message ?? "" }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="status"
                                                                    class="text-start d-block">Status</label>
                                                                <select name="status" id="" required
                                                                    class="form-select">
                                                                    <option value="" hidden selected>
                                                                        Please select status</option>
                                                                    <option value="" disabled>Please
                                                                        select status</option>
                                                                    <option value="Approved">Approved</option>
                                                                    <option value="Disapproved">Disapproved
                                                                    </option>
                                                                </select>
                                                                @error('status')
                                                                <small class="text-danger">{{ $message ?? "" }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="category" class="text-start d-block">Solo
                                                                    Parent
                                                                    Category.</label>
                                                                <input type="text" name="category" required
                                                                    placeholder="Please enter solo parent category."
                                                                    class="form-control">
                                                                @error('category')
                                                                <small class="text-danger">{{ $message ?? "" }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">No</button>
                                                <button type="submit" class="btn btn-primary"
                                                    id="button-approve{{ $item->id }}">Yes, Confirm</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="RejectModal{{ $item->id }}" tabindex="-1"
                                aria-labelledby="RejectModal{{ $item->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/reject-application/{{ $item->id }}" method="POST">
                                            @csrf
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="RejectModal{{ $item->id }}Label">
                                                    Rejecting...</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to reject this application of
                                                    <strong>{{ $item->name }}</strong> that accepted by
                                                    <strong>{{ $item->employee_name }}</strong>?
                                                </p>
                                                <div class="mt-3 form-group">
                                                    <label for="cancellation_reason" class="text-info">If reject
                                                        please state an
                                                        cancellation reason:</label>
                                                    <textarea name="cancellation_reason" id=""
                                                        placeholder="Cancellation Reason"
                                                        class="form-control {{ $errors->has('cancellation_reason') ? 'is-invalid' : '' }}"
                                                        cols="5"></textarea>
                                                    @error('cancellation_reason')
                                                    <small class="text-danger">{{ $message ?? "" }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Reject</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @include('admin.components.view-modal')
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">No Data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{-- <div class="mt-3 d-flex justify-content-center"> --}}
                        {{ $data->links() }}
                        {{-- </div> --}}
                </div>
            </div>
        </div>

        @include('admin.script')
    </div>
    <script>
        @if (session('success'))
                Swal.fire({
                    title: 'Success.',
                    text: "{{ session('success') }}",
                    icon: 'success',
                    showCancelButton: true,
                    showConfirmButton: false,
                    cancelButtonText: 'Close',
                    confirmButtonColor: '#3085d6',
                    reverseButtons: true,
                });
            @endif
    </script>
    <script>
        @if ($errors->any())
                $(document).ready(function() {
                    $('#RejectModal{{ $item->id }}').modal('show');
                    $('#ApproveModal{{ $item->id }}').modal('show');
                });
            @endif
    </script>
    <script>
        document.getElementById('sendSms').addEventListener('click', function(event) {
                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    html: `Please check the number before sending.<br>Sending an SMS costs 1 credit.<br>Do you wish to continue?`,
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, Send',
                    cancelButtonText: 'Cancel',
                    confirmButtonColor: '#3085d6',
                    reverseButtons: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: 'Sending...',
                            html: `Please wait, sending the SMS may take some time.<br>Thank you for your patience.`,
                            allowOutsideClick: false,
                            didOpen: () => {
                                Swal.showLoading();
                            }
                        });

                        setTimeout(() => {
                            Swal.close();
                            document.getElementById('sendSmsForm').submit();

                        }, 3000);
                    }
                });
            });
    </script>
    <script>
        document.getElementById('noPhone').addEventListener('click', function(event) {
                event.preventDefault();
                Swal.fire({
                    title: 'Ops.',
                    html: `This beneficiary has no phone number. <br>Please check the number before sending to avoid errors.<br>Thank You.`,
                    icon: 'warning',
                    showCancelButton: true,
                    showConfirmButton: false,
                    cancelButtonText: 'Close',
                    confirmButtonColor: '#3085d6',
                    reverseButtons: true,
                });
            });
    </script>
</body>

</html>
