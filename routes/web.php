<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Auth;
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
    if(Auth::user()->profile->role =="Admin"){
        // Via a request instance...
        return view('dashboardAdmin');
    }{
        return redirect('/');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','role:Admin'])->group(function(){

    Route::resource('UsersList' ,'UserslistController');
    Route::resource('EmployeeList' ,'EmployeeController');
    Route::resource('Products' ,'ProductsController');
});

Route::resource('/Image','ImageController');
 Route::get('Buy product',function(){
return view('big-ecommerce-main.buy product');
 })->name('Buy');

// product routev 








Route::fallback(function () {
    return redirect('/');
});

require __DIR__.'/auth.php';
