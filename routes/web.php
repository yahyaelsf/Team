<?php

use App\Bussines;
use App\Member;
use Illuminate\Support\Facades\Route;

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
    return view('Front/Home')->with([
        'members'=> Member::all(),
        'bussiness'=> Bussines::all()
    ]);
})->name('home');
Auth::routes();
Route::group(['middleware'=>'auth',['prefix'=>'AdminPanel']],function (){
    Route::get('/AdminPanel', function () {
        return view('Admin/layouts/admin');
    })->name('admin');
    Route::group(['prefix'=>'Bussines'] , function(){

        Route::get('/create','BussinesController@create')->name('bussines.create');
        Route::POST('/store','BussinesController@store')->name('bussines.store');
        Route::get('/','BussinesController@index')->name('bussines.index');
        Route::get('/edit/{id}', 'BussinesController@edit')->name('bussines.edit');
        Route::post('/update/{id}', 'BussinesController@update')->name('bussines.update');
        Route::get('/delete/{id}', 'BussinesController@destroy')->name('bussines.delete');
    });
    Route::group(['prefix'=>'Members'] , function(){

        Route::get('/create','MembersController@create')->name('member.create');
        Route::POST('/store','MembersController@store')->name('member.store');
        Route::get('/','MembersController@index')->name('member.index');
        Route::get('/edit/{id}', 'MembersController@edit')->name('member.edit');
        Route::post('/update/{id}', 'MembersController@update')->name('member.update');
        Route::get('/delete/{id}', 'MembersController@destroy')->name('member.delete');
    });
    Route::group(['prefix'=>'Applies'] , function(){
        Route::post('/store','ApplyController@store')->name('apply.store');
        Route::get('/','ApplyController@index')->name('apply.index');
        Route::get('/delete/{id}', 'ApplyController@destroy')->name('apply.delete');
        Route::get('/download/{id}','ApplyController@getDownload')->name('apply.download');
    });
    Route::group(['prefix'=>'Contacts'] , function(){
        Route::post('/store','ContactController@store')->name('contact.store');
        Route::get('/','ContactController@index')->name('contact.index');
        Route::get('/delete/{id}', 'ContactController@destroy')->name('contact.delete');
    });
});




