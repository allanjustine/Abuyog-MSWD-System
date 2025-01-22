<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Application;
use App\Models\Beneficiary;
use App\Models\Barangay;  // Import Barangay model if needed
use Livewire\WithPagination;


class AdminController extends Controller
{
    use WithPagination;
    public function addview()
    {
        return view('admin.add_service');
    }

    public function upload(Request $request)
    {
        $service = new Service; // Correct capitalization for model name

        $image = $request->file('file');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file('file')->move('serviceimage', $imagename);

        $service->image = $imagename;
        $service->name = $request->name;
        $service->description = $request->description;

        $service->save();
        return redirect()->back()->with('message', 'Service added successfully!');
    }

    public function showservices()
    {
        $data = Service::all();
        return view('admin.showservices', compact('data'));
    }
    //ope
    public function showservicesope()
    {
        $data = Service::all();
        return view('operator.allservices', compact('data'));
    }

    public function deleteservices($id)
    {
        $data = Service::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function editservices($id)
    {
        $data = Service::find($id);
        return view('admin.editservices', compact('data'));
    }

    public function updateservice(Request $request, $id)
    {
        $service = Service::find($id);
        $service->name = $request->name;
        $service->description = $request->description;

        $image = $request->file('file');

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file('file')->move('serviceimage', $imagename);
            $service->image = $imagename;
        }

        $service->save();
        return redirect()->back()->with('message', 'Service details updated successfully');
    }

    // Display all applications
    public function displayapplication()
    {
        $data = Application::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.displayapplication', compact('data'));
    }

    // Add Beneficiary View
    public function addbeneficiaryview()
    {
        $services = Service::all(); // Fetch all services
        $barangays = Barangay::all(); // Fetch all barangays if needed
        return view('admin.add_beneficiary', compact('services', 'barangays')); // Pass barangays to the view
    }

    // Show all beneficiaries
    public function showbeneficiary()
    {
        // Eager load the barangay relationship
        $beneficiaries = Beneficiary::with('barangay')->get();
        $services = Service::all();
        $barangays = Barangay::all(); // Fetch all barangays if needed
        return view('admin.showbeneficiary', compact('barangays', 'services', 'beneficiaries'));
    }


    // Delete beneficiary
    public function deletebeneficiaries($id)
    {
        $beneficiary = Beneficiary::find($id);
        $beneficiary->delete();
        return redirect()->back();
    }

    // Edit beneficiary
    // Edit beneficiary method
    public function editBeneficiaries($id)
    {
        // Retrieve the beneficiary by ID
        $beneficiary = Beneficiary::find($id);

        // If beneficiary doesn't exist, redirect with an error
        if (!$beneficiary) {
            return redirect()->route('admin.beneficiaries.index')->with('error', 'Beneficiary not found');
        }

        // Fetch all services for the program dropdown
        $services = Service::all();

        // Fetch all barangays if needed
        $barangays = Barangay::all();

        // Pass the beneficiary, services, and barangays to the edit view
        return view('admin.editbeneficiaries', compact('beneficiary', 'services', 'barangays'));
    }

    public function gisMapping()
    {
        $services = Service::all(); // Fetch all services (programs)
        $barangays = Barangay::distinct()->pluck('barangay'); // Fetch distinct barangay names
        return view('admin.gis', compact('services', 'barangays'));
    }



    public function showReports()
    {
        // Fetching all services (assuming you have a Service model)
        $services = Service::all();

        // Fetching all barangays (assuming you have a Barangay model)
        $barangays = Barangay::all();

        // Pass the data to the view
        return view('admin.reports', compact('services', 'barangays'));
    }



    // Update beneficiary details
    public function uploadbeneficiary(Request $request)
    {
        $status = in_array($request->program_enrolled, [2, 3]) ? 'invalid' : 'not_provided';
        $type = $request->program_enrolled == 2 ? $request->disability_type : null;
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
        $beneficiary->id_status = $status;
        $beneficiary->disability_type = $type;

        $beneficiary->save();

        return redirect()->back()->with('message', 'Beneficiary added successfully!');
    }

    // Controller method to update the beneficiary
    public function updateBeneficiary($id, Request $request)
    {
        // Validate the input data
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


        $status = in_array($request->program_enrolled, [2, 3]) ? 'invalid' : 'not_provided';
        $type = $request->program_enrolled == 2 ? $request->disability_type : null;


        // Find the beneficiary by ID
        $beneficiary = Beneficiary::findOrFail($id);

        // Update the beneficiary's data
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
        $beneficiary->id_status = $status;
        $beneficiary->disability_type = $type;



        // Save the changes
        $beneficiary->save();

        // Redirect back with a success message
        return redirect()->route('beneficiaries.index')->with('message', 'Beneficiary updated successfully!');
    }



    public function beneficiary_search(Request $request)
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


        return view('admin.showbeneficiary', compact('beneficiaries'));
    }

    public function application_search(Request $request)
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
                    ->orWhere('date_applied', 'LIKE', '%' . $search . '%')
                    ->orWhere('employee_name', 'LIKE', '%' . $search . '%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.displayapplication', compact('data'));
    }

    // dropdown admin
    public function showOscaadmin()
    {
        $beneficiaries = Beneficiary::whereHas('service', function ($query) {
            $query->where('name', 'OSCA(Office of Senior Citizens)');
        })->get();

        return view('dropdownadm.osca', compact('beneficiaries'));
    }

    public function showPwdadmin()
    {
        $beneficiaries = Beneficiary::whereHas('service', function ($query) {
            $query->where('name', 'PWD(Persons with Disabilities)');
        })->get();

        return view('dropdownadm.pwd', compact('beneficiaries'));
    }

    public function showSoloParentadmin()
    {
        $beneficiaries = Beneficiary::whereHas('service', function ($query) {
            $query->where('name', 'Solo Parent');
        })->get();

        return view('dropdownadm.solo_parent', compact('beneficiaries'));
    }
    public function showAicsadmin()
    {
        $beneficiaries = Beneficiary::whereHas('service', function ($query) {
            $query->where('name', 'AICS(Assistance to Individuals in Crisis)');
        })->get();

        return view('dropdownadm.aics', compact('beneficiaries'));
    }
}
