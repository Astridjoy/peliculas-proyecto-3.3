<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/movies', function () {
    return 'Ruta movies funcionando 😎';
});
