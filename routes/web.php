<?php
use App\Http\Controllers\backend\MovieController;
use App\Http\Controllers\Guest\PageControlle;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [PageControlle::class, 'index'])->name('homePage');


/*controller di resources*/
Route::resource('movies', MovieController::class);
