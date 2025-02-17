<?php

use App\Http\Controllers\AbstractContentController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthenticateWithError;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('layout');
});
Route::get('/', function () {
    return view('mainlayout');
});

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'InsertUser']);

Route::get('/login', [UserController::class, 'login'])->name('login');
// Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::post('/CheckUser', [UserController::class, 'ValidateLogin']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(['auth.error'])->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/abstractsubmit', [AbstractContentController::class, 'index'])->name('abstractsubmit');
    Route::post('/abstractsubmit', [AbstractContentController::class, 'create'])->name('abstract.submit');
    Route::post('/updateProfile', [UserController::class, 'updateUser'])->name('updateProfile');
    Route::get('/abstractlist', [AbstractContentController::class, 'listAbstract'])->name('abstractlist');
    Route::get('/abstractedit/{id}', [AbstractContentController::class, 'edit'])->name('abstractedit');
    Route::post('/abstractupdate', [AbstractContentController::class, 'update'])->name('abstract.update');
});
// Email verification notice route
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    $user = $request->user();
    $user->Verified = 1; // Set IsVerified to 1
    $user->save();
    return redirect('/profile')->with('success', 'Email verified successfully');
})->middleware(['auth', 'signed'])->name('verification.verify');


// Resend verification email
Route::post('/email/resend', function (Request $request) {
    if ($request->user()->hasVerifiedEmail()) {        
        return redirect('/profile');
    }
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');