<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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
Route::get('/login', [AuthController::class,'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('login.submit');

Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('posts/{id}/detail',[HomeController::class,'showDetailPost'])->name('showDetailPost');

Route::get('weather',[\App\Http\Controllers\WeatherController::class, 'index']);

Route::get('/auth/redirect/{provider}', [AuthController::class,'redirect'])->name('login.github');
Route::get('/callback/{provider}', [AuthController::class,'callback']);

Route::middleware(['auth','setLocale'])->prefix('admin')->group(function (){

    Route::post('change-language',[\App\Http\Controllers\LangController::class,'changeLanguage'])->name('changeLanguage');

    Route::prefix('users')->group(function (){
        Route::get('/', [UserController::class,'index'])->name('user.index');
        Route::get('/create',[UserController::class,'create'])->name('user.create');
        Route::post('/create',[UserController::class,'store'])->name('user.store');
        Route::get('/{id}/delete',[UserController::class,'delete'])->name('user.delete');
        Route::get('/{id}/edit',[UserController::class,'update'])->name('user.update');
        Route::post('/{id}/edit',[UserController::class,'edit'])->name('user.edit');
        Route::get('/search',[UserController::class,'search'])->name('user.search');
    });

    Route::prefix('posts')->group(function (){
        Route::get('create',[PostController::class,'create'])->name('posts.create');
        Route::post('create',[PostController::class,'store'])->name('posts.store');
        Route::get('/',[PostController::class,'showList'])->name('posts.showList');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('logout',[AuthController::class,'logout'])->name('logout');
});




