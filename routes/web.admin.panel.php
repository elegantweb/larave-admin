<?php

Route::get('/', 'DashboardController@show')->name('dashboard');

Route::get('notifications', 'NotificationController@index')->name('notifications.index');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
