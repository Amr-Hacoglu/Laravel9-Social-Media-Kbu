<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// 1- do something on the route

Route::get('/hello', function () {
    return 'Hello World';
});

// 2- call view in the route
// the doc. say instead of policy - welcome but i didn't have welcome page

Route::get('/policy', function () {
    return view('policy');
});

// 3- Call controller function
// php artisan make:controller HomeController

// index - admin/html/dashboard/index.html

Route::get('/index',[HomeController::class,'index'])->name('home'); // here we import the class upper to not be tall text
// here we creat a new page and inside the page we create a function and here we call the function

// 4- Route - Controller - View

Route::get('/test1',[HomeController::class,'test'])->name('test');

// 5- Route with parameters

Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');

// 6- Route with post

Route::post('/save',[HomeController::class,'save'])->name('save'); // post instead of get

// ******************* Admin Panel **********************

Route::get('/admin1',[AdminHomeController::class,'index'])->name('admin1');




Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
