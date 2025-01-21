<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use App\Models\Barangay;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\SmsLog;

use GuzzleHttp\Client as GClient;

class BeneficiaryController extends Controller
{
    /**
     * Display a list of beneficiaries.
     */
    public function index()
    {
        $beneficiaries = Beneficiary::with('barangay')->get();

        return view('admin.showbeneficiary', compact('beneficiaries'));
    }

    /**
     * Show form to create a new beneficiary.
     */
    public function createBeneficiary()
    {
        $barangays = Barangay::all();
        $services = Service::all();

        return view('admin.add_beneficiary', compact('barangays', 'services'));
    }

    /**
     * Fetch beneficiaries by program.
     *
     * @param string $program
     * @return \Illuminate\Http\JsonResponse
     */
    public function getBeneficiariesByProgram($program)
    {
        $beneficiaries = Beneficiary::where('program_enrolled', $program)
            ->with('barangay')
            ->get();

        $groupedBeneficiaries = $beneficiaries->groupBy('barangay_id')->map(function ($group) {
            return $group->map(function ($beneficiary) {
                return [
                    'name' => $beneficiary->first_name . ' ' . $beneficiary->middle_name . ' ' . $beneficiary->last_name,
                    'lat' => $beneficiary->latitude,
                    'lon' => $beneficiary->longitude,
                    'email' => $beneficiary->email,
                    'phone' => $beneficiary->phone,
                    'barangay_name' => $beneficiary->barangay->name ?? 'N/A', // Handle missing relationship
                ];
            })->values(); // Reset array keys
        });

        return response()->json($groupedBeneficiaries);
    }

    public function showOsca()
    {
        $beneficiaries = Beneficiary::whereHas('service', function ($query) {
            $query->where('name', 'OSCA(Office of Senior Citizens)');
        })->get();

        return view('dropdownope.osca', compact('beneficiaries'));
    }


    public function showPwd()
    {
        $beneficiaries = Beneficiary::whereHas('service', function ($query) {
            $query->where('name', 'PWD(Persons with Disabilities)');
        })->get();

        return view('dropdownope.pwd', compact('beneficiaries'));
    }
    public function showSoloParent()
    {
        $beneficiaries = Beneficiary::whereHas('service', function ($query) {
            $query->where('name', 'Solo Parent');
        })->get();

        return view('dropdownope.solo_parent', compact('beneficiaries'));

    }

    public function showAics()
    {
        $beneficiaries = Beneficiary::whereHas('service', function ($query) {
            $query->where('name', 'AICS(Assistance to Individuals in Crisis)');
        })->get();

        return view('dropdownope.aics', compact('beneficiaries'));



    }

    public function sendSMSNotification($phoneNumber, $message)
    {
        // Normalize phone number format
        if (substr($phoneNumber, 0, 1) === '0') {
            $phoneNumber = '+63' . substr($phoneNumber, 1);
        }

        $client = new GClient();
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


    public function sendBulkSMS(Request $request)
    {
        $phoneNumbers = $request->input('phoneNumbers');
        $message = $request->input('message'); // Get the custom message
        $successCount = 0;
        $failureCount = 0;

        foreach ($phoneNumbers as $phoneNumber) {
            $status = $this->sendSMSNotification($phoneNumber, $message);
            if ($status === 'Sent') {
                $successCount++;
            } else {
                $failureCount++;
            }
        }

        return response()->json([
            'success' => true,
            'message' => "$successCount messages sent successfully, $failureCount failed.",
        ]);
    }

    public function fetchSmsLogs()
{
    $logs = \DB::table('sms_logs')->orderBy('created_at', 'desc')->get();

    return response()->json(['logs' => $logs]);
}


public function resendSms($id)
{
    $log = \DB::table('sms_logs')->find($id);

    if (!$log) {
        return response()->json(['success' => false, 'message' => 'Log not found.']);
    }

    try {
        $status = $this->sendSMSNotification($log->phone_number, $log->message);

        \DB::table('sms_logs')->where('id', $id)->update([
            'status' => $status,
            'updated_at' => now(),
        ]);

        return response()->json(['success' => true, 'message' => 'SMS resent successfully.']);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'Failed to resend SMS.']);
    }
}

public function addBeneficiaryRecord() {

}


}
