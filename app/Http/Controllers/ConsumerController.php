<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consumers; 

class ConsumerController extends Controller
{
    public function index(){


        $data=Consumers::all();

        return view('consumer.index',['consumers'=>$data]);
    }



    public function edit($consumer)
    {
     
        $consumer=Consumers::find($consumer);


        return view('consumer.edit', compact('consumer'));
    
    
    }

    
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string', 
            'age' => 'nullable|string',
            'email' => 'nullable|string', 
            'address' => 'nullable|string', 
            'contactNumber' => 'nullable|string'
        ]); 

        $consumer = Consumers::where('id', $request->id)->first();

        $consumer->update([
            'name' => $request->name, 
            'age' => $request->age, 
            'email' => $request->email, 
            'address' => $request->address, 
            'contactNumber' => $request->contactNumber, 
        ]);
        


        return redirect()->back()->with('status', 'Customer Updated Successfully');
    }


    public function destroy(Consumers $data,$id)
    { 
        $data=Consumers::where('id',$id)->delete();

        return redirect()->back()->with('status', 'Customer Deleted Successfully');

    }
}
