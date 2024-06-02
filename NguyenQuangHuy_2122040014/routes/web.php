<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController as SanPhamController;
use App\Http\Controllers\frontend\ContactController as DieuKhoanControler;

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\TopicController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\ContactController;


Route::get('/', [HomeController::class, 'index']);//trang chu
Route::get('/san-pham', [SanPhamController::class, 'index']);//tat ca san pham
Route::get('/chi-tiet-san-pham/{slug}', [SanPhamController::class, 'product_detail']);//tat ca san pham
Route::get('/lien-he', [DieuKhoanControler::class, 'index']);//lien he
Route::prefix('admin')->group(function ()
{
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index'); //bang dieu khien -- home admin

    Route::prefix('category')->group(function ()
    {
        Route::get('/', [CategoryController::class,'index'])->name('admin.category.index'); //danh sach danh muc
        Route::get('insert', [CategoryController::class,'insert'])->name('admin.category.insert'); //edit danh muc
        Route::get('edit/{id}', [CategoryController::class,'edit'])->name('admin.category.edit'); //edit danh muc
        Route::get('delete/{id}', [CategoryController::class,'delete'])->name('admin.category.delete'); //xoa danh muc
    });

    Route::prefix('brand')->group(function ()
    {
        Route::get('/', [BrandController::class,'index'])->name('admin.brand.index'); //danh sach thuong hieu
        Route::get('insert', [BrandController::class,'insert'])->name('admin.brand.insert'); //edit thuong hieu
        Route::get('edit/{id}', [BrandController::class,'edit'])->name('admin.brand.edit'); //edit thuong hieu
        Route::get('delete/{id}', [BrandController::class,'delete'])->name('admin.brand.delete'); //xoa thuong hieu
    });

    Route::prefix('product')->group(function ()
    {
        Route::get('/', [ProductController::class,'index'])->name('admin.product.index'); //danh sach san pham
        Route::get('/insert', [ProductController::class,'insert'])->name('admin.product.insert'); //them san pham
        Route::get('edit/{id}', [ProductController::class,'edit'])->name('admin.product.edit'); //edit san pham
        Route::get('delete/{id}', [ProductController::class,'delete'])->name('admin.product.delete'); //xoa san pham
    });
    Route::prefix('post')->group(function ()
    {
        Route::get('/', [PostController::class,'index'])->name('admin.post.index'); //danh sach san pham
        Route::get('/insert', [PostController::class,'insert'])->name('admin.post.insert'); //them san pham
        Route::get('edit/{id}', [PostController::class,'edit'])->name('admin.post.edit'); //edit san pham
        Route::get('delete/{id}', [PostController::class,'delete'])->name('admin.post.delete'); //xoa san pham
    });
    Route::prefix('topic')->group(function ()
    {
        Route::get('/', [TopicController::class,'index'])->name('admin.topic.index'); //danh sach san pham
        Route::get('/insert', [TopicController::class,'insert'])->name('admin.topic.insert'); //them san pham
        Route::get('edit/{id}', [TopicController::class,'edit'])->name('admin.topic.edit'); //edit san pham
        Route::get('delete/{id}', [TopicController::class,'delete'])->name('admin.topic.delete'); //xoa san pham
    });
    Route::prefix('menu')->group(function ()
    {
        Route::get('/', [MenuController::class,'index'])->name('admin.menu.index'); //danh sach san pham
        Route::get('/insert', [MenuController::class,'insert'])->name('admin.menu.insert'); //them san pham
        Route::get('edit/{id}', [MenuController::class,'edit'])->name('admin.menu.edit'); //edit san pham
        Route::get('delete/{id}', [MenuController::class,'delete'])->name('admin.menu.delete'); //xoa san pham
    });
    Route::prefix('user')->group(function ()
    {
        Route::get('/', [UserController::class,'index'])->name('admin.user.index'); //danh sach san pham
        Route::get('/insert', [UserController::class,'insert'])->name('admin.user.insert'); //them san pham
        Route::get('edit/{id}', [UserController::class,'edit'])->name('admin.user.edit'); //edit san pham
        Route::get('delete/{id}', [UserController::class,'delete'])->name('admin.user.delete'); //xoa san pham
    });
    Route::prefix('order')->group(function ()
    {
        Route::get('/', [OrderController::class,'index'])->name('admin.order.index'); //danh sach san pham
        Route::get('/insert', [OrderController::class,'insert'])->name('admin.order.insert'); //them san pham
        Route::get('edit/{id}', [OrderController::class,'edit'])->name('admin.order.edit'); //edit san pham
        Route::get('delete/{id}', [OrderController::class,'delete'])->name('admin.order.delete'); //xoa san pham
    });
    Route::prefix('banner')->group(function ()
    {
        Route::get('/', [BannerController::class,'index'])->name('admin.banner.index'); //danh sach san pham
        Route::get('/insert', [BannerController::class,'insert'])->name('admin.banner.insert'); //them san pham
        Route::get('edit/{id}', [BannerController::class,'edit'])->name('admin.banner.edit'); //edit san pham
        Route::get('delete/{id}', [BannerController::class,'delete'])->name('admin.banner.delete'); //xoa san pham
    });
    Route::prefix('banner')->group(function ()
    {
        Route::get('/', [BannerController::class,'index'])->name('admin.banner.index'); //danh sach san pham
        Route::get('/insert', [BannerController::class,'insert'])->name('admin.banner.insert'); //them san pham
        Route::get('edit/{id}', [BannerController::class,'edit'])->name('admin.banner.edit'); //edit san pham
        Route::get('delete/{id}', [BannerController::class,'delete'])->name('admin.banner.delete'); //xoa san pham
    });
    Route::prefix('contact')->group(function ()
    {
        Route::get('/', [ContactController::class,'index'])->name('admin.contact.index'); //danh sach san pham
        Route::get('/insert', [ContactController::class,'insert'])->name('admin.contact.insert'); //them san pham
        Route::get('edit/{id}', [ContactController::class,'edit'])->name('admin.contact.edit'); //edit san pham
        Route::get('delete/{id}', [ContactController::class,'delete'])->name('admin.contact.delete'); //xoa san pham
    });
});