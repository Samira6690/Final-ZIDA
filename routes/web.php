<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\StylisteController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\RendezvouController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CommentaireController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





Route::get('/about', function () {
    return view('about');

});


Route::get('/accueil', function () {
    return view('accueil');

});
Route::get('/styliste', function () {
    return view('styliste');

});
Route::get('/femme', function () {
    return view('femme');

});
Route::get('/inscription', function () {
    return view('inscription');

});
Route::get('/emperor', function () {
    return view('emperor');

});
Route::get('/ciseaux', function () {
    return view('ciseaux');

});
// Route::get('/nav', function () {
//     return view('nav');

// });
Route::get('/footer', function () {
    return view('footer');

});
Route::get('/stylist', function () {
    return view('stylist');

});
Route::get('/doigt', function () {
    return view('doigt');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/nav', function () {
    return view('nav');
});

/* styliste routes*/
Route::get('/delete-styliste/{id}',[StylisteController::class, 'delete_styliste']);
Route::post('/update/traitement',[StylisteController::class, 'update_styliste_traitement']);
Route::get('/update-styliste/{id}',[StylisteController::class, 'update_styliste']);

Route::post('/ajouter/traitement/',[StylisteController::class, 'ajouter_styliste_traitement']);
Route::get('/ajouter',[StylisteController::class, 'ajouter_styliste']);
Route::get('/styliste',[StylisteController::class, 'liste_styliste']);


/* produit route*/
Route::get('/delete-produit/{id}',[ProduitController::class, 'delete_produit']);
Route::post('/update1/traitement',[ProduitController::class, 'update1_produit_traitement']);
Route::get('/update1-produit/{id}',[ProduitController::class, 'update1_produit']);

Route::post('/ajout/traitement/',[ProduitController::class, 'ajout_produit_traitement']);
Route::get('/ajout',[ProduitController::class, 'ajout_produit']);
Route::get('/produit',[ProduitController::class, 'liste_produit']);

/*categorie*/
Route::get('/delete-categorie/{id}',[CategorieController::class, 'delete_categorie']);
Route::post('/update2/traitement',[CategorieController::class, 'update2_categorie_traitement']);
Route::get('/update2-categorie/{id}',[CategorieController::class, 'update2_categorie']);

Route::post('/ajouter2/traitement/',[CategorieController::class, 'ajouter2_categorie_traitement']);
Route::get('/ajouter2',[CategorieController::class, 'ajouter2_categorie']);
Route::get('/categorie',[CategorieController::class, 'liste_categorie']);


