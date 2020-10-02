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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::pattern('category_slug', '[a-z0-9\-]+');
Route::pattern('post_slug', '[a-z0-9\-]+');
Route::pattern('video_slug', '[a-z0-9\-]+');
Route::pattern('tag_slug', '[a-z0-9\-]+');
Route::pattern('hash_id', '[a-zA-Z0-9\-]+');


Route::group(['middleware' => ['web', 'shield']], function () {
    Route::get('/@/error-logs', ['as' => 'error-logs', 'uses' => '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index']);
});
