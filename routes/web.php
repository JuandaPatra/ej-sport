<?php

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\RiderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\Web\HomePageController;
use App\Models\Comments;
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


Route::get('/', [HomePageController::class, 'index'])->name('home.index');
Route::get('/vote/{name}', [HomePageController::class, 'vote'])->name('home.vote');
Route::resource('homepage', HomePageController::class);


Route::get('/mekanisme', function(){
    return view('web.mekanisme.index');
})->name('mekanisme');

Route::post('comment-form', [HomePageController::class,'comment'])->name('comment');
Route::post('comment-form/load', [HomePageController::class, 'loadMore'])->name('loadComment');
Route::resource('daftar', UserRegisterController::class);


Route::post('/masuk', [UserLoginController::class,'loginUser'])->name('signin');
Route::get('/google-sign-in', [UserLoginController::class, 'google'])->name('sign.google');
Route::get('/auth/google/callback', [UserLoginController::class, 'handleGoogleCallback']);


Auth::routes();


Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('riders', RiderController::class);

    Route::get('data-table', [UserController::class,'table'])->name('table');
    Route::get('/delete/{id}', [UserController::class,'delete'])->name('users.hapus');
    Route::resource('users', UserController::class);

    Route::resource('comment', CommentController::class);

});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
