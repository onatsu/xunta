<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showTest(){
        return view('test', ['title'=>'Esto es un test']);
    }
}
