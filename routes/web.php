<?php

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
Route::group(['prefix' => LaravelLocalization::setLocale()], function()


{
    Route::get('/', 'front\homeController@index')->name('home.index');
    Route::get('/about', 'front\homeController@about')->name('about.index');
    Route::get('/contacts', 'front\homeController@contacts_index')->name('contacts.index');
    Route::post('/contacts', 'front\homeController@contacts_store')->name('contacts.store');
    Route::get('/services/{id}', 'front\homeController@services_show')->name('my_services.show');
    Route::get('/services', 'front\homeController@services_index')->name('my_services.index');

    Route::get('/projects/{id}', 'front\homeController@projects_show')->name('my_projects.show');
    Route::get('/projects', 'front\homeController@projects_index')->name('my_projects.index');
    Route::get('/plans/{id}', 'front\homeController@plans_show')->name('my_plans.show');
    Route::get('/posts', 'front\homeController@posts_index')->name('post.index');

    Route::get('/migrate', function() {
      $exitCode = Artisan::call('migrate');
      return '<h1>Cache facade value cleared</h1>';
  });

    

 Route::get('terms', function() {
    
      return view("front.terms");
  })->name("terms");
//
//Route::get('contact-us', function() {
//
//      return view("front.contact");
//  })->name("contact");
//
//Route::get('policy', function() {
//
//      return view("front.policy");
//  })->name("policy");

//
//Route::get('about', function() {
//
//      return view("front.about");
//  })->name("about");


});
