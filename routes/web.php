<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\TutoringRegistration;
use App\Http\Controllers\SearchTutor;
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
    return view('index');

});
// authentication route
Route::get('RegisterUser', [RegisterController::class, 'index'])->name('RegisterUser');
Route::post('RegisterUser', [RegisterController::class, 'register']);

Route::get('Login', [Login::class, 'index'])->name('login');
Route::post('Login', [Login::class, 'login']);

Route::get('Logout', [Logout::class, 'logout'])->name('logout');
//end of authentication route


// Tutoring gig creation
Route::get('become_tutor', [TutoringRegistration::class, 'index'])->name('becometutor');
Route::post('become_tutor', [TutoringRegistration::class, 'storeGIG']);


// finding tutor section
Route::post('finderTutors', [SearchTutor::class, 'index']);
Route::get('finderTutors', function () {
    return view('tutorSearch');
});

// dashboard section
Route::get('dashboard', function () {
    return view('dashboard.index');
});
