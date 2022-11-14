<?php
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\ClientsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Na API REST existe os recursos que serão manipulados pelos endpoints
//Recurso: Clients
/* 
Buscar informação
GET /clients
Adicionar recurso
POST /clients
Atualiza todo o recurso
PUT /clients/:id
Atualizar partes do recurso
PATCH /clients/:id
Deletar recurso
DELETE /clients/:id
*/
Route::apiResource('clients', App\Http\Controllers\Api\ClientsController::class);