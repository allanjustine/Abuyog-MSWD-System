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
      font-family: 'Times New Roman', Times, serif;
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

  <h1 style="font-size:25px; margin-top:40px;" align="center">GENERAL INTAKE SHEET</h1>
  <h2 style="font-size:15px; font-family:Arial, Helvetica, sans-serif; text-decoration: underline; margin-bottom:1px;">
    MSWDO</h2>


  <!-- Left Section -->
  <div class="form-left">
    <label style="margin-left: 50px;">Case No.</label>
    <span>:</span>
    <span
      style="font-size: 11px; border-bottom: 1px solid #000; width: 80px; display: inline-block; ">{{ $application?->aicsDetails[0]?->case_no ?? '' }}</span>
  </div>

  <!-- Right Section -->
  <div class="form-right" style="text-align: right; margin-top: -50px;">
    <label>Date:</label>
    <span
      style="font-size: 11px; border-bottom: 1px solid #000; width: 90px; display: inline-block; text-align:center;">{{ $application->appearance_date->format('F d, Y') }}</span>
  </div>

  <!-- Left Section -->
  <div class="form-left">
    <label style="margin-left: 50px;">New</label>
    <span style="margin-left: 28px;">:</span>
    <span style="border-bottom: 1px solid #000; width: 80px; display: inline-block; ">&nbsp; @if($application->aicsDetails[0]?->new_or_old === 'New') Yes @endif</span>
  </div>

  <!-- Right Section -->
  <div class="form-right" style="text-align: right; margin-top: -50px;">
    <label style="margin-right: 5px;">Barangay:</label>
    <span
      style="font-size: 11px; border-bottom: 1px solid #000; width: 80px; display: inline-block; text-align:center; ">{{ strtoupper($application?->barangay?->name) }}</span>
  </div>

  <!-- Left Section -->
  <div class="form-left">
    <label style="margin-left: 50px;">Old</label>
    <span style="margin-left: 35px;">:</span>
    <span style="border-bottom: 1px solid #000; width: 80px; display: inline-block; ">&nbsp; @if($application->aicsDetails[0]?->new_or_old === 'Old') Yes @endif</span>
  </div>


  <h1 style="font-size:18px; margin-top:20px; margin-left: 30px;">
    I.<span style="display:inline-block; width:40px;"></span>IDENTIFYING DATA:
  </h1>


  <!--client data-->
  <div class="container" style="margin-top:20px;">
    <div class="form-left">
      <label>1. Name of Client: </label>
      <span
        style="font-size: 11px; border-bottom: 1px solid #000; width: 200px; display: inline-block; text-align:center;">{{ strtoupper($application?->full_name) }}</span>
    </div>

    <div class="form-center" style="text-align: center; margin-top: -50px;">
      <label style="margin-left: 250px;">2. Date of Birth:</label>
      <span
        style="font-size: 11px; border-bottom: 1px solid #000; width: 80px; display: inline-block;">{{ $application?->date_of_birth?->format('F d, Y') ?? '' }}</span>
    </div>

    <div class="form-right" style="text-align: right; margin-top: -50px;">
      <label style="margin-right: 5px;">Age:</label>
      <span
        style="font-size: 11px; border-bottom: 1px solid #000; width: 50px; display: inline-block; text-align:center;">{{ $application?->age ?? '' }}</span>
    </div>

    <div class="form-left" style="margin-top:20px;">
      <label>Address:</label>
      <span
        style="font-size: 11px; border-bottom: 1px solid #000; width: 200px; display: inline-block; text-align:center; ">{{strtoupper( $application?->complete_address ?: $application?->barangay?->name ?? '' )}}</span>
    </div>

    <div class="form-center" style="text-align: center; margin-top: -50px;">
      <label style="margin-left: 100px;">Birthplace:</label>
      <span
        style="font-size: 11px; border-bottom: 1px solid #000; width: 80px; display: inline-block;">{{strtoupper( $application?->place_of_birth ?? '' )}}</span>
    </div>

    <div class="form-right" style="text-align: right; margin-top: -50px;">
      <label style="margin-right: 5px;">Civil Status:</label>
      <span
        style="font-size: 11px; border-bottom: 1px solid #000; width: 80px; display: inline-block; text-align:center;">{{strtoupper( $application?->civil_status ?? '' )}}</span>
    </div>

    <div class="form-left" style="margin-top:20px;">
      <label>Occupation:</label>
      <span
        style="font-size: 11px; border-bottom: 1px solid #000; width: 200px; display: inline-block; text-align:center; ">{{strtoupper( $application?->occupation ?? '' )}}</span>
    </div>

    <div class="form-center" style="text-align: center; margin-top: -50px;">
      <label style="margin-left: 300px;">Educational Attainment:</label>
      <span
        style="font-size: 11px; border-bottom: 1px solid #000; width: 150px; display: inline-block; text-align:center;">{{ strtoupper($application?->educational_attainment ?? '') }}</span>
    </div>

    <div class="form-left" style="margin-top:20px;">
      <label>Source of Referral:</label>
      <span
        style="font-size: 11px; border-bottom: 1px solid #000; width: 250px; display: inline-block; text-align:center;">{{strtoupper( $application?->aicsDetails[0]?->source_of_referral ?? '' )}}</span>
    </div>

    <div class="form-center" style="text-align: center; margin-top: -50px;">
      <label style="margin-left: 380px;">Religion:</label>
      <span
        style="font-size: 11px; border-bottom: 1px solid #000; width: 150px; display: inline-block; text-align:center;">{{strtoupper( $application?->religion ?? '' )}}</span>
    </div>

  </div>


  <h1 style="font-size:18px; margin-top:20px; margin-left: 30px;">
    II.<span style="display:inline-block; width:40px;"></span>FAMILY INFORMATION:
  </h1>

  <table border="1"
    style="width: 100%; border-collapse: collapse; text-align: center; margin-top: 20px; table-layout: fixed;">
    <thead>
      <tr>
        <th style="width: 20%; font-size: 15px;">Name by birth or (include client)</th>
        <th style="width: 8%; font-size: 15px;">Age</th>
        <th style="width: 8%; font-size: 15px;">Sex</th>
        <th style="width: 12%; font-size: 15px;">Civil Status</th>
        <th style="width: 15%; font-size: 15px;">Relation to Client</th>
        <th style="width: 20%; font-size: 15px;">Educational Attainment</th>
        <th style="width: 17%; font-size: 15px;">Occupation</th>
      </tr>
    </thead>
    <tbody>
      <!-- Row 1 -->
      @for ($i = 0; $i < 8; $i++)
      <tr>
        <td
          style="height: 30px; font-size: 10px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
          {{ strtoupper($application->user->familyCompositions[$i]?->name ?? '' )}}
        </td>
        <td
          style="height: 30px; font-size: 10px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
          {{ $application->user->familyCompositions[$i]?->age ?? '' }}
        </td>
        <td
          style="height: 30px; font-size: 10px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
          {{strtoupper( $application->user->familyCompositions[$i]?->gender ?? '' )}}
        </td>
        <td
          style="height: 30px; font-size: 10px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
          {{strtoupper( $application->user->familyCompositions[$i]?->civil_status ?? '' )}}
        </td>
        <td
          style="height: 30px; font-size: 10px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
          {{ strtoupper($application->user->familyCompositions[$i]?->relationship ?? '' )}}
        </td>
        <td
          style="height: 30px; font-size: 10px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
          {{ strtoupper($application->user->familyCompositions[$i]?->educational ?? '' )}}
        </td>
        <td
          style="height: 30px; font-size: 10px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
          {{strtoupper( $application->user->familyCompositions[$i]?->occupation ?? '' )}}
        </td>
      </tr>
      @endfor

    </tbody>
  </table>

  <div style="position: fixed; display: block; width: 100%; padding: 10px;">
    <!-- Problem Presented -->
    <div style=" margin-bottom: 20px;10px; width: 90%;"> <!-- Adjusted width to fit paper form -->
      <h1 style="font-size: 16px; margin: 0; padding-bottom: 5px; line-height: 1;">
        III.<span style="display:inline-block; width:40px;"></span>PROBLEM PRESENTED:
      </h1>
      <div style="border: 0px solid #000; width: 100%; height: 100px; overflow: hidden; position: relative;">
        <!-- Reduced height -->
        <div
          style="padding: 5px; font-size: 11px; line-height: 1.3; height: 100%; overflow-y: auto; word-wrap: break-word;">
          <span>{{strtoupper( $application?->aicsDetails[0]?->problem_presented ?? '' )}}</span>
        </div>
      </div>
    </div>

    <!-- Findings -->
    <div style=" width: 90%;"> <!-- Adjusted width to fit paper form -->
      <h1 style="font-size: 16px; margin: 0; padding-bottom: 5px; line-height: 1;">
        IV.<span style="display:inline-block; width:40px;"></span>FINDINGS:
      </h1>
      <div style="border: 0px solid #000; width: 100%; height: 100px; overflow: hidden; position: relative;">
        <!-- Reduced height -->
        <div
          style="padding: 5px; font-size: 11px; line-height: 1.3; height: 100%; overflow-y: auto; word-wrap: break-word;">
          <span>{{strtoupper( $application?->aicsDetails[0]?->findings ?? '' )}}</span>
        </div>
      </div>
    </div>

    <!-- Action Taken -->
    <div style="width: 90%;"> <!-- Adjusted width to fit paper form -->
      <h1 style="font-size: 16px; margin: 0; padding-bottom: 5px; line-height: 1;">
        V.<span style="display:inline-block; width:40px;"></span>ACTION TAKEN:
      </h1>
      <div style="border: 0px solid #000; width: 100%; height: 100px; overflow: hidden; position: relative;">
        <!-- Reduced height -->
        <div
          style="padding: 5px; font-size: 11px; line-height: 1.3; height: 100%; overflow-y: auto; word-wrap: break-word;">
          <span>{{ strtoupper($application?->aicsDetails[0]?->action_taken ?? '' )}}</span>
        </div>
      </div>
    </div>
  </div>



  <!-- Fixed Interviewed by section -->
  <div class="bottom-text"
    style="position: fixed; bottom: 0; left: 0; width: 100%; padding-top: 70px; background-color: white;">
    <div class="form-right" style="text-align: right; margin-right:80px;">
      <label style="margin-right: 5px;">Interviewed by</label>
    </div>
    <div class="form-right" style="text-align: right; padding-top:15px;">
      <label style="margin-right: 5px;">Name:</label>
      <span style="border-bottom: 1px solid #000; width: 150px; display: inline-block; margin-left:10px; font-size: 13px;">{{ strtoupper($application?->acceptedBy?->full_name ?? '') }}</span>
    </div>
    <div class="form-right" style="text-align: right;">
      <label style="margin-right: 5px;">Date:</label>
      <span style="border-bottom: 1px solid #000; width: 150px; display: inline-block; margin-left:10px;">{{ $application?->updated_at?->format('F d, Y') }}</span>
    </div>
    <div class="form-right" style="text-align: right;">
      <label style="margin-right: 5px;">Time:</label>
      <span style="border-bottom: 1px solid #000; width: 150px; display: inline-block; margin-left:10px;">{{ $application?->updated_at?->format('h:i A') }}</span>
    </div>
  </div>


</body>

</html>
