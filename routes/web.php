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

Route::resource('usersTableSeeder','UsersController');
Route::resource('majorsTableSeeder','MajorsController');
Route::resource('rolesTableSeeder','RolesController');
Route::resource('coursesTableSeeder','CoursesController');


Route::get('/', 'UsersController@index');