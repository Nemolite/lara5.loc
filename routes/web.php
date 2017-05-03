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
  //  return view('welcome');
//});

//Route::get('/', function () {
  //return view('index');
//});

Route::get('/','IndexController@index');


// создал тестовый маршрут
Route::get('/test', function () {
	echo "<h1>";
	echo "тестовый вывод";
	echo "</h1>";
 return;
});
// test viwe .env
Route::get('/env', function () {
	echo "<pre>";
	print_r($_ENV);
	echo "</pre>";
	//echo config('app.locale');
	echo Config::set('app.locale','ru');// установка насройки, при этом в файле не будут внесены изменения
	echo Config::get('app.locale');
	echo "<br />";
	echo env('APP_NAME');
 return;
});


Route::post('/comments', function () {
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
    return;
});

/*
Route::match(['get','post'],'/comments', function () {
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
   //return;
});
*/





