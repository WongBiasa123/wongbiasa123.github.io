<?php


use Illuminate\Support\Facades\Route;
use App\Models\Mapel;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdministratorLoginController;

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
    return view('Home', [
        "title" => "HOME",

    ]);
});

Route::get('/mapel', function () {
    return view('MAPEL.index', [
        "title" => "All Mapel"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "ABOUT"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "CONTACT"
    ]);
});

// --Rute postingan--
Route ::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);


// --rute berdasarkan mapel--
Route::get('mapels/mapel-jaringan-dasar', function(Mapel $mapel){
    return view('MAPEL.mapel', [
        "title" => "Post By Mapel : Jaringan Dasar",
        "posts" => $mapel->posts->load('mapel'),
    ]);
});
Route::get('mapels/mapel-perakitan-komputer', function(Mapel $mapel){
    return view('MAPEL.mapel', [
        "title" => "Post By Mapel : Perakitan Komputer",
        "posts" => $mapel->posts->load('mapel'),
    ]);
});
Route::get('mapels/mapel-informatika', function(Mapel $mapel){
    return view('MAPEL.mapel', [
        "title" => "Post By Mapel : Informatika",
        "posts" => $mapel->posts->load('mapel'),
    ]);
});



// --Rute mapels slug--
Route::get('/mapels/{mapel:slug}', function(Mapel $mapel){
    return view('MAPEL.mapel',[
        'title' => "Post By Mapel : $mapel->name",
        'posts' => $mapel->posts->load('mapel'),
    ]);
});


Route::get('/administrator/login', [AdministratorLoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/administrator/login', [AdministratorLoginController::class, 'authenticate']);

Route::post('/logout', [AdministratorLoginController::class, 'logout']);

// --Rute Dashboard--
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');
