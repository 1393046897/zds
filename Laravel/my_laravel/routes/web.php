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

//一个 get 传参   站点 / hello    网页输出 内容  hello,php
Route::get('hello',function(){
    return "hello,php";
});
//一个控制器某个方法
Route::get('/user',"UserController@index");
Route::get('/index',"MyController@index");


Route::get('User/index','User\UserController@index');
Route::get('User/add','User\UserController@add');
Route::post('User/addsave','User\UserController@addsave');
Route::get('User/edit','User\UserController@edit');
Route::post('User/save','User\UserController@save');
Route::get('User/delete','User\UserController@delete');



Route::get('Admin/index','Admin\AdminController@index');
Route::post('Admin/login','Admin\AdminController@login');

Route::get('Ping/index','Ping\PingController@index');
Route::get('Ping/delete','Ping\PingController@delete');
Route::post('Ping/addsave','Ping\PingController@addsave');