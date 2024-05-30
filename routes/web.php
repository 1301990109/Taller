<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::get('/',HomeController::class); 
Route::controller(CursoController::class)->group(function(){
    Route::get('cursos','index');
    Route::get('cursos/create','create');
    Route::get('cursos/{$curso}','show');
    Route::post('cursos','store');
    Route::get('cursos/{$curso}/edit','edit');
    Route::put('cursos/{$curso}','update');
    Route::delete('cursos/{$curso}','destroy');
});
//Route::resource('games', App\Http\Controllers\CursoController::class);








/*Route::get('cursos/{curso}/{categoria?}',function($curso,$categoria=null){
    if ($categoria){
    return "Bienvenido :$curso, $categoria";}
    else{return "Bienvenido :$curso";

    }
});*/