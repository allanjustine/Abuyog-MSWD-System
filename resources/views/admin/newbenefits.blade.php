<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Assistance to Beneficiaries</title>

    @if (Auth::user()->usertype === 'admin')
        @include('admin.css')
    @elseif(Auth::user()->usertype === 'operator')
        @include('operator.css')
    @else
        @include('employee.css')
    @endif
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

        @if (Auth::user()->usertype === 'admin')
            @include('admin.sidebar')
            @include('admin.navbar')
        @elseif(Auth::user()->usertype === 'operator')
            @include('operator.sidebar')

            @include('operator.navbar')
        @else
            @include('employee.sidebar')

            @include('employee.navbar')
        @endif

        <div class="container">
            <div class="card" align="center" style="padding-top:80px;">
                <div class="card-header">
                    Add New Assistance to Selected Beneficiaries

                </div>


                <div class="container mt-4">
                    @if (session('success'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <!-- Add Assistance Button -->
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-info btn-lg" data-bs-toggle="modal"
                            data-bs-target="#addNewAssistanceModal">
                            Add New Assistance
                        </button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Assistance Name</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Date Given</th>
                                <th>Remarks</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($assistanceList as $assistance)
                                <tr>
                                    <td>{{ $assistance->name_of_assistance }}</td>
                                    <td>{{ $assistance->type_of_assistance }}</td>
                                    <td>{{ $assistance->amount }}</td>
                                    <td>{{ $assistance->date_received?->format('F d, Y') ?? 'Not Yet Given' }}</td>
                                    <td>
                                        @if($assistance->benefitReceiveds->count() > 0)
                                            <strong>{{ $assistance->benefitReceiveds->where('status', 'Received')->count() }}</strong> out of <strong>{{ $assistance->benefitReceiveds->count() }}</strong>
                                        @else
                                            <strong>Not generate yet</strong>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($assistance->date_received == null)
                                            <button class="btn btn-primary generate-beneficiaries-btn" type="button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#addAssistanceModal{{ $assistance->id }}">
                                                Generate
                                            </button>
                                        @else
                                            <button class="btn btn-info generate-beneficiaries-btn" type="button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#viewAssistanceModal{{ $assistance->id }}">
                                                View
                                            </button>
                                        @endif
                                        <button class="btn btn-success send-sms-btn d-none">
                                            Send SMS
                                        </button>
                                    </td>

                                    <script>
                                        $(document).ready(function() {
                                            $("#getBeneficiaries{{ $assistance->id }}").on('submit', function(event) {
                                                event.preventDefault();

                                                var $modal = $(this).closest('.modal');

                                                $('#generateButton', $modal).prop('disabled', true).html(
                                                    '<span class="spinner-border spinner-border-sm"></span> Generating...');

                                                var formData = $(this).serialize();

                                                $.ajax({
                                                    url: '/get-beneficiaries',
                                                    method: 'GET',
                                                    data: formData,
                                                    success: function(response) {
                                                        if (response && (Array.isArray(response.beneficiaries) || Array.isArray(response.showExcludedBeneficiaries))) {

                                                            let beneficiaryTableHtml = `
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>Age</th>
                                                                            <th>Barangay</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>`;

                                                            response?.beneficiaries?.forEach(function(beneficiary) {
                                                                beneficiaryTableHtml += `
                                                                    <tr>
                                                                        <td>${beneficiary.name}</td>
                                                                        <td>${beneficiary.age || 'N/A'}</td>
                                                                        <td>${beneficiary.barangay}</td>
                                                                    </tr>`;
                                                            });

                                                            beneficiaryTableHtml += `</tbody></table>`;

                                                            $("#beneficiaryList", $modal).html(beneficiaryTableHtml);
                                                            $("#excludedBeneficiaryList", $modal).html('');
                                                            $("#accordionFlushExample", $modal).hide();
                                                            if (response?.showExcludedBeneficiaries?.length > 0) {
                                                                let excludedTableHtml = `
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Name</th>
                                                                                <th>Age</th>
                                                                                <th>Barangay</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>`;

                                                                response.showExcludedBeneficiaries.forEach(function(beneficiary) {
                                                                    excludedTableHtml += `
                                                                        <tr>
                                                                            <td>${beneficiary.name}</td>
                                                                            <td>${beneficiary.age || 'N/A'}</td>
                                                                            <td>${beneficiary.barangay}</td>
                                                                        </tr>`;
                                                                });

                                                                excludedTableHtml += `</tbody></table>`;

                                                                $("#excludedBeneficiaryList", $modal).html(excludedTableHtml);

                                                                $("#accordionFlushExample", $modal).show();

                                                                const excludedBeneficiaryIds = response.excluded_beneficiary_ids.join(',');
                                                                console.log(response.excluded_beneficiary_ids);
                                                                $("input[name='excluded_beneficiary_ids_data[]']", $modal).val(excludedBeneficiaryIds);

                                                            }
                                                            const total = `<p class="fw-bold fs-3">Total Generated Beneficiaries: ${response.totalBeneficiaries}</p>`;
                                                            $("#totalGenerated", $modal).html(total);

                                                            const beneficiaryIds = response.beneficiary_ids.join(',');
                                                            $("input[name='beneficiary_ids_data[]']", $modal).val(beneficiaryIds);

                                                            $('#generateButton', $modal).html('Generate Beneficiaries').prop('disabled', false);
                                                        } else {
                                                            alert("No beneficiaries found or invalid response.");
                                                            $('#generateButton', $modal).html('Generate Beneficiaries').prop('disabled', false);
                                                        }
                                                    },
                                                    error: function(xhr, status, error) {
                                                        alert("There was an error processing the request. Please try again.");
                                                        $('#generateButton', $modal).html('Generate Beneficiaries').prop(
                                                            'disabled', false);
                                                    }
                                                });
                                            });
                                        });
                                    </script>

                                    <div class="modal fade" id="addAssistanceModal{{ $assistance->id }}" tabindex="-1"
                                        aria-labelledby="addAssistanceLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <!-- Align the search form to the right -->
                                            <div class="modal-content">
                                                <div class="moday-body"
                                                    style="max-height: 75vh; overflow-y: auto; overflow-x: hidden;">
                                                    <form action="/get-beneficiaries" method="GET" class="mt-3"
                                                        id="getBeneficiaries{{ $assistance->id }}">
                                                        @csrf
                                                        <h5 style="margin-top:5%;">Filter Beneficiaries by New
                                                            Assistance
                                                            (<strong>{{ $assistance->name_of_assistance }}</strong>)
                                                        </h5>
                                                        <div class="row form-row align-items-center justify-content-center"
                                                            style="padding: 0 15px;">
                                                            <div class="mt-4 mb-3 col-md-4">
                                                                <label for="min_age" class="form-label"
                                                                    style="margin-top: 5%;">Age
                                                                    From</label>
                                                                <input type="number" class="form-control"
                                                                    id="min_age" name="min_age" min="0">
                                                            </div>
                                                            <div class="mt-4 mb-3 col-md-4">
                                                                <label for="max_age" class="form-label"
                                                                    style="margin-top: 5%;">Age
                                                                    To</label>
                                                                <input type="number" class="form-control"
                                                                    id="max_age" name="max_age" min="0">
                                                            </div>

                                                            <div class="mb-3 col-md-4">
                                                                <label for="limit" class="form-label"
                                                                    style="margin-top: 5%;">Limit
                                                                    of
                                                                    Beneficiaries that will receive the
                                                                    assistance</label>
                                                                <input type="number" class="form-control"
                                                                    id="limit" name="limit">
                                                            </div>
                                                        </div>
                                                        <div class="row" style="padding: 0 15px;">
                                                            <!-- Service Section -->
                                                            <div class="mb-3 col-md-6">
                                                                <label for="serviceSelect" class="form-label"
                                                                    style="margin-top: 5%;">Select Programs to be included</label>
                                                                <div class="p-1 border rounded"
                                                                    style="margin-top:2.5%;">
                                                                    <ul class="gap-2 p-1 m-3 d-flex justify-content-start align-items-start flex-column"
                                                                        style="height: 200px; overflow-y: auto;"
                                                                        class="w-100">
                                                                        @foreach ($services as $service)
                                                                            <li>
                                                                                <input
                                                                                    style="width: 20px; height: 20px;"
                                                                                    type="checkbox"
                                                                                    id="service_{{ $service->id }}"
                                                                                    value="{{ $service->id }}"
                                                                                    name="service_ids[]"
                                                                                    {{ request('service') == $service->id ? 'checked' : '' }}>
                                                                                <label
                                                                                    for="service_{{ $service->id }}">{{ $service->name }}</label>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="assistance_ids" class="form-label"
                                                                    style="margin-top: 5%;">Select Assistance to be excluded</label>
                                                                <div class="p-1 border rounded"
                                                                    style="margin-top:2%;">
                                                                    <ul class="gap-2 p-1 m-3 d-flex justify-content-start align-items-start flex-column"
                                                                        style="height: 200px; overflow-y: auto;"
                                                                        class="w-100">
                                                                        @foreach ($assistanceList->whereNotIn('id', [$assistance->id]) as $assistance2)
                                                                            <li>
                                                                                <input
                                                                                    style="width: 20px; height: 20px;"
                                                                                    type="checkbox"
                                                                                    id="assistance2_{{ $assistance2->id }}"
                                                                                    value="{{ $assistance2->id }}"
                                                                                    name="assistance2_ids[]"
                                                                                    {{ request('assistance2') == $assistance2->id ? 'checked' : '' }}>
                                                                                <label
                                                                                    for="assistance2_{{ $assistance2->id }}">{{ $assistance2->name_of_assistance }}</label>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="padding: 0 15px;">

                                                            <div class="mb-3 col-md-12">
                                                                <label for="barangaySelect" class="form-label"
                                                                    style="margin-top: 5%;">Select
                                                                    Barangay (if applicable)</label>
                                                                <div class="p-1 border rounded"
                                                                    style="margin-top:2%;">
                                                                    <ul class="gap-2 p-1 m-3 d-flex justify-content-start align-items-start flex-column"
                                                                        style="height: 200px; overflow-y: auto;"
                                                                        class="w-100">
                                                                        @foreach ($barangays as $barangay)
                                                                            <li>
                                                                                <input
                                                                                    style="width: 20px; height: 20px;"
                                                                                    type="checkbox"
                                                                                    id="barangay_{{ $barangay->id }}"
                                                                                    value="{{ $barangay->id }}"
                                                                                    name="barangay_ids[]"
                                                                                    {{ request('barangay') == $barangay->id ? 'checked' : '' }}>
                                                                                <label
                                                                                    for="barangay_{{ $barangay->id }}">{{ $barangay->name }}</label>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center" id="totalGenerated">
                                                        </div>
                                                        <div id="beneficiaryList" class="mt-3">
                                                            <!-- Filtered beneficiaries will be dynamically added here -->
                                                        </div>
                                                        <div class="mb-3 d-flex justify-content-center">
                                                            <button class="btn btn-primary" type="submit"
                                                                id="generateButton">Generate Beneficiaries</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <form action="/add-benefits/{{ $assistance->id }}" method="POST"
                                                    id="addBenefits{{ $assistance->id }}">
                                                    @csrf

                                                    <div x-data="{ isOpen: false }" class="accordion accordion-flush my-3 excludedBeneficiaryDiv" id="accordionFlushExample" style="display: none;">
                                                        <div class="accordion-item">
                                                          <h2 class="accordion-header">
                                                            <button x-on:click="isOpen = !isOpen" class="accordion-button bg-primary text-white" :class="{ 'collapsed': !isOpen }" type="button">
                                                                Show excluded beneficiaries who have already received benefits.
                                                            </button>
                                                          </h2>

                                                          <div id="excludedBeneficiaryList" x-show="isOpen" x-transition></div>
                                                          <div x-show="isOpen" x-transition>
                                                            <p class="fw-bold fs-5">Do you want to include these beneficiaries even they already received benefits?</p>
                                                            <div class="d-flex justify-content-center align-items-center gap-3">
                                                                <div class="d-flex gap-1 align-items-center">
                                                                    <label for="include_excluded_yes">Yes</label>
                                                                    <input type="radio" value="Yes" name="include_excluded" class="form-check-input" id="include_excluded_yes">
                                                                </div>
                                                                <div class="d-flex gap-1 align-items-center">
                                                                    <label for="include_excluded_no">No</label>
                                                                    <input type="radio" value="No" name="include_excluded" class="form-check-input" id="include_excluded_no">
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" value=""
                                                        name="beneficiary_ids_data[]">
                                                    <input type="hidden" value=""
                                                        name="excluded_beneficiary_ids_data[]">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success"
                                                            id="submitButton">Add
                                                            Assistance</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <div class="modal fade" id="viewAssistanceModal{{ $assistance->id }}" tabindex="-1"
                                    aria-labelledby="viewAssistanceModal{{ $assistance->id }}Label"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5"
                                                    id="viewAssistanceModal{{ $assistance->id }}Label">Total beneficiaries in
                                                    <strong>{{ $assistance->name_of_assistance }}</strong>:
                                                    @if ($assistance->date_received !== null)
                                                        {{ $assistance->benefitReceiveds->count() }}
                                                    @endif. That given on
                                                    <strong>{{ $assistance?->date_received?->format('F d, Y') ?? 'No record yet' }}</strong>
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="max-height: 75vh; overflow-y: auto;">
                                                <div class="container">
                                                    <div class="row bg-light">
                                                        <div class="py-2 border col-4"><strong>Beneficiary
                                                                Name</strong>
                                                        </div>
                                                        <div class="py-2 border col-4"><strong>Amount</strong></div>
                                                        <div class="py-2 border col-4"><strong>Status</strong></div>
                                                    </div>

                                                    @forelse ($assistance->benefitReceiveds as $benefitsReceived)
                                                        <div class="row">
                                                            <div class="py-2 border col-4">
                                                                {{ $benefitsReceived->beneficiary->full_name }}</div>
                                                            <div class="py-2 border col-4">
                                                                {{ $benefitsReceived->assistance->amount }}</div>
                                                            <div class="py-2 border col-4">
                                                                @if ($benefitsReceived->status === 'Pending')
                                                                    <span
                                                                        class="badge rounded-pill bg-warning">{{ $benefitsReceived->status }}</span>
                                                                @elseif($benefitsReceived->status === 'Not Received')
                                                                    <span
                                                                        class="badge rounded-pill bg-danger">{{ $benefitsReceived->status }}</span>
                                                                @else
                                                                    <span
                                                                        class="badge rounded-pill bg-primary">{{ $benefitsReceived->status }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @empty
                                                        <div class="row">
                                                            <div class="py-2 text-center border col-12">No Data Yet
                                                            </div>
                                                        </div>
                                                    @endforelse
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No Assistance added yet</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $assistanceList->links('pagination::bootstrap-5')}}

                    <div class="modal fade" id="addNewAssistanceModal" tabindex="-1"
                        aria-labelledby="addNewAssistanceModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="/add-new-assistance" method="POST">
                                    @csrf
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="addNewAssistanceModalLabel">Add New
                                            Assistance
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-row row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="name_of_assistance">Name of Assistance</label>
                                                    <input type="text" class="form-control"
                                                        id="name_of_assistance" name="name_of_assistance" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="type_of_assistance">Type of Assistance</label>
                                                    <select id="type_of_assistance" name="type_of_assistance"
                                                        class="form-select" required>
                                                        <option value="" selected hidden>Type of Assistance
                                                        </option>
                                                        <option value="" disabled>Type of Assistance</option>
                                                        <option value="Financial Assistance">Financial Assistance
                                                        </option>
                                                        <option value="Medical Assistance">Medical Assistance</option>
                                                        <option value="Educational Assistance">Educational Assistance
                                                        </option>
                                                        <option value="Food Assistance">Food Assistance</option>
                                                        <option value="Shelter Assistance">Shelter Assistance</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="amount">Amount</label>
                                                    <input class="form-control" min="0" id="amount" name="amount"
                                                        type="number" />
                                                        @error('amount')
                                                        {{ $message }}
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Save Assistance</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: '<span style="color: #000;">Success</span>', // Make title text black
                text: '{{ session('success') }}',
                background: '#f8f9fa', // Light gray background for better contrast
                iconColor: '#28a745', // Green icon color
                confirmButtonColor: '#28a745', // Button matches success color
                customClass: {
                    popup: 'swal-custom-popup' // Add a class to customize further with CSS
                }
            });
        @endif
    </script>
    <script>
        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: '<span style="color: #000;">Something went wrong</span>', // Make title text black
                text: '{{ session('error') }}',
                background: '#f8f9fa',
                iconColor: 'red',
                confirmButtonColor: 'red',
                customClass: {
                    popup: 'swal-custom-popup'
                }
            });
        @endif
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Optional CSS for Further Customization -->
    <style>
        .swal-custom-popup {
            padding: 20px !important;
            /* Adjust padding */
        }

        .swal2-icon {
            margin-top: 20px !important;
            /* Push icon lower */
        }

        .swal2-title {
            font-size: 1.5rem !important;
            /* Adjust title font size */
            margin-top: 10px !important;
            /* Add some spacing above title */
        }

        .swal2-content {
            font-size: 1rem !important;
            /* Adjust text font size */
        }
    </style>




    <script>
        $(document).ready(function() {
            // When the modal is opened, collect the filtered beneficiaries
            $('#addselectedAssistanceModal').on('show.bs.modal', function() {
                // Collect the filtered beneficiaries from the DOM (you can adjust this based on your filter result display)
                let filteredBeneficiaries = [];
                // Loop through your table rows and check if they are part of the filtered list
                $('table tbody tr').each(function() {
                    // Assuming rows with filtered beneficiaries have a specific class or identifier
                    if ($(this).hasClass('filtered')) { // Adjust this condition as needed
                        filteredBeneficiaries.push($(this).data('id'));
                    }
                });

                // Set the hidden input with the beneficiary IDs
                $('#beneficiary_ids').val(filteredBeneficiaries.join(','));
            });
        });
    </script>


    {{-- <script>
        document.querySelectorAll('.generate-beneficiaries-btn').forEach(button => {
                button.addEventListener('click', function () {
                    const assistanceName = this.dataset.assistance;
                    document.querySelector('#beneficiaryForm').dataset.assistance = assistanceName;
                });
            });

            document.querySelector('#beneficiaryForm').addEventListener('submit', function (e) {
                e.preventDefault();
                const assistanceName = this.dataset.assistance;

                // Example AJAX call to generate beneficiaries
                const selectedBeneficiaries = []; // Example selection

                fetch('/generate-beneficiaries', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ assistance_name: assistanceName, beneficiary_ids: selectedBeneficiaries })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Beneficiaries generated successfully');
                            // Show the Send SMS button
                            document.querySelector('.send-sms-btn').classList.remove('d-none');
                        }
                    });
            });
    </script> --}}

    @include('admin.script')
</body>

</html>
