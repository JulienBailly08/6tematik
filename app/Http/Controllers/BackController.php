<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class BackController extends Controller
{
    public function show(){
        $cars = Cars::all();
        return view('backOffice',[
            'cars'=> $cars
        ]);
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
        
        return redirect()->route('back');
    }

    public function delete($id){
        $car = Cars::find($id);
        $car->delete();
        return redirect()->route('back');
    }
}
