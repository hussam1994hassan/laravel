<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;

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
    return view('welcome');
});

Route::get('json', function() {
    $data = [
        'name' => 'admin',
        'email' => 'admin@site.com',
        'phone' => '+123456789'
    ];

    return response()->json($data);
});

Route::get('/user', [UserController::class, 'index']);
Route::get('/show/{id}', [UserController::class, 'show'])->where('id', '[0-9]+')->name('show');


Route::get('/home', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
