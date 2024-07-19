<?php

use App\Http\Controllers\FeatureController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/features-post');
Route::get('/features-post', [FeatureController::class, 'index'])->name('features-post');
Route::get('/features-post-create', [FeatureController::class, 'create'])->name('post-create');
Route::post('/features-post-store', [FeatureController::class, 'store'])->name('post-store');
Route::get('/features-post-show/{id}', [FeatureController::class, 'show'])->name('post-view');
Route::get('/features-post-edit/{id}', [FeatureController::class, 'edit'])->name('post-edit');
Route::put('/features-post-update/{id}', [FeatureController::class, 'update'])->name('post-update');
Route::delete('/features-post-destroy/{id}', [FeatureController::class, 'destroy'])->name('post-destroy');
