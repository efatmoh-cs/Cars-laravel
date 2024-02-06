<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AdminuserController;
use App\Models\Testimonial;
use App\Models\Adminuser;
use App\Models\Car;




            Route::get('Admin.addcar', [CarController::class,
            'create'])->name('Admin.addcar')->middleware('verified');
            Route::post('storecar', [CarController::class,
            'store'])->name('storecar');
            Route::get('Admin.cars', [CarController::class, 'index'])->name('Admin.cars');
            Route::get('editcar/{id}', [CarController::class, 'edit'])->name('editcar');
            Route::get('single/{id}', [CarController::class, 'show'])->name('single');
            Route::put('editcar/{id}', [CarController::class,
            'update'])->name('editcar');
            Route::get('destroycar/{id}', [CarController::class, 'destroy'])->name('destroycar')->middleware('verified');
            Route::get('lisit', [CarController::class, 'index'])->name('lisit');
            Route::get('addlisit', [CarController::class,
            'create'])->name('addlisit');


             Route::get('Admin.testimonials', [TestimonailController::class, 'index'])->name('Admin.testimonials');
            Route::get('Admin.addtestimonials', [TestimonailController::class,
            'create'])->middleware('verified');
            Route::post('storetestimonial', [TestimonailController::class,
            'store'])->name('storetestimonial');
            Route::get('edittestimonial/{id}', [TestimonailController::class, 'edit'])->name('edittestimonial');
            Route::put('edittestimonial/{id}', [TestimonailController::class,
            'update'])->name('edittestimonial');

            Route::get('destroytestimonal/{id}', [TestimonailController::class, 'destroy'])->name('destroytestimonal');
            Route::get('testlisit', [TestimonailController::class, 'index'])->name('testlisit');
            Route::get('addtestlisit', [TestimonailController::class, 'create'])->name('addtestlisit');




            Route::get('Admin.addcategory', [CategoryController::class, 'create'])->name('Admin.addcategory')->middleware('verified');
            Route::get('Admin.categories', [CategoryController::class, 'index'])->name('Admin.categories');
            Route::get('categorylisit', [CategoryController::class, 'index'])->name('categorylisit');

            Route::get('addcatlisit', [CategoryController::class, 'create'])->name('addcatlisit');
            Route::post('storecategory', [CategoryController::class,
            'store'])->name('storecategory');
            Route::get('editcategory/{id}', [CategoryController::class, 'edit'])->name('editcategory');
            Route::put('editcategory/{id}', [CategoryController::class,
            'update'])->name('editcategory');
             Route::get('destroycategory/{id}', [CategoryController::class, 'destroy'])->name('destroycategory');



            Route::get('Admin.users', [AdminuserController::class, 'index'])->name('Admin.users');
            Route::get('Admin.adduser', [AdminuserController::class,
            'create'])->middleware('verified');
            Route::post('storeuser', [AdminuserController::class,'store'])->name('storeuser');
            Route::get('edituser/{id}', [AdminuserController::class, 'edit'])->name('edituser');
            Route::put('edituser/{id}', [AdminuserController::class,
            'update'])->name('edituser');
            Route::get('userlisit', [AdminuserController::class, 'index'])->name('userlisit');
            Route::get('adduserlisit', [AdminuserController::class, 'create'])->name('adduserlisit');


