<?php

namespace App\Http\Controllers;

use App\Models\MovieCategory;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    function theloaiphim() {
        $the_loai = MovieCategory::all();
        return view("qlphim.the_loai_phim", compact("the_loai"));
    }
}
