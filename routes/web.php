<?php

use App\Http\Controllers\{
    ConsultaController,
    ConsultasController,
    EspecialidadeController,
    MedicoController,
    PacienteController
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
    Route::delete("/especialidade/delete/{id}", [EspecialidadeController::class, 'delete'])->name("especialidade.delete");

    Route::get("/medico/index", [MedicoController::class, 'index'])->name("medico.index");
    Route::get("/medico/create", [MedicoController::class, 'create'])->name("medico.create");
    Route::post("/medico/store", [MedicoController::class, 'store'])->name("medico.store");
    Route::get("/medico/edit/{id}", [MedicoController::class, 'edit'])->name("medico.edit");
    Route::put("/medico/{id}", [MedicoController::class, 'update'])->name("medico.update");
    Route::delete("/medico/delete/{id}", [MedicoController::class, 'delete'])->name("medico.delete");

    Route::get("/paciente/index", [PacienteController::class, 'index'])->name("paciente.index");
    Route::get("/paciente/create", [PacienteController::class, 'create'])->name("paciente.create");
    Route::post("/paciente/store", [PacienteController::class, 'store'])->name("paciente.store");
    Route::get("/paciente/edit/{id}", [PacienteController::class, 'edit'])->name("paciente.edit");
    Route::put("/paciente/{id}", [PacienteController::class, 'update'])->name("paciente.update");
    Route::delete("/paciente/delete/{id}", [PacienteController::class, 'delete'])->name("paciente.delete");

    Route::get("/consulta/index", [ConsultaController::class, 'index'])->name("consulta.index");
    Route::get("/consulta/create", [ConsultaController::class, 'create'])->name("consulta.create");
    Route::post("/consulta/store", [ConsultaController::class, 'store'])->name("consulta.store");
    Route::get("/consulta/edit/{id}", [ConsultaController::class, 'edit'])->name("consulta.edit");
    Route::put("/consulta/{id}", [ConsultaController::class, 'update'])->name("consulta.update");
    Route::delete("/consulta/delete/{id}", [ConsultaController::class, 'delete'])->name("consulta.delete");
});

Route::get('/', function () {
    return view('auth.login');
});

require __DIR__ . '/auth.php';
