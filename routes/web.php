<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


<<<<<<< HEAD
=======
use App\Http\Controllers\MovieController;

>>>>>>> 510c112d2ea97681a5009f477a3cc32d77c0e945
Route::get('/', function () {
    return view('welcome');});

// Route của bạn Đào (Yêu cầu 3)
Route::get('/luongmydao', function () {
    return 'Lương Mỵ Đào';
});

<<<<<<< HEAD
Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');
Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');
Route::get('/sach/chitiet/{id}', 'App\Http\Controllers\ViduLayoutController@chitiet');

Route::get("/xuanquynh","App\Http\Controllers\NameController@xuanquynh");
=======
// Route của các thành viên khác trong nhóm
Route::get("/xuanquynh", "App\Http\Controllers\NameController@xuanquynh");
Route::get("/qlsach/theloai", "App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach", "App\Http\Controllers\BookController@laythongtinsach");
>>>>>>> 510c112d2ea97681a5009f477a3cc32d77c0e945
Route::get('/luongmydao', function () {
    return 'Lương Mỵ Đào';
});

Route::get("/xuanquynh","App\Http\Controllers\NameController@xuanquynh");
<<<<<<< HEAD

Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');

Route::get("/xuanquynh","App\Http\Controllers\NameController@xuanquynh");

=======
>>>>>>> 510c112d2ea97681a5009f477a3cc32d77c0e945
Route::get("/qlsach/theloai","App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\BookController@laythongtinsach");
<<<<<<< HEAD

=======
>>>>>>> 510c112d2ea97681a5009f477a3cc32d77c0e945
Route::get('/Kimloan', function () {
    return "Lam Thi Kim Loan";
});

Route::get('/Thanh', function () {
    return "Chào bạn, đây là trang của Thanh";
});

<<<<<<< HEAD

=======
>>>>>>> 510c112d2ea97681a5009f477a3cc32d77c0e945
Route::get('/thaolinh', function () {
    return 'Nguyễn Lê Thảo Linh';
});

<<<<<<< HEAD
=======
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
Route::get('/phim-thoi-luong-lon', [MovieController::class, 'longmovies']);
>>>>>>> 510c112d2ea97681a5009f477a3cc32d77c0e945
