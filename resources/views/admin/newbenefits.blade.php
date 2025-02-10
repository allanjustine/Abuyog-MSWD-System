<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Assistance to Beneficiaries</title>

    @include('admin.css')
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

        @include('admin.sidebar')

        @include('admin.navbar')

        <div class="container">
            <div class="card" align="center" style="padding-top:80px;">
                <div class="card-header">
                    Add New Assistance to Selected Beneficiaries

                </div>


                <div class="container mt-4">
                    <!-- Add Assistance Button -->
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-info btn-lg" data-bs-toggle="modal"
                            data-bs-target="#addselectedAssistanceModal" style="width: 60%;">
                            Add New Assistance
                        </button>
                    </div>
                </div>






                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Assistance Name</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Date Received</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assistanceList as $assistance)
                                <tr>
                                    <td>{{ $assistance->name_of_assistance }}</td>
                                    <td>{{ $assistance->type_of_assistance }}</td>
                                    <td>{{ $assistance->amount }}</td>
                                    <td>{{ $assistance->date_received ?? 'Not Yet Received' }}</td>
                                    <td>
                                        <button class="btn btn-primary generate-beneficiaries-btn"
                                            data-assistance="{{ $assistance->name_of_assistance }}" data-bs-toggle="modal"
                                            data-bs-target="#addAssistanceModal">
                                            Generate
                                        </button>
                                        <button class="btn btn-success send-sms-btn d-none">
                                            Send SMS
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="modal fade" id="addAssistanceModal" tabindex="-1" aria-labelledby="addAssistanceLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <!-- Align the search form to the right -->
                        <form action="/add_assistance" method="GET" class="mt-3" id="addAssistanceForm">
                            @csrf
                            <div class="modal-content">
                                <h5 style="margin-top:5%;">Filter Beneficiaries by New Assistance</h5>
                                <div class="row" style="padding: 0 15px;">
                                    <div class="col-md-6 mb-3">
                                        <label for="min_age" class="form-label" style="margin-top: 5%;">Age
                                            From</label>
                                        <input type="number" class="form-control" id="min_age" name="min_age"
                                            min="0">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="max_age" class="form-label" style="margin-top: 5%;">Age To</label>
                                        <input type="number" class="form-control" id="max_age" name="max_age"
                                            min="0">
                                    </div>
                                </div>
                                <div class="row" style="padding: 0 15px;">
                                    <div class="col-md-6 mb-3">
                                        <label for="limit" class="form-label" style="margin-top: 5%;">Limit of
                                            Beneficiaries that will receive the assistance</label>
                                        <input type="number" class="form-control" id="limit" name="limit">
                                    </div>
                                    <!-- Service Section -->
                                    <div class="col-md-6 mb-3">
                                        <label for="service_id" class="form-label" style="margin-top: 5%;">Select
                                            Programs (if applicable)</label>
                                        <div class="p-1 border rounded" style="margin-top:5%;">
                                            <select name="service_id" id="service_id" class="form-control">
                                                <option value="">-- Select Service --</option>
                                                @foreach ($services as $service)
                                                    <option value="{{ $service->id }}"
                                                        {{ request('service_id') == $service->id ? 'selected' : '' }}>
                                                        {{ $service->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding: 0 15px;">
                                    <div class="col-md-6 mb-3">
                                        <label for="name_of_assistance" class="form-label"
                                            style="margin-top: 5%;">Exclude Beneficiaries Who Received
                                            Assistance Before</label>
                                        <select name="name_of_assistance[]" id="name_of_assistance"
                                            class="form-control" multiple style="height: 200px;">
                                            @foreach ($assistanceList as $assistance)
                                                <option value="{{ $assistance }}"
                                                    {{ isset($nameOfAssistance) && in_array($assistance, (array) $nameOfAssistance) ? 'selected' : '' }}>
                                                    {{ $assistance }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <small class="text-muted">Hold Ctrl (Windows) or Cmd (Mac) to select multiple
                                            options.</small>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="barangaySelect" class="form-label" style="margin-top: 5%;">Select
                                            Barangay (if applicable)</label>
                                        <div class="p-1 border rounded" style="margin-top:5%;">
                                            <select name="barangay" id="barangaySelect" class="form-control">
                                                <option value="">-- Select Barangay --</option>
                                                @foreach ($barangays as $barangay)
                                                    <option value="{{ $barangay->id }}"
                                                        {{ request('barangay') == $barangay->id ? 'selected' : '' }}>
                                                        {{ $barangay->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="beneficiaryList" class="mt-3">
                                    <!-- Filtered beneficiaries will be dynamically added here -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success" id="submitButton">Generate
                                        Beneficiaries</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: '<span style="color: #000;">Success</span>', // Make title text black
                    text: '{{ session('success') }}',
                    background: '#f8f9fa', // Light gray background for better contrast
                    iconColor: '#28a745', // Green icon color
                    confirmButtonColor: '#28a745', // Button matches success color
                    customClass: {
                        popup: 'swal-custom-popup' // Add a class to customize further with CSS
                    }
                });
            @endif
        </script>

        <!-- Optional CSS for Further Customization -->
        <style>
            .swal-custom-popup {
                padding: 20px !important;
                /* Adjust padding */
            }

            .swal2-icon {
                margin-top: 20px !important;
                /* Push icon lower */
            }

            .swal2-title {
                font-size: 1.5rem !important;
                /* Adjust title font size */
                margin-top: 10px !important;
                /* Add some spacing above title */
            }

            .swal2-content {
                font-size: 1rem !important;
                /* Adjust text font size */
            }
        </style>




        <script>
            $(document).ready(function () {
                // When the modal is opened, collect the filtered beneficiaries
                $('#addselectedAssistanceModal').on('show.bs.modal', function () {
                    // Collect the filtered beneficiaries from the DOM (you can adjust this based on your filter result display)
                    let filteredBeneficiaries = [];
                    // Loop through your table rows and check if they are part of the filtered list
                    $('table tbody tr').each(function () {
                        // Assuming rows with filtered beneficiaries have a specific class or identifier
                        if ($(this).hasClass('filtered')) { // Adjust this condition as needed
                            filteredBeneficiaries.push($(this).data('id'));
                        }
                    });

                    // Set the hidden input with the beneficiary IDs
                    $('#beneficiary_ids').val(filteredBeneficiaries.join(','));
                });
            });
        </script>





        <script>
            document.querySelectorAll('.generate-beneficiaries-btn').forEach(button => {
                button.addEventListener('click', function () {
                    const assistanceName = this.dataset.assistance;
                    document.querySelector('#beneficiaryForm').dataset.assistance = assistanceName;
                });
            });

            document.querySelector('#beneficiaryForm').addEventListener('submit', function (e) {
                e.preventDefault();
                const assistanceName = this.dataset.assistance;

                // Example AJAX call to generate beneficiaries
                const selectedBeneficiaries = []; // Example selection

                fetch('/generate-beneficiaries', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ assistance_name: assistanceName, beneficiary_ids: selectedBeneficiaries })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Beneficiaries generated successfully');
                            // Show the Send SMS button
                            document.querySelector('.send-sms-btn').classList.remove('d-none');
                        }
                    });
            });
        </script>

        @include('admin.script')
</body>

</html>
