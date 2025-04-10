<?php

namespace App\Http\Controllers;

use App\Models\BasicInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasicInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $fields = $request->only([
            'place_of_birth',
            'house_no_street',
            'municipality',
            'region',
            'province',
            'religion',
            'civil_status',
            'blood_type',
            'land_line_no',
            'educational_attainment',
            'occupation',
            'status_of_employment',
            'category_of_employment',
            'types_of_employment',
            'organization_affiliated',
            'contact_person',
            'office_address',
            'tel_no',
            'sss_no',
            'gsis_no',
            'pag_ibig_no',
            'psn_no',
            'philhealth_no',
            'four_ps_beneficiary',
            'indigenouse_person',
            'company_agency',
            'icoe_name',
            'icoe_address',
            'icoe_relationship',
            'icoe_contact_number',
            'skills',
            'annual_income',
            'type_of_disability',
            'cause_of_disability',
            'acquired',
            'congenital_inborn',
            'pwd_status',
            'pwd_number',
            'father_name',
            'father_occupation',
            'father_contact',
            'mother_name',
            'mother_occupation',
            'mother_contact',
            'guardian_name',
            'guardian_occupation',
            'guardian_contact',
        ]);

        $anyEmpty = collect($fields)->contains(function ($value) {
            return $value === null || $value === '';
        });

        if ($anyEmpty) {
            return back()->with('error', 'Please fill out all fields before submitting.')->withInput($fields);
        }

        $fields['user_id'] = Auth::id();

        BasicInfo::updateOrCreate(
            [
                'user_id'                       =>   Auth::id(),
            ],
            $fields
        );

        return back()->with('message', "Basic Information Updated Successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
