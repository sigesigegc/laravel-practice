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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('hello', 'App\Http\Controllers\HelloController@index');
Route::get('/', 'App\Http\Controllers\PageController@index');
Route::get('/company', 'App\Http\Controllers\PageController@company');
Route::get('/articles', 'App\Http\Controllers\ArticlesController@index');
Route::get('/articles/{id}', 'App\Http\Controllers\ArticlesController@show');

Route::get('/api', 'App\Http\Controllers\ApiController@index');
Route::get('/scraping', 'App\Http\Controllers\ScrapingController@index');
