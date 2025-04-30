@php
$customFields = json_decode($application->custom_fields, true);
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $application->service->name }} Form</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin-left: 40px;
            margin-right: 40px;
        }

        .form-group label {
            font-weight: bold;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>

    <h1 style="font-size:13px; margin-top:35px;" align="center">Republic of the Philippines</h1>
    <h2 style="font-size:13px; margin-top:-8px;" align="center">OFFICE FOR SENIOR CITIZEN'S AFFAIRS</h2>
    <h3 style="font-size:13px; margin-top:-8px;" align="center">Abuyog, Leyte</h3>




    <!-- Right Section -->
    <div class="form-right" style="text-align: right; ">
        <div style="width: 20%; height: 10%; border: 1px solid #000; margin-top: -15%; margin-left: 80%; "></div>
    </div>

    <h4 style="font-size:18px; margin-top:8px;" align="center">REGISTRATION FORM</h4>




    <!--client data-->
    <div class="container">
        <div style="margin-bottom: 10px;">
            <div style="display: flex; align-items: flex-start; ">
                <label style="font-size: 15px; ">Name:</label>
                <!-- Name fields with a single underline -->
                <span
                    style="font-size: 11px; border-bottom: 1px solid #000; width: 30%; display: inline-block; text-align: center;">
                    {{ strtoupper( $application?->last_name ?? '' )}}
                </span>
                <span
                    style="font-size: 11px; border-bottom: 1px solid #000; width: 30%; display: inline-block; text-align: center;">
                    {{strtoupper( $application?->first_name ?? '' )}}
                </span>
                <span
                    style="font-size: 11px; border-bottom: 1px solid #000; width: 30%; display: inline-block; text-align: center;">
                    {{strtoupper( $application?->middle_name ?? '' )}}
                </span>
            </div>
            <!-- Labels aligned under the underline -->
            <div style="display: flex; align-items: flex-start; margin-top: 5px; font-size: 15px;">
                <span style="margin-left: 16%; text-align: center; display: inline-block;">Family Name</span>
                <span style="margin-left: 17%; text-align: center; display: inline-block;">First Name</span>
                <span style="margin-left: 18%; text-align: center; display: inline-block;">Middle Name</span>
            </div>
        </div>
    </div>

    <div class="form-left" style="margin-top:-10px;">
        <label>Date of Birth:</label>
        <span
            style="font-size: 11px; border-bottom: 1px solid #000; width: 200px; display: inline-block; text-align: center; ">{{
            $application?->date_of_birth?->format('F d, Y') ?? '' }}</span>
    </div>

    <div class="form-center" style="text-align: center; margin-top: -50px;">
        <label style="margin-left: 100px;">Age:</label>
        <span style="font-size: 11px; border-bottom: 1px solid #000; width: 80px; display: inline-block;">{{
            $application?->age ?? '' }}</span>
    </div>

    <div class="form-right" style="text-align: right; margin-top: -50px; margin-right:25px;">
        <label style="margin-right: 5px; ">Sex:</label>
        <span
            style="font-size: 11px; border-bottom: 1px solid #000; width: 80px; display: inline-block; text-align: center;">{{strtoupper(
            $application?->gender ?? '') }}</span>
    </div>

    <div class="form-left" style="margin-top:5px;">
        <label>Place of Birth:</label>
        <span
            style="font-size: 11px; border-bottom: 1px solid #000; width: 340px; display: inline-block; text-align: center;">{{
            strtoupper( $application?->place_of_birth ?? '' )}}</span>
    </div>

    <div class="form-center" style="text-align: right; margin-top: -50px;">
        <label style="margin-right: 5px;">Civil Status:</label>
        <span
            style="font-size: 11px; border-bottom: 1px solid #000; width: 100px; display: inline-block; text-align: center;">{{strtoupper(
            $application?->civil_status ?? '' )}}</span>
    </div>
    <div class="form-left" style="margin-top:5px;">
        <label>Address:</label>
        <span
            style="font-size: 11px; border-bottom: 1px solid #000; width: 89%; display: inline-block; text-align: center; ">{{strtoupper(
            $application?->complete_address ?? $application?->barangay?->name ?? '' )}}</span>
    </div>
    <div class="form-left" style="margin-top:5px;">
        <label>Educational Attainment:</label>
        <span
            style="font-size: 11px; border-bottom: 1px solid #000; width: 73%; display: inline-block; text-align: center; ">{{strtoupper(
            $application?->educational_attainment ?? '' )}}</span>
    </div>
    <div class="form-left" style="margin-top:5px;">
        <label>Occupation:</label>
        <span
            style="font-size: 11px; border-bottom: 1px solid #000; width: 300px; display: inline-block; text-align: center;">{{strtoupper(
            $application?->occupation ?? '' )}}</span>
    </div>

    <div class="form-center" style="text-align: right; margin-top: -50px;">
        <label style="margin-right: 5px;">Annual Income:</label>
        <span
            style="font-size: 11px; border-bottom: 1px solid #000; width: 130px; display: inline-block; text-align: center;">{{
            $application?->annual_income ?? '' }}</span>
    </div>
    <div class="form-left" style="margin-top:5px;">
        <label>Other Skills:</label>
        <span
            style="font-size: 11px; border-bottom: 1px solid #000; width: 85%; display: inline-block; text-align: center; ">{{strtoupper(
            $application?->other_skills ?? '')}}</span>
    </div>



    <h1 style="font-size:16px; margin-top:20px;" align="center"> FAMILY COMPOSITION</h1>

    <table border="1"
        style="width: 100%; border-collapse: collapse; text-align: center; margin-top: 20px; table-layout: fixed;">
        <thead>
            <tr>
                <th style="width: 40%; font-size: 15px;">Name</th>
                <th style="width: 17%; font-size: 15px;">Relationship</th>
                <th style="width: 8%; font-size: 15px;">Age</th>
                <th style="width: 12%; font-size: 15px;">Civil Status</th>
                <th style="width: 17%; font-size: 15px;">Occupation</th>
                <th style="width: 15%; font-size: 15px;">Income</th>
            </tr>
        </thead>
        <tbody>
            <!-- Row 1 -->
           @for ($i = 0; $i < 10; $i++)
           <tr>
            <td
                style="height: 30px; font-size: 10px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
                {{strtoupper( $application->user->familyCompositions[$i]?->name ?? '' )}}
            </td>
            <td
                style="height: 30px; font-size: 10px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
                {{ strtoupper( $application->user->familyCompositions[$i]?->relationship ?? '' )}}
            </td>
            <td
                style="height: 30px; font-size: 10px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
                {{ $application->user->familyCompositions[$i]?->age ?? '' }}
            </td>
            <td
                style="height: 30px; font-size: 10px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
                {{ $application->user->familyCompositions[$i]?->civil_status ?? '' }}
            </td>
            <td
                style="height: 30px; font-size: 10px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
                {{strtoupper( $application->user->familyCompositions[$i]?->occupation ?? '' )}}
            </td>
            <td
                style="height: 30px; font-size: 10px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
                {{ $application->user->familyCompositions[$i]?->income ?? '' }}
            </td>
        </tr>
           @endfor
        </tbody>
    </table>

    <p style="font-size:15px; font-weight:bold; text-indent: 40px; margin-top:5px;">
        I HEREBY CERTIFY <span style="font-weight:normal;">that the above information are true and correct to the best
            of my knowledge and belief.</span>
    </p>


    <div>
        <div class="form-left" style="text-align: left; ">
            <div style="width: 34%; height: 35%; border: 1px solid #000; margin-top: 15%; margin-left: -5%; ">
            </div>
            <span style="font-weight: bold; font-size: 11px; margin-left:10px;">RIGHT THUMBMARK</span>
        </div>

        <div
            style="text-align: center; display: inline-block; position: relative; width: 350px; margin-left:50%; margin-top: -20%;">
            <!-- Name directly above the underline -->
            <span style="display: block; text-align: center; margin-bottom: 1px; font-weight: normal; font-size:14px;">
                {{strtoupper( $application?->first_name ?? '' )}} {{strtoupper( $application?->middle_name ?? '' )}} {{ strtoupper(
                $application?->last_name ?? '' )}}
            </span>
            <!-- Underline -->
            <span style="border-top: 1px solid #000; width: 80%; display: inline-block;"></span>
            <label style="display: block; margin-top: -15px; font-weight: bold;">Name
                and Signature of Senior Citizen</label>
        </div>

        <div
            style="text-align: center; display: inline-block; position: relative; width: 350px; margin-left:50%; margin-top: -15%;">
            <!-- Name directly above the underline -->
            <span style="display: block; text-align: center; margin-bottom: 1px; font-weight: normal; font-size:14px;">
                {{strtoupper( $application?->appearance_date?->format('F d, Y') ?? $application?->created_at?->format('F d, Y') )}}
            </span>
            <!-- Underline -->
            <span style="border-top: 1px solid #000; width: 80%; display: inline-block;"></span>
            <label style="display: block; margin-top: -15px; font-weight: bold; ">Date
                of Registration</label>
        </div>


        <div class="form-right" style="text-align: center; margin-left:50%; margin-top: -5%;">
            <label style="margin-right: 5px; font-weight:bold;">Received by:</label>
            <span style="border-bottom: 1px solid #000; width: 188px; display: inline-block; "></span>
        </div>
    </div>


    <p style="font-size:15px; font-weight:bold; margin-top:5px;">
        Note: <br> <span style="font-weight:normal; margin-left: 40px; display:block;">File your Registration with 1 ID
            photo size
            <br>"1x1" one (1) to be attached to this form.
        </span>
    </p>


</body>

</html>
