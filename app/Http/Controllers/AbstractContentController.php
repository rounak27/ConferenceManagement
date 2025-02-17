<?php

namespace App\Http\Controllers;

use App\Models\AbstractContent;
use Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AbstractContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listAbstract()
    {
        $userData=User::getUserData();
        $abstracts = AbstractContent::all()->where('UserId', $userData->id);
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
        $abstract->UserId=(int)$request->user_id;
        // dd($abstract);
        $abstract->save();
        return redirect()->route('abstractlist')->with('success','Abstract submitted successfully');
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
}
