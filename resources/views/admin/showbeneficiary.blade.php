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
                    <span class="fw-bold fs-3">
                        Beneficiaries
                    </span>
                    <div class="float-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNew">
                            Add New
                        </button>
                        @include('admin.components.addbeneficiary')

                    </div>
                </div>
                <div class="d-flex justify-content-end float-end">
                    <form class="d-flex" method="GET">
                        <input type="search" name="search" class="form-control me-2" value="{{ request('search') }}" placeholder="Search..." />
                        <button type="submit" class="btn btn-primary"><i class="fas fa-magnifying-glass"></i></button>
                    </form>
                </div>

                <!-- Align the search form to the right -->
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif


                    <div class="table-responsive">
                        <table class="table table-sm table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Program Enrolled</th>
                                    <th>Barangay</th>
                                    {{-- <th>Status</th> --}}
                                    <th>Approved At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $item)
                                                            @if ($item->source === 'Beneficiary')
                                                                <tr>
                                                                    <td>{{ $item?->full_name }}</td>

                                                                    <td>{{ $item?->phone }}</td>
                                                                    <td>{{ $item?->service ? $item?->service->name : 'No Program' }}</td>
                                                                    <td>{{ $item?->barangay->name ?? 'No Barangay' }}</td>
                                                                    {{-- <td><span
                                                                            class="badge rounded-pill text-capitalize {{ $item?->status === 'approved' ? 'bg-success' : ($item?->status === 'pending' ? 'bg-warning' : ($item->status === 'rejected' ? 'bg-danger' : ($item?->status === 'accepted' ? 'bg-primary' : 'bg-info'))) }}">{{
                                                                            $item?->status ?? 'Manual' }}</span>
                                                                    </td> --}}
                                                                    <td>{{ $item?->approved_at?->diffForHumans() ?? $item?->created_at->diffForHumans() }}
                                                                    </td>
                                                                    <td>
                                                                        <!-- View Button -->
                                                                        @if ($item?->is_deceased)
                                                                        <span class="text-white fw-bold badge badge-pill bg-danger">DECEASED</span>
                                                                        @else

                                                                        <div x-data="{ open: false, loading: true }"
                                                                            class="d-flex justify-content-center flex-column" x-init="loading = false">
                                                                            <button type="button" @click="open = !open"
                                                                                class="mb-3 rounded-full btn btn-primary d-flex align-items-center justify-content-center">
                                                                                <span class="spinner-border spinner-border-sm"
                                                                                    x-show="loading"></span><i class="mdi mdi-minus" x-show="open"
                                                                                    x-cloak></i><i class="mdi mdi-plus" x-show="!open"
                                                                                    x-cloak></i></button>
                                                                            <div x-cloak x-show="open">
                                                                                <div class="gap-2 d-flex justify-content-around flex-column">
                                                                                    <button class="btn btn-info btn-sm ms-2" type="button"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#viewModal{{ $item?->id }}">
                                                                                        View
                                                                                    </button>


                                                                                    @if ($item?->status === 'released')
                                                                                        <a class="btn btn-primary btn-sm ms-2"
                                                                                            href="{{ url('generate-pdf/' . $item?->id) }}">
                                                                                            <i class="mdi mdi-download"></i>Download Form
                                                                                        </a>
                                                                                    @endif
                                                                                    <!-- Edit Button -->
                                                                                    @if ($item?->service->name === 'OSCA(Office of Senior Citizens)')
                                                                                        <a class="btn btn-success btn-sm ms-2"
                                                                                            href="/edit-osca/{{ $item?->id }}">Edit</a>
                                                                                    @elseif($item?->service->name === 'PWD(Persons with Disabilities)')
                                                                                        <a class="btn btn-success btn-sm ms-2"
                                                                                            href="/edit-pwd/{{ $item?->id }}">Edit</a>
                                                                                    @elseif($item?->service->name === 'Solo Parent')
                                                                                        <a class="btn btn-success btn-sm ms-2"
                                                                                            href="/edit-solo-parent/{{ $item?->id }}">Edit</a>
                                                                                    @elseif($item?->service->name === "AICS(Assistance to Individuals in Crisis)")
                                                                                        <a class="btn btn-success btn-sm ms-2"
                                                                                            href="/edit-aics/{{ $item?->id }}">Edit</a>
                                                                                    @endif

                                                                                    <!-- Delete Button with Modal Trigger -->
                                                                                    <button class="btn btn-danger btn-sm ms-2" data-bs-toggle="modal"
                                                                                        data-bs-target="#deleteModal{{ $item?->id }}">
                                                                                        Delete
                                                                                    </button>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                <div class="modal fade" id="deleteModal{{ $item?->id }}" tabindex="-1"
                                                                    aria-labelledby="deleteModalLabel{{ $item?->id }}" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="text-white modal-header bg-danger">
                                                                                <h5 class="modal-title" id="deleteModalLabel{{ $item?->id }}">
                                                                                    Confirm Deletion</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Are you sure you want to delete
                                                                                    <strong>{{ $item?->first_name }}
                                                                                        {{ $item?->last_name }}</strong>? This action cannot be
                                                                                    undone.
                                                                                </p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Cancel</button>
                                                                                <a class="btn btn-danger"
                                                                                    href="{{ url('deletebeneficiaries', $item?->id) }}">Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                @include('admin.components.view-modal')
                                                            @endif
                                                            @if ($item->source === 'Application')
                                                                                        <tr>
                                                                                            <td>{{ $item->name }}</td>
                                                                                            <td>{{ $item->email }}</td>
                                                                                            <td>{{ $item->phone }}</td>
                                                                                            <td>{{ $item->service ? $item->service->name : 'No Program' }}</td>
                                                                                            <td>
                                                                                                @if ($item?->barangay?->name === null)
                                                                                                    <button class="btn btn-link btn-sm" type="button" data-bs-toggle="modal"
                                                                                                        data-bs-target="#viewModalData{{ $item->id }}">
                                                                                                        No Barangay
                                                                                                    </button>
                                                                                                @else
                                                                                                    {{ $item?->barangay?->name }}
                                                                                                @endif
                                                                                            </td>
                                                                                            <td>
                                                                                                @if ($item->approved_at !== null)
                                                                                                    <span class="badge rounded-pill bg-success">Approved</span>
                                                                                                @endif
                                                                                            </td>
                                                                                            <td>{{ $item->approved_at->diffForHumans() }}</td>
                                                                                            <td>
                                                                                                <div class="gap-2 d-flex justify-content-around flex-column">
                                                                                                    <!-- View Button -->
                                                                                                    <button class="btn btn-info btn-sm" type="button" data-bs-toggle="modal"
                                                                                                        data-bs-target="#viewModalData{{ $item->id }}">
                                                                                                        View
                                                                                                    </button>

                                                                                                    <!-- Edit Button -->
                                                                                                    {{-- <a class="btn btn-success btn-sm ms-2"
                                                                                                        href="{{ url('editbeneficiaries', $item->id) }}">Edit</a> --}}

                                                                                                    <!-- Delete Button with Modal Trigger -->
                                                                                                    {{-- <button class="btn btn-danger btn-sm ms-2" data-bs-toggle="modal"
                                                                                                        data-bs-target="#deleteModal{{ $item->id }}">
                                                                                                        Delete
                                                                                                    </button> --}}
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <div class="modal fade" id="viewModalData{{ $item->id }}" tabindex="-1"
                                                                                            aria-labelledby="viewModalDataLabel{{ $item->id }}" aria-hidden="true">
                                                                                            <div class="modal-dialog modal-lg">
                                                                                                <div class="modal-content">
                                                                                                    <div class="modal-header">
                                                                                                        <h5 class="modal-title" id="viewModalDataLabel{{ $item->id }}">
                                                                                                            Item Details</h5>
                                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                                            aria-label="Close"></button>
                                                                                                    </div>
                                                                                                    <div class="modal-body" style="max-height: 80vh; overflow-y: auto;">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-6">
                                                                                                                <div class="form-group">
                                                                                                                    <label><strong>Name:</strong></label>
                                                                                                                    <input type="text" class="form-control"
                                                                                                                        value="{{ $item->name }}" disabled>
                                                                                                                </div>
                                                                                                                <div class="form-group">
                                                                                                                    <label><strong>Email:</strong></label>
                                                                                                                    <input type="email" class="form-control"
                                                                                                                        value="{{ $item->email }}" disabled>
                                                                                                                </div>
                                                                                                                <div class="form-group">
                                                                                                                    <label><strong>Approved By:</strong></label>
                                                                                                                    <input type="approved By" class="form-control"
                                                                                                                        value="{{ $item->approvedBy->first_name ?? 'No' }} {{ $item->approvedBy->last_name ?? 'Data' }}"
                                                                                                                        disabled>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-6">
                                                                                                                <div class="form-group">
                                                                                                                    <label><strong>Phone:</strong></label>
                                                                                                                    <input type="text" class="form-control"
                                                                                                                        value="{{ $item->phone }}" disabled>
                                                                                                                </div>
                                                                                                                <div class="form-group">
                                                                                                                    <label><strong>Program Enrolled:</strong></label>
                                                                                                                    <input type="text" class="form-control"
                                                                                                                        value="{{ $item->service ? $item->service->name : 'No Program' }}"
                                                                                                                        disabled>
                                                                                                                </div>
                                                                                                                <div class="form-group">
                                                                                                                    <label><strong>Approved At:</strong></label>
                                                                                                                    <input type="text" class="form-control"
                                                                                                                        value="{{ $item?->approved_at->diffForHumans() ?? 'Pending' }}"
                                                                                                                        disabled>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="card">
                                                                                                            <div class="card-body">
                                                                                                                <p class="border-b fw-bold fs-5">Field Filled</p>
                                                                                                                <p class="mt-2">
                                                                                                                    @php
                                                                                                                        $customFields = json_decode(
                                                                                                                            $item->custom_fields,
                                                                                                                            true,
                                                                                                                        );
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
                                                            @endif
                                                            <!-- View Modal -->
                                                </div>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">No released beneficiary yet</td>
                                    </tr>
                                @endforelse
                    </tbody>
                    </table>
                    {{ $data->links('pagination::bootstrap-5') }}
                </div>
            </div>
            {{-- @include('admin.components.applicants') --}}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
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

    @include('admin.script')
</body>

</html>
