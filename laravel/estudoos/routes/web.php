<?php
//Necessário importar o controller
use App\Http\Controllers\UserController;
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
//Criando uma rota com método GET que conecta ao controller
//Para se conectar ao controller é preciso referenciar o controle e o metodo que está sendo chamado.
Route::get('/users', [UserController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
