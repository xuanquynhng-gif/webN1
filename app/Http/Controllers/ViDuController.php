<?php
namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ViduLayoutController extends Controller
{
function theloai($id)
{
$data = DB::select("select * from sach where the_loai = ?",[$id]);
return view("vidusach.index", compact("data"));
}
}