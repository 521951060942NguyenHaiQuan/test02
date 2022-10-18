<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home',action:[StudentController::class,'home'])->name('home');
Route::get('get_all_student',[StudentController::class,'get_all_student'])->name('get_all_student');
Route::get('create_student',[StudentController::class,'create_student'])->name('create_student');
Route::post('store_student',action:[StudentController::class,'store_student'])->name('store_student');
Route::delete('destroy/{student}',action:[StudentController::class,'destroy'])->name('destroy');
Route::get('edit/{stdudent}',action:[StudentController::class,'edit'])->name('edit');
Route::put('edit/{stdudent}',action:[StudentController::class,'update'])->name('update');

