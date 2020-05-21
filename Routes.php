<?php


Route::set('index', function(){
    Index::createView();
});


Route::set('about', function(){
    echo "about page";
});

Route::set('fuck/you', function(){
    echo "fuck page";
});


?>