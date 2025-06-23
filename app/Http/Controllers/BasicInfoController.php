<?php

namespace App\Http\Controllers;

use App\Models\BasicInfo;
use App\Models\FamilyComposition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
    // public function store(Request $request)
    // {

    //     $fields = $request->only([
    //         'place_of_birth',
    //         'house_no_street',
    //         'municipality',
    //         'region',
    //         'province',
    //         'religion',
    //         'civil_status',
    //         'blood_type',
    //         'land_line_no',
    //         'educational_attainment',
    //         'occupation',
    //         'status_of_employment',
    //         'category_of_employment',
    //         'types_of_employment',
    //         'organization_affiliated',
    //         'contact_person',
    //         'office_address',
    //         'tel_no',
    //         'sss_no',
    //         'gsis_no',
    //         'pag_ibig_no',
    //         'psn_no',
    //         'philhealth_no',
    //         'four_ps_beneficiary',
    //         'indigenouse_person',
    //         'company_agency',
    //         'icoe_name',
    //         'icoe_address',
    //         'icoe_relationship',
    //         'icoe_contact_number',
    //         'skills',
    //         'annual_income',
    //         'type_of_disability',
    //         'cause_of_disability',
    //         'acquired',
    //         'congenital_inborn',
    //         'pwd_status',
    //         'pwd_number',
    //         'father_name',
    //         'father_occupation',
    //         'father_contact',
    //         'mother_name',
    //         'mother_occupation',
    //         'mother_contact',
    //         'guardian_name',
    //         'guardian_occupation',
    //         'guardian_contact',
    //     ]);

    //     $fieldFamilyComposition = $request->only([
    //         'name',
    //         'relationship',
    //         'birthday',
    //         'age_fc',
    //         'gender_fc',
    //         'civil_status_fc',
    //         'educational_attainment_fc',
    //         'income',
    //     ]);

    //     $request->validate([
    //         'name.*'                      => ['required'],
    //         'relationship.*'              => ['required'],
    //         'birthday.*'                  => ['required'],
    //         'age_fc.*'                    => ['required'],
    //         'gender_fc.*'                 => ['required'],
    //         'civil_status_fc.*'           => ['required'],
    //         'educational_attainment_fc.*' => ['required'],
    //         'income.*'                    => ['required'],
    //     ]);

    //     $anyEmpty = collect(array_merge($fields, $fieldFamilyComposition))->contains(function ($value) {
    //         return $value === null || $value === '';
    //     });

    //     if ($anyEmpty) {
    //         return back()->with('error', 'Please fill out all fields before submitting.')->withInput($fields);
    //     }

    //     $fields['user_id'] = Auth::id();
    //     $fieldFamilyComposition['user_id'] = Auth::id();

    //     BasicInfo::updateOrCreate(
    //         [
    //             'user_id'                       =>   Auth::id(),
    //         ],
    //         $fields
    //     );

    //     foreach ($request->name as $index => $name) {
    //         FamilyComposition::updateOrCreate([
    //             'user_id' => Auth::id(),
    //             'name' => $name,
    //         ], [
    //             'relationship' => $request->relationship[$index],
    //             'birthday' => $request->birthday[$index],
    //             'age' => $request->age_fc[$index],
    //             'civil_status' => $request->civil_status_fc[$index],
    //             'occupation' => $request->occupation_fc[$index],
    //             'educational' => $request->educational_attainment_fc[$index],
    //             'gender' => $request->gender_fc[$index],
    //             'income' => $request->income[$index],
    //         ]);
    //     }

    //     return back()->with('message', "Basic Information Updated Successfully!");
    // }

    public function store(Request $request)
    {
        try {
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

            $fieldFamilyComposition = $request->only([
                'name',
                'relationship',
                'birthday',
                'age_fc',
                'gender_fc',
                'civil_status_fc',
                'occupation_fc',
                'educational_attainment_fc',
                'income',
            ]);

            // Validate family composition fields
            $validator = Validator::make($request->all(), [
                'name.*'                      => ['required'],
                'relationship.*'              => ['required'],
                'birthday.*'                  => ['required', 'date'],
                'age_fc.*'                    => ['required', 'numeric'],
                'gender_fc.*'                 => ['required'],
                'civil_status_fc.*'           => ['required'],
                'occupation_fc.*'             => ['required'],
                'educational_attainment_fc.*' => ['required'],
                'income.*'                    => ['required'],
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'errors' => $validator->errors()
                ], 422);
            }

            // Check for empty fields
            $anyEmpty = collect(array_merge($fields, $fieldFamilyComposition))->contains(function ($value) {
                return $value === null || $value === '';
            });

            if ($anyEmpty) {
                return response()->json([
                    'success' => false,
                    'message' => 'Please fill out all fields before submitting.'
                ], 422);
            }

            $fields['user_id'] = Auth::id();
            $fieldFamilyComposition['user_id'] = Auth::id();

            // Update or create basic info
            BasicInfo::updateOrCreate(
                ['user_id' => Auth::id()],
                $fields
            );

            // Handle family composition
            $existingNames = [];
            foreach ($request->name as $index => $name) {
                $existingNames[] = $name;
                FamilyComposition::updateOrCreate([
                    'user_id' => Auth::id(),
                    'name' => $name,
                ], [
                    'relationship' => $request->relationship[$index],
                    'birthday' => $request->birthday[$index],
                    'age' => $request->age_fc[$index],
                    'civil_status' => $request->civil_status_fc[$index],
                    'occupation' => $request->occupation_fc[$index],
                    'educational' => $request->educational_attainment_fc[$index],
                    'gender' => $request->gender_fc[$index],
                    'income' => $request->income[$index],
                ]);
            }

            // Delete family members that were removed
            FamilyComposition::where('user_id', Auth::id())
                ->whereNotIn('name', $existingNames)
                ->delete();

            return response()->json([
                'success' => true,
                'message' => 'Basic Information Updated Successfully!'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred: ' . $e->getMessage()
            ], 500);
        }
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
