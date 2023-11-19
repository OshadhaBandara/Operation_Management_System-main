<?php
use App\Http\Controllers\AdminAppoimentsController;
use App\Http\Controllers\AdminCitizenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CitizenController;
use App\Http\Controllers\ServicesController;
use App\Http\Middleware\AuthCitizen;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\ReportsController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('news_1',function(){

    return view('News/news1');
});

Route::get('news_2',function(){

    return view('News/news2');
});

Route::get('news_3',function(){

    return view('News/news3');
});

Route::get('news_4',function(){

    return view('News/news4');
});

Route::get('about',function(){

    return view('about');
});

Route::get('contact-us',function(){

    return view('contact-us');
});

Route::get('service',function(){

    return view('service');
});









Route::get('pay-details',function(){

    return view('pay-details');
});






Route::get('user-access',function(){

    return view('Admin/user-access');
});





Route::get('user-profile',[Controller::class,'viewProfile'])->name('user-profile')->middleware('AdminAuth');




Route::get('add-citizen-id',[AdminCitizenController::class,'addCitizenId'])->middleware('AdminAuth');





Route::get('view-citizen/{citizen}',[AdminCitizenController::class,'viewCitizen'])->name('view-citizen')->middleware('AdminAuth');


Route::get('edit-citizen/{citizen}',[AdminCitizenController::class,'editCitizen'])->name('edit-citizen')->middleware('AdminAuth');
Route::post('update-citizen/{citizen}',[AdminCitizenController::class,'updateCitizen'])->name('update-citizen')->middleware('AdminAuth');
Route::post('delete-citizen/{citizen}',[AdminCitizenController::class,'deleteCitizen'])->name('delete-citizen')->middleware('AdminAuth');
Route::get('citizen-appointment-view/{service}',[AdminAppoimentsController::class,'viewAppoinment'])->name('appoinments.view')->middleware('AdminAuth');
Route::post('complete/{service}', [AdminAppoimentsController::class,'completeService'])->name('appoinments.complete')->middleware('AdminAuth');
Route::post('reject/{service}', [AdminAppoimentsController::class,'rejectService'])->name('appoinments.reject')->middleware('AdminAuth');
Route::post('reschedule/{service}', [AdminAppoimentsController::class,'rescheduleService'])->name('appoinments.reschedule')->middleware('AdminAuth');
Route::post('cancelation/{service}', [AdminAppoimentsController::class,'cancelService'])->name('appoinments.cancelation')->middleware('AdminAuth');




Route::get('view-citizen-appoinments/{citizen}',[AdminCitizenController::class,'citizenAppoinments'])->name('view-citizen-appoinments')->middleware('AdminAuth');





Route::get('citizen-file-manage/{citizen}',[AdminCitizenController::class,'citizenFiles'])->name('citizen-file-manage')->middleware('AdminAuth');
Route::post('delete-media/{loc}/{filename}/{citizen}',[AdminCitizenController::class,'deleteMedia'])->name('delete-media')->middleware('AdminAuth');
Route::post('upload-citizen-attachment/{citizen}',[AdminCitizenController::class,'uploadMedia'])->name('upload-citizen-attachment')->middleware('AdminAuth');

Route::get('appointment-complete',function(){

    return view('Admin/appointment-complete');
});


Route::get('reports/appointment-reports',[ReportsController::class,'appointmentsReport'])->middleware('AdminAuth');
Route::get('reports/citizen-reports',[ReportsController::class,'citizenReport'])->middleware('AdminAuth');
Route::get('reports/payment-reports',[ReportsController::class,'paymentsReport'])->middleware('AdminAuth');

Route::post('generate-appointments-report',[ReportsController::class,'generateAppointmentReport'])->name('generate-appointments-report')->middleware('AdminAuth');
Route::post('generate-citizen-report',[ReportsController::class,'generateCitizenReport'])->name('generate-citizen-report')->middleware('AdminAuth');
Route::post('generate-payments-report',[ReportsController::class,'generatePaymentsReport'])->name('generate-payments-report')->middleware('AdminAuth');









/*==========================*/

Route::view('Download','download');

Route::get('pdf1', [DownloadController::class, 'downloadPdf1']);
Route::get('pdf2', [DownloadController::class, 'downloadPdf2']);
Route::get('pdf3', [DownloadController::class, 'downloadPdf3']);

Route::view('citizen-login','Auth/citizen-login'); 
Route::post('login_Citizen',[CitizenController::class,'index']);
Route::post('register_Citizen',[CitizenController::class,'store']);
Route::get('logout_citizen',[CitizenController::class,'flush']);


Route::get('appointment', [CitizenController::class,'viewAppoinment'])->middleware('AuthCitizen');
Route::post('appointment_store',[ServicesController::class,'appointmentStore'])->middleware('AuthCitizen');


Route::view('certificates', 'Forms/certificates')->middleware('AuthCitizen');
Route::post('certificates-store', [ServicesController::class,'store'])->middleware('AuthCitizen');
Route::view('payment', 'payment')->middleware('AuthCitizen');
Route::post('payment_store', [ServicesController::class,'payment'])->middleware('AuthCitizen');
Route::get('payment_pending/{id}', [ServicesController::class,'paymentPending'])->middleware('AuthCitizen');



Route::view('nic', 'Forms/nic')->middleware('AuthCitizen');
Route::post('nic-store',[ServicesController::class,'nicStore'])->middleware('AuthCitizen');

Route::view('passport', 'Forms/passport')->middleware('AuthCitizen');
Route::post('passport_store',[ServicesController::class,'passportStore'])->middleware('AuthCitizen');


Route::view('vehicle-revenue', 'Forms/vehicle-revenue')->middleware('AuthCitizen');
Route::post('vh_revenue_store',[ServicesController::class,'revenueStore'])->middleware('AuthCitizen');




Route::get('profile', [CitizenController::class,'intProfile'])->middleware('AuthCitizen');
Route::post('profile-store', [CitizenController::class,'update'])->middleware('AuthCitizen');
Route::post('profile-image-store', [CitizenController::class,'imageStore'])->middleware('AuthCitizen');



Route::get('admin-login', [Controller::class,'dashboard']);

Route::view('admin-dashboard','Admin/dashboard')->middleware('AdminAuth');
Route::post('admin-auth',[Controller::class,'login']);
Route::get('logout_admin',[Controller::class,'flush']);



Route::view('add-user','Admin/add-user')->middleware('AdminAuth');
Route::post('stor_admin',[Controller::class,'storAdmin'])->middleware('AdminAuth');

Route::get('citizen-manager',[AdminCitizenController::class,'citizenIndex'])->middleware('AdminAuth');

Route::get('citizen-appointment',[AdminAppoimentsController::class,'appoinmentsIndex'])->middleware('AdminAuth');

Route::post('create-new-citizen',[AdminCitizenController::class,'createNew'])->name('create-new-citizen')->middleware('AdminAuth');

Route::get('user-manager',[Controller::class,'getUserManager'])->middleware('AdminAuth');
Route::get('view_edit_user/{id}',[Controller::class,'getUserEdit'])->middleware('AdminAuth');
Route::post('update_admin', [Controller::class, 'updateUser'])->middleware('AdminAuth');
Route::get('delete_admin/{id}', [Controller::class, 'deleteUser'])->middleware('AdminAuth');






