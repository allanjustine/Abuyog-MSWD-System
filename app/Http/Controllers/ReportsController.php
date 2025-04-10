<?php

namespace App\Http\Controllers;

use App\Helpers\MonthHelper;
use App\Models\Beneficiary;
use App\Models\Service;
use App\Models\Barangay;
use App\Models\Assistance;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    // View reports for Admin
   // Inside your index method
public function index(Request $request)
{
    $beneficiaries = $this->fetchBeneficiaries($request);
    $services = Service::all();
    $barangays = Barangay::all();
    $months = MonthHelper::generateMonth();
    $assistances = Assistance::all(); // Get all Assistance options

    return view('admin.reports', compact('beneficiaries', 'services', 'barangays', 'months', 'assistances'));
}

    // View reports for Operator
    public function report(Request $request)
    {
        $beneficiaries = $this->fetchBeneficiaries($request);
        $services = Service::all();
        $barangays = Barangay::all();
        $months = MonthHelper::generateMonth();
        $assistances = Assistance::all(); // Get all Assistance options

        return view('operator.report', compact('beneficiaries', 'services', 'barangays', 'months', 'assistances'));
    }

    // Generate and download PDF report
    public function downloadPDF(Request $request)
    {
        $beneficiaries = $this->fetchBeneficiaries($request);

        $selectedService = $request->service
            ? Service::find($request->service)->name
            : 'All Programs';

        $selectedBarangay = $request->barangay
            ? Barangay::find($request->barangay)->name
            : 'All Barangays';

        $pdf = PDF::loadView('admin.reports-pdf', compact('beneficiaries', 'selectedService', 'selectedBarangay'));

        return $pdf->download('beneficiaries-report.pdf');
    }

   // Fetch Beneficiaries with filters
private function fetchBeneficiaries($request)
{
    $query = Beneficiary::with(['service', 'barangay', 'benefitsReceived.assistance']); // Make sure to load assistance

    // Existing filters
    if ($request->has('service') && $request->service != '') {
        $query->where('program_enrolled', $request->service);
    }

    if ($request->has('barangay') && $request->barangay != '') {
        $query->where('barangay_id', $request->barangay);
    }

    if ($request->has('year') && $request->year != '') {
        $query->whereYear('created_at', $request->year);
    }

    if ($request->has('month') && $request->month != '') {
        $query->whereMonth('created_at', $request->month);
    }


    // Filter for "Name of Assistance" and ensure only "received" assistance is included
    if ($request->has('assistance') && $request->assistance != '') {
        $query->whereHas('benefitsReceived', function ($q) use ($request) {
            $q->where('assistance_id', $request->assistance)
              ->where('status', 'received'); // Only received assistance
        });
    }


    return $query->get();
}
}