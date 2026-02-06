<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Client\ClientAuthController;
use App\Http\Controllers\Client\ClientDashboardController;
use App\Http\Controllers\Client\ClientOrderController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;

// Public routes
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/terms-of-service', [PageController::class, 'termsOfService'])->name('terms.service');
Route::get('/order-now', [PageController::class, 'orderNow'])->name('order.now');

// Client Authentication
Route::get('/client/login', [ClientAuthController::class, 'showLogin'])->name('client.login');
Route::post('/client/login', [ClientAuthController::class, 'login']);
Route::get('/client/register', [ClientAuthController::class, 'showRegister'])->name('client.register');
Route::post('/client/register', [ClientAuthController::class, 'register']);
Route::post('/client/logout', [ClientAuthController::class, 'logout'])->name('client.logout');

// Client Dashboard & Orders
Route::get('/client/dashboard', [ClientDashboardController::class, 'index'])->name('client.dashboard');
Route::get('/client/orders', [ClientOrderController::class, 'index'])->name('client.orders.index');
Route::get('/client/orders/create', [ClientOrderController::class, 'create'])->name('client.orders.create');
Route::post('/client/orders', [ClientOrderController::class, 'store'])->name('client.orders.store');
Route::get('/client/orders/{id}', [ClientOrderController::class, 'show'])->name('client.orders.show');

// Admin Authentication
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

// Admin Services
Route::get('/admin/services', [ServiceController::class, 'index'])->name('admin.services.index');
Route::get('/admin/services/create', [ServiceController::class, 'create'])->name('admin.services.create');
Route::post('/admin/services', [ServiceController::class, 'store'])->name('admin.services.store');
Route::get('/admin/services/{id}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
Route::put('/admin/services/{id}', [ServiceController::class, 'update'])->name('admin.services.update');
Route::delete('/admin/services/{id}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');

// Admin Orders
Route::get('/admin/orders', [OrderController::class, 'index'])->name('admin.orders.index');
Route::get('/admin/orders/create', [OrderController::class, 'create'])->name('admin.orders.create');
Route::post('/admin/orders', [OrderController::class, 'store'])->name('admin.orders.store');
Route::get('/admin/orders/{id}', [OrderController::class, 'show'])->name('admin.orders.show');
Route::get('/admin/orders/{id}/edit', [OrderController::class, 'edit'])->name('admin.orders.edit');
Route::put('/admin/orders/{id}', [OrderController::class, 'update'])->name('admin.orders.update');
Route::delete('/admin/orders/{id}', [OrderController::class, 'destroy'])->name('admin.orders.destroy');
Route::post('/admin/orders/{id}/accept', [OrderController::class, 'accept'])->name('admin.orders.accept');
Route::post('/admin/orders/{id}/cancel', [OrderController::class, 'cancel'])->name('admin.orders.cancel');
Route::post('/admin/orders/{id}/deliver', [OrderController::class, 'deliver'])->name('admin.orders.deliver');

// Admin Clients
Route::get('/admin/clients', [ClientController::class, 'index'])->name('admin.clients.index');
Route::get('/admin/clients/create', [ClientController::class, 'create'])->name('admin.clients.create');
Route::post('/admin/clients', [ClientController::class, 'store'])->name('admin.clients.store');
Route::get('/admin/clients/{id}', [ClientController::class, 'show'])->name('admin.clients.show');
Route::get('/admin/clients/{id}/edit', [ClientController::class, 'edit'])->name('admin.clients.edit');
Route::put('/admin/clients/{id}', [ClientController::class, 'update'])->name('admin.clients.update');
Route::delete('/admin/clients/{id}', [ClientController::class, 'destroy'])->name('admin.clients.destroy');

// Admin Portfolio
Route::get('/admin/portfolio', [PortfolioController::class, 'index'])->name('admin.portfolio.index');
Route::get('/admin/portfolio/create', [PortfolioController::class, 'create'])->name('admin.portfolio.create');
Route::post('/admin/portfolio', [PortfolioController::class, 'store'])->name('admin.portfolio.store');
Route::get('/admin/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('admin.portfolio.edit');
Route::put('/admin/portfolio/{id}', [PortfolioController::class, 'update'])->name('admin.portfolio.update');
Route::delete('/admin/portfolio/{id}', [PortfolioController::class, 'destroy'])->name('admin.portfolio.destroy');