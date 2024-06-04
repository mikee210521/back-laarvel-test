<?php

namespace App\Http\Controllers;

use App\Models\User;
use DateTime;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('userDomicilio')->get()->map(function ($user) {
            $user->edad = $user->fecha_nacimiento ? \Carbon\Carbon::parse($user->fecha_nacimiento)->age : null;
            return $user;
        });

        return response()->json($users);
    }


    private function calculateAge($birthdate)
    {
        // Primero, asegurémonos de que la fecha de nacimiento no sea nula
        if (is_null($birthdate)) {
            return null;
        }

        // Creamos un objeto DateTime con la fecha de nacimiento
        try {
            $birthdate = new DateTime($birthdate);
        } catch (\Exception $e) {
        }
        // Creamos un objeto DateTime con la fecha actual
        $today = new DateTime('today');

        // Calculamos la diferencia entre las dos fechas
        $age = $birthdate->diff($today);

        // Devolvemos solo el año de la diferencia, que representa la edad
        return $age->y;
    }
}
