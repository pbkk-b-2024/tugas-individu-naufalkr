<?php

use App\Http\Controllers\Pertemuan2Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pertemuan1Controller;
use App\Http\Controllers\Pertemuan3Controller;
use App\Http\Middleware\AuthMiddleware;

Route::get('/', function () {
    return view('welcome');
})->name('home');  // Named route untuk halaman utama

Route::prefix('/pertemuan1')->group(function(){
    Route::get('/basic', function () {
        return view('pertemuan1.basic');
    });
    Route::get('/named', fn() => view('pertemuan1.named'))->name('named');
    Route::get('/param', fn() => view('pertemuan1.param'))->name('param');
    Route::get('/param/{param1}', [Pertemuan1Controller::class, 'param1'])->name('param1');
    Route::get('/param/{param1}/{param2}', [Pertemuan1Controller::class, 'param2'])->name('param2');
    
    Route::match(['get', 'post'], '/genap-ganjil', [Pertemuan1Controller::class, 'genapGanjil'])->name('genap-ganjil');
    Route::get('/fibbonaci',[Pertemuan1Controller::class,'fibonacci'])->name('fibonacci');
    Route::get('/prima', [Pertemuan1Controller::class, 'bilanganPrima'])->name('bilangan-prima');
    
    
    Route::prefix('/group1')->group(function(){
        Route::get('/page1', fn() => view('pertemuan1.group1page1'))->name('group1page1');
        Route::get('/page2', fn() => view('pertemuan1.group1page2'))->name('group1page2');
    });
    Route::prefix('/group2')->group(function(){
        Route::get('/page1', fn() => view('pertemuan1.group2page1'))->name('group2page1');
        Route::get('/page2', fn() => view('pertemuan1.group2page2'))->name('group2page2');
    });
});

Route::prefix('/pertemuan2')->group(function(){

});

Route::get('/pertemuan1/error', fn() => view('pertemuan1.error'))->name('error');

Route::fallback(function () {
    return redirect()->route('error');
});
