<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class,'Index']);

Route::get('/show-vehicles',[HomeController::class,'ShowVehicles']);

Route::get('/show-drivers',[HomeController::class,'ShowDrivers']);

Route::get('/show-info-trips',[HomeController::class,'ShowInfoTrip']);

/* Routes CRUD Vehicle */

Route::get('/create-vehicle',[HomeController::class,'CreateVehicle']);

Route::post('/new-vehicle',[HomeController::class,'NewVehicle']);

Route::get('/edit-vehicle/{idvehicle}',[HomeController::class,'EditVehicle']);

Route::post('/update-vehicle',[HomeController::class,'UpdateVehicle']);

Route::get('/detele-vehicle/{idvehicle}',[HomeController::class,'DeleteVehicle']);

/* Routes CRUD Vehicle */

/* Routes CRUD Drivers */

Route::get('/create-driver',[HomeController::class,'CreateDriver']);

Route::post('/new-driver',[HomeController::class,'NewDriver']);

Route::get('/edit-driver/{iddriver}',[HomeController::class,'EditDriver']);

Route::post('/update-driver',[HomeController::class,'UpdateDriver']);

Route::get('/detele-driver/{iddriver}',[HomeController::class,'DeleteDriver']);

/* Routes CRUD Drivers */

/* Routes CRUD Trips */

Route::get('/create-trip',[HomeController::class,'CreateTrip']);

Route::post('/search-vehicle',[HomeController::class,'SearchVehicle']);

Route::post('/search-driver',[HomeController::class,'SearchDriver']);

Route::post('/new-trip',[HomeController::class,'NewTrip']);

Route::get('/edit-trip/{idtrip}',[HomeController::class,'EditTrip']);

Route::post('/update-trip',[HomeController::class,'UpdateTrip'])->name('update.trip');

/* Routes CRUD Trips */
