<?php

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

Route::get('/', function () {
    return 'Home';
});

Route::prefix('/company')->group(function () {
    
    Route::get('/about_us/{id}', function ($id) {
        return 'About us: '.$id;
        //return request()->segment(2); //Obtener segmento del url
    });

    Route::get('/contact', function () {
        return 'Contact';
    });

});