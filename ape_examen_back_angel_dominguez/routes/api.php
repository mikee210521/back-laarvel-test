<?php
use App\Http\Controllers\UserController;
use Symfony\Component\Routing\Attribute\Route;


Route::get('/users', [UserController::class, 'index']);
