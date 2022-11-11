<?php

use App\Http\Controllers\ProbleSolving\ProblemSolvingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('numbers_without5/{start}/{end}', [ProblemSolvingController::class, 'first_example']);
Route::get('string_search/{input_string}', [ProblemSolvingController::class, 'second_example']);
Route::get('third/{q}/{n}', [ProblemSolvingController::class, 'third_example']);
