<?php
use App\Http\Controllers\RestController;

use Illuminate\Support\Facades\Route;


Route::get('/characters', [RestController::class, 'ReturnAllRecords']);
Route::get('/character/{id}', [RestController::class, 'ReturnSingleCharacter']);

