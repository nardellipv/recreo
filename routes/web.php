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
    return redirect()->route('login');
});

Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/school', 'SchoolController');
Route::get('showUploadFile', 'SchoolController@showUploadFile')->name('showUploadFile');
Route::post('uploadFile', 'SchoolController@uploadFile')->name('uploadFile');

Route::resource('/students', 'StudentController');
Route::get('addstudent/students', 'StudentController@create');
Route::get('/approve', 'StudentController@listApprove')->name('approve');

Route::resource('/teachers', 'TeacherController');
Route::get('addteacher/teacher', 'TeacherController@create');

Route::post('/access/permition', 'AccessTestController@permition')->name('access.permition');
Route::get('/access', 'AccessTestController@index')->name('access.index');
Route::get('/access/download', 'AccessTestController@download')->name('access.download');


//admin
Route::resource('/admin/admin', 'AdminController');
Route::resource('/admin/adminstudent', 'AdminStudentController');