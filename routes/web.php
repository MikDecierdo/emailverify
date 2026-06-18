<?php

use App\Http\Controllers\FlashMessageController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/dashboard', function () {
    $totalStudents = \App\Models\Student::count();
    return view('dashboard', compact('totalStudents'));
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/pdf', [ItemController::class, 'pdfview'])->name('pdfview');

Route::post('/student/store', [FlashMessageController::class, 'storeStudent'])->name('student.store')->middleware('auth');
Route::get('/student/view', [FlashMessageController::class, 'viewStudent'])->name('student.view')->middleware('auth');
Route::get('/student/{id}/edit', [FlashMessageController::class, 'editStudent'])->name('student.edit')->middleware('auth');
Route::put('/student/{id}/update', [FlashMessageController::class, 'updateStudent'])->name('student.update')->middleware('auth');
Route::post('/student/{id}/delete', [FlashMessageController::class, 'deleteStudent'])->name('student.delete')->middleware('auth');
Route::delete('/student/{id}/confirm-delete', [FlashMessageController::class, 'confirmDelete'])->name('student.confirm-delete')->middleware('auth');

Route::prefix('flash')->group(function () {
    Route::post('/save-student', [FlashMessageController::class, 'saveStudent'])->name('flash.save');
    Route::post('/invalid-action', [FlashMessageController::class, 'invalidAction'])->name('flash.invalid');
    Route::post('/restricted-page', [FlashMessageController::class, 'restrictedPage'])->name('flash.restricted');
    Route::post('/system-notice', [FlashMessageController::class, 'systemNotice'])->name('flash.notice');
    Route::post('/empty-form', [FlashMessageController::class, 'emptyForm'])->name('flash.empty');
});

require __DIR__.'/auth.php';
