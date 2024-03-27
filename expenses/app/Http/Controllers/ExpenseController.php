<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function displayCreateForm()
    {
        return view('create');
    }

    public function displayEditForm()
    {
        return view('edit');
    }
}


