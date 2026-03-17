<?php

use Illuminate\Support\Facades\Route;

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

<<<<<<< HEAD
Route::get("/xuanquynh", "App\Http\Controllers\NameController@xuanquynh");
Route::get("/qlsach/theloai", "App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach", "App\Http\Controllers\BookController@laythongtinsach");
=======
Route::get('/luongmydao', function () {
    return 'Lương Mỵ Đào';
});

<<<<<<< HEAD
>>>>>>> 16e06deaa223196307999e477d0c5b59bd22860d

Route::get('/Kimloan', function () {
    return "Lam Thi Kim Loan"; // Sửa: Thêm dấu chấm phẩy (;) ở cuối
});

Route::get('/Thanh', function () {
    return "Chào bạn, đây là trang của Thanh"; // Sửa: Thêm dấu đóng ngoặc kép (") và đóng ngoặc đơn )
});

Route::get('/thaolinh', function () {
    return 'Nguyễn Lê Thảo Linh'; // Sửa: Đóng ngoặc đơn ) đúng vị trí và dùng dấu chấm phẩy (;)
});