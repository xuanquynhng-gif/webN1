<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    function laythongtintheloai(){
        $the_loai = Category::all();
        $data = ["ten_the_loai"=>"Văn học"];
        Category::where("id",4)->update($data);
        return view("qlsach.the_loai", compact("the_loai"));
    }
    function laythongtinsach(){
        $sach = DB::table("sach as s") 
                -> join("dm_the_loai as t","s.the_loai","=","t.id")
                -> where("t.id", "3") -> get();
        return view("qlsach.thong_tin_sach", compact("sach"));
    }
}