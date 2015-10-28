<?php
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

Route::resource('articles', 'ArticlesController');
Route::get('articles/{articles}/delete', [
    'as'   => 'articles.delete',
    'uses' => 'ArticlesController@delete',
]);
