<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view("welcome",[
        "name" =>"justin"
    ]);
});

Route::get('/about',function(){
    return response("<h1>justin</h1>");

});

?>