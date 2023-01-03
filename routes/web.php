<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('member', [App\Http\Controllers\Admin\MemberController::class, 'index']);
    Route::get('pins', [App\Http\Controllers\Admin\MemberController::class, 'pins']);
    Route::get('add-pin', [App\Http\Controllers\Admin\MemberController::class, 'createPin']);
    Route::post('create-pin', [App\Http\Controllers\Admin\PinController::class, 'store']);
    Route::get('add-member', [App\Http\Controllers\Admin\MemberController::class, 'create']);
    Route::post('add-member', [App\Http\Controllers\Admin\MemberController::class, 'store']);
    Route::get('edit-member/{member_id}', [App\Http\Controllers\Admin\MemberController::class, 'edit']);
    Route::put('update-member/{member_id}', [App\Http\Controllers\Admin\MemberController::class, 'update']);
    Route::get('delete-member/{member_id}', [App\Http\Controllers\Admin\MemberController::class, 'destroy']);
});


