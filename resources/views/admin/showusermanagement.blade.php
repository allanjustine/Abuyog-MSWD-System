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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Custom CSS for the modal design -->
    <style>
        .modal-content {
            border-radius: 10px;
            border: 1px solid #ccc;
        }

        .swal2-title {
            color: black !important;
        }

        .modal-header {
            background-color: #00becc;
            color: #721c24;
            border-bottom: 2px solid #00becc;
        }

        .modal-footer {
            background-color: #00becc;
            border-top: 2px solid #00becc;
        }

        .modal-body {
            padding: 30px;
            text-align: center;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .btn-add-user {
            float: right;
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

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->

        @include('admin.navbar')

        <div class="container">
            <div class="card" align="center" style="padding-top:80px;">
                <div class="card-header">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Beneficiaries</span>
                        <!-- Add User Button moved to the right side -->
                        <button class="btn btn-primary btn-sm ms-auto" data-bs-toggle="modal"
                            data-bs-target="#addUserModal">Add User</button>
                    </div>
                </div>
                <div class="card-body">



                    <div class="table-responsive">

                        <div class="d-flex justify-content-end float-end">
                            <form class="d-flex" method="GET">
                                <input type="search" name="search" class="form-control me-2"
                                    value="{{ request('search') }}" placeholder="Search..." />
                                <button type="submit" class="btn btn-primary"><i
                                        class="fas fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <table class="table table-sm table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Barangay</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->first_name }}</td>
                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->barangay?->name }}</td>
                                        <td>{{ $user->usertype }}</td>
                                        <td>
                                            <!-- Edit button triggers the modal -->
                                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editModal{{ $user->id }}">
                                                Edit
                                            </button>
                                            <!-- Trigger the Modal -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $user->id }}">
                                                Delete
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1"
                                                aria-labelledby="deleteModalLabel{{ $user->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteModalLabel{{ $user->id }}">
                                                                Delete
                                                                Confirmation</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete
                                                            <strong>{{ $user->full_name }} -
                                                                {{ $user->usertype }}</strong>?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <form action="{{ route('users.destroy', $user) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Yes,
                                                                    Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1"
                                        aria-labelledby="editModalLabel{{ $user->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel{{ $user->id }}">Edit
                                                        User</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('users.update', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="first_name">First Name</label>
                                                            <input type="text" class="form-control" name="first_name"
                                                                value="{{ $user->first_name }}" required>
                                                        </div>

                                                        <div class="form-group mt-3">
                                                            <label for="last_name">Last Name</label>
                                                            <input type="text" class="form-control" name="last_name"
                                                                value="{{ $user->last_name }}" required>
                                                        </div>

                                                        <div class="form-group mt-3">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" name="email"
                                                                value="{{ $user->email }}" required>
                                                        </div>

                                                        <div class="form-group mt-3">
                                                            <label for="phone">Phone</label>
                                                            <input type="text" class="form-control" name="phone"
                                                                value="{{ $user->phone }}" required>
                                                        </div>

                                                        <div class="form-group mt-3">
                                                            <label for="barangay">Barangay</label>
                                                            <select name="barangay" id=""
                                                                class="form-select">
                                                                <option value="" selected hidden>Select Barangay
                                                                </option>
                                                                <option value="" disabled>Select Barangay
                                                                </option>
                                                                @foreach (\App\Models\Barangay::all() as $barangay)
                                                                    <option value="{{ $barangay->id }}"
                                                                        {{ $barangay->id === $user->barangay_id ? 'selected' : '' }}>
                                                                        {{ $barangay->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <!-- Role Dropdown -->
                                                        <div class="form-group mt-3">
                                                            <label for="usertype">Role</label>
                                                            <select class="form-select" name="usertype" required>
                                                                <option value="employee"
                                                                    {{ $user->usertype == 'employee' ? 'selected' : '' }}>
                                                                    Employee</option>
                                                                <option value="operator"
                                                                    {{ $user->usertype == 'operator' ? 'selected' : '' }}>
                                                                    Operator</option>
                                                                <option value="beneficiary"
                                                                    {{ $user->usertype == 'beneficiary' ? 'selected' : '' }}>
                                                                    Beneficiary</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group mt-3">
                                                            <label for="password">Password</label>
                                                            <input type="password" class="form-control"
                                                                name="password" value=""
                                                                placeholder="**********" required>
                                                        </div>
                                                        <div class="form-group mt-3">
                                                            <label for="password_confirmation">Password
                                                                Confirmation</label>
                                                            <input type="password" class="form-control"
                                                                name="password_confirmation" value=""
                                                                placeholder="**********" required>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $users->links('pagination::bootstrap-5') }}
                    </div>
                </div>

                <!-- Add User Modal -->
                <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('users.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" name="first_name" required>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" name="last_name" required>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" name="phone">
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="barangay">Barangay</label>
                                        <select class="form-select" name="barangay">
                                            <option value="" selected hidden>Select Barangay</option>
                                            <option value="" disabled>Select Barangay</option>
                                            @foreach (\App\Models\Barangay::all() as $barangay)
                                                <option value="{{ $barangay->id }}"
                                                    {{ old('barangay') === $barangay->id ? 'selected' : '' }}>
                                                    {{ $barangay->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Role Dropdown -->
                                    <div class="form-group mt-3">
                                        <label for="usertype">Role</label>
                                        <select class="form-select" name="usertype" required>
                                            <option value="employee"
                                                {{ $user->usertype == 'employee' ? 'selected' : '' }}>Employee</option>
                                            <option value="operator"
                                                {{ $user->usertype == 'operator' ? 'selected' : '' }}>Operator</option>
                                            <option value="beneficiary"
                                                {{ $user->usertype == 'beneficiary' ? 'selected' : '' }}>
                                                Beneficiary</option>
                                        </select>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" required>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                            required>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add User</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                $(document).ready(function() {
                    @if (session('success'))
                        Swal.fire({
                            title: 'Success',
                            text: "{{ session('success') }}",
                            icon: 'success',
                            showCancelButton: true,
                            showConfirmButton: false,
                            cancelButtonColor: 'gray',
                            cancelButtonText: 'Close',
                        });
                    @endif
                });
            </script>

            @include('admin.script')
</body>

</html>
