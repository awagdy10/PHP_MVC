<?php

// DB example with compact
Route::set('users', 'UsersController@index');

// welcome page
Route::set('index', 'IndexController@index');

// test slash in routes
Route::set('foo/about', 'AboutController@index');


?>