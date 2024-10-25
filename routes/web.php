<?php

use App\Http\Controllers\KelasController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('register', function () {
    return view('auth_bs.register');
})->name('register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('data-users', App\Http\Controllers\MasterUserController::class);

Route::get('data-kelas', [KelasController::class, 'index'])->name('data-kelas.index');

Route::get('data-kelas/create', [KelasController::class, 'create'])->name('data-kelas.create');
Route::post('data-kelas', [KelasController::class, 'store'])->name('data-kelas.store');

Route::get('data-kelas/edit/{id}', [KelasController::class, 'edit'])->name('data-kelas.edit');
Route::put('data-kelas/update', [KelasController::class, 'update'])->name('data-kelas.update');

Route::delete('data-kelas/{id}', [KelasController::class, 'delete'])->name('data-kelas.delete');;
