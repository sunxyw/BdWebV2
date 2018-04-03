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

Route::get('/', 'PagesController@root')->name('root');

Auth::routes();

Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);

Route::resource('projects', 'ProjectsController', ['only' => ['index', 'create', 'store', 'update', 'edit', 'destroy']]);

Route::get('projects/{project}/{slug?}', 'ProjectsController@show')->name('projects.show');

Route::prefix('admin')->group(function () {
    Route::get('root', 'Admin\RootController@root')->name('admin.root');
    Route::resource('musers', 'Admin\UsersController', ['only' => ['index', 'update', 'edit']]);
    Route::resource('mprojects', 'Admin\ProjectsController', ['only' => ['index', 'update', 'edit']]);
});