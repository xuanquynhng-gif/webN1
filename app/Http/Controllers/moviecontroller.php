<?php

namespace App\Http\Controllers; // Giữ PascalCase cho Namespace hệ thống

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Giữ PascalCase cho Facades hệ thống

class moviecontroller extends Controller // moviecontroller viết thường, Controller hệ thống viết hoa
{
    public function longmovies()
    {
        // dùng db (viết thường) qua biến hoặc gọi trực tiếp
        $movies = DB::table('movie')
                ->where('runtime', '>', 120)
                ->limit(10)
                ->get();

        return view('movies.long_duration', compact('movies'));
    }
}

