<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display all the Benefits or Assistance Received each Beneficiaries</title>

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
                    Display all the Benefits or Assistance Received each Beneficiaries
                </div>




                <form action="{{ route('filterBenefitsReceivedOperator') }}" method="GET" class="mb-3">
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
                        <div class="col-md-6 d-flex justify-content-end align-items-end">
                            <button type="submit" class="btn btn-primary">Generate</button>
                        </div>

                    </div>
                </form>




                <div class="table-responsive">
                    <table class="table table-sm table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Program Enrolled</th>
                                <th>Barangay</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($beneficiaries as $beneficiary)
                                <tr>

                                    <td>{{ $beneficiary->first_name }}</td>
                                    <td>{{ $beneficiary->middle_name }}</td>
                                    <td>{{ $beneficiary->last_name }}</td>
                                    <td>{{ $beneficiary->email }}</td>
                                    <td>{{ $beneficiary->phone }}</td>
                                    <td>{{ $beneficiary->service ? $beneficiary->service->name : 'No Program' }}</td>
                                    <td>{{ $beneficiary->barangay->name ?? 'No Barangay' }}</td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            <!-- View Button -->
                                            <button class="btn btn-info btn-sm" type="button" data-bs-toggle="modal"
                                                data-bs-target="#viewModal{{ $beneficiary->id }}">
                                                View
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- View Modal -->
                                <div class="modal fade" id="viewModal{{ $beneficiary->id }}" tabindex="-1"
                                    aria-labelledby="viewModalLabel{{ $beneficiary->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewModalLabel{{ $beneficiary->id }}">
                                                    Beneficiary Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label><strong>First Name:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->first_name }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Middle Name:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->middle_name ?? 'N/A' }}"
                                                                disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Last Name:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->last_name }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Email:</strong></label>
                                                            <input type="email" class="form-control"
                                                                value="{{ $beneficiary->email }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Monthly Income:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->monthly_income ?? 'N/A' }}"
                                                                disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Gender:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->gender }}" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label><strong>Phone:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->phone }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Program Enrolled:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->service ? $beneficiary->service->name : 'No Program' }}"
                                                                disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Barangay:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->barangay->name ?? 'No Barangay' }}"
                                                                disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Date of Birth:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->date_of_birth }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Age:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->age }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Civil Status:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->civil_status }}" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">


                                                        <div class="form-group">
                                                            <label><strong>ID Number:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->id_number }}" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Assistance Details -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h5><strong>Assistance Received:</strong></h5>
                                                        @foreach ($beneficiary->benefitsReceived as $benefit)
                                                            <div class="row mb-3">
                                                                <!-- Name of Assistance -->
                                                                <div class="col-md-3">
                                                                    <label><strong>Name of Assistance:</strong></label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $benefit->name_of_assistance }}"
                                                                        disabled>
                                                                </div>
                                                                <!-- Type of Assistance -->
                                                                <div class="col-md-3">
                                                                    <label><strong>Type of Assistance:</strong></label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $benefit->type_of_assistance }}"
                                                                        disabled>
                                                                </div>
                                                                <!-- Amount -->
                                                                <div class="col-md-3">
                                                                    <label><strong>Amount:</strong></label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $benefit->amount }}" disabled>
                                                                </div>
                                                                <!-- Date Received -->
                                                                <div class="col-md-3">
                                                                    <label><strong>Date Received:</strong></label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $benefit->date_received ?? 'Not Yet Received' }}"
                                                                        disabled>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                </div>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            // When the modal is opened, collect the filtered beneficiaries
            $('#addselectedAssistanceModal').on('show.bs.modal', function() {
                // Collect the filtered beneficiaries from the DOM (you can adjust this based on your filter result display)
                let filteredBeneficiaries = [];
                // Loop through your table rows and check if they are part of the filtered list
                $('table tbody tr').each(function() {
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


    @include('operator.script')
</body>

</html>
