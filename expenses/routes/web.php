<?php

use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ExpenseController::class, 'index']);
Route::get('/create', [ExpenseController::class, 'displayCreateForm']);
Route::get('/edit', [ExpenseController::class, 'displayEditForm']);
