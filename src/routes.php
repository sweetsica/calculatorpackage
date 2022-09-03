<?php
use Illuminate\Support\Facades\Route;
use Sweetsica\Calculator\CalculatorController;

Route::get('calculator',function(){
    echo "Hello from sweetsica calculator";
});

Route::get('add/{a}/{b}',[CalculatorController::class,'add']);
Route::get('substract/{a}/{b}',[CalculatorController::class,'substract']);
