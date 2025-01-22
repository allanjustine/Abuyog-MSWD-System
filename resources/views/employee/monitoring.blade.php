<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring</title>

    @include('employee.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: rgb(174, 164, 164);
            /* Light gray background */
        }

        .btn {

            color: black;
        }

        /* Button Colors */
        .btn-info {
            border-color: #007bff;
        }

        .btn-success {
            border-color: #28a745;
        }

        .btn-danger {
            border-color: #dc3545;
        }

        .btn-warning {
            border-color: #ffc107;
        }

        /* Hover Effect: Icon Design Change */
        .btn-info:hover i {
            color: #007bff;
            font-weight: bold;
        }

        .btn-success:hover i {
            color: #28a745;
            font-weight: bold;
        }

        .btn-danger:hover i {
            color: #dc3545;
            font-weight: bold;
        }

        .btn-warning:hover i {
            color: #ffc107;
            font-weight: bold;
        }

        /* On Click: Change Button Border and Text Color to Black */
        .btn:active {
            border-color: black;
            color: black;
        }

        .btn:active i {
            color: black;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('employee.sidebar')
        @include('employee.navbar')

        <div class="container-fluid fpage-body-wrapper">
            <div class="container mt-5">
                <div class="card" style="padding-top:20px;">
                    <div class="card-header text-center">
                        <h5 class="mt-2">Monitoring</h5>
                    </div>

                    <!-- Search Bar -->
                    <div class="d-flex justify-content-between px-3 py-2">
                        <div class="d-flex gap-2">
                            <form action="/employee/monitoring" method="get" class="mt-5">
                                @csrf
                                From:<input type="date" name="date_start" value="{{ request()->date_start }}"
                                    class="form-control d-inline-block" style="width: auto;">
                                To:<input type="date" name="date_end" value="{{ request()->date_end }}"
                                    class="form-control d-inline-block" style="width: auto;">
                                <button type="submit" class="btn btn-primary d-inline-block">Filter</button>
                            </form>
                            <form action="/employee/monitoring" method="get" class="mt-5">
                                @csrf
                                <input type="date" name="date_start" value="" class="form-control d-inline-block d-none"
                                    style="width: auto;">
                                <input type="date" name="date_end" value="" class="form-control d-inline-block d-none"
                                    style="width: auto;">
                                <button type="submit" class="btn btn-warning d-inline-block">Reset</button>
                            </form>
                        </div>
                        <form action="/employee/monitoring" method="GET" class="mt-5">
                            <input type="search" name="search" placeholder="Search.." value="{{ request()->search }}"
                                class="form-control d-inline-block" style="width: auto;">
                            <button type="submit" class="btn btn-primary d-inline-block">Search</button>
                        </form>
                    </div>

                    <!-- Table -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered table-striped">
                                <thead class="text-center">
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Middle Name</th>
                                        <th>Age</th>
                                        <th>Barangay</th>
                                        <th>Date Received</th>
                                        <th>Id Status</th>
                                        <th>Program Enrolled</th>
                                        <th>Barangay</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($receiveds as $received)
                                    <tr id="application-{{ $received->beneficiary->id }}">
                                        <td>{{ $received->beneficiary->first_name }}</td>
                                        <td>{{ $received->beneficiary->last_name }}</td>
                                        <td>{{ $received->beneficiary->middle_name }}</td>
                                        <td>{{ $received->beneficiary->age }}</td>
                                        <td>{{ $received->beneficiary->barangay->name }}</td>
                                        <td>{{ $received->date_received->format('F d, Y') }}</td>
                                        <td>
                                            @if($received->beneficiary->id_status == 'valid')
                                            <span class="badge bg-primary">
                                                Renewed
                                            </span>
                                            @elseif($received->beneficiary->id_status == 'invalid')
                                            <span class="badge bg-danger">
                                                Not Renewed
                                            </span>
                                            @else<span class="badge bg-secondary">
                                                No Id Provided
                                            </span>
                                            @endif
                                        </td>
                                        <td>{{ $received->beneficiary->service->name }} <br> <strong>{{ $received->beneficiary->service->id === 2 ? '(Disability Type: ' . $received->beneficiary->disability_type . ')' : '' }}</strong></td>
                                        <td>{{ $received->beneficiary->barangay->name }}</td>
                                        <td class="text-center">
                                            <!-- Action Buttons -->
                                            @if ($received->status === 'pending')
                                            <button class="btn btn-success btn-sm"
                                                onclick="confirmReceived('{{ url('received/'. $received->id.'/'.$received->beneficiary->id) }}')">
                                                <i class="bi bi-check-circle"></i> Received
                                            </button>
                                            @if ($received->beneficiary->id_status == 'invalid')
                                            <button class="btn btn-danger btn-sm"
                                                onclick="markAsNotReceived('{{ url('not-received', $received->id) }}')">
                                                <i class="bi bi-x-circle"></i> Not Received
                                            </button>
                                            @endif
                                            @elseif($received->status === 'received')
                                            <button class="btn btn-primary btn-sm">
                                                <i class="bi bi-check-circle"></i> Received
                                            </button>
                                            @else
                                            <button class="btn btn-danger btn-sm">
                                                <i class="bi bi-x-circle"></i> Not Received
                                            </button>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                {{ $receiveds->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @if (session('success'))
            <div class="mt-3 d-flex justify-content-center">
                <div class="text-center alert alert-success w-50">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ session('success') }}
                </div>
            </div>
            @endif

            @if (session('error'))
            <div class="mt-3 d-flex justify-content-center">
                <div class="text-center alert alert-danger w-50">
                    {{ session('error') }}
                </div>
            </div>
            @endif
        </div>

        @include('employee.script')


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function confirmReceived(approvalUrl) {
                console.log(approvalUrl);
                Swal.fire({
                    title: '<span style="color: black;">Are you sure you want to mark this as received?</span>'
                    , html: '<span style="color: black;">This action cannot be undone.</span>'
                    , icon: 'warning'
                    , showCancelButton: true
                    , confirmButtonColor: '#3085d6'
                    , cancelButtonColor: '#d33'
                    , confirmButtonText: 'Yes, received it!'
                    , cancelButtonText: 'Cancel'
                    , background: '#f8f9fa', // Light background
                    customClass: {
                        title: 'swal-title-custom'
                        , popup: 'swal-popup-custom'
                        , icon: 'swal-icon-custom'
                    , }
                , }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: '<span style="color: black;">Processing...</span>'
                            , html: '<span style="color: black;">It might take some time.</span>'
                            , allowOutsideClick: false
                            , showConfirmButton: false
                            , didOpen: () => {
                                Swal.showLoading();
                                // Redirect to the approval URL
                                window.location.href = approvalUrl;
                            }
                            , background: '#f8f9fa', // Light background
                        });
                    }
                });
            }

        </script>
        <script>
            function markAsNotReceived(approvalUrl) {
                Swal.fire({
                    title: '<span style="color: black;">Are you sure you want to mark this as not received?</span>'
                    , html: '<span style="color: black;">This action cannot be undone.</span>'
                    , icon: 'warning'
                    , showCancelButton: true
                    , confirmButtonColor: '#3085d6'
                    , cancelButtonColor: '#d33'
                    , confirmButtonText: 'Yes, not received it!'
                    , cancelButtonText: 'Cancel'
                    , background: '#f8f9fa', // Light background
                    customClass: {
                        title: 'swal-title-custom'
                        , popup: 'swal-popup-custom'
                        , icon: 'swal-icon-custom'
                    , }
                , }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: '<span style="color: black;">Processing...</span>'
                            , html: '<span style="color: black;">It might take some time.</span>'
                            , allowOutsideClick: false
                            , showConfirmButton: false
                            , didOpen: () => {
                                Swal.showLoading();
                                // Redirect to the approval URL
                                window.location.href = approvalUrl;
                            }
                            , background: '#f8f9fa', // Light background
                        });
                    }
                });
            }

        </script>

        <style>
            /* Adjust the spacing between icon and title */
            .swal-popup-custom {
                padding: 20px !important;
                /* Adjust overall padding */
            }

            .swal-title-custom {
                margin-top: 8px !important;
                /* Reduce space below icon */
                color: black !important;
                /* Ensure title text is black */
            }

            .swal-icon-custom {
                margin-bottom: 8px !important;
                /* Reduce space below the icon */
            }
        </style>

        <script>
            function hideButtons(applicationId) {
                document.getElementById('approve-btn-' + applicationId).style.display = 'none';
                document.getElementById('cancel-btn-' + applicationId).style.display = 'none';
            }

            function showCancelModal(applicationId) {
                document.getElementById('applicationId').value = applicationId;
                var cancelModal = new bootstrap.Modal(document.getElementById('cancelModal'));
                cancelModal.show();
            }

        </script>


    </div>
</body>

</html>
