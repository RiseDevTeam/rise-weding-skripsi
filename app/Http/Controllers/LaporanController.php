<?php

namespace App\Http\Controllers;

use App\Http\Controllers\User\Pembayaran\PembayaranController;
use App\Models\CashOut;
use App\Models\PembayaranInvitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function laporan_cashout_mitra()
    {
        $laporan_cashout_mitra = CashOut::leftjoin('bank_mitra', 'cash_out.id_user', '=', 'bank_mitra.id_user')->leftjoin('pembayaran_invitation', 'cash_out.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
            ->leftjoin('users', 'cash_out.id_user', '=', 'users.id')
            ->leftjoin('pemesanan_invitation', 'pemesanan_invitation.id_pemesanan', '=', 'pembayaran_invitation.id_pemesanan')
            ->leftjoin('detail_pemesanan_invitation', 'detail_pemesanan_invitation.id_pemesanan', '=', 'pemesanan_invitation.id_pemesanan')
            ->leftjoin('detail_pembayaran_invitation', 'detail_pembayaran_invitation.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
            ->leftjoin('template_invitation', 'template_invitation.id_template', '=', 'pemesanan_invitation.id_template')
            ->leftjoin('kategori_template', 'kategori_template.id_kategori_template', '=', 'template_invitation.id_kategori')
            ->select(
                'pembayaran_invitation.id_pembayaran',
                'detail_pembayaran_invitation.kode_transaksi',
                'pemesanan_invitation.kategori_template',
                'detail_pembayaran_invitation.total as harga_template',
                'kategori_template.kategori',
                'bank_mitra.*',
                'users.name',
                'cash_out.id_user',
                'cash_out.status',
                DB::raw('SUM(cash_out.total) as total_cashout'),
            )
            ->where('cash_out.status', 'konfirmasi')
            ->where('cash_out.id_user', Auth::User()->id)
            ->groupBy('cash_out.id_user')
            ->get();

        return view('backend.admin.laporan_admin.laporan_cashout_mitra', compact('laporan_cashout_mitra'));
    }


    public function cari_cashout_mitra(Request $request)
    {
        $bulan_cashout = $request->bulan;

        $laporan_cashout_mitra = CashOut::leftjoin('bank_mitra', 'cash_out.id_user', '=', 'bank_mitra.id_user')->leftjoin('pembayaran_invitation', 'cash_out.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
            ->leftjoin('users', 'cash_out.id_user', '=', 'users.id')
            ->leftjoin('pemesanan_invitation', 'pemesanan_invitation.id_pemesanan', '=', 'pembayaran_invitation.id_pemesanan')
            ->leftjoin('detail_pemesanan_invitation', 'detail_pemesanan_invitation.id_pemesanan', '=', 'pemesanan_invitation.id_pemesanan')
            ->leftjoin('detail_pembayaran_invitation', 'detail_pembayaran_invitation.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
            ->leftjoin('template_invitation', 'template_invitation.id_template', '=', 'pemesanan_invitation.id_template')
            ->leftjoin('kategori_template', 'kategori_template.id_kategori_template', '=', 'template_invitation.id_kategori')
            ->select(
                'pembayaran_invitation.id_pembayaran',
                'detail_pembayaran_invitation.kode_transaksi',
                'pemesanan_invitation.kategori_template',
                'detail_pembayaran_invitation.total as harga_template',
                'kategori_template.kategori',
                'bank_mitra.*',
                'users.name',
                'cash_out.id_user',
                'cash_out.status',
                'cash_out.tanggal_cashout as cashout_tanggal',
                DB::raw('SUM(cash_out.total) as total_cashout'),
            )
            ->where('cash_out.status', 'konfirmasi')
            ->where('cash_out.id_user', Auth::User()->id)
            ->whereMonth('cash_out.tanggal_cashout', $request->bulan)
            ->groupBy('cash_out.id_user')
            ->get();
        return view('backend.admin.laporan_admin.laporan_cashout_mitra', compact('laporan_cashout_mitra', 'bulan_cashout'));
    }

    public function laporan_penjualan()
    {
        $laporan_penjualan = PembayaranInvitation::leftjoin('detail_pembayaran_invitation', 'pembayaran_invitation.id_pembayaran', '=', 'detail_pembayaran_invitation.id_pembayaran')->leftjoin('pemesanan_invitation', 'pembayaran_invitation.id_pemesanan', '=', 'pemesanan_invitation.id_pemesanan')
            ->leftjoin('template_invitation', 'pemesanan_invitation.id_template', '=', 'template_invitation.id_template')
            ->leftjoin('users', 'pemesanan_invitation.email', '=', 'users.email')
            ->select('users.name', 'users.email', 'pemesanan_invitation.kategori_template', 'template_invitation.gambar_cover', 'template_invitation.id_user', 'pemesanan_invitation.tanggal_pemesanan', 'detail_pembayaran_invitation.total')
            ->where('template_invitation.id_user', Auth::User()->id)
            ->get();
        return view('backend.admin.laporan_admin.laporan_penjualan', compact('laporan_penjualan'));
    }

    public function print_laporan_cash_mitra()
    {
        $cetak_cashout_mitra = CashOut::leftjoin('bank_mitra', 'cash_out.id_user', '=', 'bank_mitra.id_user')->leftjoin('pembayaran_invitation', 'cash_out.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
            ->leftjoin('users', 'cash_out.id_user', '=', 'users.id')
            ->leftjoin('pemesanan_invitation', 'pemesanan_invitation.id_pemesanan', '=', 'pembayaran_invitation.id_pemesanan')
            ->leftjoin('detail_pemesanan_invitation', 'detail_pemesanan_invitation.id_pemesanan', '=', 'pemesanan_invitation.id_pemesanan')
            ->leftjoin('detail_pembayaran_invitation', 'detail_pembayaran_invitation.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
            ->leftjoin('template_invitation', 'template_invitation.id_template', '=', 'pemesanan_invitation.id_template')
            ->leftjoin('kategori_template', 'kategori_template.id_kategori_template', '=', 'template_invitation.id_kategori')
            ->select(
                'pembayaran_invitation.id_pembayaran',
                'detail_pembayaran_invitation.kode_transaksi',
                'pemesanan_invitation.kategori_template',
                'detail_pembayaran_invitation.total as harga_template',
                'kategori_template.kategori',
                'bank_mitra.*',
                'users.name',
                'cash_out.id_user',
                'cash_out.status',
                DB::raw('SUM(cash_out.total) as total_cashout'),
            )
            ->where('cash_out.status', 'konfirmasi')
            ->where('cash_out.id_user', Auth::User()->id)
            ->groupBy('cash_out.id_user')
            ->get();

        return view('backend.admin.print.print_cashout_mitra', compact('cetak_cashout_mitra'));
    }
    public function print_laporan_cash_mitra_bulan($bulan_cashout)
    {
        $cetak_cashout_mitra = CashOut::leftjoin('bank_mitra', 'cash_out.id_user', '=', 'bank_mitra.id_user')->leftjoin('pembayaran_invitation', 'cash_out.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
            ->leftjoin('users', 'cash_out.id_user', '=', 'users.id')
            ->leftjoin('pemesanan_invitation', 'pemesanan_invitation.id_pemesanan', '=', 'pembayaran_invitation.id_pemesanan')
            ->leftjoin('detail_pemesanan_invitation', 'detail_pemesanan_invitation.id_pemesanan', '=', 'pemesanan_invitation.id_pemesanan')
            ->leftjoin('detail_pembayaran_invitation', 'detail_pembayaran_invitation.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
            ->leftjoin('template_invitation', 'template_invitation.id_template', '=', 'pemesanan_invitation.id_template')
            ->leftjoin('kategori_template', 'kategori_template.id_kategori_template', '=', 'template_invitation.id_kategori')
            ->select(
                'pembayaran_invitation.id_pembayaran',
                'detail_pembayaran_invitation.kode_transaksi',
                'pemesanan_invitation.kategori_template',
                'detail_pembayaran_invitation.total as harga_template',
                'kategori_template.kategori',
                'bank_mitra.*',
                'users.name',
                'cash_out.id_user',
                'cash_out.status',
                DB::raw('SUM(cash_out.total) as total_cashout'),
            )
            ->where('cash_out.status', 'konfirmasi')
            ->where('cash_out.id_user', Auth::User()->id)
            ->whereMonth('cash_out.tanggal_cashout', $bulan_cashout)
            ->groupBy('cash_out.id_user')
            ->get();

        return view('backend.admin.print.print_cashout_mitra', compact('cetak_cashout_mitra', 'bulan_cashout'));
    }

    public function print_laporan_penjualan()
    {
        $print_penjualan = PembayaranInvitation::leftjoin('detail_pembayaran_invitation', 'pembayaran_invitation.id_pembayaran', '=', 'detail_pembayaran_invitation.id_pembayaran')->leftjoin('pemesanan_invitation', 'pembayaran_invitation.id_pemesanan', '=', 'pemesanan_invitation.id_pemesanan')
            ->leftjoin('template_invitation', 'pemesanan_invitation.id_template', '=', 'template_invitation.id_template')
            ->leftjoin('users', 'pemesanan_invitation.email', '=', 'users.email')
            ->select('users.name', 'users.email', 'pemesanan_invitation.kategori_template', 'template_invitation.gambar_cover', 'template_invitation.id_user', 'pemesanan_invitation.tanggal_pemesanan', 'detail_pembayaran_invitation.total')
            ->where('template_invitation.id_user', Auth::User()->id)
            ->get();
        return view('backend.admin.print.print_laporan_penjualan', compact('print_penjualan'));
    }

    public function print_laporan_penjualan_tahun_bulan($tahun_print, $bulan_print)
    {
        $print_penjualan = PembayaranInvitation::leftjoin('detail_pembayaran_invitation', 'pembayaran_invitation.id_pembayaran', '=', 'detail_pembayaran_invitation.id_pembayaran')->leftjoin('pemesanan_invitation', 'pembayaran_invitation.id_pemesanan', '=', 'pemesanan_invitation.id_pemesanan')
            ->leftjoin('template_invitation', 'pemesanan_invitation.id_template', '=', 'template_invitation.id_template')
            ->leftjoin('users', 'pemesanan_invitation.email', '=', 'users.email')
            ->select('users.name', 'users.email', 'pemesanan_invitation.kategori_template', 'template_invitation.gambar_cover', 'template_invitation.id_user', 'pemesanan_invitation.tanggal_pemesanan', 'detail_pembayaran_invitation.total')
            ->where('template_invitation.id_user', Auth::User()->id)
            ->whereMonth("pemesanan_invitation.tanggal_pemesanan", $bulan_print)
            ->whereYear("pemesanan_invitation.tanggal_pemesanan", $tahun_print)
            ->get();
        return view('backend.admin.print.print_laporan_penjualan', compact('print_penjualan', 'tahun_print', 'bulan_print'));
    }

    public function cari_penjualan(Request $request)
    {
        $tahun_print = $request->tahun;
        $bulan_print = $request->bulan;

        $data = PembayaranInvitation::leftjoin('detail_pembayaran_invitation', 'pembayaran_invitation.id_pembayaran', '=', 'detail_pembayaran_invitation.id_pembayaran')->leftjoin('pemesanan_invitation', 'pembayaran_invitation.id_pemesanan', '=', 'pemesanan_invitation.id_pemesanan')
            ->leftjoin('template_invitation', 'pemesanan_invitation.id_template', '=', 'template_invitation.id_template')
            ->leftjoin('users', 'pemesanan_invitation.email', '=', 'users.email')
            ->select('users.name', 'users.email', 'pemesanan_invitation.kategori_template', 'template_invitation.gambar_cover', 'template_invitation.id_user', 'pemesanan_invitation.tanggal_pemesanan', 'detail_pembayaran_invitation.total');
        if ($request->tahun != null && $request->bulan != null) {
            $result = $data
                ->where('template_invitation.id_user', Auth::User()->id)
                ->whereMonth("pemesanan_invitation.tanggal_pemesanan", [$request->bulan])
                ->whereYear("pemesanan_invitation.tanggal_pemesanan", [$request->tahun]);
        } else {
            $result = $data;
        }
        $laporan_penjualan = $result->get();
        return view('backend.admin.laporan_admin.laporan_penjualan', compact('laporan_penjualan', 'tahun_print', 'bulan_print'));
    }
}
