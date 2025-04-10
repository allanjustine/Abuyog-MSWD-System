<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use Illuminate\Http\Request;
use App\Models\Beneficiary;
use App\Models\Service;

class GISMappingController extends Controller
{
    /**
     * Display GIS mapping page with services and barangays.
     */
    public function viewMap()
    {
        // Get all services (programs)
        $services = Service::all();

        // Get unique barangays with related beneficiaries having 'released' status
        $barangays = Barangay::with(['beneficiaries' => function($query) {
            $query->where('status', 'released'); // Filter beneficiaries with 'released' status
        }])
        ->distinct()
        ->get();

        return view('admin.gis', compact('services', 'barangays'));
    }

//     public function viewMap()
// {
//     $services = Service::all();

//     // Get unique barangays with related beneficiaries having 'released' status
//     $barangays = Barangay::with(['beneficiaries' => function($query) {
//         $query->where('status', 'released'); // Filter beneficiaries with 'released' status
//     }])
//     ->distinct()
//     ->get();
//     return view('admin.map', compact('services', 'barangays'));
// }



    /**
     * Fetch barangays with enrolled beneficiaries for a program.
     */
    public function fetchBarangaysWithBeneficiaries(Request $request)
    {
        $program = $request->input('program', 'all');

        $query = Beneficiary::query();

        // Filter by 'released' status
        $query->where('status', 'released');

        // If a specific program is selected, filter beneficiaries by the program
        if ($program !== 'all') {
            $query->where('program_enrolled', $program);
        }

        // Fetch unique barangays with their beneficiaries
        $barangays = $query->with('barangay')  // Make sure the 'barangay' relationship exists
                           ->get()
                           ->pluck('barangay')
                           ->unique('id')
                           ->values();

        return response()->json($barangays);
    }

    /**
     * Fetch beneficiaries enrolled in a specific program and barangay with 'released' status.
     */
    public function getBeneficiaries(Request $request)
{
    $program = $request->input('program', 'all');
    $barangayId = $request->input('barangay_id', 'all');

    $query = Beneficiary::query();

    // Filter by program if specified
    if ($program !== 'all') {
        $query->whereHas('service', function ($q) use ($program) {
            $q->where('id', $program); // Assuming the program ID is used
        });
    }

    // Filter by barangay if specified
    if ($barangayId !== 'all') {
        $query->where('barangay_id', $barangayId);
    }

    // Fetch only beneficiaries with status 'released'
    $beneficiaries = $query->where('status', 'released')
                           ->with(['barangay', 'service'])
                           ->get();

    // Map barangay data for GIS markers
    $barangays = $beneficiaries->map(function ($b) {
        return [
            'id' => $b->barangay_id,
            'name' => $b->barangay->name,
            'lat' => $b->barangay->latitude,
            'lon' => $b->barangay->longitude,
        ];
    })->unique();

    // Map beneficiaries to include service (program) name
    $beneficiaries = $beneficiaries->map(function ($beneficiary) {
        return [
            'first_name' => $beneficiary->first_name,
            'last_name' => $beneficiary->last_name,
            'program_enrolled' => $beneficiary->service->name, // Ensure 'service' relationship exists
            'barangay_id' => $beneficiary->barangay_id,
            'full_name' => $beneficiary->full_name // Assuming there's a `full_name` attribute
        ];
    });

    // Return JSON response with beneficiaries and barangays
    return response()->json([
        'beneficiaries' => $beneficiaries,
        'barangays' => $barangays,
    ]);
}


    /**
     * Fetch all barangays.
     */
    public function barangay()
    {
        $barangays = Barangay::all();

        return response()->json([
            'barangays' => $barangays
        ], 200);
    }
}
