<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
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
    return view('index', [
        "title" => "Home"
    ]);
});

Route::get('/product', function () {
    return view('product', [
        "title" => "Product",
        "nama" => "Hilda Rizki Aulia",
        "email" => "hildariskia11@gmail.com",
        "gambar" => "hilda.jpeg"
    ]);
});


Route::get('/cart', function () {
    return view('cart', [
        "title" => "Cart"
    ]);
});

// Route::resource('/contacts', ContactController::class);



    
Auth::routes();

Route::group(['middleware' => ['auth']], function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit'); 
    Route::post('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update'); 
    Route::get('/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy'); 
});

Route::post('/', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/create', [ContactController::class, 'store'])->name('contacts.store');
