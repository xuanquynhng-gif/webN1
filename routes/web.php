<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB; // Bắt buộc phải có dòng này để chạy Database


Route::get('/', function () {
    return view ('welcome');
});

Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');
Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');
Route::get('/sach/chitiet/{id}', 'App\Http\Controllers\ViduLayoutController@chitiet');

Route::get("/xuanquynh","App\Http\Controllers\NameController@xuanquynh");
Route::get('/luongmydao', function () {
    return 'Lương Mỵ Đào';
});

Route::get("/xuanquynh","App\Http\Controllers\NameController@xuanquynh");

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

