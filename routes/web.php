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

Route::get('/budi', function () {
    return view("hello.ani");
});

Route::get('/welcome', function () {
    return view("welcome");
});

// Route::get('/{operator}/{bil1}/{bil2}', function ($operator, $bil1, $bil2) {
//     $hasil = 0;
//     if($operator == "tambah") {
//         $hasil = $bil1 + $bil2;
//     } else if($operator == "kurang") {
//         $hasil = $bil1 - $bil2;
//     } else if($operator == "kali") {
//         $hasil =  $bil1 * $bil2;
//     } else if($operator == "bagi") {
//         $hasil =  $bil1 / $bil2;
//     }
//     // return view("hasil_operator", ["nilai"=>$hasil,
//     //     "operator"=>$operator, "bil1"=>$bil1, "bil2"=>$bil2]);
//     return view("hasil_operator", compact("hasil","operator", "bil1", "bil2"));
// });

Route::get("/mahasiswa", function (){
    $mahasiswa = [["nama"=>"Andi", "nim"=>"09"],
                    ["nama"=>"Ali", "nim"=>"11"],
                    ["nama"=>"Ika", "nim"=>"10"]];
    return view("mahasiswa", compact("mahasiswa"));
});

Route::get("/", "\App\Http\Controllers\PageController@index");
Route::get("/helo", "\App\Http\Controllers\PageController@helo");
Route::get("/mhs", "\App\Http\Controllers\PageController@mhs");
Route::get("/hitung/{opeator}/{bil1}/{bil2}",
        "\App\Http\Controllers\CalculatorController@hitung");

Route::get("/mahasiswa/form",
    "\App\Http\Controllers\MahasiswaController@view_form");

Route::post("/mahasiswa/form_request",
    "\App\Http\Controllers\MahasiswaController@form_request");

Route::get("/kontak/data", "\App\Http\Controllers\KontakController@index");

Route::post("/kontak/create", "\App\Http\Controllers\KontakController@create");

Route::get("/kontak/form", function (){
    return view("form_kontak");
});

Route::get("/kontak/update/{id}", "\App\Http\Controllers\KontakController@update");

Route::post("/kontak/update/{id}", "\App\Http\Controllers\KontakController@updated");

Route::get("/kontak/delete/{id}", "\App\Http\Controllers\KontakController@delete");

Route::get("/artikel/index", "\App\Http\Controllers\ArtikelController@index");

Route::get("/login/form", function (){
    return view("login");
});

Route::post("/login/create", "\App\Http\Controllers\LoginController@create");

Route::get("/login/index", "\App\Http\Controllers\LoginController@index");

Route::get("/login/logout", "\App\Http\Controllers\LoginController@destroy");
