<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProductAttributeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::get('/link-storage', function () {
    Artisan::call('storage:link');
});


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::prefix('/brands')->group(function () {
    Route::get('/', [HomeController::class, 'brands'])->name('brands');
    Route::get('/{id}', [HomeController::class, 'brand'])->name('brand');
});

Route::get('/products/{id}', [HomeController::class, 'product'])->name('product');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('dashboard');

    Route::resource('products', ProductController::class)->names([
        'index' => 'product.index',
        'create' => 'product.create',
        'store' => 'product.store',
        'edit' => 'product.edit',
        'update' => 'product.update',
        'destroy' => 'product.destroy',
    ]);

    Route::resource('brands', BrandController::class)->names([
        'index' => 'brand.index',
        'create' => 'brand.create',
        'store' => 'brand.store',
        'edit' => 'brand.edit',
        'update' => 'brand.update',
        'destroy' => 'brand.destroy',
    ]);

    Route::resource('partners', PartnerController::class)->names([
        'index' => 'partner.index',
        'create' => 'partner.create',
        'store' => 'partner.store',
        'edit' => 'partner.edit',
        'update' => 'partner.update',
        'destroy' => 'partner.destroy',
    ]);

    Route::resource('settings', SettingsController::class)->names([
        'index' => 'settings.index',
        'create' => 'settings.create',
        'store' => 'settings.store',
        'edit' => 'settings.edit',
        'update' => 'settings.update',
        'destroy' => 'settings.destroy',
    ]);

    Route::resource('product-attributes', ProductAttributeController::class)->names([
        'index' => 'product.attribute.index',
        'create' => 'product.attribute.create',
        'store' => 'product.attribute.store',
        'edit' => 'product.attribute.edit',
        'update' => 'product.attribute.update',
        'destroy' => 'product.attribute.destroy',
    ]);
});

require __DIR__.'/auth.php';
