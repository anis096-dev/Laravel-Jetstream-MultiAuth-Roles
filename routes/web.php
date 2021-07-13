<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth', 'verified']], function() {
    
    Route::get('register-step2', [App\Http\Controllers\RegisterStepTwoController::class, 'create'])->name('register-step2.create');
    Route::post('register-step2', [App\Http\Controllers\RegisterStepTwoController::class, 'store'])->name('register-step2.store');

    Route::group(['middleware' => ['registration_completed']], function() {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::group(['middleware' => 'role:ehealthcare', 'prefix' => 'ehealthcare', 'as' => 'ehealthcare.'], function() {
            Route::resource('lessons', \App\Http\Controllers\Patient\LessonController::class);
        });
       Route::group(['middleware' => 'role:patient', 'prefix' => 'patient', 'as' => 'patient.'], function() {
           Route::resource('courses', \App\Http\Controllers\EHealthCare\CourseController::class);
       });
        Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
            Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        });
    
        Route::group(['middleware' => 'auth'], function () {
            Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        });    
    });
});
