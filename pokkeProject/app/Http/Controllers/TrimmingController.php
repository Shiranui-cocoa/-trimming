<?php

namespace App\Http\Controllers;

use App\Trimmer;
//関数を呼び出す

use Illuminate\Http\Request;

class TrimmingController extends Controller
{
    public function list(){
        $trimmers = Trimmer::all();

        //return view('Trimmer');
        return view('Trimmer', ['trimmers' => $trimmers]);
    }
}
