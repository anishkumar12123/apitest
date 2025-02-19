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

Route::get('/', function () {
    return view('home'); // Modal page
});

Route::get('/getData',[StudentController::class, 'getData']);
Route::get('/boot',[StudentController::class, 'boot']);
// Route::get('/Studentget',[StudentController::class, 'Studentget']);





Route::get('/generate-captcha', [StudentController::class, 'generateCaptcha'])->name('generate.captcha');
Route::get('/result/{id}', [StudentController::class, 'showResult'])->name('result.view');
Route::post('/get-result', [StudentController::class, 'getResult'])->name('get.result');
