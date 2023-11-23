<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\CeoCornerController;

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
Auth::routes();
Route::get('/', function () {
    $pageTitle = 'Home';
    return view('home', compact('pageTitle'));
})->name('home');

Route::get('/demo', function () {
    $pageTitle = 'Demo';
    return view('demo', compact('pageTitle'));
})->name('demo');

Route::get('/Standard-Tracking-Solutions', function () {
    $pageTitle = 'Standard Tracking Solutions';
    return view('Standard-Tracking-Solutions', compact('pageTitle'));
})->name('Standard-Tracking-Solutions');

Route::get('/oil-tracking-solution', function () {
    $pageTitle = 'Oil Tracking Solution';
    return view('oil-tracking-solution', compact('pageTitle'));
})->name('oil-tracking-solution');

Route::get('/fuel-management-solutions', function () {
    $pageTitle = 'Fuel management Solutions';
    return view('fuel-management-solutions', compact('pageTitle'));
})->name('fuel-management-solutions');

Route::get('/fleet-management-solutions', function () {
    $pageTitle = 'Fleet Management Solutions';
    return view('fleet-management-solutions', compact('pageTitle'));
})->name('fleet-management-solutions');

Route::get('/driver-management-solutions', function () {
    $pageTitle = 'Driver management Solutions';
    return view('driver-management-solutions', compact('pageTitle'));
})->name('driver-management-solutions');

Route::get('/advance-tracking-solutions', function () {
    $pageTitle = 'Advance Tracking Solutions';
    return view('advance-tracking-solutions', compact('pageTitle'));
})->name('advance-tracking-solutions');

Route::get('/advanced-driver-assistance', function () {
    $pageTitle = 'Advanced Driver Assistance';
    return view('advanced-driver-assistance', compact('pageTitle'));
})->name('advanced-driver-assistance');

Route::get('/car-rental-solution', function () {
    $pageTitle = 'Car Rental Solution';
    return view('car-rental-solution', compact('pageTitle'));
})->name('car-rental-solution');

Route::get('/weight-monitoring-solutions', function () {
    $pageTitle = 'Weight Monitoring Solutions';
    return view('weight-monitoring-solutions', compact('pageTitle'));
})->name('weight-monitoring-solutions');
Route::get('/waste-management-solution', function () {
    $pageTitle = 'Waste management solution';
    return view('waste-management-solution', compact('pageTitle'));
})->name('waste-management-solution');
Route::get('/taxi-management-solution', function () {
    $pageTitle = 'Taxi Management Solution';
    return view('taxi-management-solution', compact('pageTitle'));
})->name('taxi-management-solution');

Route::get('/bus-route-management-solution', function () {
    $pageTitle = 'Bus Route Management Solution';
    return view('bus-route-management-solution', compact('pageTitle'));
})->name('bus-route-management-solution');
Route::get('/container-tracking', function () {
    $pageTitle = 'Container Tracking';
    return view('container-tracking', compact('pageTitle'));
})->name('container-tracking');

Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);

Route::get('/about', function () {
    $pageTitle = 'About Us';
    return view('about', compact('pageTitle'));
})->name('about');
Route::get('/product', function () {
    $pageTitle = 'Product';
    return view('product', compact('pageTitle'));
})->name('Product');

Route::get('/tracking_pakistan', function () {
    $pageTitle = 'Tracking Pakistan';
    return view('tracking_pakistan', compact('pageTitle'));
})->name('tracking_pakistan');

Route::get('/standard_tracking', function () {
    $pageTitle = 'Standard Tracking';
    return view('standard_tracking', compact('pageTitle'));
})->name('standard_tracking');

Route::get('/advanced_tracking', function () {
    $pageTitle = 'Advanced Tracking';
    return view('advanced_tracking', compact('pageTitle'));
})->name('advanced_tracking');

Route::get('/fleet_management', function () {
    $pageTitle = 'Fleet Management';
    return view('fleet_management', compact('pageTitle'));
})->name('fleet_management');

Route::get('/driver_management', function () {
    $pageTitle = 'Driver Management';
    return view('driver_management', compact('pageTitle'));
})->name('driver_management');

Route::get('/weight_monitoring', function () {
    $pageTitle = 'Weight Management';
    return view('weight_monitoring', compact('pageTitle'));
})->name('weight_monitoring');

Route::get('/temperature_humidity_management', function () {
    $pageTitle = 'Temp Humidity Management';
    return view('temperature_humidity_management', compact('pageTitle'));
})->name('temperature_humidity_management');

Route::get('/waste_management', function () {
    $pageTitle = 'Waste Management';
    return view('waste_management', compact('pageTitle'));
})->name('waste_management');

Route::get('/taxi_management', function () {
    $pageTitle = 'Taxi Management';
    return view('taxi_management', compact('pageTitle'));
})->name('taxi_management');

Route::get('/container_tracking', function () {
    $pageTitle = 'Container Tracking';
    return view('container_tracking', compact('pageTitle'));
})->name('container_tracking');

Route::get('/oil_tracking', function () {
    $pageTitle = 'Oil Tracking';
    return view('oil_tracking', compact('pageTitle'));
})->name('oil_tracking');

Route::get('/school_tracking', function () {
    $pageTitle = 'School Tracking';
    return view('school_tracking', compact('pageTitle'));
})->name('school_tracking');

Route::get('/smart_metering', function () {
    $pageTitle = 'Smart Metering';
    return view('smart_metering', compact('pageTitle'));
})->name('smart_metering');

Route::get('/cold_chain_management', function () {
    $pageTitle = 'Cold chain Management';
    return view('cold_chain_management', compact('pageTitle'));
})->name('cold_chain_management');

Route::get('/fuel_management', function () {
    $pageTitle = 'Fuel Management';
    return view('fuel_management', compact('pageTitle'));
})->name('fuel_management');

Route::get('/shipment_tracking', function () {
    $pageTitle = 'Shipment Tracking';
    return view('shipment_tracking', compact('pageTitle'));
})->name('shipment_tracking');

Route::get('/dash_camera_solution', function () {
    $pageTitle = 'Dash Camera Solution';
    return view('dashcam', compact('pageTitle'));
})->name('dashcam_solution');

Route::get('/transport_solution', function () {
    $pageTitle = 'Transport Solution';
    return view('transport', compact('pageTitle'));
})->name('transport_solution');


Route::get('/our_team', function () {
    $pageTitle = 'Our Team';
    return view('team', compact('pageTitle'));
})->name('our_team');

Route::get('/privacy-policy', function () {
    $pageTitle = 'Privacy Policy';
    return view('privacy-policy', compact('pageTitle'));
})->name('privacy-policy');


Route::get('/contact_us', function () {
    $pageTitle = 'Contact Us';
    return view('contact_us', compact('pageTitle'));
})->name('contact_us');

Route::post('contact-us', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.us.store');

Route::get('/thankyou', function () {
    $pageTitle = 'Thankyou';
    return view('thankyou', compact('pageTitle'));
})->name('thankyou');
Route::get('/ceo_corner', function () {
    $pageTitle = 'CEO Corner';
    return view('ceo_corner', compact('pageTitle'));
})->name('ceo_corner');

// Animal Tracking route
Route::get('/animal_tracking', function () {
    $pageTitle = 'Animal Tracking';
    return view('animal_tracking', compact('pageTitle'));
})->name('animal_tracking');

// Camel Tracking route
Route::get('/camel_tracking', function () {
    $pageTitle = 'Camel Tracking';
    return view('camel_tracking', compact('pageTitle'));
})->name('camel_tracking');

// Prisoner Tracking route
Route::get('/prisoner_tracking', function () {
    $pageTitle = 'Prisoner Tracking';
    return view('prisoner_tracking', compact('pageTitle'));
})->name('prisoner_tracking');

// Trackers route
Route::get('/trackers', function () {
    $pageTitle = 'Trackers';
    return view('trackers', compact('pageTitle'));
})->name('trackers');

Route::get('/home', [App\Http\Controllers\ContactController::class, 'index_be'])->name('index_be')->middleware('auth');

Route::any('{query}', function() { return redirect('/'); })->where('query', '.*');