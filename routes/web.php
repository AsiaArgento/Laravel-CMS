<?php
use App\Post;
use App\User;


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

// Route::get('/find', function(){
//   $post = Post::find(2);
//   return $post->title;
// });

// Route::get('/findwhere', function(){
//   $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get(); // where id equals 2, and orderby, take 1 out of it and get it to me
//   return $posts;
// });

// Route::get('/findmore', function(){
//   // $posts = Post::findOrFail(1);
//   // return $posts;
//   $posts = Post::where('users_count', '<', 50)->firstOrFail();
// });

// Route::get('/basicinsert', function(){
//   $post = new Post;
//   $post->title = 'New Eloquent Title Insert';
//   $post->content = 'Wow, eloquent is really cool, look at this content';
//   $post->save();
// });

// Route::get('/create', function(){
//   Post::create(['title'=>'the create title', 'content'=>'WOW im learning']);
// });

// Route::get('/update', function(){
//   Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'NEW PHP TITLE', 'content'=>'I love my instructor']);
// });

// Route::get('/delete', function(){
//   $post = Post::find(2);
//   $post->delete();
// });

// Route::get('/softdelete', function(){
//   Post::find(3)->delete();
// });

// Route::get('/forcedelete', function(){
//   Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
// });

/*
|--------------------------------------------------------------------------
| Eloquent Relationships
|--------------------------------------------------------------------------
*/

// One to One Relationship ***************
// Route::get('/user/{id}/post', function($id){
//   return User::find($id)->post->title;
// });
//
// Route::get('/post/{id}/user', function($id){
//   return Post::find($id)->user->name;
// });

// One to Many Relationship *****************
// Route::get('/posts', function(){
//   $user = User::find(1);
//   foreach($user->posts as $post){
//     echo $post->title . "<br>";
//   }
// });

// Many to Many Relationship
Route::get('/user/{id}/role', function($id){
  $user = User::find($id);

  foreach($user->roles as $role){
    return $role->name;
  }
});
