<?php

use App\Http\Modules\Autentificacion\Controllers\AutentificacionController;

Route::prefix('autentificacion')->group(function () {
    Route::post('login', [AutentificacionController::class, 'login']);
});