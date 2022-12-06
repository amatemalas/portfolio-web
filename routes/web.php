<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/', function () {
    return view('index');
});

Route::post('/contacts/front/store', [ContactController::class, 'store'])->name('contacts.front.store');

Auth::routes(['register' => false]);

Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::resources([
        'contacts' => ContactController::class,
    ]);

    Route::get('/artisan/migrate', function () {
        Artisan::call('migrate');
        dd(Artisan::output());
    })->name('artisan.migrate');
    Route::get('/artisan/cache', function () {
        Artisan::call('cache:clear');
        dd(Artisan::output());
    })->name('artisan.cache');
});

