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
// Route::get ("/", function (){
//     return 123;
// });
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('foo', function () {
//     return 'Hello World';
// });
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/users/{id}/{name}', function ($id,$name) {
//     return 'THIS is user '.$name.' with id of '.$id;
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// // Route::get('/user', 'UserController@index');

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/trello', 'TrelloTest@index');
Route::get('/services', 'PagesController@services');
Route::resource('posts', 'PostController');
// Route::get('/about', function () {
//     return view('pages.about');
// });
 
Auth::routes();
Route::get('/export', 'TeachersController@export');
Route::get('/dashboard', 'DashboardController@index');
//Route::get('/tcreate', 'TestController@index');
Route::resource('test', 'TestController');
