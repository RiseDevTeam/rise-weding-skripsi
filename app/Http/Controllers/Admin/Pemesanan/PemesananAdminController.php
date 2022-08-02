<?php

namespace App\Http\Controllers\Admin\Pemesanan;


use App\Models\User;
use App\Models\BiodataMusik;
use Illuminate\Http\Request;
use App\Models\BiodataHomePage;
use App\Models\BiodataPelanggan;
use App\Models\BiodataGaleriFoto;
use App\Models\BiodataJadwalAkad;
use App\Models\BiodataKutipanAyat;
use Illuminate\Support\Facades\DB;
use App\Models\BiodataPasanganPria;
use App\Models\PemesananInvitation;
use App\Http\Controllers\Controller;
use App\Models\BiodataJadwalResepsi;
use Illuminate\Support\Facades\Auth;
use App\Models\BiodataJadwalResepsi2;
use App\Models\BiodataPasanganWanita;
use App\Models\BiodataKeluargaBesarPria;
use App\Models\DetailPemesananInvitation;
use App\Models\BiodataKeluargaBesarWanita;

class PemesananAdminController extends Controller
{
    public function index()
    {
        $dataPemesananInvitation = PemesananInvitation::leftjoin('biodata_pelanggan', 'biodata_pelanggan.id_biodata_pelanggan', '=', 'pemesanan_invitation.id_biodata_pelanggan')
            ->leftjoin('users', 'users.id', '=', 'biodata_pelanggan.id_user')
            ->leftjoin('detail_pemesanan_invitation', 'detail_pemesanan_invitation.id_pemesanan', '=', 'pemesanan_invitation.id_pemesanan')
            ->leftjoin('template_invitation', 'template_invitation.id_template', '=', 'pemesanan_invitation.id_template')
            ->leftjoin('biodata_pasangan_pria', 'biodata_pasangan_pria.id_pasangan_pria', '=', 'biodata_pelanggan.id_pasangan_pria')
            ->leftjoin('biodata_pasangan_wanita', 'biodata_pasangan_wanita.id_pasangan_wanita', '=', 'biodata_pelanggan.id_pasangan_wanita')
            ->leftjoin('kategori_template', 'kategori_template.id_kategori_template', '=', 'template_invitation.id_kategori')
            ->select(
                'pemesanan_invitation.id_pemesanan',
                'users.name',
                'users.email',
                'pemesanan_invitation.id_pemesanan',
                'pemesanan_invitation.kategori_template',
                'pemesanan_invitation.link_hosting',
                'pemesanan_invitation.tanggal_pemesanan',
                'template_invitation.gambar_cover',
                'template_invitation.id_user',
                'pemesanan_invitation.status',
                'biodata_pasangan_pria.nama_lengkap_pria as nama_pasangan_pria',
                'biodata_pasangan_wanita.nama_lengkap_wanita as nama_pasangan_wanita',
                'kategori_template.harga',
                'pemesanan_invitation.id_pemesanan',
                'pemesanan_invitation.id_biodata_pelanggan',
                'biodata_pelanggan.id_biodata_home_page',
                'biodata_pelanggan.id_kutipan_ayat',
                'biodata_pelanggan.id_pasangan_pria',
                'biodata_pelanggan.id_pasangan_wanita',
                'biodata_pelanggan.id_galeri_foto',
                'biodata_pelanggan.id_jadwal_akad',
                'biodata_pelanggan.id_jadwal_resepsi',
                'biodata_pelanggan.id_jadwal_resepsi_2',
                'biodata_pelanggan.id_keluarga_besar_pria',
                'biodata_pelanggan.id_keluarga_besar_wanita',
                'biodata_pelanggan.id_musik',
            )
            ->groupBy('pemesanan_invitation.id_pemesanan')
            ->where('template_invitation.id_user', Auth::User()->id)
            ->get();

        return view('backend.admin.pemesanan.index', compact('dataPemesananInvitation'));
    }

    public function destroy($id)
    {

        $dataID = PemesananInvitation::leftjoin('biodata_pelanggan', 'biodata_pelanggan.id_biodata_pelanggan', '=', 'pemesanan_invitation.id_biodata_pelanggan')
            ->leftjoin('detail_pemesanan_invitation', 'detail_pemesanan_invitation.id_pemesanan', '=', 'pemesanan_invitation.id_pemesanan')
            ->select(
                'pemesanan_invitation.id_pemesanan',
                'pemesanan_invitation.id_biodata_pelanggan',
                'biodata_pelanggan.id_biodata_home_page',
                'biodata_pelanggan.id_kutipan_ayat',
                'biodata_pelanggan.id_pasangan_pria',
                'biodata_pelanggan.id_pasangan_wanita',
                'biodata_pelanggan.id_galeri_foto',
                'biodata_pelanggan.id_jadwal_akad',
                'biodata_pelanggan.id_jadwal_resepsi',
                'biodata_pelanggan.id_jadwal_resepsi_2',
                'biodata_pelanggan.id_keluarga_besar_pria',
                'biodata_pelanggan.id_keluarga_besar_wanita',
                'biodata_pelanggan.id_musik',
            )
            ->where('pemesanan_invitation.id_pemesanan', $id)
            ->first();

        PemesananInvitation::where('id_pemesanan', $id)->delete();
        DetailPemesananInvitation::where('id_pemesanan', $id)->delete();
        BiodataPelanggan::where('id_biodata_pelanggan', $dataID->id_biodata_pelanggan)->delete();
        BiodataGaleriFoto::where('id_galeri_foto', $dataID->id_galeri_foto)->delete();
        BiodataHomePage::where('id_biodata_home_page', $dataID->id_biodata_home_page)->delete();
        BiodataJadwalAkad::where('id_jadwal_akad', $dataID->id_jadwal_akad)->delete();
        BiodataJadwalResepsi::where('id_jadwal_resepsi', $dataID->id_jadwal_resepsi)->delete();
        BiodataJadwalResepsi2::where('id_jadwal_resepsi_2', $dataID->id_jadwal_resepsi_2)->delete();
        BiodataKeluargaBesarPria::where('id_keluarga_besar_pria', $dataID->id_keluarga_besar_pria)->delete();
        BiodataKeluargaBesarWanita::where('id_keluarga_besar_wanita', $dataID->id_keluarga_besar_wanita)->delete();
        BiodataKutipanAyat::where('id_kutipan_ayat', $dataID->id_kutipan_ayat)->delete();
        BiodataMusik::where('id_musik', $dataID->id_musik)->delete();
        BiodataPasanganPria::where('id_pasangan_pria', $dataID->id_pasangan_pria)->delete();
        BiodataPasanganWanita::where('id_pasangan_wanita', $dataID->id_pasangan_wanita)->delete();

        return response()->json(['success' => 'Data Pesanan Berhasil Dihapus']);
    }

    public function cari_pemesanan(Request $request)
    {
        $pilih_tahun = $request->tahun;
        $pilih_bulan = $request->bulan;
        $dataPemesananInvitation = PemesananInvitation::leftjoin('biodata_pelanggan', 'biodata_pelanggan.id_biodata_pelanggan', '=', 'pemesanan_invitation.id_biodata_pelanggan')
            ->leftjoin('users', 'users.id', '=', 'biodata_pelanggan.id_user')
            ->leftjoin('detail_pemesanan_invitation', 'detail_pemesanan_invitation.id_pemesanan', '=', 'pemesanan_invitation.id_pemesanan')
            ->leftjoin('template_invitation', 'template_invitation.id_template', '=', 'pemesanan_invitation.id_template')
            ->leftjoin('biodata_pasangan_pria', 'biodata_pasangan_pria.id_pasangan_pria', '=', 'biodata_pelanggan.id_pasangan_pria')
            ->leftjoin('biodata_pasangan_wanita', 'biodata_pasangan_wanita.id_pasangan_wanita', '=', 'biodata_pelanggan.id_pasangan_wanita')
            ->leftjoin('kategori_template', 'kategori_template.id_kategori_template', '=', 'template_invitation.id_kategori')
            ->select(
                'pemesanan_invitation.id_pemesanan',
                'users.name',
                'users.email',
                'pemesanan_invitation.id_pemesanan',
                'pemesanan_invitation.kategori_template',
                'pemesanan_invitation.link_hosting',
                'pemesanan_invitation.tanggal_pemesanan',
                'template_invitation.gambar_cover',
                'template_invitation.id_user',
                'pemesanan_invitation.status',
                'biodata_pasangan_pria.nama_lengkap_pria as nama_pasangan_pria',
                'biodata_pasangan_wanita.nama_lengkap_wanita as nama_pasangan_wanita',
                'kategori_template.harga',
                'pemesanan_invitation.id_pemesanan',
                'pemesanan_invitation.id_biodata_pelanggan',
                'biodata_pelanggan.id_biodata_home_page',
                'biodata_pelanggan.id_kutipan_ayat',
                'biodata_pelanggan.id_pasangan_pria',
                'biodata_pelanggan.id_pasangan_wanita',
                'biodata_pelanggan.id_galeri_foto',
                'biodata_pelanggan.id_jadwal_akad',
                'biodata_pelanggan.id_jadwal_resepsi',
                'biodata_pelanggan.id_jadwal_resepsi_2',
                'biodata_pelanggan.id_keluarga_besar_pria',
                'biodata_pelanggan.id_keluarga_besar_wanita',
                'biodata_pelanggan.id_musik',
            )
            ->groupBy('pemesanan_invitation.id_pemesanan')
            ->where('template_invitation.id_user', Auth::User()->id)
            ->whereYear('pemesanan_invitation.tanggal_pemesanan', $request->tahun)
            ->whereMonth('pemesanan_invitation.tanggal_pemesanan', $request->bulan)
            ->get();

        return view('backend.admin.pemesanan.index', compact('dataPemesananInvitation', 'pilih_tahun', 'pilih_bulan'));
    }

    public function print_laporan_pemesanan_bulan_tahun($pilih_tahun, $pilih_bulan)
    {
        $dataPemesananInvitation = PemesananInvitation::leftjoin('biodata_pelanggan', 'biodata_pelanggan.id_biodata_pelanggan', '=', 'pemesanan_invitation.id_biodata_pelanggan')
            ->leftjoin('users', 'users.id', '=', 'biodata_pelanggan.id_user')
            ->leftjoin('detail_pemesanan_invitation', 'detail_pemesanan_invitation.id_pemesanan', '=', 'pemesanan_invitation.id_pemesanan')
            ->leftjoin('template_invitation', 'template_invitation.id_template', '=', 'pemesanan_invitation.id_template')
            ->leftjoin('biodata_pasangan_pria', 'biodata_pasangan_pria.id_pasangan_pria', '=', 'biodata_pelanggan.id_pasangan_pria')
            ->leftjoin('biodata_pasangan_wanita', 'biodata_pasangan_wanita.id_pasangan_wanita', '=', 'biodata_pelanggan.id_pasangan_wanita')
            ->leftjoin('kategori_template', 'kategori_template.id_kategori_template', '=', 'template_invitation.id_kategori')
            ->select(
                'pemesanan_invitation.id_pemesanan',
                'users.name',
                'users.email',
                'pemesanan_invitation.id_pemesanan',
                'pemesanan_invitation.kategori_template',
                'pemesanan_invitation.link_hosting',
                'pemesanan_invitation.tanggal_pemesanan',
                'template_invitation.gambar_cover',
                'template_invitation.id_user',
                'pemesanan_invitation.status',
                'biodata_pasangan_pria.nama_lengkap_pria as nama_pasangan_pria',
                'biodata_pasangan_wanita.nama_lengkap_wanita as nama_pasangan_wanita',
                'kategori_template.harga',
                'pemesanan_invitation.id_pemesanan',
                'pemesanan_invitation.id_biodata_pelanggan',
                'biodata_pelanggan.id_biodata_home_page',
                'biodata_pelanggan.id_kutipan_ayat',
                'biodata_pelanggan.id_pasangan_pria',
                'biodata_pelanggan.id_pasangan_wanita',
                'biodata_pelanggan.id_galeri_foto',
                'biodata_pelanggan.id_jadwal_akad',
                'biodata_pelanggan.id_jadwal_resepsi',
                'biodata_pelanggan.id_jadwal_resepsi_2',
                'biodata_pelanggan.id_keluarga_besar_pria',
                'biodata_pelanggan.id_keluarga_besar_wanita',
                'biodata_pelanggan.id_musik',
            )
            ->groupBy('pemesanan_invitation.id_pemesanan')
            ->where('template_invitation.id_user', Auth::User()->id)
            ->whereYear('pemesanan_invitation.tanggal_pemesanan', $pilih_tahun)
            ->whereMonth('pemesanan_invitation.tanggal_pemesanan', $pilih_bulan)
            ->get();

        return view('backend.admin.pemesanan.print_pemesanan', compact('dataPemesananInvitation', 'pilih_tahun', 'pilih_bulan'));
    }

    public function print_laporan_pemesanan()
    {
        $dataPemesananInvitation = PemesananInvitation::leftjoin('biodata_pelanggan', 'biodata_pelanggan.id_biodata_pelanggan', '=', 'pemesanan_invitation.id_biodata_pelanggan')
            ->leftjoin('users', 'users.id', '=', 'biodata_pelanggan.id_user')
            ->leftjoin('detail_pemesanan_invitation', 'detail_pemesanan_invitation.id_pemesanan', '=', 'pemesanan_invitation.id_pemesanan')
            ->leftjoin('template_invitation', 'template_invitation.id_template', '=', 'pemesanan_invitation.id_template')
            ->leftjoin('biodata_pasangan_pria', 'biodata_pasangan_pria.id_pasangan_pria', '=', 'biodata_pelanggan.id_pasangan_pria')
            ->leftjoin('biodata_pasangan_wanita', 'biodata_pasangan_wanita.id_pasangan_wanita', '=', 'biodata_pelanggan.id_pasangan_wanita')
            ->leftjoin('kategori_template', 'kategori_template.id_kategori_template', '=', 'template_invitation.id_kategori')
            ->select(
                'pemesanan_invitation.id_pemesanan',
                'users.name',
                'users.email',
                'pemesanan_invitation.id_pemesanan',
                'pemesanan_invitation.kategori_template',
                'pemesanan_invitation.link_hosting',
                'pemesanan_invitation.tanggal_pemesanan',
                'template_invitation.gambar_cover',
                'template_invitation.id_user',
                'pemesanan_invitation.status',
                'biodata_pasangan_pria.nama_lengkap_pria as nama_pasangan_pria',
                'biodata_pasangan_wanita.nama_lengkap_wanita as nama_pasangan_wanita',
                'kategori_template.harga',
                'pemesanan_invitation.id_pemesanan',
                'pemesanan_invitation.id_biodata_pelanggan',
                'biodata_pelanggan.id_biodata_home_page',
                'biodata_pelanggan.id_kutipan_ayat',
                'biodata_pelanggan.id_pasangan_pria',
                'biodata_pelanggan.id_pasangan_wanita',
                'biodata_pelanggan.id_galeri_foto',
                'biodata_pelanggan.id_jadwal_akad',
                'biodata_pelanggan.id_jadwal_resepsi',
                'biodata_pelanggan.id_jadwal_resepsi_2',
                'biodata_pelanggan.id_keluarga_besar_pria',
                'biodata_pelanggan.id_keluarga_besar_wanita',
                'biodata_pelanggan.id_musik',
            )
            ->groupBy('pemesanan_invitation.id_pemesanan')
            ->where('template_invitation.id_user', Auth::User()->id)
            ->get();

        return view('backend.admin.pemesanan.print_pemesanan', compact('dataPemesananInvitation'));
    }
}
