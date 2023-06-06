<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact-us', function () {
    return view('contacts');
})->name('contacts');
Route::resource('services', ServiceController::class)
    ->name('show', 'service-details')
    ->name('index', 'services');
Route::resource('events', EventController::class)
    ->name('show', 'event-details')
    ->name('index', 'events');

Route::get('/sitemap.xml', [SitemapController::class, 'index']);
Route::get('/sitemap.xml/services', [SitemapController::class, 'services']);
