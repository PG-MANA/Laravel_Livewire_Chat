<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire;
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

Route::get('/', Livewire\Main::class);
Route::get('/group/{chat_group_name}/', Livewire\Main::class);
Route::get('/picture/{file_name}', function($file_name) {
    return File::get(base_path() . '/storage/app/picture/' . $file_name);
});