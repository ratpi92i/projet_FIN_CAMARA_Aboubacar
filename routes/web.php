<?php

use Illuminate\Support\Facades\Route;
use App\Models\Utilisateur;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\MaladieController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\RendezVousController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'admin'])->name('admin.dashboard');


Route::group(['middleware' => 'check.admin'], function () {
    Route::get('/admin-dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/utilisateurs', [UtilisateurController::class, 'index'])->name('utilisateurs');;

Route::get('/utilisateurs/{utilisateur}/edit', [UtilisateurController::class, 'edit'])->name('utilisateurs.edit');

Route::delete('/utilisateurs/{utilisateur}', [UtilisateurController::class, 'destroy'])->name('utilisateurs.destroy');



Route::resource('admin/maladies', MaladieController::class);
Route::get('/admin/maladies', [MaladieController::class, 'index'])->name('admin.maladies.index');




Route::resource('/admin/maladies', MaladieController::class);
Route::get('/admin/maladies', [MaladieController::class, 'index'])->name('admin.maladies.index');




Route::get('/maladies', [MaladieController::class, 'indexUtilisateur'])->name('maladies.indexUtilisateur');


Route::get('/maladies', [MaladieController::class, 'indexUtilisateur'])->name('maladies.indexUtilisateur');
Route::get('/evaluation', [EvaluationController::class, 'showForm'])->name('form_evaluation');
Route::post('/evaluation', [EvaluationController::class, 'evaluer'])->name('evaluer');

Route::middleware('auth')->group(function () {

    Route::get('/evaluation', [EvaluationController::class, 'showForm'])->name('form_evaluation');
    Route::post('/evaluation', [EvaluationController::class, 'evaluer'])->name('evaluer');

    Route::get('/admin/messages', [AdminController::class, 'indexMessages'])->name('admin.messages.index');
    Route::get('/rendezvous/create', [RendezVousController::class, 'create'])->name('rendezvous.create');
});





Route::get('/messages/create', [MessageController::class, 'create'])->name('messages.create')->middleware('auth');
Route::post('/messages/store', [MessageController::class, 'store'])->name('messages.store')->middleware('auth');



Route::get('/hospitals', [HospitalController::class, 'index'])->name('hospitals.index');
Route::get('/hospitals/create', [HospitalController::class, 'create'])->name('hospitals.create');
Route::post('/hospitals', [HospitalController::class, 'store'])->name('hospitals.store');
Route::get('/hospitals/{id}/edit', [HospitalController::class, 'edit'])->name('hospitals.edit');
Route::put('/hospitals/{id}', [HospitalController::class, 'update'])->name('hospitals.update');
Route::delete('/hospitals/{id}', [HospitalController::class, 'destroy'])->name('hospitals.destroy');


Route::get('/rendezvous', [RendezVousController::class, 'index'])->name('rendezvous.index');

Route::post('/rendezvous', [RendezVousController::class, 'store'])->name('rendezvous.store');
Route::get('/rendezvous/{rendezvous}', [RendezVousController::class, 'show'])->name('rendezvous.show');
Route::get('/rendezvous/{rendezvous}/edit', [RendezVousController::class, 'edit'])->name('rendezvous.edit');
Route::put('/rendezvous/{rendezvous}', [RendezVousController::class, 'update'])->name('rendezvous.update');
Route::delete('/rendezvous/{rendezvous}', [RendezVousController::class, 'destroy'])->name('rendezvous.destroy');


Route::prefix('admin')->group(function () {
    Route::prefix('rdv')->group(function () {
        Route::get('/', [RendezVousController::class, 'index'])->name('admin.rendezvous.index');

    });
});



Route::get('/utilisateurs/hopitaux', [HospitalController::class, 'utilisateursIndex'])->name('utilisateurs.hopitaux.index');
