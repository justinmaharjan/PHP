<?php

namespace App\Http\Controllers;

use Illuminate\Http\UserModel;
use GuzzleHttp\Prs7\Response;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public static function index()
    {
        return view('welcome', ['name' => UserModel::all()]);
    }
    public static function displayName()
    {
        return view('welcome', ['name' => 'mhr']);
    }
}
