<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | MSWDO Abuyog</title>

    <!-- Required meta tags -->
    @include('user.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #ff7b00;
            --accent-color: #1374ce;
            --light-bg: #f8f9fa;
            --dark-text: #2c3e50;
            --light-text: #f8f9fa;
        }

        body {
            background-color: #f5f7fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .welcome-header {
            background: linear-gradient(135deg, var(--primary-color), #1a1a2e);
            color: white;
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .welcome-header::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
            transform: rotate(30deg);
        }

        .dashboard-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
            height: 100%;
            position: relative;
            z-index: 1;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }

        .dashboard-card::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--accent-color);
        }

        .card-primary::after {
            background: var(--accent-color);
        }

        .card-danger::after {
            background: #dc3545;
        }

        .card-warning::after {
            background: #ffc107;
        }

        .card-success::after {
            background: #28a745;
        }

        .card-info::after {
            background: #17a2b8;
        }

        .card-cyan::after {
            background: #0dcaf0;
        }

        .card-purple::after {
            background: #d24afb;
        }

        .card-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }

        .dashboard-card:hover .card-icon {
            transform: scale(1.1);
        }

        .card-title {
            font-weight: 600;
            color: var(--dark-text);
            margin-bottom: 0.5rem;
        }

        .card-value {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark-text);
        }

        .alert-success {
            border-left: 5px solid #28a745;
        }

        .section-title {
            position: relative;
            padding-bottom: 10px;
            margin-bottom: 2rem;
            color: var(--primary-color);
        }

        .section-title::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--secondary-color);
            border-radius: 2px;
        }

        @media (max-width: 768px) {
            .dashboard-card {
                margin-bottom: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('user.sidebar')
        @include('user.navbar')
        @if (Auth::user()->isBeneficiary())
            @include('components.basic-info-modal')
        @endif

        <div class="container py-4 mt-5">
            <!-- Welcome Header -->
            <div class="text-center welcome-header">
                <h1 class="mb-3 display-4 fw-bold">Welcome to MSWDO</h1>
                <p class="mb-0 lead">MUNICIPALITY OF ABUYOG</p>
            </div>

            @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i>
                    <strong>Success!</strong> {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Dashboard Section -->
            <div class="mb-4 border-0 shadow-sm card">
                <div class="py-3 bg-white border-0 card-header">
                    <h2 class="section-title fw-bold">DASHBOARD OVERVIEW</h2>
                </div>
                <div class="card-body">
                    <div class="row g-4">
                        <!-- Total Applications -->
                        <div class="col-md-4 col-lg-3">
                            <div class="dashboard-card card card-primary">
                                <div class="py-4 text-center card-body">
                                    <i class="fas fa-folder-open card-icon text-primary"></i>
                                    <h3 class="text-black card-title">Total Applications</h3>
                                    <p class="card-value">{{ $totalBeneficiaries }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Rejected Applications -->
                        <div class="col-md-4 col-lg-3">
                            <div class="dashboard-card card card-danger">
                                <div class="py-4 text-center card-body">
                                    <i class="fas fa-thumbs-down card-icon text-danger"></i>
                                    <h3 class="text-black card-title">Rejected</h3>
                                    <p class="card-value">{{ $totalBeneficiariesRejected }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Cancelled Applications -->
                        <div class="col-md-4 col-lg-3">
                            <div class="dashboard-card card card-warning">
                                <div class="py-4 text-center card-body">
                                    <i class="fas fa-times-circle card-icon text-warning"></i>
                                    <h3 class="text-black card-title">Cancelled</h3>
                                    <p class="card-value">{{ $totalBeneficiariesCancelled }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Approved Applications -->
                        <div class="col-md-4 col-lg-3">
                            <div class="dashboard-card card card-success">
                                <div class="py-4 text-center card-body">
                                    <i class="fas fa-check-circle card-icon text-success"></i>
                                    <h3 class="text-black card-title">Approved</h3>
                                    <p class="card-value">{{ $totalBeneficiariesApproved }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Released Applications -->
                        <div class="col-md-4 col-lg-3">
                            <div class="dashboard-card card card-info">
                                <div class="py-4 text-center card-body">
                                    <i class="fas fa-share-square card-icon text-info"></i>
                                    <h3 class="text-black card-title">Released</h3>
                                    <p class="card-value">{{ $totalBeneficiariesReleased }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Accepted Applications -->
                        <div class="col-md-4 col-lg-3">
                            <div class="dashboard-card card card-cyan">
                                <div class="py-4 text-center card-body">
                                    <i class="fas fa-handshake card-icon" style="color: #0dcaf0;"></i>
                                    <h3 class="text-black card-title">Accepted</h3>
                                    <p class="card-value">{{ $totalBeneficiariesAccepted }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Benefits Received -->
                        <div class="col-md-4 col-lg-3">
                            <div class="dashboard-card card card-purple">
                                <div class="py-4 text-center card-body">
                                    <i class="fas fa-hand-holding-heart card-icon" style="color: #d24afb;"></i>
                                    <h3 class="text-black card-title">Benefits Received</h3>
                                    <p class="card-value">{{ $totalBenefitsReceived }}</p>
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

        <script>
            // Add animation to cards when they come into view
            $(document).ready(function() {
                $('.dashboard-card').each(function(i) {
                    $(this).css('opacity', '0').css('transform', 'translateY(20px)');

                    setTimeout(() => {
                        $(this).animate({
                            opacity: 1,
                            translateY: 0
                        }, 400);
                    }, i * 100);
                });
            });
        </script>
</body>

</html>
