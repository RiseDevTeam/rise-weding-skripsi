<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\Home\HomePageController;
use App\Http\Controllers\User\Users\UserPageController;
use App\Http\Controllers\User\Pembayaran\PembayaranController;
use App\Http\Controllers\Admin\Template\FileTemplateController;
use App\Http\Controllers\Admin\Pemesanan\PemesananAdminController;
use App\Http\Controllers\User\TemplateInvitation\PemesananTemplate;

use App\Http\Controllers\Admin\Pembayaran\PembayaranAdminController;
use App\Http\Controllers\User\PemesananSaya\PemesananSayaController;
use App\Http\Controllers\Admin\Template\TemplateInvitationController;
use App\Http\Controllers\CashOutController;
use App\Http\Controllers\LaporanAdminController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LaporanPemesananController;

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
//     return view('welcome');
// });


Route::get('/', [HomePageController::class, 'home_page'])->name('/');

Route::get('preview-blog', function () {
    return view('backend.admin.blog.preview');
});


Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::POST('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::POST('proses_register', [AuthController::class, 'proses_register'])->name('register.proses');

Route::prefix('risedev-wedding-users')->group(function () {
    Route::get('kategori-template', [UserPageController::class, 'kategori_template'])->name('kategori_template_users');
    Route::get('video-invitation', [UserPageController::class, 'video_invitation'])->name('video_invitation');
    Route::get('portofolio', [UserPageController::class, 'portfolio'])->name('portofolio');
    Route::get('blog', [UserPageController::class, 'blog'])->name('blog');
    Route::get('detail-blog/{id_blog}', [UserPageController::class, 'detail_blog'])->name('detail_blog');


    Route::prefix('template-invitation')->group(function () {
        Route::get('template-invitation/{id_kategori_template}', [PemesananTemplate::class, 'template_invitation'])->name('template_invitation');
    });
});

Route::middleware(['auth'])->group(function () {

    Route::prefix('risedev-wedding-users')->group(function () {

        Route::prefix('template_invitation')->group(function () {
            Route::get('detail-template/{id_template}', [PemesananTemplate::class, 'detail_template'])->name('detail-template');
            Route::POST('simpan-template/{id_template}', [PemesananTemplate::class, 'pemesanan_template'])->name('pemesanan_template');
            Route::get('data-undangan/{id_template}', [PemesananTemplate::class, 'data_undangan'])->name('data_undangan');
            Route::get('preview-template/{id_template}', [PemesananTemplate::class, 'preview_template'])->name('preview_template');
            Route::POST('data-undangan-store_basic/{kategori}', [PemesananTemplate::class, 'data_undangan_store_basic'])->name('data_undangan_store_basic');
            Route::POST('data_undangan_store_premium/{kategori}', [PemesananTemplate::class, 'data_undangan_store_premium'])->name('data_undangan_store_premium');
        });

        Route::prefix('pembayaran')->group(function () {
            Route::get('pembayaran_template/{id_template}', [PembayaranController::class, 'pembayaran_template'])->name('pembayaran_template');
            Route::POST('pembayaran_template_store', [PembayaranController::class, 'pembayaran_template_store'])->name('pembayaran_template_store');
        });

        Route::prefix('pemesanan-saya')->group(function () {
            Route::get('pemesanan_saya', [PemesananSayaController::class, 'pemesanan_saya'])->name('pemesanan_saya');
        });
    });


    Route::prefix('risedev-wedding-administrator')->middleware('checkStatus:admin,mitra')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        // route kategori
        Route::resource('kategori', '\App\Http\Controllers\Admin\Kategori\KategoriController');
        // route RincianKategori
        Route::resource('rincian_kategori', '\App\Http\Controllers\Admin\Kategori\RincianKategoriController');
        // route SubKategori
        Route::resource('sub_kategori', '\App\Http\Controllers\Admin\Kategori\SubKategoriController');
        // route TemplateInvitation
        Route::resource('template', '\App\Http\Controllers\Admin\Template\TemplateInvitationController');
        // route Musik Template
        Route::resource('musik', '\App\Http\Controllers\Admin\Template\MusikController');
        // route Mitra Template
        Route::resource('mitra', '\App\Http\Controllers\MitraController');

        // route Blog   
        Route::resource('blog', '\App\Http\Controllers\Admin\BlogController');
        Route::post('blog/upload', [BlogController::class, 'upload'])->name('blog.upload');
        Route::get('changeStatusBlog', [BlogController::class, 'changeStatus'])->name('blog.changeStatus');
        Route::get('preview-blog/{slug}', [BlogController::class, 'preview'])->name('blog.preview');


        // route File Template
        Route::get('file_template/index/{id}', [FileTemplateController::class, 'show'])->name('file_template.show');
        Route::get('file_template/create/{id}', [FileTemplateController::class, 'create'])->name('file_template.create');
        Route::POST('kategori_template',  [FileTemplateController::class, 'kategori_template'])->name('kategori_template');
        Route::POST('file_template/store/{id}', [FileTemplateController::class, 'store'])->name('file_template.store');
        Route::get('file_template/{id}/edit', [FileTemplateController::class, 'edit'])->name('file_template.edit');
        Route::PUT('file_template/{id}/edit', [FileTemplateController::class, 'update'])->name('file_template.update');
        Route::DELETE('file_template/delete/{id}', [FileTemplateController::class, 'destroy'])->name('file_template.destroy');

        // route akun petugas
        Route::resource('petugas', '\App\Http\Controllers\Admin\Petugas\PetugasController');

        // route video
        Route::resource('kategori_video', '\App\Http\Controllers\Admin\Video\KategoriVideoController');
        Route::resource('rincian_kategori_video', '\App\Http\Controllers\Admin\Video\RincianKategoriVideoController');
        Route::resource('video_wedding', '\App\Http\Controllers\Admin\Video\VideoController');

        // route pemesanan
        Route::get('pemesanan', [PemesananAdminController::class, 'index'])->name('data-pemesanan');
        Route::get('print_laporan_pemesanan_bulan_tahun/{pilih_tahun}/{pilih_bulan}', [PemesananAdminController::class, 'print_laporan_pemesanan_bulan_tahun'])->name('print_laporan_pemesanan_bulan_tahun');
        Route::get('print_laporan_pemesanan', [PemesananAdminController::class, 'print_laporan_pemesanan'])->name('print_laporan_pemesanan');
        Route::POST('cari_pemesanan', [PemesananAdminController::class, 'cari_pemesanan'])->name('cari_pemesanan');
        Route::DELETE('pemesanan/delete/{id}', [PemesananAdminController::class, 'destroy'])->name('data-pemesanan.destroy');

        // route pembayaran
        Route::get('pembayaran', [PembayaranAdminController::class, 'index'])->name('data-pembayaran');
        Route::PUT('pembayaran/setujui/{id}', [PembayaranAdminController::class, 'setujui'])->name('data-pembayaran.setujui');
        Route::PUT('pembayaran/tolak/{id}', [PembayaranAdminController::class, 'tolak'])->name('data-pembayaran.tolak');


        // Cash Out
        Route::get('cashout_mitra', [CashOutController::class, 'index'])->name('cashout-pembayaran');
        Route::get('cashout_admin', [CashOutController::class, 'cashout_admin'])->name('cashout_admin');
        Route::POST('proses_cash_out', [CashOutController::class, 'proses_cash_out'])->name('proses_cash_out');
        Route::get('detail_cashout_admin/{id}', [CashOutController::class, 'detail_cashout_admin'])->name('detail_cashout_admin');
        Route::POST('konfirmasi_cash_out_admin', [CashOutController::class, 'konfirmasi_cash_out_admin'])->name('konfirmasi_cash_out_admin');

        //Laporan Admin
        Route::get('laporan_cashout', [LaporanAdminController::class, 'laporan_cashout'])->name('laporan_cashout');
        Route::get('laporan_rekapitulasi', [LaporanAdminController::class, 'laporan_rekapitulasi'])->name('laporan_rekapitulasi');

        Route::POST('cari_rekapitulasi_tahun', [LaporanAdminController::class, 'cari_rekapitulasi_tahun'])->name('cari_rekapitulasi_tahun');

        Route::get('print_laporan_rekapitulasi', [LaporanAdminController::class, 'print_laporan_rekapitulasi'])->name('print_laporan_rekapitulasi');
        Route::get('print_laporan_rekapitulasi_tahun/{pilih_mitra}/{pilih_tahun}', [LaporanAdminController::class, 'print_laporan_rekapitulasi_tahun'])->name('print_laporan_rekapitulasi_tahun');
        Route::get('print_laporan_rekapitulasi', [LaporanAdminController::class, 'print_laporan_rekapitulasi'])->name('print_laporan_rekapitulasi');

        //laporan pemesanan
        Route::get('laporan_pemesanan', [LaporanPemesananController::class, 'laporan_pemesanan'])->name('laporan_pemesanan');
        Route::get('laporan_rekapitulasi', [LaporanAdminController::class, 'laporan_rekapitulasi'])->name('laporan_rekapitulasi');

        // Laporan Mitra
        Route::get('laporan_cashout_mitra', [LaporanController::class, 'laporan_cashout_mitra'])->name('laporan_cashout_mitra');
        Route::get('laporan_penjualan', [LaporanController::class, 'laporan_penjualan'])->name('laporan_penjualan');

        Route::get('print_laporan_cash_mitra', [LaporanController::class, 'print_laporan_cash_mitra'])->name('print_laporan_cash_mitra');
        Route::get('print_laporan_cash_mitra_bulan/{bulan_cashout}', [LaporanController::class, 'print_laporan_cash_mitra_bulan'])->name('print_laporan_cash_mitra_bulan');
        Route::get('print_laporan_penjualan', [LaporanController::class, 'print_laporan_penjualan'])->name('print_laporan_penjualan');
        Route::get('print_laporan_penjualan_tahun_bulan/{tahun_print}/{bulan_print}', [LaporanController::class, 'print_laporan_penjualan_tahun_bulan'])->name('print_laporan_penjualan_tahun_bulan');

        Route::POST('cari_penjualan', [LaporanController::class, 'cari_penjualan'])->name('cari_penjualan');
        Route::POST('cari_cashout_mitra', [LaporanController::class, 'cari_cashout_mitra'])->name('cari_cashout_mitra');
    });
    Route::get('logout', [GoogleController::class, 'logout'])->name('logout');
});
