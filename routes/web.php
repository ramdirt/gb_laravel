<?php

use App\Http\Controllers\GetData;
use App\Http\Controllers\Feedback;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ParserController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\FeedbackController as AdminFeedbackController;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/feedback', [FeedbackController::class, 'create'])->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/order', [OrderController::class, 'create'])->name('order');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');

Route::get('/news/categories', [CategoryController::class, 'index'])
    ->name('news.categories');
Route::get('/news/categories/{id}', [CategoryController::class, 'show'])
    ->name('news.categories.show');

Route::get('/news', [NewsController::class, 'index'])
    ->name('news');
Route::get('/news/{id}', [NewsController::class, 'show'])->where('id', '\d+')
    ->name('news.show');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/news', AdminNewsController::class);
    Route::resource('/feedback', AdminFeedbackController::class);
    Route::resource('/order', AdminOrderController::class);
    Route::resource('/users', UserController::class);
    Route::get('/parser', ParserController::class)->name('parser');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/auth/{driver}/redirect', [SocialController::class, 'redirect'])
        ->where('driver', '\w+')
        ->name('social.redirect');
    Route::any('/auth/{driver}/callback', [SocialController::class, 'callback'])
        ->where('driver', '\w+')
        ->name('social.callback');
});