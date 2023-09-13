<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    $products=Product::get();
    return view('welcome' ,compact('products'));
})->name('welcome');

Route::get('/dashboard', function () {
    if(Auth::user()->profile->role =="Admin"){
    
        return view('pages.dashbord.dashboard');
    }{
        return redirect('/');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('carts' ,function(){
return view('big-ecommerce-main.mycart');
})->name('carts');
Route::get('addToCart/{id}' ,[ProductsController::class ,'addToCart'])->name('addToCart');
Route::get('removeCart/{id}' ,[ProductsController::class ,'removeCart'])->name('removeCart');


Route::middleware(['auth','role:Admin'])->group(function(){

    Route::resource('UsersList' ,'UserslistController');
    Route::resource('EmployeeList' ,'EmployeeController');
    Route::resource('Products' ,'ProductsController');
});
Route::middleware(['auth'])->group(function(){
    Route::resource('Order', 'OrdersController');
    Route::get('CHECKOUT', [OrdersController::class ,'orderFromCart'])->name('orderFromCart'); 
    Route::get('BUY/{prodcutID}/CHECKOUT', [OrdersController::class ,'BUY'])->name('BUY');
});

Route::get('product/{id}',[ProductsController::class ,'showProduct'])->name('show'); //موقتا 



Route::get('set' ,function(){
 session()->put('login' ,'login') ;
});
Route::get('get' ,function(){
   echo  session()->get('login' ,'login') ;
   });

Route::fallback(function () {
    return redirect('/');
});

require __DIR__.'/auth.php';
