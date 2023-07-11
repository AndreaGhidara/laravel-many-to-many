<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController; //<---- Import del controller precedentemente creato!

/* ... */
use App\Http\Controllers\Admin\ProductController; // <---- Importare il controller da usare!!
// ...

    Route::get('/', function () {
        return view('welcome');
    });

    Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // Admin Post CRUD
        Route::resource('products', ProductController::class);
    });
// Route::middleware(['auth'])
//     ->prefix('admin') //definisce il prefisso "admin/" per le rotte di questo gruppo
//     ->name('admin.') //definisce il pattern con cui generare i nomi delle rotte cioè "admin.qualcosa"
//     ->group(function () {

//         //Siamo nel gruppo quindi:
//         // - il percorso "/" diventa "admin/"
//         // - il nome della rotta ->name("dashboard") diventa ->name("admin.dashboard")
//         Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// });

require __DIR__ . '/auth.php';
