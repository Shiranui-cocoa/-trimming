<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationListController extends Controller
{
    public function ReservationList(){
        return view('ReservationList');
    }
}
