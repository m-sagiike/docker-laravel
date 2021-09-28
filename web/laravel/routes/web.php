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

Route::get('/top', function () {
    return view('top');
})->name('top');

Route::get('/ekiden_master', function () {
    return view('ekiden_master');
})->name('ekidenMaster');

Route::get('/ekiden_record', function () {
    return view('ekiden_record');
})->name('ekidenRecord');

Route::get('/kukan_record', function () {
    return view('kukan_record');
})->name('kukanRecord');

Route::get('/university_master', function () {
    return view('university_master');
})->name('universityMaster');

Route::get('/player_master', function () {
    return view('player_master');
})->name('playerMaster');