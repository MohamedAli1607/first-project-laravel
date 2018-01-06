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
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/formation','FormationController@index');
/*passage de parametre à travers le controler TestController
*///Route::get('/contact/{name}/{id}','TestController@Testdata');

/*Passage de deux parmaetres name et id
*//*Route::get('/contact/{name}/{id}',function($name,$id){

	echo "bonjour".$name." "  .$id;
 })->where('name=>[a-z A-Z]+','id=>[1-9]');*/



Route::get('/home', 'HomeController@index')->name('home');


Route::get('/test1',function(){
	return view ('test.test1');
});
Route::get('/test2',function(){
	return view ('test.test2');
});
Route::get('/test3',function(){
	return view ('test.test3');
});