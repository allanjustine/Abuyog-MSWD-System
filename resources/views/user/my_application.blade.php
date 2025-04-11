<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MSWD | Municipality of Abuyog</title>
    @include('user.css')
    <!-- CSS Links -->
    <link rel="stylesheet" href="../assets/css/maicons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/theme.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Add SweetAlert2 CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <style>
        /* Action links styling */
        .swal2-title {
            color: black !important;
        }

        .action-link {
            text-decoration: none;
            padding: 5px 10px;
            border: 2px solid transparent;
            border-radius: 5px;
            color: inherit;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            transition: border-color 0.3s ease;
        }

        .action-link i {
            margin-right: 5px;
        }

        .cancel-link {
            text-decoration: none;
            padding: 5px 10px;
            border: 2px solid transparent;
            border-radius: 5px;
            color: red;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            transition: border-color 0.3s ease;
        }

        .cancel-link i {
            margin-right: 5px;
        }

        /* Modal styles */
        .modal-dialog {
            max-width: 800px;
            margin: 30px auto;
        }

        .modal-content {
            padding: 20px;
        }

        .modal-header {
            border-bottom: none;
            background-color: #5c2a2a;
            color: white;
        }

        .modal-footer {
            border-top: none;
        }


        .action-link-cancel {
            border-color: red;
            color: red;
        }
        .action-link-reapply {
            border-color: violet;
            color: violet;
        }

        .action-link-cancel:hover {
            border-color: darkred;
        }

        .action-link-history {
            border-color: #17a2b8;
            color: #17a2b8;
        }

        .action-link-history:hover {
            border-color: #138496;
        }

        .action-link-download {
            border-color: green;
            color: green;
        }

        .action-link-download:hover {
            border-color: darkgreen;
        }

        /* Responsive table */
        .table-responsive {
            overflow-x: auto;
        }

        /* Logo styling for smaller screens */
        .navbar-brand img {
            max-height: 40px;
            width: auto;
        }

        /* Adjust column widths */
        table th:nth-child(1),
        table td:nth-child(1) {
            width: 30%;
            /* Wider column for Program Enrolled */
            word-wrap: break-word;
            /* Handle long names gracefully */
        }

        table th:nth-child(2),
        table td:nth-child(2) {
            width: 20%;
            /* Reduce width for Date for Personal Appearance */
        }

        table th:nth-child(3),
        table td:nth-child(3) {
            width: 15%;
            /* Adjust Phone column width */
        }

        table th:nth-child(4),
        table td:nth-child(4) {
            width: 15%;
            /* Adjust Status column width */
        }

        table th:nth-child(5),
        table td:nth-child(5) {
            width: 20%;
            /* Adjust Actions column width */
            white-space: nowrap;
            /* Prevent buttons from wrapping */
        }

        table {
            background-color: #faf9f9;
            /* Dark maroon background */
            color: white;
            /* Text color for better contrast */
            border-collapse: collapse;
            /* Clean border lines */
            width: 100%;
            /* Full width */
        }

        table th {
            background-color: #4a2020;
            /* Slightly darker maroon for header */
            color: white;
            /* White text for header */
            padding: 10px;
            border: 1px solidrgb(0, 0, 0);
            /* Border color */
            text-align: center;
        }

        table td {
            background-color: rgb(241, 229, 229);
            /* Matches table body background */
            color: BLACK;
            /* White text for data */
            padding: 10px;
            border: 1px solid #3a1a1a;
            /* Border color */
            text-align: center;
            vertical-align: middle;
            /* Align content vertically */
        }

        /* Hover effect for rows */
        table tbody tr:hover {
            background-color: #f0e8e8;
            /* Slightly lighter maroon on hover */
        }

        .card-header {
            background-color: #5c2a2a;
            /* Dark maroon background */
            color: white;
            /* White text for contrast */
            font-weight: bold;
            /* Make text bold */
            padding: 15px;
            border-bottom: 2px solid #3a1a1a;
            /* Add a subtle border */
        }

        .card-header .btn {
            background-color: rgb(204, 201, 201);
            /* Slightly darker maroon for button */
            color: black;
            /* White text for button */
            border: none;
            /* Remove border */
            transition: background-color 0.3s ease;
        }
    </style>
</head>

<body>

    @include('components.basic-info-modal')
    <div class="container-scroller">

        @include('user.sidebar')

        @include('user.navbar')

        <!-- Main Content -->
        <div class="container mt-4">
            <div class="card" style="margin-top:7%;">
                @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>All Applications</span>
                    <button class="btn btn-primary" id="addApplicationBtn">Add New Application</button>
                </div>
                {{-- @dd(Auth::user()->whereHas('beneficiaries', function($query) {$query->where('program_enrolled',
                1)->where('user_id', Auth::id());})->with('beneficiaries')->exists()) --}}

                <!-- Dynamic Service Selection Modal -->
                <div id="servicesModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Select a Service</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <ul class="list-group">
                                    @if (Auth::user()->age >= 60)
                                        @if ($alreadyHaveOsca)
                                            <li class="list-group-item">
                                                <a href="/form/1">
                                                    OSCA(Office of Senior Citizens) @if (\App\Models\Service::find( 1)->isInactive()) <span class="text-danger fst-italic fw-bold">- Inactive</span>@endif
                                                </a>
                                            </li>
                                        @endif
                                        @if (Auth::user()->has_minor_child === 1 && $availableSoloParent)
                                            <li class="list-group-item">
                                                <a href="/form/3">
                                                    Solo Parent @if (\App\Models\Service::find( 3)->isInactive()) <span class="text-danger fst-italic fw-bold">- Inactive</span>@endif
                                                </a>
                                            </li>
                                        @endif
                                        @if (!$alreadyHaveOsca && Auth::user()->has_minor_child === 0)
                                            <p class="text-center fs-4 fw-bold">No Services Available for OSCA and
                                                SoloParent</p>
                                        @endif
                                        <li class="list-group-item">
                                            <a href="/form/4">
                                                AICS(Assistance to Individuals in Crisis) @if (\App\Models\Service::find( 4)->isInactive()) <span class="text-danger fst-italic fw-bold">- Inactive</span>@endif
                                            </a>
                                        </li>
                                    @else
                                        @if ($availableSoloParent || !$isSoloParentExists)
                                            <li class="list-group-item">
                                                <a href="/form/3">
                                                    Solo Parent @if (\App\Models\Service::find( 3)->isInactive()) <span class="text-danger fst-italic fw-bold">- Inactive</span>@endif
                                                </a>
                                            </li>
                                        @endif
                                        @if ($availablePwd || !$isPwdExists)
                                            <li class="list-group-item">
                                                <a href="/form/2">
                                                    PWD(Persons with Disabilities) @if (\App\Models\Service::find( 2)->isInactive()) <span class="text-danger fst-italic fw-bold">- Inactive</span>@endif
                                                </a>
                                            </li>
                                        @endif
                                        @if (!$availableSoloParent && !$availablePwd && $isSoloParentExists && $isPwdExists)
                                            <p class="text-center fs-4 fw-bold">No Services Available for PWD and
                                                SoloParent</p>
                                        @endif
                                        <li class="list-group-item">
                                            <a href="/form/4">
                                                AICS(Assistance to Individuals in Crisis) @if (\App\Models\Service::find( 4)->isInactive()) <span class="text-danger fst-italic fw-bold">- Inactive</span>@endif
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    document.getElementById('addApplicationBtn').addEventListener('click', function () {
                        var modal = new bootstrap.Modal(document.getElementById('servicesModal'));
                        modal.show();
                    });
                </script>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Program Enrolled</th>
                                    <th>Date for Personal Appearance</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($apply as $applies)
                                    <tr>
                                        <td>
                                            <p>{{ $applies->service->name ?? 'No Service Assigned' }}</p>
                                            <p class="fw-bold">{{ isset($applies?->pwdDetails[0]?->pwd_number) ? "PWD NUMBER: ({$applies?->pwdDetails[0]?->pwd_number})" : '' }}</p>
                                        </td>
                                        <td>{{ $applies?->appearance_date?->format('F j, Y') ?? 'Pending' }} <br>

                                        @if($applies->status === 'pending' && $applies->appearance_date < now()->subDays(1))
                                            <small class="text-danger">Your application is over due you can cancel it to apply again. Thank you!</small>
                                            @endif
                                    </td>
                                        <td>{{ $applies->phone }}</td>
                                        <td class="text-center">
                                            @if ($applies->status === 'accepted' && $applies->approved_at !== null && $applies->approved_by !== null)
                                                <span>Approved</span>
                                            @else
                                                <span>
                                                    {{ ucfirst($applies->status) }}
                                                </span>
                                            @endif
                                            <br>
                                            @if ($availableSoloParent && $applies->service->id === 3)
                                                <span class="text-danger">(This application has already expired. {{ $applies->created_at->format('F j, Y') }})</span>
                                            @elseif($availablePwd && $applies->service->id === 2)
                                                <span class="text-danger">(This application has already expired. {{ $applies->created_at->format('F j, Y') }})</span>
                                            @endif
                                        </td>
                                        <td>
                                           <div class="gap-2 d-flex flex-column justify-content-center align-items-center">
                                           <a href="javascript:void(0);" class="action-link action-link-history"
                                                onclick="openModal({{ $applies->id }})">
                                                <i class="fas fa-info-circle"></i>View
                                            </a>
                                            @if ($applies->status === "pending")
                                                <button type="button" class="action-link action-link-cancel"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#cancelApplication{{ $applies->id }}">
                                                    <i class="fas fa-xmark-circle"></i>Cancel
                                                </button>
                                            @endif
                                            @if ($applies->status === "rejected" || $applies->status === 'pending' && $applies->appearance_date < now()->subDays(1))
                                                <button type="button" class="action-link action-link-reapply"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#reApply{{ $applies->id }}">
                                                    <i class="fas fa-rotate"></i>Re-Apply
                                                </button>
                                            @endif
                                            @if ($availableSoloParent && $applies->service->id === 3)
                                            <a href="/form/3" class="btn btn-info btn-sm">Re-Apply</a>
                                            @elseif($availablePwd && $applies->service->id === 2)
                                            <a href="/form/2" class="btn btn-info btn-sm">Re-Apply</a>
                                            @endif
                                           </div>
                                            {{-- @if ($applies->status != 'rejected' && $applies->status != 'Pending')
                                            <a class="action-link action-link-download"
                                                href="{{ url('generate-pdf/' . $applies->id) }}">
                                                <i class="mai-download"></i>Download Form
                                            </a>
                                            @else
                                            <span class="text-muted">Form Not Available</span>
                                            @endif
                                            @if ($applies->status == 'Pending')
                                            <a class="action-link action-link-cancel" href="#"
                                                onclick="confirmCancellation('{{ url('cancel_application', $applies->id) }}'); return false;">
                                                <i class="mai-trash"></i>Cancel
                                            </a>
                                            @endif --}}
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="cancelApplication{{ $applies->id }}" tabindex="-1"
                                        aria-labelledby="cancelApplication{{ $applies->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5"
                                                        id="cancelApplication{{ $applies->id }}Label">{{ $applies->service->name }}&apos;s Application</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to cancel your <strong>{{ $applies->service->name }} - {{ $applies?->appearance_date?->format('F d, Y') ?? $applies?->created_at?->format('F d, Y') }}</strong> application?
                                                </div>
                                                <form action="/cancel-application/{{ $applies->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Yes, Cancel</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="reApply{{ $applies->id }}" tabindex="-1"
                                        aria-labelledby="reApply{{ $applies->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5"
                                                        id="reApply{{ $applies->id }}Label">{{ $applies->service->name }}&apos;s Application</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="/re-apply-application/{{ $applies->id }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                <div class="modal-body">
                                                    Are you sure you want to re-apply your <strong>{{ $applies->service->name }} - {{ $applies?->appearance_date?->format('F d, Y') ?? $applies?->created_at?->format('F d, Y') }}</strong> application?
                                                    @if($applies->cancellation_reason !== null)
                                                    <br>
                                                    <p>Reason of rejection: {{ $applies->cancellation_reason }}</p>
                                                    @endif
                                                    <br>
                                                    <br>
                                                    If yes you are required to input new appearance date below
                                                    <div class="form-group">
                                                        <label for="appearance_date">Choose your new appearance date</label>
                                                        <input type="date" name="appearance_date_data" value="{{ $applies?->appearance_date?->format('Y-m-d') ?? $applies?->created_at?->format('Y-m-d') }}" class="form-control" required>
                                                        @error('appearance_date_data')
                                                        <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Yes, Re-Apply</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    <tr>
                                        <th colspan="6" class="text-center">No applications yet</th>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Application Details -->
        <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailsModalLabel">Application Details</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td style="width: 30%; text-align: left; background-color: rgb(209, 206, 206);">
                                        <strong>PROGRAM NAME</strong>
                                    </td>
                                    <td style="background-color: rgb(209, 206, 206); text-align: left;"><span
                                            id="programName"></span>
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td style="width: 30%; text-align: left; ">
                                        <strong>PHONE</strong>
                                    </td>
                                    <td><span id="phone"></span></td>
                                </tr> -->

                                <tr>
                                    <td style="width: 30%; text-align: left; ">
                                        <strong>DATE APPLIED</strong>
                                    </td>
                                    <td style="text-align: left;"><span id="dateApplied"></span>
                                    </td>
                                </tr>
                                <tr class="notPending">
                                    <td style="width: 30%; text-align: left; background-color: rgb(209, 206, 206);">
                                        <strong>ACCEPTED BY</strong>
                                    </td>
                                    <td style="background-color: rgb(209, 206, 206); text-align: left;"><span
                                            id="acceptedBy"></span></td>
                                </tr>
                                <tr class="notPending">
                                    <td style="width: 30%; text-align: left;">
                                        <strong>APPROVED BY</strong>
                                    </td>
                                    <td style="text-align: left;"><span id="firstName"></span>
                                        <span id="lastName"></span>
                                    </td>
                                </tr>
                                <tr class="notPending">
                                    <td style="width: 30%; text-align: left; background-color: rgb(209, 206, 206);">
                                        <strong>APPROVED AT</strong>
                                    </td>
                                    <td style="background-color: rgb(209, 206, 206); text-align: left;"><span
                                            id="approvedAt"></span>
                                    </td>
                                </tr>
                                <tr id="appearanceDateSection">
                                    <td style="width: 30%; text-align: left; ">
                                        <strong>SCHEDULE FOR PERSONAL APPEARANCE</strong>
                                    </td>
                                    <td style="text-align: left;"><span id="appearanceDate"></span></td>
                                </tr>
                                <tr>
                                    <td style="width: 30%; text-align: left; background-color: rgb(209, 206, 206);">
                                        <strong>STATUS</strong>
                                    </td>
                                    <td style="width: 80%; background-color: rgb(209, 206, 206); text-align: left;">
                                        <span id="status"></span></td>
                                </tr>
                                <tr id="cancellationReasonSection">
                                    <td style="width: 30%; text-align: left; background-color: rgb(209, 206, 206); ">
                                        <strong>REASON FOR CANCELLING</strong>
                                    </td>
                                    <td style="background-color: rgb(209, 206, 206);"><span
                                            id="cancellationReason"></span></td>
                                </tr>
                                <tr id="requirementsSection" class="border">
                                    <td colspan="2">
                                        <p class="fs-3" style="width: 30%; text-align: left; ">
                                            <strong>REQUIREMENTS TO BRING</strong>
                                        </p>
                                        <ul id="requirementsList"></ul>
                                    </td>
                                </tr>
                                <tr id="aicsTypeSection" style="display: none; background-color: rgb(209, 206, 206);">
                                    <td style="width: 30%; text-align: left;  ">
                                        <strong>TYPE OF ASSISTANCE</strong>
                                    </td>
                                    <td style="text-align: left;"><span id="aicsType"></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="modal-footer" style="margin-top: -15px;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Links -->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/js/theme.js"></script>

    <script>
        $(document).ready(function () {
            @if (session('error'))
                Swal.fire({
                    title: 'Ops!',
                    text: "{{ session('error') }}",
                    icon: 'info',
                    showCancelButton: true,
                    showConfirmButton: false,
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Close',
                });
            @endif
        });
    </script>
    <script>
        $(document).ready(function () {
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
    <!-- SweetAlert2 Script -->
    <script>
        function confirmCancellation(url) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, cancel it!',
                cancelButtonText: 'No, keep it'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to the cancellation URL
                    window.location.href = url;
                }
            });
        }
    </script>

    <script>
        function openModal(applicationId) {
            $.ajax({
                url: '/application_details/' + applicationId,
                method: 'GET',
                success: function (response) {
                    $('#programName').text(response.program_name);
                    $('#phone').text(response.phone);
                    $('#status').text(response.status);
                    $('#dateApplied').text(response.date_applied);
                    $('#acceptedBy').text(response.approved_by || 'Pending');
                    $('#lastName').text(response.last_name || 'Data');
                    $('#firstName').text(response.first_name || 'No');
                    $('#approvedAt').text(response.approved_at || 'Pending');

                    // AICS Type
                    if (response.aics_type && response.aics_type !== 'None') {
                        $('#aicsTypeSection').show();
                        $('#aicsType').text(response.aics_type);
                    } else {
                        $('#aicsTypeSection').hide();
                    }

                    // Appearance Date
                    if (response.status !== 'rejected') {
                        $('#appearanceDateSection').show();
                        $('#appearanceDate').text(response.appearance_date || response.date_applied);
                    } else {
                        $('#appearanceDateSection').hide();
                    }

                    if (response.status !== 'pending' && response.status !== 'rejected') {
                        $('.notPending').show();
                    } else {
                        $('.notPending').hide();
                    }

                    // Cancellation Reason
                    if (response.status === 'rejected') {
                        $('#cancellationReasonSection').show();
                        $('#cancellationReason').text(response.cancellation_reason || 'No reason provided.');
                    } else {
                        $('#cancellationReasonSection').hide();
                    }

                    // Requirements
                    if (response.status === 'approved') {
                        $('#requirementsSection').show();
                        $('#requirementsList').html(
                            response.requirements && response.requirements.length ?
                                response.requirements.map(function (item) {
                                    return '<li class="text-uppercase fw-bold">' + item + '</li>';
                                }).join('') :
                                '<li>No specific requirements</li>'
                        );
                    } else {
                        $('#requirementsSection').hide();
                    }

                    $('#detailsModal').modal('show');
                },
                error: function () {
                    alert('Failed to fetch application details. Please try again later.');
                }
            });
        }
    </script>


    @include('user.script')
</body>

</html>
