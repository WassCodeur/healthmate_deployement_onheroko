<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\NewsletterContoller;
use App\http\controllers\SujetController;

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
    return view('accueil');
});
// Route::get('/forum', function () {
//     return view('forum');
// })->name('forum');
// Route::get('/connexion', function () {
//     return view('connexion');
// })->name('connexion');
// Route::get('/inscription', function () {
//     return view('inscription');
// })->name('inscription');
//Authentification
Route::get('/news', function () {
    return view('news');
})->name('news');
Route::get('/actu', function () {
    return view('actu');
})->name('actu');
Route::get('/connexion', [UserAuthController::class, 'login'])->name('connexion');
Route::get('/inscription', [UserAuthController::class, 'register'])->name('inscription');
Route::post('/create', [UserAuthController::class, 'create'])->name('create');
Route::post('/userlogin', [UserAuthController::class, 'UserLogin'])->name('userlogin');
//Newsletter*/
Route::post('/newsletter', [NewsletterContoller::class, 'newsletter'])->name('newsletter');
/*home*/
Route::get('/home', [UserAuthController::class, 'home'])->name('home');
//authentification
Route::get('/logout', [UserAuthController::class, 'logout'])->name('logout');
/*appoinment*/
/*Route::get('/appointment', [AppointmentController::class, 'appointment'])->name('appointment');*/
/*sujet*/
Route::get('/forum', [SujetController::class, 'index'])->name('forum');
Route::resource('sujet', SujetController::class)->except(['index']);
