<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [PatientController::class, 'index'])->name('patients.index');
Route::get('/create', [PatientController::class, 'create'])->name('patients.create');
Route::post('/store', [PatientController::class, 'store'])->name('patients.store');
Route::post('/record/{id}', [PatientController::class, 'storeRecord'])->name('records.store');
