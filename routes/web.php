<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\TrainingController;

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

// Static routes
Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact', [PagesController::class, 'submitContact'])->name('submitContact');
Route::get('/faqs', [PagesController::class, 'faqs'])->name('faqs');
Route::get('/services', [PagesController::class, 'services'])->name('services');

// Admin routes
Route::group([
	'prefix' => '/admin',
	'as' => 'admin.',
], function () {
	Route::get('/', [AdminController::class, 'index'])->name('index');
	Route::post('/', [AdminController::class, 'store'])->name('store');
	Route::get('/new', [AdminController::class, 'create'])->name('new');
});

// News routes
Route::group([
	'prefix' => '/news',
	'as' => 'news.',
], function () {
	Route::get('/', [NewsController::class, 'index'])->name('index');
	Route::post('/', [NewsController::class, 'store'])->name('store');
	Route::get('/new', [NewsController::class, 'create'])->name('new');
	Route::get('/{slug}', [NewsController::class, 'show'])->name('show');
	Route::get('/update/{id}', [NewsController::class, 'edit'])->name('edit');
	Route::post('/update/{id}', [NewsController::class, 'update'])->name('update');
});

// Trainee routes
Route::group([
	'prefix' => '/trainee',
	'as' => 'trainee.',
], function () {
	Route::get('/', [TraineeController::class, 'index'])->name('index');
	Route::get('/new', [TraineeController::class, 'create'])->name('new');
	Route::post('/', [TraineeController::class, 'store'])->name('store');
	Route::get('/register', [TraineeController::class, 'register'])->name('register');
	Route::post('/register', [TraineeController::class, 'postRegister'])->name('postRegister');
});

// Training routes
Route::group([
	'prefix' => '/training',
	'as' => 'training.',
], function () {
	Route::get('/', [TrainingController::class, 'index'])->name('index');
	Route::post('/', [TrainingController::class, 'store'])->name('store');
	Route::get('/new', [TrainingController::class, 'create'])->name('new');
	Route::get('/{id}', [TrainingController::class, 'show'])->name('show');
	Route::get('/update/{id}', [TrainingController::class, 'edit'])->name('edit');
	Route::post('/update/{id}', [TrainingController::class, 'update'])->name('update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
