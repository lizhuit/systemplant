<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menucontroller;

Route::get('/', function () {
    return view('inicio');
});


Route::get('principal',[menucontroller::class,'principal'])->name('principal');
Route::get('inicio',[menucontroller::class,'inicio'])->name('inicio');
Route::get('tipoevento',[menucontroller::class,'tipoevento'])->name('tipoevento');
Route::get('clientes',[menucontroller::class,'clientes'])->name('clientes');
Route::get('proveedores',[menucontroller::class,'proveedores'])->name('proveedores');
Route::get('contratarevento',[menucontroller::class,'contratarevento'])->name('contratarevento');
Route::get('cotizarevento',[menucontroller::class,'cotizarevento'])->name('cotizarevento');
Route::get('agendarcita',[menucontroller::class,'agendarcita'])->name('agendarcita');
Route::get('controlpagos',[menucontroller::class,'controlpagos'])->name('controlpagos');
Route::get('experiencias',[menucontroller::class,'experiencias'])->name('experiencias');
Route::get('reportaringresos',[menucontroller::class,'reportaringresos'])->name('reportaringresos');
Route::get('reportareventos',[menucontroller::class,'reportareventos'])->name('reportareventos');

//---------RUTAS PARA CLIENTES
Route::get('/clientes/consultar', [menucontroller::class, 'consultar'])->name('clientes.consultar');
Route::post('/clientes/registrar', [menucontroller::class, 'registrar'])->name('clientes.registrar');
Route::get('/clientes/editar/{idCli}', [menucontroller::class, 'editar'])->name('clientes.editar');
Route::put('/clientes/actualizar/{idCli}', [menucontroller::class, 'actualizar'])->name('clientes.actualizar');
Route::get('eliminacliente/{idCli}',[menucontroller::class,'eliminacliente'])->name('eliminacliente');

//---------RUTAS PARA AGENDAR CITAS
Route::post('agendar/horarios', [menucontroller::class, 'obtenerHorariosDisponibles'])->name('agendar.horarios'); // Para cargar horarios
Route::post('agendar', [menucontroller::class, 'store'])->name('agendar.store'); // Para guardar la cita

//---------RUTAS PARA REPORTAR INGRESOS
Route::post('reportaringresos/generar', [menucontroller::class, 'generarReporte'])->name('generarReporte');

//--------- RUTAS PARA PROVEEDORES
Route::get('/proveedores/consultarpro', [menucontroller::class, 'consultarpro'])->name('proveedores.consultarpro');
Route::post('/proveedores/registrarpro', [menucontroller::class, 'registrarpro'])->name('proveedores.registrarpro'); 
Route::get('/proveedores/editarpro/{idPro}', [menucontroller::class, 'editarpro'])->name('proveedores.editarpro'); 
Route::put('/proveedores/actualizarpro/{idPro}', [menucontroller::class, 'actualizarpro'])->name('proveedores.actualizarpro'); 
//Route::delete('/proveedores/eliminarpro/{idPro}', [ProveedoresController::class, 'eliminarpro'])->name('proveedores.eliminarpro');
Route::get('eliminarpro/{idPro}',[menucontroller::class,'eliminarpro'])->name('eliminarpro');

//--------- RUTAS PARA COTIZAR
Route::get('/cotizarevento', [menucontroller::class, 'cotizarevento'])->name('cotizarevento');

//-------- RUTAS PARA ENCUESTA
Route::post('/encuestas/guardaencuesta', [menucontroller::class, 'guardaencuesta'])->name('encuestas.guardaencuesta');



Route::get('inicio',[menucontroller::class,'inicio'])->name('inicio');
Route::post('guardamenu',[empleadoscontroller::class,'guardamenu'])->name('guardamenu');


