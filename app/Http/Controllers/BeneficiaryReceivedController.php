<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use App\Models\BeneficiaryReceived;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeneficiaryReceivedController extends Controller
{

    public function index()
    {

        $beneficiaries = Beneficiary::query()->with('receiveds')->whereHas('receiveds')->orderBy('created_at', 'desc')->get();

        return view('admin.benefits-given-record', compact('beneficiaries'));
    }

    public function create($id)
    {
        $beneficiary = Beneficiary::find($id);

        if (!$beneficiary) {
            abort(404);
        }

        return view('admin.apply-benefits', compact('beneficiary'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'item_type'             =>          ['required', 'string', 'in:cash,food,other'],
            'remarks'               =>          ['required', 'string', 'min:1', 'max:255'],
            'date_received'         =>          ['required', 'before_or_equal:today']
        ]);

        $dateReceived = Carbon::parse($request->date_received);

        $applied = BeneficiaryReceived::create([
            'item_type'             =>          $request->item_type,
            'remarks'               =>          $request->remarks,
            'date_received'         =>          $request->date_received,
            'date_expired'          =>          $dateReceived->addMonth(3),
            'beneficiary_id'        =>          $id,
            'user_id'               =>          Auth::id()
        ]);

        return redirect('/showbeneficiaries_admin')->with('success', 'Benefits applied successfully to ' . $applied->beneficiary->first_name . ' action by ' . $applied->user->first_name);
    }
}
