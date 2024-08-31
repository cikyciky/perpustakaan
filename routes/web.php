<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\layout;
use App\Http\Controllers\ControllerMembers;
use App\Http\Controllers\ControllerBuku;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [layout::class,'dashboard']);

Route::controller(layout::class)->group(function(){
    Route::get('/admin/dashboard', 'dashboard')->name('dashboard');
    Route::get('/admin/anggota', 'anggota')->name('members');
    Route::get('/admin/table-members', 'tabelMembers')->name('data-members');
    Route::get('/admin/edit-members', 'editMembers')->name('edit-members');

    Route::get('/admin/buku', 'books')->name('form-buku');
    Route::get('/admin/edit-buku', 'editBuku')->name('edit-buku');
    Route::get('/admin/tabel-buku', 'tabelBuku')->name('data-buku');

});

Route::controller(ControllerMembers::class)->group(function(){
    Route::post('/members', 'store')->name('insertMember'); 
    Route::delete('/members/{id}','destroy')->name('hapus');
    Route::get('/members/{id}','edit')->name(('edit-id'));
    Route::post('/members/{id}', 'update')->name('update');
    
});

Route::controller(ControllerBuku::class)->group(function(){
    Route::post('/books', 'store')->name('insert-book'); 
    Route::get('/books/{id}','destroy')->name('delete');
    Route::get('/books/{id}','edit')->name(('edit-buku'));
    Route::post('/books/{id}', 'update')->name('update-buku');
    
});

    


