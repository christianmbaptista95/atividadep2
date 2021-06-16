<?php
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\TurmaController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::resource('/aluno',AlunoController::class);

Route::resource('/turma',TurmaController::class);

Route::resource('/disciplina',DisciplinaController::class);

Route::get('/home', function(){
    return view ('page_home.index');

})->name('home');
