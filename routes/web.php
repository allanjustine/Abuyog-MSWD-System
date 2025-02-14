<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\GISMappingController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OperatorController;




Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect'])->name('user.home')->middleware(['auth', 'verified']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard'); // Or wherever you want to redirect
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/offline', function () {
    return view('vendor.laravelpwa.offline');
});


Route::group(['middleware' => ['auth']], function () {

    // Route::put('/update_beneficiary_operator/{id}', [OperatorController::class, 'updateBeneficiary']);

    Route::get('application_history/{id}', [ApplicationController::class, 'history'])->name('applications.history');

    // Application routes
    Route::get('/applications', [ApplicationController::class, 'showAllApplications'])->name('application.index');
    //Route::post('/application/approve/{id}', [ApplicationController::class, 'approveApplication'])->name('application.approve');
    Route::get('approved/{id}', [ApplicationController::class, 'approveApplication'])->name('application.approve');

    // Beneficiary routes
    Route::get('/beneficiaries', [BeneficiaryController::class, 'index'])->name('beneficiaries.index');

    // Reports routes
    Route::get('/reports', [ReportsController::class, 'index'])->name('reports.index');
    Route::get('/report', [ReportsController::class, 'report'])->name('operator.report');
    // Show the edit form
    Route::get('/edit_beneficiaries_employee/{id}', [EmployeeController::class, 'edit_beneficiaries_employee_form']);

    //update beneficiary employee
    Route::post('/updatebeneficiary/{id}', [EmployeeController::class, 'update_beneficiary']);

    Route::get('/add-osca', [AdminController::class, 'addOsca']);
    Route::get('/edit-osca/{id}', [AdminController::class, 'editOsca']);
    Route::patch('/update-osca/{id}', [AdminController::class, 'updateOsca']);
    Route::post('/add-osca', [AdminController::class, 'storeOsca']);

    Route::get('/add-aics', [AdminController::class, 'addAics']);
    Route::get('/edit-aics/{id}', [AdminController::class, 'editAics']);
    Route::patch('/update-aics/{id}', [AdminController::class, 'updateAics']);
    Route::post('/add-aics', [AdminController::class, 'storeAics']);

    Route::get('/add-pwd', [AdminController::class, 'addPwd']);
    Route::get('/edit-pwd/{id}', [AdminController::class, 'editPwd']);
    Route::patch('/update-pwd/{id}', [AdminController::class, 'updatePwd']);
    Route::post('/add-pwd', [AdminController::class, 'storePwd']);

    Route::get('/add-solo-parent', [AdminController::class, 'addSoloParent']);
    Route::get('/edit-solo-parent/{id}', [AdminController::class, 'editSoloParent']);
    Route::patch('/update-solo-parent/{id}', [AdminController::class, 'updateSoloParent']);
    Route::post('/add-solo-parent', [AdminController::class, 'storeSoloParent']);


    //operator monitoring
    Route::get('/shownewbenefits_operator', [OperatorController::class, 'newBenefitsshowOperator'])->name('operator.add_newbenefits_operator');
    Route::post('/filter-beneficiaries', [OperatorController::class, 'filterBeneficiaries'])->name('filterBeneficiaries');
    Route::get('/all_benefitsreceived_operator', [OperatorController::class, 'AllbenefitsReceivedOperator'])->name('admin.all_benefitsreceived_operator');
    Route::get('/operator_add_assistance', [OperatorController::class, 'OperatoraddAssistance'])->name('OperatoraddAssistance');
    Route::post('add-assistance-to-beneficiaries-operator', [OperatorController::class, 'addAssistanceToBeneficiariesOperator'])->name('addAssistanceToBeneficiariesOperator');
    Route::get('/filter-benefits-received-operator', [OperatorController::class, 'filterBenefitsReceivedOperator'])->name('filterBenefitsReceivedOperator');
    Route::get('/inventory_operator', [OperatorController::class, 'InventoryOperator'])->name('operator.inventory_operator');
    Route::get('/filter-inventory-operator', [OperatorController::class, 'filterforInventoryOperator'])->name('filterforInventoryOperator');
    Route::get('/deceased_operator', [OperatorController::class, 'AlldeceasedOperator'])->name('operator.deceased_operator');

    //employee release benefits
    Route::get('/assistance_release', [EmployeeController::class, 'releaseAssistance'])->name('employee.assistance_release');
    Route::get('/filter-benefits', [EmployeeController::class, 'filterBenefits'])->name('filterBenefits');
    // Route::post('/benefits/mark-received/{id}', [EmployeeController::class, 'markAsReceived'])->name('benefits.markReceived');
    Route::post('/benefits/{id}/mark-received', [EmployeeController::class, 'markReceived'])->name('benefits.markReceived');
    Route::post('/benefits/{id}/mark-not-received', [EmployeeController::class, 'markNotReceived'])->name('benefits.markNotReceived');

    // dropdown opertor beneficiaries
    Route::get('/showbeneficiaries_oscaa', [BeneficiaryController::class, 'showOsca'])->name('dropdownope.osca');
    Route::get('/showbeneficiaries_pwdd', [BeneficiaryController::class, 'showPwd'])->name('dropdownope.pwd');
    Route::get('/showbeneficiaries_solo_parentt', [BeneficiaryController::class, 'showSoloParent'])->name('dropdownope.solo_parent');
    Route::get('/showbeneficiaries_aicss', [BeneficiaryController::class, 'showAics'])->name('dropdownope.aics');

    // admin dropdown
    Route::get('/showbeneficiaries_osca', [AdminController::class, 'showOscaadmin'])->name('dropdownadm.osca');
    Route::get('/showbeneficiaries_pwd', [AdminController::class, 'showPwdadmin'])->name('dropdownadm.pwd');
    Route::get('/showbeneficiaries_solo_parent', [AdminController::class, 'showSoloParentadmin'])->name('dropdownadm.solo_parent');
    Route::get('/showbeneficiaries_aics', [AdminController::class, 'showAicsadmin'])->name('dropdownadm.aics');

    //admin monitoring
    Route::get('/shownewbenefits', [AdminController::class, 'newBenefitsshow'])->name('admin.add_newbenefits');
    Route::post('/filter-beneficiaries', [AdminController::class, 'filterBeneficiaries'])->name('filterBeneficiaries');
    Route::get('/all_benefitsreceived', [AdminController::class, 'AllbenefitsReceived'])->name('admin.all_benefitsreceived');
    Route::get('/get-beneficiaries', [AdminController::class, 'getBeneficiaries']);
    Route::post('add-assistance-to-beneficiaries', [AdminController::class, 'addAssistanceToBeneficiaries'])->name('addAssistanceToBeneficiaries');
    Route::get('/filter-benefits-received', [AdminController::class, 'filterBenefitsReceived'])->name('filterBenefitsReceived');
    Route::get('/inventory', [AdminController::class, 'Inventory'])->name('admin.inventory');
    Route::get('/filter-inventory', [AdminController::class, 'filterforInventory'])->name('filterforInventory');
    Route::get('mark_deceased/{id}', [AdminController::class, 'markAsDeceased']);
    Route::get('/deceased', [AdminController::class, 'Alldeceased'])->name('admin.deceased');
    Route::post('/send-bulk-sms', [BeneficiaryController::class, 'sendBulkSMSAdmin']);
    Route::get('/reports/download-pdf', [ReportsController::class, 'downloadPDF'])->name('reports.download-pdf');
    Route::get('/reports/download-excel', [ReportsController::class, 'downloadExcel'])->name('reports.download-excel');

    // Route to display the GIS map page
    Route::get('/gis', [GISMappingController::class, 'index']);
    Route::get('/barangays', [GISMappingController::class, 'barangay']);

    // Route to fetch filtered beneficiaries based on program and barangay
    Route::get('/gis-beneficiaries', [GISMappingController::class, 'getBeneficiaries']);


    Route::get('/send-sms', [SmsController::class, 'sendSms']);
    Route::get('send-sms/{id}', [ApplicationController::class, 'sendSMS'])->name('send.sms');
    Route::post('/send-bulk-sms', [BeneficiaryController::class, 'sendBulkSMS'])->name('send.bulk.sms');
    // Fetch SMS Logs
    Route::get('/fetch-sms-logs', [BeneficiaryController::class, 'fetchSmsLogs']);

    // Resend SMS
    Route::post('/resend-sms/{id}', [BeneficiaryController::class, 'resendSms']);


    Route::put('/cancelled-with-reason/{id}', [ApplicationController::class, 'cancelWithReason'])->name('cancel.with.reason');

    //user management
    Route::resource('users', UserController::class);
    Route::get('/showusermanagement', [UserController::class, 'index'])->name('showusermanagement.index');

    Route::get('/edit_beneficiary_operator/{id}', [OperatorController::class, 'edit_beneficiary_operator_form']);
    Route::get('beneficiary_search_ope', [OperatorController::class, 'beneficiary_search_ope']);
    Route::put('/update_beneficiary_operator/{id}', [OperatorController::class, 'update_beneficiary_operator']);
    Route::post('/uploadbeneficiary_operator', [OperatorController::class, 'uploadbeneficiary_operator']);
    Route::get('/add_beneficiary_operator', [OperatorController::class, 'addbeneficiaryoperator']);
    Route::get('/showservicesope', [AdminController::class, 'showservicesope']);

    Route::get('sms-logs', [EmployeeController::class, 'viewSMSLogs'])->name('sms.logs');
    Route::post('/resend-sms/{phoneNumber}', [EmployeeController::class, 'resendSMS'])->name('sms.resend');


    Route::get('/sms', [SmsController::class, 'index'])->name('sms.index');
    Route::post('/sms/send', [SmsController::class, 'send'])->name('sms.send');

    Route::get('/application_details/{id}', [ApplicationController::class, 'getApplicationDetails']);
    Route::get('/applications/{id}', [ApplicationController::class, 'showForm'])->middleware('auth');
    Route::post('/submit-application', [ApplicationController::class, 'submitApplication'])->middleware('auth');
    Route::post('/submit-application/osca/{id}', [ApplicationController::class, 'storeOsca'])->middleware('auth');
    Route::post('/submit-application/aics/{id}', [ApplicationController::class, 'storeAics'])->middleware('auth');
    Route::post('/submit-application/solo-parent/{id}', [ApplicationController::class, 'storeSoloParent'])->middleware('auth');
    Route::post('/submit-application/pwd/{id}', [ApplicationController::class, 'storePwd'])->middleware('auth');

    Route::post('/application', [HomeController::class, 'application']);
    Route::get('/myapplication', [HomeController::class, 'myapplication'])->name('myapplication');
    Route::get('/form/{id}', [ApplicationController::class, 'showForm'])->name('forms');
    Route::get('/cancel_application/{id}', [HomeController::class, 'cancel_application']);


    Route::get('/showapplication', [EmployeeController::class, 'showapplication'])->name('show.application');
    Route::get('/display_beneficiaries', [EmployeeController::class, 'display_beneficiaries'])->name('show.beneficiaries_index');
    Route::get('/approved/{id}', [EmployeeController::class, 'approved'])->name('approve.application');
    Route::post('/cancelled', [ApplicationController::class, 'cancelApplication'])->name('application.cancel');
    // In web.php (routes file)
    Route::post('cancelled/edit-reason/{id}', [ApplicationController::class, 'updateCancellationReason'])->name('application.updateCancellationReason');

    Route::get('/employee/application/{id}', [ApplicationController::class, 'showApplicationDetails'])->name('employee.application.view');
    Route::get('/application/{id}', [ApplicationController::class, 'showApplicationDetailsAdmin'])->name('admin.application.view');
    Route::get('/showbeneficiaries_operator', [OperatorController::class, 'showbeneficiaries_operator']);

    //edit opertor
    Route::get('/showbeneficiaries_operator', [OperatorController::class, 'showbeneficiaries_operator'])->name('show.beneficiaries_operator_index');


    Route::post('/add-new-assistance', [AdminController::class, 'addNewAssistance']);
    Route::post('/add-benefits/{id}', [AdminController::class, 'submitAssistance']);

    Route::get('/generate-pdf/{id}', [ApplicationController::class, 'generatePDF']); // Remove this line if not needed
});

Route::group(['middleware' => ['role-admin', 'auth']], function () {
    // ADMIN APPLICATION APPROVAL OR REJECTION
    Route::post('/approve-application/{id}', [AdminController::class, 'adminApproval']);
    Route::post('/reject-application/{id}', [AdminController::class, 'adminRejection']);

    Route::get('/test/display/pdf/{id}', [ApplicationController::class, 'testPdf']);
    Route::post('/send-sms/{id}', [AdminController::class, 'sendSms']);
    Route::post('/released/{id}', [AdminController::class, 'releasedUser']);

    //Route::get('/application-pdf/{id}', [ApplicationController::class, 'generatePDF'])->name('application.pdf');

    // Route::get('/generate-pdf', [ApplicationController::class, 'generatePdf'])->name('generate-pdf');


    // Define the route for the applications list (index page)

    Route::get('beneficiary_search', [AdminController::class, 'beneficiary_search']);
    Route::get('beneficiary_search_emp', [EmployeeController::class, 'beneficiary_search_emp']);
    Route::get('/application_search', [AdminController::class, 'application_search'])->name('application.search');
    Route::get('/apply_search', [EmployeeController::class, 'apply_search'])->name('apply.search');

    Route::get('/showbeneficiary', [AdminController::class, 'showbeneficiary']);
    Route::get('/showbeneficiaries_admin', [OperatorController::class, 'showbeneficiaries_admin'])->name('show.beneficiaries_admin');


    Route::get('/add_service_view', [AdminController::class, 'addview']);
    Route::get('/showservices', [AdminController::class, 'showservices'])->name('admin.showservices');
    Route::post('/upload_service', [AdminController::class, 'upload']);
    Route::get('/deleteservices/{id}', [AdminController::class, 'deleteservices']);
    Route::get('/editservices/{id}', [AdminController::class, 'editservices']);
    Route::post('/updateservice/{id}', [AdminController::class, 'updateservice']);


    Route::get('/add_beneficiary_view', [AdminController::class, 'addbeneficiaryview']);
    Route::get('/showbeneficiary', [AdminController::class, 'showbeneficiary']);
    Route::post('/uploadbeneficiary', [AdminController::class, 'uploadbeneficiary']);
    Route::get('/deletebeneficiaries/{id}', [AdminController::class, 'deletebeneficiaries']);
    Route::get('/editbeneficiaries/{id}', [AdminController::class, 'editBeneficiaries']);
    Route::put('/updatebeneficiary/{id}', [AdminController::class, 'updateBeneficiary']);

    Route::get('/displayapplication', [AdminController::class, 'displayapplication']);

    Route::get('/logs', [AdminController::class, 'displayAllLogs']);
});
