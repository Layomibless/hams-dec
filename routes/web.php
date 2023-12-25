<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HostelController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/admin-login', function () {
    return view('admin-login');
});

Route::post('/create_student_profile', [StudentController::class, 'createStudentProfile']);
Route::post('/admin-login', [AdminController::class, 'adminLogin']);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => []], function () {
    Route::get('/overview', function () {
        return view('admin.index');
    });
    Route::get('/managelevels', [LevelController::class, 'index']);
    Route::get('/managehostels', function () {
        return view('admin.managehostels');
    });
    Route::get('/manageallocation', function () {
        return view('admin.manageallocation');
    });

    Route::get('/profile', function () {
        return view('student.profile');
    });
    Route::get('/userdashboard', function () {
        return view('student.userdashboard');
    });
    

    Route::post('/create_level', [LevelController::class, 'createLevel']);
    Route::post('/create_hostel', [HostelController::class, 'createHostel']);
});

Route::group(['prefix' => 'student', 'as' => 'student.', 'middleware' => []], function () {
    Route::get('/profile', function () {
        return view('student.profile');
    });
    Route::get('/userdashboard', function () {
        return view('student.userdashboard');
    });
    Route::get('/invoice', function () {
        return view('student.invoice');
    });
});