<?php

use Illuminate\Support\Facades\Route;
//de esta manera ya podemos acceder al controlador
use App\Http\Controllers\EmpleadoController;

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

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/ppal', function () {
    return view('empleado.index');

});

Route::get('/empleado/create', [EmpleadoController::class,'create']);
 */
Route::resource('empleado', EmpleadoController::class);


