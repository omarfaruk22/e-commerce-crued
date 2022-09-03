<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product;

class ProductControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::orderby('id', 'asc')->get();
        return view('backend.pages.products.productmanage', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.pages.products.addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $rqst)
    {
        // dd($rqst->all());
       $product=new Product();
       $rqst->validate([
           'name'=>'required|min:5',
           'des'=> 'required|max:200'
       ]);

       $product->pname=$rqst->name;
       $product->description=$rqst->des;
       $product->catagory=$rqst->catagory;
       $product->size=$rqst->size;
       $product->costprice=$rqst->costPrice;
       $product->saleprice=$rqst->salePrice;
       $product->quentity=$rqst->quentity;
       $product->status=$rqst->status;
       $product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=product::find($id);
        return view('backend.pages.products.editproduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rqst, $id)
    {
        $product=product::find($id);

       $product->pname=$rqst->name;
       $product->description=$rqst->des;
       $product->catagory=$rqst->catagory;
       $product->size=$rqst->size;
       $product->costprice=$rqst->costPrice;
       $product->saleprice=$rqst->salePrice;
       $product->quentity=$rqst->quentity;
       $product->status=$rqst->status;
       $product->update();
       return redirect()->route('manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       $delete=product::find($id);
       $delete->delete();
       return redirect()->route('manage');
    }
}
