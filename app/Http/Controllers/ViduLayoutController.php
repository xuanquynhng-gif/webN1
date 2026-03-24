<?php
<<<<<<< HEAD

=======
>>>>>>> e844f1ffaf185689c05cbc4b92a545268652905d
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViduLayoutController extends Controller
{
    function trang1()
    {
<<<<<<< HEAD
        return view("vidulayout.trang1");
    }
    function sach()
    {
        $data = DB::select("select * from sach order by gia_ban asc limit 0,8");
        return view("vidusach.index", compact("data"));
    }
    function theloai($id)
    {
        $data = DB::select("select * from sach where the_loai = ?", [$id]);
        return view("vidusach.index", compact("data"));
    }
}
=======
        return view("vidulayout.trang1"); 
    }
    function sach()
    {
        $data = DB::select("select * from sach order by gia_ban asc limit 0,8"); 
        return view("vidusach.index", compact("data")); 
    }

    
    function theloai($id)
    {
        $data = DB::select("select * from sach where the_loai = ?", [$id]); 
        return view("vidusach.index", compact("data")); 
    }
    function chitiet($id)
    {
        $data = DB::select("select * from sach where id = ?", [$id]);
        return view("vidusach.chitiet", ['sach' => $data[0]]);
    }
}
>>>>>>> e844f1ffaf185689c05cbc4b92a545268652905d
