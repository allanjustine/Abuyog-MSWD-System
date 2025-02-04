<!-- View Modal -->
<div class="modal fade" id="viewModal{{ $beneficiary->id }}" tabindex="-1" aria-labelledby="viewModalLabel{{ $beneficiary->id }}" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewModalLabel{{ $beneficiary->id }}">
                    Beneficiary Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="max-height: 80vh; overflow-y: auto;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><strong>First Name:</strong></label>
                            <input type="text" class="form-control" value="{{ $beneficiary->first_name }}" disabled>
                        </div>
                        <div class="form-group">
                            <label><strong>Middle Name:</strong></label>
                            <input type="text" class="form-control" value="{{ $beneficiary->middle_name ?? 'N/A' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label><strong>Last Name:</strong></label>
                            <input type="text" class="form-control" value="{{ $beneficiary->last_name }}" disabled>
                        </div>
                        <div class="form-group">
                            <label><strong>Email:</strong></label>
                            <input type="email" class="form-control" value="{{ $beneficiary->email }}" disabled>
                        </div>
                        <div class="form-group">
                            <label><strong>Monthly Income:</strong></label>
                            <input type="text" class="form-control" value="{{ $beneficiary->monthly_income ?? 'N/A' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label><strong>Civil Status:</strong></label>
                            <input type="text" class="form-control" value="{{ $beneficiary->civil_status }}" disabled>
                        </div>
                        <div class="form-group">
                            <label><strong>Gender:</strong></label>
                            <input type="text" class="form-control" value="{{ $beneficiary->gender }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><strong>Phone:</strong></label>
                            <input type="text" class="form-control" value="{{ $beneficiary->phone }}" disabled>
                        </div>
                        <div class="form-group">
                            <label><strong>Program Enrolled:</strong></label>
                            <input type="text" class="form-control" value="{{ $beneficiary->service ? $beneficiary->service->name : 'No Program' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label><strong>Barangay:</strong></label>
                            <input type="text" class="form-control" value="{{ $beneficiary->barangay->name ?? 'No Barangay' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label><strong>Date of Birth:</strong></label>
                            <input type="text" class="form-control" value="{{ $beneficiary->date_of_birth }}" disabled>
                        </div>
                        <div class="form-group">
                            <label><strong>Age:</strong></label>
                            <input type="text" class="form-control" value="{{ $beneficiary->age }}" disabled>
                        </div>
                        <div class="form-group">
                            <label><strong>ID Number:</strong></label>
                            <input type="text" class="form-control" value="{{ $beneficiary->id_number }}" disabled>
                        </div>

                    </div>
                </div>

                @if ($beneficiary->familyCompositions->count() !== 0)
                <div class="row">
                    <div class="col-md-12">
                        <h5><strong>Family Composition:</strong></h5>
                        @foreach ($beneficiary->familyCompositions as $index => $fc)
                        <div class="mb-3 border-t row p-2" @if($index % 2) style="background-color: rgba(9, 9, 9, 0.157);" @endif>
                            <div class="col-md-4">
                                <label><strong>Name:</strong></label>
                                <input type="text" class="form-control" value="{{ $fc->name ?? 'No Data' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>Relationship:</strong></label>
                                <input type="text" class="form-control" value="{{ $fc->relationship ?? 'No Data' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>Age:</strong></label>
                                <input type="text" class="form-control" value="{{ $fc->age ?? 'No Data' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>Civil Status:</strong></label>
                                <input type="text" class="form-control" value="{{ $fc->civil_status ?? 'No Data' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>Occupation:</strong></label>
                                <input type="text" class="form-control" value="{{ $fc->occupation ?? 'No Data' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>Birthday:</strong></label>
                                <input type="text" class="form-control" value="{{ $fc?->birthday?->format('F j, Y') ?? 'No Data' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>Educational:</strong></label>
                                <input type="text" class="form-control" value="{{ $fc->educational ?? 'No Data' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>Income:</strong></label>
                                <input type="text" class="form-control" value="{{ $fc->income ?? 'No Data' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>Gender:</strong></label>
                                <input type="text" class="form-control" value="{{ $fc->gender ?? 'No Data' }}" disabled>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                @if ($beneficiary->aicsDetails->count() !== 0)
                <div class="row">
                    <div class="col-md-12">
                        <h5><strong>Aics Details:</strong></h5>
                        @foreach ($beneficiary->aicsDetails as $ad)
                        <div class="mb-3 row">
                            <div class="col-md-4">
                                <label><strong>Case No:</strong></label>
                                <input type="text" class="form-control" value="{{ $ad->case_no ?? 'No Data' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>Date Applied:</strong></label>
                                <input type="text" class="form-control" value="{{ $ad->date_applied->format('F d, Y') ?? 'No Data' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>Source of referral:</strong></label>
                                <input type="text" class="form-control" value="{{ $ad->source_of_referral ?? 'No Data' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>Problem Presenter:</strong></label>
                                <input type="text" class="form-control" value="{{ $ad->problem_presented ?? 'No Data' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>Findings:</strong></label>
                                <input type="text" class="form-control" value="{{ $ad->findings ?? 'No Data' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>Action Taken:</strong></label>
                                <input type="text" class="form-control" value="{{ $ad->action_taken ?? 'No Data' }}" disabled>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                @if ($beneficiary->soloParentDetails->count() !== 0)
                <div class="row">
                    <div class="col-md-12">
                        <h5><strong>Other Details:</strong></h5>
                        @foreach ($beneficiary->soloParentDetails as $sp)
                        <div class="mb-3 row">
                            <div class="col-md-4">
                                <label><strong>Company/Agency:</strong></label>
                                <input type="text" class="form-control" value="{{ $sp->company_agency ?? 'No Data' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>4PS Beneficiary:</strong></label>
                                <input type="text" class="form-control" value="{{ $sp['4ps_agency'] ?? 'No Data' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>Indigenous Person:</strong></label>
                                <input type="text" class="form-control" value="{{ $sp->indigenous_person ?? 'No Data' }}" disabled>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                @if ($beneficiary->contactEmergencies->count() !== 0)
                <div class="row">
                    <div class="col-md-12">
                        <h5><strong>IN CASE OF EMERGENCY DETAILS:</strong></h5>
                        @foreach ($beneficiary->contactEmergencies as $ce)
                        <div class="mb-3 row">
                            <div class="col-md-4">
                                <label><strong>Contact Person Name:</strong></label>
                                <input type="text" class="form-control" value="{{ $ce->name ?? 'No Data' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>Contact Person Address:</strong></label>
                                <input type="text" class="form-control" value="{{ $ce->address ?? 'No Data' }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>Contact Person Number:</strong></label>
                                <input type="text" class="form-control" value="{{ $ce->contact_number ?? 'No Data' }}" disabled>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Assistance Details -->
                @if($beneficiary->benefitsReceived->count() !== 0)
                <div class="row">
                    <div class="col-md-12">
                        <h5><strong>Assistance Received:</strong></h5>
                        @foreach ($beneficiary->benefitsReceived as $benefit)
                        <div class="mb-3 row">
                            <!-- Name of Assistance -->
                            <div class="col-md-3">
                                <label><strong>Name of Assistance:</strong></label>
                                <input type="text" class="form-control" value="{{ $benefit->name_of_assistance }}" disabled>
                            </div>
                            <!-- Type of Assistance -->
                            <div class="col-md-3">
                                <label><strong>Type of Assistance:</strong></label>
                                <input type="text" class="form-control" value="{{ $benefit->type_of_assistance }}" disabled>
                            </div>
                            <!-- Amount -->
                            <div class="col-md-3">
                                <label><strong>Amount:</strong></label>
                                <input type="text" class="form-control" value="{{ $benefit->amount }}" disabled>
                            </div>
                            <!-- Date Received -->
                            <div class="col-md-3">
                                <label><strong>Date Received:</strong></label>
                                <input type="text" class="form-control" value="{{ $benefit->date_received ?? 'Not Yet Received' }}" disabled>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                @if($beneficiary->pwdDetails->count() !== 0)
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="fs-3"><strong>PWD DETAILS:</strong></h5>
                        @foreach ($beneficiary->pwdDetails as $pd)
                        <div class="mb-3 row">
                            <div class="col-md-3">
                                <label><strong>Type of Disability:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->type_of_disability }}" disabled>
                            </div>
                            <div class="col-md-3">
                                <label><strong>Cause of Disability:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->cause_of_disability }}" disabled>
                            </div>
                            <div class="col-md-3">
                                <label><strong>Acquired:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->acquired }}" disabled>
                            </div>
                            <div class="col-md-3">
                                <label><strong>Congenital/Inborn:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->congenital_inborn }}" disabled>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-4">
                                <label><strong>House no. and Street:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->house_no_and_street }}" disabled>
                            </div>

                            <div class="col-md-4">
                                <label><strong>Municipality:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->municipality }}" disabled>
                            </div>

                            <div class="col-md-4">
                                <label><strong>Province:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->province }}" disabled>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-4">
                                <label><strong>Region:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->region }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>Landline No.:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->landline_no }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>Types of Employment:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->types_of_employment }}" disabled>
                            </div>
                        </div>

                        <div class="mb-3 row">

                            <div class="col-md-4">
                                <label><strong>Email Address:</strong></label>
                                <input type="email" class="form-control" value="{{ $pd->email_address }}" disabled>
                            </div>

                            <div class="col-md-4">
                                <label><strong>Status of Employment:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->status_of_employment }}" disabled>
                            </div>

                            <div class="col-md-4">
                                <label><strong>Category of Employment:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->category_of_employment }}" disabled>
                            </div>
                        </div>

                        <h5 class="fs-3"><strong>ORGANIZATION AFFILIATED:</strong></h5>
                        <div class="mb-3 row">
                            <div class="col-md-4">
                                <label><strong>Organization Affiliated:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->organization_affiliated }}" disabled>
                            </div>

                            <div class="col-md-4">
                                <label><strong>Contact Person:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->contact_person }}" disabled>
                            </div>

                            <div class="col-md-4">
                                <label><strong>Office Address:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->office_address }}" disabled>
                            </div>
                        </div>

                        <div class="mb-3 row">

                            <div class="col-md-4">
                                <label><strong>Tel. No.:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->tel_no }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>SSS No.:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->sss_no }}" disabled>
                            </div>

                            <div class="col-md-4">
                                <label><strong>GSIS No.:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->gsis_no }}" disabled>
                            </div>
                        </div>

                        <div class="mb-3 row">

                            <div class="col-md-4">
                                <label><strong>Pag-IBIG No.:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->pag_ibig_no }}" disabled>
                            </div>

                            <div class="col-md-4">
                                <label><strong>PSN No.:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->psn_no }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label><strong>PhilHealth No.:</strong></label>
                                <input type="text" class="form-control" value="{{ $pd->philhealth_no }}" disabled>
                            </div>
                        </div>
                        <h5 class="fs-3"><strong>ACCOMPLISHED BY:</strong></h5>
                        <div class="mb-3 row justify-content-center align-items-center">

                            <div class="mx-auto col-md-3">
                                <label><strong>Accomplished By.:</strong></label>
                                <input type="text" class="form-control text-capitalize" value="{{ $pd->accomplished_by }}" disabled>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                @if ($beneficiary->familyBackgrounds->count() !== 0)
                @foreach ($beneficiary->familyBackgrounds as $fb)
                <div class="row">
                    <h5 class="fs-3"><strong>FAMILY BACKGROUND:</strong></h5>
                    <div class="mb-3 row">

                        <div class="col-md-4">
                            <label><strong>Fathers Name:</strong></label>
                            <input type="text" class="form-control" value="{{ $fb->father_name ?? 'Not Set' }}" disabled>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Occupation:</strong></label>
                            <input type="text" class="form-control" value="{{ $fb->father_occupation ?? 'Not Set' }}" disabled>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Phone:</strong></label>
                            <input type="text" class="form-control" value="{{ $fb->father_phone ?? 'Not Set' }}" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">

                        <div class="col-md-4">
                            <label><strong>Mothers Name:</strong></label>
                            <input type="text" class="form-control" value="{{ $fb->mother_name ?? 'Not Set' }}" disabled>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Occupation:</strong></label>
                            <input type="text" class="form-control" value="{{ $fb->mother_occupation ?? 'Not Set' }}" disabled>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Phone:</strong></label>
                            <input type="text" class="form-control" value="{{ $fb->mother_phone ?? 'Not Set' }}" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">

                        <div class="col-md-4">
                            <label><strong>Guardian Name:</strong></label>
                            <input type="text" class="form-control" value="{{ $fb->guardian_name ?? 'Not Set' }}" disabled>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Occupation:</strong></label>
                            <input type="text" class="form-control" value="{{ $fb->guardian_occupation ?? 'Not Set' }}" disabled>
                        </div>
                        <div class="col-md-4">
                            <label><strong>Phone:</strong></label>
                            <input type="text" class="form-control" value="{{ $fb->guardian_phone ?? 'Not Set' }}" disabled>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
</div>
