<?php

Route::group([
    'namespace' => 'Elegant\Admin\Http\Controllers\Auth',
], function () {

    Route::get('logout', 'LoginController@logout')->name('logout');

});

Route::group([
    'namespace' => 'Elegant\Admin\Http\Controllers\Panel',
], function () {

    Route::get('/', 'DashboardController@index')->name('dashboard');

});

Route::group([
    'namespace' => config('admin.panel.routes.namespace'),
], function () {

    require(base_path('routes/admin.panel.php'));

});
