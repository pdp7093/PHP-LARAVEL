<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('website.product_detail');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fk=category::all();
        
        return view('admin.add_products',['data'=>$fk]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'category'=>'required',
            'product_title' => 'required|unique:products|max:255',
            'product_price'=>'required',
            'product_weight'=>'required',
            'product_descp'=>'required',
            'qty'=>'required',
            'product_image' => 'required|image',
        ]);

        $insert=new product();

        $insert->cate_id=$request->category;
        $insert->p_name=$request->product_title;
        $insert->p_price=$request->product_price;
        $insert->p_weight=$request->product_weight;
        $insert->p_descp=$request->product_descp;
        $insert->qty=$request->qty;

        $file=$request->file('product_image');
        $filename=time().'Product.'.$request->file('product_image')->getClientOriginalExtension();
        $file->move('admin/img/Product/',$filename);
        $insert->p_image=$filename;

        $insert->save();
        return redirect('/Manage_Products');

    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
        $data=product::join('categories','products.cate_id','=','categories.id')
            ->get(['products.*','categories.category_name']);
        //$data=product::all();
        return view('admin.manage_products',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product,$id)
    {
        //
        $data=product::find($id)->delete();
        return redirect('/Manage_Products');
    }
}
