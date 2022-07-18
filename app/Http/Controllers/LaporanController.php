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
}
