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

Route::get('admin/root', 'AdminController@root')->name('admin.root');