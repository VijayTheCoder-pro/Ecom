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
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PdDetailsController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TermsController;


// for admin panned
use App\Http\Controllers\Admin\accountController;
use App\Http\Controllers\Admin\indexController;
use App\Http\Controllers\Admin\loginController;
use App\Http\Controllers\Admin\notificationController;
use App\Http\Controllers\Admin\ordersController as AdminOrderscontroller;
use App\Http\Controllers\Admin\resetpasswordController;
use App\Http\Controllers\Admin\settingsController;
use App\Http\Controllers\Admin\signupController;
use App\Http\Controllers\Admin\manage_contactController;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\manage_productController;
use App\Http\Controllers\Admin\manage_reportController;
use App\Http\Controllers\Admin\manage_userController;
use App\Models\Admin\login;
use App\Models\Admin\manage_report;
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

Route::get('/orders',[OrdersController::class,'index']);

Route::get('/product-details',[PdDetailsController::class,'index']);

Route::get('/privacy',[PrivacyController::class,'index']);

Route::get('/product',[ProductsController::class,'index']);

Route::get('/terms',[TermsController::class,'index']);

Route::get('/404',[Error404Controller::class,'index']);

// for admin login page



Route::get('/admin-account',[accountController::class,'index'])->name('account');

Route::get('/admin-index',[indexController::class,'index'])->name('index');

Route::get('/admin-reset-password',[resetpasswordController::class,'index'])->name('ResetPassword');

Route::get('/admin-error',[Error404Controller::class,'index'])->name('error');


Route::get('/admin-login',[loginController::class,'index'])->name('login');

Route::get('/admin-notificaton',[notificationController::class,'index'])->name('notification');

Route::get('/admin-orders',[AdminOrderscontroller::class,'index'])->name('orders');

Route::get('/admin-signup',[signupController::class,'index'])->name('signup');

Route::get('/admin-manage-contact',[manage_contactController::class,'index'])->name('manage_contact');
Route::get('/admin-manage-contact',[manage_contactController::class,'show'])->name('manage_contact');
Route::get('/admin-manage-contact/delete/{id}',[manage_contactController::class,'destroy'])->name('manage_contact_delete');

Route::get('/admin-category',[categoryController::class,'index'])->name('category');
Route::post('/admin-category',[categoryController::class,'store'])->name('category');
Route::get('/admin-category/delete/{id}',[categoryController::class,'destroy'])->name('category-delete');
Route::post('/admin-category/update/{id}',[categoryController::class,'update'])->name('category-update');
// Route::get('/admin-category',[categoryController::class,'show'])->name('category');

Route::get('/admin-manage-user',[manage_userController::class,'index'])->name('manage_users');
Route::get('/admin-manage-report',[manage_reportController::class,'index'])->name('manage_report');
Route::get('/admin-manage-product',[manage_productController::class,'index'])->name('manage_product');