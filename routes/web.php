<?php

use App\Http\Controllers\BajuController;
use Illuminate\Support\Facades\Auth;
use App\Models\baju;
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
//     return view('index');
// });

// Route::get('/menue', function () {
//     return view('menu');
// });

Auth::routes();

Route::get('/', function () {return view('index');});
// Route::get('/menue', function () {return view('menu');});
// Route::get('/', 'HomeController@index')->name('home');
Route::get('/menue', [BajuController::class,'home'])->name('menu');
// Route::get('/admin/tambah', 'BajuController@create')->name('tambah');

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/', function () {return view('user.home');});
    // Route::get('/menu', function () {return view('user.menu');});
    Route::get('/menu', [BajuController::class,'user'])->name('menu');
    Route::get('/about', function () {return view('user.about');});
    Route::get('/contact', function () {return view('user.contact');});

});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    // Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/home', [BajuController::class, 'index'])->name('admin.home');
    Route::get('/admin/tambah', [BajuController::class, 'create'])->name('tambah');
    Route::post('/admin/simpan', [BajuController::class, 'store'])->name('simpan');
    Route::get('/admin/edit/{id}', [BajuController::class, 'edit'])->name('edit');
    Route::post('/admin/update/{id}', [BajuController::class, 'update'])->name('update');
    Route::get('/admin/delete/{id}', [BajuController::class, 'destroy'])->name('delete');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
