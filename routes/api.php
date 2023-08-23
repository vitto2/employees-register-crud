<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
;

Route::post('/cadastro-funcionario', [EmployeeController::class,'store']);

Route::get('/funcionarios', [EmployeeController::class,'index']);

Route::get("/funcionarios/{id}", [EmployeeController::class,'show']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
