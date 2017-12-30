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
/*passage de parametre à travers le controler TestController
*/Route::get('/contact/{name}/{id}','TestController@Testdata');

/*Passage de deux parmaetres name et id
*//*Route::get('/contact/{name}/{id}',function($name,$id){

	echo "bonjour".$name." "  .$id;
 })->where('name=>[a-z A-Z]+','id=>[1-9]');*/