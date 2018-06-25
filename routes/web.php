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
use Illuminate\Support\Facades\Input;

//DB::enableQueryLog();
Route::get('/', function () {
    //return view('cats/show')->with('number',10);
  	//$numbr = 10;
    //return = view('cats/show',compact('number'));
   	//return view('cats/show',array('number'=>100));
   return redirect('cats');
});

//List cats
Route::get('/cats', function () {    
   	$cats = Furbook\Cat::all();
    //dd($cats[0]->breed);
    return view('cats/index')->with('cats', $cats);
});

//Display list cat of breed name
Route::get('/cats/breeds/{name}', function ($name) {
   $breed = Furbook\Breed::with('cats')
   ->where('name',$name)
   ->first();
   return view('cats.index')
      ->with('breed',$breed)
      ->with('cats',$breed->cats);
});


//Display info cat
Route::get('/cats/{id}', function ($id) {
  $cat = Furbook\Cat::find($id);
//    dd($cat);
  return view('cats.show')->with('cat',$cat);
})->where('id', '[0-9]+');

//Create Cat
Route::get('/cats/create', function () {    
   return view('cats.create');
});

Route::post('/cats', function () {
  $cat = Furbook\Cat::create(Input::all());
        dd(Request::all());
   	return redirect('cats/'.$cat->id)->with('cat',$cat)
    ->withSuccess('Create cat success');
});

//Update Cat
Route::get('/cats/{id}/edit', function ($id) {  
  $cat = Furbook\Cat::find($id);
  return view('cats.edit')->with('cat', $cat);
});

Route::put('/cats/{id}', function ($id) {
//    echo $id;
  $cat = Furbook\Cat::find($id);
//    var_dump(DB::getQueryLog());
//    dd($cat);

  $cat->update(Input::all());
//    dd(DB::getQueryLog());
  return redirect('cats/'.$cat->id)
  ->withSuccess('Updater cat success');

});

//Delete cat
Route::get('/cats/{id}/delete', function ($id) {
    $cat = Furbook\Cat::find($id);
    $cat->delete();
   	return redirect('cats')
        ->withSuccess('Delete cat success');
});
 Route::delete('/cats/{id}', function () {
     $id = Input::post('id');
     $cat = Furbook\Cat::find($id);
     $cat->delete();
     return redirect('cats')
         ->withSuccess('Delete cat success');
 });
 Route::resource ('cat','CatController');