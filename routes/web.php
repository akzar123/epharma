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
use App\medicine;

Route::get('/loginPage', function () {
    return view('Admin/login');
});

Route::get('/adminPage', function () {
	if(session('username'))
	{
		return view('Admin/admin');
	}
	else
	{
		return view('Admin/login');
	}
});

Route::post('/adminLogin','adminController@adminLogin');

Route::get('/alogout','adminController@alogout');

Route::get('/viewMed', function () {
	if(session('username'))
	{
		$res = medicine::all();
		return view('Admin/viewMed',compact('res'));
	}
	else
	{
		return view('Admin/login');
	}
	
});

Route::post('/addEntry', 'medicineController@addEntry');

Route::get('/add', function() {
	if(session('username'))
	{
		return view('Admin/addData');
	}
	else
	{
		return view('Admin/login');
	}
});

Route::get('edit/{id}','medicineController@edit');

Route::post('/editqry','medicineController@editqry');

Route::get('delete/{id}','medicineController@delete');

Route::get('/', function () {
    return view('index');
});

Route::get('/viewIndex', function() {
	$res = medicine::all();
	return view('viewIndex',compact('res'));
});