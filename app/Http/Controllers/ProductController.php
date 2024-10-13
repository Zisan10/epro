<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('backend/products/index',compact('products'));
    }
    public function create(){
        return view('backend/products/create');
    }
    //store in database
    public function store(Request $request){
        $product = new product;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move(public_path('images'),$fileName);
            $product->image = $fileName;
            
        }


        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        //img
      

        $product->save();
        return redirect()->route('product.index');
    }


    //edit
    public function edit($id){
        $product = product::find($id);
        return view('backend/products/edit',compact('product'));
    }

    //update
    public function update(Request $request,$id){
        $product = product::find($id);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move(public_path('images'),$fileName);
            $product->image = $fileName;

        }


        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        //img
        

        $product->save();
        return redirect()->route('product.index');
    }

    //delete
    public function destroy($id){
        $product = product::find($id);
        $product->delete();
        return redirect()->back();
    }
    
}
