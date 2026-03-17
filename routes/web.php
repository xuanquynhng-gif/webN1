<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
    return view('welcome');
});

// Route của bạn Đào (Yêu cầu 3)
Route::get('/luongmydao', function () {
    return 'Lương Mỵ Đào';
});

// Route của các thành viên khác trong nhóm
Route::get("/xuanquynh", "App\Http\Controllers\NameController@xuanquynh");
Route::get("/qlsach/theloai", "App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach", "App\Http\Controllers\BookController@laythongtinsach");
Route::get('/luongmydao', function () {
    return 'Lương Mỵ Đào';
});

Route::get("/xuanquynh","App\Http\Controllers\NameController@xuanquynh");
Route::get("/qlsach/theloai","App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\BookController@laythongtinsach");
Route::get('/Kimloan', function () {
    return "Lam Thi Kim Loan";
});

Route::get('/Thanh', function () {
    return "Chào bạn, đây là trang của Thanh";
});

Route::get('/thaolinh', function () {
    return 'Nguyễn Lê Thảo Linh';
});

Route::get('/phimcanada', function () {
    $data = DB::table('movie')
                ->where('country_name', 'Canada')
                ->get();

    return view('phim_canada', ['ds_phim' => $data]);
});

Route::get("qlphim/theloaiphim", "App\Http\Controllers\MovieController@theloaiphim");

Route::get('/top-10-phim', [MovieController::class, 'topMovies']);
Route::get('/top-doanh-thu', function () {
    $movies = DB::table('movie')
                ->orderBy('budget', 'desc')
                ->limit(10)
                ->get();
    
    return view('top_budget', ['movies' => $movies]);
});
Route::get('/top-10-phim', [MovieController::class, 'topMovies']);
Route::get('/phim-thoi-luong-lon', [MovieController::class, 'longmovies']);