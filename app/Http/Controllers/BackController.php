<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class BackController extends Controller
{
    public function show(){
        return view('backOffice');
    }

    public function create(){
        return view ('form');
    }

    public function store(Request $request){
        
        Cars::create([
            'brand'=>$request->brand,
            'model'=>$request->model,
            'power'=>$request->power,
            'year'=>$request->year,
            'pack'=>$request->pack,
            'description'=>$request->description,
            'picture'=>$request->picture,
            'price'=>$request->price
        ]);


    }
}
