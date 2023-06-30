<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaireUnDonController;
use App\Http\Controllers\ImageProjetController;
use App\Http\Controllers\IndexHomeClientFrontController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\StatController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\TypeProjetController;
use App\Http\Controllers\VoirTousLesProjetsController;
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
//Home route without database datas
/*Route::get('/', function () {
    return view('welcome');
})->name('HomeIndexClient');    */

//Home route with datas from database

Route::get('/', [IndexHomeClientFrontController::class, 'homepage'])->name('HomeIndexClient');


Route::get('/projetss', function () {
    return view('admin/projets/index');
});

//contact_route_management
Route::post('/storecontact', [ContactController::class, 'store_contact'])->name('storecontact');
Route::get('/contact_management', [ContactController::class, 'index_admin'])->name('contact.admin');

//type_project management
Route::resource('typeprojets', TypeProjetController::class);
Route::get('typeprojet.edit/{typeprojet}', [TypeProjetController::class, 'edit'])->name('editTypeP');

//projet_management
Route::resource('projets', ProjetController::class);
Route::get('projets.edit/{projet}', [ProjetController::class, 'edit'])->name('editProjet');

//image_mangement
Route::resource('imagesprojets', ImageProjetController::class);

//voir_tous_projets_front_end_management
Route::get('/voirtouslesprojets', [VoirTousLesProjetsController::class, 'getAllProjets']);


//les_locaux_acrcam

Route::get('/voirnoslocaux', function(){
    return view('locauxacrcam');
});

//stats_route

Route::get('/stats', [StatController::class, 'getStat'])->name('stats');



//partenaires_management
Route::resource('partenaires', PartenaireController::class);
Route::get('partenaire.edit/{partenaire}', [PartenaireController::class, 'edit'])->name('editPart');


//Team Members staffs management

Route::resource('members', TeamMemberController::class);
Route::get('member.edit/{member}', [TeamMemberController::class, 'edit'])->name('editMember');


//Faire un Don management part
Route::get('/faireUnDon', [FaireUnDonController::class, 'index'])->name('faireundon');
Route::post('/faireUnDon', [FaireUnDonController::class, 'storeDon'])->name('faireundon.store');
Route::get('/faireundon_management', [FaireUnDonController::class, 'index_admin'])->name('faireundon.admin');

//visions

Route::get('/visions', function(){
    return view('visions');
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
