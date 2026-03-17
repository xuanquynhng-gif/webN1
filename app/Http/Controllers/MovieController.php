<?php
namespace App\Http\Controllers;

use App\Models\MovieCategory;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MovieController extends Controller
{
        function theloaiphim() {
            $the_loai = MovieCategory::all();
            return view("qlphim.the_loai_phim", compact("the_loai"));
        }
     public function topMovies()
    {
        // Lấy dữ liệu từ bảng movie, sắp xếp theo điểm vote giảm dần, lấy 10 phim đầu tiên
        $movies = DB::table('movie')
                    ->orderBy('vote_average', 'desc')
                    ->limit(10)
                    ->get();

        return view('movies.long_duration', compact('movies'));
    }
        public function topMovies()
    {
        // Lấy dữ liệu từ bảng movie, sắp xếp theo điểm vote giảm dần, lấy 10 phim đầu tiên
        $movies = DB::table('movie')
                    ->orderBy('vote_average', 'desc')
                    ->limit(10)
                    ->get();

        return view('movies.long_duration', compact('movies'));
    }
}