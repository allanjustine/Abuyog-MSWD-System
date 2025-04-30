<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS Logs</title>

    @include('employee.css')
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

        @include('employee.sidebar')

        @include('employee.navbar')

        <div class="container">
            <div class="card" align="center" style="padding-top:80px;">
                <div class="card-header">
                    SMS Logs
                </div>
                <div class="table-responsive">
                    <table class="table table-sm table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Phone Number</th>
                                <th>Status</th>
                                <th>Message</th>
                                <th>Sent At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($smsLogs as $log)
                                <tr>
                                    <td>{{ $log->phone_number }}</td>
                                    <td>{{ $log->status }}</td>
                                    <td>
                                        <p class="text-break">{{ $log->message ?? 'No message' }}</p>
                                    </td>
                                    <td>{{ $log->created_at }}</td>
                                    <td>
                                        @if ($log->status === 'Failed')
                                            <form action="{{ route('sms.resend', $log->phone_number) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-warning btn-sm">Resend</button>
                                            </form>
                                        @else
                                            <span class="text-success">Sent</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No logs found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
                {{ $smsLogs->links('pagination::bootstrap-5') }}

            </div>
        </div>
        @include('admin.script')
</body>

</html>
