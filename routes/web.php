<?php

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
    return view('pages.trangchu');
})->name('trangchu');

//quangcao
Route::get('quangcao', function () {
    return view('pages.quangcao');
})->name('quangcao');

Route::get('quangcao_anhsieunet', function () {
    return view('pages.quangcao_anhsieunet');
})->name('quangcao_anhsieunet');

Route::get('quangcao_bienbat', function () {
    return view('pages.quangcao_bienbat');
})->name('quangcao_bienbat');

Route::get('quangcao_bienled', function () {
    return view('pages.quangcao_bienled');
})->name('quangcao_bienled');

Route::get('quangcao_alu', function () {
    return view('pages.quangcao_alu');
})->name('quangcao_alu');

Route::get('quangcao_gianhang', function () {
    return view('pages.quangcao_gianhang');
})->name('quangcao_gianhang');

Route::get('quangcao_bienbao', function () {
    return view('pages.quangcao_bienbao');
})->name('quangcao_bienbao');

Route::get('quangcao_anhsang', function () {
    return view('pages.quangcao_anhsang');
})->name('quangcao_anhsang');

Route::get('quangcao_bienten', function () {
    return view('pages.quangcao_bienten');
})->name('quangcao_bienten');

Route::get('quangcao_decan', function () {
    return view('pages.quangcao_decan');
})->name('quangcao_decan');


Route::get('inan', function () {
    return view('pages.inan');
})->name('inan');
Route::get('chitietsanpham', function () {
    return view('pages.chitietsanpham');
})->name('chitietsanpham');
Route::get('tuvan', function () {
    return view('pages.tuvan');
})->name('tuvan');
Route::get('tintuc', function () {
    return view('pages.tintuc');
})->name('tintuc');
Route::get('tintuc-chitiet', function () {
    return view('pages.tintuc-chitiet');
})->name('tintuc-chitiet');