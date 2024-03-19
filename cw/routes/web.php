<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $news = [
        'petrol price increases',
        'petrol price increases',
        'petrol price increases',
        'petrol price increases'
       
    ];
    $expired = true;
    $title = "online news";

    $title = "Todya's News";
    return view('welcome',[
        'title' => $title,
        'news' => $news,
        'exp' => $expired

    ]);
});

Route::get('/news/{id}', function($id){
return response($id);
});

