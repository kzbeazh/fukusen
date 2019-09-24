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

//トップ画面
Route::get('/', 'FukusenController@index')->name('top.index');;


// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログイン認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');


// ユーザ機能
Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    
// ユーザーが他のユーザーをフォロー/アンフォロー
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::post('follow', 'UserFollowController@store')->name('user.follow');
        Route::delete('unfollow', 'UserFollowController@destroy')->name('user.unfollow');
        Route::get('followings', 'UserFollowController@followings')->name('users.followings');
        Route::get('followers', 'UserFollowController@followers')->name('users.followers');
        Route::get('favorites', 'UserFollowController@favorites')->name('favorites.show');
    });
    
// ユーザーが作品お気に入りに入れる/外す
    Route::group(['prefix' => 'works/{id}'], function () {
        Route::post('favorite', 'FavoritesController@store')->name('works.favorite');
        Route::delete('unfavorite', 'FavoritesController@destroy')->name('works.unfavorite');
    });

// 作品の登録と削除
    Route::get('worksInput', 'WorksController@index')->name('works.index');
    Route::post('worksShow', 'WorksController@show')->name('works.show');
    Route::get('worksCreate/{keyword}/{itemCode}', 'WorksController@create')->name('works.create');
    Route::post('worksStore', 'WorksController@store')->name('works.store');
    Route::delete('worksDestroy', 'WorksController@destroy')->name('works.destroy');
    Route::get('worksDetail/{id}', 'WorksController@detail')->name('works.detail');
    
    
// コメントの登録
//    Route::get('commentsInput', 'CommentsController@show')->name('comments.show');
//    Route::post('commentsPost', 'CommentsController@post')->name('comments.post');
//    Route::delete('commentsDestroy', 'CommentsController@destroy')->name('comments.destroy');
    
// 種類ごとの表示
    Route::get('kindsChoto', 'KindsController@choto')->name('kinds.choto');
    Route::get('kindsSaigo', 'KindsController@saigo')->name('kinds.saigo');
    Route::get('kindsImifu', 'KindsController@imifu')->name('kinds.imifu');
    
});