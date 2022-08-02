<?php

namespace App\Http\Controllers\Admin\Pembayaran;

use App\Models\PembayaranInvitation;
use App\Models\PemesananInvitation;
use App\Models\BiodataPelanggan;
use App\Models\User;
use App\Models\BiodataGaleriFoto;
use App\Models\BiodataHomePage;
use App\Models\BiodataJadwalAkad;
use App\Models\BiodataJadwalResepsi;
use App\Models\BiodataJadwalResepsi2;
use App\Models\BiodataKeluargaBesarPria;
use App\Models\BiodataKeluargaBesarWanita;
use App\Models\BiodataKutipanAyat;
use App\Models\BiodataMusik;
use App\Models\BiodataPasanganPria;
use App\Models\BiodataPasanganWanita;
use App\Models\DetailPemesananInvitation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PembayaranAdminController extends Controller
{

    public function index()
    {
        $dataPembayaranInvitation = PembayaranInvitation::leftjoin('pemesanan_invitation', 'pemesanan_invitation.id_pemesanan', '=', 'pembayaran_invitation.id_pemesanan')
            ->leftjoin('biodata_pelanggan', 'biodata_pelanggan.id_biodata_pelanggan', '=', 'pemesanan_invitation.id_biodata_pelanggan')
            ->leftjoin('users', 'users.id', '=', 'biodata_pelanggan.id_user')
            ->leftjoin('detail_pembayaran_invitation', 'detail_pembayaran_invitation.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
            ->leftjoin('template_invitation', 'template_invitation.id_template', '=', 'pemesanan_invitation.id_template')
            ->leftjoin('biodata_pasangan_pria', 'biodata_pasangan_pria.id_pasangan_pria', '=', 'biodata_pelanggan.id_pasangan_pria')
            ->leftjoin('biodata_pasangan_wanita', 'biodata_pasangan_wanita.id_pasangan_wanita', '=', 'biodata_pelanggan.id_pasangan_wanita')
            ->leftjoin('kategori_template', 'kategori_template.id_kategori_template', '=', 'template_invitation.id_kategori')
            ->select(
                'pembayaran_invitation.id_pembayaran',
                'detail_pembayaran_invitation.kode_transaksi',
                'users.name',
                'users.email',
                'pemesanan_invitation.kategori_template',
                'pembayaran_invitation.tanggal_pembayaran',
                'detail_pembayaran_invitation.tipe_pembayaran',
                'detail_pembayaran_invitation.bukti_pembayaran',
                'detail_pembayaran_invitation.total',
                'pembayaran_invitation.status',
                // 'pemesanan_invitation.link_hosting', 
                // 'pemesanan_invitation.tanggal_pemesanan', 
                'template_invitation.gambar_cover',
                'biodata_pasangan_pria.nama_lengkap_pria as nama_pasangan_pria',
                'biodata_pasangan_wanita.nama_lengkap_wanita as nama_pasangan_wanita',
                // 'kategori_template.harga',
            )
            ->orderBy('id_pembayaran', 'desc')
            ->groupBy('pembayaran_invitation.id_pembayaran')
            ->get();

        return view('backend.admin.pembayaran.index', compact('dataPembayaranInvitation'));
    }

    public function setujui($id)
    {
        $pembayaran = PembayaranInvitation::where('id_pembayaran', $id)->update([
            'status' => "lunas"
        ]);

        $idPesanan = PembayaranInvitation::where('id_pembayaran', $id)
            ->select('id_pemesanan')
            ->first();

        PemesananInvitation::where('id_pemesanan', $idPesanan->id_pemesanan)->update([
            'status' => "selesai"
        ]);

        return response()->json(['success' => 'Pembayaran Disetujui']);
    }

    public function tolak($id)
    {
        $pembayaran = PembayaranInvitation::where('id_pembayaran', $id)->update([
            'status' => "ditolak"
        ]);

        $idPesanan = PembayaranInvitation::where('id_pembayaran', $id)
            ->select('id_pemesanan')
            ->first();

        PemesananInvitation::where('id_pemesanan', $idPesanan->id_pemesanan)->update([
            'status' => "ditolak"
        ]);

        return response()->json(['success' => 'Pembayaran Ditolak']);
    }
}
