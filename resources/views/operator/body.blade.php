<div class="main-panel">
    <div class="content-wrapper">
        <!-- Dashboard Stats Cards -->
        <div class="row">
            <!-- Total Applications Card -->
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card card-stat">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title text-black">Total Applications</h5>
                                <h2 class="mb-0">{{ $approvedApplicationsCount }}</h2>
                                <p class="text-muted small">All approved applications</p>
                            </div>
                            <div class="icon-box bg-primary-light">
                                <i class="mdi mdi-calendar-check text-primary"></i>
                            </div>
                        </div>
                        <div class="progress mt-3">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cancelled Applications Card -->
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card card-stat">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title text-black">Cancelled Applications</h5>
                                <h2 class="mb-0">{{ $cancelledApplicationsCount }}</h2>
                                <p class="text-muted small">Rejected or cancelled</p>
                            </div>
                            <div class="icon-box bg-danger-light">
                                <i class="mdi mdi-calendar-remove text-danger"></i>
                            </div>
                        </div>
                        <div class="progress mt-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Applications Card -->
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card card-stat">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title text-black">Pending Applications</h5>
                                <h2 class="mb-0">{{ $pendingApplicationsCount }}</h2>
                                <p class="text-muted small">Awaiting review</p>
                            </div>
                            <div class="icon-box bg-warning-light">
                                <i class="mdi mdi-calendar-clock text-warning"></i>
                            </div>
                        </div>
                        <div class="progress mt-3">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Beneficiaries Card -->
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card card-stat">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title text-black">Total Beneficiaries</h5>
                                <h2 class="mb-0">{{ $totalBeneficiaries }}</h2>
                                <p class="text-muted small">All program recipients</p>
                            </div>
                            <div class="icon-box bg-success-light">
                                <i class="mdi mdi-wheelchair-accessibility text-success"></i>
                            </div>
                        </div>
                        <div class="progress mt-3">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Applications Section -->
        <div class="row">
            <!-- Pending Applications -->
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header bg-warning-light">
                        <h4 class="card-title text-black mb-0">
                            <i class="mdi mdi-clock-alert-outline me-2"></i>
                            Recent Pending Applications
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Beneficiary</th>
                                        <th>Program</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pending as $apply)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-3">
                                                    <span class="avatar-initial rounded-circle bg-warning text-white">
                                                        {{ substr($apply->name, 0, 1) }}
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">{{ $apply->name }}</h6>
                                                    <small class="text-muted">{{ $apply->phone }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-light text-dark">
                                                {{ $apply->service->name ?? 'No Service Assigned' }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-warning text-white">{{ $apply->status }}</span>
                                            <small class="d-block text-muted">{{ $apply->created_at->diffForHumans() }}</small>
                                        </td>
                                        <td>
                                            {{ $apply?->appearance_date?->format('M d, Y') ?: $apply?->created_at?->format('M d, Y') }}
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-4">
                                            <div class="empty-state">
                                                <i class="mdi mdi-alert-circle-outline text-warning" style="font-size: 3rem;"></i>
                                                <h5 class="mt-3">No Pending Applications</h5>
                                                <p class="text-muted">All applications have been processed</p>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Approved Applications -->
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header bg-success-light">
                        <h4 class="card-title text-black mb-0">
                            <i class="mdi mdi-check-circle-outline me-2"></i>
                            Recent Approved Applications
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Beneficiary</th>
                                        <th>Program</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($approved as $apply)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-3">
                                                    <span class="avatar-initial rounded-circle bg-success text-white">
                                                        {{ substr($apply->name, 0, 1) }}
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">{{ $apply->name }}</h6>
                                                    <small class="text-muted">{{ $apply->email }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-light text-dark">
                                                {{ $apply->service->name ?? 'No Service Assigned' }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-success text-white">{{ $apply->status }}</span>
                                            <small class="d-block text-muted">{{ $apply->created_at->diffForHumans() }}</small>
                                        </td>
                                        <td>
                                            {{ $apply?->appearance_date?->format('M d, Y') ?: $apply?->created_at?->format('M d, Y') }}
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-4">
                                            <div class="empty-state">
                                                <i class="mdi mdi-alert-circle-outline text-success" style="font-size: 3rem;"></i>
                                                <h5 class="mt-3">No Approved Applications</h5>
                                                <p class="text-muted">No applications have been approved yet</p>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cancelled Applications -->
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header bg-danger-light">
                        <h4 class="card-title text-black mb-0">
                            <i class="mdi mdi-close-circle-outline me-2"></i>
                            Recent Cancelled Applications
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Beneficiary</th>
                                        <th>Program</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($cancelled as $apply)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-3">
                                                    <span class="avatar-initial rounded-circle bg-danger text-white">
                                                        {{ substr($apply->name, 0, 1) }}
                                                    </span>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">{{ $apply->name }}</h6>
                                                    <small class="text-muted">{{ $apply->phone }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-light text-dark">
                                                {{ $apply->service->name ?? 'No Service Assigned' }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-danger text-white">{{ $apply->status }}</span>
                                            <small class="d-block text-muted">{{ $apply->created_at->diffForHumans() }}</small>
                                        </td>
                                        <td>
                                            {{ $apply?->appearance_date?->format('M d, Y') ?: $apply?->created_at?->format('M d, Y') }}
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                                data-bs-target="#reasonModal{{ $apply->id }}">
                                                View Reason
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Reason Modal -->
                                    <div class="modal fade" id="reasonModal{{ $apply->id }}" tabindex="-1"
                                        aria-labelledby="reasonModalLabel{{ $apply->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger text-white">
                                                    <h5 class="modal-title"
                                                        id="reasonModalLabel{{ $apply->id }}">
                                                        <i class="mdi mdi-alert-circle me-2"></i>
                                                        Cancellation Details
                                                    </h5>
                                                    <button type="button" class="btn-close btn-close-white"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    @if ($apply->status == 'cancelled' && !empty($apply->cancellation_reason))
                                                    <div class="alert alert-danger">
                                                        <h6 class="alert-heading">Reason for Cancellation:</h6>
                                                        <p>{{ $apply->cancellation_reason }}</p>
                                                    </div>
                                                    @else
                                                    <div class="alert alert-warning">
                                                        No cancellation reason available.
                                                    </div>
                                                    @endif
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
                                        <td colspan="5" class="text-center py-4">
                                            <div class="empty-state">
                                                <i class="mdi mdi-check-all text-danger" style="font-size: 3rem;"></i>
                                                <h5 class="mt-3">No Cancelled Applications</h5>
                                                <p class="text-muted">All applications are in good standing</p>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --primary-color: #4361ee;
        --secondary-color: #3f37c9;
        --success-color: #28a745;
        --danger-color: #dc3545;
        --warning-color: #fd7e14;
        --info-color: #17a2b8;
        --light-color: #f8f9fa;
        --dark-color: #343a40;
        --border-radius: 10px;
        --box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }

    .card {
        border: none;
        border-radius: var(--border-radius);
        box-shadow: var(--box-shadow);
        transition: all 0.3s ease;
        overflow: hidden;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .card-stat {
        border-left: 4px solid transparent;
    }

    .card-stat:nth-child(1) {
        border-left-color: var(--primary-color);
    }

    .card-stat:nth-child(2) {
        border-left-color: var(--danger-color);
    }

    .card-stat:nth-child(3) {
        border-left-color: var(--warning-color);
    }

    .card-stat:nth-child(4) {
        border-left-color: var(--success-color);
    }

    .card-header {
        border-bottom: none;
        padding: 1.25rem 1.5rem;
        background-color: transparent;
    }

    .bg-primary-light {
        background-color: rgba(67, 97, 238, 0.1);
    }

    .bg-success-light {
        background-color: rgba(40, 167, 69, 0.1);
    }

    .bg-danger-light {
        background-color: rgba(220, 53, 69, 0.1);
    }

    .bg-warning-light {
        background-color: rgba(253, 126, 20, 0.1);
    }

    .icon-box {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }

    .progress {
        height: 6px;
        border-radius: 3px;
        background-color: #f0f0f0;
    }

    .progress-bar {
        border-radius: 3px;
    }

    .table {
        margin-bottom: 0;
    }

    .table thead th {
        border-top: none;
        border-bottom: 1px solid #eee;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.5px;
        color: #6c757d;
    }

    .table tbody tr {
        transition: all 0.2s ease;
    }

    .table tbody tr:hover {
        background-color: rgba(0, 0, 0, 0.02);
    }

    .avatar {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .avatar-initial {
        font-weight: 600;
    }

    .badge {
        font-weight: 500;
        padding: 0.35em 0.65em;
        font-size: 0.75em;
        letter-spacing: 0.5px;
    }

    .empty-state {
        padding: 2rem;
        text-align: center;
    }

    .empty-state i {
        font-size: 3rem;
        margin-bottom: 1rem;
    }

    .card-title text-black {
        font-weight: 600;
        color: var(--dark-color);
    }

    .text-muted {
        color: #6c757d !important;
    }
</style>
