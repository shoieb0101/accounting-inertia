<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pament-review', function () {
    return Inertia::render('PaymentReview');
})->middleware(['auth', 'verified'])->name('payment-review');

Route::get('/completed-payroll', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth'])->name('completed-payroll');

Route::get('/timecard-entry', function () {
    return Inertia::render('TimecardEntry');
})->middleware(['auth'])->name('timecard-entry');

Route::get('/entry-1', function () {
    return Inertia::render('EntryOne');
})->middleware(['auth'])->name('entry-1');

Route::get('/entry-2', function () {
    return Inertia::render('EntryTwo');
})->middleware(['auth'])->name('entry-2');

Route::get('/pending-payroll', function () {
    return Inertia::render('PendingPayroll');
})->middleware(['auth'])->name('pending-payroll');

Route::get('/view-invoice', function () {
    return Inertia::render('ViewInvoice');
})->middleware(['auth'])->name('view-invoice');

Route::get('/statement', function () {
    return Inertia::render('Statement');
})->middleware(['auth'])->name('statement');

Route::get('/aging-report', function () {
    return Inertia::render('AgingReport');
})->middleware(['auth'])->name('aging-report');

require __DIR__.'/auth.php';
