<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/test', function () {
//     return view('welcome');
// });

Route::get('/welcome',[PostController::class, 'index'])->name("post.index");
Route::get('/post',[PostController::class, 'show'])->name("post.show");
Route::get('/post/{id}',[PostController::class, 'single_post'])->name("post.single_post");
Route::get('/create_post',[PostController::class, 'create_post'])->name("post.create_post");
Route::post('/post',[PostController::class, 'store_post'])->name("post.store_post");
Route::get('/edit_post/{id}',[PostController::class, 'edit_post'])->name("post.edit_post");
Route::post('/post/{id}',[PostController::class, 'update_post'])->name("post.update_post");
Route::post('/post/{id}/delete',[PostController::class, 'delete_post'])->name("post.delete_post");

// Route::get('/user',function(){
//     $data = \App\Models\Post::latest()->limit(10)->get();
//     return view('alluser',compact('data'));
// });
