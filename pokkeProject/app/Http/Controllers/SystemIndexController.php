<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemIndexController extends Controller
{
    public function SystemIndex(){
        return view('SystemIndex');
    }
}
