<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function find(Request $request)
    {
       return view('person.find',['input' => '']);
    }
    
    public function search(Request $request)
    {
       $item = Person::where('name', $request->input)->first();
       $param = ['input' => $request->input, 'item' => $item];
       return view('person.find', $param);
    }

}
