<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BackController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $cars = Cars::all();
        return view('backOffice', [
            'cars' => $cars
        ]);
    }

    public function create()
    {
        return view('form');
    }


    public function store(Request $request)
    {

        $request->validate([
            'brand' => 'required | max:255',
            'model' => 'required | max:255',
            'power' => 'required| numeric',
            'year' => 'required | numeric',
            'pack' => 'required |max:255',
            'description' => 'required',
            'picture' => 'required',
            'price' => 'required | numeric'
        ]);

        $name = Storage::disk('public')->put('img', $request->file('picture'));

        Cars::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'power' => $request->power,
            'year' => $request->year,
            'pack' => $request->pack,
            'description' => $request->description,
            'picture' => $name,
            'price' => $request->price
        ]);

        return redirect()->route('back');
    }

    // A finaliser

    public function edit($id)
    {
        $car = Cars::find($id);

        return view('formEdit', [
            'car' => $car
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'brand' => 'required | max:255',
            'model' => 'required | max:255',
            'power' => 'required| numeric',
            'year' => 'required | numeric',
            'pack' => 'required |max:255',
            'description' => 'required',
            'price' => 'required | numeric'
        ]);

        $car = Cars::find($request->id);
        
        if ($request->picture) {
            $name = Storage::disk('public')->put('img', $request->file('picture'));    
            $car->update([
                'brand' => $request->brand,
                'model' => $request->model,
                'power' => $request->power,
                'year' => $request->year,
                'pack' => $request->pack,
                'description' => $request->description,
                'picture' => $name,
                'price' => $request->price
            ]);

        } else {
             $car->update([
                'brand' => $request->brand,
                'model' => $request->model,
                'power' => $request->power,
                'year' => $request->year,
                'pack' => $request->pack,
                'description' => $request->description,
                'price' => $request->price
            ]);
        }


        return redirect()->route('back');
    }
    /////



    public function delete($id)
    {
        $car = Cars::find($id);
        $car->delete();
        return redirect()->route('back');
    }
}
