<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarController;
use App\Models\Car;

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


Route::get('index', [MainController::class, 'index'])->name('index');


Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('Listing', [MainController::class, 'listing'])->name('Listing');
Route::get('blog', [MainController::class, 'blog'])->name('blog');
Route::get('Testimonials', [MainController::class, 'testimoinals'])->name('Testimonials');
Route::get('contact', [MainController::class, 'contact'])->name('contact');



Route::get('Admin.addcar', [CarController::class,
'create']);
Route::post('storecar', [CarController::class,
'store'])->name('storecar');
Route::get('Admin.cars', [CarController::class, 'index'])->name('Admin.cars');
Route::get('editcar/{id}', [CarController::class, 'edit'])->name('editcar');
Route::get('single/{id}', [CarController::class, 'show'])->name('single');
Route::put('editcar/{id}', [CarController::class,
'update'])->name('editcar');
Route::get('destroycar/{id}', [CarController::class,
'destroy'])->name('destroycar');



// Route::get('Admin.addcategory', [AdminController::class, 'addcategory'])->name('Admin.addcategory');
// Route::get('Admin.addtestimonials', [AdminController::class, 'addtestimonials'])->name('Admin.addtestimonials');
// Route::get('Admin.adduser', [AdminController::class, 'adduser'])->name('Admin.adduser');
// Route::get('Admin.cars', [AdminController::class, 'cars'])->name('Admin.cars');
// Route::get('Admin.categories', [AdminController::class, 'categories'])->name('Admin.categories');
// Route::get('Admin.editcar', [AdminController::class, 'editcar'])->name('Admin.editcar');
// Route::get('Admin.editcategory', [AdminController::class, 'editcategory'])->name('Admin.editcategory');
// Route::get('Admin.edittestimonial', [AdminController::class,'edittestimonial'])->name('Admin.edittestimonial');
// Route::get('Admin.edituser', [AdminController::class, 'edituser'])->name('Admin.edituser');
// Route::get('Admin.login', [AdminController::class, 'login'])->name('Admin.login');
// Route::get('Admin.messages', [AdminController::class, 'messages'])->name('Admin.messages');
// Route::get('Admin.showmessage', [AdminController::class, 'showmessage'])->name('Admin.showmessage');
// Route::get('Admin.testimonials', [AdminController::class, 'testimonials'])->name('Admin.testimonials');
// Route::get('Admin.users', [AdminController::class, 'users'])->name('Admin.users');
