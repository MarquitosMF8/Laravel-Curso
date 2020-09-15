<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'inicio']);

//Route::resource('fotos', PagesController::class, ['except' => ['fotos', 'edit']]);

Route::get('fotos', [PagesController::class, 'fotos'])->name('fotos');

Route::get('blog', [PagesController::class, 'blog'])->name('noticias');

Route::get('nosotros/{nombre?}', [PagesController::class, 'nosotros'])->name('nosotros');
