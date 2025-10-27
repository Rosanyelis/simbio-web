<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/nosotros', [WebController::class, 'about'])->name('about');
Route::get('/productos', [WebController::class, 'products'])->name('products');
Route::get('/productos/categoria/{categoryId}', [WebController::class, 'productoByCategory'])->name('products.category');
Route::get('/productos/linea', [WebController::class, 'productoByLine'])->name('products.line');
Route::get('/productos/buscar', [WebController::class, 'searchName'])->name('products.search');
Route::get('/productos/{productId}', [WebController::class, 'productDetail'])->name('products.detail');
Route::get('/productos/modal/{productId}', [WebController::class, 'productModal'])->name('products.modal');
Route::get('/equipo/modal/{teamId}', [WebController::class, 'teamModal'])->name('team.modal');
Route::get('/tecnologia', [WebController::class, 'tecnology'])->name('tecnology');
Route::get('/contacto', [WebController::class, 'contact'])->name('contact');
Route::post('/contacto/enviar', [WebController::class, 'send'])->name('contact.send');
Route::get('/terminos-y-condiciones-politica-de-privacidad', [WebController::class, 'privacyPolicy'])->name('privacy.policy');
// Route::get('/aviso-legal', [WebController::class, 'legalNotice'])->name('legal.notice');
// Route::get('/sitemap.xml', [WebController::class, 'sitemap'])->name('sitemap');
// Route::get('/robots.txt', [WebController::class, 'robots'])->name('robots');