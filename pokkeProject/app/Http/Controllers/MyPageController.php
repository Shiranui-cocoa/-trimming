<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPageController extends Controller
{
    public function MyPage(){
        return view('MyPage');
    }
}
