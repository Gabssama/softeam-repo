<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SellsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MaterielController;

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
    return view('landingpage');
});

Route::get('/forms', [FormController::class, 'index'])->name('getforms');
Route::get('/clients-more-than-30-materiel', [SellsController::class, 'clientsThirtyMateriel'])->name('getfirstquery');
Route::get('/client-materiel/{id}', [ClientController::class, 'getMateriels']);
Route::get('/clients-total-sells-desc', [SellsController::class, 'clientsTotalSells'])->name('clientstotalsells');

Route::post('/client', [ClientController::class, 'store'])->name('newclient');
Route::post('/materiel', [MaterielController::class, 'store'])->name('newmateriel');
Route::post('/client-materiel', [ClientController::class, 'updateMateriels'])->name('updatemateriels');



