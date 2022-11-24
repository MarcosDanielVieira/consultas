<?php

use App\Http\Controllers\{
    ConsultasController,
    EspecialidadeController,
    MedicoController
};
use GuzzleHttp\Middleware;
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

Route::middleware(["auth"])->group(function () {

    Route::get("/consulta", [ConsultasController::class, 'index'])->name("consultas.index");

    Route::get("/especialidade/create", [EspecialidadeController::class, 'create'])->name("especialidade.create");
    Route::post("/store", [EspecialidadeController::class, 'store'])->name("especialidade.store");
    Route::get("/especialidade/index", [EspecialidadeController::class, 'index'])->name("especialidade.index");
    Route::get("/especialidade/edit/{id}", [EspecialidadeController::class, 'edit'])->name("especialidade.edit");
    Route::put("/especialidade/{id}", [EspecialidadeController::class, 'update'])->name("especialidade.update");

    Route::get("/medico/index", [MedicoController::class, 'index'])->name("medico.index");
    Route::get("/medico/create", [MedicoController::class, 'create'])->name("medico.create");
    Route::post("/medico/store", [MedicoController::class, 'store'])->name("medico.store");
    Route::get("/medico/edit/{id}", [MedicoController::class, 'edit'])->name("medico.edit");
    Route::put("/medico/{id}", [MedicoController::class, 'update'])->name("medico.update");
});

Route::get('/', function () {
    return view('auth.login');
});

require __DIR__ . '/auth.php';
