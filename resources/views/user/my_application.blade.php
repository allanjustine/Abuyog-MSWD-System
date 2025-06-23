<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MSWD | Municipality of Abuyog</title>
    @include('user.css')
    <!-- CSS Links -->
    <!-- Local Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/maicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- External Libraries (CSS) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- External Libraries (JS) -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


    <style>
        :root {
            --primary-color: #5c2a2a;
            --secondary-color: #8d5a5a;
            --accent-color: #e74c3c;
            --light-color: #f8f1f1;
            --dark-color: #2c1818;
            --success-color: #27ae60;
            --info-color: #3498db;
            --warning-color: #f39c12;
            --danger-color: #e74c3c;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            color: var(--dark-color);
        }

        /* Card styling */
        .card {
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            border: none;
            overflow: hidden;
            margin-top: 7%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
        }

        .card-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            font-weight: 600;
            padding: 1.25rem 1.5rem;
            border-bottom: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-header .btn {
            background-color: white;
            color: var(--primary-color);
            border: none;
            border-radius: 8px;
            font-weight: 500;
            padding: 0.5rem 1.25rem;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        /* Table styling */
        .table-responsive {
            border-radius: 12px;
            height: 100vh;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            background-color: white;
            color: var(--dark-color);
        }

        table th {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 1rem;
            font-weight: 500;
            text-align: center;
            border: none;
        }

        table td {
            padding: 1rem;
            border-bottom: 1px solid #f0f0f0;
            text-align: center;
            vertical-align: middle;
        }

        table tr:last-child td {
            border-bottom: none;
        }

        table tr:hover td {
            background-color: rgba(92, 42, 42, 0.05);
        }

        /* Status badges */
        .status-badge {
            padding: 0.35rem 0.75rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 500;
            text-transform: capitalize;
        }

        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }

        .status-accepted {
            background-color: #d4edda;
            color: #155724;
        }

        .status-rejected {
            background-color: #f8d7da;
            color: #721c24;
        }

        /* Action links styling */
        .action-buttons {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            align-items: center;
        }

        .action-link {
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 500;
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            width: 100%;
            max-width: 120px;
            text-align: center;
        }

        .action-link i {
            margin-right: 5px;
            font-size: 0.9rem;
        }

        .action-link-history {
            background-color: rgba(23, 162, 184, 0.1);
            color: #17a2b8;
            border: 1px solid rgba(23, 162, 184, 0.3);
        }

        .action-link-history:hover {
            background-color: rgba(23, 162, 184, 0.2);
            color: #138496;
        }

        .action-link-cancel {
            background-color: rgba(220, 53, 69, 0.1);
            color: #dc3545;
            border: 1px solid rgba(220, 53, 69, 0.3);
        }

        .action-link-cancel:hover {
            background-color: rgba(220, 53, 69, 0.2);
            color: #bd2130;
        }

        .action-link-reapply {
            background-color: rgba(148, 0, 211, 0.1);
            color: #9400d3;
            border: 1px solid rgba(148, 0, 211, 0.3);
        }

        .action-link-reapply:hover {
            background-color: rgba(148, 0, 211, 0.2);
            color: #7b00b0;
        }

        .action-link-download {
            background-color: rgba(40, 167, 69, 0.1);
            color: #28a745;
            border: 1px solid rgba(40, 167, 69, 0.3);
        }

        .action-link-download:hover {
            background-color: rgba(40, 167, 69, 0.2);
            color: #218838;
        }

        /* Modal styles */
        .modal-content {
            border-radius: 12px;
            border: none;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .modal-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border-bottom: none;
            padding: 1.25rem 1.5rem;
        }

        .modal-title {
            font-weight: 600;
        }

        .modal-body {
            padding: 1.5rem;
        }

        .modal-footer {
            border-top: none;
            padding: 1rem 1.5rem;
            background-color: #f9f9f9;
        }

        .list-group-item {
            border: none;
            padding: 1rem 1.5rem;
            transition: all 0.3s ease;
            border-radius: 8px !important;
            margin-bottom: 0.5rem;
        }

        .list-group-item a {
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 500;
            display: block;
            width: 100%;
        }

        .list-group-item:hover {
            background-color: rgba(92, 42, 42, 0.05);
            transform: translateX(5px);
        }

        /* Alert styling */
        .alert {
            border-radius: 8px;
            padding: 0.75rem 1.25rem;
            border: none;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .card-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            table th,
            table td {
                padding: 0.75rem 0.5rem;
                font-size: 0.85rem;
            }

            .action-link {
                padding: 0.4rem 0.8rem;
                font-size: 0.8rem;
            }
        }

        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card,
        .table-responsive,
        .modal-content {
            animation: fadeIn 0.5s ease-out forwards;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--secondary-color);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-color);
        }

        .modal-backdrop {
            display: none !important;
        }
    </style>
</head>

<body>

    @if (Auth::user()->isBeneficiary())
        @include('components.basic-info-modal')
    @endif
    <div class="container-scroller">

        @include('user.sidebar')

        @include('user.navbar')

        <!-- Main Content -->
        <div class="container mt-4" style="height: 100vh;">
            <div class="card">
                @if (session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card-header">
                    <span>All Applications</span>
                    <button class="btn" id="addApplicationBtn">
                        <i class="fas fa-plus me-2"></i>New Application
                    </button>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Program Enrolled</th>
                                    <th>Appearance Date</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($apply as $applies)
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span
                                                    class="fw-bold">{{ $applies->service->name ?? 'No Service Assigned' }}</span>
                                                @if (isset($applies?->pwdDetails[0]?->pwd_number))
                                                    <small class="text-muted">PWD #:
                                                        {{ $applies?->pwdDetails[0]?->pwd_number }}</small>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="d-block">{{ $applies?->appearance_date?->format('F j, Y') ?? 'Pending' }}</span>
                                            @if ($applies->status === 'pending' && $applies->appearance_date < now()->subDays(1))
                                                <small class="mt-1 text-danger d-block">Application overdue</small>
                                            @endif
                                        </td>
                                        <td>{{ $applies->phone }}</td>
                                        <td>
                                            @if ($applies->status === 'accepted' && $applies->approved_at !== null && $applies->approved_by !== null)
                                                <span class="status-badge status-accepted">Approved</span>
                                            @else
                                                <span class="status-badge status-{{ $applies->status }}">
                                                    {{ ucfirst($applies->status) }}
                                                </span>
                                            @endif
                                            @if ($availableSoloParent && $applies->service->id === 3)
                                                <small class="mt-1 d-block text-danger">Expired:
                                                    {{ $applies->created_at->format('F j, Y') }}</small>
                                            @elseif($availablePwd && $applies->service->id === 2)
                                                <small class="mt-1 d-block text-danger">Expired:
                                                    {{ $applies->created_at->format('F j, Y') }}</small>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="action-buttons">
                                                <a href="javascript:void(0);" class="action-link action-link-history"
                                                    onclick="openModal({{ $applies->id }})">
                                                    <i class="fas fa-info-circle"></i> View
                                                </a>
                                                @if ($applies->status === 'pending')
                                                    <button type="button" class="action-link action-link-cancel"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#cancelApplication{{ $applies->id }}">
                                                        <i class="fas fa-times-circle"></i> Cancel
                                                    </button>
                                                @endif
                                                @if (
                                                    $applies->status === 'rejected' ||
                                                        ($applies->status === 'pending' && $applies->appearance_date < now()->subDays(1)))
                                                    <button type="button" class="action-link action-link-reapply"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#reApply{{ $applies->id }}">
                                                        <i class="fas fa-sync-alt"></i> Re-Apply
                                                    </button>
                                                @endif
                                                @if ($availableSoloParent && $applies->service->id === 3)
                                                    <a href="/form/3" class="action-link action-link-reapply">
                                                        <i class="fas fa-sync-alt"></i> Re-Apply
                                                    </a>
                                                @elseif($availablePwd && $applies->service->id === 2)
                                                    <a href="/form/2" class="action-link action-link-reapply">
                                                        <i class="fas fa-sync-alt"></i> Re-Apply
                                                    </a>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Cancel Application Modal -->
                                    <div class="modal fade" id="cancelApplication{{ $applies->id }}" tabindex="-1"
                                        aria-labelledby="cancelApplication{{ $applies->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">{{ $applies->service->name }} Application
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-4 text-center">
                                                        <i
                                                            class="mb-3 fas fa-exclamation-triangle fa-3x text-warning"></i>
                                                        <h5>Are you sure you want to cancel this application?</h5>
                                                        <p class="text-muted">Application Date:
                                                            {{ $applies?->appearance_date?->format('F d, Y') ?? $applies?->created_at?->format('F d, Y') }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <form action="/cancel-application/{{ $applies->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Confirm
                                                            Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Re-Apply Modal -->
                                    <div class="modal fade" id="reApply{{ $applies->id }}" tabindex="-1"
                                        aria-labelledby="reApply{{ $applies->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Re-Apply: {{ $applies->service->name }}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="/re-apply-application/{{ $applies->id }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="modal-body">
                                                        <div class="mb-4">
                                                            <p>Are you sure you want to re-apply for this application?
                                                            </p>
                                                            <p class="fw-bold">Original Date:
                                                                {{ $applies?->appearance_date?->format('F d, Y') ?? $applies?->created_at?->format('F d, Y') }}
                                                            </p>
                                                            @if ($applies->cancellation_reason !== null)
                                                                <div class="alert alert-warning">
                                                                    <p class="mb-0"><strong>Reason for
                                                                            rejection:</strong>
                                                                        {{ $applies->cancellation_reason }}</p>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="appearance_date" class="form-label">New
                                                                Appearance Date</label>
                                                            <input type="date" name="appearance_date_data"
                                                                value="{{ $applies?->appearance_date?->format('Y-m-d') ?? $applies?->created_at?->format('Y-m-d') }}"
                                                                class="form-control" required>
                                                            @error('appearance_date_data')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit
                                                            Re-Application</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-4 text-center">
                                            <i class="mb-3 fas fa-folder-open fa-3x text-muted"></i>
                                            <h5 class="text-muted">No applications found</h5>
                                            <button class="mt-2 btn btn-primary" id="addApplicationBtnEmpty">
                                                <i class="fas fa-plus me-2"></i>Create New Application
                                            </button>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Application Details -->
        <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailsModalLabel">Application Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td class="fw-bold bg-light">PROGRAM NAME</td>
                                        <td><span id="programName"></span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">DATE APPLIED</td>
                                        <td><span id="dateApplied"></span></td>
                                    </tr>
                                    <tr class="notPending">
                                        <td class="fw-bold bg-light">ACCEPTED BY</td>
                                        <td><span id="acceptedBy"></span></td>
                                    </tr>
                                    <tr class="notPending">
                                        <td class="fw-bold">APPROVED BY</td>
                                        <td><span id="firstName"></span> <span id="lastName"></span></td>
                                    </tr>
                                    <tr class="notPending">
                                        <td class="fw-bold bg-light">APPROVED AT</td>
                                        <td><span id="approvedAt"></span></td>
                                    </tr>
                                    <tr id="appearanceDateSection">
                                        <td class="fw-bold">SCHEDULE FOR PERSONAL APPEARANCE</td>
                                        <td><span id="appearanceDate"></span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold bg-light">STATUS</td>
                                        <td><span id="status"></span></td>
                                    </tr>
                                    <tr id="cancellationReasonSection">
                                        <td class="fw-bold bg-light">REASON FOR CANCELLING</td>
                                        <td><span id="cancellationReason"></span></td>
                                    </tr>
                                    <tr id="aicsTypeSection" style="display: none;">
                                        <td class="fw-bold">TYPE OF ASSISTANCE</td>
                                        <td><span id="aicsType"></span></td>
                                    </tr>
                                    <tr id="requirementsSection">
                                        <td colspan="2" class="p-0">
                                            <div class="p-3">
                                                <h6 class="mb-3 fw-bold"><i
                                                        class="fas fa-clipboard-list me-2"></i>REQUIREMENTS TO BRING
                                                </h6>
                                                <ul id="requirementsList" class="list-group list-group-flush"></ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- Dynamic Service Selection Modal -->
        <div id="servicesModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
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
                                            <i class="fas fa-user-tie me-2"></i>OSCA (Office of Senior Citizens)
                                            @if (\App\Models\Service::find(1)->isInactive())
                                                <span class="text-danger fst-italic fw-bold">- Inactive</span>
                                            @endif
                                        </a>
                                    </li>
                                @endif
                                @if (Auth::user()->has_minor_child === 1 && $availableSoloParent)
                                    <li class="list-group-item">
                                        <a href="/form/3">
                                            <i class="fas fa-user-friends me-2"></i>Solo Parent
                                            @if (\App\Models\Service::find(3)->isInactive())
                                                <span class="text-danger fst-italic fw-bold">- Inactive</span>
                                            @endif
                                        </a>
                                    </li>
                                @endif
                                @if (!$alreadyHaveOsca && Auth::user()->has_minor_child === 0)
                                    <div class="py-3 text-center">
                                        <i class="mb-3 fas fa-info-circle fa-2x text-muted"></i>
                                        <p class="fs-5 fw-bold text-muted">No Services Available for OSCA and
                                            SoloParent</p>
                                    </div>
                                @endif
                                <li class="list-group-item">
                                    <a href="/form/4">
                                        <i class="fas fa-hands-helping me-2"></i>AICS (Assistance to Individuals in
                                        Crisis)
                                        @if (\App\Models\Service::find(4)->isInactive())
                                            <span class="text-danger fst-italic fw-bold">- Inactive</span>
                                        @endif
                                    </a>
                                </li>
                            @else
                                @if ($availableSoloParent || !$isSoloParentExists)
                                    <li class="list-group-item">
                                        <a href="/form/3">
                                            <i class="fas fa-user-friends me-2"></i>Solo Parent
                                            @if (\App\Models\Service::find(3)->isInactive())
                                                <span class="text-danger fst-italic fw-bold">- Inactive</span>
                                            @endif
                                        </a>
                                    </li>
                                @endif
                                @if ($availablePwd || !$isPwdExists)
                                    <li class="list-group-item">
                                        <a href="/form/2">
                                            <i class="fas fa-wheelchair me-2"></i>PWD (Persons with Disabilities)
                                            @if (\App\Models\Service::find(2)->isInactive())
                                                <span class="text-danger fst-italic fw-bold">- Inactive</span>
                                            @endif
                                        </a>
                                    </li>
                                @endif
                                @if (!$availableSoloParent && !$availablePwd && $isSoloParentExists && $isPwdExists)
                                    <div class="py-3 text-center">
                                        <i class="mb-3 fas fa-info-circle fa-2x text-muted"></i>
                                        <p class="fs-5 fw-bold text-muted">No Services Available for PWD and SoloParent
                                        </p>
                                    </div>
                                @endif
                                <li class="list-group-item">
                                    <a href="/form/4">
                                        <i class="fas fa-hands-helping me-2"></i>AICS (Assistance to Individuals in
                                        Crisis)
                                        @if (\App\Models\Service::find(4)->isInactive())
                                            <span class="text-danger fst-italic fw-bold">- Inactive</span>
                                        @endif
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('addApplicationBtn').addEventListener('click', function() {
                var modal = new bootstrap.Modal(document.getElementById('servicesModal'));
                modal.show();
            });
        </script>
    </div>

    <!-- JS Links -->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/js/theme.js"></script>

    <script>
        $(document).ready(function() {
            @if (session('error'))
                Swal.fire({
                    title: 'Oops!',
                    text: "{{ session('error') }}",
                    icon: 'info',
                    showCancelButton: true,
                    showConfirmButton: false,
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Close',
                    customClass: {
                        popup: 'animated bounceIn'
                    }
                });
            @endif

            @if (session('success'))
                Swal.fire({
                    title: 'Success!',
                    text: "{{ session('success') }}",
                    icon: 'success',
                    showCancelButton: true,
                    showConfirmButton: false,
                    cancelButtonColor: 'gray',
                    cancelButtonText: 'Close',
                    customClass: {
                        popup: 'animated bounceIn'
                    }
                });
            @endif

            // Add application button in empty state
            $('#addApplicationBtnEmpty').click(function() {
                var modal = new bootstrap.Modal(document.getElementById('servicesModal'));
                modal.show();
            });
        });

        function confirmCancellation(url) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, cancel it!',
                cancelButtonText: 'No, keep it',
                customClass: {
                    popup: 'animated bounceIn'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            });
        }

        function openModal(applicationId) {
            $.ajax({
                url: '/application_details/' + applicationId,
                method: 'GET',
                success: function(response) {
                    $('#programName').text(response.program_name);
                    $('#phone').text(response.phone);

                    // Status with badge
                    let statusHtml =
                        `<span class="status-badge status-${response.status.toLowerCase()}">${response.status.charAt(0).toUpperCase() + response.status.slice(1)}</span>`;
                    $('#status').html(statusHtml);

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
                    if (response.status === 'accepted') {
                        $('#requirementsSection').show();
                        $('#requirementsList').html(
                            response.requirements && response.requirements.length ?
                            response.requirements.map(function(item) {
                                return `<li class="list-group-item d-flex align-items-center">
                                                <i class="fas fa-check-circle text-success me-3"></i>
                                                ${item}
                                            </li>`;
                            }).join('') :
                            '<li class="list-group-item text-muted">No specific requirements</li>'
                        );
                    } else {
                        $('#requirementsSection').hide();
                    }

                    $('#detailsModal').modal('show');
                },
                error: function() {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Failed to fetch application details. Please try again later.',
                        icon: 'error',
                        confirmButtonText: 'OK',
                        customClass: {
                            popup: 'animated shake'
                        }
                    });
                }
            });
        }
    </script>

    @include('user.script')
</body>

</html>
