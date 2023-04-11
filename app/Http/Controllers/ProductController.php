<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products; 

class ProductController extends Controller
{
    public function index(){


        $data=Products::all();
     

        return view('product.index',['products'=>$data]);
    }




    public function create(){
        return view ('product.create');
    }

    public function store(Request $request){
     
       
        $validated=$request->validate([
        
            'productName' => 'nullable|string', 
            'labe;' => 'nullable|string',
            'price' => 'nullable|string', 
            'quantity' => 'nullable|string', 
           
        ]); 
          Products::create($request->all());

       

        return redirect()->back()->with('status', 'Products Updated Successfully');

    }


    public function edit($id)
    {

        $product = Products::find($id);
        
     
        return View('product.edit', compact('product'));
      }


      
    
    
  


   
    public function update(Request $request)
    {
        $request->validate([
            'productName' => 'nullable|string', 
            'label' => 'nullable|string',
            'price' => 'nullable|string', 
            'quantity' => 'nullable|string', 
           
        ]); 

        $product = Products::where('id', $request->id)->first();

        $product->update([
            'productName' => $request->productName, 
            'label' => $request->label, 
            'price' => $request->price, 
            'quantity' => $request->quantity, 
        
        ]);
        


        return redirect()->back()->with('status', 'Product Updated Successfully');
    }


    public function destroy(Products $data,$id)
    { 
        $data=Products::where('id',$id)->delete();

        return redirect()->back()->with('status', 'Product Deleted Successfully');

    }




}