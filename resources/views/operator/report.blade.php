<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>

    <!-- Include CSS -->
    @include('operator.css')

    <!-- Bootstrap CSS (Optional, you can remove if already included) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom Styles -->
    <style>
        #service,
        #barangay {
            background-color: #f8f9fa;
            border-color: #6c757d;
            color: #343a40;
            width: 180px;
        }

        .button-container {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .button-container .btn {
            flex-shrink: 0;
        }

        .table th,
        .table td {
            text-align: center;
            vertical-align: middle;
        }

        .form-label {
            font-weight: 600;
        }

        .card-header h3 {
            color: #495057;
        }

        .no-data-message {
            font-size: 1.1em;
            color: #6c757d;
        }

        .filter-form select {
            margin-right: 10px;
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
        @include('operator.sidebar')

        <!-- Navbar -->
        @include('operator.navbar')

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
                    <div class="row gy-3 align-items-center">
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
                            <div class="d-flex flex-wrap gap-2">
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
                            {{--  <th>ID</th>  --}}
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Barangay</th>
                            <th>Program Enrolled</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($beneficiaries as $beneficiary)
                            <tr>
                                {{--  <td>{{ $beneficiary->id }}</td>  --}}
                                <td>{{ $beneficiary->first_name }}</td>
                                <td>{{ $beneficiary->middle_name }}</td>
                                <td>{{ $beneficiary->last_name }}</td>
                                <td>{{ $beneficiary->email }}</td>
                                <td>{{ $beneficiary->phone }}</td>
                                <td>{{ $beneficiary->barangay->name ?? 'N/A' }}</td>
                                <td>{{ $beneficiary->service->name ?? 'N/A' }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center no-data-message">No reports found for the
                                    selected filters.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    <!-- Include Scripts -->
    @include('admin.script')

</body>

</html>
