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

<<<<<<< HEAD
// Route của bạn Đào (Yêu cầu 3)
Route::get('/luongmydao', function () {
    return 'Lương Mỵ Đào';
});
=======

>>>>>>> e844f1ffaf185689c05cbc4b92a545268652905d

// Route của các thành viên khác trong nhóm
Route::get("/xuanquynh", "App\Http\Controllers\NameController@xuanquynh");
Route::get("/qlsach/theloai", "App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach", "App\Http\Controllers\BookController@laythongtinsach");

<<<<<<< HEAD
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


>>>>>>> e844f1ffaf185689c05cbc4b92a545268652905d
