<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/

Auth::routes();

Route::get('/', function () {
    return view('welcome',[
        'user' => User::find(1)
    ]);
});

Route::middleware('auth')->group(function () {
    Route::get('/chits', [App\Http\Controllers\ChitController::class, 'index'])->name('home');
    Route::post('/chits', [App\Http\Controllers\ChitController::class, 'store']);

    Route::post('/profiles/{user:username}/follow', [App\Http\Controllers\FollowController::class, 'store']);
    Route::get('/profiles/{user:username}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->middleware('can:edit,user');

    Route::patch('/profiles/{user:username}', [App\Http\Controllers\ProfileController::class, 'update'])->middleware('can:edit,user');
    Route::get('/explore', [App\Http\Controllers\ExploreController::class, 'index'])->name('explore');
});

Route::get('/profiles/{user:username}', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile');

