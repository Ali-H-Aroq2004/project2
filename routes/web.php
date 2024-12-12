<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    $name = '';
    $departments = [
        '0' => 'technical',
        '1' => 'financial',
        '2' => 'sales'
    ];
    return view('about' , compact('name' , 'departments'));
});
Route::post('/about', function (){
    $name = $_POST['name'];
    $departments = [
        '0' => 'technical',
        '1' => 'financial',
        '2' => 'sales'
    ];
    return view('about' , compact('name', 'departments'));
});


Route::get('/tasks',  [TaskController::class , 'index']);

Route::post('/create', [TaskController::class , 'create']);

Route::post('/delete/{id}' , [TaskController::class , 'destroy']);

Route::post('/Edit/{id}', [TaskController::class , 'edit']);

Route::post('/update', [TaskController::class , 'update']);
