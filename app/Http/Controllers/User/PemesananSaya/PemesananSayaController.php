<?php

namespace App\Http\Controllers\User\PemesananSaya;

use Illuminate\Http\Request;
use App\Models\PemesananInvitation;
use App\Http\Controllers\Controller;
use App\Models\PembayaranInvitation;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\TemplateInvitation\PemesananTemplate;

class PemesananSayaController extends Controller
{
    public function pemesanan_saya()
    {
        $semua_pesanan = PemesananInvitation::leftjoin('biodata_pelanggan', 'pemesanan_invitation.id_biodata_pelanggan', '=', 'biodata_pelanggan.id_biodata_pelanggan')
            ->leftjoin('detail_pemesanan_invitation', 'pemesanan_invitation.id_pemesanan', '=', 'detail_pemesanan_invitation.id_pemesanan')
            ->leftjoin('template_invitation', 'detail_pemesanan_invitation.id_template', '=', 'template_invitation.id_template')
            ->leftjoin('pembayaran_invitation', 'pemesanan_invitation.id_pemesanan', '=', 'pembayaran_invitation.id_pemesanan')
            ->leftjoin('kategori_template', 'pemesanan_invitation.kategori_template', '=', 'kategori_template.kategori')
            ->leftjoin('detail_pembayaran_invitation', 'pembayaran_invitation.id_pembayaran', '=', 'detail_pembayaran_invitation.id_pembayaran')
            ->leftjoin('biodata_pasangan_pria', 'biodata_pelanggan.id_pasangan_pria', '=', 'biodata_pasangan_pria.id_pasangan_pria')
            ->leftjoin('biodata_pasangan_wanita', 'biodata_pelanggan.id_pasangan_wanita', '=', 'biodata_pasangan_wanita.id_pasangan_wanita')
            ->select(
                'template_invitation.gambar_cover',
                'pemesanan_invitation.kategori_template',
                'pemesanan_invitation.link_hosting',
                'pembayaran_invitation.status as status_pembayaran',
                'pemesanan_invitation.status as status_pemesanan',
                'biodata_pasangan_pria.nama_lengkap as nama_pria',
                'biodata_pasangan_wanita.nama_lengkap as nama_wanita',
                'biodata_pelanggan.id_user',
                'kategori_template.harga',
                'detail_pembayaran_invitation.total'
            )
            ->orderby('pemesanan_invitation.id_pemesanan', 'desc')
            ->groupBy('pemesanan_invitation.id_pemesanan')
            ->where('biodata_pelanggan.id_user', Auth::User()->id)
            ->get();

        $pembagian_pesanan = PemesananInvitation::leftjoin('biodata_pelanggan', 'pemesanan_invitation.id_biodata_pelanggan', '=', 'biodata_pelanggan.id_biodata_pelanggan')
            ->leftjoin('detail_pemesanan_invitation', 'pemesanan_invitation.id_pemesanan', '=', 'detail_pemesanan_invitation.id_pemesanan')
            ->leftjoin('template_invitation', 'detail_pemesanan_invitation.id_template', '=', 'template_invitation.id_template')
            ->leftjoin('pembayaran_invitation', 'pemesanan_invitation.id_pemesanan', '=', 'pembayaran_invitation.id_pemesanan')
            ->leftjoin('kategori_template', 'pemesanan_invitation.kategori_template', '=', 'kategori_template.kategori')
            ->leftjoin('biodata_pasangan_pria', 'biodata_pelanggan.id_pasangan_pria', '=', 'biodata_pasangan_pria.id_pasangan_pria')
            ->leftjoin('biodata_pasangan_wanita', 'biodata_pelanggan.id_pasangan_wanita', '=', 'biodata_pasangan_wanita.id_pasangan_wanita')
            ->select(
                'template_invitation.gambar_cover',
                'pemesanan_invitation.kategori_template',
                'pemesanan_invitation.link_hosting',
                'pembayaran_invitation.status as status_pembayaran',
                'pemesanan_invitation.status as status_pemesanan',
                'biodata_pasangan_pria.nama_lengkap as nama_pria',
                'biodata_pasangan_wanita.nama_lengkap as nama_wanita',
                'biodata_pelanggan.id_user',
                'kategori_template.harga'
            )
            ->orderby('pemesanan_invitation.id_pemesanan', 'desc')
            ->groupBy('pemesanan_invitation.id_pemesanan')
            ->where('biodata_pelanggan.id_user', Auth::User()->id)
            ->get();

        return view('frontend.pemesanan_saya.pemesanan_saya', compact('semua_pesanan', 'pembagian_pesanan'));
    }
}
