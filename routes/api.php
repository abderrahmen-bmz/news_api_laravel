<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
  /**
  * @User Related
  */
Route::get('authors','Api\UserController@index');
Route::get('authors/{id}','Api\UserController@show');
Route::get('posts/author/{id}','Api\UserController@posts');
Route::get('comments/author/{id}','Api\UserController@comments');

  // End  user Related 


   /**
  * @Post Related
  */
  Route::get('categories','Api\CategoryController@index');
  Route::get('posts/categories/{id}','Api\CategoryController@posts');
  Route::get('posts','Api\PostController@index');
  Route::get('posts/{id}','Api\PostController@show');
  Route::get('comments/posts/{id}', 'Api\PostController@comments');

   // End  Post Related 

 //  Route::get('','');
Route::get('users' , function(){
    $user = \App\User::paginate();
    return new \App\Http\Resources\UsersResource($user);
});
