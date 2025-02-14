<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('user.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/all.css">
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('user.sidebar')
        <!-- partial -->

        @include('user.navbar')

        <div class="container" style="margin-top: 100px;">
            <h1 class="pb-2 text-center border-bottom fw-bold fs-1 text-uppercase">Welcome to MSWDO | MUNICIPALITY OF
                ABUYOG</h1>

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
                                    <h4 class="mt-3 card-title">Total Applications</h4>
                                    <p class="card-text">{{ $totalBeneficiaries }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Rejected Applications -->
                        <div class="mb-4 col-md-3">
                            <div class="shadow-sm card border-danger">
                                <div class="text-center card-body">
                                    <i class="fa fa-thumbs-down fa-3x text-danger"></i>
                                    <h4 class="mt-3 card-title">Rejected Applications</h4>
                                    <p class="card-text">{{ $totalBeneficiariesRejected }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Cancelled Applications -->
                        <div class="mb-4 col-md-3">
                            <div class="shadow-sm card border-warning">
                                <div class="text-center card-body">
                                    <i class="fa fa-times-circle fa-3x text-warning"></i>
                                    <h4 class="mt-3 card-title">Cancelled Applications</h4>
                                    <p class="card-text">{{ $totalBeneficiariesCancelled }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Approved Applications -->
                        <div class="mb-4 col-md-3">
                            <div class="shadow-sm card border-success">
                                <div class="text-center card-body">
                                    <i class="fa fa-check-circle fa-3x text-success"></i>
                                    <h4 class="mt-3 card-title">Approved Applications</h4>
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
                                    <h4 class="mt-3 card-title">Released Applications</h4>
                                    <p class="card-text">{{ $totalBeneficiariesReleased }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Accepted Applications -->
                        <div class="mb-4 col-md-3">
                            <div class="shadow-sm card" style="border: 1px solid cyan;">
                                <div class="text-center card-body">
                                    <i class="fa fa-handshake fa-3x" style="color: cyan;"></i>
                                    <h4 class="mt-3 card-title">Accepted Applications</h4>
                                    <p class="card-text">{{ $totalBeneficiariesAccepted }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accepted Applications -->
                        <div class="mb-4 col-md-3">
                            <div class="shadow-sm card" style="border: 1px solid rgb(210, 74, 251);">
                                <div class="text-center card-body">
                                    <i class="fa fa-hand-holding-heart fa-3x" style="color: rgb(210, 74, 251);"></i>
                                    <h4 class="mt-3 card-title">Benefits Received</h4>
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
