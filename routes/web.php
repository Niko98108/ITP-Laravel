<?php

use App\Http\Controllers\addItemController;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
// use Barryvdh\DomPDF\PDF;
// use Barryvdh\DomPDF\Facade as PDF;

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


    return view('welcome');

});



Route::get('/menu',function(){   // menu page
    return view('menu');
});

Route::get('/admin',function(){ // admin page

    return view('admin');

});

Route::get('/additem',function(){   //add btn in admin view
    return view('addItem');
});

Route::get('/updateitem',function(){  //update view
    return view('updateItem');
});
Route::get('/rederect',function(){ //admin btn in search view
    return redirect('admin');
});



Route::post('/save','addItemController@store')-> name('input_img'); //add btn in additem view

Route::get('/admin','addItemController@display');    // admin view display all data

Route::get('/updateItem{id}','addItemController@edit'); // edit btn in admin view

Route::Put('/update/{id}', 'addItemController@update'); //update btn in updateItem view

Route::get('/deleteItem{id}', 'addItemController@delete'); //delete btn in admin view

Route::get('/menu','addItemController@displayMenu'); // disaplay function

Route::get('/createpdf','addItemController@Generate'); // pdf btn in admin view

Route::get('/downloadPDF','addItemController@downloadPDF'); // download btn in pdf view

Route:: get('/search','addItemController@search'); //serch box in admin view









