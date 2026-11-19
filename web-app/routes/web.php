<?php
use Illuminate\Support\Facades\Route;
//import Controller
use App\Http\Controllers\Web;
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
//return view('welcome');
return "Hallo namaku adalah Laravel, Salam Kenal";
});
//route baru
Route::get('/about', function () {
//return view('welcome');
return "<h2>Ini adalah laman About</h2>";
});

//route ke controller Web ke fungsi home
Route::get('/web',[Web::class, 'home']);
//route ke controller Web ke fungsi profil
Route::get('/profil/{Sheva}',[Web::class, 'profil']);