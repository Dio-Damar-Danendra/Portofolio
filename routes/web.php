<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
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

Route::get('language/{locale}', function($locale)
{
        app->setlocale($locale);
        session()->put('locale'.$locale);
        
        return redirect()->back();

});

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/userlogin', function () {
    return view('userlogin');
});

Route::get('/usersignup', function () {
    return view('usersignup');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::post('/userlogin', [App\Http\Controllers\HomeController::class, 'userlogin'])->name('userlogin');

Route::post('/usersignup', [App\Http\Controllers\HomeController::class, 'usersignup'])->name('usersignup');
