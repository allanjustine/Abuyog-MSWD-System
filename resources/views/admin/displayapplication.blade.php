<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Applications</title>

    @include('admin.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        /* Ensure text ellipsis for long program names */
        .text-ellipsis {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 150px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.navbar')

        <div class="container">
            <div class="card" align="center" style="padding-top:80px;">
                <div class="card-header">
                    <h4 class="fw-bold fs-3">All Applications</h4>
                </div>

                <!-- Align the search form to the right -->
                <div class="mt-2 mb-3 d-flex justify-content-between align-items-center">

                    <div class="gap-2 d-flex align-items-center">
                        <form>
                            <div class="gap-2 d-flex">
                                <label for="filter" style="width: 220px;">Filter by Status:</label>
                                <select class="form-select" name="filter" id="">
                                    <option value="" hidden disabled>Filter by Status</option>
                                    <option value="" disabled>Filter by Status</option>
                                    <option value="" {{ request()->filter == '' ? 'selected' : '' }}>All</option>
                                    <option value="accepted" {{ request()->filter == 'accepted' ? 'selected' : ''
                                        }}>Accepted</option>
                                    <option value="pending" {{ request()->filter == 'pending' ? 'selected' : ''
                                        }}>Pending
                                    </option>
                                    <option value="rejected" {{ request()->filter == 'rejected' ? 'selected' : ''
                                        }}>Rejected</option>
                                </select>
                                <button class="btn btn-primary" type="submit">Filter</button>
                            </div>
                        </form>
                        <form>
                            <input type="hidden" name="filter" value="">
                            <button class="btn btn-warning" type="submit">Reset Filter</button>
                        </form>
                    </div>
                    <form action="{{ route('application.search') }}" method="GET" class="d-flex">
                        @csrf
                        <input type="text" name="search" class="form-control me-2" placeholder="Search..."
                            value="{{ request()->search }}" style="max-width: 300px;">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>

                <!-- Responsive Table -->
                <div class="table-responsive">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <table class="table table-sm table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Beneficiary Name</th>
                                <th>Services Applied</th>
                                <th>Date Applied</th>
                                <th>Status</th>
                                <th>Accepted By</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                            <tr class="text-capitalize">
                                <td>{{ $item->full_name }}</td>
                                <td class="text-ellipsis" title="{{ $item->service->name ?? 'No Service Assigned' }}">
                                    {{ $item->service->name ?? 'No Service Assigned' }}
                                </td>
                                <td>{{ $item?->appearance_date?->format('F d, Y') ?? $item?->created_at?->format('F d, Y') }}</td>
                                <td>

                                    @if ($item->approved_at !== null && $item->approved_by !== null)
                                    <span class="badge bg-success">Approved (Ready for realease)</span>
                                    @else

                                    <span class="badge @if ($item->status == 'accepted') bg-primary
                                        @elseif ($item->status == 'rejected') bg-danger
                                        @elseif ($item->status == 'pending') bg-info
                                        @else bg-secondary @endif">
                                        {{ $item->status }}
                                    </span>
                                    @endif
                                </td>
                                <td>{{ $item->acceptedBy->full_name ?? 'Pending' }}</td>
                                <td>
                                    <!-- View Button -->
                                    <div class="gap-2 d-flex flex-column">
                                        <a href="#" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#viewModal{{ $item?->id }}">
                                            View
                                        </a>
                                        @if ($item->status === 'approved')
                                        <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#releasedModal{{ $item->id }}">
                                            Release
                                        </a>
                                        @endif
                                        @if ($item->status === 'accepted' && $item->approved_at === null &&
                                        $item->approved_by === null)
                                        <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#ApproveModal{{ $item->id }}">
                                            Approve
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#RejectModal{{ $item->id }}">
                                            Reject
                                        </a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="releasedModal{{ $item?->id }}" tabindex="-1"
                                aria-labelledby="releasedModalLabel{{ $item?->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="text-white modal-header bg-danger">
                                            <h5 class="modal-title" id="releasedModalLabel{{ $item?->id }}">
                                                Processing for release...</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to marked
                                                <strong>{{ $item?->first_name }}
                                                    {{ $item?->last_name }}</strong> as for released? This action cannot be
                                                undone.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <a class="btn btn-danger"
                                                href="/released/{{ $item?->id }}">Yes, Sure</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="ApproveModal{{ $item->id }}" tabindex="-1"
                                aria-labelledby="ApproveModal{{ $item->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/approve-application/{{ $item->id }}" method="POST">
                                            @csrf
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="ApproveModal{{ $item->id }}Label">
                                                    Approving...
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to approve this application of <strong>{{
                                                        $item?->name ?? 'Not set'
                                                        }}</strong> that accepted by <strong>{{ $item?->acceptedBy?->full_name ?? 'Pending'
                                                        }}</strong>?</p>
                                                <p>
                                                    Ensure that the applicant has submitted all the required documents before you approve.
                                                </p>

                                            @if ($item->service->id == 4)
                                                {{-- AICS service --}}
                                                @php
                                                    // Safely check if aicsDetails is not empty before accessing the first element
                                                    $aicsType = isset($item->aicsDetails[0]) ? $item->aicsDetails[0]->type_of_assistance : 'Default';
                                                    $requirements = [];
                                                @endphp

                                                @switch($aicsType)
                                                    @case('Medical Assistance')
                                                        @php
                                                            $requirements = [
                                                                'Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy',
                                                                'Medical Certification/Clinical Abstract issued within 3 months (with signature and license number of the attending physician) - 1 original and 2 photocopy',
                                                                'Statement of Account/Billing Statement(for Billing) - 1 original and 2 photocopy',
                                                                'Pharmacy Receipt - 1 original and 2 photocopy',
                                                                "Doctor's Prescription - 1 original and 2 photocopy",
                                                                'Fully accomplished Application Form'
                                                            ];
                                                        @endphp
                                                        @break

                                                    @case('Burial Assistance')
                                                        @php
                                                            $requirements = [
                                                                'Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy',
                                                                'Registered Death Certificate - 1 original and 2 photocopy',
                                                                'Funeral Contract - 1 original and 2 photocopy',
                                                                'Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy',
                                                                "Senior Citizen's Id (deceased senior citizen) - Certified True Copy and 2 photocopy",
                                                                'Fully accomplished Application Form'
                                                            ];
                                                        @endphp
                                                        @break

                                                    @case('Transportation Assistance')
                                                        @php
                                                            $requirements = [
                                                                'Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy',
                                                                'Social Case Study Report - 2 Original Copy',
                                                                'Letter Request - 1 original and 2 photocopy',
                                                                'Fully accomplished Application Form'
                                                            ];
                                                        @endphp
                                                        @break

                                                    @case('Food Assistance')
                                                        @php
                                                            $requirements = [
                                                                'Intake/Interview of clients suffering from starvation to determine eligibility for assistance',
                                                                'Fully accomplished Application Form'
                                                            ];
                                                        @endphp
                                                        @break

                                                    @case('Emergency Shelter Assistance')
                                                        @php
                                                            $requirements = [
                                                                'Fully accomplished Application Form',
                                                                'Bureau of Fire Protection Certification',
                                                                "Intake/Interview of client to determine one's eligibility for assistance",
                                                                'Picture of the damaged house - 3 copies'
                                                            ];
                                                        @endphp
                                                        @break

                                                    @case('Educational Assistance')
                                                        @php
                                                            $requirements = [
                                                                'Any valid ID/Barangay Certificate/ Certificate of Indigency - 3 photocopies',
                                                                'School ID of student/beneficiary - 3 photocopies',
                                                                'Certificate of Enrollment or Registration - 1 original and 2 photocopy',
                                                                'Assessment Form/Statement of Account - 1 original and 2 photocopy',
                                                                'Social Case Study Report (SCSR) from the MSWDO',
                                                                'Fully accomplished Application Form'
                                                            ];
                                                        @endphp
                                                        @break

                                                    @default
                                                        @php
                                                            $requirements = ['No specific requirements'];
                                                        @endphp
                                                @endswitch

                                            @else
                                                {{-- Other services' requirements --}}
                                                @switch($item->service->id)
                                                    @case(1)
                                                        @php
                                                            $requirements = ['Valid ID', 'Accomplished Certification and Authorization', 'Certificate of Existence', 'Fully accomplished Application Form'];
                                                        @endphp
                                                        @break
                                                    @case(2)
                                                        @php
                                                            $requirements = ['Updated Barangay Certificate', '1x1 ID Picture', 'Birth Certificate / Voter\'s Certification', 'Medical Certificate', 'Whole Body picture of PWD applicant', 'Fully accomplished Application Form'];
                                                        @endphp
                                                        @break
                                                    @case(3)
                                                        @php
                                                            $requirements = ['Certificate of No Marriage (CENOMAR)', '2×2 Photo', 'Fully accomplished Application Form', 'PSA Birth Certificate/s', 'Spouse’s Death Certificate', 'Certificate of Annulment/Nullity of Marriage', 'Income Tax Return (ITR) or Document Showing Income Level', 'Barangay Certificate', 'Proof of Financial Status', 'Supporting Documents/Certificates'];
                                                        @endphp
                                                        @break
                                                    @default
                                                        @php
                                                            $requirements = ['No specific requirements'];
                                                        @endphp
                                                @endswitch
                                            @endif

                                            <div x-data="{ open: false }">
                                                <button type="button" class="btn btn-primary" @click="open = !open">View Checklist</button>
                                                <ul class="fw-bold text-uppercase text-start ml-3" style="list-style: square" x-cloak x-show="open" id="requirements-list">
                                                    @foreach ($requirements as $index => $requirement)
                                                        <li><input type="checkbox" class="requirement-checkbox"> {{ $requirement }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <p id="message" class="text-success fw-bold fs-4" style="display: none;"><i class="mdi mdi-check-all"></i> All requirements are checked!</p>

                                            @if ($item->service->id == 4)
                                                <div class="container" style="display: none;" id="aics-data">
                                                    <h2>For AICS Types</h2>
                                                    <div class="form-row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="case_no">Case No.</label>
                                                                <input type="text" name="case_no" required placeholder="Please enter case no." class="form-control">
                                                                @error('case_no')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="new_or_old">New or Old</label>
                                                                <select name="new_or_old" id="" required class="form-select">
                                                                    <option value="" hidden selected>Please select new or old</option>
                                                                    <option value="" disabled>Please select new or old</option>
                                                                    <option value="New">New</option>
                                                                    <option value="Old">Old</option>
                                                                </select>
                                                                @error('new_or_old')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="problem_presented">Problem Presented.</label>
                                                            <input type="text" name="problem_presented" required placeholder="Please enter case no." class="form-control">
                                                            @error('problem_presented')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="findings">Findings</label>
                                                                <input type="text" name="findings" required placeholder="Please enter case no." class="form-control">
                                                                @error('findings')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="action_taken">Action Taken</label>
                                                            <input type="text" name="action_taken" required placeholder="Please enter case no." class="form-control">
                                                            @error('action-taken')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">No</button>
                                                <button type="submit" class="btn btn-primary" id="button-approve" style="display: none;">Yes, Approve</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="RejectModal{{ $item->id }}" tabindex="-1"
                                aria-labelledby="RejectModal{{ $item->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/reject-application/{{ $item->id }}" method="POST">
                                            @csrf
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="RejectModal{{ $item->id }}Label">
                                                    Rejecting...</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to reject this application of <strong>{{
                                                        $item->name
                                                        }}</strong> that accepted by <strong>{{ $item->employee_name
                                                        }}</strong>?</p>
                                                <div class="mt-3 form-group">
                                                    <label for="cancellation_reason" class="text-info">If reject
                                                        please state an
                                                        cancellation reason:</label>
                                                    <textarea name="cancellation_reason" id=""
                                                        placeholder="Cancellation Reason"
                                                        class="form-control {{ $errors->has('cancellation_reason') ? 'is-invalid' : '' }}"
                                                        cols="5"></textarea>
                                                    @error('cancellation_reason')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Reject</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @include('admin.components.view-modal')
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">No Data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-3 d-flex justify-content-center">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>

        @include('admin.script')
    </div>
    <script>
        @if ($errors->any())
        $(document).ready(function() {
            $('#RejectModal{{ $item->id }}').modal('show');
            $('#ApproveModal{{ $item->id }}').modal('show');
        });
        @endif
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.requirement-checkbox');
            const message = document.getElementById('message');
            const button = document.getElementById('button-approve');
            const aicsDiv = document.getElementById('aics-data');

            function checkAllChecked() {
                const allChecked = Array.from(checkboxes).every(checkbox => checkbox.checked);
                if (allChecked) {
                    message.style.display = 'block';
                    button.style.display = 'block';
                    aicsDiv.style.display = 'block';
                } else {
                    message.style.display = 'none';
                    button.style.display = 'none';
                    aicsDiv.style.display = 'none';
                }
            }

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', checkAllChecked);
            });

            checkAllChecked();
        });
    </script>
</body>

</html>
