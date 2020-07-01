<?php

namespace App\Http\Controllers;

use App\Owner;
//↑記述すれば18行目の書き方でOK

use Illuminate\Http\Request;

class MyPageController extends Controller
{
    public function
    MyPage(Request $request){
        $name = $request->oname;
        //$name = "aaa";
        
        //$owner = new \App\Owner;
        $owner = new Owner;
        $owner->OwnerName = $name;
        $owner->email = 'aaaaa';
        $owner->OwnerID = 5;
        $owner->save();
        return view('MyPage', compact('name'));
    }
}
