<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Planner\PlannerController;
use App\Http\Controllers\Share\ShareFileController;
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



    Route::get('/', [LoginController::class, 'loginView'])->name('login');
// login group routes
Route::prefix('/dashboard')->group(function () {
    Route::get('/home', [LoginController::class, 'index'])->name('home');
    Route::get('/register', [LoginController::class, 'registerView'])->name('register');
    Route::post('/new/person', [LoginController::class, 'register'])->name('new');
    Route::post('/login/user', [LoginController::class, 'login'])->name('signin');
    Route::get('/logout/user', [LoginController::class, 'logout'])->name('logout');
});


  Route::get('/register/planner', [PlannerController::class, 'index'])->name('register-planner');
  Route::get('/share/file', [ShareFileController::class, 'index'])->name('upload-file');
