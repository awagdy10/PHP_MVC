<?php

// DB example with compact
Route::get('users', 'UsersController@index');

// welcome page
Route::get('index', 'IndexController@index');

// test slash in routes
Route::get('foo/about', 'AboutController@index');


?>