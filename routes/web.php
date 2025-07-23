<?php
use App\Models\reservation;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\accueilController;
use App\Http\Controllers\clientcontroller;
use App\Http\Controllers\chambrecontroller;
use App\Http\Controllers\tablecontroller;

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
Route::get('/mestable',[tablecontroller::class,'mestable']);
Route::get('/formtable',[tablecontroller::class,'formtable']);
Route::get('/shop',[accueilController::class,'shop']);
Route::get('/meschambre',[chambrecontroller::class,'meschambre']);
Route::get('/mesreservation',[clientcontroller::class,'mesreservation']);
Route::get('/mesclient',[clientcontroller::class,'mesclient']);
Route::get('/heritad',[clientcontroller::class,'heritad']);
Route::get('/formClient',[clientcontroller::class,'formClient']);
Route::get('/admindash',[accueilController::class,'DBadmin']);
Route::get('/reservation',[accueilController::class,'reservation']);
Route::get('/admin',[accueilController::class,'admin']);
Route::get('/heder',[accueilController::class,'heder']);
Route::post('/chambre',[chambrecontroller::class,'storechambre'])->name('storechambre.chambre');
Route::post('/table',[tablecontroller::class,'storetable'])->name('storetable.table');
Route::post('/reservation',[accueilController::class,'storereservation'])->name('storereservation.reservation');
Route::post('/client',[clientcontroller::class,'storeclient'])->name('storeclient.client');
Route::delete('/client/{client}',[clientcontroller::class,"deletecl"])->name('supprimer');
Route::delete('/reservation/{reservation}',[clientcontroller::class,"deleteres"])->name('supprimerres');
Route::get('/formchambre',[chambrecontroller::class,'formchambre']);
Route::get('/reservationtable',[accueilController::class,'reservationtable']);
Route::get('/mesresapart',[accueilController::class,'mesresapart']);


Route::get('/', function () {
    return view('accueil');
});

Route::get('/dashboard', function () {
    $user=Auth::user();
   $archiver=$user->archiver;
    $email=$user->email;
    if(($email==='a@gmail.com')&&($archiver=true)){
        $mesreservation=reservation::orderBy("created_at","DESC")->get();
    

    return view('DBadmin',compact('mesreservation')); }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
