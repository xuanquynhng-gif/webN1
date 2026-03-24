<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Route cá nhân của Đào
Route::get('/luongmydao', function () {
    return 'Lương Mỵ Đào';
});

// Route của các thành viên khác
Route::get("/xuanquynh", "App\Http\Controllers\NameController@xuanquynh");
Route::get("/qlsach/theloai", "App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach", "App\Http\Controllers\BookController@laythongtinsach");

Route::get('/Kimloan', function () {
    return "Lam Thi Kim Loan";
});

Route::get('/Thanh', function () {
    return "Chào bạn, đây là trang của Thanh";
});

Route::get('/thaolinh', function () {
    return 'Nguyễn Lê Thảo Linh';
});

// Phim Canada
Route::get('/phimcanada', function () {
    $data = DB::table('movie')->where('country_name', 'Canada')->get();
    return view('phim_canada', ['ds_phim' => $data]);
});

// --- PHẦN QUẢN LÝ SÁCH VÀ LAYOUT (Yêu cầu mới) ---
Route::get('/trang1', 'App\Http\Controllers\ViduLayoutController@trang1');
Route::get('/sach', 'App\Http\Controllers\ViduLayoutController@sach');
Route::get('/sach/theloai/{id}', 'App\Http\Controllers\ViduLayoutController@theloai');
Route::get('/sach/chitiet/{id}', 'App\Http\Controllers\ViduLayoutController@chitiet');