<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>

    @include('operator.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-scroller">

        @include('operator.sidebar')

        @include('operator.navbar')

        <div class="container">
            <div class="card" align="center" style="padding-top:80px;">
                <div class="card-header">
                    Inventory of all the Assistance Given
                </div>




                <form action="{{ route('filterforInventoryOperator') }}" method="GET" class="mb-3">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name_of_assistance" class="form-label" style="margin-top: 5%;">Filter
                                Beneficiaries by Selected Assistance</label>
                            <select name="name_of_assistance" id="name_of_assistance" class="form-control">
                                <option value="">-- Select Assistance --</option>
                                @foreach ($assistanceList as $assistance)
                                    <option value="{{ $assistance }}"
                                        {{ isset($nameOfAssistance) && $nameOfAssistance == $assistance ? 'selected' : '' }}>
                                        {{ $assistance }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        {{--  <div class="col-md-6 d-flex justify-content-end align-items-end">
                            <button type="submit" class="btn btn-primary">Generate</button>
                        </div>  --}}

                    </div>
                </form>



                <!-- Display Total Amount for Selected Assistance -->
                <div id="totalAmountContainer" class="my-3">
                    <strong>Total Amount Received:</strong>
                    <span id="totalAmount">0</span>
                    <br>
                    <strong>Total Amount Not Yet Received:</strong>
                    <span id="totalNotYetReceived">0</span>
                </div>




                <!-- Table to display filtered data -->
                <div class="table-responsive">
                    <table class="table table-sm table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Assistance Name</th>
                                <th>Amount</th>
                                <th>Date Received</th>
                            </tr>
                        </thead>
                        <tbody id="assistanceTableBody">
                            @foreach ($beneficiaries as $beneficiary)
                                @foreach ($beneficiary->benefitsReceived as $benefit)
                                    <tr class="beneficiary-row" data-beneficiary-id="{{ $beneficiary->id }}"
                                        data-assistance-id="{{ $benefit->assistance_id }}"
                                        data-amount="{{ $benefit->amount }}"
                                        data-received="{{ $benefit->date_received ? 'yes' : 'no' }}">
                                        <td>{{ $beneficiary->first_name }} {{ $beneficiary->middle_name ?? '' }}
                                            {{ $beneficiary->last_name }}</td>
                                        <td>{{ $benefit->name_of_assistance }}</td>
                                        <td>{{ $benefit->amount }}</td>
                                        <td>{{ $benefit->date_received ?? 'Not Yet Received' }}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                // Function to calculate the totals for displayed rows
                function calculateTotals() {
                    let totalReceived = 0;
                    let totalNotYetReceived = 0;

                    // Loop through each visible row
                    $('#assistanceTableBody tr:visible').each(function() {
                        let amount = parseFloat($(this).find('td:nth-child(3)').text().trim()) || 0;
                        let isReceived = $(this).data('received') === 'yes';

                        if (isReceived) {
                            totalReceived += amount; // Add to received total
                        } else {
                            totalNotYetReceived += amount; // Add to not yet received total
                        }
                    });

                    // Update the displayed totals
                    $('#totalAmount').text(totalReceived.toFixed(2));
                    $('#totalNotYetReceived').text(totalNotYetReceived.toFixed(2));
                }

                // Filter rows based on the selected assistance and recalculate totals
                $('#name_of_assistance').change(function() {
                    let selectedAssistance = $(this).val();

                    // Show or hide rows based on the selected assistance
                    $('#assistanceTableBody tr').each(function() {
                        let assistanceName = $(this).find('td:nth-child(2)').text().trim();
                        if (selectedAssistance === "" || assistanceName === selectedAssistance) {
                            $(this).show(); // Show matching rows
                        } else {
                            $(this).hide(); // Hide non-matching rows
                        }
                    });

                    // Recalculate totals after filtering
                    calculateTotals();
                });

                // Initial calculation on page load
                calculateTotals();
            });
        </script>




        <!--
        <script>
            $(document).ready(function() {
                // Handle filtering based on assistance selection
                $('#assistanceFilter').change(function() {
                    var selectedAssistanceId = $(this).val();
                    var totalAmount = 0;

                    // Show/hide rows based on selected assistance
                    $('.beneficiary-row').each(function() {
                        var assistanceId = $(this).data('assistance-id');
                        var amount = $(this).data('amount');

                        if (selectedAssistanceId === "" || assistanceId == selectedAssistanceId) {
                            $(this).show(); // Show the row if it matches the selected assistance
                            totalAmount += parseFloat(amount); // Add amount to the total
                        } else {
                            $(this).hide(); // Hide the row if it doesn't match
                        }
                    });

                    // Display the total amount received for the selected assistance
                    $('#totalAmount').text(totalAmount.toFixed(2));
                });
            });
        </script> -->


        @include('operator.script')
</body>

</html>
