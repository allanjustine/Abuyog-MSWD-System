<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deceased</title>

    @include('operator.css')
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

        @include('operator.sidebar')

        @include('operator.navbar')

        <div class="container">
            <div class="card" align="center" style="padding-top:80px;">
                <div class="card-header">
                    Deceased
                </div>

                <!-- Align the search form to the right
                <form action="{{ url('beneficiary_search_emp') }}" method="get" class="text-end">
                    @csrf
                    <input type="search" name="search" placeholder="Search.." class="form-control d-inline-block"
                        style="width: auto;">
                    <input type="submit" class="btn btn-primary d-inline-block" value="Search">
                </form> -->

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
                                <th>Age</th>
                                <th>Date of confirmation of Death</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($deceased as $person)
                                <tr>
                                    <td>{{ $person->first_name }}</td>
                                    <td>{{ $person->middle_name ?? 'N/A' }}</td>
                                    <td>{{ $person->last_name }}</td>
                                    <td>{{ $person->email }}</td>
                                    <td>{{ $person->phone }}</td>
                                    <td>{{ $person->service->name }}</td>
                                    <td>{{ $person->barangay->name }}</td>
                                    <td>{{ $person->age }}</td>
                                    <td>{{ \Carbon\Carbon::parse($person->created_at)->format('F d, Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @include('operator.script')
</body>

</html>
