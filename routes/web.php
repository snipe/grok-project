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

//Route::get('crud-test', function () {
//    return view('crud');
//});


Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {

    /*
    * Companies
    */
    Route::resource('company', 'CompanyController')->only([
        'index', 'show'
    ]);


    /*
    * Projects
    */

    Route::group([ 'prefix' => 'projects'], function () {

        Route::get('{id}/tests', [
            'uses' => 'ProjectsController@tests'
        ])->name('project.tests');


    });

    Route::resource('project', 'ProjectsController', [
        'parameters' => ['project' => 'project_id']
    ]);



});





Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');


Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
