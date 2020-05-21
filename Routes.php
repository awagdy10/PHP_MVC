<?php


Route::set('index', function(){
    IndexController::createView('home.index');
});


Route::set('foo/about', function(){
    AboutController::createView('about');
});


?>