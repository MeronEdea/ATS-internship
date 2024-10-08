<?php
use App\Http\Controllers\AdminManagementController;
use App\Http\Controllers\DriverManagementController;
use App\Http\Controllers\NotificationManagementController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ScheduleManagementController;
use App\Http\Controllers\TerminalController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('schedule-management/index');
// });

Route::get('/schedule', [ScheduleManagementController::class, 'index'])->name('schedule.index');
Route::get('/driver', [DriverManagementController::class, 'index'])->name('driver.index');
Route::get('/admin', [AdminManagementController::class, 'index'])->name('admin.index');
Route::get('/price', [PriceController::class, 'index'])->name('price.index');
Route::get('/notification', [NotificationManagementController::class, 'index'])->name('notification.index');

Route::get('/assign-orders', [TerminalController::class, 'index'])->name('assign-order.index');
Route::post('/assign-orders/create', [TerminalController::class, 'store'])->name('assign-order.store');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
