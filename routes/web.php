<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Collections;

use App\Models\LflbCollection;
use App\Models\LflbSubCollection;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('collections', Collections::class)->middleware('auth');

Route::get('/categories/{id}', function($id) {
    return view('testing.category', [
        'category' => LflbCollection::find($id),
        // 'subCategories' => LflbSubCollection::all()->where('parentCollection', $id)->sortBy('position'),
        'subCategories' => LflbCollection::find($id)->lflbSubCollections->sortBy('position'),
        'homePage' => true,
        'navSettings' => [
            "backHome" => false, //unless non default category? javascript reset history on fallback to default category?
            "selectOk" => true,
            "changeCategory" => true,
            "scroll" => false // false, set to 'maybe?'
        ]
    ]);
});
