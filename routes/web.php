<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;

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

Route::view('/', "home")->name('home');
Route::view('/qui-sommes-nous', "qui-sommes-nous")->name('qui-sommes-nous');
Route::view('/la-solution-pour-vos-deplacements-professionnels',"page-3")->name('page-3');
Route::view('/location-d-une-voiture-pour-les-vacances-un-choix-gagnant',"page-2")->name('page-2');
Route::view('/les-grands-evenements-prevus-a-dakar-en-2023-de-multiples-occasions-de-louer-sa-voiture-avec-demalma',"page-1")->name('page-1');


Route::view('/nos-services', "nos-services")->name('nos-services');
Route::view('/nos-services/{categorie_slug}/{offre_slug}', "service-details")->name('service-details');
Route::view('/e-parking', "e-parking")->name('e-parking');
Route::view('/location-de-voiture-dakar/{slug}', "car-detail")->name('car-detail');
Route::view('/nous-contacter', "nous-contacter")->name('nous-contacter');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    /* Route::get('/', function () {
        return view('admin-pages.home');
    }); */
    //Route::get('/dashboard', function () { return view('dashboard');  })->name('dashboard');    
    Route::view('/utilisateurs', "admin-pages.users-management")->name('users-management')->middleware('is_admin');
    Route::view('/roles', "admin-pages.roles")->name('roles');
    Route::view('/categories-offre', "admin-pages.categories-offre")->name('categories-offre');
    Route::view('/reseaux-sociaux', "admin-pages.reseaux-sociaux")->name('reseaux-sociaux');
    Route::view('/offres', "admin-pages.offres")->name('offres');
    Route::view('/demandes', "admin-pages.demandes")->name('demandes');
    Route::view('/offre-form/{slug?}', "admin-pages.offre-form")->name('offre-form');
    
    Route::view('/dashboard', "admin-pages.demandes")->name('dashboard');
    Route::view('/detail-demande/{id}', "admin-pages.detail-demande")->name('detail-demande');
    
});
Route::view('/inscription', "auth.inscription")->name('inscription');
Route::post('inscription', [UserController::class,'inscription'])->name('inscription-post');
Route::get('/test-image', function() {
    $img = Image::make('foo.jpg')->resize(300, 200);
    return $img->response('jpg');
});
Route::get('/uncache', function(){
    \Artisan::call('cache:clear');
    \Artisan::call('config:clear');
    \Artisan::call('storage:link');
    dd('cache!');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin-pages.demandes');
    })->name('dashboard');
});
