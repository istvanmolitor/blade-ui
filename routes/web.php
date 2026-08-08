<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Molitor\BladeUi\Http\Controllers\ComponentShowcaseController;

Route::get('/', [ComponentShowcaseController::class, 'index'])->name('index');
Route::get('/alerts', [ComponentShowcaseController::class, 'alerts'])->name('alerts');
Route::get('/buttons', [ComponentShowcaseController::class, 'buttons'])->name('buttons');
Route::get('/feedback', [ComponentShowcaseController::class, 'feedback'])->name('feedback');
Route::get('/form', [ComponentShowcaseController::class, 'form'])->name('form');
Route::get('/layout', [ComponentShowcaseController::class, 'layout'])->name('layout');
Route::get('/list', [ComponentShowcaseController::class, 'list'])->name('list');
Route::get('/typography', [ComponentShowcaseController::class, 'typography'])->name('typography');
