<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
//
Route::get('/' , [HomeController::class , "index"]);

Route::get('/packages' , [AdminController::class , "packages"]);

Route::get('/deletepackage/{id}' , [AdminController::class , "deletepackage"]);
Route::get('/updatepackage/{id}' , [AdminController::class , "updatepackage"]);

Route::get('/updateemployee/{id}' , [AdminController::class , "updateemployee"]);
Route::post('/updatetouremployee/{id}' , [AdminController::class , "updatetouremployee"]);

Route::get('/deleteemployee/{id}' , [AdminController::class , "deleteemployee"]);
Route::post('/update/{id}' , [AdminController::class , "update"]);

Route::post('/uploadpackage' , [AdminController::class , "upload"]);

Route::get('/employee' , [AdminController::class , "employee"]);

Route::post('/uploademployee' , [AdminController::class , "uploademployee"]);

Route::get('/users' , [AdminController::class , "user"]);

Route::get('/deleteuser/{id}' , [AdminController::class , "deleteuser"]);


Route::post('/booktrip/{id}' , [HomeController::class , "booktrip"]);
Route::get('/mytrips/{id}' , [HomeController::class , "mytrips"]);


Route::get('/removetrip/{id}' , [HomeController::class , "removetrip"]);

Route::get('/redirects' , [HomeController::class , "redirects"]);

Route::get('/categories' , [HomeController::class , "categories"]);



Route::get('/deletetrip/{id}' , [AdminController::class , "deletetrip"]);



Route::get('/categories/polonnaruwa' , [HomeController::class , "polonnaruwa"]);
Route::get('/categories/santorini' , [HomeController::class , "santorini"]);
Route::get('/categories/rishikesh' , [HomeController::class , "rishikesh"]);
Route::get('/categories/goa' , [HomeController::class , "goa"]);
Route::get('/categories/kasol' , [HomeController::class , "kasol"]);
Route::get('/categories/varkala' , [HomeController::class , "varkala"]);
Route::get('/categories/bali' , [HomeController::class , "bali"]);
Route::get('/categories/bangkok' , [HomeController::class , "bangkok"]);
Route::get('/categories/maldives' , [HomeController::class , "maldives"]);
Route::get('/categories/mauritius' , [HomeController::class , "mauritius"]);
Route::get('/categories/paris' , [HomeController::class , "venice"]);
Route::get('/categories/ladakh' , [HomeController::class , "ladakh"]);
Route::get('/categories/dubai' , [HomeController::class , "dubai"]);
Route::get('/categories/vegas' , [HomeController::class , "vegas"]);
Route::get('/categories/iceland' , [HomeController::class , "iceland"]);
Route::get('/categories/brazil' , [HomeController::class , "brazil"]);
Route::get('/categories/venice' , [HomeController::class , "venice"]);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
