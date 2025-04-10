<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

    @include('admin.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/all.css">

    <style>
        .truncate {
            max-width: 250px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .swal2-title {
            color: black !important;
        }

        .swal2-icon {
            margin-bottom: 10px !important;
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
                    Services
                    {{-- <a href="{{ url('/add_service_view') }}" class="btn btn-success btn-sm float-end">Add New</a>
                    --}}
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Service Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                    <!-- <th>Delete</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $service)
                                <tr>
                                    <td>{{ $service->name }}</td>
                                    <td>
                                        <div class="truncate" title="{{ $service->description }}">
                                            {{ $service->description }}
                                        </div>
                                    </td>
                                    <td>
                                        @if ($service->status)
                                        <span class="badge badge-success">Active</span>
                                        @else
                                        <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td><img height="100" width="100" src="serviceimage/{{ $service->image }}"
                                            alt="Service Image"></td>
                                    <td>
                                        <div class="gap-1 d-flex align-items-center">
                                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editServiceModal" data-id="{{ $service->id }}"
                                                data-name="{{ $service->name }}"
                                                data-description="{{ $service->description }}"
                                                data-image="serviceimage/{{ $service->image }}">
                                                <i class="fas fa-pen"></i> Edit
                                            </button>
                                            <form action="/mark-active-inactive/{{ $service->id }}" method="POST">
                                                @csrf
                                                @method('POST')
                                                @if ($service->status)
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="far fa-xmark"></i> Mark Inactive
                                                </button>
                                                @else
                                                <button class="btn btn-success btn-sm">
                                                    <i class="far fa-check"></i> Mark Active
                                                </button>
                                                @endif
                                            </form>
                                        </div>
                                    </td>
                                    <!-- <td>
                                            <button class="btn btn-danger delete-service"
                                                data-id="{{ $service->id }}">Delete</button>
                                        </td> -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Edit Service Modal -->
            <div class="modal fade" id="editServiceModal" tabindex="-1" aria-labelledby="editServiceModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editServiceModalLabel">Edit Service</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="editServiceForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <input type="hidden" id="serviceId" name="id">
                                <div class="mb-3">
                                    <label for="serviceName" class="form-label">Service Name</label>
                                    <input type="text" class="form-control" id="serviceName" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="serviceDescription" class="form-label">Service Description</label>
                                    <input type="text" class="form-control" id="serviceDescription" name="description">
                                </div>
                                <div class="mb-3">
                                    <label for="serviceImage" class="form-label">Current Image</label>
                                    <img id="currentImage" height="150" width="150" class="mb-2 d-block">
                                </div>
                                <div class="mb-3">
                                    <label for="newImage" class="form-label">Change Image</label>
                                    <input type="file" class="form-control" id="newImage" name="file">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.script')

    <script>
        // Load data into the edit modal
                $('#editServiceModal').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget);
                    var id = button.data('id');
                    var name = button.data('name');
                    var description = button.data('description');
                    var image = button.data('image');

                    var modal = $(this);
                    modal.find('#serviceId').val(id);
                    modal.find('#serviceName').val(name);
                    modal.find('#serviceDescription').val(description);
                    modal.find('#currentImage').attr('src', image);

                    modal.find('#editServiceForm').attr('action', '/updateservice/' + id);
                });

                // SweetAlert for delete confirmation
                $('.delete-service').on('click', function() {
                    var serviceId = $(this).data('id');
                    Swal.fire({
                        title: '<span style="color: black;">Are you sure?</span>',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        iconColor: '#f8bb86',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!',
                        customClass: {
                            icon: 'swal2-icon',
                            title: 'swal2-title'
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '/deleteservices/' + serviceId;
                        }
                    });
                });
    </script>

    <script>
        Swal.fire({
        title:'Success',
        icon: 'success',
        text:  "asdf"
        showCancelButton: true,
        showCloseButton: true,
        showConfirmButton: false,
        cancelButtonText: 'Close'
    })
    </script>

    @if (session('success'))
    <script>
        Swal.fire({
                    title:'Success',
                    icon: 'success',
                    text:  @json(session('success'))
                    showCancelButton: true,
                    showCloseButton: true,
                    showConfirmButton: false,
                    cancelButtonText: 'Close'
                })
    </script>
    @endif
    @if (session('error'))
    <script>
        Swal.fire({
                    title:'Error',
                    icon: 'error',
                    text:  @json(session('error'))
                    showCancelButton: true,
                    showCloseButton: true,
                    showConfirmButton: false,
                    cancelButtonText: 'Close'
                })
    </script>
    @endif
</body>

</html>
