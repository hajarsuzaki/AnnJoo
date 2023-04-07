<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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

Route::group(['prefix' => 'services','as' => 'services.',], function () {
    Route::get('/energy', [HomeController::class, 'energy_service'])->name('energy');
    Route::get('/telecommunication', [HomeController::class, 'telecommunication'])->name('telecommunication');
});

Route::post('/send_mail', [HomeController::class, 'send_mail'])->name('send_mail');
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('optimize');
    $route = Artisan::call('route:clear');
    // return what you want
 });