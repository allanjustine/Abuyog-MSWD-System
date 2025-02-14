<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Beneficiary;
use App\Models\Service;
use App\Models\Application;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('user.home'); // Default redirect when logged in
        }

        // If user is not logged in, show the homepage with services
        $service = Service::all();
        return view('user.index', compact('service')); // Pass $service to the view
    }

    public function redirect()
    {
        if (Auth::user()->usertype == 'beneficiary') {
            // Redirect to user home page (normal user)
            $service = Service::all();
            $totalBeneficiaries = Beneficiary::where('user_id', Auth::id())->count();
            $totalBeneficiariesRejected = Beneficiary::where('user_id', Auth::id())->where('status', 'rejected')->count();
            $totalBeneficiariesCancelled = Beneficiary::where('user_id', Auth::id())->where('status', 'cancelled')->count();
            $totalBeneficiariesApproved = Beneficiary::where('user_id', Auth::id())->where('status', 'approved')->count();
            $totalBeneficiariesReleased = Beneficiary::where('user_id', Auth::id())->where('status', 'released')->count();
            $totalBeneficiariesAccepted = Beneficiary::where('user_id', Auth::id())->where('status', 'accepted')->count();
            $totalBenefitsReceived = Beneficiary::where('user_id', Auth::id())->withCount('benefitsReceived')
                ->get()
                ->sum('benefits_received_count');

            return view('user.home', compact(
                'service',
                'totalBeneficiaries',
                'totalBeneficiariesApproved',
                'totalBeneficiariesRejected',
                'totalBeneficiariesCancelled',
                'totalBeneficiariesReleased',
                'totalBeneficiariesAccepted',
                'totalBenefitsReceived'
            ));
        } elseif (Auth::user()->usertype == 'employee') {
            // Redirect to employee home page


            $approved = Beneficiary::where('status', 'approved')->orderBy('created_at', 'desc')->get();
            $cancelled = Beneficiary::where('status', 'cancelled')->orderBy('created_at', 'desc')->get();
            $pending = Beneficiary::where('status', 'pending')->orderBy('created_at', 'desc')->get();

            $totalBeneficiaries = Beneficiary::whereNotIn('status', ['cancelled'])->count();
            $approvedApplicationsCount = Beneficiary::where('status', 'approved')->count();
            $cancelledApplicationsCount = Beneficiary::where('status', 'cancelled')->count();
            $pendingApplicationsCount = Beneficiary::where('status', 'pending')->count();
            $service = Service::all();

            return view('employee.home', compact(
                'cancelled',
                'service',
                'approved',
                'pending',
                'approvedApplicationsCount',
                'cancelledApplicationsCount',
                'totalBeneficiaries',
                'pendingApplicationsCount'
            ));
        } elseif (Auth::user()->usertype == 'operator') {
            // Redirect to employee home page


            $approved = Beneficiary::where('status', 'approved')->orderBy('created_at', 'desc')->get();
            $cancelled = Beneficiary::where('status', 'cancelled')->orderBy('created_at', 'desc')->get();
            $pending = Beneficiary::where('status', 'pending')->orderBy('created_at', 'desc')->get();

            $approvedApplicationsCount = Beneficiary::where('status', 'approved')->count();
            $cancelledApplicationsCount = Beneficiary::where('status', 'cancelled')->count();
            $pendingApplicationsCount = Beneficiary::where('status', 'pending')->count();
            $totalBeneficiaries = Beneficiary::whereNotIn('status', ['cancelled'])->count();
            $service = Service::all();

            return view('operator.home', compact(
                'cancelled',
                'service',
                'approved',
                'pending',
                'approvedApplicationsCount',
                'cancelledApplicationsCount',
                'totalBeneficiaries',
                'pendingApplicationsCount'
            ));
        } else {

            $today = Carbon::today();

            $approved = Beneficiary::where('status', 'approved')->orderBy('created_at', 'desc')->get();
            $approvedToday = Beneficiary::where('status', 'approved')
                ->whereDate('appearance_date', $today)
                ->orderBy('created_at', 'desc')
                ->get();

            $cancelled = Beneficiary::where('status', 'cancelled')->orderBy('created_at', 'desc')->get();
            $pending = Beneficiary::where('status', 'pending')->orderBy('created_at', 'desc')->get();


            $approvedApplicationsCount = Beneficiary::where('status', 'approved')->count();
            $releasedBeneficiary = Beneficiary::where('status', 'released')->count();
            $acceptedBeneficiary = Beneficiary::where('status', 'accepted')->count();
            $pendingBeneficiary = Beneficiary::where('status', 'pending')->count();
            $rejectedBeneficiary = Beneficiary::where('status', 'rejected')->count();

            $totalBeneficiaries = Beneficiary::whereNotIn('status', ['cancelled'])->count();
            $totalServices = Service::count();
            $totalUsers = User::count();

            // Default to admin home page
            return view('admin.home', compact(
                'approved',
                'approvedToday',
                'cancelled',
                'pending',
                'approvedApplicationsCount',
                'totalBeneficiaries',
                'totalServices',
                'totalUsers',
                'releasedBeneficiary',
                'acceptedBeneficiary',
                'pendingBeneficiary',
                'rejectedBeneficiary',
            ));
        }
    }



    public function showForm($id)
    {
        // Fetch the specific service using its ID
        $service = Service::findOrFail($id);

        // Pass the service data to the application form view
        return view('applications.form', compact('service'));
    }







    public function application(Request $request)
    {
        $data = new Application;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->service = $request->service;
        $data->appearance_date = $request->appearance_date;
        $data->status = 'In process';

        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }

        $data->save();
        return redirect()->back()->with('message', 'Application Request Successful. We will contact you soon!');
    }

    public function myapplication()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $user = Auth::user();

            // Add orderBy to sort by created_at in descending order
            $apply = Beneficiary::where('user_id', $userid)
                ->orderBy('created_at', 'desc') // Sorts by most recent first
                ->get();

            $services = Service::all();
            $alreadyHaveOsca = !$user
                ->whereHas('beneficiaries', function ($query) use ($userid) {
                    $query->where('program_enrolled', 1)
                        ->where(
                            'user_id',
                            $userid
                        );
                })
                ->with('beneficiaries')
                ->exists();

            $availableSoloParent = $user->whereHas('beneficiaries', function ($query) use ($userid) {
                $query->where('program_enrolled', 3)
                    ->where('user_id', $userid)
                    ->where('created_at', '<', Carbon::now()->subYears(5))
                    ->latest();
            })->exists();
            $availablePwd = $user->whereHas('beneficiaries', function ($query) use ($userid) {
                $query->where('program_enrolled', 2)
                    ->where('user_id', $userid)
                    ->where('created_at', '<', Carbon::now()->subYears(1))
                    ->latest();
            })->exists();

            $isPwdExists = Beneficiary::where('user_id', $userid)->where('program_enrolled', 2)->exists();
            $isSoloParentExists = Beneficiary::where('user_id', $userid)->where('program_enrolled', 3)->exists();

            return view('user.my_application', compact('apply', 'services', 'alreadyHaveOsca', 'availableSoloParent', 'availablePwd', 'isPwdExists', 'isSoloParentExists'));
        } else {
            return redirect()->back();
        }
    }


    public function cancel_application($id)
    {
        $data = application::find($id);
        $data->delete();
        return redirect()->back();
    }
}
