<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AppointmentController;

Route::get('/test', function () {
    return ['api' => 'OK'];
});

Route::apiResource('appointments', AppointmentController::class);
