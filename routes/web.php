<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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




Auth::routes();

Route::get(
    'register',function(){
        return redirect('/login');
    }
)->name('register');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard',function(){
        return view('admin.dashboard');
    });
});

Route::resource('companies','\App\Http\Controllers\CompanyController');

// Route::get('/companies',[CompanyController::class,'index']);