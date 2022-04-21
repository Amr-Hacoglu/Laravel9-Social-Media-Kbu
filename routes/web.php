<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Content\ContentController as contentController;
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

Route::get('/adminindex',[AdminHomeController::class,'index']);

// ******************* Sign-In Panel **********************

Route::get('/signin',[App\Http\Controllers\SignInPanel\HomeController::class,'index'])->name('signin');

// ******************* Sign-Up Panel **********************

Route::get('/signup',[App\Http\Controllers\SignUpPanel\HomeController::class,'index'])->name('signin');

// ******************* Users Operators ********************


Route::get('/admin/users/signin',[App\Http\Controllers\AdminPanel\UsersController::class,'index'])->name('admin_users_signin');

Route::get('/admin/users/signup',[App\Http\Controllers\AdminPanel\UsersController::class,'create'])->name('admin_users_create');

Route::post('/admin/users/store',[App\Http\Controllers\AdminPanel\UsersController::class,'store'])->name('admin_users_store');

/*

Route::prefix('/admin/users')->name('admin.users.')->controller(App\Http\Controllers\AdminPanel\UsersController::class)->group(function (){

Route::get('/signin','index')->name('signin');

Route::get('/signup','create')->name('create');

Route::post('/store','store')->name('store');

});
*/

// ************************* Post *************************

Route::prefix('admin/Content')->name('admin.Content')->controller(contentController::class)->group(function (){

    Route::get('','index')->name('');

    Route::get('/create','create')->name('.create');

    Route::match(['get','post'],'/store','store')->name('.store');

    Route::get('/edit/{id}','edit')->name('.edit');

    Route::post('/update/{id}','update')->name('.update');

    Route::get('/destroy/{id}','destroy')->name('.destroy');

    //Route::get('/show/{id}','show')->name('.show');

    //Route::get('/show','show')->name('.show');

});
/*
 Route::prefix('admin1')->name('admin1.')->group(function (){

    Route::get('/',[createpostController::class,'index'])->name('index');

        Route::prefix('/Content')->name('Content.')->controller(createpostController::class)->group(function (){

            Route::get('/create','create')->name('create');

            Route::match(['get','post'],'/store','store')->name('store');

            Route::get('/edit/{id}','edit')->name('edit');

            Route::post('/update/{id}','update')->name('update');

            Route::get('/destroy/{id}','destroy')->name('destroy');

            //Route::get('/show/{id}','show')->name('.show');

            //Route::get('/show','show')->name('.show');

    });
});
 */

// **************************** chat ************************************

Route::get('/admin/chat',[App\Http\Controllers\ChatPanel\HomeController::class,'index'])->name('chat');




Route::get('/laravel', function () {
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
