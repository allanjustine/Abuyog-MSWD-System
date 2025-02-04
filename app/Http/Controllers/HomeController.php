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
            return view('user.home', compact('service'));
        } elseif (Auth::user()->usertype == 'employee') {
            // Redirect to employee home page


            $approved = Application::where('status', 'approved')->orderBy('created_at', 'desc')->get();
            $cancelled = Application::where('status', 'cancelled')->orderBy('created_at', 'desc')->get();
            $pending = Application::where('status', 'pending')->orderBy('created_at', 'desc')->get();

            $approvedApplicationsCount = Application::where('status', 'approved')->count();
            $cancelledApplicationsCount = Application::where('status', 'cancelled')->count();
            $pendingApplicationsCount = Application::where('status', 'pending')->count();
            $totalBeneficiaries = Beneficiary::count();
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


            $approved = Application::where('status', 'approved')->orderBy('created_at', 'desc')->get();
            $cancelled = Application::where('status', 'cancelled')->orderBy('created_at', 'desc')->get();
            $pending = Application::where('status', 'pending')->orderBy('created_at', 'desc')->get();

            $approvedApplicationsCount = Application::where('status', 'approved')->count();
            $cancelledApplicationsCount = Application::where('status', 'cancelled')->count();
            $pendingApplicationsCount = Application::where('status', 'pending')->count();
            $totalBeneficiaries = Beneficiary::count();
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

            $approved = Application::where('status', 'approved')->orderBy('created_at', 'desc')->get();
            $approvedToday = Application::where('status', 'approved')
                ->whereDate('date_applied', $today)
                ->orderBy('created_at', 'desc')
                ->get();

            $cancelled = Application::where('status', 'cancelled')->orderBy('created_at', 'desc')->get();
            $pending = Application::where('status', 'pending')->orderBy('created_at', 'desc')->get();


            $approvedApplicationsCount = Application::where('status', 'approved')->count();
            $totalBeneficiaries = Beneficiary::count();
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
                'totalUsers'
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
        $data->date_applied = $request->date_applied;
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

            // Add orderBy to sort by created_at in descending order
            $apply = Application::where('user_id', $userid)
                ->orderBy('created_at', 'desc') // Sorts by most recent first
                ->get();

            return view('user.my_application', compact('apply'));
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
