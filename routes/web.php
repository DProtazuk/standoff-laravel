<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

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
    return view('index');
});

Route::get('shop', function () {
    return view('shop');
});

Route::post('/search', [SearchController::class, 'search']);
Route::post('/user-shop', [SearchController::class, 'userShop']);
Route::post('/kassa', [SearchController::class, 'kassa']);
Route::post('/bank', [SearchController::class, 'bank']);

Route::get('/good', function () {
    return view('good');
});