<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EkidenController;
use App\Http\Controllers\EkidenRecordController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\KukanRecordController;

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

// 駅伝マスタ
Route::get('/ekiden_master', [EkidenController::class, 'index'])->name('ekidenMaster');

// 駅伝新規登録
Route::get('/ekiden_create', [EkidenController::class, 'create'])->name('ekidenCreate');
// 駅伝新規登録確認
Route::post('/ekiden_create_confirm', [EkidenController::class, 'createConfirm'])->name('ekidenCreateConfirm');
// 駅伝新規登録 store
Route::put('/ekiden_create_store', [EkidenController::class, 'store'])->name('ekidenCreateStore');
// 駅伝更新表示
Route::get('/ekiden_show/{id}', [EkidenController::class, 'show'])->name('ekidenShow');

Route::get('/ekiden_record/{id}', [EkidenRecordController::class, 'show'])->name('ekidenRecord');

Route::get('/kukan_record/{id}', [KukanRecordController::class, 'show'])->name('kukanRecord');

Route::get('/university_master', [UniversityController::class, 'index'])->name('universityMaster');

Route::get('/member_master', [MemberController::class, 'index'])->name('memberMaster');
