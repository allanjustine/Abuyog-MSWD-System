<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Assistance to Beneficiaries</title>

    @if(Auth::user()->usertype === 'admin')
    @include('admin.css')
    @elseif(Auth::user()->usertype === 'operator')
    @include('operator.css')
    @else
    @include('employee.css')
    @endif
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

        @if(Auth::user()->usertype === 'admin')
        @include('admin.sidebar')
        @include('admin.navbar')
        @elseif(Auth::user()->usertype === 'operator')

        @include('operator.sidebar')

        @include('operator.navbar')
        @else
        @include('employee.sidebar')

        @include('employee.navbar')

        @endif

        <div class="container">
            <div class="card" align="center" style="padding-top:80px;">
                <div class="card-header">
                    Add New Assistance to Selected Beneficiaries

                </div>


                <div class="container mt-4">
                    @if (session('success'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <!-- Add Assistance Button -->
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-info btn-lg" data-bs-toggle="modal"
                            data-bs-target="#addNewAssistanceModal">
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
                                <th>Date Given</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($assistanceList as $assistance)
                            <tr>
                                <td>{{ $assistance->name_of_assistance }}</td>
                                <td>{{ $assistance->type_of_assistance }}</td>
                                <td>{{ $assistance->amount }}</td>
                                <td>{{ $assistance->date_received?->format('F d, Y') ?? 'Not Yet Given' }}</td>
                                <td>
                                    @if ($assistance->date_received == null)
                                    <button class="btn btn-primary generate-beneficiaries-btn" type="button"
                                        data-bs-toggle="modal"
                                        data-bs-target="#addAssistanceModal{{ $assistance->id }}">
                                        Generate
                                    </button>
                                    @else
                                    <button class="btn btn-info generate-beneficiaries-btn" type="button"
                                        data-bs-toggle="modal"
                                        data-bs-target="#viewAssistanceModal{{ $assistance->id }}">
                                        View
                                    </button>
                                    @endif
                                    <button class="btn btn-success send-sms-btn d-none">
                                        Send SMS
                                    </button>
                                </td>

                                <script>
                                    $(document).ready(function () {
                                        $("#getBeneficiaries{{ $assistance->id }}").on('submit', function (event) {
                                            event.preventDefault();

                                            var $modal = $(this).closest('.modal');

                                            $('#generateButton', $modal).prop('disabled', true).html('Loading... <i class="fa fa-spinner fa-spin"></i>');

                                            var formData = $(this).serialize();

                                            $.ajax({
                                                url: '/get-beneficiaries',
                                                method: 'GET',
                                                data: formData,
                                                success: function (response) {
                                                    if (response && response.beneficiaries && Array.isArray(response.beneficiaries)) {
                                                        var tableHtml = `
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Age</th>
                                                                        <th>Barangay</th>
                                                                        <!-- Add more columns if needed -->
                                                                    </tr>
                                                                </thead>
                                                                <tbody>`;

                                                        response.beneficiaries.forEach(function (beneficiary) {
                                                            tableHtml += `
                                                                <tr>
                                                                    <td>${beneficiary.name}</td>
                                                                    <td>${beneficiary.age || 'N/A'}</td> <!-- Display 'N/A' if age is null -->
                                                                    <td>${beneficiary.barangay}</td>
                                                                </tr>`;
                                                        });

                                                        tableHtml += `</tbody></table>`;

                                                        $("#beneficiaryList", $modal).html(tableHtml);

                                                        var total = `<p class="fw-bold fs-3">Total Generated Beneficiaries: ${response.totalBeneficiaries}</p>`;
                                                        $("#totalGenerated", $modal).html(total);

                                                        var beneficiaryIds = response.beneficiary_ids.join(',');
                                                        $("input[name='beneficiary_ids_data[]']", $modal).val(beneficiaryIds);

                                                        $('#generateButton', $modal).html('Generate Beneficiaries').prop('disabled', false);
                                                        console.log(response.beneficiary_ids)
                                                    } else {
                                                        alert("No beneficiaries found or invalid response.");
                                                        $('#generateButton', $modal).html('Generate Beneficiaries').prop('disabled', false);
                                                    }
                                                },
                                                error: function (xhr, status, error) {
                                                    alert("There was an error processing the request. Please try again.");
                                                    $('#generateButton', $modal).html('Generate Beneficiaries').prop('disabled', false);
                                                }
                                            });
                                        });
                                    });

                                </script>

                                <div class="modal fade" id="addAssistanceModal{{ $assistance->id }}" tabindex="-1"
                                    aria-labelledby="addAssistanceLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Align the search form to the right -->
                                        <div class="modal-content">
                                            <div class="moday-body" style="max-height: 75vh; overflow-y: auto; overflow-x: hidden;">
                                                <form action="/get-beneficiaries" method="GET" class="mt-3"
                                                    id="getBeneficiaries{{ $assistance->id }}">
                                                    @csrf
                                                    <h5 style="margin-top:5%;">Filter Beneficiaries by New Assistance
                                                        (<strong>{{ $assistance->name_of_assistance }}</strong>)</h5>
                                                    <div class="row form-row align-items-center justify-content-center"
                                                        style="padding: 0 15px;">
                                                        <div class="mt-4 mb-3 col-md-4">
                                                            <label for="min_age" class="form-label"
                                                                style="margin-top: 5%;">Age
                                                                From</label>
                                                            <input type="number" class="form-control" id="min_age"
                                                                name="min_age" min="0">
                                                        </div>
                                                        <div class="mt-4 mb-3 col-md-4">
                                                            <label for="max_age" class="form-label"
                                                                style="margin-top: 5%;">Age
                                                                To</label>
                                                            <input type="number" class="form-control" id="max_age"
                                                                name="max_age" min="0">
                                                        </div>

                                                        <div class="mb-3 col-md-4">
                                                            <label for="limit" class="form-label"
                                                                style="margin-top: 5%;">Limit
                                                                of
                                                                Beneficiaries that will receive the assistance</label>
                                                            <input type="number" class="form-control" id="limit"
                                                                name="limit">
                                                        </div>
                                                    </div>
                                                    <div class="row" style="padding: 0 15px;">
                                                        <!-- Service Section -->
                                                        <div class="col-md-6">
                                                            <label for="service_id" class="form-label"
                                                                style="margin-top: 5%;">Select
                                                                Programs (if applicable)</label>
                                                            <div class="p-1 border rounded" style="margin-top:5%;">
                                                                <select name="service_ids[]" id="service_id" multiple
                                                                    style="height: 200px;" class="form-control">
                                                                    <option value="">-- Select Service --</option>
                                                                    @foreach ($services as $service)
                                                                    <option value="{{ $service->id }}" {{
                                                                        request('service_id')==$service->id ? 'selected'
                                                                        :
                                                                        ''
                                                                        }}>
                                                                        {{ $service->name }}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <small class="text-muted">Hold Ctrl (Windows) or Cmd (Mac)
                                                                to
                                                                select
                                                                multiple
                                                                options.</small>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="assistance_ids" class="form-label"
                                                                style="margin-top: 5%;">Exclude Beneficiaries Who
                                                                Received
                                                                Assistance Before</label>
                                                            <div class="p-1 border rounded">
                                                                <select name="assistance_ids[]" id="assistance_ids"
                                                                class="form-control" multiple style="height: 200px;">
                                                                @foreach ($assistanceList->whereNotIn('id',
                                                                [$assistance->id]) as $assistance2)
                                                                <option value="{{ $assistance2->id }}" {{
                                                                    in_array($assistance2->id, old('assistance_ids',
                                                                    []))
                                                                    ?
                                                                    'selected' : '' }}>
                                                                    {{ $assistance2->name_of_assistance }}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                            </div>
                                                            <small class="text-muted">Hold Ctrl (Windows) or Cmd (Mac)
                                                                to
                                                                select
                                                                multiple
                                                                options.</small>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="padding: 0 15px;">

                                                        <div class="mb-3 col-md-12">
                                                            <label for="barangaySelect" class="form-label"
                                                                style="margin-top: 5%;">Select
                                                                Barangay (if applicable)</label>
                                                            <div class="p-1 border rounded" style="margin-top:5%;">
                                                                <ul class="gap-2 p-1 m-3 d-flex justify-content-start align-items-start flex-column"
                                                                    style="height: 200px; overflow-y: auto;"
                                                                    class="w-100">
                                                                    @foreach ($barangays as $barangay)
                                                                    <li>
                                                                        <input style="width: 20px; height: 20px;"
                                                                            type="checkbox"
                                                                            id="barangay_{{ $barangay->id }}"
                                                                            value="{{ $barangay->id }}"
                                                                            name="barangay_ids[]" {{
                                                                            request('barangay')==$barangay->id ?
                                                                        'checked' : ''}}>
                                                                        <label for="barangay_{{ $barangay->id }}">{{
                                                                            $barangay->name }}</label>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center" id="totalGenerated">
                                                    </div>
                                                    <div id="beneficiaryList" class="mt-3">
                                                        <!-- Filtered beneficiaries will be dynamically added here -->
                                                    </div>
                                                    <div class="mb-3 d-flex justify-content-center">
                                                        <button class="btn btn-primary" type="submit"
                                                            id="generateButton">Generate Beneficiaries</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <form action="/add-benefits/{{ $assistance->id }}" method="POST"
                                                id="addBenefits{{ $assistance->id }}">
                                                @csrf
                                                <input type="hidden" value="" name="beneficiary_ids_data[]">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success" id="submitButton">Add
                                                        Assistance</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            <div class="modal fade" id="viewAssistanceModal{{ $assistance->id }}" tabindex="-1"
                                aria-labelledby="viewAssistanceModal{{ $assistance->id }}Label" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5"
                                                id="viewAssistanceModal{{ $assistance->id }}Label">Viewing <strong>{{
                                                    $assistance->name_of_assistance }}</strong> beneficiary received.
                                                @if ($assistance->date_received !== null)
                                                In a total of {{ $assistance->benefitReceiveds->count() }}
                                                @endif. That given on <strong>{{
                                                    $assistance?->date_received?->format('F d, Y') ?? "No record yet"
                                                    }}</strong></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" style="max-height: 75vh; overflow-y: auto;">
                                            <div class="container">
                                                <div class="row bg-light">
                                                    <div class="py-2 border col-4"><strong>Beneficiary Name</strong>
                                                    </div>
                                                    <div class="py-2 border col-4"><strong>Amount</strong></div>
                                                    <div class="py-2 border col-4"><strong>Status</strong></div>
                                                </div>

                                                @forelse ($assistance->benefitReceiveds as $benefitsReceived)
                                                <div class="row">
                                                    <div class="py-2 border col-4">{{
                                                        $benefitsReceived->beneficiary->full_name }}</div>
                                                    <div class="py-2 border col-4">{{
                                                        $benefitsReceived->assistance->amount }}</div>
                                                    <div class="py-2 border col-4">
                                                        @if ($benefitsReceived->status === 'Pending')
                                                        <span class="badge rounded-pill bg-warning">{{
                                                            $benefitsReceived->status }}</span>
                                                        @elseif($benefitsReceived->status === 'Not Received')
                                                        <span class="badge rounded-pill bg-danger">{{
                                                            $benefitsReceived->status }}</span>
                                                        @else
                                                        <span class="badge rounded-pill bg-primary">{{
                                                            $benefitsReceived->status }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                @empty
                                                <div class="row">
                                                    <div class="py-2 text-center border col-12">No Data Yet</div>
                                                </div>
                                                @endforelse
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">No Assistance added yet</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="modal fade" id="addNewAssistanceModal" tabindex="-1"
                        aria-labelledby="addNewAssistanceModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="/add-new-assistance" method="POST">
                                    @csrf
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="addNewAssistanceModalLabel">Add New Assistance
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-row row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="name_of_assistance">Name of Assistance</label>
                                                    <input type="text" class="form-control" id="name_of_assistance"
                                                        name="name_of_assistance" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="type_of_assistance">Type of Assistance</label>
                                                    <select id="type_of_assistance" name="type_of_assistance"
                                                        class="form-select" required>
                                                        <option value="" selected hidden>Type of Assistance</option>
                                                        <option value="" disabled>Type of Assistance</option>
                                                        <option value="Financial Assistance">Financial Assistance
                                                        </option>
                                                        <option value="Medical Assistance">Medical Assistance</option>
                                                        <option value="Educational Assistance">Educational Assistance
                                                        </option>
                                                        <option value="Food Assistance">Food Assistance</option>
                                                        <option value="Shelter Assistance">Shelter Assistance</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="amount">Amount</label>
                                                    <input class="form-control" id="amount" name="amount"
                                                        type="number" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script>
        @if (session('error'))
                Swal.fire({
                    icon: 'error',
                    title: '<span style="color: #000;">Something went wrong</span>', // Make title text black
                    text: '{{ session('error') }}',
                    background: '#f8f9fa',
                    iconColor: 'red',
                    confirmButtonColor: 'red',
                    customClass: {
                        popup: 'swal-custom-popup'
                    }
                });
            @endif
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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


    {{-- <script>
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
    </script> --}}

    @include('admin.script')
</body>

</html>
