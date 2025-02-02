<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('website.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('website.signup');
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
        //Insert Record In Database


        $insert=new customer;

        $insert->firstname=$request->firstname;
        $insert->lastname=$request->lastname;
        $insert->email=$request->email;
        $insert->mobile=$request->mobile;
        $insert->gender=$request->gender;
        $insert->password=Hash::make($request->password);

        $file=$request->file('image');
        $filename=time().'_image.'.$request->file('image')->getClientOriginalExtension();
        $file->move('website/upload/customers/',$filename);
        $insert->image=$filename;

        $insert->save();

        return redirect('/Login');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
        $data=customer::all();
        return view('admin.manage_Users',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer,$id)
    {
        //
        $data=customer::find($id)->delete();
        return redirect('/Manage_Users');
    }
}
