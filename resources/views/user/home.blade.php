<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Required meta tags -->
    @include('user.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <div class="container-scroller">
        @include('user.sidebar')
        @include('user.navbar')
        @if (Auth::user()->isBeneficiary())
            @include('components.basic-info-modal')
        @endif

        <div class="container">
            <div class="card" align="center" style="padding-top:80px;">
                <h1 class="pb-2 text-center border-bottom fw-bold fs-1 text-uppercase">Welcome to MSWDO | MUNICIPALITY
                    OF
                    ABUYOG</h1>
                @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <!-- Dashboard Cards -->
                <div class="card">
                    <div class="card-header">
                        <h1 class="pb-2 fw-bold fs-2 border-bottom border-info">DASHBOARD</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Total Applications -->
                            <div class="mb-4 col-md-3">
                                <div class="shadow-sm card border-primary">
                                    <div class="text-center card-body">
                                        <i class="fa fa-folder-open fa-3x text-primary"></i>
                                        <h4 class="mt-3 card-title" style="color: black;">Total Applications</h4>
                                        <p class="card-text">{{ $totalBeneficiaries }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Rejected Applications -->
                            <div class="mb-4 col-md-3">
                                <div class="shadow-sm card border-danger">
                                    <div class="text-center card-body">
                                        <i class="fa fa-thumbs-down fa-3x text-danger"></i>
                                        <h4 class="mt-3 card-title" style="color: black;">Rejected Applications</h4>
                                        <p class="card-text">{{ $totalBeneficiariesRejected }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Cancelled Applications -->
                            <div class="mb-4 col-md-3">
                                <div class="shadow-sm card border-warning">
                                    <div class="text-center card-body">
                                        <i class="fa fa-times-circle fa-3x text-warning"></i>
                                        <h4 class="mt-3 card-title" style="color: black;">Cancelled Applications</h4>
                                        <p class="card-text">{{ $totalBeneficiariesCancelled }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Approved Applications -->
                            <div class="mb-4 col-md-3">
                                <div class="shadow-sm card border-success">
                                    <div class="text-center card-body">
                                        <i class="fa fa-check-circle fa-3x text-success"></i>
                                        <h4 class="mt-3 card-title" style="color: black;">Approved Applications</h4>
                                        <p class="card-text">{{ $totalBeneficiariesApproved }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Released Applications -->
                            <div class="mb-4 col-md-3">
                                <div class="shadow-sm card border-info">
                                    <div class="text-center card-body">
                                        <i class="fa fa-share-square fa-3x text-info"></i>
                                        <h4 class="mt-3 card-title" style="color: black;">Released Applications</h4>
                                        <p class="card-text">{{ $totalBeneficiariesReleased }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Accepted Applications -->
                            <div class="mb-4 col-md-3">
                                <div class="shadow-sm card" style="border: 1px solid cyan;">
                                    <div class="text-center card-body">
                                        <i class="fa fa-handshake fa-3x" style="color: cyan;"></i>
                                        <h4 class="mt-3 card-title" style="color: black;">Accepted Applications</h4>
                                        <p class="card-text">{{ $totalBeneficiariesAccepted }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accepted Applications -->
                            <div class="mb-4 col-md-3">
                                <div class="shadow-sm card" style="border: 1px solid rgb(210, 74, 251);">
                                    <div class="text-center card-body">
                                        <i class="fa fa-hand-holding-heart fa-3x" style="color: rgb(210, 74, 251);"></i>
                                        <h4 class="mt-3 card-title" style="color: black;">Benefits Received</h4>
                                        <p class="card-text">{{ $totalBenefitsReceived }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            @include('user.script')
            <!-- End custom js for this page -->
</body>

</html>
