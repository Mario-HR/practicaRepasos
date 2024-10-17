<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('/', [ControladorVistas::class, 'inicio'])->name('rutaInicio');

Route::get('/repaso1', [ControladorVistas::class, 'repaso1'])->name('rutaRepaso1');

Route::post('/repaso1-res', [ControladorVistas::class, 'calcRepaso1'])->name('calcRepaso1');
