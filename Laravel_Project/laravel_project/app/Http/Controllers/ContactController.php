<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('website.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Form Validation
        $validated = $request->validate([
            'categories_title' => 'required|unique:categories|max:255',
            'categories_image' => 'required|image',
        ]);
        //Insert Data

        $insert=new contact;
        $insert->name=$request->name;
        $insert->email=$request->email;
        $insert->subject=$request->subject;
        $insert->message=$request->message;

        
        $insert->save();
        return redirect('/Contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        $data=contact::all();
        
        return view('admin.manage_contact',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact,$id)
    {
        //
        $data=contact::find($id)->delete();
        return redirect('/Manage_Contact');
    }
}
