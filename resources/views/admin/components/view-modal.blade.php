<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


<!-- View Modal -->
<div class="modal fade" id="viewModal{{ $item?->id }}" tabindex="-1" aria-labelledby="viewModalLabel{{ $item?->id }}"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="background-color:rgb(104, 190, 104); color: white;">
                <h5 class="modal-title" id="viewModalLabel{{ $item?->id }}">
                    Beneficiary Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="max-height: 80vh; overflow-y: auto;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>First Name:</strong></label>
                            <input type="text" class="form-control" value="{{ $item?->first_name }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Middle Name:</strong></label>
                            <input type="text" class="form-control" value="{{ $item?->middle_name ?? 'N/A' }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Last Name:</strong></label>
                            <input type="text" class="form-control" value="{{ $item?->last_name }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Suffix:</strong></label>
                            <input type="text" class="form-control" value="{{ $item?->suffix ?? 'N/A' }}" disabled>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Date of Birth:</strong></label>
                            <input type="text" class="form-control"
                                value="{{ $item?->date_of_birth?->format('F d, Y') }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Age:</strong></label>
                            <input type="text" class="form-control" value="{{ $item?->age }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Gender:</strong></label>
                            <input type="text" class="form-control" value="{{ $item?->gender }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Phone:</strong></label>
                            <input type="text" class="form-control" value="{{ $item?->phone }}" disabled>
                        </div>
                    </div>
                </div>

                <h5 class="text-left fs-5 mb-3">
                    <i class="fas fa-info-circle"></i> <strong>Additional Information</strong>
                </h5>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Barangay:</strong></label>
                            <input type="text" class="form-control" value="{{ $item?->barangay->name }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Civil Status:</strong></label>
                            <input type="text" class="form-control" value="{{ $item?->civil_status }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Religion:</strong></label>
                            <input type="text" class="form-control" value="{{ $item?->religion ?? 'N/A' }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Email:</strong></label>
                            <input type="email" class="form-control" value="{{ $item?->email ?? 'N/A' }}" disabled>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Place of Birth:</strong></label>
                            <input type="text" class="form-control" value="{{ $item?->place_of_birth }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Educational Attainment:</strong></label>
                            <input type="text" class="form-control" value="{{ $item?->educational_attainment }}"
                                disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Occupation:</strong></label>
                            <input type="text" class="form-control" value="{{ $item?->occupation }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Annual Income:</strong></label>
                            <input type="text" class="form-control" value="{{ $item?->annual_income ?? 'N/A' }}"
                                disabled>
                        </div>
                    </div>
                </div>


                <h5 class="text-left fs-5 mb-3">
                    <i class="fas fa-info-circle"></i> <strong>Program Application Information</strong>
                </h5>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Program Enrolled:</strong></label>
                            <input type="text" class="form-control"
                                value="{{ $item?->service ? $item?->service->name : 'No Program' }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Date Appeared:</strong></label>
                            <input type="text" class="form-control"
                                value="{{ $item?->appearance_date?->format('F d, Y') ?? 'N/A' }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Date Approved:</strong></label>
                            <input type="text" class="form-control" value="{{ $item?->approved_at?->format('F d, Y') }}"
                                disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="text-left d-block mb-2"><strong>Accepted by:</strong></label>
                            <input type="email" class="form-control" value="{{ $item?->acceptedBy?->full_name}}" disabled>
                        </div>
                    </div>
                </div>
            </div>
            @if ($item?->user?->familyCompositions?->count() > 0)
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="text-left fs-5 mb-3 mx-3">
                            <i class="mdi mdi-account-group"></i> <strong>Family Composition</strong>
                        </h5>
                        @foreach ($item?->user?->familyCompositions as $index => $fc)
                            <div class="mb-3 border-top p-2"
                            @style([
                                'background-color: rgba(9, 9, 9, 0.157)' => $loop->even
                            ])
                            >
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="text-left d-block mb-2"><strong>Name:</strong></label>
                                            <input type="text" class="form-control" value="{{ $fc->name ?? 'No Data' }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="text-left d-block mb-2"><strong>Relationship:</strong></label>
                                            <input type="text" class="form-control" value="{{ $fc->relationship ?? 'No Data' }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="text-left d-block mb-2"><strong>Age:</strong></label>
                                            <input type="text" class="form-control" value="{{ $fc->age ?? 'No Data' }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="text-left d-block mb-2"><strong>Civil Status:</strong></label>
                                            <input type="text" class="form-control" value="{{ $fc->civil_status ?? 'No Data' }}"
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="text-left d-block mb-2"><strong>Occupation:</strong></label>
                                            <input type="text" class="form-control" value="{{ $fc->occupation ?? 'No Data' }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="text-left d-block mb-2"><strong>Birthday:</strong></label>
                                            <input type="text" class="form-control"
                                                value="{{ $fc?->birthday?->format('F j, Y') ?? 'No Data' }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="text-left d-block mb-2"><strong>Educational:</strong></label>
                                            <input type="text" class="form-control" value="{{ $fc->educational ?? 'No Data' }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="text-left d-block mb-2"><strong>Income:</strong></label>
                                            <input type="text" class="form-control" value="{{ $fc->income ?? 'No Data' }}"
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="text-left d-block mb-2"><strong>Gender:</strong></label>
                                            <input type="text" class="form-control" value="{{ $fc->gender ?? 'No Data' }}"
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            @if ($item?->aicsDetails?->count() !== 0)
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="text-left fs-5 mb-3 mx-3">
                            <i class="fas fa-info-circle"></i> <strong>AICS Details</strong>
                        </h5>
                        @foreach ($item?->aicsDetails as $ad)
                            <div class="mb-3 row mx-2">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-left d-block mb-2"><strong>Case No:</strong></label>
                                        <input type="text" class="form-control" value="{{ $ad->case_no ?? 'No Data' }}"
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-left d-block mb-2"><strong>Date Applied:</strong></label>
                                        <input type="text" class="form-control"
                                            value="{{ $ad?->date_applied?->format('F d, Y') ?? 'No Data' }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-left d-block mb-2"><strong>Source of referral:</strong></label>
                                        <input type="text" class="form-control"
                                            value="{{ $ad->source_of_referral ?? 'No Data' }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-left d-block mb-2"><strong>Problem Presented:</strong></label>
                                        <input type="text" class="form-control"
                                            value="{{ $ad->problem_presented ?? 'No Data' }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-left d-block mb-2"><strong>Findings:</strong></label>
                                        <input type="text" class="form-control" value="{{ $ad->findings ?? 'No Data' }}"
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-left d-block mb-2"><strong>Action Taken:</strong></label>
                                        <input type="text" class="form-control" value="{{ $ad->action_taken ?? 'No Data' }}"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            @if ($item?->contactEmergencies?->count() !== 0)
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="text-left fs-5 mb-3 mx-3">
                            <i class="fas fa-info-circle"></i> <strong>IN CASE OF EMERGENCY</strong>
                        </h5>
                        @foreach ($item?->contactEmergencies as $ce)
                            <div class="mb-3 row mx-2">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-left d-block mb-2"><strong>Contact Person Name:</strong></label>
                                        <input type="text" class="form-control" value="{{ $ce->name ?? 'No Data' }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-left d-block mb-2"><strong>Contact Person Address:</strong></label>
                                        <input type="text" class="form-control" value="{{ $ce->address ?? 'No Data' }}"
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-left d-block mb-2"><strong>Contact Person Number:</strong></label>
                                        <input type="text" class="form-control" value="{{ $ce->contact_number ?? 'No Data' }}"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            @if ($item?->soloParentDetails?->count() !== 0)
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="text-left fs-5 mb-2 mx-3">
                            <i class="fas fa-info-circle"></i> <strong>Other Details:</strong>
                        </h5>
                        @foreach ($item?->soloParentDetails as $sp)
                            <div class="mb-3 row mx-2">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-left d-block mb-2"><strong>Company/Agency:</strong></label>
                                        <input type="text" class="form-control" value="{{ $sp->company_agency ?? 'No Data' }}"
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-left d-block mb-2"><strong>4PS Item:</strong></label>
                                        <input type="text" class="form-control" value="{{ $sp['4ps_agency'] ?? 'No Data' }}"
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-left d-block mb-2"><strong>Indigenous Person:</strong></label>
                                        <input type="text" class="form-control"
                                            value="{{ $sp->indigenous_person ?? 'No Data' }}" disabled>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif


            @if ($item?->pwdDetails?->count() !== 0)
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="text-left fs-5 mb-2 mx-3">
                            <i class="fas fa-info-circle"></i> <strong>PWD Details</strong>
                        </h5>
                        @foreach ($item?->pwdDetails as $pd)
                            <div class="mb-3 row mx-2">
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Application Type:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->application_type }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>PWD Number:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->pwd_number }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Blood Type:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->blood_type }}" disabled>
                                </div>
                            </div>
                            <div class="mb-3 row mx-2">
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Type of Disability:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->type_of_disability }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Cause of Disability:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->cause_of_disability }}" disabled>
                                </div>
                                @if ($pd->cause_of_disability === 'Acquired')
                                    <div class="col-md-4">
                                        <label class="text-left d-block mb-2"><strong>Acquired:</strong></label>
                                        <input type="text" class="form-control" value="{{ $pd->acquired }}" disabled>
                                    </div>
                                @else
                                    <div class="col-md-4">
                                        <label class="text-left d-block mb-2"><strong>Congenital/Inborn:</strong></label>
                                        <input type="text" class="form-control" value="{{ $pd->congenital_inborn }}" disabled>
                                    </div>
                                @endif

                            </div>
                            <div class="mb-3 row mx-2">
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>House no. and Street:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->house_no_and_street }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Landline No.:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->landline_no }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Email Address:</strong></label>
                                    <input type="email" class="form-control" value="{{ $pd->email_address }}" disabled>
                                </div>
                                <!-- <div class="col-md-4">
                                                            <label><strong>Municipality:</strong></label>
                                                            <input type="text" class="form-control" value="{{ $pd->municipality }}" disabled>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label><strong>Province:</strong></label>
                                                            <input type="text" class="form-control" value="{{ $pd->province }}" disabled>
                                                        </div> -->
                            </div>

                            <div class="mb-3 row mx-2">
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Status of Employment:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->status_of_employment }}" disabled>
                                </div>

                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Category of Employment:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->category_of_employment }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Types of Employment:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->types_of_employment }}" disabled>
                                </div>
                            </div>
                            <h5 class="text-left fs-5 mb-2 mx-3"><strong>ORGANIZATION AFFILIATED</strong></h5>
                            <div class="mb-3 row mx-2">
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Organization Affiliated:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->organization_affiliated }}" disabled>
                                </div>

                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Contact Person:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->contact_person }}" disabled>
                                </div>

                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Office Address:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->office_address }}" disabled>
                                </div>
                            </div>

                            <div class="mb-3 row mx-2">
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Tel. No.:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->tel_no }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>SSS No.:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->sss_no }}" disabled>
                                </div>

                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>GSIS No.:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->gsis_no }}" disabled>
                                </div>
                            </div>

                            <div class="mb-3 row mx-2">
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Pag-IBIG No.:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->pag_ibig_no }}" disabled>
                                </div>

                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>PSN No.:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->psn_no }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>PhilHealth No.:</strong></label>
                                    <input type="text" class="form-control" value="{{ $pd->philhealth_no }}" disabled>
                                </div>
                            </div>
                            <h5 class="text-left fs-5 mb-2 mx-3"><strong>ACCOMPLISHED BY:</strong></h5>
                            <div class="mb-3 row mx-2">
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Accomplished By.:</strong></label>
                                    <input type="text" class="form-control text-capitalize" value="{{ $pd->accomplished_by }}"
                                        disabled>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            @if ($item?->familyBackgrounds?->count() !== 0)
                @foreach ($item?->familyBackgrounds as $fb)
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="text-left fs-5 mb-3 mx-3">
                                <i class="mdi mdi-account-group"></i> <strong>Family Background</strong>
                            </h5>
                            <div class="mb-3 row mx-2">
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Fathers Name:</strong></label>
                                    <input type="text" class="form-control" value="{{ $fb->father_name ?? 'Not Set' }}"
                                        disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Occupation:</strong></label>
                                    <input type="text" class="form-control" value="{{ $fb->father_occupation ?? 'Not Set' }}"
                                        disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Phone:</strong></label>
                                    <input type="text" class="form-control" value="{{ $fb->father_phone ?? 'Not Set' }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="mb-3 row mx-2">
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Mothers Name:</strong></label>
                                    <input type="text" class="form-control" value="{{ $fb->mother_name ?? 'Not Set' }}"
                                        disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Occupation:</strong></label>
                                    <input type="text" class="form-control" value="{{ $fb->mother_occupation ?? 'Not Set' }}"
                                        disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Phone:</strong></label>
                                    <input type="text" class="form-control" value="{{ $fb->mother_phone ?? 'Not Set' }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="mb-3 row mx-2">
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Guardian Name:</strong></label>
                                    <input type="text" class="form-control" value="{{ $fb->guardian_name ?? 'Not Set' }}"
                                        disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Occupation:</strong></label>
                                    <input type="text" class="form-control" value="{{ $fb->guardian_occupation ?? 'Not Set' }}"
                                        disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="text-left d-block mb-2"><strong>Phone:</strong></label>
                                    <input type="text" class="form-control" value="{{ $fb->guardian_phone ?? 'Not Set' }}"
                                        disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

            <!-- Assistance Details -->
            @if ($item?->benefitsReceived?->count() !== 0)
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="text-left fs-5 mb-2 mx-3">
                            <i class="mdi mdi-assistant"></i> <strong>Assistance Received:</strong>
                        </h5>
                        @foreach ($item?->benefitsReceived as $benefit)
                            <div class="mb-3 row mx-2">
                                <!-- Name of Assistance -->
                                <div class="col-md-3">
                                    <label class="text-left d-block mb-2"><strong>Name of Assistance:</strong></label>
                                    <input type="text" class="form-control"
                                        value="{{ $benefit?->assistance?->name_of_assistance }}" disabled>
                                </div>
                                <!-- Type of Assistance -->
                                <div class="col-md-3">
                                    <label class="text-left d-block mb-2"><strong>Type of Assistance:</strong></label>
                                    <input type="text" class="form-control"
                                        value="{{ $benefit?->assistance?->type_of_assistance }}" disabled>
                                </div>
                                <!-- Amount -->
                                <div class="col-md-3">
                                    <label class="text-left d-block mb-2"><strong>Amount:</strong></label>
                                    <input type="text" class="form-control" value="{{ $benefit?->assistance?->amount }}"
                                        disabled>
                                </div>
                                <!-- Date Received -->
                                <div class="col-md-3">
                                    <label class="text-left d-block mb-2"><strong>Date Given:</strong></label>
                                    <input type="text" class="form-control"
                                        value="{{ $benefit?->assistance?->date_received?->format('F d, Y \a\t h:i A') ?? 'Not Yet Given' }}"
                                        disabled>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>

</div>
</div>
