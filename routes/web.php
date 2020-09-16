<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'inicio'])->name('inicio');

Route::get('/detalle/{id}', [PagesController::class, 'detalle'])->name('notas.detalle');

Route::post('/',[PagesController::class, 'crear'])->name('notas.crear');

//Route::resource('fotos', PagesController::class, ['except' => ['fotos', 'edit']]);

Route::get('fotos', [PagesController::class, 'fotos'])->name('fotos');

Route::get('blog', [PagesController::class, 'blog'])->name('noticias');

Route::get('nosotros/{nombre?}', [PagesController::class, 'nosotros'])->name('nosotros');
