<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Error404Controller;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PdDetailController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TermsController;


// for admin panned
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ManageContactController;
use App\Http\Controllers\Admin\ManageProductController;
use App\Http\Controllers\Admin\ManageReportController;
use App\Http\Controllers\Admin\ManageUserController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\OrdersController as AdminOrdersController;
use App\Http\Controllers\Admin\ResetPasswordController;
use App\Http\Controllers\Admin\SignupController;
use PhpParser\Error;

Route::get('/', function () {
    return view('index');
});
Route::get('/about',[AboutController::class,'index']);

Route::get('/blogs',[BlogsController::class,'index']);

Route::get('/career',[CareerController::class,'index']);

Route::get('/cart',[CartController::class,'index']);

Route::get('/contact',[ContactController::class,'index']);
Route::post('/contact',[ContactController::class,'store']);

Route::get('/checkout',[CheckoutController::class,'index']);

Route::get('/faq',[FaqController::class,'index']);

Route::get('/orders',[OrderController::class,'index']);

Route::get('/product-details',[PdDetailController::class,'index']);

Route::get('/privacy',[PrivacyController::class,'index']);

Route::get('/product',[ProductsController::class,'index']);

Route::get('/terms',[TermsController::class,'index']);

Route::get('/404',[Error404Controller::class,'index']);

// for admin login page



Route::get('/admin-account',[AccountController::class,'index'])->name('account');

Route::get('/admin-index',[AdminIndexController::class,'index'])->name('index');

Route::get('/admin-reset-password',[ResetPasswordController::class,'index'])->name('ResetPassword');

Route::get('/admin-error',[Error404Controller::class,'index'])->name('error');


Route::get('/admin-login',[LoginController::class,'index'])->name('login');

Route::get('/admin-notificaton',[NotificationController::class,'index'])->name('notification');

Route::get('/admin-orders',[AdminOrdersController::class,'index'])->name('orders');

Route::get('/admin-signup',[SignupController::class,'index'])->name('signup');

Route::get('/admin-manage-contact',[ManageContactController::class,'index'])->name('manage_contact');
Route::get('/admin-manage-contact',[ManageContactController::class,'show'])->name('manage_contact');
Route::get('/admin-manage-contact/delete/{id}',[ManageContactController::class,'destroy'])->name('manage_contact_delete');

Route::get('/admin-category',[CategoryController::class,'index'])->name('category');
Route::post('/admin-category',[CategoryController::class,'store'])->name('category');
Route::get('/admin-category/delete/{id}',[CategoryController::class,'destroy'])->name('category-delete');
Route::post('/admin-category/update/{id}',[CategoryController::class,'update'])->name('category-update');
// Route::get('/admin-category',[categoryController::class,'show'])->name('category');

Route::get('/admin-manage-user',[ManageUserController::class,'index'])->name('manage_users');
Route::get('/admin-manage-report',[ManageReportController::class,'index'])->name('manage_report');

Route::get('/admin-manage-product',[ManageProductController::class,'index'])->name('manage_product');
Route::post('/admin-manage-product',[ManageProductController::class,'store'])->name('manage_product');
Route::post('/admin-manage-product/{id}',[ManageProductController::class,'edit'])->name('manage_product_edit');
Route::get('/admin-manage-product/del{id}',[ManageProductController::class,'destroy'])->name('manage_product_delete');
