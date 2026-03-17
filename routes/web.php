<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController; // Nên viết hoa chữ M cho đúng chuẩn

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/xuanquynh", "App\Http\Controllers\NameController@xuanquynh");

Route::get("/qlsach/theloai", "App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach", "App\Http\Controllers\BookController@laythongtinsach");

Route::get('/Kimloan', function () {
    return "Lam Thi Kim Loan";
});

// Đã sửa: Thêm đóng ngoặc }); cho route /Thanh
Route::get('/Thanh', function () {
    return "Chào bạn, đây là trang của Thanh";
});

// Đã sửa: Tách riêng route /thaolinh ra ngoài
Route::get('/thaolinh', function () {
    return 'Nguyễn Lê Thảo Linh';
});

// Đã sửa: Sử dụng tên Class đồng nhất MovieController
Route::get('/top-10-phim', [MovieController::class, 'topMovies']);
Route::get('/phim-thoi-luong-lon', [MovieController::class, 'longmovies']);