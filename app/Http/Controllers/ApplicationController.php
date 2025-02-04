<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\Application;
use App\Models\Beneficiary;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\App;

use Vonage\Client;
use Vonage\Client\Credentials\Basic;
use Vonage\SMS\Message\SMS;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

use GuzzleHttp\Client as GClient;




class ApplicationController extends Controller
{

    public function showForm($id)
    {
        // Fetch the specific service using its ID
        $service = Service::findOrFail($id);

        // Fetch the user's latest application for the given service
        $savedData = Application::where('user_id', Auth::id())
            ->where('service_id', $id)
            ->latest()
            ->first();

        // If data isn't found in applications, use the user's data
        if (!$savedData) {
            $savedData = Auth::user();
        }

        // Fetch all custom fields from the user_meta table
        $customFields = \DB::table('user_meta')
            ->where('user_id', Auth::id())
            ->pluck('meta_value', 'meta_key') // Fetch as key-value pairs
            ->toArray();

        // Extract individual custom fields (with default values if not found)
        $middleName = $customFields['middle_name'] ?? '';
        $birthdate = $customFields['birthdate'] ?? '';
        $age = $customFields['age'] ?? '';
        $sex = $customFields['sex'] ?? '';
        $birthplace = $customFields['birthplace'] ?? '';
        $status = $customFields['status'] ?? '';
        $address = $customFields['address'] ?? '';
        $educational_attainment = $customFields['educational_attainment'] ?? '';
        $occupation = $customFields['occupation'] ?? '';
        $annual_income = $customFields['annual_income'] ?? '';
        $other_skills = $customFields['other_skills'] ?? '';
        $suffix = $customFields['suffix'] ?? '';
        $application_type = $customFields['application_type'] ?? '';
        $pwd_num = $customFields['pwd_num'] ?? '';
        $landline = $customFields['landline'] ?? '';
        $blood_type = $customFields['blood_type'] ?? '';
        $civil_status = $customFields['civil_status'] ?? '';
        $type_of_disability = $customFields['type_of_disability'] ?? '';
        $cause_of_disability = $customFields['cause_of_disability'] ?? '';
        $congenital_or_inborn = $customFields['congenital_or_inborn'] ?? '';
        $specify_cause_of_disability_congenital = $customFields['specify_cause_of_disability_congenital'] ?? '';
        $for_acquired = $customFields['for_acquired'] ?? '';
        $specify_cause_of_disability_acquired = $customFields['specify_cause_of_disability_acquired'] ?? '';
        $street = $customFields['street'] ?? '';
        $barangay = $customFields['barangay'] ?? '';
        $occupation_pwd = $customFields['occupation_pwd'] ?? '';
        $specify_occupation = $customFields['specify_occupation'] ?? '';
        $status_of_employment = $customFields['status_of_employment'] ?? '';
        $category_of_employment = $customFields['category_of_employment'] ?? '';
        $types_of_employment = $customFields['types_of_employment'] ?? '';
        $org_affiliate = $customFields['org_affiliate'] ?? '';
        $org_contact_person = $customFields['org_contact_person'] ?? '';
        $org_office = $customFields['org_office'] ?? '';
        $org_tel_no = $customFields['org_tel_no'] ?? '';
        $sss_no = $customFields['sss_no'] ?? '';
        $gsis_no = $customFields['gsis_no'] ?? '';
        $pag_ibig_no = $customFields['pag_ibig_no'] ?? '';
        $psn_no = $customFields['psn_no'] ?? '';
        $philhealth_no = $customFields['philhealth_no'] ?? '';
        $father_name = $customFields['father_name'] ?? '';
        $father_occupation = $customFields['father_occupation'] ?? '';
        $father_contact = $customFields['father_contact'] ?? '';
        $mother_name = $customFields['mother_name'] ?? '';
        $mother_occupation = $customFields['mother_occupation'] ?? '';
        $mother_contact = $customFields['mother_contact'] ?? '';
        $guardian_name = $customFields['guardian_name'] ?? '';
        $guardian_occupation = $customFields['guardian_occupation'] ?? '';
        $guardian_contact = $customFields['guardian_contact'] ?? '';
        $role = $customFields['role'] ?? '';
        $applicant_lastname = $customFields['applicant_lastname'] ?? '';
        $applicant_firstname = $customFields['applicant_firstname'] ?? '';
        $applicant_middlename = $customFields['applicant_middlename'] ?? '';
        $guardian_lastname = $customFields['guardian_lastname'] ?? '';
        $guardian_firstname = $customFields['guardian_firstname'] ?? '';
        $guardian_middlename = $customFields['guardian_middlename'] ?? '';
        $representative_lastname = $customFields['representative_lastname'] ?? '';
        $representative_firstname = $customFields['representative_firstname'] ?? '';
        $representative_middlename = $customFields['representative_middlename'] ?? '';
        $religion = $customFields['religion'] ?? '';
        $company_or_agency = $customFields['company_or_agency'] ?? '';
        $monthly_income = $customFields['monthly_income'] ?? '';
        $fourps_beneficiary = $customFields['fourps_beneficiary'] ?? '';
        $indigenous_person = $customFields['indigenous_person'] ?? '';
        $classification_of_SP = $customFields['classification_of_SP'] ?? '';
        $needs_or_problems = $customFields['needs_or_problems'] ?? '';
        $emergency_contact_name = $customFields['emergency_contact_name'] ?? '';
        $emergency_contact_address = $customFields['emergency_contact_address'] ?? '';
        $emergency_contact_relationship = $customFields['emergency_contact_relationship'] ?? '';
        $emergency_contact_number = $customFields['emergency_contact_number'] ?? '';
        $referral_source = $customFields['referral_source'] ?? '';


        $familyMembers = [];
        if (!empty($customFields['family_members'])) {
            $familyMembers = json_decode($customFields['family_members'], true);
        }

        // Pass all data to the view
        return view('applications.form', compact(
            'service',
            'savedData',
            'middleName',
            'birthdate',
            'age',
            'sex',
            'birthplace',
            'status',
            'address',
            'educational_attainment',
            'occupation',
            'annual_income',
            'other_skills',
            'familyMembers', // Include this
            'suffix',
            'application_type',
            'pwd_num',
            'landline',
            'blood_type',
            'civil_status',
            'type_of_disability',
            'cause_of_disability',
            'congenital_or_inborn',
            'specify_cause_of_disability_congenital',
            'for_acquired',
            'specify_cause_of_disability_acquired',
            'street',
            'barangay',
            'occupation_pwd',
            'specify_occupation',
            'status_of_employment',
            'category_of_employment',
            'types_of_employment',
            'org_affiliate',
            'org_contact_person',
            'org_office',
            'org_tel_no',
            'sss_no',
            'gsis_no',
            'pag_ibig_no',
            'psn_no',
            'philhealth_no',
            'father_name',
            'father_occupation',
            'father_contact',
            'mother_name',
            'mother_occupation',
            'mother_contact',
            'guardian_name',
            'guardian_occupation',
            'guardian_contact',
            'role',
            'applicant_lastname',
            'applicant_firstname',
            'applicant_middlename',
            'guardian_lastname',
            'guardian_firstname',
            'guardian_middlename',
            'representative_lastname',
            'representative_firstname',
            'representative_middlename',
            'religion',
            'company_or_agency',
            'monthly_income',
            'fourps_beneficiary',
            'indigenous_person',
            'classification_of_SP',
            'needs_or_problems',
            'emergency_contact_name',
            'emergency_contact_address',
            'emergency_contact_relationship',
            'emergency_contact_number',
            'referral_source',

        ));
    }





    public function submitApplication(Request $request)
    {
        // Common fields validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'date_applied' => 'required|date',
            'service_id' => 'required|exists:services,id',
        ]);

        // Handle saving custom fields (like middle_name) for future applications
        if ($request->has('save_for_next_application')) {
            $user = Auth::user();



            // Define custom fields to save
            $customFields = [
                'middle_name' => $request->middle_name,
                'birthdate' => $request->birthdate,
                'age' => $request->age,
                'sex' => $request->sex,
                'birthplace' => $request->birthplace,
                'status' => $request->status,
                'address' => $request->address,
                'educational_attainment' => $request->educational_attainment,
                'occupation' => $request->occupation,
                'annual_income' => $request->annual_income,
                'other_skills' => $request->other_skills,
                'suffix' => $request->suffix,
                'application_type' => $request->application_type,
                'pwd_num' => $request->pwd_num,
                'landline' => $request->landline,
                'blood_type' => $request->blood_type,
                'civil_status' => $request->civil_status,
                'type_of_disability' => $request->type_of_disability,
                'cause_of_disability' => $request->cause_of_disability,
                'congenital_or_inborn' => $request->congenital_or_inborn,
                'specify_cause_of_disability_congenital' => $request->specify_cause_of_disability_congenital,
                'for_acquired' => $request->for_acquired,
                'specify_cause_of_disability_acquired' => $request->specify_cause_of_disability_acquired,
                'street' => $request->street,
                'barangay' => $request->barangay,
                'occupation_pwd' => $request->occupation_pwd,
                'specify_occupation' => $request->specify_occupation,
                'status_of_employment' => $request->status_of_employment,
                'category_of_employment' => $request->category_of_employment,
                'types_of_employment' => $request->types_of_employment,
                'org_affiliate' => $request->org_affiliate,
                'org_contact_person' => $request->org_contact_person,
                'org_office' => $request->org_office,
                'org_tel_no' => $request->org_tel_no,
                'sss_no' => $request->sss_no,
                'gsis_no' => $request->gsis_no,
                'pag_ibig_no' => $request->pag_ibig_no,
                'psn_no' => $request->psn_no,
                'philhealth_no' => $request->philhealth_no,
                'father_name' => $request->philhealth_no,
                'father_occupation' => $request->father_occupation,
                'father_contact' => $request->father_contact,
                'mother_name' => $request->mother_name,
                'mother_occupation' => $request->mother_occupation,
                'mother_contact' => $request->mother_contact,
                'guardian_name' => $request->guardian_name,
                'guardian_occupation' => $request->guardian_occupation,
                'guardian_contact' => $request->guardian_contact,
                'role' => $request->role,
                'applicant_lastname' => $request->applicant_lastname,
                'applicant_firstname' => $request->applicant_firstname,
                'applicant_middlename' => $request->applicant_middlename,
                'guardian_lastname' => $request->guardian_lastname,
                'guardian_firstname' => $request->guardian_firstname,
                'guardian_middlename' => $request->guardian_middlename,
                'representative_lastname' => $request->representative_lastname,
                'representative_firstname' => $request->representative_firstname,
                'representative_middlename' => $request->representative_middlename,
                'religion' => $request->religion,
                'company_or_agency' => $request->company_or_agency,
                'monthly_income' => $request->monthly_income,
                'fourps_beneficiary' => $request->fourps_beneficiary,
                'indigenous_person' => $request->indigenous_person,
                'classification_of_SP' => $request->classification_of_SP,
                'needs_or_problems' => $request->needs_or_problems,
                'emergency_contact_name' => $request->emergency_contact_name,
                'emergency_contact_address' => $request->emergency_contact_address,
                'emergency_contact_relationship' => $request->emergency_contact_relationship,
                'emergency_contact_number' => $request->emergency_contact_number,
                'referral_source' => $request->referral_source,

            ];

            // Save each custom field into the user_meta table
            foreach ($customFields as $key => $value) {
                if ($value !== null) { // Only save non-null values
                    \DB::table('user_meta')->updateOrInsert(
                        ['user_id' => $user->id, 'meta_key' => $key],
                        ['meta_value' => $value]
                    );
                }
            }

        }

        // Handle dynamic family member data
        if ($request->has('person_name_1')) { // Check if at least one family member is provided
            $familyMembers = [];
            for ($i = 1; $i <= 10; $i++) { // Maximum of 10 family members
                if ($request->filled("person_name_$i")) {
                    $familyMembers[] = [
                        'name' => $request->input("person_name_$i"),
                        'relation' => $request->input("relation_$i"),
                        'age' => $request->input("age_$i"),
                        'civil_status' => $request->input("civil_$i"),
                        'occupation' => $request->input("occupation_$i"),
                        'income' => $request->input("income_$i"),
                        'education' => $request->input("education_$i"),
                        'monthly' => $request->input("monthly_$i"),
                        'birthday' => $request->input("birthday_$i"),
                        'sex' => $request->input("sex_$i"),
                    ];
                }
            }

            // Save family members as a single JSON entry in user_meta
            if (!empty($familyMembers)) {
                \DB::table('user_meta')->updateOrInsert(
                    ['user_id' => Auth::id(), 'meta_key' => 'family_members'],
                    ['meta_value' => json_encode($familyMembers)]
                );
            }
        }






        // Validate Congenital Fields
        if ($request->cause_of_disability === 'congenital') {
            $validated += $request->validate([
                'congenital_or_inborn' => 'required|string', // Required if congenital is selected
                'specify_cause_of_disability_congenital' => 'nullable|string|max:255', // Only if 'others' is selected
            ]);

            if ($request->congenital_or_inborn === 'others' && !$request->specify_cause_of_disability_congenital) {
                return redirect()->back()->withErrors(['specify_cause_of_disability_congenital' => 'Please specify your congenital or inborn condition.']);
            }
        }

        // Validate Acquired Fields
        if ($request->cause_of_disability === 'acquired') {
            $validated += $request->validate([
                'for_acquired' => 'required|string', // Required if acquired is selected
                'specify_cause_of_disability_acquired' => 'nullable|string|max:255', // Only if 'others' is selected
            ]);

            if ($request->for_acquired === 'others' && !$request->specify_cause_of_disability_acquired) {
                return redirect()->back()->withErrors(['specify_cause_of_disability_acquired' => 'Please specify your acquired condition.']);
            }
        }

        // Extract custom fields dynamically
        $customFields = $request->except(['name', 'email', 'phone', 'date_applied', 'service_id', '_token', 'save_for_next_application']);

        // Save application
        $data = new Application;
        $data->user_id = Auth::id();
        $data->service_id = $request->service_id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->date_applied = $request->date_applied;
        $data->status = 'Pending';
        $data->custom_fields = json_encode($customFields); // Save custom fields as JSON
        $data->save();

        $apply = Application::where('user_id', Auth::id())->with('service')->get();

        // Pass the data to the view
        return redirect()->route('myapplication')->with('message', 'Application Request Successful!');


    }



    public function showAllApplications()
    {
        $applications = Application::with('service')->get(); // Include service relationship
        return view('applications.all', ['data' => $applications]);
    }

    public function showApplications()
    {
        $data = Application::with('service')->get(); // Fetch applications with their services
        return view('admin.displayapplication', compact('data'));
    }


    // In ApplicationController.php
// In ApplicationController.php

    public function history($id)
    {
        // Fetch application details by ID
        $application = Application::find($id);

        if (!$application) {
            return redirect()->back()->with('error', 'Application not found.');
        }


        // Return a view with the application details
        return view('applications.history', ['application' => $application]);
    }

    public function approveApplication($id)
    {
        // Find the application by ID
        $application = Application::find($id);

        // If the application is not found, redirect back with an error message
        if (!$application) {
            return redirect()->back()->with('error', 'Application not found.');
        }

        // Mark the application as approved
        $application->status = 'approved';
        $application->approved_by = auth()->id();  // Store the ID of the user who approved
        $application->approved_at = now();  // Store the current timestamp of approval
        $application->save();  // Save the changes

        // Check if the beneficiary already exists by email
        if (!Beneficiary::where('email', $application->email)->exists()) {
            // Create a new beneficiary if they don't exist
            Beneficiary::create([
                'name' => $application->name,
                'email' => $application->email,
                'phone' => $application->phone,
                'program_enrolled' => $application->service_id,
                'barangay' => json_decode($application->custom_fields, true)['barangay'] ?? null,
            ]);
        }

        // Send SMS notification to the beneficiary


        // Redirect to the beneficiaries list page with a success message
        return redirect()->route('.index')->with('success', 'Application approved and SMS Sent.');
    }

    //public function generatePdf()
//{
    // Fetch the application data by ID


    // Pass data to the Blade view
    //$pdf = App::make('dompdf.wrapper');
    //$pdf->loadHTML('<h1>Try</h1>');
    // Download the PDF
    // return $pdf->download();
//}


    public function cancelApplication(Request $request)
    {
        $application = Application::find($request->application_id);

        if ($application) {
            $application->status = 'rejected';
            $application->cancellation_reason = $request->reason;
            $application->save();

            return redirect()->back()->with('success', 'Application cancelled successfully.');
        }

        return redirect()->back()->with('error', 'Application not found.');
    }

    public function updateCancellationReason(Request $request, $id)
    {
        $application = Application::find($id);

        if ($application) {
            // Validate and update the cancellation reason
            $request->validate([
                'reason' => 'required|string|max:255',
            ]);

            $application->cancellation_reason = $request->reason;
            $application->save();

            return redirect()->back()->with('success', 'Cancellation reason updated successfully!');
        }

        return redirect()->back()->with('error', 'Application not found.');
    }



    public function showApplicationDetails($id)
    {
        $application = Application::find($id);

        if ($application) {
            return view('employee.application-view', compact('application'));
        }

        return redirect()->back()->with('error', 'Application not found.');
    }

    public function showApplicationDetailsAdmin($id)
    {
        $application = Application::with('service')->find($id);

        if (!$application) {
            return redirect()->route('admin.application.view')->with('error', 'Application not found.');
        }

        return view('admin.application-view', compact('application'));
    }




    public function generatePDF($id)
    {
        // Fetch the application and eagerly load the service
        $application = Application::with('service')->findOrFail($id);

        // Check the service ID to determine which view to use
        $viewName = '';
        switch ($application->service->id) {
            case 1: // If service ID is 2
                $viewName = 'applications.application_form_osca';
                break;
            case 2: // If service ID is 2
                $viewName = 'applications.application_form_pwd';
                break;
            case 3: // If service ID is 3
                $viewName = 'applications.application_form';
                break;
            case 4: // If service ID is 4
                $viewName = 'applications.application_form_aics';
                break;
            default:
                return back()->with('error', 'No PDF form found for this service.');
        }

        // Generate PDF from the appropriate Blade view
        $pdf = PDF::loadView($viewName, compact('application'))
            ->setPaper('legal', 'portrait'); // Paper size: 'legal', Orientation: 'portrait';

        // Download the PDF
        return $pdf->download('application_form_' . $application->id . '.pdf');
    }





    public function sendSMS($id)
    {
        // Find the approved application
        $application = Application::findOrFail($id);

        // Send SMS using IPROG SMS API
        $this->sendSMSNotification($application->phone);

        return redirect()->route('show.application')->with('success', 'SMS Sent!');
    }



    public function sendSMSNotification($phoneNumber)
    {
        // Normalize phone number format
        if (substr($phoneNumber, 0, 1) === '0') {
            $phoneNumber = '+63' . substr($phoneNumber, 1);
        }

        $client = new GClient();
        $message = 'Your application has been approved. Please log in to your account for further instructions.';
        $status = 'Sent'; // Default status to Failed

        try {
            // Prepare the API request
            $apiRequest = 'https://sms.iprogtech.com/api/v1/sms_messages?api_token=e31dd3a01be088abf8e51a6ba21611363e3f31bd&phone_number=' . $phoneNumber . '&message=' . urlencode($message);

            // Make the API call
            $response = $client->post($apiRequest);
            $responseBody = json_decode($response->getBody(), true);

            // Log the full response for debugging
            Log::info("API response for $phoneNumber: " . json_encode($responseBody));

            // Check if the response indicates success
            if (isset($responseBody['status']) && strtolower($responseBody['status']) === 'success') {
                $status = 'Sent';
            } else {
                Log::error("SMS sending failed for $phoneNumber. API response: " . json_encode($responseBody));
            }

        } catch (\Exception $e) {
            // Log exception details
            Log::error("Exception occurred while sending SMS to $phoneNumber: " . $e->getMessage());
        }

        // Log the SMS status into the database
        \DB::table('sms_logs')->insert([
            'phone_number' => $phoneNumber,
            'status' => $status,
            'message' => $message,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return $status;
    }











    public function getApplicationDetails($id)
    {
        $application = Application::with('service')->find($id);

        if (!$application) {
            return response()->json(['error' => 'Application not found'], 404);
        }

        // Extract custom fields (Ensure this exists in the Application model or logic)
        $customFields = json_decode($application?->custom_fields, true) ?? [];
        // Adjust this based on your actual structure

        // Get the requirements based on service and aics_type
        $requirements = $this->getRequirements($application, $customFields);

        return response()->json([
            'program_name' => $application?->service->name ?? 'No Service Assigned',
            'phone' => $application?->phone,
            'status' => $application?->status,
            'date_applied' => $application?->created_at->format('F d, Y'),
            'employee_name' => $application?->employee_name ?? 'Pending',
            'last_name' => $application?->approvedBy->last_name ?? 'Data',
            'first_name' => $application?->approvedBy->first_name ?? 'No',
            'approved_at' => $application?->approved_at?->diffForHumans() ?? 'Pending',
            'appearance_date' => $application?->appearance_date,
            'cancellation_reason' => $application?->cancellation_reason,
            'aics_type' => $customFields['aics_type'] ?? 'None', // Include AICS type
            'requirements' => $requirements
        ]);
    }

    // Update the getRequirements function to include customFields
    private function getRequirements($application, $customFields)
    {
        $requirements = [];

        if (!$application->service) {
            return ['No specific requirements'];
        }

        if ($application->service->id == 4) { // AICS service
            $aicsType = $customFields['aics_type'] ?? 'Default';


            switch ($aicsType) {
                case 'Medical Assistance':
                    $requirements = [
                        'Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy',
                        'Medical Certification/Clinical Abstract issued within 3 months (with signature and license number of the attending physician - 1 original and 2 photocopy',
                        'Statement of Account/Billing Statement(for Billing) - 1 original and 2 photocopy',
                        'Pharmacy Receipt - 1 original and 2 photocopy',
                        "Doctor's Prescription - 1 original and 2 photocopy",
                        'Fully accomplished Application Form'
                    ];
                    break;
                case 'Burial Assistance':
                    $requirements = [
                        'Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy',
                        'Registered Death Certificate - 1 original and 2 photocopy',
                        'Funeral Contract - 1 original and 2 photocopy',
                        'Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy',
                        "Senior Citizen's Id (deceased senior citizen) - Certified True Copy and 2 photocopy",
                        'Fully accomplished Application Form'
                    ];
                    break;
                case 'Transportation Assistance':
                    $requirements = [
                        'Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy',
                        'Social Case Study Report - 2 Original Copy',
                        'Letter Request - 1 original and 2 photocopy',
                        'Fully accomplished Application Form'
                    ];
                    break;
                case 'Food Assistance':
                    $requirements = [
                        'Intake/Interview of clients suffering from starvation to determine eligibility for assistance',
                        'Fully accomplished Application Form'
                    ];
                    break;
                case 'Emergency Shelter Assistance':
                    $requirements = [
                        'Fully accomplished Application Form',
                        'Bureau of Fire Protection Certification',
                        "Intake/Interview of client to determine one's eligibility for assistance",
                        'Picture of the damaged house - 3 copies',
                        'Fully accomplished Application Form'
                    ];
                    break;
                case 'Educational Assistance':
                    $requirements = [
                        'Any valid ID/Barangay Certificate/ Certificate of Indigency - 3 photocopies',
                        'School ID of student/beneficiary - 3 photocopies',
                        'Certificate of Enrollment or Registration - 1 original and 2 photocopy',
                        'Assessment Form/Statement of Account - 1 original and 2 photocopy',
                        'Social Case Study Report (SCSR) from the MSWDO',
                        'Fully accomplished Application Form'
                    ];
                    break;
                default:
                    $requirements = ['No specific requirements'];
                    break;
            }
        } else {
            // Other services' requirements
            switch ($application->service->id) {
                case 1:
                    $requirements = ['Valid ID', 'Accomplished Certification and Authorization', 'Certificate of Existence', 'Fully accomplished Application Form'];
                    break;
                case 2:
                    $requirements = ['Updated Barangay Certificate', '1x1 ID Picture', 'Birth Certificate / Voter\'s Certification', 'Medical Certificate', 'Whole Body picture of PWD applicant', 'Fully accomplished Application Form'];
                    break;
                case 3:
                    $requirements = ['Certificate of No Marriage (CENOMAR)', '2×2 Photo', 'Fully accomplished Application Form', 'PSA Birth Certificate/s', 'Spouse’s Death Certificate', 'Certificate of Annulment/Nullity of Marriage', 'Income Tax Return (ITR) or Document Showing Income Level', 'Barangay Certificate', 'Proof of Financial Status', 'Supporting Documents/Certificates'];
                    break;
                default:
                    $requirements = ['No specific requirements'];
                    break;
            }
        }

        return $requirements;
    }




}
