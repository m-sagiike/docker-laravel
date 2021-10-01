<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EkidenController;
use App\Http\Controllers\EkidenRecordController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\MemberController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('top');
})->name('top');

Route::get('/ekiden_master', [EkidenController::class, 'index'])->name('ekidenMaster');

Route::get('/ekiden_record/{id}', [EkidenRecordController::class, 'show'])->name('ekidenRecord');

Route::get('/kukan_record/{id}', [EkidenRecordController::class, 'showKukanRecord'])->name('kukanRecord');

Route::get('/university_master', [UniversityController::class, 'index'])->name('universityMaster');

Route::get('/member_master', [MemberController::class, 'index'])->name('memberMaster');
