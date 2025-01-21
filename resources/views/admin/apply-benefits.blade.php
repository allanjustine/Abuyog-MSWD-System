<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Benefits</title>

    @include('admin.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Custom CSS for the modal design -->
    <style>
        .modal-content {
            border-radius: 10px;
            border: 1px solid #ccc;
        }

        .modal-header {
            background-color: #00becc;
            color: #721c24;
            border-bottom: 2px solid #00becc;
        }

        .modal-footer {
            background-color: #00becc;
            border-top: 2px solid #00becc;
        }

        .modal-body {
            padding: 30px;
            text-align: center;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .btn-add-user {
            float: right;
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
            <div class="card" align="center" style="padding-top:80px;">
                <h2 class="fs-5">Apply Benefits to <strong>{{ $beneficiary->first_name }} {{ $beneficiary->last_name
                        }}</strong></h2>
                <div class="card-body">
                    <div class="p-5 border">
                        @if (session('error'))
                        <div>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                        @endif
                        <form action="/apply-benefits/{{ $beneficiary->id }}" method="POST">
                            @csrf
                            <div class="mb-4 form-group">
                                <label for="item_type">Item Type</label>
                                <select name="item_type" id="" class="form-select">
                                    <option hidden selected>Select Item Type</option>
                                    <option disabled>Select Item Type</option>
                                    <option value="cash" {{ old('item_type')=='cash' ? 'selected' : '' }}>Cash</option>
                                    <option value="food" {{ old('item_type')=='food' ? 'selected' : '' }}>Food</option>
                                    <option value="other" {{ old('item_type')=='other' ? 'selected' : '' }}>Other
                                    </option>
                                </select>
                                @error('item_type')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4 form-group">
                                <label for="remarks">Remarks</label>
                                <textarea name="remarks" id="" cols="5" rows="5" class="w-100"
                                    placeholder="Remarks">{{ old('remarks') }}</textarea>
                                @error('remarks')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4 form-group">
                                <label for="date_received">Date Received</label>
                                <input type="date" name="date_received" class="form-control" value="{{ old("
                                    date_received") }}">
                                @error('date_received')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <a href="/showbeneficiaries_admin" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Apply</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
