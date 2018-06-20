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
    //return view('cats/show')->with('number',10);
    $numbr = 10;
    // return = view('cats/show',compact('number'));
   	//return view('cats/show',array('number'=>100));
   	return redirect('cats');
});
Route::get('/', function () {
    
   	return redirect('cats/index')->with('cats','<h1>tiltle</h1>');
});
