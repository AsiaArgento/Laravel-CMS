<?php
use App\Post;
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
//
// Route::resource('posts', 'PostsController');
//
// Route::get('/contact', 'PostsController@contact');
// Route::get('/post/{id}', 'PostsController@show_post');

/*
|--------------------------------------------------------------------------
| Inserting Data into our Posts Table, DB Raw SQL Queries
|--------------------------------------------------------------------------
*/

// Route::get('/insert', function(){
//   DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with Laravel', 'Laravel is the best thing that has happened to PHP']);
// });

// Route::get('/read', function(){
//   $results = DB::select('select * from posts where id = ?', [1]);
//
//   foreach($results as $post){
//     return $post->title;
//   }
//
// });

// Route::get('/update', function(){
//   $updated = DB::update('update posts set title = "Updated Title" where id = ?', [1]);
//   return $updated;
// });

// Route::get('/delete', function(){
//   $deleted = DB::delete('delete from posts where id = ?', [1]);
//   return $deleted;
// });

/*
|--------------------------------------------------------------------------
| Object Relational Model-ORM
|--------------------------------------------------------------------------
*/

// Route::get('/read', function(){
//   $posts = Post::all();
//   foreach($posts as $post) {
//     return $post->title;
//   }
// });

Route::get('/find', function(){
  $post = Post::find(2);
  return $post->title;
});
