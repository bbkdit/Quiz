<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {
Route::get('show/{id}','MyController@show');
Route::get('edit/{id}','MyController@edit');
Route::patch('update/{id}','MyController@update');
Route::get('delete/{id}','MyController@delete');

Route::get('open','MyController@create');
Route::post('myrout','MyController@store');
Route::get('index','MyController@index');

Route::post('quiz/{id}/question/add',
	[

	'middleware' => ['auth',] , 
	'uses' => 'QuizzController@createNewQuestion',
	]);

    Route::get('myrout3/{id}','QuizzController@showrelation');
	Route::get('deleteqz/{id}','QuizzController@delete');
    Route::get('/qsngt','QuizzController@getQuizesQsn');
     Route::get('/display/quiz/{id}','QuizzController@displayqsn');

    //routes here

    //Route::get('/', function () {
   // return view('welcome');
   //});

   Route::get('/','QuizzController@showatwlcm');
    Route::get('/profile','QuizzController@userprofile');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('createn', function () {
    return view('create');
});

Route::get('/quiz','QuizzController@getQuizes');
Route::get('/create/{id}','QuizzController@getCreateQuizPage');
Route::post('new_quiz','QuizzController@createNewQuiz');
Route::post('/new_question/{id}/add','QuizzController@createNewQuestion');
Route::get('/quizqsn','QuizzController@getQuizesQsn');


});
