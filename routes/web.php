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

//ACCUEIL

Route::get('/', 'HomeController@index')->name('accueil');

//PROJETS

Route::get('/projet', 'GaleriesController@index')->name('projet');

//CONTACT

Route::get('/contact', 'ContactsController@index')->name('contact');
Route::post('/contact','ContactsController@send');

//ADMIN

Route::get('/admin', 'AdminController@index')->name('admin');

//Route::get('/admin-about','AdminAboutController@index')->name('admin-about');
Route::resource('admin-about','AdminAboutController');
Route::name('admin-about')->get('admin-about','AdminAboutController@index');

//Route::get('/admin-skills','AdminSkillsController@index')->name('admin-skills');
Route::resource('admin-skills','AdminSkillsController');
Route::name('admin-skills')->get('admin-skills','AdminSkillsController@index');
Route::name('admin-choice-edit-skills')->get('admin-choice-edit-skills','AdminSkillsController@choiceEdit');
Route::name('admin-choice-destroy-skills')->get('admin-choice-destroy-skills','AdminSkillsController@choiceDestroy');

//Route::get('/admin-projects','AdminProjectsController@index')->name('admin-projects');
Route::resource('admin-projects','AdminProjectsController');
Route::name('admin-projects')->get('admin-projects','AdminProjectsController@index');
Route::name('admin-choice-edit-projects')->get('admin-choice-edit-projects','AdminProjectsController@choiceEdit');
Route::name('admin-choice-destroy-projects')->get('admin-choice-destroy-projects','AdminProjectsController@choiceDestroy');

//Route::get('/admin-mails','AdminMailsController@index')->name('admin-mails');
Route::resource('admin-mails','AdminMailsController');
Route::name('admin-mails')->get('admin-mails','AdminMailsController@index');
Route::name('show-mails')->get('show-mails','AdminMailsController@showmails');

//AUTH

Route::get('/home', 'AuthController@index');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();
