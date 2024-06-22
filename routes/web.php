<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BendaharaController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\SuratDivController;
use App\Http\Controllers\KahimController;
use App\Http\Controllers\DashboardKahimController;

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

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('kirimSurat/index', [SuratController::class, 'index'])-> name('KirimSurat');
Route::get('KelolaUser/index', [UserController::class, 'index'])-> name('KelolaUsers');
Route::get('/login', [AuthController::class, 'index'])-> name('login');

Route::get('KelolaDivisi/index', [DivisiController::class, 'index'])-> name('KelolaDivisi');
Route::get('KelolaDivisi/create', [DivisiController::class, 'create'])->name('createDivisi');
Route::post('KelolaDivisi/simpan', [DivisiController::class, 'simpan'])->name('simpanDivisi');
Route::get('KelolaDivisi/edit/{id}', [DivisiController::class, 'edit'])->name('editDivisi');
Route::post('KelolaDivisi/update/{id}', [DivisiController::class, 'update'])->name('updateDivisi');
Route::post('KelolaDivisi/hapus/{id}', [DivisiController::class, 'hapus'])->name('hapusDivisi');


Route::get('requestSurat/index', [RequestController::class, 'requestsurat'])-> name('RequestSurat');
Route::get('requestSurat/create', [RequestController::class, 'index'])-> name('requestCreate');

Route::get('SuratMasukSekre/index', [SuratController::class, 'suratmasuksekre'])->name('SuratMasukSekre');
Route::get('SuratKeluarSekre/index', [SuratController::class, 'suratkeluarsekre'])->name('SuratKeluarSekre');

Route::get('DashboardKahim/index', [DashboardKahimController::class, 'index'])->name('DashboardKahim');
Route::get('SuratMasukKahim/index', [KahimController::class, 'index'])->name('SuratMasukKahim');



Route::get('/DashboardBendahara', [DashboardController::class, 'dashboardbend'])->name('dashboard');
Route::get('DanaMasuk/danamasuk', [BendaharaController::class, 'danamasuk'])-> name('DanaMasuk');
Route::get('LaporanDana/laporandana', [BendaharaController::class, 'laporandana'])-> name('LaporanDana');

Route::get('/DashboardDivisi', [DashboardController::class, 'dashboarddiv'])->name('dashboard');
Route::get('ReqSurat/reqsurat', [SuratDivController::class, 'reqsurat'])-> name('ReqSurat');
Route::get('AjuanDana/ajuandana', [SuratDivController::class, 'ajuandana'])-> name('AjuanDana');
Route::get('KirimSurat/kirimsurat', [SuratDivController::class, 'kirimsurat'])-> name('KirimSurat');
Route::get('ArsipSurat/arsipsurat', [SuratDivController::class, 'arsipsurat'])-> name('ArsipSurat');

// Route::get('kelolaDivisi/index', [DivisiController::class, 'index'])-> name('kelolaDivisi');

// Route::get('/', function() {
//     return view('dashboard');
// });
