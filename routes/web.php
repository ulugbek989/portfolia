<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SiteController::class, 'index'])->name('index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class,'index'])->name('dashboard');
    Route::get('/about', [AboutController::class,'index'])->name('aboutAdmin');
    Route::get('/resume', [ResumeController::class,'index'])->name('resumeAdmin');
    Route::get('/work', [WorkController::class,'index'])->name('workAdmin');
    Route::get('/blog', [BlogController::class,'index'])->name('blogAdmin');
    Route::get('/contact', [ContactController::class,'index'])->name('contactAdmin');
    Route::get('/profile', [ProfileController::class,'index'])->name('profileAdmin');
});
Route::post('/sendToTg', [SiteController::class, 'sendToTg'])->name('contact.send');
Route::get('/blog/{slug}', [SiteController::class,'blog'])->name('blogInfo');
Route::get('/work/{slug}', [SiteController::class,'work'])->name('workInfo');
