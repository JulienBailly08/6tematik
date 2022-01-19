<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        
        $name = Storage::disk('public')->put('img',$request->file('picture'));
              
        Cars::create([
            'brand'=>$request->brand,
            'model'=>$request->model,
            'power'=>$request->power,
            'year'=>$request->year,
            'pack'=>$request->pack,
            'description'=>$request->description,
            'picture'=>$name,
            'price'=>$request->price
        ]);

        return redirect()->route('back');
    }

    // A finaliser

    public function edit($id){
        $car = Cars::find($id);

        return view('formEdit',[
        'car'=>$car
    ]);
    }

    public function update($id, Request $request){       
        $car = Cars::find($id);
        dd($car);
        $car->update([
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
    /////



    public function delete($id){
        $car = Cars::find($id);
        $car->delete();
        return redirect()->route('back');
    }
}
