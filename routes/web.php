<?php

use App\Post;
use App\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\LazyCollection;

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

Auth::routes();
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test','TestEloquent');
Route::get('/lazy',function(){
 $collect= LazyCollection::times(10000000)->map(function($number){
return pow(2,$number);
	
 })->all();
});
Route::get('/posts',function(){
	$posts=Post::with('user')->get(); //EagerLoading with('user')
	$users=User::with('posts')->get(); //EagerLoading with('posts')
// $posts=Post::get(); 
// 	$users=User::get();
	foreach ($posts as $post)
    	echo($post->user),'<br>';
foreach($users as $user)
	echo $user->posts,'<br>';

});
