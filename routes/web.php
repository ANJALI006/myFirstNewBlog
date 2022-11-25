<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;

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



Route::controller(BlogPostController::class)->prefix('blog/')->name('blog.')->group(function(){
    Route::get('index','index')->name('list');
    Route::get('create','create')->name('create');
    Route::post('store','store')->name('store');
    Route::get('show/{blogPost}','show')->name('show');
    Route::get('edit/{blogPost}','edit')->name('edit');
    Route::put('update','update')->name('update');
    Route::delete('destroy/{blogPost}','destroy')->name('destroy');

});
