<?php

use App\Http\Livewire\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Counter;
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
Route::get('/contador', Counter::class); 
Route::get('/site', Index::class); 

   
