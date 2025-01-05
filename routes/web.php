<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Home;
use App\Livewire\Log;
use App\Livewire\Wallet;
use App\Livewire\User;

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

Route::get('/', Home::class);
Route::get('/log', Log::class);
Route::get('/wallet', Wallet::class);
Route::get('/user', User::class);


Route::get('/login', App\Livewire\Login::class);
Route::get('/signup', App\Livewire\SignUp::class);