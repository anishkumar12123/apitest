<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\StudentController;
use App\Models\Student;

Route::get('/students-view', function () {
    return view('Student'); // Blade file ka path
});


Route::get('/getData',[StudentController::class, 'getData']);
