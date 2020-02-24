<?php

Route::get('/', 'Index\IndexController');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
