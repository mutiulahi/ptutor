<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\TutoringRegistration;
use App\Http\Controllers\SearchTutor;
use App\Http\Controllers\Userall\Dashboard;
use App\Http\Controllers\General;
use App\Http\Controllers\AddReview;
use App\Http\Controllers\CenterMail;
use App\Http\Controllers\SendAndMeg;
use App\Http\Controllers\Index;
use App\Models\Review as ModelsReview;
use App\Models\Tutregister;

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


Route::get('/', [Index::class, 'index'])->name('/');
// Route::post('autocomplete', [Index::class, 'autocomplete'])->name('autocomplete'); 

// authentication route
Route::get('signup', [RegisterController::class, 'index'])->name('signup');
Route::post('signup', [RegisterController::class, 'register']);

Route::get('login', [Login::class, 'index'])->name('login');
Route::post('login', [Login::class, 'login']);

Route::get('logout', [Logout::class, 'logout'])->name('logout');
//end of authentication route


// Tutoring gig creation
Route::get('create_ads', [TutoringRegistration::class, 'index'])->middleware('auth')->name('becometutor');
Route::post('create_ads', [TutoringRegistration::class, 'storeGIG'])->middleware('auth');


// finding tutor section
Route::post('finderTutors', [SearchTutor::class, 'index']);
Route::get('finderTutors', function () {
    return view('tutorSearch');
})->name('finderTutors');

// dashboard section
Route::get('dashboard', [Dashboard::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('recieved', [Dashboard::class, 'recieve'])->name('recieved')->middleware('auth');
Route::get('sendOrder', [Dashboard::class, 'sendOrder'])->name('sendOrder')->middleware('auth');

Route::get('status/{id}', [Dashboard::class, 'acceptOrder'])->name('accept')->middleware('auth');
Route::get('statusR/{id}', [Dashboard::class, 'rejectOrder'])->name('reject')->middleware('auth');

Route::get('dashboard/setting', [Dashboard::class, 'setting'])->name('setting')->middleware('auth');
Route::post('dashboard/update', [Dashboard::class, 'settingUpdate'])->name('updatesetting')->middleware('auth');
Route::get('ads', [Dashboard::class, 'adsView'])->name('ads')->middleware('auth');

Route::get('adsEdit', [Dashboard::class, 'adsEdit'])->middleware('auth');

Route::post('adsUpdate', [Dashboard::class, 'adsUpdate'])->middleware('auth');
Route::get('adsDelet/{id}', [Dashboard::class, 'adsDelet'])->name('delete_ads')->middleware('auth');

//message
Route::get('message', [SendAndMeg::class, 'index'])->name('message')->middleware('auth');
Route::post('sendMeg', [SendAndMeg::class, 'sendMessage'])->middleware('auth');
Route::get('show', [SendAndMeg::class, 'Show'])->middleware('auth');

Route::get('Recievedmessage', [SendAndMeg::class, 'Recievedindex'])->name('Recievedmessage')->middleware('auth');
Route::post('RecievedsendMeg', [SendAndMeg::class, 'RecievedsendMessage'])->middleware('auth');
Route::get('Recievedshow', [SendAndMeg::class, 'RecievedShow'])->middleware('auth');



// Tutor Detail
Route::get('detail/{id}', [General::class, 'index'])->name('detail');

Route::get('payment', [General::class, 'checkout'])->name('payment');
Route::post('placeOrder', [General::class, 'order']);

//review
Route::post('review', [AddReview::class, 'Review']);

//-------------------auto complete search---------------------//
//location search
Route::get('location', [TutoringRegistration::class, 'autocomplete'])->name('autocomplete');
Route::get('subject', [TutoringRegistration::class, 'subject'])->name('subjectcomplete');

//----------email----------//
Route::post('verifymail', [CenterMail::class, 'mailVarification'])->name('verifymail');


Route::get('verify_mail', [CenterMail::class, 'verify_mail'])->name('verify_mail');