<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MSWD | Municipality of Abuyog</title>
    @include('user.css')
    <!-- CSS Links -->
    <link rel="stylesheet" href="../assets/css/maicons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/theme.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Add SweetAlert2 CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <style>
        /* Action links styling */
        .action-link {
            text-decoration: none;
            padding: 5px 10px;
            border: 2px solid transparent;
            border-radius: 5px;
            color: inherit;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            transition: border-color 0.3s ease;
        }

        .action-link i {
            margin-right: 5px;
        }

        /* Modal styles */
        .modal-dialog {
            max-width: 800px;
            margin: 30px auto;
        }

        .modal-content {
            padding: 20px;
        }

        .modal-header {
            border-bottom: none;
            background-color: #5c2a2a;
            color: white;
        }

        .modal-footer {
            border-top: none;
        }


        .action-link-cancel {
            border-color: red;
            color: red;
        }

        .action-link-cancel:hover {
            border-color: darkred;
        }

        .action-link-history {
            border-color: #17a2b8;
            color: #17a2b8;
        }

        .action-link-history:hover {
            border-color: #138496;
        }

        .action-link-download {
            border-color: green;
            color: green;
        }

        .action-link-download:hover {
            border-color: darkgreen;
        }

        /* Responsive table */
        .table-responsive {
            overflow-x: auto;
        }

        /* Logo styling for smaller screens */
        .navbar-brand img {
            max-height: 40px;
            width: auto;
        }

        /* Adjust column widths */
        table th:nth-child(1),
        table td:nth-child(1) {
            width: 30%;
            /* Wider column for Program Enrolled */
            word-wrap: break-word;
            /* Handle long names gracefully */
        }

        table th:nth-child(2),
        table td:nth-child(2) {
            width: 20%;
            /* Reduce width for Date for Personal Appearance */
        }

        table th:nth-child(3),
        table td:nth-child(3) {
            width: 15%;
            /* Adjust Phone column width */
        }

        table th:nth-child(4),
        table td:nth-child(4) {
            width: 15%;
            /* Adjust Status column width */
        }

        table th:nth-child(5),
        table td:nth-child(5) {
            width: 20%;
            /* Adjust Actions column width */
            white-space: nowrap;
            /* Prevent buttons from wrapping */
        }

        table {
            background-color: #faf9f9;
            /* Dark maroon background */
            color: white;
            /* Text color for better contrast */
            border-collapse: collapse;
            /* Clean border lines */
            width: 100%;
            /* Full width */
        }

        table th {
            background-color: #4a2020;
            /* Slightly darker maroon for header */
            color: white;
            /* White text for header */
            padding: 10px;
            border: 1px solidrgb(0, 0, 0);
            /* Border color */
            text-align: center;
        }

        table td {
            background-color: rgb(241, 229, 229);
            /* Matches table body background */
            color: BLACK;
            /* White text for data */
            padding: 10px;
            border: 1px solid #3a1a1a;
            /* Border color */
            text-align: center;
            vertical-align: middle;
            /* Align content vertically */
        }

        /* Hover effect for rows */
        table tbody tr:hover {
            background-color: #f0e8e8;
            /* Slightly lighter maroon on hover */
        }

        .card-header {
            background-color: #5c2a2a;
            /* Dark maroon background */
            color: white;
            /* White text for contrast */
            font-weight: bold;
            /* Make text bold */
            padding: 15px;
            border-bottom: 2px solid #3a1a1a;
            /* Add a subtle border */
        }

        .card-header .btn {
            background-color: rgb(204, 201, 201);
            /* Slightly darker maroon for button */
            color: black;
            /* White text for button */
            border: none;
            /* Remove border */
            transition: background-color 0.3s ease;
        }
    </style>
</head>

<body>

    <div class="container-scroller">

        @include('user.sidebar')

        @include('user.navbar')

        <!-- Main Content -->
        <div class="container mt-4">
            <div class="card" style="margin-top:7%;">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>All Applications</span>
                    <button class="btn btn-primary" id="addApplicationBtn">Add New Application</button>
                </div>

                <!-- Dynamic Service Selection Modal -->
                <div id="servicesModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Select a Service</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <ul class="list-group">
                                    @foreach ($services as $service)
                                        <li class="list-group-item">
                                            <a href="{{ route('forms', ['id' => $service->id]) }}">
                                                {{ $service->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    document.getElementById('addApplicationBtn').addEventListener('click', function() {
                        var modal = new bootstrap.Modal(document.getElementById('servicesModal'));
                        modal.show();
                    });
                </script>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Program Enrolled</th>
                                    <th>Date for Personal Appearance</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($apply as $applies)
                                    <tr>
                                        <td>{{ $applies->service->name ?? 'No Service Assigned' }}</td>
                                        <td>{{ $applies->date_applied }}</td>
                                        <td>{{ $applies->phone }}</td>
                                        <td class="text-center">
                                            @if ($applies->status === 'accepted' && $applies->approved_at !== null && $applies->approved_by !== null)
                                                <span>Approved</span>
                                            @else
                                                <span>
                                                    {{ ucfirst($applies->status) }}
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-link action-link-history"
                                                onclick="openModal({{ $applies->id }})">
                                                <i class="fas fa-info-circle"></i>View
                                            </a>
                                            {{--  @if ($applies->status != 'rejected' && $applies->status != 'Pending')
                                                <a class="action-link action-link-download"
                                                    href="{{ url('generate-pdf/' . $applies->id) }}">
                                                    <i class="mai-download"></i>Download Form
                                                </a>
                                            @else
                                                <span class="text-muted">Form Not Available</span>
                                            @endif
                                            @if ($applies->status == 'Pending')
                                                <a class="action-link action-link-cancel" href="#"
                                                    onclick="confirmCancellation('{{ url('cancel_application', $applies->id) }}'); return false;">
                                                    <i class="mai-trash"></i>Cancel
                                                </a>
                                            @endif  --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Application Details -->
        <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailsModalLabel">Application Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Program Name:</strong> <span id="programName"></span></p>
                        <p><strong>Phone:</strong> <span id="phone"></span></p>
                        <p><strong>Status:</strong> <span id="status"></span></p>
                        <p><strong>Date Applied:</strong> <span id="dateApplied"></span></p>
                        <p><strong>Accepted By:</strong> <span id="acceptedBy"></span></p>
                        <p><strong>Approved By:</strong> <span id="firstName"></span> <span id="lastName"></span></p>
                        <p><strong>Approved At:</strong> <span id="approvedAt"></span></p>

                        <div id="appearanceDateSection">
                            <p><strong>Schedule for Personal Appearance:</strong> <span id="appearanceDate"></span></p>
                        </div>

                        <div id="cancellationReasonSection">
                            <p><strong>Reason for Cancelling:</strong> <span id="cancellationReason"></span></p>
                        </div>

                        <div id="requirementsSection">
                            <p><strong>Requirements to Bring:</strong></p>
                            <ul id="requirementsList"></ul>
                        </div>
                        <div id="aicsTypeSection" style="display: none;">
                            <p><strong>AICS Type:</strong> <span id="aicsType"></span></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Links -->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/js/theme.js"></script>
    <!-- SweetAlert2 Script -->
    <script>
        function confirmCancellation(url) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, cancel it!',
                cancelButtonText: 'No, keep it'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to the cancellation URL
                    window.location.href = url;
                }
            });
        }
    </script>

    <script>
        function openModal(applicationId) {
            $.ajax({
                url: '/application_details/' + applicationId,
                method: 'GET',
                success: function(response) {
                    $('#programName').text(response.program_name);
                    $('#phone').text(response.phone);
                    $('#status').text(response.status);
                    $('#dateApplied').text(response.date_applied);
                    $('#acceptedBy').text(response.approved_by || 'Pending');
                    $('#lastName').text(response.last_name || 'Data');
                    $('#firstName').text(response.first_name || 'No');
                    $('#approvedAt').text(response.approved_at || 'Pending');

                    // AICS Type
                    if (response.aics_type && response.aics_type !== 'None') {
                        $('#aicsTypeSection').show();
                        $('#aicsType').text(response.aics_type);
                    } else {
                        $('#aicsTypeSection').hide();
                    }

                    // Appearance Date
                    if (response.status !== 'rejected') {
                        $('#appearanceDateSection').show();
                        $('#appearanceDate').text(response.appearance_date || response.date_applied);
                    } else {
                        $('#appearanceDateSection').hide();
                    }

                    // Cancellation Reason
                    if (response.status === 'rejected') {
                        $('#cancellationReasonSection').show();
                        $('#cancellationReason').text(response.cancellation_reason || 'No reason provided.');
                    } else {
                        $('#cancellationReasonSection').hide();
                    }

                    // Requirements
                    if (response.status === 'approved') {
                        $('#requirementsSection').show();
                        $('#requirementsList').html(
                            response.requirements && response.requirements.length ?
                            response.requirements.map(function(item) {
                                return '<li>' + item + '</li>';
                            }).join('') :
                            '<li>No specific requirements</li>'
                        );
                    } else {
                        $('#requirementsSection').hide();
                    }

                    $('#detailsModal').modal('show');
                },
                error: function() {
                    alert('Failed to fetch application details. Please try again later.');
                }
            });
        }
    </script>

    @include('user.script')
</body>

</html>
