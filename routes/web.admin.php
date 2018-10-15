<?php

Route::group([
    'prefix' => config('admin.auth.routes.prefix'),
    'middleware' => config('admin.auth.routes.middleware'),
], function () {

    require('web.admin.auth.php');

});

Route::group([
    'prefix' => config('admin.panel.routes.prefix'),
    'middleware' => config('admin.panel.routes.middleware'),
], function () {

    require('web.admin.panel.php');

});
