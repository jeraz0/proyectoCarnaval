<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\propuestaController;
use App\Http\Controllers\categoriaController;
use App\Http\Controllers\personaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('categorias',categoriaController::class)->names('super.categorias');
Route::resource('personas',personaController::class)->names('super.personas');
Route::resource('propuestas',propuestaController::class)->names('super.propuestas');


Route::get('/',[categoriaController::class,'index'])->name('categorias.index');
Route::get('categorias/{$id}',[categoriaController::class,'show'])->name('categorias.mostrar');

Route::get('propuesta',[propuestaController::class,'index'])->name('propuestas.index');
Route::get('propuesta/store',[propuestaController::class,'store'])->name('propuestas.store');
Route::get('propuesta/edit',[propuestaController::class,'edit'])->name('propuestas.edit');
Route::get('propuesta/update',[propuestaController::class,'update'])->name('propuestas.update');
Route::get('propuesta/destroy',[propuestaController::class,'destroy'])->name('propuestas.destroy');
Route::get('propuesta/calificar/{$id}',[propuestaController::class,'calificar'])->name('propuestas.calificar');



Route::get('persona',[personaController::class,'index'])->name('personas.index');
Route::get('persona/store',[personaController::class,'store'])->name('personas.store');

