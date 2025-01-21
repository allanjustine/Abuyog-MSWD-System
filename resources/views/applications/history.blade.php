<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application History</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <!-- Custom Styling -->
    <style>
        body {
            background-color: #f7f9fc; /* Light blue-gray for eye comfort */
            font-family: Arial, sans-serif;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color:rgb(163, 2, 2); /* Blue header */
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            padding: 15px;
            display: flex;
            justify-content: space-between; /* Align title and button horizontally */
            align-items: center; /* Vertically center items */
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .btn-back {
            background-color:rgb(17, 16, 14); /* Yellow button for distinction */
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            padding: 5px 15px;
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color:rgb(31, 26, 13);
            color: white;
        }

        .card-body p {
            font-size: 1rem;
            margin: 0.5rem 0;
        }

        .card-footer {
            background-color:rgb(163, 2, 2); /* Light footer background */
            text-align: right;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        @media (max-width: 768px) {
            .btn-back {
                font-size: 0.8rem; /* Adjust button size for smaller screens */
                padding: 5px 10px;
            }

            .card-header {
                flex-wrap: wrap; /* Allow the button to stack below title if necessary */
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <!-- Left-aligned title -->
                <span>Application Details</span>

                <!-- Right-aligned back button -->
                <a href="{{ url()->previous() }}" class="btn btn-back">
                    Back
                </a>
            </div>
            <div class="card-body">
                <p><strong>Program Name:</strong> {{ $application->service->name ?? 'No Service Assigned' }}</p>
                <p><strong>Phone:</strong> {{ $application->phone }}</p>
                <p><strong>Status:</strong> {{ $application->status }}</p>
                <p><strong>Date Applied:</strong>
                    {{ \Carbon\Carbon::parse($application->created_at)->format('F d, Y') }}</p>
                <p><strong>Approved By:</strong> {{ $application->employee_name ?? 'Pending' }}</p>

                <!-- Schedule for Personal Appearance -->
                @if ($application->status !== 'cancelled')
                    <p><strong>Schedule for Personal Appearance:</strong>
                        @if ($application->appearance_date)
                            {{ \Carbon\Carbon::parse($application->appearance_date)->format('F d, Y') }}
                        @else
                            {{ \Carbon\Carbon::parse($application->date_applied)->format('F d, Y') }}
                        @endif
                    </p>
                @endif

                <!-- Reason for Cancelling -->
                @if ($application->status === 'cancelled')
                    <p><strong>Reason for Cancelling:</strong>
                        {{ $application->cancellation_reason ?? 'No reason provided.' }}</p>
                @endif

                <!-- Requirements -->
                @if ($application->status === 'approved')
                    <p><strong>Requirements to Bring:</strong></p>
                    <ul>
                        @if ($application->service->id == 1)
                            <li>Valid ID</li>
                            <li>Accomplished Certification and Authorization</li>
                            <li>Certificate of Existence</li>
                            <li>Fully accomplished Application Form</li>
                        @elseif ($application->service->id == 2)
                            <li>Updated Barangay Certificate</li>
                            <li>1x1 ID Picture</li>
                            <li>Birth Certificate / Voter's Certification</li>
                            <li>Medical Certificate</li>
                            <li>Whole Body picture of PWD applicant</li>
                            <li>Fully accomplished Application Form</li>
                        @elseif ($application->service->id == 3)
                            <li>Certificate of No Marriage (CENMAR)</li>
                            <li>2×2 Photo</li>
                            <li>Fully accomplished Application Form</li>
                            <li>PSA Birth Certificate/s</li>
                            <li>Spouse’s Death Certificate</li>
                            <li>Certificate of Annulment/Nullity of Marriage</li>
                            <li>Income Tax Return (ITR) or Document Showing Income Level</li>
                            <li>Barangay Certificate</li>
                            <li>Proof of Financial Status</li>
                            <li>Supporting Documents/Certificates</li>
                        @elseif ($application->service->id == 4)
                            <li>Proof of barangay indigency or residency for the claimant</li>
                            <li>Valid identification of the claimant</li>
                            <li>Fully accomplished Application Form</li>
                        @else
                            <li>No specific requirements</li>
                        @endif
                    </ul>
                @endif
            </div>
            <div class="card-footer">
                <!-- Footer section -->
            </div>
        </div>
    </div>
</body>

</html>
