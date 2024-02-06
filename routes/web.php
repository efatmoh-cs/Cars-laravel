<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarController;
use App\Models\Car;
use App\Models\Testimonial;
use App\Http\Controllers\TestimonailController;
use App\Models\Adminuser;
use App\Http\Controllers\AdminuserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
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
Route::post('sendEEEmail', [ContactController::class, 'send'])->name('sendEmail');
Route::get('Admin.messages', [ContactController::class, 'index'])->name('Admin.messages');
Route::get('testmessage', [ContactController::class, 'index'])->name('testmessage');
 Route::get('showmessage/{id}', [ContactController::class,'show'])->name('showmessage');
 Route::get('destroymessage/{id}', [ContactController::class, 'destroy'])->name('destroymessage');
 Route::get('users', [MainController::class, 'user']);



Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
