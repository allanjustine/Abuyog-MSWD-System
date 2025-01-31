<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Application;
use App\Models\Beneficiary;
use App\Models\Barangay;  // Import Barangay model if needed
use Livewire\WithPagination;
use App\Models\BenefitReceived;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



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
    public function displayapplication(Request $request)
    {
        $filter = $request->query('filter');

        $data = Application::when($filter != 'all', function ($query) use ($filter) {
            $query->where('status', $filter ?? 'accepted');
        })->orderBy('created_at', 'desc')->paginate(10);
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

    // Controller method to update the beneficiary
    public function updateBeneficiary(Request $request, $id)
    {
        // Hanapin ang beneficiary gamit ang ID
        $beneficiary = Beneficiary::find($id);

        if (!$beneficiary) {
            return redirect()->back()->with('message', 'Beneficiary not found.');
        }

        // I-update ang mga fields
        $beneficiary->first_name = $request->first_name;
        $beneficiary->middle_name = $request->middle_name;
        $beneficiary->last_name = $request->last_name;
        $beneficiary->suffix = $request->suffix;
        $beneficiary->email = $request->email;
        $beneficiary->phone = $request->phone;
        $beneficiary->program_enrolled = $request->program_enrolled;
        $beneficiary->barangay_id = $request->barangay;
        $beneficiary->latitude = $request->latitude;
        $beneficiary->longitude = $request->longitude;
        $beneficiary->date_of_birth = $request->date_of_birth;
        $beneficiary->age = $request->age;
        $beneficiary->gender = $request->gender;
        $beneficiary->place_of_birth = $request->place_of_birth;
        $beneficiary->civil_status = $request->civil_status;
        $beneficiary->educational_attainment = $request->educational_attainment;
        $beneficiary->occupation = $request->occupation;
        $beneficiary->religion = $request->religion;
        $beneficiary->monthly_income = $request->monthly_income;
        $beneficiary->id_number = $request->id_number;

        // Save the updated record
        $beneficiary->save();

        return redirect('/showbeneficiary')->with('message', 'Beneficiary updated successfully.');
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



    public function newBenefitsshow()
    {
        // Eager load the barangay and benefitsReceived relationships
        $beneficiaries = Beneficiary::with('barangay', 'benefitsReceived')->get();
        $services = Service::all();
        $barangays = Barangay::all(); // Fetch all barangays if needed

        // Fetch distinct name_of_assistance values
        $assistanceList = BenefitReceived::distinct()->pluck('name_of_assistance')->toArray();

        $totalBeneficiaries = $beneficiaries->count();

        return view('admin.newbenefits', compact('barangays', 'services', 'beneficiaries', 'assistanceList', 'totalBeneficiaries'));
    }


    public function filterBeneficiaries(Request $request)
    {
        $ageFrom = $request->age_from;
        $ageTo = $request->age_to;

        $beneficiaries = Beneficiary::whereRaw("TIMESTAMPDIFF(YEAR, date_of_birth, CURDATE()) BETWEEN ? AND ?", [$ageFrom, $ageTo])->get();

        return response()->json($beneficiaries);
    }


    public function addAssistance(Request $request)
    {
        $minAge = $request->input('min_age');
        $maxAge = $request->input('max_age');
        $serviceId = $request->input('service_id');
        $limit = $request->input('limit');
        $barangayId = $request->input('barangay');
        $nameOfAssistance = $request->input('name_of_assistance');

        $query = Beneficiary::query();

        if ($minAge) {
            $query->where('age', '>=', $minAge);
        }

        if ($maxAge) {
            $query->where('age', '<=', $maxAge);
        }
        if ($serviceId) {
            $query->where('program_enrolled', $serviceId); // Use 'program_enrolled' instead of 'service_id'
        }
        if ($barangayId) {
            $query->where('barangay_id', $barangayId); // Use 'barangay_id' for barangay filter
        }
        if ($nameOfAssistance && is_array($nameOfAssistance)) {
            $excludedBeneficiaries = BenefitReceived::whereIn('name_of_assistance', $nameOfAssistance)
                ->pluck('beneficiary_id')
                ->toArray();

            $query->whereNotIn('id', $excludedBeneficiaries);
        }

        // Eager load the benefitsReceived relationship for the beneficiaries
        $beneficiaries = $query->with('benefitsReceived')->paginate($limit);

        // Retrieve all services for the dropdown
        $services = Service::all();
        $barangays = Barangay::all();
        $assistanceList = BenefitReceived::distinct()->pluck('name_of_assistance')->toArray();

        $totalBeneficiaries = $beneficiaries->count();

        return view('admin.newbenefits', compact('totalBeneficiaries', 'beneficiaries', 'services', 'barangays', 'nameOfAssistance', 'assistanceList'));
    }



    public function addAssistanceToBeneficiaries(Request $request)
    {
        // Retrieve the form data
        $beneficiaryIds = $request->input('beneficiary_ids');

        // Check if beneficiaryIds is an array and not empty
        if (is_array($beneficiaryIds) && count($beneficiaryIds) > 0) {
            $nameOfAssistance = $request->input('name_of_assistance');
            $typeOfAssistance = $request->input('type_of_assistance');
            $amount = $request->input('amount');
            $dateReceived = null; // Default value for date_received

            foreach ($beneficiaryIds as $beneficiaryId) {
                BenefitReceived::create([
                    'beneficiary_id' => $beneficiaryId,
                    'name_of_assistance' => $nameOfAssistance,
                    'type_of_assistance' => $typeOfAssistance,
                    'amount' => $amount,
                    'date_received' => $dateReceived, // Will be null for now
                ]);
            }

            return redirect()->back()->with('success', 'Assistance added successfully!');
        } else {
            return redirect()->back()->with('error', 'No beneficiaries selected.');
        }
    }

    public function AllbenefitsReceived()
    {
        // Eager load the barangay and benefitsReceived relationships
        $beneficiaries = Beneficiary::with('barangay', 'benefitsReceived')->get();
        $services = Service::all();
        $barangays = Barangay::all(); // Fetch all barangays if needed

        // Fetch distinct name_of_assistance values
        $assistanceList = BenefitReceived::distinct()->pluck('name_of_assistance')->toArray();

        return view('admin.all_benefitsreceived', compact('barangays', 'services', 'beneficiaries', 'assistanceList'));
    }


    public function filterBenefitsReceived(Request $request)
    {
        $nameOfAssistance = $request->input('name_of_assistance');

        $beneficiaries = Beneficiary::whereHas('benefitsReceived', function ($query) use ($nameOfAssistance) {
            $query->where('name_of_assistance', $nameOfAssistance);
        })
            ->with([
                'benefitsReceived' => function ($query) use ($nameOfAssistance) {
                    $query->where('name_of_assistance', $nameOfAssistance);
                },
                'service',
                'barangay'
            ])
            ->get();

        $assistanceList = BenefitReceived::distinct()->pluck('name_of_assistance');

        return view('admin.all_benefitsreceived', compact('beneficiaries', 'assistanceList', 'nameOfAssistance'));
    }


    public function Inventory()
    {
        // Eager load the barangay and benefitsReceived relationships
        $beneficiaries = Beneficiary::with('barangay', 'benefitsReceived')->get();
        $services = Service::all();
        $barangays = Barangay::all(); // Fetch all barangays if needed

        $allAssistanceTypes = BenefitReceived::all();  // All available assistance types
        // Fetch distinct name_of_assistance values
        $assistanceList = BenefitReceived::distinct()->pluck('name_of_assistance')->toArray();

        return view('admin.inventory', compact('barangays', 'services', 'beneficiaries', 'assistanceList', 'allAssistanceTypes'));
    }


    public function filterforInventory(Request $request)
    {
        $nameOfAssistance = $request->input('name_of_assistance');

        $beneficiaries = Beneficiary::whereHas('benefitsReceived', function ($query) use ($nameOfAssistance) {
            $query->where('name_of_assistance', $nameOfAssistance)
                ->whereNotNull('date_received'); // Exclude rows without date_received
        })
            ->with([
                'benefitsReceived' => function ($query) use ($nameOfAssistance) {
                    $query->where('name_of_assistance', $nameOfAssistance)
                        ->whereNotNull('date_received'); // Exclude rows without date_received
                },
                'service',
                'barangay'
            ])
            ->get();

        $assistanceList = BenefitReceived::distinct()->pluck('name_of_assistance');

        return view('admin.inventory', compact('beneficiaries', 'assistanceList', 'nameOfAssistance'));
    }

    public function markAsDeceased($id)
    {
        // Debugging: Check if the ID exists
        $beneficiary = Beneficiary::find($id);
        if (!$beneficiary) {
            dd("Beneficiary with ID {$id} not found");
        }

        // Debugging: Confirm insertion into the deceased table
        $inserted = DB::table('deceased')->insert([
            'first_name' => $beneficiary->first_name,
            'middle_name' => $beneficiary->middle_name,
            'last_name' => $beneficiary->last_name,
            'email' => $beneficiary->email,
            'phone' => $beneficiary->phone,
            'barangay_id' => $beneficiary->barangay_id,
            'service_id' => $beneficiary->service_id,
            'date_of_birth' => $beneficiary->date_of_birth,
            'age' => $beneficiary->age,
            'gender' => $beneficiary->gender,
            'civil_status' => $beneficiary->civil_status,
            'gov_id_number' => $beneficiary->gov_id_number,
            'program_specific_id' => $beneficiary->program_specific_id,
            'date_of_application' => $beneficiary->date_of_application,
            'assistance_availed' => $beneficiary->assistance_availed,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Delete the beneficiary from the beneficiaries table
        $beneficiary->delete();

        // Debugging: Success
        return redirect()->back()->with('success', 'Beneficiary marked as deceased successfully.');
    }

    public function Alldeceased()
    {
        $services = Service::all();
        $barangays = Barangay::all(); // Fetch all barangays if needed
        $deceased = DB::table('deceased')
            ->join('barangays', 'deceased.barangay_id', '=', 'barangays.id')
            ->select('deceased.*', 'barangays.name as barangay_name')
            ->get();
        // Pass the data to the view
        return view('admin.deceased', compact('deceased'));
    }

    public function adminApproval($id)
    {
        $application = Application::findOrFail($id);

        $application->update([
            'approved_by'           =>          Auth::user()->id,
            'approved_at'           =>          now(),
        ]);

        return back()->with('success', 'Application approved successfully!');
    }

    public function adminRejection(Request $request, $id)
    {

        $application = Application::findOrFail($id);

        $request->validate([
            'cancellation_reason'                   =>          ['required', 'min:1', 'max:255', 'string']
        ], [
            'cancellation_reason.required'          =>              'Please state a reason first before rejecting.',
        ]);

        $application->update([
            'status'                        =>          'rejected',
            'cancellation_reason'           =>          $request->cancellation_reason,
        ]);

        return back()->with('success', 'Application rejected successfully!');
    }
}
