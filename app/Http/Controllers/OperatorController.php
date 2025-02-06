<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Beneficiary;
use App\Models\Barangay;  // Import Barangay model if needed
use App\Models\BenefitReceived;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;


class OperatorController extends Controller
{
    public function showbeneficiaries_operator(Request $request)
    {
        $page = request()->get('page', 1);
        $perPage = 10;
        $service = $request->query('service');

        $applications = Application::where('approved_at', '!=', null)
            ->where('approved_by', '!=', null)
            ->get()
            ->map(function ($application) {
                $application->source = 'Application';
                return $application;
            });
        $beneficiaries = Beneficiary::with(['barangay', 'familyCompositions'])
            ->where(function($query) use ($service) {
                $query->where('status', 'released');
                if($service) {
                    $query->whereHas('service', function($subQuery) use ($service) {
                        $subQuery->where('name', $service);
                    });
                }
            })
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
        return view('operator.showbeneficiaries_operator', compact('barangays', 'services', 'beneficiaries', 'data'));
    }
    public function showbeneficiaries_admin(Request $request)
    {
        $page = request()->get('page', 1);
        $perPage = 10;
        $service = $request->query('service');

        $applications = Application::where('approved_at', '!=', null)
            ->where('approved_by', '!=', null)
            ->get()
            ->map(function ($application) {
                $application->source = 'Application';
                return $application;
            });
        $beneficiaries = Beneficiary::with(['barangay', 'familyCompositions'])
            ->where(function($query) use ($service) {
                $query->where('status', 'released');
                if($service) {
                    $query->whereHas('service', function($subQuery) use ($service) {
                        $subQuery->where('name', $service);
                    });
                }
            })
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

        return view('admin.showbeneficiary', compact('barangays', 'services', 'beneficiaries', 'applications', 'data'));
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
        //hihi
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
        $beneficiary->barangay_id = $request->barangay_id;
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

        return redirect('/showbeneficiaries_operator')->with('message', 'Beneficiary updated successfully.');
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

    public function newBenefitsshowOperator()
    {
        // Eager load the barangay and benefitsReceived relationships
        $beneficiaries = Beneficiary::with('barangay', 'benefitsReceived')->get();
        $services = Service::all();
        $barangays = Barangay::all(); // Fetch all barangays if needed

        // Fetch distinct name_of_assistance values
        $assistanceList = BenefitReceived::distinct()->pluck('name_of_assistance')->toArray();

        $totalBeneficiaries = $beneficiaries->count();

        return view('operator.add_newbenefits_operator', compact('barangays', 'services', 'beneficiaries', 'assistanceList', 'totalBeneficiaries'));
    }

    public function OperatoraddAssistance(Request $request)
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

        return view('operator.add_newbenefits_operator', compact('totalBeneficiaries', 'beneficiaries', 'services', 'barangays', 'nameOfAssistance', 'assistanceList'));
    }

    public function AllbenefitsReceivedOperator()
    {
        // Eager load the barangay and benefitsReceived relationships
        $beneficiaries = Beneficiary::with('barangay', 'benefitsReceived')->get();
        $services = Service::all();
        $barangays = Barangay::all(); // Fetch all barangays if needed

        // Fetch distinct name_of_assistance values
        $assistanceList = BenefitReceived::distinct()->pluck('name_of_assistance')->toArray();

        return view('operator.all_benefitsreceived_operator', compact('barangays', 'services', 'beneficiaries', 'assistanceList'));
    }

    public function addAssistanceToBeneficiariesOperator(Request $request)
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

    public function filterBenefitsReceivedOperator(Request $request)
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

        return view('operator.all_benefitsreceived_operator', compact('beneficiaries', 'assistanceList', 'nameOfAssistance'));
    }

    public function InventoryOperator()
    {
        // Eager load the barangay and benefitsReceived relationships
        $beneficiaries = Beneficiary::with('barangay', 'benefitsReceived')->get();
        $services = Service::all();
        $barangays = Barangay::all(); // Fetch all barangays if needed

        $allAssistanceTypes = BenefitReceived::all();  // All available assistance types
        // Fetch distinct name_of_assistance values
        $assistanceList = BenefitReceived::distinct()->pluck('name_of_assistance')->toArray();

        return view('operator.inventory_operator', compact('barangays', 'services', 'beneficiaries', 'assistanceList', 'allAssistanceTypes'));
    }

    public function filterforInventoryOperator(Request $request)
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

        return view('operator.inventory_operator', compact('beneficiaries', 'assistanceList', 'nameOfAssistance'));
    }

    public function AlldeceasedOperator()
    {
        $services = Service::all();
        $barangays = Barangay::all(); // Fetch all barangays if needed
        $deceased = DB::table('deceased')
            ->join('barangays', 'deceased.barangay_id', '=', 'barangays.id')
            ->select('deceased.*', 'barangays.name as barangay_name')
            ->get();
        // Pass the data to the view
        return view('operator.deceased_operator', compact('deceased'));
    }
}
