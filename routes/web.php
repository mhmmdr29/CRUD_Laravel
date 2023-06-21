<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Student\HomeController;

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

Route::get('/dashboard', function () {

    return view('dashboard');

})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::controller(App\Http\Controllers\Student\HomeController::class)->group(function(){
    Route::get('/add-student','create');
    Route::post('/add-student','store');
    Route::get('/students','show'); 
    Route::get('/edit-student/{student_id}','edit');
    Route::put('/update-student/{student_id}','update');
    Route::delete('/delete-student/{student_id}','destroy');
});


//Student Route

Route::get('/student/login', [AuthenticatedSessionController::class, 'create'])->name('student.login')->middleware('guest:student');

Route::post('/student/login/store', [AuthenticatedSessionController::class, 'store'])->name('student.login.store');

Route::group(['middleware' => 'student'], function() {

    Route::get('/student', [HomeController::class, 'index'])->name('student.dashboard');

    Route::post('/student/logout', [AuthenticatedSessionController::class, 'destroy'])->name('student.logout'); 

});

