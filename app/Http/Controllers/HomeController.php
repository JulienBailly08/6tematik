<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $value = 'Hello World';

        return view('home', [
            'test'=> $value
        ]);
    }

    public function show($id){
        $datas =[
            1=>"puissance",
            2=>"vistesse"
        ];
        $data = $datas[$id] ?? "no datas";


        return view('detail',[
            'datas'=>$data
        ]);

    }
}
