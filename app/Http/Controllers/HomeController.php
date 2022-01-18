<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $cars = Cars::all();
       
        return view('home', [ 
            'cars' => $cars
        ]);
    }

    public function show($id)
    {
        $datas = [
            1 => "puissance",
            2 => "vistesse"
        ];
        $data = $datas[$id] ?? "no datas";


        return view('detail', [
            'datas' => $data
        ]);
    }
}
