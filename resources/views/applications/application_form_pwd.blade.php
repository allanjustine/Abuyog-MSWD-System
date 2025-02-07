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

        }

        .page-break {
            page-break-after: always;
        }


        .page {
            page-break-before: always;

        }

        /* Remove page break on the first page */
        .page:first-of-type {
            page-break-before: auto;
        }
    </style>
</head>

<div class="page" style="margin-top: -20px; margin-left: 20px; margin-right: 20px;">
    <div style="font-size:10px;">
        <div style="display: flex; align-items: center; justify-content: center; padding-top: 5px;">
            <h1 style="font-size: 13px; text-align: center; margin: 0;">
                DEPARTMENT OF HEALTH<br>
                <span style="display: block;">Philippine Registry For Persons with Disabilities Version 4.0</span>
                <span style="display: block;">Application Form</span>
            </h1>
            <img src="assets/img/wheelchair.png" alt="Wheelchair"
                style="height:40px; width: 40px; margin-left: 87%; margin-top:-35px;">
            <img src="assets/img/doh-logo.png" alt="Wheelchair"
                style="height:45px; width: 45px; margin-left: 5%; margin-top:-50px;">
        </div>

        <table style="width: 100%; border-collapse: collapse; border: 1px solid #000;">
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="border: 1px solid #000; padding: 2px; width: 80%; line-height: 1;">
                                1.
                                <!-- NEW APPLICANT Option -->
                                <div
                                    style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application->pwdDetails[0]?->application_type === 'New Applicant' ? 'black' : 'white' }};">
                                </div>

                                <a style="font-weight: bold; margin-right: 4px;">NEW APPLICANT</a>

                                <!-- RENEWAL Option -->
                                <div
                                    style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 40px; background-color: {{ $application->pwdDetails[0]?->application_type === 'Renewal' ? 'black' : 'white' }};">
                                </div>
                                <a style="font-weight: bold; margin-right: 4px;">RENEWAL</a>
                            </td>
                            <td style="border: 1px solid #000; padding: 2px; width: 20%; vertical-align: top; line-height: 1;"
                                align="center">
                                <span style="display: block; margin-bottom: 2px;">Place 1"x1" <br> Photo Here</span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td colspan="3"
                                style="border: 1px solid #000; padding: 1px 4px; width: 55%; vertical-align: top;">
                                <a style=" font-weight: bold; display: block; margin-bottom: 2px;">2. PERSONS WITH
                                    DISABILITY NUMBER
                                    (RR-PPMM-BBB-NNNNNNN)</a>
                                <span
                                    style="display: block; min-height: 12px;">{{ $application?->pwdDetails[0]?->pwd_number ?? '' }}</span>
                            </td>
                            <td colspan="2"
                                style="border: 1px solid #000; padding: 1px 4px; width: 25%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 2px;">3. Date Applied
                                    (mm/dd/yyyy)</a>
                                <span style="display: block; min-height: 12px;">{{ $application?->appearance_date?->format('m/d/Y') ?? $application?->created_at?->format('m/d/Y') }}</span>
                            </td>
                            <td rowspan="3" style="padding: 2px 4px; width: 20%; vertical-align: top;"></td>
                        </tr>
                        <tr>
                            <td colspan="5"
                                style="font-weight: bold; border: 1px solid #000; padding: 2px; width: 80%;"> 4.
                                PERSONAL
                                INFORMATION
                            </td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid #000; padding: 4px 6px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">LAST NAME:</a>
                                <span
                                    style="display: block; min-height: 15px;">{{ strtoupper( $application?->last_name ?? '' )}}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">FIRST NAME:</a>
                                <span style="display: block; min-height: 20px;">{{strtoupper(  $application->first_name ?? '') }}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 18%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">MIDDLE NAME:</a>
                                <span
                                    style="display: block; min-height: 20px;">{{strtoupper(  $application?->middle_name ?? '') }}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 10%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">SUFFIX:</a>
                                <span
                                    style="display: block; min-height: 20px;">{{strtoupper(  $application?->suffix ?? '' )}}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 12%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">BLOOD TYPE:</a>
                                <span
                                    style="display: block; min-height: 20px;">{{strtoupper(  $application?->pwdDetails[0]?->blood_type ?? '') }}</span>
                            </td>

                        </tr>
                    </table>
                </td>
            </tr>


            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td
                                style="border: 1px solid #000; padding: 1px 4px; width: 60%; vertical-align: top; line-height: 1.2;">
                                <a style="font-weight: bold; display: block; margin-bottom: 2px;">5. DATE OF BIRTH
                                    (mm/dd/yyyy)</a>
                                <span
                                    style="display: block; min-height: 15px;">{{ $application?->date_of_birth->format('m/d/Y') ?? '' }}</span>
                            </td>
                            <td
                                style="border: 1px solid #000; padding: 1px 4px; width: 10%; vertical-align: top; line-height: 1.2;">
                                <a style="font-weight: bold; display: block; margin-bottom: 2px;">6. SEX:</a>
                                <div
                                    style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 10px; background-color: {{ $application?->gender === 'Female' ? 'black' : 'white' }};">
                                </div>
                                <a style="font-weight: bold; margin-right: 8px; ">FEMALE</a>
                            </td>
                            <td
                                style="border: 1px solid #000; padding: 1px 4px; width: 10%; vertical-align: top; line-height: 1.2;">
                                <div style="display: inline-block; margin-top: 15px;">
                                    <div
                                        style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 10px; background-color: {{ $application?->gender === 'Male' ? 'black' : 'white' }};">
                                    </div>
                                    <a style="font-weight: bold; margin-right: 8px; ">MALE</a>
                                </div>
                            </td>
                            <td
                                style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top; line-height: 1.2;">
                                <div style="display: inline-block; margin-top: 15px;">
                                    <div
                                        style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 10px; background-color: {{ $application?->gender === 'Rather not to say' ? 'black' : 'white' }};">
                                    </div>
                                    <a style="font-weight: bold; margin-right: 8px; ">RATHER NOT TO SAY</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 100%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">7. CIVIL STATUS:</a>
                                <span style="display: block; min-height: 10px;">
                                    <div
                                        style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->civil_status === 'Single' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Single</span>
                                    <div
                                        style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->civil_status === 'Separated' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Separated</span>
                                    <div
                                        style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->civil_status === 'Cohabitation' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Cohabitation (live-in)</span>
                                    <div
                                        style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->civil_status === 'Married' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Married</span>
                                    <div
                                        style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->civil_status === 'Widowed' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 25px; ">Widow/er</span>
                                </span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="border: 1px solid #000; padding: 4px 6px; width: 55%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">8. TYPE OF
                                    DISABILITY:</a>
                                <span style="display: block; min-height: 12px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->type_of_disability === 'Deaf or hard of Hearing' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 20px; ">Deaf or hard of Hearing</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->type_of_disability === 'Psychosocial Disability' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 5px; ">Psychosocial Disability</span>
                                </span>
                                <span style="display: block; min-height: 12px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->type_of_disability === 'Intellectual Disability' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 34px; ">Intellectual Disability</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->type_of_disability === 'Speech and Language Impairment' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 5px; ">Speech and Language Impairment</span>
                                </span>
                                <span style="display: block; min-height: 12px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->type_of_disability === 'Learning Disability' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 43px; ">Learning Disability</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->type_of_disability === 'Visual Disability' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 5px; ">Visual Disability</span>
                                </span>
                                <span style="display: block; min-height: 12px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->type_of_disability === 'Mental Disability' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 52px; ">Mental Disability</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->type_of_disability === 'Cancer (RA11215)' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Cancer (RA11215)</span>
                                </span>
                                <span style="display: block; min-height: 12px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->type_of_disability === 'Physical Disability (Orthopedic)' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 5px; ">Physical Disability (Orthopedic)</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 2px; background-color: {{ $application?->pwdDetails[0]?->type_of_disability === 'Rare Disease (RA10747)' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Rare Disease (RA10747)</span>
                                </span>
                            </td>

                            <td style="border: 1px solid #000; padding: 3px; width: 45%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">9. CAUSE OF
                                    DISABLITY:</a>
                                <span style="display: block; min-height: 12px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 5px; background-color: {{ $application?->pwdDetails[0]?->cause_of_disability === 'Congenital/Inborn' ? 'black' : 'white' }};">
                                    </div>
                                    <a style="font-weight: bold; margin-right: 2px; ">Congenital/Inborn</a>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 5px; background-color: {{ $application?->pwdDetails[0]?->cause_of_disability === 'Acquired' ? 'black' : 'white' }};">
                                    </div>
                                    <a style="font-weight: bold; margin-right: 40px; ">Acquired</a>
                                </span>
                                <span style="display: block; min-height: 12px; margin-top:5px; margin-left:10px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 15px; background-color: {{ $application?->pwdDetails[0]?->congenital_inborn === 'Autism' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Autism</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 5px; background-color: {{ $application?->pwdDetails[0]?->acquired === 'Chronic Illness' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Chronic Illness</span>
                                </span>
                                <span style="display: block; min-height: 12px; margin-left:10px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 15px; background-color: {{ $application?->pwdDetails[0]?->congenital_inborn === 'ADHD' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">ADHD</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 7px; background-color: {{ $application?->pwdDetails[0]?->acquired === 'Cerebral Palsy' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Cerebral Palsy</span>
                                </span>
                                <span style="display: block; min-height: 12px; margin-left:10px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 15px; background-color: {{ $application?->pwdDetails[0]?->congenital_inborn === 'Cerebral Palsy' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 5px; ">Cerebral Palsy</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 5px; background-color: {{ $application?->pwdDetails[0]?->acquired === 'Injury' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Injury</span>
                                </span>
                                <span style="display: block; min-height: 12px; margin-left:10px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 15px; background-color: {{ $application?->pwdDetails[0]?->congenital_inborn === 'Down Syndrome' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 1px; ">Down Syndrome</span>

                                    <!-- Others -->

                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 1px; background-color: {{ str_contains($application?->pwdDetails[0]?->acquired, 'Other,') ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px;">Others:
                                        <span
                                            style="border-bottom: 1px solid #000; width: 100px; display: inline-block; font-size: 8px;">{{ strtoupper( str_contains($application?->pwdDetails[0]?->acquired, 'Other,') ? $application?->pwdDetails[0]?->acquired : '' ?? '') }}</span>

                                    </span>
                                </span>




                                <span style="display: block; min-height: 12px; margin-left:23px;">

                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 1px; background-color: {{ str_contains($application?->pwdDetails[0]?->congenital_inborn, 'Other,') ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px;">Others:
                                        <span
                                            style="border-bottom: 1px solid #000; width: 100px; display: inline-block; font-size: 8px; ">{{ strtoupper( str_contains($application?->pwdDetails[0]?->congenital_inborn, 'Other,') ? $application?->pwdDetails[0]?->congenital_inborn : '' ?? '' )}}</span>

                                    </span>

                                </span>


                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style=" font-weight: bold; border: 1px solid #000; padding: 2px; width: 100%;"> 10.
                                RESIDENCE ADDRESS:</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0; ">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">House No. and
                                    Street:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{ strtoupper( $application?->pwdDetails[0]?->house_no_and_street ?? '')}}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">Barangay:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{strtoupper( $application?->barangay?->name ?? '' )}}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">Municipality:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{strtoupper(  $application?->pwdDetails[0]?->municipality ?? '' )}}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">Province:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{ strtoupper( $application?->pwdDetails[0]?->province ?? '' )}}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">Region:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{strtoupper(  $application?->pwdDetails[0]?->region ?? '') }}</span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="font-weight: bold; border: 1px solid #000; padding: 2px; width: 100%;"> 11.
                                CONTACT DETAILS</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 25%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">Landline No.:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{ $application?->pwdDetails[0]?->landline_no ?? '' }}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 30%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">Mobile No.:</a>
                                <span style="display: block; min-height: 10px;">{{ $application?->phone }}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 45%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">E-mail Address:</a>
                                <span style="display: block; min-height: 10px;">{{ $application?->pwdDetails[0]?->email_address }}</span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse; margin: 0;">
                        <tr>
                            <td colspan="2"
                                style="border: 1px solid #000; padding: 4px 6px; width: 55%; vertical-align: top;">
                                <a style="font-weight: bold; display: block;">EDUCATIONAL ATTAINMENT:</a>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->educational_attainment === 'No Formal Education' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 80px;">None</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->educational_attainment === 'Senior High' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 5px;">Senior High School</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->educational_attainment === 'Kindergarten' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 46px;">Kindergarten</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->educational_attainment === 'College' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 5px;">College</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->educational_attainment === 'Elementary' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 53px;">Elementary</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->educational_attainment === 'Vocational' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 5px;">Vocational</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->educational_attainment === 'High School' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 20px;">Junior High School</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->educational_attainment === 'Postgraduate' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 5px;">Post Graduate</span>
                                </span>
                            </td>
                            <td rowspan="3"
                                style="border: 1px solid #000; padding: 4px 6px; width: 45%; vertical-align: top;">
                                <a style="font-weight: bold; display: block;">OCCUPATION:</a>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->occupation === 'Managers' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Managers</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->occupation === 'Professionals' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Professionals</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->occupation === 'Technicians and Associate Professionals' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Technicians and Associate Professionals</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->occupation === 'Clerical Support Workers' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Clerical Support Workers</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->occupation === 'Service and Sales Workers' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Service and Sales Workers</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->occupation === 'Skilled Agricultural, Forestry and Fishery' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Skilled Agricultural, Forestry and Fishery
                                        Workers</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->occupation === 'Craft and Related Trade Workders' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Craft and Related Trade Workders</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->occupation === 'Plant and Machine Operators and' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Plant and Machine Operators and
                                        Assemblers</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->occupation === 'Elementary Occupations' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Elementary Occupations</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->occupation === 'Armed Forces Occupations' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Armed Forces Occupations</span>
                                </span>
                                <span style="display: block;">
                                    @if(str_contains($application?->occupation, 'Others'))
                                        <div
                                            style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: black;">
                                        </div>
                                        <span style="margin-right: 40px;">Others:
                                            <span
                                                style="border-bottom: 1px solid #000; width: 80px; display: inline-block; ">{{ $application?->occupation ?? 'N/A' }}</span>

                                        </span>
                                    @endif
                                </span>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 25%; vertical-align: top;">
                                <a style="font-weight: bold; display: block;">13. STATUS OF EMPLOYMENT:</a>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->status_of_employment === 'Employed' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Employed</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->status_of_employment === 'Unemployed' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Unemployed</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->status_of_employment === 'Self-Employed' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Self-Employed</span>
                                </span>
                            </td>
                            <td rowspan="2"
                                style="border: 1px solid #000; padding: 1px 4px; width: 25%; vertical-align: top;">
                                <a style="font-weight: bold; display: block;">13. b. TYPES OF EMPLOYMENT:</a>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->types_of_employment === 'Permanent Or Regular' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Permanent/Regular</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->types_of_employment === 'Seasonal' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Seasonal</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->types_of_employment === 'Casual' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Casual</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->types_of_employment === 'Emergency' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Emergency</span>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 25%; vertical-align: top;">
                                <a style="font-weight: bold; display: block;">13. a. CATEGORY OF EMPLOYMENT:</a>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->category_of_employment === 'Government' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Government</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->category_of_employment === 'Private' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Private</span>
                                </span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="font-weight: bold; border: 1px solid #000; padding: 1px; width: 100%;"> 15.
                                ORGANIZATION
                                INFORMATION:</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 25%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 2px;">Organization
                                    Affiliated:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{ strtoupper( $application?->pwdDetails[0]?->organization_affiliated ?? '' )}}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 25%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 2px;">Contact Person:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{ $application?->pwdDetails[0]?->contact_person ?? '' }}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 25%; vertical-align: top;">
                                <a style="font-weight: bold;display: block; margin-bottom: 2px;">Office Address:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{strtoupper(  $application?->pwdDetails[0]?->office_address ?? '' )}}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 25%; vertical-align: top;">
                                <a style="font-weight: bold;display: block; margin-bottom: 2px;">Tel. Nos.:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{ $application?->pwdDetails[0]?->tel_no ?? '' }}</span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style=" font-weight: bold; border: 1px solid #000; padding: 1px; width: 100%;"> 16.
                                ID
                                REFERENCE NO.:</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 2px;">SSS NO.:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{ $application?->pwdDetails[0]?->sss_no ?? '' }}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 2px;">GSIS NO.:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{ $application?->pwdDetails[0]?->gsis_no ?? '' }}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 2px;">PAG-IBIG NO.:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{ $application?->pwdDetails[0]?->pag_ibig_no ?? '' }}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 2px;">PSN NO.:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{ $application?->pwdDetails[0]?->psn_no ?? '' }}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 2px;">PhilHealth NO.:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{ $application?->pwdDetails[0]?->philhealth_no ?? '' }}</span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style=" font-weight: bold; border: 1px solid #000; padding: 2px; width: 100%;"> 17.
                                FAMILY BACKGROUND:</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="border: 1px solid #000; padding: 4px; width: 20%; vertical-align: top;">
                            </td>
                            <td
                                style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top; text-align:center;">
                                <a style="font-weight: bold;">NAME</a>
                            </td>
                            <td
                                style="border: 1px solid #000; padding: 4px 6px; width: 20%; vertical-align: top; text-align:center;">
                                <a style="font-weight: bold;">OCCUPATION</a>

                            </td>
                            <td
                                style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top; text-align:center;">
                                <a style="font-weight: bold;">CONTACT NO.</a>

                            </td>

                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td
                                style="border: 1px solid #000; padding: 4px; width: 20%; vertical-align: top; text-align:center;">
                                <a style="font-weight: bold;">FATHER'S NAME:</a>

                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top;">
                                <span> {{strtoupper(  $application?->familyBackgrounds[0]?->father_name ?? '') }}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 4px 6px; width: 20%; vertical-align: top;">
                                <span>{{strtoupper(  $application?->familyBackgrounds[0]?->father_occupation ?? '') }}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top;">
                                <span>{{ $application?->familyBackgrounds[0]?->father_phone ?? '' }}</span>

                            </td>

                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td
                                style="border: 1px solid #000; padding: 4px; width: 20%; vertical-align: top; text-align:center;">
                                <a style="font-weight: bold;">MOTHER'S NAME:</a>

                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top;">
                                <span> {{ strtoupper( $application?->familyBackgrounds[0]?->mother_name ?? '' )}}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 4px 6px; width: 20%; vertical-align: top;">
                                <span>{{strtoupper(  $application?->familyBackgrounds[0]?->mother_occupation ?? '') }}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top;">
                                <span>{{ $application?->familyBackgrounds[0]?->mother_phone ?? '' }}</span>

                            </td>

                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td
                                style="border: 1px solid #000; padding: 4px; width: 20%; vertical-align: top; text-align:center;">
                                <a style="font-weight: bold;">GUARDIAN:</a>

                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top;">
                                <span> {{strtoupper(  $application?->familyBackgrounds[0]?->guardian_name ?? '' )}}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 4px 6px; width: 20%; vertical-align: top;">
                                <span>{{strtoupper(  $application?->familyBackgrounds[0]?->guardian_occupation ?? '' )}}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top;">
                                <span>{{ $application?->familyBackgrounds[0]?->guardian_phone ?? '' }}</span>

                            </td>

                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td
                                style="border: 1px solid #000; padding: 4px; width: 20%; height: 10px; vertical-align: top; text-align: center;">
                            </td>
                            <td
                                style="border: 1px solid #000; padding: 3px; width: 20%; height: 10px; vertical-align: top; text-align: center;">
                            </td>
                            <td
                                style="border: 1px solid #000; padding: 4px 6px; width: 20%; height: 10px; vertical-align: top; text-align: center;">
                            </td>
                            <td
                                style="border: 1px solid #000; padding: 3px; width: 20%; height: 10px; vertical-align: top; text-align: center;">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td
                                style="border: 1px solid #000; padding: 4px; width: 20%; height: 10px; vertical-align: top; text-align: center;">
                            </td>
                            <td
                                style="border: 1px solid #000; padding: 3px; width: 20%; height: 10px; vertical-align: top; text-align: center;">
                            </td>
                            <td
                                style="border: 1px solid #000; padding: 4px 6px; width: 20%; height: 10px; vertical-align: top; text-align: center;">
                            </td>
                            <td
                                style="border: 1px solid #000; padding: 3px; width: 20%; height: 10px; vertical-align: top; text-align: center;">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>


            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td rowspan="4"
                                style="border: 1px solid #000; padding: 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold;">18. ACCOMPLISHED BY:</a>
                                <span style="display: block; min-height: 10px; margin-bottom:15px; margin-top:20px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->accomplished_by === 'applicant' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="font-weight: bold; margin-left: 10px;">Applicant</span>
                                </span>
                                <span style="display: block; min-height: 1px;margin-bottom:15px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->accomplished_by === 'guardian' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="font-weight: bold; margin-left: 10px; ">Guardian</span>
                                </span>
                                <span style="display: block; min-height: 1px; margin-bottom:-30px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ $application?->pwdDetails[0]?->accomplished_by === 'representative' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="font-weight: bold; margin-left: 10px; ">Representative</span>
                                </span>
                            </td>
                            <td
                                style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top; text-align:center;">
                                <a style="font-weight: bold;">LAST NAME</a>
                            </td>
                            <td
                                style="border: 1px solid #000; padding: 4px 6px; width: 20%; vertical-align: top; text-align:center;">
                                <a style="font-weight: bold;">FIRST NAME</a>

                            </td>
                            <td
                                style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top; text-align:center;">
                                <a style="font-weight: bold;">MIDDLE NAME</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top;">
                                <span> {{strtoupper(  $application?->pwdDetails[0]?->accomplishedBies[0]?->last_name ?? '' )}}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 4px 6px; width: 20%; vertical-align: top;">
                                <span>{{strtoupper(  $application?->pwdDetails[0]?->accomplishedBies[0]?->first_name ?? '') }}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top;">
                                <span>{{strtoupper(  $application?->pwdDetails[0]?->accomplishedBies[0]?->middle_name ?? '' )}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top;">
                                <span> {{strtoupper(  $customFields['guardian_lastname'] ?? '')}}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 4px 6px; width: 20%; vertical-align: top;">
                                <span>{{strtoupper(  $customFields['guardian_firstname'] ?? '') }}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top;">
                                <span>{{ strtoupper( $customFields['guardian_middlename'] ?? '' )}}</span>
                            </td>
                        </tr>
                        <tr>

                            <td style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top;">
                                <span> {{strtoupper(  $customFields['representative_lastname'] ?? '' )}}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 4px 6px; width: 20%; vertical-align: top;">
                                <span>{{ strtoupper( $customFields['representative_firstname'] ?? '' )}}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top;">
                                <span>{{strtoupper(  $customFields['representative_middlename'] ?? '' )}}</span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 30%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">19. NAME OF CERTIFYING
                                    PHYSICIAN
                                    LICENSE NO.:</a>

                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 80%; vertical-align: top;">
                                <span style="display: block; min-height: 10px;"></span>
                            </td>

                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 30%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">20. PROCESSING
                                    OFFICER:</a>

                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 80%; vertical-align: top;">
                                <span style="display: block; min-height: 10px;"></span>
                            </td>

                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 30%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">21. APPROVING
                                    OFFICER:</a>

                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 80%; vertical-align: top;">
                                <span style="display: block; min-height: 10px;"></span>
                            </td>

                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 30%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">22. ENCODER:</a>

                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 80%; vertical-align: top;">
                                <span style="display: block; min-height: 10px;"></span>
                            </td>

                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 100%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">23. NAME OF REPORTING
                                    UNIT:
                                    (OFFICE/SECTION) </a>
                            </td>

                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 0; padding: 0;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 100%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">24. CONTROL NO.:
                                </a>
                            </td>

                        </tr>
                    </table>
                </td>
            </tr>
        </table>

    </div>
    <h1 style="font-size: 7px; text-align: right; ">
        Revised as of August 1, 2021
    </h1>


    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-top: -60px; ">
        <!-- Table -->
        <table border="1" style="width: 50%; border-collapse: collapse;">
            <thead>
                <tr>
                    <td style="border: 1px solid #000; font-size: 10px;">
                        REQUIREMENTS<br>
                        <div style="padding-left: 30px; font-weight: bold;">
                            <div style="display: flex; align-items: center; margin-bottom: 5px;">
                                <div
                                    style="background-color: black; width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-right: 10px;">
                                </div>
                                PHOTOCOPY OF VALID I.D OR CERTIFICATE OF<br>LIVEBIRTH/BAPTISMAL
                            </div>

                            <div style="display: flex; align-items: center; margin-bottom: 5px;">
                                <div
                                    style="background-color: black; width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-right: 10px;">
                                </div>
                                CERTIFICATE OF BARANGAY RESIDENCY INDIGENCY
                            </div>
                            <div style="display: flex; align-items: center; margin-bottom: 5px;">
                                <div
                                    style="background-color: black; width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-right: 10px;">
                                </div>
                                PHOTOCOPY OF MEDICAL CERTIFICATE INDICATING THE CAUSE AND TYPE OF DISABILITY OR
                                MEDICAL
                                ABSTRACT
                            </div>

                            <div style="display: flex; align-items: center;">
                                <div
                                    style="background-color: black; width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-right: 10px;">
                                </div>
                                1 PCS OF 1X1 I.D. PICTURE
                            </div>
                        </div>
                    </td>
                </tr>
            </thead>
        </table>
        <!-- Signature Section -->
        <div
            style="display: flex; flex-direction: column; justify-content: flex-end; align-items: center; width: 40%; font-size: 12px; margin-left: 380px; margin-top:-60px;">
            <!-- Name centered above the underline -->
            <span style="text-align: center; display: block; width: 100%; margin-bottom: 5px;">
                {{strtoupper(  $application->full_name) }}
            </span>
            <!-- Underline -->
            <span style="border-top: 2px solid #000; width: 100%; display: block;"></span>
            <a style="margin-top: 5px; margin-left: 20px;text-align: center;">Printed Name and Signature of PWD</a>
        </div>
    </div>
</div>






<!--BACK PAGE-->
<div class="page">
    <div class="second" style="margin-top: 200px; margin-left: 60px; margin-right: 60px;">
        <div>
            <span style="border-top: 1px solid #000; display: inline-block; width: 100%;"></span>
            <h1 style="display: block; margin-top: -10px; text-align: center; font-size:13px; font-weight: bold;">
                (Name of Medical Hospital/Facility/Clinic)
            </h1>
        </div>
        <h2 style="display: block; margin-top: 25px; text-align: center; font-size:13px; font-weight: bold;">
            DOCTOR'S CERTIFICATION ON DISABILITY
        </h2>

        <div style="font-size: 12px;"> <!-- Added text-align: justify -->
            <p style="margin-left:50px;">
                This is to certify that
                <span style="border-bottom: 1px solid #000; width: 79%; display: inline-block;"></span><a>,</a>
            </p>
            <p>
                Resident of
                <span style="border-bottom: 1px solid #000; width: 41%; display: inline-block;"></span>
                <a>, Abuyog, Leyte, Region VIII, has voluntarily submitted</a>
            </p>
            <p>
                herself/himself to this facility/clinic/hospital with regard to the nature of disability due to the
                functional limitation
            </p>
            <p>
                currently experienced by hte herein patient.
            </p>
        </div>

        <div style="font-size: 12px; "> <!-- Added text-align: justify -->
            <p style="margin-left:50px; text-align: justify;">
                Based on the personal interview and medical assessment conducted by herein physician, the
            </p>
            <p>
                <a>patient has (diagnose)</a>
                <span style="border-bottom: 1px solid #000; width: 79%; display: inline-block;"></span>
            </p>
            <p>
                <a>Accompanied by (describe the health condition)</a>
                <span style="border-bottom: 1px solid #000; width: 57%; display: inline-block;"></span>
            </p>
            <p>
                <span style="border-bottom: 1px solid #000; width: 85%; display: inline-block;"></span>
                <a>which results to</a>
            </p>
            <p>
                <a>Difficulty in (e.g. walking, seeing)</a>
                <span style="border-bottom: 1px solid #000; width: 58%; display: inline-block;"></span>
                <a>and therefore</a>
            </p>
            <p>
                <a>considered as person with (mention type of disability)</a>
                <span style="border-bottom: 1px solid #000; width: 52%; display: inline-block;"></span>
            </p>
            <p>
                <span style="border-bottom: 1px solid #000; width: 63%; display: inline-block;"></span>
                <a>as classified by the Department of Health</a>
            </p>
            <p>
                Administrative Order No. 2009-011.
            </p>
        </div>
        <div style="font-size: 12px;"> <!-- Added text-align: justify -->
            <p style="margin-left:50px;">
                This certification is issued on (date)
                <span style="border-bottom: 1px solid #000; width: 55%; display: inline-block;"></span><a> at
                    (place)</a>
            </p>
            <p>
                <span style="border-bottom: 1px solid #000; width: 55%; display: inline-block;"></span>
                <a>in compliance with the requirement in the issuance</a>
            </p>
            <p style=" text-align: justify;">
                of ID for the twenty percent(20%) discount for persons with disability mandated by Republic Act No. 9442
                or
            </p>
            <p>
                Magna Carta for Persons with Disability.
            </p>
        </div>
        <a style="display: block; font-size:14px; margin-left:50%; margin-top: 80px; ">
            Signed:
        </a>
        <div style="display: block; font-size:14px; margin-left:50%; margin-top: 70px;">
            <span style="border-top: 1px solid #000; width: 100%; display: block;"></span>
            <label style="margin-top: 10px;  margin-left:5%; ">Printed Name and Signature of Physician</label>
        </div>
        <a style="display: block; font-size:14px; margin-left:53%; margin-top: 20px; ">
            License Number
            <span style="border-bottom: 1px solid #000; width: 55%; display: inline-block;"></span>
        </a>

    </div>
</div>




</body>

</html>
