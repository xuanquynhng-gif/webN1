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
Route::get('/trang1','App\Http\Controllers\ViduLayoutController@trang1');\
Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');
Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');
Route::get('sach/chitiet/{id}','App\Http\Controllers\ViduLayoutController@chitiet');
=======




Route::get("/xuanquynh","App\Http\Controllers\NameController@xuanquynh");

Route::get("/qlsach/theloai","App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\BookController@laythongtinsach");

Route::get('/Kimloan', function () {
    return "Lam Thi Kim Loan";
});



Route::get('/Thanh', function () {
    return "Chào bạn, đây là trang của Thanh";

Route::get('/thaolinh', function () {
    return 'Nguyễn Lê Thảo Linh';

});

});

use App\Http\Controllers\MovieController;

Route::get('/top-10-phim', [MovieController::class, 'topMovies']);

# Vi du 1:
Route::get("/vidu1", "App\Http\Controllers\ViDu1@ViDu1");


Route::get('/trang1','App\Http\Controllers\ViduLayoutController@trang1');
Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');


>>>>>>> 12f786bb2f629258a172813d191fb4bffeaed97c
