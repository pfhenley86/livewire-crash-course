<?php

use App\Livewire\Tasks\TaskCreate;
use App\Livewire\Tasks\TaskIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks', TaskIndex::class);
Route::get('/tasks/create', TaskCreate::class);