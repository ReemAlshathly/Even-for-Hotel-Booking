<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\siteController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HotelController;
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


// Route::get('/aboutUs', function () {
//     return view('Front.aboutUs');
// });

Route::get('/news', function () {
    return view('Front.news');
});

Route::get('/admin', function () {
    return view('back.Admin.index');
});
// Route::get('/booking', function () {
//     return view('Front.Booking');
// });
// Route::get('/', function () {
//     return view('back.Admin.rooms');
// });
Route::get('/', [siteController::class, 'showdetials']);
Route::get('/aboutUs', [siteController::class, 'showaboutus']);
Route::get('/contact', [siteController::class, 'Contact'])->name('contact.show');

Route::get('/rooms', [siteController::class, 'roomsShow']);
Route::get('/services', [siteController::class, 'showServices']);
Route::get('/rooms/{id}', [siteController::class, 'roomBooking'])->name('site.rooms.booking');
Route::resource('/Adminservice', ServicesController::class, ['names' => 'admin.service']);
Route::resource('/Adminrooms', RoomsController::class, ['names' => 'admin.rooms']);

Route::post('/rooms/{id}/booking', [BookingController::class, 'store'])->name('guster.save.booking');
// Route::post('/contact', [ ContactController::class,'store'])->name('user.contact');
// Route::resource('/contactus', ContactController::class, ['names' => 'user.contact']);
Route::get('/Adminbooking',[BookingController::class, 'show']);
Route::resource('/Adminbook', BookingController::class, ['names' => 'Admin.booking']);
Route::resource('/message',ContactController ::class, ['names' => 'user.contactus']);
Route::post('/cont', [ContactController::class, 'store'])->name('user.message');
Route::resource('/hotel',HotelController ::class, ['names' => 'front.hotel']);

    
