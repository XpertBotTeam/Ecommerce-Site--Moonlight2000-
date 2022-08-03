<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewProduct;

class ProductsController extends Controller
{
    private static function getData(){
        return [
            ['id'=>1,'name' =>'Short','brand' =>'Nike', 'price' =>200],
            ['id'=>2,'name' =>'T-shirt','brand' =>'H&M', 'price' =>400],
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //GET
        return view('products.index' ,[
            'products' => NewProduct::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'price' => 'required',
            
        ]);
        //
        $file = $request->file('image');
        $file_name = $file->getClientOriginalName();
        $file_ext =$file->getClientOriginalExtension();
        $file_tmp =$file->getRealPath();
        $file_size = $file->getSize();
        $destination_path = 'product_images';
        // $full_image_name=$file_name.".".$file_ext;
        $file->move($destination_path,$file_name);

        $product = new NewProduct();
        $product->name = strip_tags($request->input('name'));
        $product->description = strip_tags($request->input('des'));
        $product->price = strip_tags($request->input('price'));
        $product->brand = strip_tags($request->input('brand'));
        $product->image = $file_name;
        
        $product->save();
        return redirect()->route('home.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {

        return view('products.show',[
            'product' =>NewProduct::findorFail($product)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
