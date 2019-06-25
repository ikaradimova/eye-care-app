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

Route::get('/', function () {
    return view('quiz.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('recipes', 'RecipesController');
Route::resource('eye-diseases', 'EyeDiseasesController');
Route::resource('users', 'UsersController');
Route::get('users/{id}/block', 'UsersController@block');
Route::resource('quiz', 'QuizController');
Route::get('close-eye', 'QuizController@closeEye');
Route::get('contrast-eye', 'QuizController@contrastEye');
Route::get('central-vision', 'QuizController@CentralVision');
Route::get('dry-eye', 'QuizController@dryEye');
Route::get('color-vision', 'QuizController@colorVision');
Route::get('astigmatism', 'QuizController@astigmatism');
Route::resource('profile', 'ProfileController');
Route::resource('articles', 'ArticlesController');
Route::post('store-comment/{id}', 'ArticlesController@storeComment');
//Route::post('close-eye', 'QuizController@closeEye');
//Route::get('/recipes', 'RecipesController@index')->name('recipes');
//Route::get('/recipes/create', 'RecipesController@create')->name('recipes/create');
//Route::post('/recipes/create', 'RecipesController@store');
