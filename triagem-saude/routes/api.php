<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;

Route::apiResource('triagem-saude', PacienteController::class);
