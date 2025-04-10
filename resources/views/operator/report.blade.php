<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>

    <!-- Include CSS -->
    @include('admin.css')

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom Styles -->
    <style>
        .form-container {
            margin-top: 20px;
        }

        .filter-form select {
            width: 150px;
            /* Reduced width for a more compact look */
            border: 1px solid #ccc;
            border-radius: 6px;
            padding: 8px 12px;
            font-size: 0.875rem;
            background-color: #ffffff;
            /* Non-transparent background */
            color: #495057;
            /* Darker text for better contrast */
            transition: border-color 0.3s, box-shadow 0.3s, background-color 0.3s;
        }

        .filter-form select:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            background-color: #ffffff;
            /* Keeping solid white background on focus */
        }

        .filter-form select:hover {
            border-color: #0056b3;
        }

        .row.gy-3 {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .row .col-md-3,
        .row .col-md-2 {
            display: flex;
            flex-direction: column;
            gap: 5px;
            margin-bottom: 10px;
            /* Reduced gap between rows */
        }

        .row .col-md-3 select,
        .row .col-md-2 select {
            font-size: 0.875rem;
            max-width: 160px;
        }

        .row .col-md-3 label,
        .row .col-md-2 label {
            font-size: 0.85rem;
            font-weight: 600;
        }

        .button-container {
            display: flex;
            gap: 10px;
            justify-content: flex-start;
            align-items: center;
        }

        .button-container .btn {
            padding: 6px 12px;
            font-size: 0.875rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .button-container .btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .card-header h3 {
            color: #495057;
            font-size: 1.25rem;
        }

        .table th,
        .table td {
            text-align: center;
            vertical-align: middle;
            padding: 8px 10px;
        }

        .form-label {
            font-weight: 600;
        }

        .no-data-message {
            font-size: 1em;
            color: #6c757d;
        }

        @media (max-width: 768px) {
            .row.gy-3 {
                flex-direction: column;
                align-items: stretch;
            }

            .row .col-md-3,
            .row .col-md-2 {
                width: 100%;
                margin-bottom: 15px;
            }

            .button-container {
                justify-content: center;
            }
        }
    </style>


    <!-- Include JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-scroller">
        <!-- Sidebar -->
        @include('admin.sidebar')

        <!-- Navbar -->
        @include('admin.navbar')

        <!-- Main Content -->
        <div class="container mt-5">
            <div class="card" align="center" style="padding-top:80px;">
                <div class="card-header">
                    <h3>Reports</h3>
                </div>
            </div>

            <div class="container mt-5">
                <!-- Filter Form -->
                <form method="GET" action="{{ route('reports.index') }}">
                    <div class="row gy-3 align-items-center form-container">
                        <!-- Program Dropdown -->
                        <div class="col-md-3 col-12">
                            <label for="service" class="form-label">Select Program:</label>
                            <select id="service" name="service" class="form-control">
                                <option value="">All</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}"
                                        {{ request('service') == $service->id ? 'selected' : '' }}>
                                        {{ $service->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Barangay Dropdown -->
                        <div class="col-md-3 col-12">
                            <label for="barangay" class="form-label">Select Barangay:</label>
                            <select id="barangay" name="barangay" class="form-control">
                                <option value="">All</option>
                                @foreach ($barangays as $barangay)
                                    <option value="{{ $barangay->id }}"
                                        {{ request('barangay') == $barangay->id ? 'selected' : '' }}>
                                        {{ $barangay->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Name of Assistance Dropdown -->
                        <div class="col-md-3 col-12">
                            <label for="assistance" class="form-label">Select Name of Assistance:</label>
                            <select id="assistance" name="assistance" class="form-control">
                                <option value="">All</option>
                                @foreach ($assistances as $assistance)
                                    <option value="{{ $assistance->id }}"
                                        {{ request('assistance') == $assistance->id ? 'selected' : '' }}>
                                        {{ $assistance->name_of_assistance }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Year Dropdown -->
                        <div class="col-md-2 col-12">
                            <label for="year" class="form-label">Year:</label>
                            <select id="year" name="year" class="form-control">
                                <option value="">All Years</option>
                                @foreach (range(date('Y'), 2000) as $year)
                                    <option value="{{ $year }}"
                                        {{ request('year') == $year ? 'selected' : '' }}>
                                        {{ $year }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Month Dropdown -->
                        <div class="col-md-2 col-12">
                            <label for="month" class="form-label">Month:</label>
                            <select id="month" name="month" class="form-control">
                                <option value="">All Months</option>
                                @foreach (range(1, 12) as $month)
                                    <option value="{{ $month }}"
                                        {{ request('month') == $month ? 'selected' : '' }}>
                                        {{ date('F', mktime(0, 0, 0, $month, 1)) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Buttons -->
                        <div class="col-md-2 col-12 d-flex justify-content-md-start justify-content-center">
                            <div class="flex-wrap gap-2 d-flex">
                                <button type="submit" class="btn btn-primary">Generate</button>
                                <a href="{{ route('reports.download-pdf', request()->query()) }}"
                                    class="btn btn-danger">Download PDF</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Reports Table -->
            <div class="table-responsive">
                <table class="table table-sm table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Phone</th>
                            <th>Barangay</th>
                            <th>Program Enrolled</th>
                            <th>Assistance Received</th>
                            <th>Assistance Type</th>
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
                                        <td>{{ $benefit->assistance->type_of_assistance ?? 'N/A' }}</td>
                                        <td>{{ $benefit->assistance ? number_format($benefit->assistance->amount, 2) : 'N/A' }}</td>

                                        <td>{{ $benefit->date_received }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        @empty
                            <tr>
                                <td colspan="10" class="text-center no-data-message">No reports found for the selected
                                    filters.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- Include Scripts -->
    @include('admin.script')

</body>

</html>