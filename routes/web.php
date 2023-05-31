<?php
//library
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\PemesanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\JasaController;
use App\Http\Controllers\ReservasiController;
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
//halaman pengunjung
// Client Start
Route::get('/', [PengunjungController::class, 'index'])->name('/');
//fungsi jalur
// Client End
// auth login start
Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin', [DashboardController::class, 'index'])->name('/admin');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/jasa', [JasaController::class, 'index']);
    Route::post('/store-jasa', [JasaController::class, 'store']);
        // jasa Set
    Route::get('/jasa', [JasaController::class, 'index'])->name('/jasa');
    Route::get('/jasa/{id}/lihat-jasa', [JasaController::class, 'lihatjasa'])->name('lihat-jasa');
    Route::get('/jasa-tambah', [JasaController::class, 'tambahjasa'])->name('jasa-tambah');
    Route::post('/jasa-prosestambah', [JasaController::class, 'addprosesjasa'])->name('jasa-prosestambah');
    Route::get('/jasa/{id}/edit-jasa', [JasaController::class, 'editjasa'])->name('edit-jasa');
    Route::post('/jasa/{id}/edit-jasa-proses', [JasaController::class, 'editjasaproses'])->name('edit-jasa-proses');
    Route::get('/jasa/{id}/hapus-jasa', [JasaController::class, 'hapusjasa'])->name('hapus-jasa');
    //jasa End

    Route::get('/reservasi', [ReservasiController::class, 'index']);
    Route::post('/store-reservasi', [ReservasiController::class, 'store']);

    Route::post('/store', [ProdukController::class, 'store']);
    Route::post('/pemesanan', [PemesanController::class, 'store']);

    // jasa Set
    Route::get('/pemesanan', [pemesananController::class, 'index'])->name('/pemesanan');
    Route::get('/pemesanan/{id}/lihat-pemesanan', [pemesananController::class, 'lihatpemesanan'])->name('lihat-pemesanan');
    Route::get('/pemesanan-tambah', [pemesananController::class, 'tambahpemesanan'])->name('pemesanan-tambah');
    Route::post('/pemesanan-prosestambah', [pemesananController::class, 'addprosespemesanan'])->name('pemesanan-prosestambah');
    Route::get('/pemesanan/{id}/edit-pemesanan', [pemesananController::class, 'editpemesanan'])->name('edit-pemesanan');
    Route::post('/pemesanan/{id}/edit-pemesanan-proses', [pemesananController::class, 'editpemesananproses'])->name('edit-pemesanan-proses');
    Route::get('/pemesanan/{id}/hapus-pemesana', [pemesananController::class, 'hapuspemesanan'])->name('hapus-pemesanan');
    //jasa End

    Route::get('/pemesan', [PemesanController::class, 'index'])->name('/pemesan');
    Route::get('/client', [ClientController::class, 'index'])->name('/client');

    Route::get('/akun', [AkunController::class, 'index'])->name('/akun');
    Route::get('/akun/{id}/edit-akun', [AkunController::class, 'getAkun'])->name('editakun');

    // jasa Set
    Route::get('/produk', [ProdukController::class, 'index'])->name('/produk');
    Route::get('/produk/{id}/lihat-produk', [produkController::class, 'lihatproduk'])->name('lihat-produk');
    Route::get('/produk-tambah', [produkController::class, 'tambahproduk'])->name('produk-tambah');
    Route::post('/produk-prosestambah', [produkController::class, 'addprosesproduk'])->name('produk-prosestambah');
    Route::get('/produk/{id}/edit-produk', [produkController::class, 'editproduk'])->name('edit-produk');
    Route::post('/produk/{id}/edit-produk-proses', [produkController::class, 'editprodukproses'])->name('edit-produk-proses');
    Route::get('/produk/{id}/hapus-produk', [produkController::class, 'hapusproduk'])->name('hapus-produk');
    //jasa End

    Route::get('/logout', function (){
        \Auth::logout();
        return redirect('/');
    });

});
