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
    return view('welcome');
});

Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/school', 'SchoolController');

Route::resource('/students', 'StudentController');
Route::get('/addstudent/student', 'StudentController@create');

Route::resource('/teachers', 'TeacherController');
Route::get('addteacher/teacher', 'TeacherController@create');
