<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('Admin.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            if ($user->password === $request->password) { // Plain text password check
                if ($user->RoleId == 1 || $user->RoleId == 2) { // Admin or System Admin
                    // Store admin session
                    Session::put('admin_id', $user->id);
                    Session::put('admin_name', $user->FName . ' ' . $user->LName);
                    Session::put('admin_email', $user->email);
                    Session::put('admin_role', $user->RoleId);
                    return redirect()->route('admin.userlist');
                } else {
                    return redirect()->route('admin.login')->with('error', 'Invalid email or password');
                }
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    public function logout()
    {
//         admin_id
// admin_name
// admin_email
// admin_role
        Session::forget('admin_id');
        Session::forget('admin_name');
        Session::forget('admin_email');
        return redirect()->route('admin.login');
    }
    public function allUserList()
    {
        $admindata=Admin::getAdminData();
        // dd($admindata);
        $users=User::getUserDataWithDocumentFromUserId();
        // dd($users); 
        return view('Admin.userList',compact('users','admindata'));
    }
    public function updatePaymentStatus(Request $request)
    {
        // dd($request->all());
        // Validate incoming request
        $request->validate([
            'user_id' => 'required|exists:tbl_users,id', // Ensure the user exists
            'payment_status' => 'required|boolean' // Ensure the status is boolean (0 or 1)
        ]);
        // dd($request->id);
        // Find the user by ID and update the payment status
        $user = User::find((int)$request->user_id);
        // dd($user);
        
        if ($user) {
            $user->PaymentStatus = $request->payment_status;  // Update the Payment status
            $user->save();  // Save the changes

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }
}
