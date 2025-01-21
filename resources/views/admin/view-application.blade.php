<!-- resources/views/employee/view-application.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Details</title>

    @include('employee.css')
</head>
<body>
<div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.navbar')

    <div class="container">
        <div class="card" align="center" style="padding-top:80px;">
            <div class="card-header">
                <a>Application Details</a>
            </div>
            <div class="card-body">
                <p><strong>Beneficiary Name:</strong> {{ $apply->name }}</p>
                <p><strong>Email:</strong> {{ $apply->email }}</p>
                <p><strong>Phone:</strong> {{ $apply->phone }}</p>
                <p><strong>Service:</strong> {{ $apply->service }}</p>
                <p><strong>Date Applied:</strong> {{ $apply->date_applied }}</p>
                <p><strong>Status:</strong> {{ $apply->status }}</p>

                <!-- Display Custom Fields -->
                @if ($apply->custom_fields)
                    @php
                        $customFields = json_decode($apply->custom_fields, true);
                    @endphp
                    <h6>Additional Details:</h6>
                    @foreach ($customFields as $key => $value)
                        <p><strong>{{ ucwords(str_replace('_', ' ', $key)) }}:</strong> {{ $value }}</p>
                    @endforeach
                @else
                    <p>No additional details available.</p>
                @endif

                <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>

    @include('admin.script')
</div>
</body>
</html>
