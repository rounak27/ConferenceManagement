<?php

namespace App\Http\Controllers;

use App\Mail\AbstractContentMailer;
use App\Models\AbstractContent;
use App\Models\Admin;
use Crypt;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Log;
use Mail;
class AbstractContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listAbstract()
    {
        $userData=User::getUserData();
        $abstracts = AbstractContent::all()->where('UserId', $userData->id)->where('IsActive',true);
        // dd($abstracts);
        // $id=encrypt($abstracts[0]->id);
        // dd(decrypt($id));
        // dd($abstracts,$userData);
        return view('User.abstractList', ['abstracts' => $abstracts,'userData'=>$userData]);
    }
    public function index()
    {
        $userData=User::getUserData();
        return view('User.abstractsubmit',['userData'=>$userData]);
    }
    public function create(Request $request)
    {
        //
        // dd($request->all());
        $abstract=new AbstractContent();

        $abstract->TopicTitle=$request->title;
        $abstract->AbstractContent=$request->abstract_content;
        $abstract->category=$request->category;
        // authors
        $abstract->Authors=$request->authors;
        // affiliation
        $abstract->Affiliation=$request->affiliation;
        // $abstract->UserId=0;
        $abstract->UserId=(int)$request->user_id;
        // dd($abstract);

        $isSaved=false;
        try{
            $abstract->save();
            $isSaved=true;
        }catch(\Exception $e){
            return redirect()->route('abstractlist')->with('error','Abstract submission failed');
        }
        // dd($abstractId);
        $userData=User::findOrFail((int)$request->user_id);
        if($isSaved){
        $returnData=$abstract->sendAbstractVerificationNotification($userData);

        // dd($returnData);
        if($returnData){
            return redirect()->route('abstractlist')->with('success','Abstract submitted successfully');
        }else{
            return redirect()->route('abstractlist')->with('warning','Abstract submitted successfully but email sending failed');
            }
        }
        else{
            return redirect()->route('abstractlist')->with('error','Abstract submission failed');
        }
    }
    public function delete(Request $request)
    {
        $abstract=AbstractContent::findOrFail((int)$request->abstractId);
        $abstract->IsActive=false;
        $abstract->save();
        return redirect()->route('abstractlist')->with('success','Abstract deleted successfully');
    }
    public function edit($id)
    {
        // dd($id);
        $decryptedId =(int) decrypt($id);
        // dd($decryptedId);
        $abstract = AbstractContent::findOrFail($decryptedId);
        // dd($abstract);
        $userData=User::getUserData();
        return view('User.abstractedit', compact('abstract','userData'));
    }
    public function view($id)
    {
        $decryptedId =(int) decrypt($id);
        $abstract = AbstractContent::findOrFail($decryptedId);
        $userData=User::getUserData();
        return view('User.abstractview', compact('abstract','userData'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AbstractContent $abstractContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AbstractContent $abstractContent)
    {
        // dd($request->all());
        $abstract=AbstractContent::findOrFail((int)$request->id);
        $abstract->TopicTitle=$request->title;
        $abstract->AbstractContent=$request->abstract_content;
        $abstract->UserId=(int)$request->user_id;
        // dd($abstract);
        $abstract->save();
        return redirect()->route('abstractlist')->with('success','Abstract updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AbstractContent $abstractContent)
    {
        //
    }
    //all abstracts
    public function allAbstracts()
    {
      
        $abstracts = AbstractContent::getAbstracts(0);
        $admindata=Admin::getAdminData();
    
        // dd($abstracts);
        // $id=encrypt($abstracts[0]->id);
        // dd(decrypt($id));
        // dd($abstracts,$userData);
        return view('Admin.abstractList', ['abstracts' => $abstracts,'admindata'=>$admindata]);
    }
    public function adminview($id)
    {
        $admindata=Admin::getAdminData();
        $decryptedId =(int) decrypt($id);
        $abstract = AbstractContent::getAbstracts($decryptedId);
        if (!empty($abstract)) {

            $abstract = $abstract[0];
        }

        // dd($abstract->TopicTitle);
        // $userData=User::getUserData();
        return view('Admin.abstractview', compact('abstract','admindata'));
    }
    public function updateAbstractStatus(Request $request)
    {
        // dd($request->all());
        $abstract=AbstractContent::findOrFail((int)$request->abstract_id);
        // dd($abstract);
        // dd($request->all());
        try{
        $abstract=AbstractContent::findOrFail((int)$request->abstractId);
        
        $abstract->IsAccepted=$request->status;
        $abstract->save();

        return redirect()->route('admin.abstractlist')->with('success','Abstract status updated successfully');
        }
        catch(\Exception $e){
            Log::error('Abstract status update failed: ' . $e->getMessage());
            return redirect()->route('admin.abstractlist')->with('error','Abstract status update failed');
        }
    }

    public function sendAbstractMailtoVerifier(Request $request)
    {
        // dd($request->all());
        try{
        $abstract=AbstractContent::getAbstracts((int)$request->abstractId);
        // dd($abstract);
        if (!empty($abstract)) {

            $abstract = $abstract[0];
        }
       
        // dd($userData);
        $email=$request->emails;
        // dd($email);
        
        $abstract->assignedto =$email;
        $abstract->save();

        // $abstract->sendabstractToReader($email);
        $isSent=AbstractContent::sendabstractToReader($abstract,$email);
        // dd($maiLTo);
            return redirect()->route('admin.abstractlist')->with('success','Abstract verification email sent successfully');
        }
        catch(\Exception $e){
            Log::error('Abstract sending failed: ' . $e->getMessage());
            return redirect()->route('admin.abstractlist')->with('error','Abstract verification email sending failed');
        }
    }
    public function emailtest()
    {
        $abstract=AbstractContent::getAbstracts(1);
        // dd($abstract);
        if (!empty($abstract)) {

            $abstract = $abstract[0];
        }
        return  view('email.emailSend', ['abstract' => $abstract]);
            // 'abstract'=>$abstract
        
        
    }
}
