<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'home'])->name('welcome');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/why-choose-us', [HomeController::class, 'why_us'])->name('why_us');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/services/energy', [HomeController::class, 'energy_service'])->name('energy');
Route::get('/services/telecommunication', [HomeController::class, 'telecommunication'])->name('telecommunication');
Route::post('/send-mail', [HomeController::class, 'send_mail'])->name('send_mail');