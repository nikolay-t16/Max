<?php

Route::get('/', 'Index\IndexController');
Route::get('/expertise/{expertise}', 'Expertise\ExpertiseItemController');
Route::get('/expertise', 'Expertise\ExpertiseController');
Route::get('/service/{service}', 'Service\ServiceItemController');
Route::get('/service', 'Service\ServiceController');
Route::get('/contacts', 'Contacts\ContactsController');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/{url}', 'Page\PageController');
