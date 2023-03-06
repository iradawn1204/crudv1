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
}
