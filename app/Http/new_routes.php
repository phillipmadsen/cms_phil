<?php





Route::group(['prefix' => LaravelLocalization::getCurrentLocale()], function ()
{
    Route::group([
        'prefix'     => 'admin',

        'middleware' => ['before', 'sentinel.auth', 'sentinel.permission']
    ], function ()
    {

        Route::resource('products', 'ProductController', ['before' => 'hasAccess:products', 'except' => [  'show' ]]);
        Route::get('products/{id}/delete', [
            'as'   => 'admin.products.delete',
            'uses' => 'ProductController@confirmDestroy'
        ])->where('id', '\d+');

    });
});
