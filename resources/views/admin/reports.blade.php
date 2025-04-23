<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports Dashboard</title>

    <!-- Include CSS -->
    @include('admin.css')

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom Styles -->
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --success-color: #2ecc71;
            --info-color: #1abc9c;
            --warning-color: #f39c12;
            --danger-color: #e74c3c;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            color: #333;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .card-header {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            color: white;
            padding: 1.5rem;
            border-bottom: none;
        }

        .card-header h3 {
            margin: 0;
            font-weight: 600;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-header h3 i {
            margin-right: 10px;
        }

        .form-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            margin-top: 2rem;
        }

        .filter-form select, .filter-form input {
            width: 100%;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 10px 15px;
            font-size: 0.9rem;
            background-color: white;
            color: #495057;
            transition: all 0.3s ease;
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
        }

        .filter-form select:focus, .filter-form input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25);
            outline: none;
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--secondary-color);
            font-size: 0.9rem;
        }

        .button-container .btn {
            padding: 0.6rem 1.2rem;
            font-size: 0.9rem;
            font-weight: 500;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 120px;
        }

        .button-container .btn i {
            margin-right: 8px;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-danger {
            background-color: var(--danger-color);
            border-color: var(--danger-color);
        }

        .btn-success {
            background-color: var(--success-color);
            border-color: var(--success-color);
        }

        .btn-info {
            background-color: var(--info-color);
            border-color: var(--info-color);
        }

        .table-responsive {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            margin-top: 2rem;
        }

        .table {
            margin-bottom: 0;
            border-collapse: separate;
            border-spacing: 0;
        }

        .table thead th {
            background-color: var(--secondary-color);
            color: white;
            font-weight: 500;
            padding: 1rem;
            border: none;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
        }

        .table tbody tr {
            transition: background-color 0.2s ease;
        }

        .table tbody tr:hover {
            background-color: rgba(52, 152, 219, 0.05);
        }

        .table tbody td {
            padding: 1rem;
            border-bottom: 1px solid #f0f0f0;
            vertical-align: middle;
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        .no-data-message {
            padding: 2rem;
            text-align: center;
            color: #6c757d;
            font-size: 1.1rem;
        }

        .no-data-message i {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #adb5bd;
        }

        .amount-cell {
            font-weight: 600;
            color: var(--success-color);
        }

        /* Status badges */
        .badge {
            padding: 0.5em 0.75em;
            font-weight: 500;
            border-radius: 50px;
            font-size: 0.75rem;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .card-header h3 {
                font-size: 1.3rem;
            }

            .button-container .btn {
                min-width: auto;
                padding: 0.5rem 1rem;
            }
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 1.5rem;
            }

            .card-header {
                padding: 1.2rem;
            }

            .table thead th,
            .table tbody td {
                padding: 0.75rem;
            }
        }

        @media (max-width: 576px) {
            .button-container {
                flex-direction: column;
                gap: 0.5rem;
            }

            .button-container .btn {
                width: 100%;
            }
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .card, .form-container, .table-responsive {
            animation: fadeIn 0.5s ease-out forwards;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- Sidebar -->
        @include('admin.sidebar')

        <!-- Navbar -->
        @include('admin.navbar')

        <!-- Main Content -->
        <div class="container mt-5" style="width: 90%; margin-left: -10px;">
            <div class="mt-5 card">
                <div class="card-header">
                    <h3><i class="fas fa-chart-pie"></i> Reports Dashboard</h3>
                </div>
            </div>

            <div class="form-container">
                <!-- Filter Form -->
                <form method="GET" action="{{ route('reports.index') }}">
                    <div class="row gy-4">
                        <!-- Program Dropdown -->
                        <div class="col-md-3 col-12">
                            <label for="service" class="form-label"><i class="fas fa-project-diagram me-2"></i>Program</label>
                            <select id="service" name="service" class="form-select">
                                <option value="">All Programs</option>
                                @foreach ($services as $service)
                                <option value="{{ $service->id }}" {{ request('service')==$service->id ? 'selected' : '' }}>
                                    {{ $service->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Barangay Dropdown -->
                        <div class="col-md-3 col-12">
                            <label for="barangay" class="form-label"><i class="fas fa-map-marker-alt me-2"></i>Barangay</label>
                            <select id="barangay" name="barangay" class="form-select">
                                <option value="">All Barangays</option>
                                @foreach ($barangays as $barangay)
                                <option value="{{ $barangay->id }}" {{ request('barangay')==$barangay->id ? 'selected' : '' }}>
                                    {{ $barangay->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Name of Assistance Dropdown -->
                        <div class="col-md-3 col-12">
                            <label for="assistance" class="form-label"><i class="fas fa-hand-holding-usd me-2"></i>Assistance</label>
                            <select id="assistance" name="assistance" class="form-select">
                                <option value="">All Assistance</option>
                                @foreach ($assistances as $assistance)
                                <option value="{{ $assistance->id }}" {{ request('assistance')==$assistance->id ? 'selected' : '' }}>
                                    {{ $assistance->name_of_assistance }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Year Dropdown -->
                        <div class="col-md-2 col-12">
                            <label for="year" class="form-label"><i class="far fa-calendar-alt me-2"></i>Year</label>
                            <select id="year" name="year" class="form-select">
                                <option value="">All Years</option>
                                @foreach (range(date('Y'), 2000) as $year)
                                <option value="{{ $year }}" {{ request('year')==$year ? 'selected' : '' }}>
                                    {{ $year }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Month Dropdown -->
                        <div class="col-md-2 col-12">
                            <label for="month" class="form-label"><i class="far fa-calendar me-2"></i>Month</label>
                            <select id="month" name="month" class="form-select">
                                <option value="">All Months</option>
                                @foreach (range(1, 12) as $month)
                                <option value="{{ $month }}" {{ request('month')==$month ? 'selected' : '' }}>
                                    {{ date('F', mktime(0, 0, 0, $month, 1)) }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Buttons -->
                        <div class="mt-3 col-12">
                            <div class="flex-wrap gap-3 button-container d-flex">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-filter me-1"></i> Generate Report
                                </button>
                                <a href="{{ route('reports.download-pdf', request()->query()) }}" class="btn btn-danger">
                                    <i class="fas fa-file-pdf me-1"></i> PDF
                                </a>
                                <a href="{{ url('/export-beneficiaries/excel') }}" class="btn btn-success">
                                    <i class="fas fa-file-excel me-1"></i> Excel
                                </a>
                                <a href="{{ url('/export-beneficiaries/word') }}" class="btn btn-info">
                                    <i class="fas fa-file-word me-1"></i> Word
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Reports Table -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Phone</th>
                            <th>Barangay</th>
                            <th>Program</th>
                            <th>Assistance</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Date Given</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($beneficiaries as $beneficiary)
                        @foreach ($beneficiary->benefitReceiveds as $benefit)
                        @if ($benefit->date_received)
                        <tr>
                            <td>{{ $beneficiary->full_name }}</td>
                            <td>{{ $beneficiary->phone }}</td>
                            <td>{{ $beneficiary->barangay->name ?? 'N/A' }}</td>
                            <td>{{ $beneficiary->service->name ?? 'N/A' }}</td>
                            <td>{{ $benefit->assistance->name_of_assistance ?? 'N/A' }}</td>
                            <td>
                                <span class="badge bg-info text-dark">
                                    {{ $benefit->assistance->type_of_assistance ?? 'N/A' }}
                                </span>
                            </td>
                            <td class="amount-cell">
                                {{ $benefit->assistance ? '₱' . number_format($benefit->assistance->amount, 2) : 'N/A' }}
                            </td>
                            <td>{{ date('M d, Y', strtotime($benefit->date_received)) }}</td>
                        </tr>
                        @endif
                        @endforeach
                        @empty
                        <tr>
                            <td colspan="8" class="text-center no-data-message">
                                <i class="mb-3 fas fa-inbox fa-2x"></i><br>
                                No reports found for the selected filters.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- Include Scripts -->
    @include('admin.script')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        // Add active class to current nav item
        $(document).ready(function() {
            $('.nav-link').removeClass('active');
            $('.reports-link').addClass('active');
        });
    </script>
</body>

</html>
