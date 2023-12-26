<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produitController;
use App\Http\Controllers\livreController;

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
    return view('welcome');
});

//route du resource du TheTunisiaHand
Route::resource('produit', produitController::class);
// Route::resource('livre', livreController::class);

Route::get('/create', function () {
    return view('produit/FormulaireProduit');
})->name('produit.create');

Route::get('/produit/create',[produitController::class, 'create']);
Route::post('/produit/createProduit',[produitController::class, 'store']);

// Route::get('/livre/create',[livreController::class, 'create']);
// Route::post('/livre/createProduit',[livreController::class, 'store']);

Route::get('produit/ListeProduit',[produitController::class,'getAll']);