<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|//
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => LaravelLocalization::setLocale()], function () {

    Route::get('/clear', function () {
        \Illuminate\Support\Facades\Artisan::call('cache:clear');
        \Illuminate\Support\Facades\Artisan::call('config:cache');
        \Illuminate\Support\Facades\Artisan::call('route:clear');
        \Illuminate\Support\Facades\Artisan::call('view:clear');
    });

    Route::prefix('admin')->group(function () {
        Route::middleware(['auth'])->group(function () {





            Route::get('/dashboard', 'dashboardController@index')->name("dashboard.index");

            Route::middleware(['jobCheck'])->group(function () {


            Route::resource('/sliders', 'sliderController');

                Route::get('/settings', 'settingController@index')->name('settings.index');
                Route::get('/contact', 'settingController@show_contact')->name('contact.index');



            Route::post('/settings/update', 'settingController@update')->name('settings.update');

            Route::post('/items/update/color/{id}', 'itemController@update_color')->name('items.update.color');


            Route::get('/galaries/{id}', 'galaryController@index')->name("galaries.index");
            Route::get('/sliders/vendor/{id}', 'galaryController@vendor')->name("slider.vendor");
            Route::post('/galaries/store/{id}', 'galaryController@store')->name("galaries.store");
            Route::post('/slider/vendor/store/{id}', 'galaryController@vendor_store')->name("slider.vendor.store");

            Route::delete('/galaries/destroy/{id}', 'galaryController@destroy')->name("galaries.destroy");
            Route::delete('/slider/vendor/destroy/{id}', 'galaryController@destroy_slider')->name("slider.vendor.destroy");

                Route::resource('/roles', 'roleController');
                Route::resource('/users', 'userController');

                //islam

                Route::resource('/works', 'WorkController');
                Route::resource('/how_works', 'howWorkController');
                Route::resource('/why_works', 'whyWorkController');
                Route::resource('/services', 'ServiceController');
                Route::resource('/posts', 'postController');
                Route::resource('/projects', 'ProjectController');
                Route::resource('/plans', 'PlanController');


                //islam


            });
////////////////////////////////////////////////////////////////////////////////////

//TODO :: DASHBOARD ROUTES ENDED

///////////////////////////////////////////

            Route::get('/profile', 'profileController@index')->name('profile.index');
            Route::post('/profile/email', 'profileController@email')->name('profile.email');
            Route::post('/profile/password', 'profileController@password')->name('profile.password');
            Route::post('/profile/username', 'profileController@username')->name('profile.username');

        });
        Auth::routes();
        Route::get('logout', 'Auth\logoutController@logout')->name('user_logout');
    });

});
