<?php

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CursusController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ResultatController;
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
})->name('welcome');

// MENU ORGANISATION
Route::prefix('menu/')->name('menu.')->group(function () {
    // DROPDOWN GOUVERNANCE
    Route::prefix('gouvernance')->name('gouvernance.')->group(function () {

        Route::get('/mot_du_doyen', function () {
            return view('menu.gouvernance.doyen');
        })->name('mot_du_doyen');

        Route::get('/historique', function () {
            return view('menu.gouvernance.historique');
        })->name('historique');

        Route::get('/administration', function () {
            return view('menu.gouvernance.administration');
        })->name('administration');
    });

    // DROPDOWN FORMATION
    Route::prefix('formation')->name('formation.')->group(function () {
        Route::get('/doctorat', function () {
            return view('menu.formation.doctorat');
        })->name('doctorat');

        Route::get('/des/init', function () {
            return view('menu.formation.des_inintial');
        })->name('des.init');

        Route::get('/des/un', function () {
            return view('menu.formation.des_un');
        })->name('des.un');

        Route::get('/des/deux', function () {
            return view('menu.formation.des_deux');
        })->name('des.deux');

        Route::get('/des/trois', function () {
            return view('menu.formation.des_trois');
        })->name('des.trois');
    });

    // RECHERHCE
    Route::prefix('recherche')->name('recherche.')->group(function () {
        Route::get('/laboratoire', function () {
            return view('menu.recherche.laboratoire');
        })->name('laboratoire');

        Route::get('/these', function () {
            return view('menu.recherche.theses');
        })->name('theses');
    });

    // VIE_ESTUDIANTINE
    Route::prefix('vie_estudiantine')->name('vie_estudiantine.')->group(function () {
        // OBTENIR UN RESULTAT
        Route::get('/resultat/init', [ResultatController::class, 'init'])->name('resultat.init');
        Route::post('/resultat/get', [ResultatController::class, 'get'])->name('resultat.get');

        // CURSUS ETUDIANT
        Route::get('/cursus/init', [CursusController::class, 'init'])->name('cursus.init');
        Route::post('/cursus/get', [CursusController::class, 'get'])->name('cursus.get');

        // VOIR LES DETAILS D'UN RESULTAT
        Route::post('/details', [CursusController::class, 'details'])->name('details');
    });

    // ACTUALITES
    Route::prefix('actualites')->name('actualites.')->group(function () {
        Route::get('/', function () {
            return view('menu.actualites.actualite');
        })->name('actualites');

        Route::get('/evenement', function () {
            return view('menu.actualites.evenement');
        })->name('evenements');
    });
});
