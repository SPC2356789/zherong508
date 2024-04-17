<?php

use Illuminate\Support\Facades\Route;
use Swoole\Http\Request;
use App\Models\User;
use Filament\Facades\Filament;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['prefix' => '/', 'namespace' => '\App\Http\Controllers'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/about', 'AboutController@index');
    Route::get('/contact', 'ContactController@index');
});
//Route::get('/', function () {
//    return view('index');
//});
