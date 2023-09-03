<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\CategoriesList;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Categories;
use App\Http\Controllers\ProductController;

// use App\Livewire\CategoriesList;
use App\Livewire\ProductsList;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {

    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::view('categories','categories')->name('categories.index');
    // Route::get('/cat/{idLT}',[TinController::class,'cat']);
    Route::view('Products','Products')->name('Products.index');



//     Route::get('products', ProductsList::class)->name('products.index');
});
// require __DIR__.'/auth.php';

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('categories', CategoriesList::class)->name('categories.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
