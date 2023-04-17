<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\InsertionController;

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

Route::get('/', [PublicController::class, 'showHomepage'])->name('homepage');
Route::get('/categoryShow/{category}', [PublicController::class, 'showCategory'])->name('categoryShow');
Route::get('/becomeRevisor', [PublicController::class, 'showRevisorForm'])->name('becomeRevisorPage');
/* Route::post('/becomeRevisor/store', [PublicController::class, 'storeRevisor'])->name('becomeRevisor.store'); */
Route::get('/search/insertion',[PublicController::class, 'searchInsertions'])->name('insertion.search');
Route::get('/profile', [PublicController::class, 'showProfile'])->name('profile')->middleware('auth');
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('set_language_locale');
Route::put('/profile/avatarChange/{user}', [PublicController::class, 'changeAvatar'])->name('profile.changeAvatar');




Route::get('/insertion/create',[InsertionController::class,'create'])->name('insertion.create');
Route::get('/insertion/show/{insertion}',[InsertionController::class,'show'])->name('insertion.show');
Route::get('insertion/index', [InsertionController::class, 'index'])->name('insertion.index');
Route::get('/insertion/edit/{insertion}',[InsertionController::class,'edit'])->name('insertion.edit');
Route::post('/insertion/contactSeller/{insertion}', [InsertionController::class, 'contactSeller'])->name('insertion.contactSeller');
/* Route::delete('/insertion/destroy/{insertion}', [InsertionController::class, 'destroy'])->name('insertion.destroy'); */



Route::get('/revisor/home',[RevisorController::class, 'index'])->name('revisor.index');
/* Route::get('/revisor/show/{insertion}', [RevisorController::class, 'show'])->name('revisor.show'); */
Route::patch('/accept/insertion/{insertion}',[RevisorController::class, 'acceptInsertion'])->name('revisor.accept_insertion');
Route::patch('/deny/insertion/{insertion}', [RevisorController::class, 'denyInsertion'])->name('revisor.deny_insertion');
Route::patch('/undo/insertion', [RevisorController::class, 'undo'])->name('revisor.undo_insertion');
Route::post('/revisor/request',[RevisorController::class, 'becomeRevisor'])->name('revisor.become');
Route::get('/revisor/make/{user}',[RevisorController::class, 'makeRevisor'])->name('revisor.make');