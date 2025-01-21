<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use App\Models\BeneficiaryReceived;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeneficiaryReceivedController extends Controller
{

    public function index(Request $request)
    {

        $search = $request->search;

        $date_start_filtered = $request->date_start;
        $date_end_filtered = $request->date_end;

        $beneficiaries = Beneficiary::query()
            ->with(['receiveds'])
            ->whereHas('receiveds', function ($query) use ($date_start_filtered, $date_end_filtered) {
                if ($date_start_filtered && $date_end_filtered) {
                    $query->where(function ($subQuery) use ($date_start_filtered, $date_end_filtered) {
                        $subQuery->where('date_received', '<=', $date_start_filtered)
                            ->where('date_expired', '>=', $date_end_filtered);
                    });
                }
            })
            ->where(function ($query) use ($search) {
                $query->where('last_name', 'like', "%$search%")
                    ->orWhere('first_name', 'like', "%$search%")
                    ->orWhere('middle_name', 'like', "%$search%")
                    ->orWhere('email', 'like', "%$search%")
                    ->orWhere('phone', 'like', "%$search%")
                    ->orWhereHas('barangay', function ($subQuery) use ($search) {
                        $subQuery->where('name', 'like', "%$search%");
                    })
                    ->orWhereHas('service', function ($subQuery) use ($search) {
                        $subQuery->where('name', 'like', "%$search%");
                    });
            })
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.benefits-given-record', compact('beneficiaries', 'search', 'date_start_filtered', 'date_end_filtered'));
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

        $isAlreadyHave = BeneficiaryReceived::where('beneficiary_id', $id)
            ->where(function ($query) use ($request) {
                $query->where('date_received', '<=', $request->date_received)
                    ->where('date_expired', '>=', $request->date_received);
            })
            ->exists();

        if ($isAlreadyHave) {
            return redirect()->back()->with('error', 'This user benefits already exists within the selected date range.')->withInput();
        }

        $dateReceived = Carbon::parse($request->date_received);

        $applied = BeneficiaryReceived::create([
            'item_type'             =>          $request->item_type,
            'remarks'               =>          $request->remarks,
            'date_received'         =>          $request->date_received,
            'date_expired'          =>          $dateReceived->addMonth(1),
            'beneficiary_id'        =>          $id,
            'user_id'               =>          Auth::id()
        ]);

        return redirect('/showbeneficiaries_admin')->with('success', 'Benefits applied successfully to ' . $applied->beneficiary->first_name . ' action by ' . $applied->user->first_name);
    }
}
