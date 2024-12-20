<?php

use App\Http\Controllers\dashboard\auth\AuthController;
use App\Http\Controllers\dashboard\auth\ForgetPasswordController;
use App\Http\Controllers\dashboard\auth\ResetPasswordController;
use App\Http\Controllers\dashboard\WelcomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group([
    'prefix' => LaravelLocalization::setLocale() . '/dashboard',
    'as' => 'dashboard.',
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    ##################### Auth Login Controller  ########################
    Route::controller(AuthController::class)->group(function () {
        Route::get('login', 'show_login')->name('login.show');
        Route::post('register_login', 'register_login');
        Route::post('logout', 'logout')->name('logout');
    });
    ############################### End Auth Login Controller ###############

    ############################### Start Admin Auth Route  ###############


    Route::group(['middleware' => 'auth:admin'], function () {

        ############################### Start Welcome  Controller ###############

        Route::controller(WelcomeController::class)->group(function () {

            Route::get('welcome', 'index')->name('welcome');
        });

        ############################### End  Welcome  Controller ###############

    });
    ################### Reset Password #############
    Route::controller(ForgetPasswordController::class)->group(function () {
        Route::get('password/email','showemailform')->name('password.email');
        Route::post('password/email','sendotp')->name('password.email.post');
        Route::get('password/verify/{email}','showotpform')->name('password.otp.show');
        Route::get('password/verify','otpverify')->name('password.otp.post');
    });
    Route::controller(ResetPasswordController::class)->group(function () {
        Route::get('password/reset/{email}','ShowResetForm')->name('password.reset');
        Route::post('password/reset','resetpassword')->name('password.reset.post');

    });

});

Route::get('login', function () {
    return 'login page';
})->name('login');
