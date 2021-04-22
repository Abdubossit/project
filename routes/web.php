<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PersonController;



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

Route::get('/project', function () {
    return view('project');
});
Route::get('project/{lang}', function($lang){
    App::setlocale($lang);
    return view('project');
});

Route::get('/project', 'PersonController@index');
Route::get('/contact', 'MailController@index');
Route::post('sendemail/send', 'MailController@send')->name('sendemail');
// Route::get('/project', 'PersonController@index');
Route::post('/addimage', 'PersonController@store')->name('addimage');

