<?php

namespace App\Http\Controllers;

use App\Models\CashOut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanAdminController extends Controller
{
    public function laporan_cashout()
    {
        $laporan_cashout = CashOut::leftjoin('bank_mitra', 'cash_out.id_user', '=', 'bank_mitra.id_user')->leftjoin('pembayaran_invitation', 'cash_out.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
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
            ->groupBy('cash_out.id_user')
            ->get();
        return view('backend.admin.laporan_admin.laporan_cash_out', compact('laporan_cashout'));
    }
    public function laporan_rekapitulasi()
    {
        $data = [
            'user' => DB::table('users')->where('status', '=', 'mitra')->count(),
            'produk' => DB::table('template_invitation')->select('id_template as template')->count(),
            'pendapatan_mitra' => DB::table('cash_out')->select(DB::raw('SUM(total) as total_cash_out'), 'id_pembayaran')->first(),
            'transaksi' => DB::table('detail_pembayaran_invitation')->select(DB::raw('SUM(detail_pembayaran_invitation.total) as total'))->first(),
        ];
        return view('backend.admin.laporan_admin.laporan_rekapitulasi', $data);
    }

    public function print_laporan_rekapitulasi()
    {
        $print = [
            'user' => DB::table('users')->where('status', '=', 'mitra')->count(),
            'produk' => DB::table('template_invitation')->select('id_template as template')->count(),
            'pendapatan_mitra' => DB::table('cash_out')->select(DB::raw('SUM(total) as total_cash_out'), 'id_pembayaran')->first(),
            'transaksi' => DB::table('detail_pembayaran_invitation')->select(DB::raw('SUM(detail_pembayaran_invitation.total) as total'))->first(),
        ];
        return view('backend.admin.print.print_laporan_rekapitulasi', $print);
    }
}
