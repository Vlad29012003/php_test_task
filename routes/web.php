<?php

use App\Http\Controllers\AccountController;

// Добавля маршруты для AccountController
Route::resource('accounts', AccountController::class);
