

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

    @include('admin.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            font-size: 1.5rem;
            background-color: #5cb85c;
            color: white;
            font-weight: bold;
        }

        .btn-back {
            background-color: #6c757d;
            color: white;
            font-weight: bold;
        }

        .form-control {
            border-radius: 0.375rem;
        }

        .alert {
            margin-bottom: 20px;
        }
    </style>

</head>
<body>
<div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->

      @include('admin.navbar')


      <div class="container">
      @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

        <div  class="card" align="center" style="padding-top:80px;">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Add Service</span>
                    <a href="{{ url('/showservices') }}" class="btn btn-success btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('upload_service') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Service Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter service name" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="description" class="form-label">Service Description</label>
                                <input type="text" class="form-control" name="description" id="description" placeholder="Enter service description" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="file" class="form-label">Service Image</label>
                            <input type="file" class="form-control" name="file" id="file">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('admin.script')
</body>
</html>
