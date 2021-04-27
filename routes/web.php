<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Validation\Factory;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'getIndex'])->name('blog.index');
Route::get('/post/{id}', [PostController::class, 'getPost'])->name('blog.post');

Route::prefix('admin')->group(function () {
    Route::get('/', [PostController::class, 'getAdminIndex'])->name('admin.index');
    Route::get('/create', [PostController::class, 'getAdminCreate'])->name('admin.create');
    Route::get('/edit/{id}', [PostController::class, 'getAdminEdit'])->name('admin.edit');
    Route::post('/create', [PostController::class, 'postAdminCreate'])->name('admin.create');
    Route::post('/edit/{id}', [PostController::class, 'postAdminUpdate'])->name('admin.update');
});

Route::get('/about', function () {
    return view('other.about');
})->name('about');

//Route:: group(['prefix' => 'admin'], function ()
//{
//    Route:: get('', [
//        'uses' => 'PostController@getAdminIndex',
//        'as' => 'admin.index'
//    ]);
//Route:: get('create', [
//    'uses' => 'PostController@getAdminCreate',
//    'as' => 'admin.create '
//    ]);
//Route:: post('create', [
//    'uses'=> 'PostController@postAdminCreate',
//    'as' => 'admin.create'
//    ]);
//Route:: get('edit /{id}', [
//    'uses' => 'PostController@getAdminEdit',
//    'as' => 'admin.edit'
//    ]);
//Route:: post('edit', [
//    'uses' => 'PostController@postAdminUpdate',
//    'as' => 'admin.update'
//    ]);
//});





