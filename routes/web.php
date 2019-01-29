<?php

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\kingsController;

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
//public function __construct(){
//    $this->middleware('guest');
//}
Route::get('/', 'kingsController@home');
Route::get('/dashboard', 'kingsController@dashboard');
Route::get('nav', 'kingsController@nav');
Route::get('/logon',  'kingsController@logon');
Route::post('/{uid}/comment', 'kingsController@comment');
Route::post('/insert', 'kingsController@insert');
Route::post('/home', 'kingsController@login');
Route::post('auth', 'kingsController@auth');
    


//});

Route::get('/show', function () {
    $user = User::find(1);
    User::get();
    foreach ($user->posts as $post) {
        echo "$post->title<br>";
    }
});
Route::get('/{uid}', 'kingsController@shart');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
