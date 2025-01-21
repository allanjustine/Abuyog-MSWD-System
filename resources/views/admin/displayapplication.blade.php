<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Applications</title>

    @include('admin.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.navbar')

        <div class="container">
            <div class="card" align="center" style="padding-top:80px;">
                <div class="card-header">
                    <a>All Applications</a>
                </div>
                <!-- Align the search form to the right -->
                <div class="d-flex justify-content-end align-items-center">
                    <form action="{{ route('application.search') }}" method="GET" class="d-flex">
                        @csrf
                        <input type="text" name="search" class="form-control me-2" placeholder="Search..."
                            value="{{ request()->search }}" style="max-width: 300px;">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>



                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Beneficiary Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Services Applied</th>
                                <th>Date Applied</th>
                                <th>Status</th>
                                <th>Approved By</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $apply)
                                <tr>
                                    <td>{{ $apply->name }}</td>
                                    <td>{{ $apply->email }}</td>
                                    <td>{{ $apply->phone }}</td>
                                    <td>{{ $apply->service->name ?? 'No Service Assigned' }}</td>
                                    <td>{{ $apply->date_applied }}</td>
                                    <td>
                                        <span class="badge
                                                            @if ($apply->status == 'approved') bg-success
                                                            @elseif ($apply->status == 'rejected') bg-danger
                                                            @elseif ($apply->status == 'pending') bg-info
                                                            @else bg-secondary @endif">
                                            {{ $apply->status }}
                                        </span>
                                    </td>
                                    <td>{{ $apply->employee_name ?? 'Pending' }}</td>
                                    <td>
                                        <!-- View Button -->
                                        <a href="{{ route('admin.application.view', $apply->id) }}" class="btn btn-info">
                                            View
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center mt-3">
                        {{ $data->links() }}
                    </div>

                </div>
        </div>
    </div>

    @include('admin.script')
    </div>
</body>

</html>