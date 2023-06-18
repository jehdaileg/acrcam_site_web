<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaireUnDonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TypeProjetController;
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
})->name('HomeIndexClient');

Route::get('/projetss', function () {
    return view('admin/projets/index');
});

//contact_route_management
Route::post('/storecontact', [ContactController::class, 'store_contact'])->name('storecontact');
Route::get('/contact_management', [ContactController::class, 'index_admin'])->name('contact.admin');

//type_project management
Route::resource('typeprojets', TypeProjetController::class);
Route::get('typeprojet.edit/{typeprojet}', [TypeProjetController::class, 'edit'])->name('editTypeP');

//Faire un Don management part
Route::get('/faireUnDon', [FaireUnDonController::class, 'index'])->name('faireundon');
Route::post('/faireUnDon', [FaireUnDonController::class, 'storeDon'])->name('faireundon.store');
Route::get('/faireundon_management', [FaireUnDonController::class, 'index_admin'])->name('faireundon.admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
