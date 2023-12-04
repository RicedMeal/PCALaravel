<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'layouts\app');

Route::get('/create-project', [ProjectController::class, 'create'])->name('create-project');
Route::post('/create-project', [ProjectController::class, 'store'])->name('project.store'); 
Route::get('/draft-projects', [ProjectController::class, 'index'])->name('project_draft.index-project');


require __DIR__.'/auth.php';
