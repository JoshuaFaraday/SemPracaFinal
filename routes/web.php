<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewsController;


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
    return view('user.welcome');
});


/*
Route::get('/contact', function () {
    return view('user.contact');
});
*/

Route::get('/contact', [App\Http\Controllers\GuestController::class, 'contact'])->name('contact');
Route::get('/about', [App\Http\Controllers\GuestController::class, 'About'])->name('about');
Route::get('/hotNews', [App\Http\Controllers\GuestController::class, 'HotNews'])->name('hotNews');



    Route::resource('reviews', ReviewsController::class);
Route::group(['middleware' => ['auth']], function () {
    Route::get('reviews/{reviews}/delete', [ReviewsController::class, 'destroy'])->name('reviews.delete');
    Route::get('reviews/{reviews}/edit', [ReviewsController::class, 'edit'])->name('reviewsEdit');
});


    Route::resource('gallery', GalleryController::class);
Route::get('reviews/{reviews}/delete', [ReviewsController::class, 'destroy'])->name('reviews.delete');
Route::group(['middleware' => ['auth']], function () {
    Route::get('gallery/{gallery}/delete', [GalleryController::class, 'destroy'])->name('gallery.delete');


});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/welcome', [App\Http\Controllers\GuestController::class, 'Welcome'])->name('Welcome');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('user', UserController::class);
    Route::get('user/{user}/delete', [UserController::class, 'destroy'])->name('user.delete');


});


