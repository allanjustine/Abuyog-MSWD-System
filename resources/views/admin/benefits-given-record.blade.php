<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benefits Given Record</title>

    @include('admin.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-scroller">

        @include('admin.sidebar')

        @include('admin.navbar')

        <div class="container">
            <div class="card" align="center" style="padding-top:80px;">
                <div class="card-header">
                    All Benefits Given Record
                </div>

                <!-- Align the search form to the right -->
                <div class="d-flex justify-content-between">
                    <div class="d-flex gap-2">
                        <form action="/benefits-given-record" method="get" class="mt-5">
                            @csrf
                            From:<input type="date" name="date_start" value="{{ $date_start_filtered }}" class="form-control d-inline-block" style="width: auto;">
                            To:<input type="date" name="date_end" value="{{ $date_end_filtered }}" class="form-control d-inline-block" style="width: auto;">
                            <button type="submit" class="btn btn-primary d-inline-block">Filter</button>
                        </form>
                        <form action="/benefits-given-record" method="get" class="mt-5">
                            @csrf
                            <input type="date" name="date_start" value="" class="form-control d-inline-block d-none" style="width: auto;">
                            <input type="date" name="date_end" value="" class="form-control d-inline-block d-none" style="width: auto;">
                            <button type="submit" class="btn btn-warning d-inline-block">Reset</button>
                        </form>
                    </div>
                    <form action="/benefits-given-record" method="get" class="mt-5">
                        @csrf
                        <input type="search" name="search" placeholder="Search.." value="{{ $search }}" class="form-control d-inline-block" style="width: auto;">
                        <button type="submit" class="btn btn-primary d-inline-block">Search</button>
                    </form>
                </div>
                @if (session('success'))
                <div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                @endif
                <div class="card-body">
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
                            @forelse ($beneficiaries as $beneficiary)
                            <tr>
                                <td>{{ $beneficiary->first_name }}</td>
                                <td>{{ $beneficiary->middle_name }}</td>
                                <td>{{ $beneficiary->last_name }}</td>
                                <td>{{ $beneficiary->email }}</td>
                                <td>{{ $beneficiary->phone }}</td>
                                <td>{{ $beneficiary->service ? $beneficiary->service->name : 'No Program' }}</td>
                                <td>{{ $beneficiary->barangay->name ?? 'No Barangay' }}</td>
                                <td>
                                    <div class="gap-2 d-flex">
                                        <a href="#" class="btn btn-primary btn-sm d-flex justify-items-center" data-bs-toggle="modal" data-bs-target="#viewRecordModal{{ $beneficiary->id }}"><i class="mdi mdi-eye"></i> View Record</a>
                                        @foreach($beneficiary->receiveds as $received)
                                        @if($loop->last && $received->date_expired <= now()) <a href="/apply-benefits/{{ $beneficiary->id }}" class="btn btn-info btn-sm d-flex justify-items-center"><i class="mdi mdi-plus"></i> Apply Benefits</a>
                                            @endif
                                            @endforeach
                                    </div>
                                </td>
                            </tr>


                            <div class="modal fade" id="viewRecordModal{{ $beneficiary->id }}" tabindex="-1" aria-labelledby="viewRecordModal{{ $beneficiary->id }}Label" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="viewRecordModal{{ $beneficiary->id }}Label">{{ $beneficiary->first_name }} {{ $beneficiary->last_name }}&apos;s benefits record</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <!-- Table Header -->
                                                <div class="text-white row bg-primary font-weight-bold">
                                                    <div class="p-2 col-3">Item Type</div>
                                                    <div class="p-2 col-3">Remarks</div>
                                                    <div class="p-2 col-3">Date Received</div>
                                                    <div class="p-2 col-3">Date Expired</div>
                                                </div>

                                                @foreach ($beneficiary->receiveds as $received)

                                                <div class="row border-bottom">
                                                    <div class="p-2 col-3">{{ $received->item_type }}</div>
                                                    <div class="p-2 col-3">{{ $received->remarks }}</div>
                                                    <div class="p-2 col-3">{{ $received->date_received->format('F d, Y') }}</div>
                                                    <div class="p-2 col-3">{{ $received->date_expired->format('F d, Y') }}</div>
                                                </div>

                                                @endforeach
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <tr>
                                <td colspan="8">
                                    <p class="text-center">
                                        {{ $search ? "No results found" : "No records found" }}
                                    </p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @include('admin.script')
</body>

</html>
