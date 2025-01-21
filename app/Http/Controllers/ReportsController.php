<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use App\Models\Service;
use App\Models\Barangay;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;  // Import PDF facade

class ReportsController extends Controller
{
    // This method will be called when accessing the report page
    public function index(Request $request)
    {
        // Create a query to fetch beneficiaries
        $query = Beneficiary::query();

        // Apply filters if provided (service, barangay, year, month)
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

        // Get the filtered beneficiaries data
        $beneficiaries = $query->with(['service', 'barangay'])->get();

        // Fetch all available services and barangays for the filters
        $services = Service::all();
        $barangays = Barangay::all();

        // Return the view with the necessary data
        return view('admin.reports', compact('beneficiaries', 'services', 'barangays'));
    }
    //ope report
    public function report(Request $request)
    {
        // Create a query to fetch beneficiaries
        $query = Beneficiary::query();

        // Apply filters if provided (service, barangay, year, month)
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

        // Get the filtered beneficiaries data
        $beneficiaries = $query->with(['service', 'barangay'])->get();

        // Fetch all available services and barangays for the filters
        $services = Service::all();
        $barangays = Barangay::all();

        // Return the view with the necessary data
        return view('operator.report', compact('beneficiaries', 'services', 'barangays'));
    }


    // Generate PDF
    public function downloadPDF(Request $request)
    {
        $query = Beneficiary::query();

        // Apply filters
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

        // Get filtered data
        $beneficiaries = $query->with(['service', 'barangay'])->get();

        // Get selected program and barangay names
        $selectedService = $request->service
            ? Service::find($request->service)->name
            : 'All Programs';

        $selectedBarangay = $request->barangay
            ? Barangay::find($request->barangay)->name
            : 'All Barangays';

        // Generate PDF
        $pdf = PDF::loadView('admin.reports-pdf', compact('beneficiaries', 'selectedService', 'selectedBarangay'));

        return $pdf->download('beneficiaries-report.pdf');
    }
}
