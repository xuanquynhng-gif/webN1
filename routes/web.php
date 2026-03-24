<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');

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

Route::get("qlphim/theloaiphim", "App\Http\Controllers\MovieController@theloaiphim");
