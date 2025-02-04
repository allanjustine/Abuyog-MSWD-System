<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficiaries</title>

    @include('admin.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-scroller">

        @include('admin.sidebar')

        @include('admin.navbar')

        <div class="container">
            <div class="card" align="center" style="padding-top:80px;">
                <div class="card-header">
                    <span class="fw-bold fs-3">
                        Beneficiaries
                    </span>
                    <div class="float-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNew">
                            Add New
                        </button>


                        @include('admin.components.addbeneficiary')

                    </div>
                </div>

                <!-- Align the search form to the right -->
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <form action="{{ url('beneficiary_search') }}" method="get" class="my-3 text-end">
                        @csrf
                        <input type="search" name="search" placeholder="Search.." class="form-control d-inline-block"
                            style="width: auto;">
                        <input type="submit" class="btn btn-primary d-inline-block" value="Search">
                    </form>

                    <div class="table-responsive">
                        <table class="table table-sm table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Program Enrolled</th>
                                    <th>Barangay</th>
                                    <th>Status</th>
                                    <th>Approved At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                @if($item->source === "Beneficiary")
                                <tr>
                                    <td>{{ $item?->full_name }}</td>
                                    <td>{{ $item?->email }}</td>
                                    <td>{{ $item?->phone }}</td>
                                    <td>{{ $item?->service ? $item?->service->name : 'No Program' }}</td>
                                    <td>{{ $item?->barangay->name ?? 'No Barangay' }}</td>
                                    <td><span class="badge rounded-pill bg-info">{{ $item?->status ?? 'Manual' }}</span></td>
                                    <td>{{ $item?->approved_at ?? $item?->created_at->diffForHumans() }}</td>
                                    <td>
                                        <!-- View Button -->

                                        <div x-data="{open: false, loading: true}"
                                            class="d-flex justify-content-center flex-column" x-init="loading = false">
                                            <button type="button" @click="open = !open"
                                                class="mb-3 btn btn-primary rounded-full d-flex align-items-center justify-content-center">
                                                <span class="spinner-border spinner-border-sm"
                                                    x-show="loading"></span><i class="mdi mdi-minus" x-show="open"
                                                    x-cloak></i><i class="mdi mdi-plus" x-show="!open"
                                                    x-cloak></i></button>
                                            <div x-cloak x-show="open">
                                                <div class="gap-2 d-flex justify-content-around flex-column">
                                                    <button class="btn btn-info btn-sm ms-2" type="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#viewModal{{ $item?->id }}">
                                                        View
                                                    </button>

                                                    <!-- Edit Button -->
                                                    @if ($item?->service->name === "OSCA(Office of Senior Citizens)")
                                                    <a class="btn btn-success btn-sm ms-2"
                                                        href="/edit-osca/{{ $item?->id }}">Edit</a>
                                                    @elseif($item?->service->name === "PWD(Persons with Disabilities)")

                                                    <a class="btn btn-success btn-sm ms-2"
                                                        href="/edit-pwd/{{ $item?->id }}">Edit</a>
                                                    @elseif($item?->service->name === "Solo Parent")

                                                    <a class="btn btn-success btn-sm ms-2"
                                                        href="/edit-solo-parent/{{ $item?->id }}">Edit</a>
                                                    @elseif($item?->service->name === "AICS(Assistance to Individuals in Crisis)")

                                                    <a class="btn btn-success btn-sm ms-2"
                                                        href="/edit-aics/{{ $item?->id }}">Edit</a>
                                                    @endif

                                                    <!-- Delete Button with Modal Trigger -->
                                                    <button class="btn btn-danger btn-sm ms-2" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $item?->id }}">
                                                        Delete
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade" id="deleteModal{{ $item?->id }}" tabindex="-1"
                                    aria-labelledby="deleteModalLabel{{ $item?->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="text-white modal-header bg-danger">
                                                <h5 class="modal-title" id="deleteModalLabel{{ $item?->id }}">
                                                    Confirm Deletion</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete
                                                    <strong>{{ $item?->first_name }}
                                                        {{ $item?->last_name }}</strong>? This action cannot be
                                                    undone.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <a class="btn btn-danger"
                                                    href="{{ url('deletebeneficiaries', $item?->id) }}">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @include('admin.components.view-modal')
                                @endif
                                @if($item->source === "Application")
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->service ? $item->service->name : 'No Program' }}</td>
                                    <td>
                                        @if ($item?->barangay?->name === null)
                                        <button class="btn btn-link btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#viewModalData{{ $item->id }}">
                                            No Barangay
                                        </button>
                                        @else
                                            {{ $item?->barangay?->name }}
                                        @endif
                                    </td>
                                    <td>
                                        @if($item->approved_at !== null)
                                        <span class="badge rounded-pill bg-success">Approved</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->approved_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="gap-2 d-flex justify-content-around flex-column">
                                            <!-- View Button -->
                                            <button class="btn btn-info btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#viewModalData{{ $item->id }}">
                                                View
                                            </button>

                                            <!-- Edit Button -->
                                            {{-- <a class="btn btn-success btn-sm ms-2" href="{{ url('editbeneficiaries', $item->id) }}">Edit</a> --}}

                                            <!-- Delete Button with Modal Trigger -->
                                            {{-- <button class="btn btn-danger btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                                            Delete
                                            </button> --}}
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade" id="viewModalData{{ $item->id }}" tabindex="-1" aria-labelledby="viewModalDataLabel{{ $item->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewModalDataLabel{{ $item->id }}">
                                                    Item Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="max-height: 80vh; overflow-y: auto;">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label><strong>Name:</strong></label>
                                                            <input type="text" class="form-control" value="{{ $item->name }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Email:</strong></label>
                                                            <input type="email" class="form-control" value="{{ $item->email }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Approved By:</strong></label>
                                                            <input type="approved By" class="form-control" value="{{ $item->approvedBy->first_name ?? 'No' }} {{ $item->approvedBy->last_name ?? 'Data' }}" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label><strong>Phone:</strong></label>
                                                            <input type="text" class="form-control" value="{{ $item->phone }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Program Enrolled:</strong></label>
                                                            <input type="text" class="form-control" value="{{ $item->service ? $item->service->name : 'No Program' }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Approved At:</strong></label>
                                                            <input type="text" class="form-control" value="{{ $item?->approved_at->diffForHumans() ?? 'Pending' }}" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="border-b fw-bold fs-5">Field Filled</p>
                                                        <p class="mt-2">
                                                            @php
                                                            $customFields = json_decode($item->custom_fields, true);
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
                                @endif
                                <!-- View Modal -->
                    </div>
                    @endforeach
                    </tbody>
                    </table>
                    {{ $data->links('pagination::bootstrap-5') }}
                </div>
            </div>
            {{-- @include('admin.components.applicants') --}}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            @if(session('success'))
            Swal.fire({
                icon: 'success'
                , title: '<span style="color: black;">Success</span>'
                , text: '{{ session('success') }}'
                , background: '#f8f9fa'
                , confirmButtonColor: '#28a745'
                , customClass: {
                    icon: 'custom-swal-icon'
                }
            });
            @endif
        });

    </script>

    @include('admin.script')
</body>

</html>
