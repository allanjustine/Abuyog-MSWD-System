<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Details</title>
    @include('admin.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: rgb(136, 124, 127);
            /* Dark Maroon */
            font-family: 'Poppins', sans-serif;
            color: #f8f9fa;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .card-header {
            background-color: #6a1b3a;
            color: #ffffff;
            padding: 15px;
        }

        .card-header h5 {
            font-weight: bold;
            margin: 0;
        }

        .card-body {
            padding: 20px;
        }

        .card-body p {
            margin-bottom: 10px;
            font-size: 16px;
            color: #333333;
        }

        .card-body p strong {
            color: #6a1b3a;
        }

        .card-footer {
            background-color: #6a1b3a;
            padding: 15px;
        }

        /* Button Styling */
        .btn-outline-success {
            border: 2px solid #4caf50;
            background-color: transparent;
            color: #4caf50;
            font-size: 16px;
            font-weight: bold;
            padding: 8px 20px;
            display: inline-flex;
            align-items: center;
        }

        .btn-outline-success:hover {
            background-color: #4caf50;
            color: #ffffff;
        }

        .btn-outline-success i {
            margin-right: 8px;
            /* Spacing for the icon */
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <div class="container mt-5">
            <div class="card">
                <div class="card-header text-center">
                    <h5>Application Details</h5>
                </div>
                <div class="card-body">
                    <!-- Display Cancellation Reason -->
                    @if ($application->status === 'cancelled' && $application->cancellation_reason)
                        <p><strong>Reason for Cancelling:</strong> {{ $application->cancellation_reason }}</p>
                    @endif
                    <p><strong>Beneficiary Name:</strong> {{ $application->name }}
                        {{ $application->custom_fields['last_name'] ?? '' }}</p>
                    <p><strong>Email:</strong> {{ $application->email }}</p>
                    <p><strong>Phone:</strong> {{ $application->phone }}</p>
                    <p><strong>Service:</strong> {{ $application->service->name ?? 'No Service Assigned' }}</p>
                    <p><strong>Date Applied:</strong> {{ $application?->appearance_date?->format('F d, Y') ?: $apply?->created_at?->format('F d, Y') }}</p>
                    <p><strong>Status:</strong> {{ $application->status }}</p>

                    @if ($application->custom_fields)
                        @php
                            $customFields = json_decode($application->custom_fields, true); // Decode to array
                        @endphp
                        @foreach ($customFields as $key => $value)
                            <p><strong>{{ ucwords(str_replace('_', ' ', $key)) }}:</strong> {{ $value }}</p>
                        @endforeach
                    @else
                        <p>No additional details available.</p>
                    @endif
                </div>
                <div class="card-footer text-center">
                    <a href="{{ url('displayapplication') }}" class="btn btn-outline-success">
                        <i class="fas fa-arrow-left"></i> Back to Applications
                    </a>
                </div>
            </div>
        </div>

        @include('admin.script')
    </div>
</body>

</html>
