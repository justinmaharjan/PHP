<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public static function index()
    {
        return view('welcome', ['name' => 'justin']);
    }
    public static function displayName()
    {
        return response("justin is my name 🤵");
    }
}
