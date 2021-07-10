<?php



Route::get('/', function () {
    return view('welcome');
});


// Route::get('/{vue_capture?}',function () {
//     return view('welcome');
// })->where('vue_capture', '[\/\w\.-]*');


Route::match(['get', 'post'], '/user/register', 'UserController@register');
Route::match(['get', 'post'], '/user/login', 'UserController@login');

Route::match(['get', 'post'], '/admin/register', 'AdminController@register');
Route::match(['get', 'post'], '/admin/login', 'AdminController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
