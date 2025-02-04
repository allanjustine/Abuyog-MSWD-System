<div class="card" align="center" style="margin-top:80px;">
    <div class="card-header">
        <span class="fw-bold fs-3">
            Applicants
        </span>
        {{-- <a href="{{ url('/add_beneficiary_view') }}" class="btn btn-success btn-sm float-end">Add
        New</a> --}}
    </div>

    <!-- Align the search form to the right -->
    {{-- <form action="{{ url('beneficiary_search') }}" method="get" class="my-3 text-end">
    @csrf
    <input type="search" name="search" placeholder="Search.." class="form-control d-inline-block" style="width: auto;">
    <input type="submit" class="btn btn-primary d-inline-block" value="Search">
    </form> --}}

   <div class="card-body">
    <div class="table-responsive">
        <table class="table table-sm table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Program Enrolled</th>
                    <th>Status</th>
                    <th>Approved At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $application)
                <tr>
                    <td>{{ $application->name }}</td>
                    <td>{{ $application->email }}</td>
                    <td>{{ $application->phone }}</td>
                    <td>{{ $application->service ? $application->service->name : 'No Program' }}</td>
                    <td>
                        @if($application->approved_at !== null)
                        <span class="badge rounded-pill bg-success">Approved</span>
                        @endif
                    </td>
                    <td>{{ $application->approved_at->diffForHumans() }}</td>
                    <td>
                        <div class="gap-2 d-flex justify-content-around flex-column">
                            <!-- View Button -->
                            <button class="btn btn-info btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#viewModalData{{ $application->id }}">
                                View
                            </button>

                            <!-- Edit Button -->
                            {{-- <a class="btn btn-success btn-sm ms-2" href="{{ url('editbeneficiaries', $application->id) }}">Edit</a> --}}

                            <!-- Delete Button with Modal Trigger -->
                            {{-- <button class="btn btn-danger btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $application->id }}">
                            Delete
                            </button> --}}
                        </div>
                    </td>
                </tr>

                <!-- View Modal -->
                <div class="modal fade" id="viewModalData{{ $application->id }}" tabindex="-1" aria-labelledby="viewModalDataLabel{{ $application->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viewModalDataLabel{{ $application->id }}">
                                    Application Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="max-height: 80vh; overflow-y: auto;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Name:</strong></label>
                                            <input type="text" class="form-control" value="{{ $application->name }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Email:</strong></label>
                                            <input type="email" class="form-control" value="{{ $application->email }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Approved By:</strong></label>
                                            <input type="approved By" class="form-control" value="{{ $application->approvedBy->first_name ?? 'No' }} {{ $application->approvedBy->last_name ?? 'Data' }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><strong>Phone:</strong></label>
                                            <input type="text" class="form-control" value="{{ $application->phone }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Program Enrolled:</strong></label>
                                            <input type="text" class="form-control" value="{{ $application->service ? $application->service->name : 'No Program' }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Approved At:</strong></label>
                                            <input type="text" class="form-control" value="{{ $application?->approved_at->diffForHumans() ?? 'Pending' }}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <p class="border-b fw-bold fs-5">Field Filled</p>
                                        <p class="mt-2">
                                            @php
                                            $customFields = json_decode($application->custom_fields, true);
                                            @endphp

                                            @if (!empty($customFields) && is_array($customFields))
                                            <ul>
                                                @foreach ($customFields as $key => $value)
                                                <li>
                                                    <strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong>
                                                    @if (is_array($value))
                                                    <pre>{{ json_encode($value, JSON_PRETTY_PRINT) }}</pre>
                                                    @else
                                                    {{ $value }}
                                                    @endif
                                                </li>
                                                @endforeach
                                            </ul>
                                            @else
                                            <p>No custom fields found.</p>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal{{ $application->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $application->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="text-white modal-header bg-danger">
                    <h5 class="modal-title" id="deleteModalLabel{{ $application->id }}">
                        Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete
                        <strong>{{ $application->first_name }}
                            {{ $application->last_name }}</strong>? This action cannot be
                        undone.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="{{ url('deletebeneficiaries', $application->id) }}">Delete</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </tbody>
    </table>
   </div>
</div>
