<table>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Suffix</th>
            <th>Date of Birth</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Place of Birth</th>
            <th>Program Enrolled</th>
            <th>Barangay</th>
            <th>Complete Address</th>
            <th>Civil Status</th>
            <th>Educational Attainment</th>
            <th>Occupation</th>
            <th>Religion</th>
            <th>Monthly Income</th>
            <th>Email</th>
            <th>Phone</th>
            <th>ID Number</th>
            <th>Annual Income</th>
            <th>Other Skills</th>
            <th>Approved At</th>
            <th>Appearance Date</th>
            <th>Approved By</th>
            <th>Accepted By</th>
            <th>User ID</th>
            <th>Status</th>
            <th>Message Count</th>
            <th>Cancellation Reason</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($beneficiaries as $b)
        <tr>
            <td>{{ $b->first_name }}</td>
            <td>{{ $b->middle_name }}</td>
            <td>{{ $b->last_name }}</td>
            <td>{{ $b->suffix }}</td>
            <td>{{ $b->date_of_birth }}</td>
            <td>{{ $b->age }}</td>
            <td>{{ $b->gender }}</td>
            <td>{{ $b->place_of_birth }}</td>
            <td>{{ $b->service->name }}</td>
            <td>{{ $b->barangay->name ?? '' }}</td>
            <td>{{ $b->complete_address }}</td>
            <td>{{ $b->civil_status }}</td>
            <td>{{ $b->educational_attainment }}</td>
            <td>{{ $b->occupation }}</td>
            <td>{{ $b->religion }}</td>
            <td>{{ $b->monthly_income }}</td>
            <td>{{ $b->email }}</td>
            <td>{{ $b->phone }}</td>
            <td>{{ $b->id_number }}</td>
            <td>{{ $b->annual_income }}</td>
            <td>{{ $b->other_skills }}</td>
            <td>{{ $b->approved_at }}</td>
            <td>{{ $b->appearance_date }}</td>
            <td>{{ $b->approved_by }}</td>
            <td>{{ $b->accepted_by }}</td>
            <td>{{ $b->user_id }}</td>
            <td>{{ $b->status }}</td>
            <td>{{ $b->message_count }}</td>
            <td>{{ $b->cancellation_reason }}</td>
            <td>{{ $b->created_at }}</td>
            <td>{{ $b->updated_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
