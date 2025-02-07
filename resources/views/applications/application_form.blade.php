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
            margin-top: 5px;
            margin-left: 20px;
            margin-right: 20px;
        }

        .page-break {
        page-break-after: always;
    }


    </style>
</head>
<body>
    <h1 style="font-size:15px; text-align:center; font-weight:normal; padding-top:5px;">
        Republic of the Philippines<br>
        <span style="display:block;">Local Social Welfare and Development Office</span>
        <span style="display:block;">City/Municipality, Region</span>
    </h1>
    <h1 style="font-size:18px; margin-top:10px;" align="center">APPLICATION FORM FOR SOLO PARENT</h1>


    <!-- Right Section -->
  <div class="form-right" style="text-align: right; margin-top: 10px;">
    <label>Case Number:</label>
    <span style="border-bottom: 1px solid #000; width: 150px; display: inline-block;">{{ $application->id }}</span>
  </div>




    <h1 style="font-size:15px;">
      I. IDENTIFYING INFORMATION
    </h1>

    <div class="container" style=" font-size:11px;margin-top: 10px;">
    <table style="width: 100%; border-collapse: collapse; border: 1px solid #000;">
        <tr>
            <td colspan="3" style="border: 0; padding: 0;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="border: 1px solid #000; padding: 4px; width: 65%;">Full Name: {{ strtoupper( $application?->full_name) }}</td>
                        <td style="border: 1px solid #000; padding: 4px; width: 15%;">Age: {{ strtoupper( $application?->age ?? '') }}</td>
                        <td style="border: 1px solid #000; padding: 4px; width: 20%;">Gender: {{ strtoupper ($application?->gender ?? '') }}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="border: 0; padding: 0;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="border: 1px solid #000; padding: 4px; width: 50%;">Date of Birth: {{ strtoupper( $application?->date_of_birth->format('F d, Y') ?? '') }}</td>
                        <td style="border: 1px solid #000; padding: 4px; width: 50%;">Place of Birth: {{ strtoupper(  $application?->place_of_birth ?? '') }}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="border: 0; padding: 0;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="border: 1px solid #000; padding: 4px; width: 100%;">Address: {{  strtoupper(  $application?->complete_address ?: $application?->barangay?->name ?? '') }}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="border: 0; padding: 0;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="border: 1px solid #000; padding: 4px; width: 60%;">Educational Attainment: {{  strtoupper(   $application?->educational_attainment ?? '') }}</td>
                        <td style="border: 1px solid #000; padding: 4px; width: 40%;">Civil Status: {{ strtoupper(   $application?->civil_status ?? '') }}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="border: 0; padding: 0;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="border: 1px solid #000; padding: 4px; width: 60%;">Occupation: {{  strtoupper(   $application?->occupation ?? '' ) }}</td>
                        <td style="border: 1px solid #000; padding: 4px; width: 40%;">Religion: {{ strtoupper(   $application?->religion ?? '' )}}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="border: 0; padding: 0;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="border: 1px solid #000; padding: 4px; width: 60%;">Company/Agency: {{  strtoupper(   $application?->soloParentDetails[0]?->company_agency ?? '') }}</td>
                        <td style="border: 1px solid #000; padding: 4px; width: 40%;">Monthly Income: {{ strtoupper(   $application?->monthly_income ?? '' )}}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="border: 0; padding: 0;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="border: 1px solid #000; padding: 4px; width: 60%;">Contact Number/s: {{ strtoupper(   $application?->phone) }}</td>
                        <td style="border: 1px solid #000; padding: 4px; width: 40%;">Email Address: {{  $application?->email }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

      <!-- Left Section -->
    <div class="form-left" style="margin-top:8px;">
      <label style="padding:8px;">4Ps Beneficiary:</label>
      <span style="border-bottom: 1px solid #000; width: 80px; display: inline-block; text-align:center;">{{ strtoupper($application?->soloParentDetails[0]?->four_ps_beneficiary ?? '') }}</span>
    </div>

  <!-- Right Section -->
    <div class="form-right" style="text-align: right; margin-top: -50px; margin-right:50px;">
    <label>Indigenous Person:</label>
    <span style="border-bottom: 1px solid #000; width: 80px; display: inline-block; text-align:center;">{{  strtoupper(   $application?->soloParentDetails[0]?->indigenous_person ?? '' )}}</span>
  </div>
</div>





    <h1 style="font-size:15px;">
        II. FAMILY COMPOSITION:
    </h1>


    <table border="1"
    style="width: 100%; border-collapse: collapse; text-align: center; margin-top: 20px; table-layout: fixed;">
    <thead>
      <tr>
        <th style="width: 20%; font-size: 13px;">Name</th>
        <th style="width: 15%; font-size: 13px;">Relationship</th>
        <th style="width: 8%; font-size: 13x;">Age</th>
        <th style="width: 12%; font-size: 13px;">Birthday</th>
        <th style="width: 10%; font-size: 13px;">Civil</th>
        <th style="width: 17%; font-size: 13px;">Educational</th>
        <th style="width: 15%; font-size: 13px;">Occupation</th>
        <th style="width: 17%; font-size: 13px;">Monthly</th>
      </tr>
    </thead>
    <tbody>
      <!-- Row 1 -->
      @for ($i = 0; $i < 6; $i++)
      <tr>
        <td
          style="height: 30px; font-size: 9px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
          {{  strtoupper($application->familyCompositions[$i]?->name ?? '' )}}
        </td>
        <td
          style="height: 30px; font-size: 9px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
          {{ strtoupper( $application->familyCompositions[$i]?->relationship ?? '') }}
        </td>
        <td
          style="height: 30px; font-size: 9px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
          {{  strtoupper($application->familyCompositions[$i]?->age ?? '' )}}
        </td>
        <td
          style="height: 30px; font-size: 9px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
          {{ strtoupper( $application->familyCompositions[$i]?->birthday ?? '' )}}
        </td>
        <td
          style="height: 30px; font-size: 9px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
          {{  strtoupper($application->familyCompositions[$i]?->civil_status ?? '') }}
        </td>
        <td
          style="height: 30px; font-size: 9px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
          {{ strtoupper( $application->familyCompositions[$i]?->educational ?? '' )}}
        </td>
        <td
          style="height: 30px; font-size: 9px; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
          {{  strtoupper($application->familyCompositions[$i]?->occupation ?? '' )}}
        </td>
        <td
          style="height: 30px; font-size: 109pxpx; overflow-wrap: break-word; white-space: normal; line-height: 1; text-overflow: ellipsis;">
          {{  strtoupper($application->familyCompositions[$i]?->income ?? '' )}}
        </td>
      </tr>
      @endfor
  </tbody>
</table>

    <p style="font-size:10px; font-weight:normal;" align="center">
       NOTE: Include family member and other members of the household especially minor children. Use back side for additional members.
    </p>


    <div style="font-size: 8px; margin-top: 10px; line-height: 1.5;">
    <h1 style="font-size: 13px; margin: 0;">
        III. Classification/Circumstances of being a solo parent
        (Dahilan kung bakit naging solo parent)?
    </h1>
    <div style="width: 100%; margin-top: 10px;">
        <!-- First underline -->
        <div style="border-bottom: 1px solid #000; width: 100%; margin-bottom: 15px; padding-bottom: 2px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
            {{ strtoupper( substr($application->soloParentDetails[0]?->classification_circumtances ?? '', 0, 95)) }}
        </div>
        <!-- Second underline -->
        <div style="border-bottom: 1px solid #000; width: 100%; margin-top: 5px; padding-bottom: 2px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
            {{ strtoupper( substr($application->soloParentDetails[0]?->classification_circumtances ?? '', 95)) }}
        </div>
    </div>

    <h1 style="font-size: 13px; margin-top: 10px;">
        IV. Needs/Problems of being a solo parent (Kinakailangan/Problema ng isang solo parent)?
    </h1>
    <div style="width: 100%; margin-top: 10px;">
        <!-- First underline -->
        <div style="border-bottom: 1px solid #000; width: 100%; margin-bottom: 15px; padding-bottom: 2px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
            {{ strtoupper(  substr($application->soloParentDetails[0]?->needs_problems ?? '', 0, 120) )}}
        </div>
        <!-- Second underline -->
        <div style="border-bottom: 1px solid #000; width: 100%; margin-top: 5px; padding-bottom: 2px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
            {{ strtoupper( substr($application->soloParentDetails[0]?->needs_problems ?? '', 120) )}}
        </div>
    </div>
</div>



    <h1 style="font-size:15px; margin-top: 30px; ">
        V. IN CASE OF EMERGENCY
    </h1>

    <table style="font-size:13px;width: 100%; border-collapse: collapse; border: 1px solid #000; margin-top:10px;">
        <tr>
            <td colspan="3" style="border: 0; padding: 0;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="border: 1px solid #000; padding: 4px; width: 60%;">Name: {{ strtoupper( $application->contactEmergencies[0]?->name ?? '' )}}</td>
                        <td style="border: 1px solid #000; padding: 4px; width: 40%;">Relationship: {{strtoupper(  $application->contactEmergencies[0]?->relationship ?? '' )}}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="border: 0; padding: 0;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="border: 1px solid #000; padding: 4px; width: 60%;">Address: {{ strtoupper( $application->contactEmergencies[0]?->address ?? '' )}}</td>
                        <td style="border: 1px solid #000; padding: 4px; width: 40%;">Contact Number/s: {{ $application->contactEmergencies[0]?->contact_number ?? '' }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>


    <p style="font-size:10px; font-weight:normal;" align="center">
       I hereby certify that the information given  above are true and correct.
       I further understand that any misinterpretation that may have made will <br>
       subject me to criminal and civil liabilities provided for by existing laws.
       In addition, I hereby give my consent to share the information above to the <br>
       member agencies of the Inter-Agency Coordinationg and Monitoring Committee on solo parents.
    </p>



<!-- Container for Signature and Date in a Row -->
<div style="display: flex; justify-content: space-between; align-items: flex-end; margin-top: 50px;">

  <!-- Left Section (Signature/Thumbmark) -->
  <div style="text-align: center; display: inline-block; position: relative; width: 350px; margin-left: 60px; margin-right: 30px;">
    <!-- Name centered above the underline -->
    <span style="display: block; position: absolute; top: -20px; font-size: 11px; left: 50%; transform: translateX(-50%); white-space: nowrap;">
      {{strtoupper(  $application?->full_name) }}
    </span>
    <!-- Underline -->
    <span style="border-top: 1px solid #000; width: 100%; display: block; "></span>
    <label style="display: block; margin-top: 5px;">Signature/Thumbmark over Printed Name</label>
</div>


  <!-- Right Section (Date) -->
  <div style="text-align: center; display: inline-block; position: relative; width: 180px; margin-right: 60px;">
    <!-- Date centered above the underline -->
    <span style="display: block; position: absolute; top: -20px; left: 50%; transform: translateX(-50%); font-size: 11px;">
      {{ $application?->apperance_date?->format('F d, Y') ?: $application?->created_at?->format('F d, Y') ?? '' }}
    </span>
    <!-- Underline -->
    <span style="border-top: 1px solid #000; width: 100%; display: inline-block; margin-bottom: 20px;"></span>
    <label style="display: block; margin-top: -20px;">Date</label>
  </div>

</div>


<!-- Container for Big Line -->
<div style="display: flex; align-items: center; justify-content: center; margin-top: 10px;">
  <!-- Big Line -->
  <div style="border-top: 4px solid #000; width: 100%;"></div>
</div>

    <h1 style="font-size:15px; margin-top:5px;" align="center">
        FOR SPD/SPO USE ONLY
    </h1>



    <div> STATUS
      <div style="width: 12px; height: 12px;  border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 50px;"></div>
      <span style="margin-right: 8px; ">Approved</span>
      <div style="width: 12px; height: 12px;  border: 1px solid black; border-radius: 2px; display: inline-block;"></div>
      <span style="margin-right: 8px;">New</span>
      <div style="width: 12px; height: 12px; border: 1px solid black; border-radius: 2px; display: inline-block;"></div>
      <span style="margin-right: 8px;">Renewal</span>
      <div style="width: 12px; height: 12px; border: 1px solid black; border-radius: 2px; display: inline-block;"></div>
      <span style="margin-right: 8px;" >Disapproved</span>
    </div>

      <!-- Left Section -->
  <div class="form-left" style="margin-top: 10px;">
    <label>Solo Parent Identification Card Number:</label>
    <span style="border-bottom: 1px solid #000; width: 150px; display: inline-block; ">&nbsp;</span>
  </div>

    <!-- Right Section -->
  <div class="form-right" style="text-align: right; margin-top: -50px;">
    <label>Date Issuance:</label>
    <span style="border-bottom: 1px solid #000; width: 90px; display: inline-block;"></span>
  </div>

  <div class="form-left" style="margin-top: 10px;">
    <label>Solo Parent Category:</label>
    <span style="border-bottom: 1px solid #000; width: 200px; display: inline-block; ">&nbsp;</span>
  </div>













</body>
</html>
