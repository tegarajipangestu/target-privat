<?php

use App\Pengajar;
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

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('pengajars/all', 'PengajarController@showallpengajar'); 

Route::get('home', 'PageController@index');
Route::get('indexpengajar', 'PengajarController@index');
Route::get('createpengajar', 'PengajarController@create');
Route::post('createpengajar', 'PengajarController@store');
Route::get('updatepengajar/{id}', 'PengajarController@showupdate');
Route::post('updatepengajar/{id}', 'PengajarController@postupdate');
Route::get('showpengajar/{id}', 'PengajarController@show');

Route::get('indexmurid', 'MuridController@index');
Route::get('createmurid', 'MuridController@create');
Route::post('createmurid', 'MuridController@store');
Route::get('updatemurid', 'MuridController@update');
Route::get('showmurid/{id}', 'MuridController@show');

Route::get('indexjadwal', 'JadwalController@index');
Route::get('createjadwal', 'JadwalController@store');
Route::get('updatejadwal', 'JadwalController@update');
Route::get('showjadwal', 'JadwalController@show');


Route::get('/', function()
	{
		$currentpage = 'home';
		return view('home',compact('currentpage'));
	});
Route::get('absensi', function()
	{
		$currentpage = 'absensi';
		$pengajars = Pengajar::all();
		$currentpage = 'absensi';
		return view('absensi',compact('currentpage','pengajars'));
	});
Route::get('home', function()
	{
		$currentpage = 'home';
		return view('home',compact('currentpage'));
	});
Route::get('table', function()
	{
		$currentpage = 'table';
		return view('table',compact('currentpage'));
	});
Route::get('calendar', function()
	{
		$currentpage = 'calendar';
		return view('calendar',compact('currentpage'));
	});
Route::get('chart', function()
	{
		$currentpage = 'chart';
		return view('chart',compact('currentpage'));
	});
Route::get('file-manager', function()
	{
		$currentpage = 'file-manager';
		return view('file-manager',compact('currentpage'));
	});
Route::get('form', function()
	{
		$currentpage = 'form';
		return view('form',compact('currentpage'));
	});
Route::get('gallery', function()
	{
		$currentpage = 'gallery';
		return view('gallery',compact('currentpage'));
	});
Route::get('icon', function()
	{
		$currentpage = 'icon';
		return view('icon',compact('currentpage'));
	});
Route::get('login', function()
	{
		$currentpage = 'login';
		return view('login',compact('currentpage'));
	});
Route::get('messages', function()
	{
		$currentpage = 'messages';
		return view('messages',compact('currentpage'));
	});
Route::get('submenu', function()
	{
		$currentpage = 'submenu';
		return view('submenu',compact('currentpage'));
	});
Route::get('table', function()
	{
		$currentpage = 'table';
		return view('table',compact('currentpage'));
	});
Route::get('tasks', function()
	{
		$currentpage = 'tasks';
		return view('tasks',compact('currentpage'));
	});
Route::get('typography', function()
	{
		$currentpage = 'typography';
		return view('typography',compact('currentpage'));
	});
Route::get('ui', function()
	{
		$currentpage = 'ui';
		return view('ui',compact('currentpage'));
	});
Route::get('widgets', function()
	{
		$currentpage = 'widgets';
		return view('widgets',compact('currentpage'));
	});