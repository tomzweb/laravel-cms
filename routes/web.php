<?php

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

    $types = \App\PostType::whereIn('slug', ['news', 'services'])->with('posts')->get();

    return view('home')->with('types', $types);
});


/**
 * Post Types
 */
Route::get('/{postType}', 'PostTypeController@index');
Route::get('/post-type/create', 'PostTypeController@create');
Route::put('/post-type/create', 'PostTypeController@store');
Route::get('/{postType}/edit', 'PostTypeController@edit');
Route::patch('/{postType}/edit', 'PostTypeController@update');




/**
 * Posts
 */
Route::get('/{postType}/{post}', 'PostController@show');
Route::get('/{postType}/create', 'PostController@create');
Route::put('/{postType}/create', 'PostController@store');
Route::get('/{postType}/{post}/edit', 'PostController@edit');
Route::patch('/{postType}/{post}/edit', 'PostController@update');