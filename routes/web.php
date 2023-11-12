<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcountController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PerjalananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('auth.profil');
});

Route::get('/editprofil', function () {
    return view('auth.editprofil');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/adminDashboard', function () {
            return view('dashboard.adminDashboard');
        })->name('adminDashboard');

        Route::get('/addAcount', [AcountController::class, 'create'])->name('createAcount');
        Route::post('/addAcount', [AcountController::class, 'store'])->name('addAcount');
        // Route::prefix('manageAcount')->as('acount.')->group(function () {
        //     Route::get('/', [AcountController::class, 'index'])->name('index');
        //     Route::get('/{user}/edit', [AcountController::class, 'edit'])->name('edit');
        //     Route::put('/{user}', [AcountController::class, 'update'])->name('update');
        //     Route::delete('/{user}', [AcountController::class, 'destroy'])->name('destroy');
        // });
        Route::get('/manageAcount', [AcountController::class, 'index'])->name('acount.index');
        Route::get('/manageAcount/{user}/edit', [AcountController::class, 'edit'])->name('acount.edit');
        Route::put('/manageAcount/{user}', [AcountController::class, 'update'])->name('acount.update');
        Route::delete('/manageAcount/{user}', [AcountController::class, 'destroy'])->name('acount.destroy');

        Route::get('/tipeKendaraan', [KendaraanController::class, 'index'])->name('kendaraan.index');
        // Route::get('/tipeKendaraan/create', [KendaraanController::class, 'create'])->name('kendaraan.create');
        Route::post('/tipeKendaraan', [KendaraanController::class, 'store'])->name('kendaraan.store');
        Route::get('/tipeKendaraan/{vehicle}/edit', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
        Route::put('/tipeKendaraan/{vehicle}', [KendaraanController::class, 'update'])->name('kendaraan.update');
        Route::delete('/tipeKendaraan/{vehicle}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy');
        // Route::get('/tipeKendaraan/search', [KendaraanController::class, 'search'])->name('kendaraan.search');

        Route::get('/kondisiKendaraan', [KendaraanController::class, 'kondisi'])->name('kendaraan.kondisi');

        Route::get('/dataPerjalanan', [PerjalananController::class, 'getData'])->name('dataPerjalanan');

        // Route::get('/dataperjalanan', function () {
        //     return view('perjalanan.dataPerjalanan');
        // });


        Route::get('/statusperjalanan', function () {
            return view('perjalanan.statusperjalanan');
        });

        Route::get('/pelacakperjalanan', function () {
            return view('pelacak.pelacakperjalanan');
        });

        // Route::get('/datakondisikendaraan', function () {
        //     return view('kendaraan.kondisikendaraan');
        // });


        Route::get('/notifikasi', function () {
            return view('notifikasi.notifikasi');
        });

        Route::get('/map', function () {
            return view('pelacak.map');
        });

        Route::get('/profile', function () {
            return view('auth.profile');
        });

        Route::get('/editProfile', function () {
            return view('auth.editProfile');
        });
    });


    Route::group(['middleware' => ['user']], function () {
        Route::get('/userDashboard', function () {
            return view('dashboard.userDashboard');
        })->name('userDashboard');

        // Route::get('/tambahPerjalananUser', function(){
        //     return view('perjalanan.tambahDataPerjalananUser');
        // });
        Route::get('/tambahPerjalananUser', [PerjalananController::class, 'create'])->name('tambahPerjalananUser');
        Route::post('/tambahPerjalananUser', [PerjalananController::class, 'store'])->name('tambahPerjalananUser.store');
        // Route::get('/dataPerjalananUser', [PerjalananController::class, 'index'])->name('dataPerjalananUser.index');
        Route::get('/statusPerjalananUser/{perjalanan}/edit', [PerjalananController::class, 'edit'])->name('statusPerjalananUser.edit');
        Route::put('/statusPerjalananUser/{perjalanan}', [PerjalananController::class, 'update'])->name('statusPerjalananUser.update');
        Route::get('/statusPerjalananUser', [PerjalananController::class, 'index'])->name('statusPerjalananUser.index');
        Route::get('/dataPerjalananUser', [PerjalananController::class, 'getData'])->name('dataPerjalananUser');

        // Route::get('/dataperjalananUser', function () {
        //     return view('perjalanan.dataPerjalanan');
        // });


        Route::get('/kendaraanUser', function () {
            return view('kendaraan.kendaraanUser');
        });

        Route::get('/kondisiKendaraanUser', [KendaraanController::class, 'kondisi'])->name('kendaraanUser.kondisi');


        // Route::get('/statusPerjalananUser', function(){
        //     return view('perjalanan.statusPerjalananUser');
        // });

        Route::get('/pelacakPerjalananUser', function () {
            return view('pelacak.pelacakPerjalananUser');
        });

        Route::get('/riwayatPerjalananUser', function () {
            return view('perjalanan.riwayatPerjalananDriver');
        });

        Route::get('/notifikasiUser', function () {
            return view('notifikasi.notifikasiUser');
        });

        Route::get('/datakondisikendaraanUser', function () {
            return view('kendaraan.kondisikendaraan');
        });

        Route::get('/tipeKendaraanUser', [KendaraanController::class, 'index'])->name('kendaraanUser.index');

        Route::get('/profile', function () {
            return view('auth.profile');
        });

        Route::get('/editProfile', function () {
            return view('auth.editProfile');
        });
    });

});
