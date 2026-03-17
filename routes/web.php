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
    return view ('welcome');
});

Route::get("/qlsach/theloai","App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\BookController@laythongtinsach");
<<<<<<< HEAD
Route::get('/Kimloan', function () {
    return "Lam Thi Kim Loan";
=======

<<<<<<< HEAD
Route::get('/Thanh', function () {
    return "Chào bạn, đây là trang của Thanh";
=======
Route::get('/thaolinh', function () {
    return 'Nguyễn Lê Thảo Linh';
>>>>>>> b45344d031197b0cea4677f0bf0bf4c7749bdf03
>>>>>>> 365195415d9b9ed3bfed45088226985b46a3e302
});