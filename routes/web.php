<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutus']);
//Route::get('/article', [App\Http\Controllers\HomeController::class, 'article']);
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog']);
Route::get('/card-comparison', [App\Http\Controllers\HomeController::class, 'cardcomparison']);
Route::get('/comparison', [App\Http\Controllers\HomeController::class, 'comparison']);
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);
Route::get('/guides-tips', [App\Http\Controllers\HomeController::class, 'guidestips']);
Route::get('/investor', [App\Http\Controllers\HomeController::class, 'investor']);
Route::get('/article/{slug}',[App\Http\Controllers\ArticleController::class, 'show']);

Route::get('/getSubCategory/{id}',[App\Http\Controllers\ProductController::class, 'getSubCategoryAjax']);

Route::post('/news-save', [App\Http\Controllers\HomeController::class, 'store']);

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);
    Route::resources([
        'category' => App\Http\Controllers\CategoryController::class,
    ]); 
    Route::resources([
        'subcategory' => App\Http\Controllers\SubCategoryController::class,
    ]);
    Route::resources([
        'banner' => App\Http\Controllers\BannerController::class,
    ]);
    Route::resources([
        'article' => App\Http\Controllers\ArticleController::class,
    ]);
    Route::resources([
        'product' => App\Http\Controllers\ProductController::class,
    ]);
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    //Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cache is cleared";
});
