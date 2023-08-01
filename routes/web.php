<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AppointementController;
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
Route::get('cache_clear', function() {
    Cache::flush();
   Artisan::call('config:cache');
   Artisan::call('optimize:clear');
   die("Done");
});


/*Route::get("/",[FrontController::class,"show_home"])->name("home");*/
Route::get("get_timeslot1",[FrontController::class,"show_get_timeslot"])->name("get_timeslot");
Route::group(['middleware' => ['request_cache']], function () {
    Route::get("/",[FrontController::class,"show_booktimeslot"])->name("book.timeslot");
});
Route::get("payment_info",[FrontController::class,"show_payment_info"])->name("payment.info");
Route::get("booking_confirmation",[FrontController::class,"show_booking_confirmation"])->name("booking-confirmation");

Route::get("get_available_date",[FrontController::class,"get_available_date"])->name("get_available_date");

Route::post("post_booking_detail",[FrontController::class,"post_booking_information"])->name("post.booking.detail");
Route::get('sendemail',[FrontController::class,"sendemail"]);
Route::get("login",[AuthenticationController::class,"show_login"])->name("login");
Route::post("post_login",[AuthenticationController::class,"post_login"])->name("post-login");
Route::group(['middleware' => ['admin','request_cache']], function () {

	Route::get("dashboard",[AuthenticationController::class,"show_dashboard"])->name("dashboard");
	Route::get("logout",[AuthenticationController::class,"logout"])->name("logout");

	Route::get("edit_profile",[AuthenticationController::class,"show_edit_profile"])->name("edit-profile");
	Route::post("update_profile",[AuthenticationController::class,"update_profile"])->name("update-profile");

	Route::get("generateslot",[AuthenticationController::class,"generateslot"])->name("generateslot");
	Route::get("findpossibletime",[AuthenticationController::class,"findpossibletime"])->name("findpossibletime");
	Route::post("savescheduledata",[AuthenticationController::class,"savescheduledata"])->name("save-schedule-data");

	Route::get("timeslot",[AuthenticationController::class,"show_timeslot"])->name("timeslot");
	Route::get("timeslot_data_table",[AuthenticationController::class,"timeslot_data_table"])->name("timeslot-data-table");
	Route::get("save_slot",[AuthenticationController::class,"save_slot"])->name("save-slot");
	Route::post("post_timeslot",[AuthenticationController::class,"post_timeslot"])->name("post-timeslot");

	Route::get("appointment",[AppointementController::class,"show_appointment"])->name("appointment");
	Route::get("appointment_data_table",[AppointementController::class,"show_appointment_datatable"])->name("appointment-data-table");
	Route::get("cancel_appointement",[AppointementController::class,"update_cancel_appointement"])->name("cancel-appointement");
});