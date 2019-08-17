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

// Route::get('/about', function () {
//     return "This is the about page, sons.";
// });
//
// Route::get('/contact', function () {
//     return "This is the contact page, sons.";
// });
//
// Route::get('/post/{id}/{name}', function($id, $name) {
//     return "This is post number " . $id . " " . $name;
// });
//
// Route::get('admin/posts/example', array('as'=>'admin.home' ,function() {
//     $url = route('admin.home'); // grabbing this route and saving it in $url variable
//     return "This url is " . $url;
// })); // What this means is 'admin.home' is the same as 'admin/posts/example'

// Route::get('/post/{id}', 'PostsController@index'); // when it goes to PostsController it will look for index method

Route::resource('posts', 'PostsController');

Route::get('/contact', 'PostsController@contact');
Route::get('/post/{id}', 'PostsController@show_post');
