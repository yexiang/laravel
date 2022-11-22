<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

use App\Http\Livewire\Todos;
use App\Http\Livewire\Todos1;

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


if (env('APP_ENV') !== 'local') {
  URL::forceScheme('https');
}


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


  //  Route::get('/dashboard', function () {
  //      return view('livewire.todos');
  //  })->name('dashboard');


    Route::get('/', Todos1::class)->name('todos1');
    Route::get('/dashboard', Todos::class)->name('dashboard');


/*
    Route::get('/', function () {
      return view('dashboard');
    });
 */
});

