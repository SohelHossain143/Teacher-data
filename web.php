<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



use App\Http\Controllers\TeacherController;

Route::get('/teacheradd', [TeacherController::class, 'viewteacheradd'])->name('add-teacher');

Route::post('/store-teacher', [TeacherController::class, 'storeteacher'])->name('teacher-store');