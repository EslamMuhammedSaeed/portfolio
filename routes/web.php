<?php

use Illuminate\Support\Facades\Route;

use App\Mail\ContactMAil;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Mail;


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
    return view('pages.about');
});





// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::get('/work', [App\Http\Controllers\PagesController::class, 'work']);
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact']);
Route::post('/contact', [App\Http\Controllers\EmailController::class, 'getData']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
