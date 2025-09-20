<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/probar-db', function () {
    try {
        DB::connection()->getPdo();
        return "¡Conexión a la base de datos exitosa!";
    } catch (\Exception $e) {
        return "Error al conectar con la base de datos: " . $e->getMessage();
    }
});
