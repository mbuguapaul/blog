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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::post('/post/post_vote_up','PostController@post_up');

Route::get('/', 'PostsController@welcome');
Auth::routes();
Route::post('newpost','PostsController@store');
Route::post('edit/editpost','PostsController@updatepost');

Route::post('updateimg','HomeController@updateimg');
Route::post('updateprf','HomeController@updateprf');

Route::post('newcategory','PostsController@storecategory');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile');
Route::get('detail/profile', 'HomeController@profile');
Route::get('/editor', 'HomeController@editor');
Route::get('detail/editor', 'HomeController@editor');
Route::get('/detail/{id}', 'PostsController@detail');


//////user
Route::get('/upgrade/{id}', 'HomeController@upgradeuser');
Route::get('/downgrade/{id}', 'HomeController@downgradeuser');

Route::get('/deleteuser/{id}', 'HomeController@deleteuser');


///////updates
Route::post('firstupdate','HomeController@firstupdate');
Route::post('secondupdate','HomeController@secondupdate');
Route::post('thirdupdate','HomeController@thirdupdate');


///////////selection
Route::get('/pselection/{id}', 'PostsController@editorselection');
Route::get('/cselection/{id}', 'PostsController@catselection');


/////////edit post
Route::get('/edit/{id}', 'HomeController@editpost');
Route::get('/delete/{id}', 'HomeController@deletepost');

// delete category
Route::get('/deletecategory/{id}', 'HomeController@deletecat');


Route::get('activate','HomeController@activate');
Route::post('detail/comment','CommentsController@comment');

Route::post('like','PostsController@like');