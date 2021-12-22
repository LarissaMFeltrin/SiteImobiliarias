<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\SiteController;

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

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/empresa', [SiteController::class, 'empresa'])->name('empresa');
Route::get('/contato', [SiteController::class, 'contato'])->name('contato');

Route::get('/venda', [SiteController::class, 'venda'])->name('venda');

Route::get('/imovel/', [SiteController::class, 'imovel'])->name('imovel');
