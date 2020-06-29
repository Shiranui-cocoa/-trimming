<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vaccine;
//↑書かないとエラーだよ

class VaccineController extends Controller
{
    public function Vaccine(){
        $owners = Vaccine::all();

        return view('Vaccine' , ['owners' => $owners]);
    }
}
