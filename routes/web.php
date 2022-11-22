<?php

use App\Http\Controllers\{
    PostController
};
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

Route::middleware(["auth"])->group(function () {

    Route::any("/posts/search", [PostController::class, 'search'])->name("posts.search");

    Route::get("/posts/create", [PostController::class, 'create'])->name("post.create");
    Route::get("/posts", [PostController::class, 'index'])->name("post.index");

    Route::get("/posts/{id}", [PostController::class, 'show'])->name("post.show");
    Route::get("/posts/edit/{id}", [PostController::class, 'edit'])->name("post.edit");

    Route::put("/posts/{id}", [PostController::class, 'update'])->name("post.update");

    Route::delete("/posts/{id}", [PostController::class, 'delete'])->name("post.delete");

    Route::post("/store", [PostController::class, 'store'])->name("posts.store");


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/auth.php';
