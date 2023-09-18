<?php

use App\Http\Livewire\Home\Index as HomeIndex;
use App\Http\Livewire\About\Index as AboutIndex;
use App\Http\Livewire\Contact\Index as ContactIndex;
use App\Http\Livewire\Projects\Index as ProjectsIndex;
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

// Route::prefix('Home')->name('Home.')->group(function () {

//     Route::get('/', HomeIndex::class)->name('index');
// });


// Route::prefix('home')->name('home.')->group(function () {
//     Route::get('/', HomeIndex::class)->name('index');
// });

Route::get('/', HomeIndex::class)->name('index');

Route::prefix('about')->name('about.')->group(function () {
    Route::get('/about', AboutIndex::class)->name('about');
});

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/contact', ContactIndex::class)->name('index');
});

Route::prefix('projects')->name('projects.')->group(function () {
    Route::get('/projects', ProjectsIndex::class)->name('index');
});
