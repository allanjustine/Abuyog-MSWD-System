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
                                    style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['application_type']) && $customFields['application_type'] === 'new_applicant' ? 'black' : 'white' }};">
                                </div>

                                <a style="font-weight: bold; margin-right: 4px;">NEW APPLICANT</a>

                                <!-- RENEWAL Option -->
                                <div
                                    style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 40px; background-color: {{ isset($customFields['application_type']) && $customFields['application_type'] === 'renewal' ? 'black' : 'white' }};">
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
                                    style="display: block; min-height: 12px;">{{ $customFields['pwd_num'] ?? '' }}</span>
                            </td>
                            <td colspan="2"
                                style="border: 1px solid #000; padding: 1px 4px; width: 25%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 2px;">3. Date Applied
                                    (mm/dd/yyyy)</a>
                                <span style="display: block; min-height: 12px;">{{ $application->date_applied }}</span>
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
                                    style="display: block; min-height: 15px;">{{ strtoupper( $customFields['last_name'] ?? '' )}}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">FIRST NAME:</a>
                                <span style="display: block; min-height: 20px;">{{strtoupper(  $application->name) }}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 18%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">MIDDLE NAME:</a>
                                <span
                                    style="display: block; min-height: 20px;">{{strtoupper(  $customFields['middle_name'] ?? '') }}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 10%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">SUFFIX:</a>
                                <span
                                    style="display: block; min-height: 20px;">{{strtoupper(  $customFields['suffix'] ?? '' )}}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 12%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">BLOOD TYPE:</a>
                                <span
                                    style="display: block; min-height: 20px;">{{strtoupper(  $customFields['blood_type'] ?? '') }}</span>
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
                                    style="display: block; min-height: 15px;">{{ $customFields['birthdate'] ?? '' }}</span>
                            </td>
                            <td
                                style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top; line-height: 1.2;">
                                <a style="font-weight: bold; display: block; margin-bottom: 2px;">6. SEX:</a>
                                <div
                                    style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['sex']) && $customFields['sex'] === 'female' ? 'black' : 'white' }};">
                                </div>
                                <a style="font-weight: bold; margin-right: 8px; ">FEMALE</a>
                            </td>
                            <td
                                style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top; line-height: 1.2;">
                                <div style="display: inline-block; margin-top: 15px;">
                                    <div
                                        style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 10px; background-color: {{ isset($customFields['sex']) && $customFields['sex'] === 'male' ? 'black' : 'white' }};">
                                    </div>
                                    <a style="font-weight: bold; margin-right: 8px; ">MALE</a>
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
                                        style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['civil_status']) && $customFields['civil_status'] === 'single' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Single</span>
                                    <div
                                        style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['civil_status']) && $customFields['civil_status'] === 'separated' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Separated</span>
                                    <div
                                        style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['civil_status']) && $customFields['civil_status'] === 'cohabitation' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Cohabitation (live-in)</span>
                                    <div
                                        style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['civil_status']) && $customFields['civil_status'] === 'married' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Married</span>
                                    <div
                                        style="width: 5px; height: 5px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['civil_status']) && $customFields['civil_status'] === 'widow' ? 'black' : 'white' }};">
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
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['type_of_disability']) && $customFields['type_of_disability'] === 'deaf' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 20px; ">Deaf or hard of Hearing</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['type_of_disability']) && $customFields['type_of_disability'] === 'psychosocial' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 5px; ">Psychosocial Disability</span>
                                </span>
                                <span style="display: block; min-height: 12px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['type_of_disability']) && $customFields['type_of_disability'] === 'intellectual' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 34px; ">Intellectual Disability</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['type_of_disability']) && $customFields['type_of_disability'] === 'speech' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 5px; ">Speech and Language Impairment</span>
                                </span>
                                <span style="display: block; min-height: 12px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['type_of_disability']) && $customFields['type_of_disability'] === 'learning' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 43px; ">Learning Disability</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['type_of_disability']) && $customFields['type_of_disability'] === 'visual' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 5px; ">Visual Disability</span>
                                </span>
                                <span style="display: block; min-height: 12px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['type_of_disability']) && $customFields['type_of_disability'] === 'mental' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 52px; ">Mental Disability</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['type_of_disability']) && $customFields['type_of_disability'] === 'cancer' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Cancer (RA11215)</span>
                                </span>
                                <span style="display: block; min-height: 12px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['type_of_disability']) && $customFields['type_of_disability'] === 'physical' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 5px; ">Physical Disability (Orthopedic)</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 2px; background-color: {{ isset($customFields['type_of_disability']) && $customFields['type_of_disability'] === 'rare_disease' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Rare Disease (RA10747)</span>
                                </span>
                            </td>

                            <td style="border: 1px solid #000; padding: 3px; width: 45%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">9. CAUSE OF
                                    DISABLITY:</a>
                                <span style="display: block; min-height: 12px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 5px; background-color: {{ isset($customFields['cause_of_disability']) && $customFields['cause_of_disability'] === 'congenital' ? 'black' : 'white' }};">
                                    </div>
                                    <a style="font-weight: bold; margin-right: 2px; ">Congenital/Inborn</a>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 5px; background-color: {{ isset($customFields['cause_of_disability']) && $customFields['cause_of_disability'] === 'acquired' ? 'black' : 'white' }};">
                                    </div>
                                    <a style="font-weight: bold; margin-right: 40px; ">Acquired</a>
                                </span>
                                <span style="display: block; min-height: 12px; margin-top:5px; margin-left:10px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 15px; background-color: {{ isset($customFields['congenital_or_inborn']) && $customFields['congenital_or_inborn'] === 'autism' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Autism</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 5px; background-color: {{ isset($customFields['for_acquired']) && $customFields['for_acquired'] === 'chronic' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Chronic Illness</span>
                                </span>
                                <span style="display: block; min-height: 12px; margin-left:10px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 15px; background-color: {{ isset($customFields['congenital_or_inborn']) && $customFields['congenital_or_inborn'] === 'adhd' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">ADHD</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 7px; background-color: {{ isset($customFields['for_acquired']) && $customFields['for_acquired'] === 'cerebral_palsy' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Cerebral Palsy</span>
                                </span>
                                <span style="display: block; min-height: 12px; margin-left:10px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 15px; background-color: {{ isset($customFields['congenital_or_inborn']) && $customFields['congenital_or_inborn'] === 'cerebral' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 5px; ">Cerebral Palsy</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 5px; background-color: {{ isset($customFields['for_acquired']) && $customFields['for_acquired'] === 'injury' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px; ">Injury</span>
                                </span>
                                <span style="display: block; min-height: 12px; margin-left:10px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 15px; background-color: {{ isset($customFields['congenital_or_inborn']) && $customFields['congenital_or_inborn'] === 'down_syndrome' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 1px; ">Down Syndrome</span>

                                    <!-- Others -->

                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 1px; background-color: {{ isset($customFields['for_acquired']) && $customFields['for_acquired'] === 'others' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px;">Others:
                                        <span
                                            style="border-bottom: 1px solid #000; width: 80px; display: inline-block; ">{{ strtoupper( $customFields['specify_cause_of_disability_acquired'] ?? '') }}</span>

                                    </span>
                                </span>




                                <span style="display: block; min-height: 12px; margin-left:23px;">

                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 2px; display: inline-block; margin-left: 1px; background-color: {{ isset($customFields['congenital_or_inborn']) && $customFields['congenital_or_inborn'] === 'others' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 40px;">Others:
                                        <span
                                            style="border-bottom: 1px solid #000; width: 80px; display: inline-block; ">{{ strtoupper( $customFields['specify_cause_of_disability_congenital'] ?? '' )}}</span>

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
                                    style="display: block; min-height: 10px;">{{ strtoupper( $customFields['street'] ?? '')}}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">Barangay:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{strtoupper( $customFields['barangay'] ?? '' )}}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">Municipality:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{strtoupper(  $customFields['municipality'] ?? '' )}}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">Province:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{ strtoupper( $customFields['province'] ?? '' )}}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">Region:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{strtoupper(  $customFields['region'] ?? '') }}</span>
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
                                    style="display: block; min-height: 10px;">{{ $customFields['landline'] ?? '' }}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 30%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">Mobile No.:</a>
                                <span style="display: block; min-height: 10px;">{{ $application->phone }}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 45%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 4px;">E-mail Address:</a>
                                <span style="display: block; min-height: 10px;">{{ $application->email }}</span>
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
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['educational_attainment']) && $customFields['educational_attainment'] === 'none' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 80px;">None</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['educational_attainment']) && $customFields['educational_attainment'] === 'senior_high' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 5px;">Senior High School</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['educational_attainment']) && $customFields['educational_attainment'] === 'kindergarten' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 46px;">Kindergarten</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['educational_attainment']) && $customFields['educational_attainment'] === 'college' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 5px;">College</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['educational_attainment']) && $customFields['educational_attainment'] === 'elementary' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 53px;">Elementary</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['educational_attainment']) && $customFields['educational_attainment'] === 'vocational' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 5px;">Vocational</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['educational_attainment']) && $customFields['educational_attainment'] === 'junior_high' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 20px;">Junior High School</span>
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['educational_attainment']) && $customFields['educational_attainment'] === 'post_graduate' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-right: 5px;">Post Graduate</span>
                                </span>
                            </td>
                            <td rowspan="3"
                                style="border: 1px solid #000; padding: 4px 6px; width: 45%; vertical-align: top;">
                                <a style="font-weight: bold; display: block;">OCCUPATION:</a>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['occupation_pwd']) && $customFields['occupation_pwd'] === 'manager' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Managers</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['occupation_pwd']) && $customFields['occupation_pwd'] === 'professional' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Professionals</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['occupation_pwd']) && $customFields['occupation_pwd'] === 'technicians' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Technicians and Associate Professionals</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['occupation_pwd']) && $customFields['occupation_pwd'] === 'clerical' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Clerical Support Workers</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['occupation_pwd']) && $customFields['occupation_pwd'] === 'service_and_sales' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Service and Sales Workers</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['occupation_pwd']) && $customFields['occupation_pwd'] === 'skilled_agri' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Skilled Agricultural, Forestry and Fishery
                                        Workers</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['occupation_pwd']) && $customFields['occupation_pwd'] === 'craft' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Craft and Related Trade Workders</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['occupation_pwd']) && $customFields['occupation_pwd'] === 'plant_and_machine' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Plant and Machine Operators and
                                        Assemblers</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['occupation_pwd']) && $customFields['occupation_pwd'] === 'elementary_occupation' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Elementary Occupations</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['occupation_pwd']) && $customFields['occupation_pwd'] === 'armed_forces' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Armed Forces Occupations</span>
                                </span>
                                <span style="display: block;">
                                    @if(isset($customFields['occupation_pwd']) && $customFields['occupation_pwd'] === 'others')
                                        <div
                                            style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: black;">
                                        </div>
                                        <span style="margin-right: 40px;">Others:
                                            <span
                                                style="border-bottom: 1px solid #000; width: 80px; display: inline-block; ">{{ $customFields['specify_occupation'] ?? 'N/A' }}</span>

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
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['status_of_employment']) && $customFields['status_of_employment'] === 'employed' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Employed</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['status_of_employment']) && $customFields['status_of_employment'] === 'unemployed' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Unemployed</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['status_of_employment']) && $customFields['status_of_employment'] === 'self_employed' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Self-employed</span>
                                </span>
                            </td>
                            <td rowspan="2"
                                style="border: 1px solid #000; padding: 1px 4px; width: 25%; vertical-align: top;">
                                <a style="font-weight: bold; display: block;">13. b. TYPES OF EMPLOYMENT:</a>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['types_of_employment']) && $customFields['types_of_employment'] === 'permanent_or_regular' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Permanent/Regular</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['types_of_employment']) && $customFields['types_of_employment'] === 'seasonal' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Seasonal</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['types_of_employment']) && $customFields['types_of_employment'] === 'casual' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Casual</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['types_of_employment']) && $customFields['types_of_employment'] === 'emergency' ? 'black' : 'white' }};">
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
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['category_of_employment']) && $customFields['category_of_employment'] === 'government' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="margin-left: 10px;">Government</span>
                                </span>
                                <span style="display: block;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['category_of_employment']) && $customFields['category_of_employment'] === 'private' ? 'black' : 'white' }};">
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
                                    style="display: block; min-height: 10px;">{{ strtoupper( $customFields['org_affiliate'] ?? '' )}}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 25%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 2px;">Contact Person:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{ $customFields['org_contact_person'] ?? '' }}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 25%; vertical-align: top;">
                                <a style="font-weight: bold;display: block; margin-bottom: 2px;">Office Address:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{strtoupper(  $customFields['org_office'] ?? '' )}}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 25%; vertical-align: top;">
                                <a style="font-weight: bold;display: block; margin-bottom: 2px;">Tel. Nos.:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{ $customFields['org_tel_no'] ?? '' }}</span>
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
                                    style="display: block; min-height: 10px;">{{ $customFields['sss_no'] ?? '' }}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 2px;">GSIS NO.:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{ $customFields['gsis_no'] ?? '' }}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 2px;">PAG-IBIG NO.:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{ $customFields['pag_ibig_no'] ?? '' }}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 2px;">PSN NO.:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{ $customFields['psn_no'] ?? '' }}</span>
                            </td>
                            <td style="border: 1px solid #000; padding: 1px 4px; width: 20%; vertical-align: top;">
                                <a style="font-weight: bold; display: block; margin-bottom: 2px;">PhilHealth NO.:</a>
                                <span
                                    style="display: block; min-height: 10px;">{{ $customFields['philhealth_no'] ?? '' }}</span>
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
                                <span> {{strtoupper(  $customFields['father_name'] ?? '') }}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 4px 6px; width: 20%; vertical-align: top;">
                                <span>{{strtoupper(  $customFields['father_occupation'] ?? '') }}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top;">
                                <span>{{ $customFields['father_contact'] ?? '' }}</span>

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
                                <span> {{ strtoupper( $customFields['mother_name'] ?? '' )}}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 4px 6px; width: 20%; vertical-align: top;">
                                <span>{{strtoupper(  $customFields['mother_occupation'] ?? '') }}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top;">
                                <span>{{ $customFields['mother_contact'] ?? '' }}</span>

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
                                <span> {{strtoupper(  $customFields['guardian_name'] ?? '' )}}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 4px 6px; width: 20%; vertical-align: top;">
                                <span>{{strtoupper(  $customFields['guardian_occupation'] ?? '' )}}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top;">
                                <span>{{ $customFields['guardian_contact'] ?? '' }}</span>

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
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['role']) && $customFields['role'] === 'applicant' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="font-weight: bold; margin-left: 10px;">Applicant</span>
                                </span>
                                <span style="display: block; min-height: 1px;margin-bottom:15px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['role']) && $customFields['role'] === 'guardian' ? 'black' : 'white' }};">
                                    </div>
                                    <span style="font-weight: bold; margin-left: 10px; ">Guardian</span>
                                </span>
                                <span style="display: block; min-height: 1px; margin-bottom:-30px;">
                                    <div
                                        style="width: 6px; height: 6px; border: 1px solid black; border-radius: 50%; display: inline-block; margin-left: 20px; background-color: {{ isset($customFields['role']) && $customFields['role'] === 'representative' ? 'black' : 'white' }};">
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
                                <span> {{strtoupper(  $customFields['applicant_lastname'] ?? '' )}}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 4px 6px; width: 20%; vertical-align: top;">
                                <span>{{strtoupper(  $customFields['applicant_firstname'] ?? '') }}</span>

                            </td>
                            <td style="border: 1px solid #000; padding: 3px; width: 20%; vertical-align: top;">
                                <span>{{strtoupper(  $customFields['applicant_middlename'] ?? '' )}}</span>
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
            style="display: flex; flex-direction: column; justify-content: flex-end; align-items: center; width: 40%; font-size: 12px; margin-left: 380px; margin-top:-40px;">
            <!-- Name centered above the underline -->
            <span style="text-align: center; display: block; width: 100%; margin-bottom: 5px;">
                {{strtoupper(  $application->name) }} {{ strtoupper( $customFields['middle_name'] ?? '' )}} {{strtoupper(  $customFields['last_name'] ?? '') }}
                {{ $customFields['suffix'] ?? '' }}
            </span>
            <!-- Underline -->
            <span style="border-top: 2px solid #000; width: 100%; display: block;"></span>
            <a style="margin-top: 5px; text-align: center;">Printed Name and Signature of PWD</a>
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