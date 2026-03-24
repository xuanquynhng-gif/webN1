<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MovieController extends Controller
{
     public function topMovies()
    {
        // Lấy dữ liệu từ bảng movie, sắp xếp theo điểm vote giảm dần, lấy 10 phim đầu tiên
        $movies = DB::table('movie')
                    ->orderBy('vote_average', 'desc')
                    ->limit(10)
                    ->get();

        // Trả dữ liệu về view tên là top_rated trong thư mục movies
        return view('movies.top_rated', compact('movies'));
    }
}

