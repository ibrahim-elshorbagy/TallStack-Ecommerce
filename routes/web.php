<?php

use App\Livewire\Auth\ForgetPasswordPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\CartPage;
use App\Livewire\CategoriesPage;
use App\Livewire\CheckoutPage;
use App\Livewire\HomePage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\ProductsPage;
use App\Livewire\SuccessPage;
use App\Livewire\CancelPage;
use Illuminate\Support\Facades\Route;

Route::get('/',HomePage::class);
Route::get('/categories',CategoriesPage::class);
Route::get('/products',ProductsPage::class);
Route::get('/cart',CartPage::class);
Route::get('/products/{product}',ProductDetailPage::class);
Route::get('/checkout',CheckoutPage::class);
Route::get('/my-orders',MyOrdersPage::class);
Route::get('/my-orders/{order}',MyOrderDetailPage::class);


Route::get('/login',LoginPage::class);;
Route::get('/register',RegisterPage::class);
Route::get('/forgot',ForgetPasswordPage::class);
Route::get('/rest',ResetPasswordPage::class);

Route::get('/success',SuccessPage::class);
Route::get('/cancel',CancelPage::class);

