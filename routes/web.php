<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hola desde la página principal";
});

//Ruta para mostrar el listado de registros
Route::get('/posts', function() {
    return "Hola desde la página de posts";
});

//Ruta para mostrar un formulario para crear un registro
Route::get('/posts/create', function() {
    return "Aqui se mostrará el formulario para crear un post";
});

//Ruta para guardar un registro
Route::post('/posts', function() {
    return "Aqui se procesará el formulario para crear un post";
});

//Ruta para mostrar un registro
Route::get('/posts/{post}', function($post) {
    return "Aqui se mostrará el post: $post";
});

//Ruta para mostrar un formulario para editar un registro
Route::get('/posts/{post}/edit', function($post) {
    return "Aqui se mostrará el formulario para editar un post: $post";
});

//Ruta para actualizar un registro
Route::put('/posts/{post}', function($post) {
    return "Aqui se procesará el formulario para editar el post: $post";
});

//Ruta para eliminar un registro
Route::delete('/posts/{post}', function($post) {
    return "Aqui se elminará el post: $post";
});