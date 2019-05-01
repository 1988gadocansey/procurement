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
    return view('landing-page');
})->middleware('guest');
Route::group(['middleware' => ['web']], function () {
    Auth::routes();
    Route::get('/login', function () {
        return view('auth/login');
    });
    Route::get('/home', function () {
        return view('welcome');
    });


    Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

    Route::get('profile', function () {
        // Only verified users may enter...
    })->middleware('verified');

    /*
     * Person routes ... buyer or vendor
     */
    Route::get('/register/buyer', 'PersonController@create')->name('buyer');
    Route::post('fetch_district', 'HelpController@fetchDistricts')->name('ajax_district');
    Route::post('register_save', 'PersonController@save')->name('save_person');

    /*
     * Tender routes
     */
    Route::get('/tender/create', 'TenderController@create')->name('make_tender');
    Route::get('/tender/{{tender}}/show', 'TenderController@show')->name('show_tender');
    Route::get('/tender/{{tender}}/edit', 'TenderController@edit')->name('edit_tender');
    Route::post('/tender_update', 'TenderController@update')->name('update_tender');
    Route::post('/tender/save', 'TenderController@save')->name('save_tender');
    Route::get('/tender/all', 'TenderController@viewTenders')->name('view_tenders');
    Route::delete('/tender/{{tender}}/delete', 'TenderController@destroy')->name('delete_tender');

});