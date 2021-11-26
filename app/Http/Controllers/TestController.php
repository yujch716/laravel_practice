<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $Languages =[
            'PHP',
            'Java',
            'C',
            'Python'
        ];
        return view('cc',[
            'Languages' => $Languages 
        ]);
    }
}
