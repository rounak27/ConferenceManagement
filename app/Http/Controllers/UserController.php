<?php

namespace App\Http\Controllers;

use App\Mail\CustomVerificationMail;
use App\Models\MailTrack;
use Cookie;
use Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Mail;
class UserController extends Controller
{
    public function register()
    {
        if (Auth::check()) {
            return redirect()->route('profile');
        }
        return view('User.register');
    }
    //
    public function profile()
    {
        $userData=User::getUserData();
        //  dd($userData);
        // dd($user);
        // dd($user->FName);
        return view('User.profile',['userData'=>$userData]);
    }

    public function InsertUser(Request $request)
    {
        // dd($request->all());
        $email=$request->email;
        $userData=User::where('email',$email)->first();
        if($userData){
            return redirect()->route('login')->with('error', 'Email already exists');
        }
        $user = User::create([
            'FName' => $request->FName,
            'MName' => $request->MName??'',
            'LName' => $request->LName,
            'email' => $request->email,
            'MobileNo' => $request->MobileNo,
            'Gender' => $request->gender,
            'Country' => $request->Country,
            'Address' => $request->Address??'',
            'password' => $request->password,
            'MemberType' => $request->MemberType??0,
            'NepasID' => $request->NepasID??'',
            'MedicalCouncilNo' => $request->MedicalCouncilNo??'', 
        ]);
        
        
        Auth::login($user);
        $request->session()->regenerate();
        event(new Registered($user));
        // Mail::to($user->email)->send(new CustomVerificationMail($user));

        // $user->sendEmailVerificationNotification();
        
        // session(['user' => $user]);
        // return redirect(route('profile', absolute: false));
        return redirect(route('verification.notice'))->with('message', 'Please verify your email');
    }
    public function updateUser(Request $request)
{
    // Find the user by ID
    $user = User::findOrFail((int)$request->id); 

    // Update each field explicitly
    $user->FName = $request->FName;
    $user->MName = $request->MName ?? '';  // Default to an empty string if no middle name
    $user->LName = $request->LName;
    $user->email = $request->email;
    $user->MobileNo = $request->MobileNo;
    $user->Gender = $request->gender;
    $user->Country = $request->Country;
    $user->Address = $request->Address ?? '';  // Default to empty string if no address provided
    $user->MemberType = (int) $request->MemberType ?? 0;  // Default to 0 if no MemberType is provided
    $user->NepasID = $request->NepasID ?? '';  // Default to empty string if no NepasID is provided
    $user->MedicalCouncilNo = $request->MedicalCouncilNo ?? '';  // Default to empty string if no MedicalCouncilNo

    // Save the updated user to the database
    if ($user->save()) {
        // Successfully updated, redirect with success message
        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    } else {
        // If saving fails, redirect with an error message
        return redirect()->route('profile')->with('error', 'Profile update failed');
    }
}



    public function login()
    {
        // dd('login');
        if (Auth::check()) {
            return redirect()->route('profile');
        }
        return view('User.login');
    }
    public function ValidateLogin(Request $request)
    {
        // Validate the email and password input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if the user exists by email
        if ($user = User::where('email', $request->email)->first()) {
            // Compare the plain text password directly
            if ($user->password == $request->password) { // Direct comparison of plain text password
                // Store the user in the session
                $remember = $request->has('RememberMe');  // Check if RememberMe checkbox is checked
            
                // Log the user in with the remember flag
                Auth::login($user, $remember);
    
                // Store cookies if "Remember Me" is checked
                if ($remember) {
                    Cookie::queue('email', $request->email, 1440);  // Store email in cookie for 24 hours
                    Cookie::queue('password', $request->password, 1440);  // Store password in cookie for 24 hours
                } else {
                    Cookie::queue('email', $request->email, 0);  // No cookie (expires immediately)
                    Cookie::queue('password', $request->password, 0);  // No cookie (expires immediately)
                }

                // Redirect to the dashboard
                return redirect()->route('profile');
            }
        }

        // Redirect back with error if credentials are invalid
        return redirect()->route('login')->with('error', 'Invalid email or password');
    }


    public function logout(Request $request)
    {
        // Logout the user
        Auth::logout();
    
        // Clear any cookies you may have set during login
        // Cookie::queue(Cookie::forget('email'));
        // Cookie::queue(Cookie::forget('password'));
    
        // Redirect to the login page after logout
        return redirect()->route('login');
    }

    
    // public function normalview()
    // {
    //     return view('User.normalview');
    // }

}
