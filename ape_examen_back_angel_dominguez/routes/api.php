<?php
use App\Http\Controllers\UserController;
use Symfony\Component\Routing\Attribute\Route;

// ... otras rutas ...

Route::get('/users', [UserController::class, 'index']);
