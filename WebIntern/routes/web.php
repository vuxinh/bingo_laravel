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
// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('bingoGame','HomeController@bingo');



// <?php
// // use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('allUser','UserController@find');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('start/{flag}', 'HomeController@start');
Route::get('save', 'CardDetailController@saveDb');//goi den ham saveDb
Route::get('getDataCardDetail/{id}', 'CardDetailController@getDataCardDetail');


?>
