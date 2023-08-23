<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
;

Route::post('/register-employee', [EmployeeController::class,'store']);

Route::get('/employees', [EmployeeController::class,'index']);
Route::get("/employee/{id}", [EmployeeController::class,'show']);
Route::put("/employee/{id}",[EmployeeController::class,'update']);
Route::delete("/employee/{id}",[EmployeeController::class,'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
