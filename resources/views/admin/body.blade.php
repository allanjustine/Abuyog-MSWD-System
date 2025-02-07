<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-3 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Total Applications</h5>
                        <div class="row">
                            <div class="my-auto col-8 col-sm-12 col-xl-8">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $approvedApplicationsCount }}</h2>
                                </div>
                            </div>
                            <div class="text-center col-4 col-sm-12 col-xl-4 text-xl-right">
                                <i class="icon-lg mdi mdi-calendar-check text-primary ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Total Beneficiaries</h5>
                        <div class="row">
                            <div class="my-auto col-8 col-sm-12 col-xl-8">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $totalBeneficiaries }}</h2>
                                </div>
                            </div>
                            <div class="text-center col-4 col-sm-12 col-xl-4 text-xl-right">
                                <i class="icon-lg mdi mdi-wheelchair-accessibility text-danger ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Total Services</h5>
                        <div class="row">
                            <div class="my-auto col-8 col-sm-12 col-xl-8">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $totalServices }}</h2>
                                </div>
                            </div>
                            <div class="text-center col-4 col-sm-12 col-xl-4 text-xl-right">
                                <i class="icon-lg mdi mdi-assistant text-danger text-muted ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Total Users</h5>
                        <div class="row">
                            <div class="my-auto col-8 col-sm-12 col-xl-7">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $totalUsers }}</h2>
                                </div>
                            </div>
                            <div class="text-center col-4 col-sm-12 col-xl-4 text-xl-right">
                                <i class="icon-lg mdi mdi-account-multiple-plus text-success ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Total Released Applications</h5>
                        <div class="row">
                            <div class="my-auto col-8 col-sm-12 col-xl-7">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $releasedBeneficiary }}</h2>
                                </div>
                            </div>
                            <div class="text-center col-4 col-sm-12 col-xl-4 text-xl-right">
                                <i class="icon-lg mdi mdi-rocket text-warning ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Total Accepted Applications</h5>
                        <div class="row">
                            <div class="my-auto col-8 col-sm-12 col-xl-7">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $acceptedBeneficiary }}</h2>
                                </div>
                            </div>
                            <div class="text-center col-4 col-sm-12 col-xl-4 text-xl-right">
                                <i class="icon-lg mdi mdi-check-all text-info ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Total Pending Applications</h5>
                        <div class="row">
                            <div class="my-auto col-8 col-sm-12 col-xl-7">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $pendingBeneficiary }}</h2>
                                </div>
                            </div>
                            <div class="text-center col-4 col-sm-12 col-xl-4 text-xl-right">
                                <i class="icon-lg mdi mdi-clock ms-auto" style="color: rgb(162, 29, 239);"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Total Rejected Applications</h5>
                        <div class="row">
                            <div class="my-auto col-8 col-sm-12 col-xl-7">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $rejectedBeneficiary }}</h2>
                                </div>
                            </div>
                            <div class="text-center col-4 col-sm-12 col-xl-4 text-xl-right">
                                <i class="icon-lg mdi mdi-close ms-auto" style="color: rgb(186, 11, 11);"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Approved Applications Scheduled for Today</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> Beneficiary Name </th>
                                            <th> Program Enrolled </th>
                                            <th> Phone </th>
                                            <th> Email </th>
                                            <th> Date </th>
                                            <th> Status </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($approvedToday as $apply)
                                            <tr align="center">
                                                <td>{{ $apply->name }}</td>
                                                <td>{{ $apply->service->name ?? 'No Service Assigned' }}</td>
                                                <td>{{ $apply->phone }}</td>
                                                <td>{{ $apply->email }}</td>
                                                <td>{{ $apply?->appearance_date?->format('F d, Y') ?: $apply?->created_at?->format('F d, Y') }}</td>
                                                <td>
                                                    <div class="badge badge-outline-success">{{ $apply->status }}</div>
                                                    <br>
                                                    <br>
                                                    <span
                                                        class="text-muted">{{ $apply->created_at->diffForHumans() }}</span>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">No Applications Scheduled for
                                                    Today!</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Recent Approved Applications</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> Beneficiary Name </th>
                                <th> Program Enrolled </th>
                                <th> Phone </th>
                                <th> Email </th>
                                <th> Date </th>
                                <th> Status </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($approved->filter(function($apply) {
                                return $apply->created_at->gte(now()->subDays(3));
                            }) as $apply)
                                <tr align="center">
                                    <td>{{ $apply->name }}</td>
                                    <td>{{ $apply->service->name ?? 'No Service Assigned' }}</td>
                                    <td>{{ $apply->phone }}</td>
                                    <td>{{ $apply->email }}</td>
                                    <td>{{ $apply?->appearance_date?->format('F d, Y') ?: $apply?->created_at?->format('F d, Y') }}</td>
                                    <td>
                                        <div class="badge badge-outline-success">{{ $apply->status }}</div>
                                        <br>
                                        <br>
                                        <span class="text-muted">{{ $apply->created_at->diffForHumans() }}</span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No Recent Appointments yet!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Recent Pending Applications</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> Beneficiary Name </th>
                                <th> Program Enrolled </th>
                                <th> Phone </th>
                                <th> Email </th>
                                <th> Date </th>
                                <th> Status </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pending->filter(function($apply) {
                                return $apply->created_at->gte(now()->subDays(2));
                            }) as $apply)
                                <tr align="center">
                                    <td>{{ $apply->name }}</td>
                                    <td>{{ $apply->service->name ?? 'No Service Assigned' }}</td>
                                    <td>{{ $apply->phone }}</td>
                                    <td>{{ $apply->email }}</td>
                                    <td>{{ $apply?->appearance_date?->format('F d, Y') ?: $apply?->created_at?->format('F d, Y') }}</td>
                                    <td>
                                        <div class="badge badge-outline-warning">{{ $apply->status }}</div>
                                        <br>
                                        <br>
                                        <span class="text-muted">{{ $apply->created_at->diffForHumans() }}</span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No Recent Appointments yet!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Recent Cancelled Applications</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> Beneficiary Name </th>
                                <th> Program Enrolled </th>
                                <th> Phone </th>
                                <th> Email </th>
                                <th> Date </th>
                                <th> Status </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cancelled->filter(function($apply) {
                                return $apply->created_at->gte(now()->subDays(2));
                            }) as $apply)
                                <tr align="center">
                                    <td>{{ $apply->name }}</td>
                                    <td>{{ $apply->service->name ?? 'No Service Assigned' }}</td>
                                    <td>{{ $apply->phone }}</td>
                                    <td>{{ $apply->email }}</td>
                                    <td>{{ $apply?->appearance_date?->format('F d, Y') ?: $apply?->created_at?->format('F d, Y') }}</td>
                                    <td>
                                        <div class="badge badge-outline-danger">{{ $apply->status }}</div>
                                        <br>
                                        <br>
                                        <span class="text-muted">{{ $apply->created_at->diffForHumans() }}</span>
                                    </td>
                                    <td>
                                        <!-- View Reason Button -->
                                        <button class="btn badge badge-outline-warning fs-20"
                                            data-bs-toggle="modal"
                                            data-bs-target="#reasonModal{{ $apply->id }}">
                                            Reason
                                        </button>
                                    </td>
                                </tr>

                                <!-- Modal to show Reason for Cancelling -->
                                <div class="modal fade" id="reasonModal{{ $apply->id }}" tabindex="-1"
                                    aria-labelledby="reasonModalLabel{{ $apply->id }}"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"
                                                    id="reasonModalLabel{{ $apply->id }}">Reason for
                                                    Cancelling</h5>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Show the reason only if status is cancelled -->
                                                @if ($apply->status == 'cancelled' && !empty($apply->cancellation_reason))
                                                    <p><strong>Reason:</strong>
                                                        {{ $apply->cancellation_reason }}</p>
                                                @else
                                                    <p>No cancellation reason available.</p>
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
                                    <td colspan="7" class="text-center">No Recent Cancelled
                                        Applications</td>
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
</div>
</div>
