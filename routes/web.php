<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\OldController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VisuController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\LogoController;



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

/* ------------- Admin Route -------------- */

Route::prefix('admin')->group(function (){

Route::get('/login',[AdminController::class, 'Index'])->name('login_from');

Route::post('/login/owner',[AdminController::class, 'Login'])->name('admin.login');

Route::get('/dashboard',[AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');

Route::get('/logout',[AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');

Route::get('/register',[AdminController::class, 'AdminRegister'])->name('admin.register');

Route::post('/register/create',[AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');

Route::get('/edit/admin/{id}',[AdminController::class, 'AdminEdit'])->name('admin.edit');
Route::post('/update/admin/{id}',[AdminController::class, 'AdminUpdate'])->name('admin.update');


/** hero */




});




/* ------------- End Admin Route -------------- */
Route::prefix('admin')->group(function(){

Route::get('/show/old', [OldController::class, 'Index'])->name('show.old');
Route::get('/add/old', [OldController::class, 'AddOld'])->name('add.old');
Route::post('/store/old', [OldController::class, 'StoreOld'])->name('store.old');
//Route::post('/update/old/{id}', [OldController::class, 'UpdateOld']);
Route::get('/edit/old/{id}', [OldController::class, 'EditOld']);
Route::post('/update/old/{id}', [OldController::class, 'UpdateOld']);
Route::get('/delete/old/{id}', [OldController::class, 'DeleteOld']);
Route::get('/show/old/{id}', [OldController::class, 'show']);

/**proche */
Route::get('/show/proche', [SellerController::class, 'Index'])->name('show.proche');
Route::get('/add/proche', [SellerController::class, 'AddProche'])->name('add.proche');
Route::post('/store/proche', [SellerController::class, 'StoreProche'])->name('store.proche');
//Route::post('/update/old/{id}', [OldController::class, 'UpdateOld']);
Route::get('/edit/proche/{id}', [SellerController::class, 'EditProche']);
Route::post('/update/proche/{id}', [SellerController::class, 'UpdateProche']);
Route::get('/delete/proche/{id}', [SellerController::class, 'DeleteProche']);
Route::get('/show/proche/{id}', [SellerController::class, 'show']);
Route::get('/get/proches/{email}', [OldController::class, 'GetProhe']);

/** hero */
Route::get('/show/hero', [HeroController::class, 'Index'])->name('show.hero');
Route::get('/add/hero', [HeroController::class, 'AddHero'])->name('add.hero');
Route::post('/store/hero', [HeroController::class, 'StoreHero'])->name('store.hero');
/** about */
Route::get('/show/about', [AboutController::class, 'Index'])->name('show.about');
Route::get('/add/about', [AboutController::class, 'AddABout'])->name('add.about');
Route::post('/store/about', [AboutController::class, 'StoreAbout'])->name('store.about');
/** visu */
Route::get('/show/visu', [VisuController::class, 'Index'])->name('show.visu');
Route::get('/add/visu', [VisuController::class, 'AddVisu'])->name('add.visu');
Route::post('/store/visu', [VisuController::class, 'StoreVisu'])->name('store.visu');
/** lien */
Route::get('/show/team', [TeamController::class, 'Index'])->name('show.team');
Route::get('/add/team', [TeamController::class, 'AddTeam'])->name('add.team');
Route::post('/store/team', [TeamController::class, 'StoreTeam'])->name('store.team');

/** logo */
Route::get('/show/logo', [LogoController::class, 'Index'])->name('show.logo');
Route::get('/add/logo', [LogoController::class, 'AddLogo'])->name('add.logo');
Route::post('/store/logo', [LogoController::class, 'StoreLogo'])->name('store.logo');






});
 




/* ------------- Seller Route -------------- */

Route::prefix('user')->group(function (){

Route::get('/login',[SellerController::class, 'SellerIndex'])->name('seller_login_from');

Route::get('/dashboard',[SellerController::class, 'SellerDashboard'])->name('seller.dashboard')->middleware('seller');

Route::post('/login/owner',[SellerController::class, 'SellerLogin'])->name('seller.login');


Route::get('/edit/proche/{id}', [SellerController::class, 'EditProcheUser']);
Route::post('/update/proche/{id}', [SellerController::class, 'UpdateProcheUser']);

Route::get('/logout',[SellerController::class, 'SellerLogout'])->name('seller.logout')->middleware('seller');

Route::get('/register',[SellerController::class, 'SellerRegister'])->name('seller.register');

Route::post('/register/create',[SellerController::class, 'SellerRegisterCreate'])->name('seller.register.create');


}); 
/* ------------- End Seller Route -------------- */
 /*--------------------------- admin old man -----*/







  /*--------------------------- admin old man -----*/




Route::get('/', function () {
    $hero=DB::table('heroes')->first();
    $abouts=DB::table('abouts')->first();
    $visus=DB::table('visus')->get();
    $teams=DB::table('teams')->get();
    $logos=DB::table('logos')->get();





    return view('home', compact('hero','abouts','visus','teams','logos'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
