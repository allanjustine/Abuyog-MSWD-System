<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficiaries Report</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            line-height: 1.5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
            margin-top: 40px;
            /* Added margin-top to create space at the top */
        }

        .header img {
            position: absolute;
            top: 0;
            left: 0;
            width: 80px;
            height: 80px;
            /* Set the height to match width for a round shape */
            border-radius: 50%;
            /* Make the logo round */
        }

        .header .title h1,
        .header .title h2,
        .header .title h3,
        .header .title h4 {
            margin: 5px 0;
        }

        .header h1 {
            font-size: 15pt;
            font-weight: bold;
        }

        .header h2,
        {
        font-size: 15pt;
        }

        .header h3,
        {
        font-size: 12pt;
        }

        .header h4 {
            font-size: 15pt;
            margin-top: 10px;
        }

        .details {
            margin: 20px 0;
            text-align: left;
            font-size: 12pt;
        }

        .details p {
            margin: 10px 0;
        }

        /* Added margin line box before the form */
        .margin-line-box {
            margin-top: 20px;
            /* Space between content above */
            margin-bottom: 20px;
            /* Space below the box */
            border-top: 2px solid #000;
            /* Top border line */
            border-bottom: 2px solid #000;
            /* Bottom border line */
            padding: 10px 0;
            /* Padding inside the box */
            text-align: center;
        }

        table {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            border-collapse: collapse;
            font-size: 9pt;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            text-align: center;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tfoot {
            text-align: right;
            font-size: 10pt;
        }

        footer {
            margin-top: 30px;
            text-align: center;
            font-size: 10pt;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <div class="header">
        <img src="assets/img/logo.jpg" alt="logo" <div class="title">
        <h1>Republic of the Philippines</h1>
        <h2>Office of the President of the Philippiness</h2>
        <h3>Abuyog, Leyte</h3>
        <h4>Beneficiaries Report</h4>
    </div>
    </div>

    <!-- Program and Barangay Details -->
    <div class="details">
        <p><strong>Program:</strong> {{ $selectedService }}</p>
        <p><strong>Barangay:</strong> {{ $selectedBarangay }}</p>
    </div>

    <!-- Added Margin Line Box -->
    <div class="margin-line-box">
        <h3>Beneficiaries Information</h3> <!-- You can modify this as needed -->
    </div>

    <!-- Beneficiaries Table -->
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Program</th>
                <th>Barangay</th>
                <th>Name of Assistance</th>
                <th>Assistance Type</th>
                <th>Amount</th>
                <th>Date Given</th>
            </tr>
        </thead>
        <tbody>
            @php $counter = 1; @endphp
            @forelse ($beneficiaries as $beneficiary)
                @foreach ($beneficiary->benefitReceiveds as $benefit)
                    @if ($benefit->date_received)
                        <tr>
                            <td>{{ $counter++ }}</td> <!-- Sequential numbering -->
                            <td>{{ $beneficiary->full_name }}</td>
                            <td>{{ $beneficiary->phone }}</td>
                            <td>{{ $beneficiary->service->name ?? 'N/A' }}</td>
                            <td>{{ $beneficiary->barangay->name ?? 'N/A' }}</td>
                            <td>{{ $benefit->assistance->name_of_assistance ?? 'N/A' }}</td>
                            <td>{{ $benefit->assistance->type_of_assistance ?? 'N/A' }}</td>
                            <td>{{ number_format($benefit?->assistance?->amount, 2) || "0.00" }}</td>
                            <td>{{ $benefit->date_received }}</td>
                        </tr>
                    @endif
                @endforeach
            @empty
                <tr>
                    <td colspan="8" style="text-align: center;">No beneficiaries found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Footer Section -->
    <footer>
        Report generated on {{ now()->format('F j, Y') }}
    </footer>
</body>

</html>
