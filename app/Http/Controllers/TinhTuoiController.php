<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinhTuoiController extends Controller
{
    function nhapnamsinh(){
        return view('nhapnamsinh');
    }
    function tinhtuoi(Request $request){
        $nam_sinh = $request -> input("year");
        $age = date('Y') - $nam_sinh;
        return "Tuổi của bạn là: ".$age;
    }
}
