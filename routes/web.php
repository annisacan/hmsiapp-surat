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
use App\Http\Controllers\BuatSuratController;
use App\Http\Controllers\BeritaAcaraController;
use App\Http\Controllers\UndanganRapatController;
use App\Http\Controllers\SuratPeminjamanController;

use Laravel\Fortify\Http\Controllers\NewPasswordController;
use App\Http\Controllers\SuratDivController;
use App\Http\Controllers\KahimController;
use App\Http\Controllers\DashboardKahimController;
use BuatSuratController as GlobalBuatSuratController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('kirimSurat/index', [SuratController::class, 'index'])->name('KirimSurat');
    Route::get('KelolaDivisi/index', [DivisiController::class, 'index'])->name('KelolaDivisi');
    Route::get('KelolaDivisi/create', [DivisiController::class, 'create'])->name('createDivisi');
    Route::post('KelolaDivisi/simpan', [DivisiController::class, 'simpan'])->name('simpanDivisi');
    Route::get('KelolaDivisi/edit/{id}', [DivisiController::class, 'edit'])->name('editDivisi');
    Route::post('KelolaDivisi/update/{id}', [DivisiController::class, 'update'])->name('updateDivisi');
    Route::post('KelolaDivisi/hapus/{id}', [DivisiController::class, 'hapus'])->name('hapusDivisi');
    Route::get('requestSurat/index', [RequestController::class, 'requestsurat'])->name('RequestSurat');
    Route::get('requestSurat/create', [RequestController::class, 'create'])->name('requestCreate');


    Route::get('KelolaUser', [UserController::class, 'index'])->name('KelolaUsers');
    Route::post('KelolaUser/simpan', [UserController::class, 'store'])->name('simpanUser');
    Route::put('KelolaUser/update/{id}', [UserController::class, 'update'])->name('updateUser');
    Route::delete('KelolaUser/hapus/{id}', [UserController::class, 'delete'])->name('deleteUser');
});



Route::get('SuratMasukSekre/index', [SuratController::class, 'suratmasuksekre'])->name('SuratMasukSekre');

//Generate Surat
Route::get('BuatSurat/index', [BuatSuratController::class, 'index'])->name('BuatSurat');

//Berita Acara
Route::post('berita-acara/store', [BeritaAcaraController::class, 'store'])->name('berita-acara.store');
Route::get('berita-acara/print-berita-acara/{id}', [BeritaAcaraController::class, 'print'])->name('print.berita-acara');

//Undangan Rapat
Route::post('undangan-rapat/store', [UndanganRapatController::class, 'store'])->name('undangan-rapat.store');
//Route::get('undangan-rapat/print-undangan-rapat/{id}', [UndanganRapatController::class, 'print'])->name('print.undangan-rapat');
Route::get('/undangan-rapat/cetak/{id}', [UndanganRapatController::class, 'cetak'])->name('undangan-rapat.cetak');

Route::post('surat-peminjaman/store', [SuratPeminjamanController::class, 'store'])->name('surat-peminjaman.store');
//Route::get('undangan-rapat/print-undangan-rapat/{id}', [UndanganRapatController::class, 'print'])->name('print.undangan-rapat');
Route::get('/surat-peminjaman/cetak/{id}', [SuratPeminjamanController::class, 'cetak'])->name('surat-peminjaman.cetak');

//Kahim
Route::get('DashboardKahim/index', [DashboardKahimController::class, 'index'])->name('DashboardKahim');
Route::get('SuratMasukKahim/index', [KahimController::class, 'index'])->name('SuratMasukKahim');



Route::get('/DashboardBendahara', [DashboardController::class, 'dashboardbend'])->name('dashboardbend');
Route::get('DanaMasuk/danamasuk', [BendaharaController::class, 'danamasuk'])-> name('DanaMasuk');
Route::put('/update-ajuan/{id}', [BendaharaController::class, 'update'])->name('update.ajuan');

Route::get('LaporanDana/laporandana', [BendaharaController::class, 'laporandana'])-> name('LaporanDana');


// Route divisi
Route::get('/DashboardDivisi', [DashboardController::class, 'dashboarddiv'])->name('dashboarddiv');
Route::get('ReqSurat/reqsurat', [SuratDivController::class, 'reqsurat'])-> name('ReqSurat');
Route::get('AjuanDana/ajuandana', [SuratDivController::class, 'ajuandana'])-> name('AjuanDana');
Route::get('KirimSurat/kirimsurat', [SuratDivController::class, 'kirimsurat'])-> name('KirimSurat');
Route::get('ArsipSurat/arsipsurat', [SuratDivController::class, 'arsipsurat'])-> name('ArsipSurat');
Route::post('/request-surat', [SuratDivController::class, 'store'])->name('request-surat.store');
Route::post('/ajuan-dana', [SuratDivController::class, 'storeAjuan'])->name('ajuan.store');
Route::post('/kirim-surat', [SuratDivController::class, 'storeKirimSurat'])->name('kirim-surat.store');
Route::put('/request-surat/{id}', [SuratDivController::class,'update'])->name('request-surat.update');
Route::put('/ajuan/{id}', [SuratDivController::class,'updateAjuan'])->name('ajuan.update');
Route::delete('/ajuan/{ajuan}', [SuratDivController::class,'destroy'])->name('ajuan.destroy');
Route::delete('/request-surat/{request}', [SuratDivController::class,'destroySurat'])->name('request-surat.destroy');










// Route::get('kelolaDivisi/index', [DivisiController::class, 'index'])-> name('kelolaDivisi');

// Route::get('/', function() {
//     return view('dashboard');
// });
