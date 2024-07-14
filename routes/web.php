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

Route::redirect('/', '/dashboard-ecommerce-dashboard');

Route::get('/dashboard-ecommerce-dashboard', function () {
    return view('pages.dashboard-ecommerce-dashboard');
});

// Layout
Route::get('/layout-default-layout', function () {
    return view('pages.layout-default-layout');
});

Route::get('/forms-editor', function () {
    return view('pages.forms-editor');
});

Route::get('/modules-chartjs', function () {
    return view('pages.modules-chartjs');
});

Route::get('/features-post-create', function () {
    return view('pages.features-post-create');
});
Route::get('/features-post', [FeatureController::class, 'index'])->name('features-post');
Route::post('/features-post-create', [FeatureController::class, 'store'])->name('post-create');
Route::get('/features-post-show/{id}', [FeatureController::class, 'show']);
Route::post('/features-post-update/{id}', [FeatureController::class, 'update']);
Route::post('/features-post-destroy/{id}', [FeatureController::class, 'destroy'])->name('post-destroy');
