<?php

use App\Http\Controllers\AbstractContentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthenticateWithError;
Route::get('/ajaxGetDistrictList/{id}', [UserController::class, 'getDistrictList']);
Route::get('/ajaxGetPaymentTypeOnMemberId/{id}', [UserController::class, 'getPaymentTypeOnMemberId']);

Route::get('/index', function () {
    return view('layout');
});
Route::get('/', function () {
    return view('outerpage.landingpage');
})->name('landingpage');
Route::get('/abstract-guidelines', function () {
    return view('guidelines.abstractGuideline');
})->name('abstract-guidelines');
Route::get('/general-guidelines', function () {
    return view('guidelines.generalInstruction');
})->name('general-guidelines');
Route::get('/call-for-abstract', function () {
    return view('guidelines.callForAbstract');
})->name('call-for-abstract');
Route::get('/message-detail', function () {
    return view('outerpage.messagePresident');
})->name('message-detail');
Route::get('/message-detail-os', function () {
    return view('outerpage.messageOS');
})->name('message-detail-os');
Route::get('/speaker-guidelines', function () {
    return view('guidelines.speakerGuideline');
})->name('speaker-guidelines');
Route::get('/registrationFees', function () {
    return view('outerpage.registrationFees');
})->name('registrationFees');
Route::get('/organizingcomitee', function () {
    return view('outerpage.organizingComitee');
})->name('organizingcomitee');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'InsertUser']);
Route::get('/registerAbstract', [UserController::class, 'registerAbstract'])->name('register.abstract');
Route::post('/registerAbstract', [UserController::class, 'InsertUserforAbstractSubmit']);
Route::get('/login', [UserController::class, 'login'])->name('login');
// Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::post('/CheckUser', [UserController::class, 'ValidateLogin']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(['auth.error'])->group(function () {
    Route::get('/userdashboard', [UserController::class, 'userdashboard'])->name('userdashboard');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/abstractsubmit', [AbstractContentController::class, 'index'])->name('abstractsubmit');
    Route::post('/abstractsubmit', [AbstractContentController::class, 'create'])->name('abstract.submit');
    Route::post('/updateProfile', [UserController::class, 'updateUser'])->name('updateProfile');
    Route::get('/abstractlist', [AbstractContentController::class, 'listAbstract'])->name('abstractlist');
    Route::get('/abstractedit/{id}', [AbstractContentController::class, 'edit'])->name('abstractedit');
    Route::post('/abstractupdate', [AbstractContentController::class, 'update'])->name('abstract.update');
    Route::post('/abstractdelete', [AbstractContentController::class, 'delete'])->name('abstract.delete');
    Route::get('/abstractview/{id}', [AbstractContentController::class, 'view'])->name('abstractview');
    

    Route::get('/emailtest', [AbstractContentController::class, 'emailtest'])->name('emailtest');

    // Route::get('/payment', [UserController::class, 'view'])->name('abstractview');
});
// Email verification notice route
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->name('verification.notice');

Route::get('/verify-email', function () {
    $user = Auth::user();
    if ($user->hasVerifiedEmail()) {
        return redirect()->route('profile');
    }
    $isSent= $user->sendEmailVerificationNotification();
    if($isSent){
        return back()->with('success', 'Verification link sent!');
    }else{
        return back()->with('warning', 'Could not send email verification link,Please try again later ');
    }
    
})->middleware(['auth', 'throttle:6,1'])->name('verify-email');

Route::get('/email/verify/{id}/{hash}', function (Request $request, $id, $hash) {
    $user = User::findOrFail($id); // Find user manually
    // dd($user);
    if (!hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
        abort(403, 'Invalid verification link.');
    }

    if (!$user->hasVerifiedEmail()) {
        $user->markEmailAsVerified(); // Mark as verified
        $user->Verified = 1; // Custom field for verification
        $user->save();
        event(new Verified($user)); // Fire verification event
    }

    return view('email.verification_success', ['success' => 'Email verified successfully']);
})->name('verification.verify');

// Resend verification email
Route::post('/email/resend', function (Request $request) {
    if (Auth::user()->hasVerifiedEmail()) {        
        return redirect('/profile');
    }
    $isSent= Auth::user()->sendEmailVerificationNotification();
    if($isSent){
        return back()->with('success', 'Verification link sent!');
    }else{
        return back()->with('warning', 'Could not send email verification link,Please try again later or login');
    }
    
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');
// Route::get('/normalview', [UserController::class, 'normalview'])->name('profile');


Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.post');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        Route::get('/abstractlist', [AbstractContentController::class, 'allAbstracts'])->name('admin.abstractlist');
        Route::get('/abstractview/{id}', [AbstractContentController::class, 'adminview'])->name('admin.abstractview');
        Route::post('/abstractSendMail', [AbstractContentController::class, 'sendAbstractMailtoVerifier'])->name('admin.abstract.sendmail');
        

        Route::get('/userlist', [AdminController::class, 'allUserList'])->name('admin.userlist');
        Route::post('/update-payment-status', [AdminController::class, 'updatePaymentStatus'])->name('admin.updatepaymentstatus');
        Route::post('/update-abstract-status', [AbstractContentController::class, 'updateAbstractStatus'])->name('admin.updateabstractstatus');
    });
});