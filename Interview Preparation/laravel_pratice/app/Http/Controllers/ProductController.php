<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\ValidationData;

use Illuminate\Http\Request;
use Validator;
class ProductController extends Controller
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
        return view('website.add_product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'image'=>'required|image'
        ]);

        $insert=new product;
        $insert->name=$request->name;
        $insert->price=$request->price;
        
        $file=$request->file('image');
        $filename=time().'image.'.$request->file('image')->getClientOriginalExtension();
        $file->move('website/',$filename);
        $insert->image=$filename;
        
        $insert->save();

        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
        $data=product::all();
        return view('website.index',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product,$id)
    {
        //
        $data=product::find($id);
        return view('website.update',["data"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product,$id)
    {
        //
        $update=product::find($id);
        $update->name=$request->name;
        $update->price=$request->price;
        
        $file=$request->file('image');
        $filename=time().'image.'.$request->file('image')->getClientOriginalExtension();
        $file->move('website/',$filename);
        $update->image=$filename;
        
        $update->update();

        return redirect("/");
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product,$id)
    {
        //
        $data=product::find($id)->delete();

        return redirect('/');
    }
}
