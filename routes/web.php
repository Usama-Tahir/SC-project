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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'PagesController@home');
Route::get('/admin', 'PagesController@admin');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/admin/login/' , [
    'uses' => 'AdminController@postSignIn',
    'as' => 'admin.login'
]);
Route::get('/admin', ['as' => 'add', function()
    {
        return view('admin');
    }]
);

Route::get('/admin/login/dashboard' , [
    'uses' => 'AdminController@getDashboard',
    'as' => 'admin.dashboard'
]);



// routes for querying database

Route::get('/admin/login/dashboard/full', [
    'uses' => 'AdminController@getFullDatabase',
    'as' => 'admin.full'
]);

Route::get('/admin/login/dashboard/original', [
    'uses' => 'AdminController@getOriginalDatabase',
    'as' => 'admin.original'
]);

Route::get('/admin/login/dashboard/fake', [
    'uses' => 'AdminController@getFakeDatabase',
    'as' => 'admin.fake'
]);

Route::get('/admin/login/dashboard/users', [
    'uses' => 'AdminController@getUsers',
    'as' => 'admin.users'
]);
// User gets database
Route::get('/database', [
    'uses' => 'AdminController@userMedicines',
    'as' => 'user.dashboard'
]);
// TADA
Route::get('/admin/login/dashboard/search', [ 'as' => 'admin.search',function()
{
    return view('search');
}

]);

Route::get('/admin/login/dashboard/deleted', [
    'uses' => 'AdminController@deleteUser',
    'as' => 'admin.deleted'
]);

Route::get('/admin/login/dashboard/update', [
    'uses' => 'AdminController@updateMedicine',
    'as' => 'admin.update'
]);

Route::get('/admin/login/dashboard/updated', [
    'uses' => 'AdminController@updated',
    'as' => 'admin.updated'
]);


