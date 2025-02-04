<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Service;
use App\Models\Beneficiary;
use App\Models\Barangay;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\WithPagination;
use App\Models\BenefitReceived;
use Illuminate\Pagination\LengthAwarePaginator;

class EmployeeController extends Controller
{
    use WithPagination;
    public function showapplication()
    {
        $data = Application::orderBy('created_at', 'desc')->paginate(10);

        return view('employee.showapplication', compact('data'));


    }

    public function approved($id)
    {
        $data = Application::find($id);

        if ($data) {
            // Get the logged-in employee's name
            $employeeName = Auth::user()->first_name . ' ' . Auth::user()->last_name;

            // Update the application's status and assign the approving employee's name
            $data->status = 'accepted';
            $data->employee_name = $employeeName; // Save the employee's name
            $data->save();
        }
        $applicationController = new ApplicationController();
        $applicationController->sendSMSNotification($data->phone);

        return redirect()->back()->with('success', 'Application accepted successfully!');
    }

    public function cancelled($id)
    {
        $data = Application::find($id);

        if ($data) {
            // Update the application's status
            $data->status = 'cancelled';
            $data->employee_name = null; // Clear the employee's name for canceled applications
            $data->save();
        }

        return redirect()->back()->with('success', 'Application canceled successfully!');
    }

    public function display_beneficiaries()
    {
        $page = request()->get('page', 1);
        $perPage = 10;

        $applications = Application::where('approved_at', '!=', null)
            ->where('approved_by', '!=', null)
            ->get()
            ->map(function ($application) {
                $application->source = 'Application';
                return $application;
            });
        $beneficiaries = Beneficiary::with(['barangay', 'familyCompositions'])
            ->get()
            ->map(function ($beneficiary) {
                $beneficiary->source = 'Beneficiary';
                return $beneficiary;
            });
        $barangays = Barangay::all();
        $services = Service::all();

        $merged = collect([...$applications, ...$beneficiaries])
            ->sortByDesc(function ($item) {
                return $item->approved_at !== null ? $item->approved_at : $item->created_at;
            });

        $paginatedData = $merged->forPage($page, $perPage);

        $data = new LengthAwarePaginator(
            $paginatedData,
            $merged->count(),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );
        return view('employee.display_beneficiaries', compact('barangays', 'services', 'beneficiaries', 'data'));
    }



    public function edit_beneficiaries_employee_form($id)
    {
        $beneficiary = Beneficiary::findOrFail($id);
        $services = Service::all();
        $barangays = Barangay::all();

        return view('employee.edit_beneficiaries_employee', compact('beneficiary', 'services', 'barangays'));
    }

    public function update_beneficiary($id, Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'middle_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'program_enrolled' => 'required|exists:services,id',
            'barangay_id' => 'required|exists:barangays,id', // Ensure the selected barangay is valid
            'date_of_birth' => 'required|date',
            'age' => 'required|integer',
            'gender' => 'required|string|in:Male,Female,Other',
            'civil_status' => 'required|string|in:Single,Married,Widowed,Divorced',
            'gov_id_number' => 'required|string|max:255',
            'program_specific_id' => 'required|string|max:255',
            'date_of_application' => 'required|date',
            'assistance_availed' => 'required|string|max:255',
            'other_fields' => 'nullable|string|max:255',
        ]);

        $beneficiary = Beneficiary::findOrFail($id);
        $beneficiary->first_name = $request->input('first_name');
        $beneficiary->middle_name = $request->input('middle_name');
        $beneficiary->last_name = $request->input('last_name');
        $beneficiary->email = $request->input('email');
        $beneficiary->phone = $request->input('phone');
        $beneficiary->program_enrolled = $request->input('program_enrolled');
        $beneficiary->barangay_id = $request->input('barangay_id'); // Update the barangay_id
        $beneficiary->date_of_birth = $request->input('date_of_birth');
        $beneficiary->age = $request->input('age');
        $beneficiary->gender = $request->input('gender');
        $beneficiary->civil_status = $request->input('civil_status');
        $beneficiary->gov_id_number = $request->input('gov_id_number');
        $beneficiary->program_specific_id = $request->input('program_specific_id');
        $beneficiary->assistance_availed = $request->input('assistance_availed');
        $beneficiary->other_fields = $request->input('other_fields');



        // Save the changes
        $beneficiary->save();

        // Redirect back with a success message
        return redirect()->route('show.beneficiaries_index')->with('message', 'Beneficiary updated successfully!');
    }
    public function beneficiary_search_emp(Request $request)
    {
        $search = $request->search;

        // Use a JOIN to search by service and barangay name
        $beneficiaries = Beneficiary::with('barangay', 'service')
            ->where(function ($query) use ($search) {
                // Search beneficiaries by first, middle, last name, email, and phone
                $query->where('first_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('middle_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('last_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('email', 'LIKE', '%' . $search . '%')
                    ->orWhere('phone', 'LIKE', '%' . $search . '%')
                    // Search by program_enrolled (service name)
                    ->orWhereHas('service', function ($query) use ($search) {
                    $query->where('name', 'LIKE', '%' . $search . '%');
                })
                    // Search by barangay (barangay name)
                    ->orWhereHas('barangay', function ($query) use ($search) {
                    $query->where('name', 'LIKE', '%' . $search . '%');
                });
            })
            ->get();

        return view('employee.display_beneficiaries', compact('beneficiaries'));
    }

    public function apply_search(Request $request)
    {
        $search = $request->search;

        $data = Application::with('service')
            ->where(function ($query) use ($search) {
                // Search by name (full name) or individual fields
                $query->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('email', 'LIKE', '%' . $search . '%')
                    ->orWhere('phone', 'LIKE', '%' . $search . '%')
                    ->orWhereHas('service', function ($query) use ($search) {
                    $query->where('name', 'LIKE', '%' . $search . '%');
                })

                    ->orWhere('status', 'LIKE', '%' . $search . '%')
                    // Search for employee_name, include 'pending' or null (no employee assigned)
                    // Include search on date_applied
                    ->orWhere('date_applied', 'LIKE', '%' . $search . '%');

            })
            ->orderBy('created_at', 'desc')
            ->paginate(10); // Add pagination

        return view('employee.showapplication', compact('data'));
    }

    public function viewSMSLogs()
    {

        // Fetch all SMS logs (or use pagination if necessary)
        $smsLogs = \DB::table('sms_logs')->latest()->get();

        // Pass the SMS logs to the view
        return view('employee.sms_logs', compact('smsLogs'));
    }

    public function resendSMS($phoneNumber)
    {
        Log::info("ResendSMS called for: " . $phoneNumber);

        try {
            // Fetch the latest SMS log
            $smsLog = \DB::table('sms_logs')->where('phone_number', $phoneNumber)->latest()->first();

            if (!$smsLog) {
                Log::error("No SMS log found for: " . $phoneNumber);
                return redirect()->route('sms.logs')->with('error', 'No SMS log found for this number.');
            }

            // Resend the SMS
            $applicationController = new ApplicationController();
            $status = $applicationController->sendSMSNotification($phoneNumber);

            // Update the log with the new status
            \DB::table('sms_logs')->where('id', $smsLog->id)->update([
                'status' => $status,
                'updated_at' => now(),
            ]);

            Log::info("SMS resend status updated to '$status' for $phoneNumber");

            return $status === 'Sent'
                ? redirect()->route('sms.logs')->with('success', 'SMS has been resent successfully!')
                : redirect()->route('sms.logs')->with('error', 'Failed to resend SMS.');
        } catch (\Exception $e) {
            Log::error("Error while resending SMS for $phoneNumber: " . $e->getMessage());
            return redirect()->route('sms.logs')->with('error', 'An error occurred while resending SMS.');
        }
    }



//release assistance


public function releaseAssistance()
{
    // Eager load the barangay and benefitsReceived relationships
    $beneficiaries = Beneficiary::with('barangay', 'benefitsReceived')->get();
    $services = Service::all();
    $barangays = Barangay::all(); // Fetch all barangays if needed

    // Fetch distinct name_of_assistance values
    $assistanceList = BenefitReceived::distinct()->pluck('name_of_assistance')->toArray();

    $nameOfAssistance = null;

    return view('employee.assistance_release', compact('barangays', 'services', 'beneficiaries', 'assistanceList', 'nameOfAssistance'));
}



public function filterBenefits(Request $request)
{
    $nameOfAssistance = $request->input('name_of_assistance');

    $beneficiaries = Beneficiary::whereHas('benefitsReceived', function ($query) use ($nameOfAssistance) {
        $query->where('name_of_assistance', $nameOfAssistance);
    })
    ->with(['benefitsReceived' => function ($query) use ($nameOfAssistance) {
        $query->where('name_of_assistance', $nameOfAssistance);
    }, 'service', 'barangay'])
    ->get();

    $assistanceList = BenefitReceived::distinct()->pluck('name_of_assistance');

    return view('employee.assistance_release', compact('beneficiaries', 'assistanceList', 'nameOfAssistance'));
}



public function markNotReceived($id)
{
    $benefit = BenefitReceived::findOrFail($id);
    $benefit->status = 'Not Received';
    $benefit->date_received = null; // Clear the received date if necessary
    $benefit->save();

    return redirect()->back()->with('success', 'Benefit marked as Not Received.');
}

public function markReceived($id)
{
    $benefit = BenefitReceived::findOrFail($id);
    $benefit->status = 'Received';
    $benefit->date_received = now(); // Set the current timestamp
    $benefit->save();

    return redirect()->back()->with('success', 'Benefit marked as Received.');
}


}
