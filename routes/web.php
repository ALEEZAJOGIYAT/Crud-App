<?php

use App\Http\Controllers\JqueryController;
use App\Http\Controllers\Student\StudentController;
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
    return view('inputs');
});
Route::view('registration', 'livewire.registration');
Route::get('reg', [StudentController::class, 'index']);
Route::get('tasks', [JqueryController::class, 'index']);
