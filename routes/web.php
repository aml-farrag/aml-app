<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/createpost',[PostController::class,'create'])->name('createpost');
Route::post('/postStore',[postController::class,'store'])->name('postStore');
Route::get('/editpost/{id}',[postController::class,"edit"])->name('editpost');
Route::post('/updatepost/{id}',[postController::class,'update'])->name('updatepost');
Route::delete('/deletepost',[postController::class,'destroy'])->name('deletepost');
Route::get('/deletepost/{id}',[postController::class,'deletepost']);
Route::get('/showpost/{id}',[postController::class,'show'])->name('showpost');