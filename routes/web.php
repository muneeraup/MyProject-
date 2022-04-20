<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebsiteMenuController;
use App\Http\Controllers\FormController;
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
'Auth'::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about',[WebsiteMenuController::class,'about']);
Route::get('/contact',[WebsiteMenuController::class,'contact']);

//Qrud data 
Route::post('/contact',[FormController::class,'formdata']);
Route::get('/Admin/userlist',[FormController::class,'showdata']);
Route::get('/editform/{id}',[FormController::class,'edit'])->name('edit.form');
Route::put('/updateform/{id}',[FormController::class,'update'])->name('update.form');
Route::get('/deletedata/{id}',[FormController::class,'delete'])->name('delete.data');


Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin Routes
//Route::get('/admin',[AdminController::class, 'admin']);