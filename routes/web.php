<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TesteController;
use App\Models\Event;

// rota principal
Route::get('/', [EventController::class,'index']);

// metodo post formulario criar eventos  ..ROTA EVENTS
Route::post('/events', [EventController::class,'store']);

// rota pra acessar pag criar novo evento
Route::get('/evento/creat', [EventController::class,'creat']);

// rota pra acessar pag criar novo evento
Route::get('/events/{id}', [EventController::class,'show']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
