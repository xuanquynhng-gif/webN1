<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
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

Route::get('/trang1','App\Http\Controllers\ViduLayoutController@trang1');
Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');