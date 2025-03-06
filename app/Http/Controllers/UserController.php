<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\CustomVerificationMail;
use App\Models\MailTrack;
use App\Models\MemberType;
use App\Models\Payment;
use App\Models\Hospital;
use App\Models\Document;
use Cookie;
use Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Mail;
use Validator;
use Log;
use Illuminate\Support\Facades\DB;
class UserController extends Controller

{
    public function register()
    {
        if (Auth::check()) {
            return redirect()->route('profile');
        }
        $memberTypes=MemberType::where('IsActive',1)->get();
        $provincesList = DB::table('provinces')->get(); 
        $hospitalList = Hospital::all();
        // dd($hospitalList);
        return view('User.register',['memberTypes'=>$memberTypes,'provinces'=>$provincesList,'hospitalList'=>$hospitalList]);
    }
    //
    public function userdashboard()
    {
        // dd("userdashboard");
        $userData=User::getUserData();
        $price=Payment::getPriceForUser($userData->id);
        // dd($price);
        // dd($userData);
        return view('User.userDashBoard',compact('userData','price'));
    }
    public function profile()
    {
        $userData=User::getUserData();

        //  dd($userData);
        // dd($user);
        // dd($user->FName);
        $memberTypes=MemberType::where('IsActive',1)->get();
        return view('User.profile',['userData'=>$userData,'memberTypes'=>$memberTypes]);
    }

    public function InsertUser(Request $request)
    {
        // $validator=Validator::make($request->all(),[
        //     //'g-recaptcha-response' => 'required|captcha', // Correct rule
        // ]);
        $validator = Validator::make($request->all(), [
            'email' => 'required|email', // Email must be a valid email format
            'FName' => 'required|string|max:255', // First name is required, a string, with a maximum length of 255
            'LName' => 'required|string|max:255', // Last name is required, a string, with a maximum length of 255
            'MobileNo' => 'required|digits:10', // Mobile number should be 10 digits
            'designation' => 'required|string|max:255', // Designation is required, a string, with a maximum length of 255
            'mealPreference' => 'required|string|in:VEGETARIAN,NON_VEGETARIAN', // Meal preference must be one of the options
            'paymentProof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // Payment proof is required and must be a file (jpg, jpeg, png, or pdf), with a max size of 2MB
            // 'proofLetter' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // Proof letter is required and must be a file (jpg, jpeg, png, or pdf), with a max size of 2MB
            'MemberType' => 'required|integer', // Member type is required and should be an integer
            'g-recaptcha-response' => 'required|captcha', // CAPTCHA validation (adjust as needed)
        ]);
        // dd($request->all());exit;
        // if($validator->fails()){
        //     return redirect()->route('register')->with('error', 'Please verify that you are human by completing the recaptcha');
        // }
        $email=$request->email;
        $userData=User::where('email',$email)->first();
        if($userData){
            return redirect()->route('login')->with('error', 'Email already exists');
        }
        // $user = User::create([
        //     'FName' => $request->FName,
        //     'MName' => $request->MName??'',
        //     'LName' => $request->LName,
        //     'email' => $request->email,
        //     'MobileNo' => $request->MobileNo,
        //     'Gender' => $request->gender,
        //     'Country' => $request->Country,
        //     'Address' => $request->Address??'',
        //     'password' => $request->password,
        //     'MemberType' =>$request->MemberType ? (int) $request->MemberType: 0,
        //     'NepasID' => $request->NepasID??'',
        //     'MedicalCouncilNo' => $request->MedicalCouncilNo??'', 
        // ]);
        $user=new User();
        $user->Designation=$request->designation??'';
        $user->FName=$request->FName;
        $user->MName=$request->MName??'';
        $user->LName=$request->LName;
        $user->email=$request->email;
        $user->MobileNo=$request->MobileNo;
        $user->Gender=$request->gender;
        $user->Country=$request->Country;
        $user->province = $request->province ;
        $user->district = $request->district ;  
        $user->Address=$request->Address??'';
        $user->password=$request->password?$request->password:$request->MobileNo;
        $user->MemberType=$request->MemberType ? (int) $request->MemberType: 0;
        $user->NepasID=$request->NepasID??'';
        $user->MedicalCouncilNo=$request->MedicalCouncilNo??'';
        $user->WorkPlace=$request->workplace??'';
        $user->OtherWorkPlace=$request->otherWorkplace??'';
        $user->MealPreference=$request->mealPreference??'';

        // dd($user);
        try{
            $user->save();
             // Check if files are uploaded
            if ($request->hasFile('paymentProof') ) {
                // Get file contents
                $paymentProofContent =  base64_encode(file_get_contents($request->file('paymentProof')->getRealPath()));
                if($request->hasFile('proofLetter')){
                    $proofLetterContent = base64_encode(file_get_contents($request->file('proofLetter')->getRealPath()));
                }else{
                    $proofLetterContent = '';
                }

                // Create a Document record to store BLOBs
                $document = new Document();
                $document->user_id = $user->id;  // Assuming you want to associate it with the user
                $document->payment_document = $paymentProofContent;
                $document->medical_letter_document = $proofLetterContent;
                // dd($document);
                $document->save();
                //  dd();
                 
            }
            // Auth::login($user);
            // $request->session()->regenerate();
            // $returnData= event(new Registered($user));
            // $isSent= $user->sendEmailVerificationNotification();
            return redirect()->route('register')->with('success', 'User Registered successfully ');
            // dd($isSent);

            // if($isSent){
            //     return redirect(route('verification.notice'))->with('success', 'Email verification link sent');
            // }else{
            //     return redirect(route('verification.notice'))->with('warning', 'Could not send email verification link,Please try again later or login');
            // }
        }catch(\Exception $e){
            Log::error('Exception Error: ' . $e->getMessage());
            return redirect(route('register'))->with('error', 'Could not Register,Please try again ');
        }
    }

    public function updateUser(Request $request)
    {
    // dd("HI  update");   
    // Find the user by ID
    $user = User::findOrFail((int)$request->id); 
    // dd($user);
    // Update each field explicitly
    $user->FName = $request->FName;
    $user->MName = $request->MName ?? '';  // Default to an empty string if no middle name
    $user->LName = $request->LName;
    $user->email = $request->email;
    $user->Designation = $request->designation ?? '';  // Default to an empty string if no designation
    $user->MobileNo = $request->MobileNo;
    $user->Gender = $request->gender;
    $user->Country = $request->Country;
    $user->province = $request->province ;
    $user->district = $request->district ;  
    $user->Address = $request->Address ?? '';  // Default to empty string if no address provided
    $user->MemberType = (int) $request->MemberType ?? 0;  // Default to 0 if no MemberType is provided
    $user->NepasID = $request->NepasID ?? '';  // Default to empty string if no NepasID is provided
    $user->MedicalCouncilNo = $request->MedicalCouncilNo ?? '';  // Default to empty string if no MedicalCouncilNo
    $user->WorkPlace = $request->workplace ?? '';  // Default to empty string if no workplace is provided
    $user->OtherWorkPlace = $request->otherWorkplace ?? '';  // Default to empty string if no other workplace is provided
    $user->MealPreference = $request->mealPreference ?? '';  // Default to empty string if no meal preference is provided
    // dd($user);
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

    public function getDistrictList($id){
        $districtList = DB::table('districts')
        ->where('province_id', $id)
        ->get(['id', 'district_name']);  // Adjust to return the correct fields (e.g., 'id', 'name')

            return response()->json($districtList); 
    }

    public function getPaymentTypeOnMemberId($id){
        $payment = Payment::GetPaymentsByMemberType($id);
        return response()->json($payment);
    }
    public function contactUs(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email to the admin
        Mail::to('')->send(new ContactMail());
    }    
    public function registerAbstract()
    {
        if (Auth::check()) {
            return redirect()->route('profile');
        }
        // $memberTypes=MemberType::where('IsActive',1)->get();
        // $provincesList = DB::table('provinces')->get(); 
        // $hospitalList = Hospital::all();
        // dd($hospitalList);
        return view('User.registerforabstract',[]);
    }
}