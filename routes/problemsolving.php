<?php

use App\Http\Controllers\ProbleSolving\ProblemSolvingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('numbers_without5/{start}/{end}', [ProblemSolvingController::class, 'numbers_without_5']);
Route::get('string_search/{input_string}', [ProblemSolvingController::class, 'input_string']);
Route::get('reduce_steps/{q}/{n}', [ProblemSolvingController::class, 'reduce_steps']);
