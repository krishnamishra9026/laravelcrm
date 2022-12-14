<?php

use App\Http\Controllers\Admin\Auth\MyAccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\Auth\ChangePasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\FaqQuestionController;
use App\Http\Controllers\Admin\PersonalUserController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\ContactusEnquiryController;
use App\Http\Controllers\Admin\StoreDistributorController;
use App\Http\Controllers\Admin\PlayerController;
use App\Http\Controllers\Admin\AdminReplyController;
use App\Http\Controllers\Admin\ImageGalleryController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ShippingLogisticController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {


/*
|--------------------------------------------------------------------------
| Authentication Routes | LOGIN | REGISTER
|--------------------------------------------------------------------------
*/

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register.submit');

/*
|--------------------------------------------------------------------------
| Dashboard Route
|--------------------------------------------------------------------------
*/

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Personal Users Route
|--------------------------------------------------------------------------
*/
Route::resource('personal-users', PersonalUserController::class);

Route::get('verified-users', [PersonalUserController::class, 'verified'])->name('verified-users');

Route::get('unverified-users', [PersonalUserController::class, 'unverified'])->name('unverified-users');

Route::post('verify-user', [PersonalUserController::class, 'verifyUser'])->name('verify-user');

Route::resource('enquiries', EnquiryController::class);

Route::get('download-file/{id}', [EnquiryController::class, 'downloadFile'])->name('download.file');

Route::delete('delete-file/{id}', [EnquiryController::class, 'deleteFile'])->name('delete.file');


Route::resource('store-distributors', StoreDistributorController::class);
Route::resource('players', PlayerController::class);
Route::resource('contactus-enquiries', ContactusEnquiryController::class);
Route::resource('send-reply', AdminReplyController::class);
Route::resource('replies', AdminReplyController::class);


 // Faq Categories
    Route::delete('faq-categories/destroy', [FaqCategoryController::class,'massDestroy'])->name('faq-categories.massDestroy');
    Route::resource('faq-categories', FaqCategoryController::class);

    //Faq::class Questions
    Route::delete('faq-questions/destroy', [FaqQuestionController::class, 'massDestroy'])->name('faq-questions.massDestroy');
    Route::resource('faq-questions', FaqQuestionController::class);

/*
|--------------------------------------------------------------------------
| Settings > My Account Route
|--------------------------------------------------------------------------
*/
Route::resource('my-account', MyAccountController::class);

Route::resource('image-gallery', ImageGalleryController::class);

Route::resource('testimonial',TestimonialController::class);

Route::resource('services',ServiceController::class);

Route::resource('shipping-logistics',ShippingLogisticController::class);

/*
|--------------------------------------------------------------------------
| Settings > Change Password Route
|--------------------------------------------------------------------------
*/
Route::get('change-password', [ChangePasswordController::class,'changePasswordForm'])->name('password.form');

Route::post('change-password', [ChangePasswordController::class,'changePassword'])->name('change-password');

});
