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

    <!-- Custom CSS for the modal design -->
    <style>
        .modal-content {
            border-radius: 10px;
            border: 1px solid #ccc;
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


                    <div class="table-responsive">
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
                                        <td>{{ $user->barangay }}</td>
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
                                                                id="deleteModalLabel{{ $user->id }}">Delete
                                                                Confirmation</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this beneficiary?
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
                                                            <input type="text" class="form-control" name="barangay"
                                                                value="{{ $user->barangay }}" required>
                                                        </div>

                                                        <!-- Role Dropdown -->
                                                        <div class="form-group mt-3">
                                                            <label for="usertype">Role</label>
                                                            <select class="form-control" name="usertype" required>
                                                                <option value="employee"
                                                                    {{ $user->usertype == 'employee' ? 'selected' : '' }}>
                                                                    Employee</option>
                                                                <option value="operator"
                                                                    {{ $user->usertype == 'operator' ? 'selected' : '' }}>
                                                                    Operator</option>
                                                            </select>
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
                                        <input type="text" class="form-control" name="barangay">
                                    </div>

                                    <!-- Role Dropdown -->
                                    <div class="form-group mt-3">
                                        <label for="usertype">Role</label>
                                        <select class="form-control" name="usertype" required>
                                            <option value="employee"
                                                {{ $user->usertype == 'employee' ? 'selected' : '' }}>Employee</option>
                                            <option value="operator"
                                                {{ $user->usertype == 'operator' ? 'selected' : '' }}>Operator</option>
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

</body>

</html>
