<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficiaries</title>

    @include('operator.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-scroller">

        @include('operator.sidebar')

        @include('operator.navbar')

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
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <!-- Align the search form to the right -->
                <form action="{{ url('beneficiary_search_ope') }}" method="get" class="text-end">
                    @csrf
                    <input type="search" name="search" placeholder="Search.." class="form-control d-inline-block" style="width: auto;">
                    <input type="submit" class="btn btn-primary d-inline-block" value="Search">
                </form>

                <div class="table-responsive">
                    <table class="table table-sm table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Program Enrolled</th>
                                <th>Barangay</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($beneficiaries as $beneficiary)
                            <tr>
                                <td>{{ $beneficiary->first_name }}</td>
                                <td>{{ $beneficiary->middle_name }}</td>
                                <td>{{ $beneficiary->last_name }}</td>
                                <td>{{ $beneficiary->email }}</td>
                                <td>{{ $beneficiary->phone }}</td>
                                <td>{{ $beneficiary->service ? $beneficiary->service->name : 'No Program' }}</td>
                                <td>{{ $beneficiary->barangay->name ?? 'No Barangay' }}</td>
                                <td>
                                    <div x-data="{open: false, loading: true}" class="d-flex justify-content-center flex-column" x-init="loading = false">
                                        <button type="button" @click="open = !open" class="mb-3 btn btn-primary rounded-full d-flex align-items-center justify-content-center">
                                            <span class="spinner-border spinner-border-sm" x-show="loading"></span><i class="mdi mdi-minus" x-show="open" x-cloak></i><i class="mdi mdi-plus" x-show="!open" x-cloak></i></button>

                                        <div x-cloak x-show="open">
                                            <div class="gap-2 d-flex justify-content-around flex-column">
                                                <button class="btn btn-info btn-sm ms-2" type="button" data-bs-toggle="modal" data-bs-target="#viewModal{{ $beneficiary->id }}">
                                                    View
                                                </button>

                                                <!-- Edit Button -->
                                                @if ($beneficiary->service->name === "OSCA(Office of Senior Citizens)")
                                                <a class="btn btn-success btn-sm ms-2" href="/edit-osca/{{ $beneficiary->id }}">Edit</a>
                                                @elseif($beneficiary->service->name === "PWD(Persons with Disabilities)")

                                                <a class="btn btn-success btn-sm ms-2" href="/edit-pwd/{{ $beneficiary->id }}">Edit</a>
                                                @elseif($beneficiary->service->name === "Solo Parent")

                                                <a class="btn btn-success btn-sm ms-2" href="/edit-solo-parent/{{ $beneficiary->id }}">Edit</a>
                                                @elseif($beneficiary->service->name === "AICS(Assistance to Individuals in Crisis)")

                                                <a class="btn btn-success btn-sm ms-2" href="/edit-aics/{{ $beneficiary->id }}">Edit</a>
                                                @endif

                                                <!-- Delete Button with Modal Trigger -->
                                                <button class="btn btn-danger btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $beneficiary->id }}">
                                                    Delete
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>

                            <!-- View Modal -->

                            @include('admin.components.view-modal')
                </div>

                <!-- Delete Confirmation Modal -->
                <div class="modal fade" id="deleteModal{{ $beneficiary->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $beneficiary->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="text-white modal-header bg-danger">
                                <h5 class="modal-title" id="deleteModalLabel{{ $beneficiary->id }}">
                                    Confirm Deletion</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete
                                    <strong>{{ $beneficiary->first_name }}
                                        {{ $beneficiary->last_name }}</strong>? This action cannot be
                                    undone.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <a class="btn btn-danger" href="{{ url('deletebeneficiaries', $beneficiary->id) }}">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                </tbody>
                </table>
                {{ $beneficiaries->links('pagination::bootstrap-5') }}
            </div>
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
