<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitor the Release of Assistance or Benefits</title>

    @include('employee.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <style>
            .swal2-title {
                color: black !important;
            }
        </style>
</head>

<body>
    <div class="container-scroller">

        @include('employee.sidebar')

        @include('employee.navbar')

        <div class="container">
            <div class="card" align="center" style="padding-top:80px;">
                <div class="card-header">
                    Monitor the Release of Assistance or Benefits
                </div>
                <form class="mb-3">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name_of_assistance" class="form-label" style="margin-top: 5%;">Filter
                                Beneficiaries by the name of Assistance</label>
                            <select name="name_of_assistance" id="name_of_assistance" class="form-control">
                                <option value="">-- Select Assistance --</option>
                                @foreach ($assistances as $assistance)
                                <option value="{{ $assistance->name_of_assistance }}" {{
                                    $nameOfAssistance==$assistance->name_of_assistance ? 'selected' : '' }}>
                                    {{ $assistance->name_of_assistance }}
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
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Program Enrolled</th>
                                <th>Barangay</th>
                                <th>Total Benefits Have</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($beneficiaries as $beneficiary)
                            <tr>
                                <td>{{ $beneficiary->id }}</td>
                                <td>{{ $beneficiary->first_name }}</td>
                                <td>{{ $beneficiary->middle_name }}</td>
                                <td>{{ $beneficiary->last_name }}</td>
                                <td>{{ $beneficiary->email }}</td>
                                <td>{{ $beneficiary->phone }}</td>
                                <td>{{ $beneficiary->service ? $beneficiary->service->name : 'No Program' }}</td>
                                <td>{{ $beneficiary->barangay->name ?? 'No Barangay' }}</td>
                                <td>
                                    <strong>Total: </strong>{{ $beneficiary->benefitsReceived->count() }} <br>
                                    <strong>
                                        Pending:
                                    </strong>
                                    {{ $beneficiary->benefitsReceived->where('status', 'Pending')->count() }} <br>
                                    <strong>
                                        Received:
                                    </strong>
                                    {{ $beneficiary->benefitsReceived->where('status', 'Received')->count() }} <br>
                                    <strong>
                                        Not Received:
                                    </strong>
                                    {{ $beneficiary->benefitsReceived->where('status', 'Not Received')->count() }} <br>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-around">
                                        <!-- View Button -->
                                        <button class="btn btn-info btn-sm" type="button" data-bs-toggle="modal"
                                            data-bs-target="#viewModal{{ $beneficiary->id }}">
                                            View
                                        </button>
                                    </div>
                                </td>


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
                                                                value="{{ $beneficiary?->date_of_birth?->format('F d, Y') }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Age:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->age }}" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label><strong>Gender:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->gender }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Civil Status:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $beneficiary->civil_status }}" disabled>
                                                        </div>
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
                                                        <div class="form-group">
                                                            <label><strong>Name of Assistance:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $benefit->assistance->name_of_assistance }}"
                                                                disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Type of Assistance:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $benefit->assistance->type_of_assistance }}"
                                                                disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Amount:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $benefit->assistance->amount }}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><strong>Date Received:</strong></label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $benefit?->date_received?->format('F d, Y \a\t h:i A') ?? 'Not Yet Received' }}"
                                                                disabled>
                                                        </div>

                                                        <!-- Conditional Action Buttons -->
                                                        @if ($benefit->status === 'Pending')
                                                        <!-- Mark as Received Button -->
                                                        <form
                                                            action="{{ route('benefits.markReceived', $benefit->id) }}"
                                                            method="POST" style="display: inline;">
                                                            @csrf
                                                            <button type="submit" class="btn btn-success">Mark as
                                                                Received</button>
                                                        </form>

                                                        <!-- Mark as Not Received Button -->
                                                        <form
                                                            action="{{ route('benefits.markNotReceived', $benefit->id) }}"
                                                            method="POST" style="display: inline;">
                                                            @csrf
                                                            <button type="submit" class="btn btn-warning">Mark as Not
                                                                Received</button>
                                                        </form>
                                                        @elseif ($benefit->status === 'Received')
                                                        <button type="button" class="btn btn-success"
                                                            disabled>Received</button>
                                                        @elseif ($benefit->status === 'Not Received')
                                                        <button type="button" class="btn btn-danger" disabled>Not
                                                            Received</button>
                                                        @endif

                                                        <hr class="my-4">
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
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10" class="text-center">{{ request()->has('name_of_assistance') ? 'No assistance found' : 'No assistance added yet' }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Attach event listeners to buttons
            document.querySelectorAll('.mark-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const form = this.closest('.mark-form'); // Find the related form
                    const action = this.getAttribute(
                        'data-action'); // Get the action type (Received/Not Received)

                    Swal.fire({
                        title: 'Are you sure?',
                        text: `Mark this benefit as "${action}"?`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: action === 'Received' ? '#28a745' : '#ffc107',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, confirm it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit(); // Submit the form if confirmed
                        }
                    });
                });
            });

            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('success') }}',
                    background: '#f8f9fa',
                    confirmButtonColor: '#28a745'
                });
            @endif
        });
    </script>

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


    @include('employee.script')
</body>

</html>
