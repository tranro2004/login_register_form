<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Auth\RegisterController;
// use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\SocialController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login',function(){
//     return view('auth.login');
// });
// Route::get('/register',function(){
//     return view('auth.register');
// });
// Route::get('/forgot_password',function(){
//     return view('auth.forgot_password');
// });
Route::get('/my-account', function(){
    return view('my_account.account_information');
}); 
Route::prefix('account')->group(function () {
    Route::get('/', fn() => view('account.info'))->name('account.info');
    Route::get('/orders', fn() => view('account.orders'))->name('account.orders');
    Route::get('/password', fn() => view('account.password'))->name('account.password');
    Route::get('/address', fn() => view('account.address'))->name('account.address');
    
});



Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->middleware('throttle:5,1');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
Route::get('auth/{provider}', [SocialController::class, 'redirectToProvider'])->name('social.login');
Route::get('auth/{provider}/callback', [SocialController::class, 'handleProviderCallback']);

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/login-history', function () {
    $histories = app(\App\Services\Auth\AuthService::class)->getLoginHistory(Auth::user()->id);
    Log::info('Histories type: ' . gettype($histories) . ', Content: ' . json_encode($histories));
    return view('login-history', compact('histories'));
    })->name('login-history');
});

Route::get('/test-email', function () {
    \Illuminate\Support\Facades\Mail::raw('Test email from Laravel', function ($message) {
        $message->to('inrotran@gmail.com')->subject('Test Email');
    });
    return 'Email sent';
});