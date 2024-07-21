<?php

use App\Http\Controllers\Ajout_CaddieController;
use App\Http\Controllers\Book_RegisterController;
use App\Http\Controllers\BoutiqueController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\del_CaddieController;
use App\Http\Controllers\Delete_BookController;
use App\Http\Controllers\Edit_BookController;
use App\Http\Controllers\Find_BookController;
use App\Http\Controllers\Voir_CaddieController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix("/boutique")->name('boutique.')->controller(BoutiqueController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/{id}','affiche')->name('affiche');
});

Route::prefix("/find_book")->name('find_book.')->controller(Find_BookController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::post('/traitement','traitement')->name('traitement');
});

Route::prefix("/book_register")->name('book_register.')->controller(Book_RegisterController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::post('/traitement','traitement')->name('traitement');
});

Route::prefix("/edit_book")->name('edit_book.')->controller(Edit_BookController::class)->group(function(){
    Route::get('/{id}','index')->name('index');
    Route::post('/traitement','traitement')->name('traitement');
});

Route::prefix("/voir_caddie")->name('voir_caddie.')->controller(Voir_CaddieController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::post('/traitement','traitement')->name('traitement');
});

Route::get('/delete_book/{id}',[Delete_BookController::class,'delete'])->name('delete_book');

Route::get('/del_caddie',[del_CaddieController::class,'delete'])->name('del_caddie');

Route::post('/commentaire',[CommentaireController::class,'index'])->name('SaveComment');

Route::post('/ajout_caddie',[Ajout_CaddieController::class,'ajout'])->name('ajout_caddie');


