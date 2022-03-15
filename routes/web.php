<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

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

Route::get('/', [PessoaController::class, 'index']); 

Route::get('/pessoas/create', [PessoaController::class, 'create']);

Route::get('/pessoas/{id}', [PessoaController::class, 'show']);

Route::post('/pessoas', [PessoaController::class, 'store']);

Route::get('/pessoas/delete/{id}', [PessoaController::class, 'destroy']);

Route::post('/pessoas/update/{id}', [PessoaController::class, 'update']);