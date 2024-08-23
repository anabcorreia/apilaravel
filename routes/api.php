<?php

use App\Http\Controllers\SportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/minhas-informacoes', function () {
    return response()->json([
        'nome' => 'Ana Beatriz Correia Ribeiro',
        'ra' => '1380002656'
    ]);
});

Route::apiResource('/sports', SportController::class);