<?php


Route::set('index', function(){
    IndexController::getUsers();
});


Route::set('foo/about', function(){
    AboutController::createView('about');
});


?>