<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembayaranInvitation;
use Illuminate\Support\Facades\Auth;

class CashOutController extends Controller
{
    public function index()
    {
        $cashOut = PembayaranInvitation::leftjoin('pemesanan_invitation', 'pemesanan_invitation.id_pemesanan', '=', 'pembayaran_invitation.id_pemesanan')
            ->leftjoin('detail_pemesanan_invitation', 'detail_pemesanan_invitation.id_pemesanan', '=', 'pemesanan_invitation.id_pemesanan')
            ->leftjoin('detail_pembayaran_invitation', 'detail_pembayaran_invitation.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
            ->leftjoin('template_invitation', 'template_invitation.id_template', '=', 'detail_pemesanan_invitation.id_template')
            ->leftjoin('kategori_template', 'kategori_template.id_kategori_template', '=', 'template_invitation.id_kategori')
            ->select(
                'pembayaran_invitation.id_pembayaran',
                'detail_pembayaran_invitation.kode_transaksi',
                'pemesanan_invitation.kategori_template',
                'detail_pembayaran_invitation.total',
                'pembayaran_invitation.status',
                'template_invitation.id_user',
                'template_invitation.gambar_cover',
                'kategori_template.kategori',
            )
            ->groupBy('pembayaran_invitation.id_pembayaran')
            ->where('template_invitation.id_user', Auth::User()->id)
            ->get();
        return view('backend.admin.cash_out.index', compact('cashOut'));
    }
}
