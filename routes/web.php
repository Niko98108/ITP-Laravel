<?php

use App\Http\Controllers\addItemController;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

// Use Alert;




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

    Alert::success('Success Title', 'Success Message');
    return view('welcome');

});



Route::get('/menu',function(){
    return view('menu');
});

Route::get('/admin',function(){

    return view('admin');

});

Route::get('/additem',function(){
    return view('addItem');
});

Route::get('/updateitem',function(){
    return view('updateItem');
});
Route::get('/rederect',function(){
    return redirect('admin');
});



Route::post('/save','addItemController@store')-> name('input_img');

Route::get('/admin','addItemController@display');

Route::get('/updateItem{id}','addItemController@edit');

Route::Put('/update/{id}', 'addItemController@update');

Route::get('/deleteItem{id}', 'addItemController@delete');

Route::get('/menu','addItemController@displayMenu');

Route::get('/createpdf','addItemController@Generate');

Route::get('/downloadPDF','addItemController@downloadPDF');

Route:: get('/search','addItemController@search');









