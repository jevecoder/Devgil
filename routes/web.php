<?php

use App\Http\Livewire\Home\Index as HomeIndex;
use App\Http\Livewire\About\Index as AboutIndex;
use App\Http\Livewire\Services\Index as ServicesIndex;
use App\Http\Livewire\Skills\Index as SkillsIndex;
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

Route::prefix('home')->name('home.')->group(function () {

    Route::get('/', HomeIndex::class)->name('index');
});

Route::prefix('About')->name('About.')->group(function () {

    Route::get('/', AboutIndex::class)->name('index');
});

Route::get('/', HomeIndex::class)->name('index');
