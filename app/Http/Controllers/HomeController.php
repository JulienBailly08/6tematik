<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $cars = Cars::paginate(6);

        return view('home', [
            'cars' => $cars
        ]);
    }

    public function show($id)
    {
        $car = Cars::findorfail($id);

        return view('detail', [
            'car' => $car
        ]);
    }
}
