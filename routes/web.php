<?php

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
    return view('pages.dashboard-ecommerce-dashboard', ['type_menu' => 'dashboard']);
});

// Layout
Route::get('/layout-default-layout', function () {
    return view('pages.layout-default-layout', ['type_menu' => 'layout']);
});

Route::get('/forms-editor', function () {
    return view('pages.forms-editor', ['type_menu' => 'forms']);
});

Route::get('/modules-chartjs', function () {
    return view('pages.modules-chartjs', ['type_menu' => 'modules']);
});

Route::get('/features-post-create', function () {
    return view('pages.features-post-create', ['type_menu' => 'features']);
});
Route::get('/features-post', function () {
    return view('pages.features-post', ['type_menu' => 'features']);
});

// utilities
Route::get('/utilities-contact', function () {
    return view('pages.utilities-contact', ['type_menu' => 'utilities']);
});

//post&get data
Route::post('/features-post-create', []);