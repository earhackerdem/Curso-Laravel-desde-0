<?php

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
    //Min 3:13
    // return view('welcome');
    return "Bienvenido a la página principal";
});

//Min 4:10
Route::get('cursos',function(){
    return "Bienvenido a la página cursos";
});

//Min 10:05
Route::get('cursos/create', function () {
    return "En esta página podrás crear un curso";
});


//Min 6:15
// Route::get('cursos/{curso}',function($curso){
//     return "Bienvenido al curso: $curso";
// });

//Min 11:56
// Route::get('cursos/{cursos}/{categoria}', function ($curso,$categoria) {
//     return "Bienvenido al curso $curso, de la categoría $categoria";
// });

//Min 13:34

Route::get('cursos/{cursos}/{categoria?}', function ($curso,$categoria = null) {
    if($categoria){
        return "Bienvenido al curso $curso, de la categoría $categoria";
    }else{
        return "Bienvenido al curso: $curso";
    }
});
