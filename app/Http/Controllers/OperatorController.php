<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Beneficiary;
use App\Models\Barangay;  // Import Barangay model if needed


class OperatorController extends Controller
{
    public function showbeneficiaries_operator()
    {
        $beneficiaries = Beneficiary::with(['barangay', 'receiveds'])->get();
        $services = Service::all();
        $barangays = Barangay::all(); // Fetch all barangays if needed
        return view('operator.showbeneficiaries_operator', compact('barangays', 'services', 'beneficiaries'));
    }
    public function showbeneficiaries_admin()
    {
        $beneficiaries = Beneficiary::with(['barangay', 'receiveds'])->get();
        $services = Service::all();
        $barangays = Barangay::all(); // Fetch all barangays if needed
        return view('admin.showbeneficiary', compact('barangays', 'services', 'beneficiaries'));
    }
    // Add Beneficiary View
    public function addbeneficiaryoperator()
    {
        $services = Service::all(); // Fetch all services
        $barangays = Barangay::all(); // Fetch all barangays if needed
        return view('operator.add_beneficiary_operator', compact('services', 'barangays')); // Pass barangays to the view
    }

    public function edit_beneficiary_operator_form($id)
    {
        $beneficiary = Beneficiary::findOrFail($id);
        $services = Service::all();
        $barangays = Barangay::all();

        return view('operator.edit_beneficiary_operator', compact('beneficiary', 'services', 'barangays'));
    }
    // Update beneficiary details
    public function uploadbeneficiary_operator(Request $request)
    {
        $beneficiary = new Beneficiary;

        $beneficiary->first_name = $request->first_name;
        $beneficiary->middle_name = $request->middle_name;
        $beneficiary->last_name = $request->last_name;
        $beneficiary->suffix = $request->suffix;  // Added suffix
        $beneficiary->email = $request->email;
        $beneficiary->phone = $request->phone;
        $beneficiary->program_enrolled = $request->program_enrolled;
        $beneficiary->barangay_id = $request->barangay;
        $beneficiary->latitude = $request->latitude;
        $beneficiary->longitude = $request->longitude;
        $beneficiary->date_of_birth = $request->date_of_birth;
        $beneficiary->age = $request->age;
        $beneficiary->gender = $request->gender;
        $beneficiary->place_of_birth = $request->place_of_birth;  // Added place of birth
        $beneficiary->civil_status = $request->civil_status;
        $beneficiary->educational_attainment = $request->educational_attainment;  // Added educational attainment
        $beneficiary->occupation = $request->occupation;  // Added occupation
        $beneficiary->religion = $request->religion;  // Added religion
        $beneficiary->monthly_income = $request->monthly_income;
        $beneficiary->id_number = $request->id_number;  // Added ID number
        $beneficiary->save();

        return redirect()->back()->with('message', 'Beneficiary added successfully!');
    }
    public function update_beneficiary_operator($id, Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'middle_name' => 'required|string',
            'last_name' => 'required|string',
            'suffix' => 'nullable|string',  // Added suffix
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'program_enrolled' => 'required|exists:services,id',  // Ensures the program is valid
            'barangay_id' => 'nullable|exists:barangays,id',  // Optional: ensures the barangay is valid
            'place_of_birth' => 'nullable|string|max:255',  // Added place of birth
            'date_of_birth' => 'required|date',
            'age' => 'required|integer',
            'gender' => 'required|string|in:Male,Female,Other',
            'civil_status' => 'required|string|in:Single,Married,Widowed,Divorced',
            'educational_attainment' => 'nullable|string|max:255',  // Added educational attainment
            'occupation' => 'nullable|string|max:255',  // Added occupation
            'religion' => 'nullable|string|max:255',  // Added religion
            'monthly_income' => 'required|string|in:Below 5,000,5,000 - 10,000,10,000 - 15,000,Above 15,000',
            'id_number' => 'nullable|string|max:255',  // Added ID number
            'latitude' => 'nullable|numeric|between:-90,90',  // Optional: valid latitude range
            'longitude' => 'nullable|numeric|between:-180,180',  // Optional: valid longitude range
        ]);

        $beneficiary = Beneficiary::findOrFail($id);
        $beneficiary->first_name = $request->first_name;
        $beneficiary->middle_name = $request->middle_name;
        $beneficiary->last_name = $request->last_name;
        $beneficiary->suffix = $request->suffix;  // Added suffix
        $beneficiary->email = $request->email;
        $beneficiary->phone = $request->phone;
        $beneficiary->program_enrolled = $request->program_enrolled;
        $beneficiary->barangay_id = $request->barangay;
        $beneficiary->latitude = $request->latitude;
        $beneficiary->longitude = $request->longitude;
        $beneficiary->date_of_birth = $request->date_of_birth;
        $beneficiary->age = $request->age;
        $beneficiary->gender = $request->gender;
        $beneficiary->place_of_birth = $request->place_of_birth;  // Added place of birth
        $beneficiary->civil_status = $request->civil_status;
        $beneficiary->educational_attainment = $request->educational_attainment;  // Added educational attainment
        $beneficiary->occupation = $request->occupation;  // Added occupation
        $beneficiary->religion = $request->religion;  // Added religion
        $beneficiary->monthly_income = $request->monthly_income;
        $beneficiary->id_number = $request->id_number;  // Added ID number





        // Save the changes
        $beneficiary->save();

        // Redirect back with a success message
        return redirect()->route('show.beneficiaries_operator_index')->with('message', 'Beneficiary updated successfully!');
    }
    public function beneficiary_search_ope(Request $request)
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

        return view('operator.showbeneficiaries_operator', compact('beneficiaries'));
    }
}
