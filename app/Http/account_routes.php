<?php
Route::group(['prefix' => LaravelLocalization::getCurrentLocale()], function () {

    // Authentication routes...
    Route::get('auth/signin', ['as' => 'signin','uses' => 'Auth\SignInController@getSignin']);
    Route::post('auth/signin', ['as' => 'signin','uses' => 'Auth\SignInController@postSignin']);
    Route::get('auth/logout', ['as' => 'logout','uses' => 'Auth\SignInController@getLogout']);

    // Registration routes...
    Route::get('auth/signup', ['as' => 'signup','uses' => 'Auth\SignUpController@getSignup']);
    Route::post('auth/signup', ['as' => 'signup','uses' => 'Auth\SignUpController@postSignup']);

});

// # profile
// Route::get('{profile}', ['uses' =>  'ProfilesAdminController@show']);

// Route::resource('profiles', 'ProfileController');
// Route::get('profiles/{id}/delete', ['as' => 'profiles.delete', 'uses' => 'ProfileController@destroy']);