<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use Illuminate\Http\Request;
use App\Models\Beneficiary;
use App\Models\Service;

class GISMappingController extends Controller
{
    /**
     * Display GIS mapping page.
     */
    public function index()
    {
        $services = Service::all(); // Get all services (programs)
        $barangays = Beneficiary::select('barangay_id')->distinct()->with('barangay')->get(); // Unique barangays

        return view('admin.gis', compact('services', 'barangays'));
    }

    /**
     * Fetch barangays with enrolled beneficiaries for a program.
     */
    public function fetchBarangaysWithBeneficiaries(Request $request)
    {
        $program = $request->input('program', 'all');

        $query = Beneficiary::query();
        if ($program !== 'all') {
            $query->where('program_enrolled', $program);
        }

        $barangays = $query->with('barangay')->get()->pluck('barangay')->unique('id')->values();
        return response()->json($barangays);
    }

    /**
 * Fetch beneficiaries enrolled in a program and barangay.
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

    // Fetch beneficiaries with related barangay and service
    $beneficiaries = $query->with(['barangay', 'service'])->get();

    // If no beneficiaries are found, return a message
    if ($beneficiaries->isEmpty()) {
        return response()->json(['message' => 'No beneficiaries found for the selected filters.']);
    }

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
        ];
    });

    // Return JSON response with beneficiaries and barangays
    return response()->json([
        'beneficiaries' => $beneficiaries,
        'barangays' => $barangays,
    ]);
}

public function barangay() {
    $barangays = Barangay::all();

    return response()->json([
        'barangays' => $barangays
    ], 200);
}
}
