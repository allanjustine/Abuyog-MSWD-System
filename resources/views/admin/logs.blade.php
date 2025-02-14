<!DOCTYPE html>
<html lang="en">
@laravelPWA

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="bg-white container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->

        @include('admin.navbar')
        <!-- partial -->

        <div class="container" style="margin-top: 100px;">
            <div class="bg-white card">
                <div class="card-header">
                    <h1 class="text-center text-black fw-bold fs-2">
                        ALL LOGS
                    </h1>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="logsTable">
                            <thead class="thead-light">
                                <tr>
                                    <th>Logger</th>
                                    <th>Beneficiary ID</th>
                                    <th>Log Entry</th>
                                    <th>Timestamp</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($logs as $log)
                                <tr>
                                    <td>{{ $log->user->full_name }}</td>
                                    <td>{{ $log->beneficiary->id }}</td>
                                    <td ><p class="text-wrap text-break">{{ $log->log_entry }}</p></td>
                                    <td>{{ $log->created_at->format('d M, Y H:i A') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>

</html>