<?php

use App\Livewire\Tasks\TaskCreate;
use App\Livewire\Tasks\TaskIndex;
use App\Livewire\Tasks\TaskShow;
use App\Livewire\Tasks\TaskUpdate;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('task/',TaskIndex::class)->name('task');
Route::get('task/create',TaskCreate::class);
Route::get('task/update',TaskUpdate::class);
Route::get('task/{task}',TaskShow::class);
