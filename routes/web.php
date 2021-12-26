<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OwnerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('publicSite.index');
})->name('index');

Route::get('/owner', function () {
    return view('publicSite.owner');
})->name('owner');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/admin', [OwnerController::class, 'login'])->name('ghosoun');

Route::get('/adminLogin', function () {
    return view('admin_auth/adminLogin');
})->name('adminLogin');

//reem
Route::get('/',[CategoryController::class,'index'])->name('landing');

// Route::get('/home',[CategoryController::class,'index'])->name('landing');

Route::get('/companies',[OwnerController::class,'index'])->name('allCategories');

Route::get('/companies/{id}',[OwnerController::class,'show'])->name('company');

Route::post('/companies/{company_id}',[ReviewController::class,'store'])->name('companyReview');

Route::get('singleCategory/{id}',[CategoryController::class,'show'])->name('category');

Route::get('/search',[OwnerController::class,'search'])->name('search');

Route::get('/services', function () {
    return view('publicSite.services');
})->name('services');

Route::get('/about', function () {
    return view('publicSite.about');
})->name('about');
//ahmed
Route::get('/',[ OwnerController::class,'getcompanies'])->name('landingComp');

Route::get('/owner',[ OwnerController::class,'showcompany'])->name('showcompany');

Route::resource('user', UserController::class);

Route::get("user/edit/{id}",[UserController::class,'edit'])->name('useredit');

Route::post("user/update/{id}",[UserController::class,'update'])->name('userupdate');