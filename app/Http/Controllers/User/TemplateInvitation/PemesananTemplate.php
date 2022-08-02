<?php

namespace App\Http\Controllers\User\TemplateInvitation;

use Illuminate\Http\Request;
use App\Models\TemplateInvitation;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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
use App\Models\BiodataPelanggan;
use App\Models\DetailPemesananInvitation;
use App\Models\KategoriTemplate;
use App\Models\MusikTemplate;
use App\Models\PemesananInvitation;
use App\Models\PreviewTemplate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class PemesananTemplate extends Controller
{
    public function template_invitation($id_kategori_template)
    {
        // decrypt id yang kita encripsi sebelumnya
        $kategori_template = Crypt::decrypt($id_kategori_template);

        $templateInvitation = TemplateInvitation::leftjoin('kategori_template', 'template_invitation.id_kategori', '=', 'kategori_template.id_kategori_template')
            ->select('kategori_template.kategori', 'template_invitation.link_hosting', 'template_invitation.id_kategori', 'template_invitation.gambar_cover', 'id_template')
            ->where('template_invitation.id_kategori', $kategori_template)->get();
        $kategori =  KategoriTemplate::where('id_kategori_template', $kategori_template)->select('kategori')->first();
        return view('frontend.template_invitation.template_invitation', compact('templateInvitation', 'kategori'));
    }

    public function detail_template($id_template)
    {
        return view('frontend.template_invitation.detail_template', ['id_template' => $id_template]);
    }

    public function pemesanan_template(Request $request, $id_template)
    {
        // input preview template pemesanan
        $data = new PreviewTemplate;
        $data->id_user = $request->id_user;
        $data->id_template = $request->id_template;
        $data->save();
        // mencari last id pada table preview template pemesanan
        $id_preview_template =  $data->id_preview_template_pemesanan;

        // input detail preview template
        foreach ($request->file_template as $key => $value) {
            DB::table('detail_preview_template')->insert([
                'id_preview_template_pemesanan'   => $id_preview_template,
                'file_template' => $value
            ]);
        }
        return redirect()->route('data_undangan', $id_template);
    }

    public function data_undangan($id_template)
    {
        // decrypt id yang kita encripsi sebelumnya
        $idTemplate = Crypt::decrypt($id_template);
        // menampilkan musik pada halaman input biodata pelanggan
        $musikTemplate = MusikTemplate::all();

        // menampilkan id template pada halaman input biodata pelanggan
        $templateInvitation = TemplateInvitation::leftjoin('kategori_template', 'template_invitation.id_kategori', '=', 'kategori_template.id_kategori_template')
            ->select('kategori_template.kategori')->first();
        $kategori = $templateInvitation->kategori;

        // menampilkan preview template di dalam form data
        $previewTemplate = PreviewTemplate::where('id_user', Auth::user()->id)->orderBy('id_preview_template_pemesanan', 'desc')
            ->select('preview_template_pemesanan.id_preview_template_pemesanan')->first();
        $IdpreviewTemplate = $previewTemplate->id_preview_template_pemesanan;

        return view('frontend.template_invitation.form_data_undangan', compact('kategori', 'musikTemplate', 'IdpreviewTemplate', 'id_template'));
    }

    public function preview_template($id_kategori)
    {
        // menampilkan preview pada halaman input biodata pelanggan
        $IdPreviewTemplate = PreviewTemplate::orderBy('id_preview_template_pemesanan', 'desc')->where('id_user', Auth::User()->id)->first();
        // decrypt id yang kita encripsi sebelumnya
        $id_kategori_template = Crypt::decrypt($id_kategori);
        // menampilkan kategori pada halaman input biodata pelanggan
        $kategori = KategoriTemplate::where('id_kategori_template', $id_kategori_template)->select('id_kategori_template', 'kategori')->first();
        // menampilkan preview template pada halaman input biodata pelanggan
        $PreviewTemplate = PreviewTemplate::leftjoin('detail_preview_template', 'preview_template_pemesanan.id_preview_template_pemesanan', '=', 'detail_preview_template.id_preview_template_pemesanan')
            ->select('preview_template_pemesanan.id_user', 'detail_preview_template.file_template')->where('preview_template_pemesanan.id_user', Auth::user()->id)
            ->orderByDesc('preview_template_pemesanan.id_preview_template_pemesanan')
            ->where('preview_template_pemesanan.id_preview_template_pemesanan', $IdPreviewTemplate->id_preview_template_pemesanan)
            ->get();
        return view('frontend.template_invitation.preview_template', compact('PreviewTemplate', 'id_kategori'));
    }

    public function data_undangan_store_basic(Request $request, $kategori)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'nomor_telepon' => 'required',
            'nama_panggilan_pria' => 'required',
            'nama_panggilan_wanita' => 'required',
            'foto_mempelai' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'kata_pembuka' => 'required',
            'kutipan_ayat' => 'required',
            'nama_lengkap_pria' => 'required',
            'putra_dari' => 'required',
            'nama_bapak_pria' => 'required',
            'nama_ibu_pria' => 'required',
            'gambar_mempelai_pria' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'nama_lengkap_wanita' => 'required',
            'putri_dari' => 'required',
            'nama_bapak_wanita' => 'required',
            'nama_ibu_wanita' => 'required',
            'gambar_mempelai_wanita' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto1' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto2' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto3' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto4' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto5' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'tanggal_akad' => 'required',
            'jam_mulai_akad' => 'required',
            'waktu_wilayah_akad' => 'required',
            'lokasi_akad' => 'required',
            'tanggal_resepsi' => 'required',
            'jam_mulai_resepsi' => 'required',
            'waktu_wilayah_resepsi' => 'required',
            'lokasi_resepsi' => 'required',
            'nama_link' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        if ($request->file('foto_mempelai')) {
            // Upload file dengan Helpers Laravel
            $fotoMempelai = uploadImage($request->file('foto_mempelai'), 'user_page/template/public/biodata_pelanggan/foto_mempelai/');
        }

        if ($request->file('gambar_mempelai_pria')) {
            // Upload file dengan Helpers Laravel
            $gambarMempelaiPria = uploadImage($request->file('gambar_mempelai_pria'), 'user_page/template/public/biodata_pelanggan/gambar_mempelai_pria/');
        }

        if ($request->file('gambar_mempelai_wanita')) {
            // Upload file dengan Helpers Laravel
            $gambarMempelaiWanita = uploadImage($request->file('gambar_mempelai_wanita'), 'user_page/template/public/biodata_pelanggan/gambar_mempelai_wanita/');
        }

        if ($request->file('galeri_foto1')) {
            // Upload file dengan Helpers Laravel
            $gambarFoto1 = uploadImage($request->file('galeri_foto1'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        if ($request->file('galeri_foto2')) {
            // Upload file dengan Helpers Laravel
            $gambarFoto2 = uploadImage($request->file('galeri_foto2'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        if ($request->file('galeri_foto3')) {
            // Upload file dengan Helpers Laravel
            $gambarFoto3 = uploadImage($request->file('galeri_foto3'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        if ($request->file('galeri_foto4')) {
            // Upload file dengan Helpers Laravel
            $gambarFoto4 = uploadImage($request->file('galeri_foto4'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        if ($request->file('galeri_foto5')) {
            // Upload file dengan Helpers Laravel
            $gambarFoto5 = uploadImage($request->file('galeri_foto5'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        $BiodataHomePage = BiodataHomePage::create([
            'title' => $request->title,
            'nama_panggilan_pria' => $request->nama_panggilan_pria,
            'nama_panggilan_wanita' => $request->nama_panggilan_wanita,
            'kata_pembuka' => $request->kata_pembuka,
            'foto_mempelai' => $fotoMempelai,
        ]);
        // mengambil id home page
        $IdhomePage = $BiodataHomePage->id_biodata_home_page;

        $BiodataKutipanAyat = BiodataKutipanAyat::create([
            'kutipan_ayat' => $request->kutipan_ayat,
        ]);
        // mengambil id Kutipan Ayat
        $IdKutipanAyat = $BiodataKutipanAyat->id_kutipan_ayat;

        $BiodataPasanganPria = BiodataPasanganPria::create([
            'nama_lengkap_pria' => $request->nama_lengkap_pria,
            'putra_dari' => $request->putra_dari,
            'nama_bapak_pria' => $request->nama_bapak_pria,
            'nama_ibu_pria' => $request->nama_ibu_pria,
            'gambar_mempelai_pria' => $gambarMempelaiPria,
        ]);
        // mengambil id biodata pasangan pria
        $IdPasanganPria = $BiodataPasanganPria->id_pasangan_pria;

        $BiodataPasanganWanita = BiodataPasanganWanita::create([
            'nama_lengkap_wanita' => $request->nama_lengkap_wanita,
            'putri_dari' => $request->putri_dari,
            'nama_bapak_wanita' => $request->nama_bapak_wanita,
            'nama_ibu_wanita' => $request->nama_ibu_wanita,
            'gambar_mempelai_wanita' => $gambarMempelaiWanita,
        ]);
        // mengambil id pasangan wanita
        $IdPasanganWanita = $BiodataPasanganWanita->id_pasangan_wanita;

        $BiodataGaleriFoto = new BiodataGaleriFoto;
        $BiodataGaleriFoto->galeri_foto1 = $gambarFoto1;
        $BiodataGaleriFoto->galeri_foto2 = $gambarFoto2;
        $BiodataGaleriFoto->galeri_foto3 = $gambarFoto3;
        $BiodataGaleriFoto->galeri_foto4 = $gambarFoto4;
        $BiodataGaleriFoto->galeri_foto5 = $gambarFoto5;
        $BiodataGaleriFoto->save();
        // mengambil id Galeri Foto
        $IdGaleriFoto = $BiodataGaleriFoto->id_galeri_foto;

        $BiodataJadwalAkad = BiodataJadwalAkad::create([
            'tanggal_akad' => $request->tanggal_akad,
            'jam_mulai_akad' => $request->jam_mulai_akad,
            'waktu_wilayah_akad' => $request->waktu_wilayah_akad,
            'lokasi_akad' => $request->lokasi_akad,
        ]);
        // mengambil id jadwal akad
        $IdJadwalAkad = $BiodataJadwalAkad->id_jadwal_akad;

        $BiodataJadwalResepsi = BiodataJadwalResepsi::create([
            'tanggal_resepsi' => $request->tanggal_resepsi,
            'jam_mulai_resepsi' => $request->jam_mulai_resepsi,
            'waktu_wilayah_resepsi' => $request->waktu_wilayah_resepsi,
            'lokasi_resepsi' => $request->lokasi_resepsi,
        ]);
        // mengambil id jadwal Resepsi
        $IdJadwalResepsi = $BiodataJadwalResepsi->id_jadwal_resepsi;

        $BiodataJadwalResepsi2 = BiodataJadwalResepsi2::create([
            'tanggal_resepsi_2' => $request->tanggal_resepsi_2,
            'jam_mulai_resepsi_2' => $request->jam_mulai_resepsi_2,
            'waktu_wilayah_resepsi_2' => $request->waktu_wilayah_resepsi_2,
            'lokasi_resepsi_2' => $request->lokasi_resepsi_2,
        ]);
        // mengambil id resepsi2
        $IdJadwalResepsi2 = $BiodataJadwalResepsi2->id_jadwal_resepsi2;

        if ($request->file('musik1')) {
            $musik1 = time();
            // Upload file dengan Helpers Laravel
            $audio1 = uploadImage($request->file('musik1'), 'user_page/template/public/biodata_pelanggan/musik/', $musik1);
            $BiodataMusik = new BiodataMusik;
            $BiodataMusik->musik = $audio1;
            $BiodataMusik->save();
            // mengambil id Biodata Musik
            $IdBiodataMusik = $BiodataMusik->id_musik;
        }

        $BiodataPelanggan = BiodataPelanggan::create([
            'nomor_telepon' => $request->nomor_telepon,
            'id_user' => Auth::user()->id,
            'id_biodata_home_page' => $IdhomePage,
            'id_kutipan_ayat' => $IdKutipanAyat,
            'id_pasangan_pria' => $IdPasanganPria,
            'id_pasangan_wanita' => $IdPasanganWanita,
            'id_galeri_foto' => $IdGaleriFoto,
            'id_jadwal_akad' => $IdJadwalAkad,
            'id_jadwal_resepsi' => $IdJadwalResepsi,
            'id_jadwal_resepsi_2' => $IdJadwalResepsi2,
            'id_musik' => $IdBiodataMusik,
        ]);
        // mengambil id Biodata Pelanggan
        $IdBiodataPelanggan = $BiodataPelanggan->id_biodata_pelanggan;

        // insert data ke database pemesanan
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('Y-m-d');
        $previewTemplatePemesanan = DB::table('preview_template_pemesanan')->where('id_preview_template_pemesanan', $request->IdpreviewTemplate)->first();
        $PemesananInvitation = PemesananInvitation::create([
            'id_template' => $previewTemplatePemesanan->id_template,
            'id_biodata_pelanggan' => $IdBiodataPelanggan,
            'kategori_template' => $kategori,
            'email' => Auth::User()->email,
            'link_hosting' => $request->nama_link,
            'tanggal_pemesanan' => $tgl,
        ]);
        // mengambil id Biodata Pemesanan
        $IdPemesananInvitation = $PemesananInvitation->id_pemesanan;

        $detailPreviewTemplate = DB::table('detail_preview_template')->where('id_preview_template_pemesanan', $request->IdpreviewTemplate)->get();
        foreach ($detailPreviewTemplate as $detailPreview) {
            DetailPemesananInvitation::create([
                'id_pemesanan' => $IdPemesananInvitation,
                'file_template' => $detailPreview->file_template,
            ]);
        }
        // DB::table('pesanan')->where('id_user', '=', Auth::user()->id)->delete();
        DB::table('preview_template_pemesanan')->where('id_preview_template_pemesanan', $request->IdpreviewTemplate)->delete();
        DB::table('detail_preview_template')->where('id_preview_template_pemesanan', $request->IdpreviewTemplate)->delete();


        return response()->json(["success" => "Data berhasil Disimpan"]);
    }

    public function data_undangan_store_premium(Request $request, $kategori)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'nomor_telepon' => 'required',
            'nama_panggilan_pria' => 'required',
            'nama_panggilan_wanita' => 'required',
            'foto_mempelai' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'kata_pembuka' => 'required',
            'kutipan_ayat' => 'required',
            'nama_lengkap_pria' => 'required',
            'putra_dari' => 'required',
            'nama_bapak_pria' => 'required',
            'nama_ibu_pria' => 'required',
            'gambar_mempelai_pria' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'nama_lengkap_wanita' => 'required',
            'putri_dari' => 'required',
            'nama_bapak_wanita' => 'required',
            'nama_ibu_wanita' => 'required',
            'gambar_mempelai_wanita' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto1' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto2' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto3' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto4' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto5' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto6' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto7' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto8' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'tanggal_akad' => 'required',
            'jam_mulai_akad' => 'required',
            'waktu_wilayah_akad' => 'required',
            'lokasi_akad' => 'required',
            'tanggal_resepsi' => 'required',
            'jam_mulai_resepsi' => 'required',
            'waktu_wilayah_resepsi' => 'required',
            'lokasi_resepsi' => 'required',
            'mengundang_pria' => 'required',
            'nama_keluarga_pria' => 'required',
            'mengundang_wanita' => 'required',
            'nama_keluarga_wanita' => 'required',
            'nama_link' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        if ($request->file('foto_mempelai')) {
            // Upload file dengan Helpers Laravel
            $fotoMempelai = uploadImage($request->file('foto_mempelai'), 'user_page/template/public/biodata_pelanggan/foto_mempelai/');
        }

        if ($request->file('gambar_mempelai_pria')) {
            // Upload file dengan Helpers Laravel
            $gambarMempelaiPria = uploadImage($request->file('gambar_mempelai_pria'), 'user_page/template/public/biodata_pelanggan/gambar_mempelai_pria/');
        }

        if ($request->file('gambar_mempelai_wanita')) {
            // Upload file dengan Helpers Laravel
            $gambarMempelaiWanita = uploadImage($request->file('gambar_mempelai_wanita'), 'user_page/template/public/biodata_pelanggan/gambar_mempelai_wanita/');
        }

        if ($request->file('galeri_foto1')) {
            // Upload file dengan Helpers Laravel
            $gambarFoto1 = uploadImage($request->file('galeri_foto1'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        if ($request->file('galeri_foto2')) {
            // Upload file dengan Helpers Laravel
            $gambarFoto2 = uploadImage($request->file('galeri_foto2'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        if ($request->file('galeri_foto3')) {
            // Upload file dengan Helpers Laravel
            $gambarFoto3 = uploadImage($request->file('galeri_foto3'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        if ($request->file('galeri_foto4')) {
            // Upload file dengan Helpers Laravel
            $gambarFoto4 = uploadImage($request->file('galeri_foto4'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        if ($request->file('galeri_foto5')) {
            // Upload file dengan Helpers Laravel
            $gambarFoto5 = uploadImage($request->file('galeri_foto5'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        if ($request->file('galeri_foto6')) {
            // Upload file dengan Helpers Laravel
            $gambarFoto6 = uploadImage($request->file('galeri_foto6'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        if ($request->file('galeri_foto7')) {
            // Upload file dengan Helpers Laravel
            $gambarFoto7 = uploadImage($request->file('galeri_foto7'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        if ($request->file('galeri_foto8')) {
            // Upload file dengan Helpers Laravel
            $gambarFoto8 = uploadImage($request->file('galeri_foto8'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        // jika ada gambar 9
        if ($request->file('galeri_foto9')) {
            $request->validate([
                'galeri_foto9' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            // Upload file dengan Helpers Laravel
            $gambarFoto9 = uploadImage($request->file('galeri_foto9'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        // jika ada gambar 10
        if ($request->file('galeri_foto10')) {
            $request->validate([
                'galeri_foto10' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            // Upload file dengan Helpers Laravel
            $gambarFoto10 = uploadImage($request->file('galeri_foto10'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }


        $BiodataHomePage = BiodataHomePage::create([
            'title' => $request->title,
            'nama_panggilan_pria' => $request->nama_panggilan_pria,
            'nama_panggilan_wanita' => $request->nama_panggilan_wanita,
            'kata_pembuka' => $request->kata_pembuka,
            'foto_mempelai' => $fotoMempelai,
        ]);
        // mengambil id home page
        $IdhomePage = $BiodataHomePage->id_biodata_home_page;

        $BiodataKutipanAyat = BiodataKutipanAyat::create([
            'kutipan_ayat' => $request->kutipan_ayat,
        ]);
        // mengambil id Kutipan Ayat
        $IdKutipanAyat = $BiodataKutipanAyat->id_kutipan_ayat;

        $BiodataPasanganPria = BiodataPasanganPria::create([
            'nama_lengkap_pria' => $request->nama_lengkap_pria,
            'putra_dari' => $request->putra_dari,
            'nama_bapak_pria' => $request->nama_bapak_pria,
            'nama_ibu_pria' => $request->nama_ibu_pria,
            'gambar_mempelai_pria' => $gambarMempelaiPria,
        ]);
        // mengambil id biodata pasangan pria
        $IdPasanganPria = $BiodataPasanganPria->id_pasangan_pria;

        $BiodataPasanganWanita = BiodataPasanganWanita::create([
            'nama_lengkap_wanita' => $request->nama_lengkap_wanita,
            'putri_dari' => $request->putri_dari,
            'nama_bapak_wanita' => $request->nama_bapak_wanita,
            'nama_ibu_wanita' => $request->nama_ibu_wanita,
            'gambar_mempelai_wanita' => $gambarMempelaiWanita,
        ]);
        // mengambil id pasangan wanita
        $IdPasanganWanita = $BiodataPasanganWanita->id_pasangan_wanita;

        $BiodataGaleriFoto = new BiodataGaleriFoto;
        $BiodataGaleriFoto->galeri_foto1 = $gambarFoto1;
        $BiodataGaleriFoto->galeri_foto2 = $gambarFoto2;
        $BiodataGaleriFoto->galeri_foto3 = $gambarFoto3;
        $BiodataGaleriFoto->galeri_foto4 = $gambarFoto4;
        $BiodataGaleriFoto->galeri_foto5 = $gambarFoto5;
        $BiodataGaleriFoto->galeri_foto6 = $gambarFoto6;
        $BiodataGaleriFoto->galeri_foto7 = $gambarFoto7;
        $BiodataGaleriFoto->galeri_foto8 = $gambarFoto8;
        if (isset($gambarFoto9)) {
            $BiodataGaleriFoto->galeri_foto9 = $gambarFoto9;
        }
        if (isset($gambarFoto10)) {
            $BiodataGaleriFoto->galeri_foto10 = $gambarFoto10;
        }
        $BiodataGaleriFoto->save();

        // mengambil id Galeri Foto
        $IdGaleriFoto = $BiodataGaleriFoto->id_galeri_foto;

        $BiodataJadwalAkad = BiodataJadwalAkad::create([
            'tanggal_akad' => $request->tanggal_akad,
            'jam_mulai_akad' => $request->jam_mulai_akad,
            'waktu_wilayah_akad' => $request->waktu_wilayah_akad,
            'lokasi_akad' => $request->lokasi_akad,
        ]);
        // mengambil id jadwal akad
        $IdJadwalAkad = $BiodataJadwalAkad->id_jadwal_akad;

        $BiodataJadwalResepsi = BiodataJadwalResepsi::create([
            'tanggal_resepsi' => $request->tanggal_resepsi,
            'jam_mulai_resepsi' => $request->jam_mulai_resepsi,
            'waktu_wilayah_resepsi' => $request->waktu_wilayah_resepsi,
            'lokasi_resepsi' => $request->lokasi_resepsi,
        ]);
        // mengambil id jadwal Resepsi
        $IdJadwalResepsi = $BiodataJadwalResepsi->id_jadwal_resepsi;

        $BiodataJadwalResepsi2 = BiodataJadwalResepsi2::create([
            'tanggal_resepsi_2' => $request->tanggal_resepsi_2,
            'jam_mulai_resepsi_2' => $request->jam_mulai_resepsi_2,
            'waktu_wilayah_resepsi_2' => $request->waktu_wilayah_resepsi_2,
            'lokasi_resepsi_2' => $request->lokasi_resepsi_2,
        ]);
        // mengambil id resepsi2
        $IdJadwalResepsi2 = $BiodataJadwalResepsi2->id_jadwal_resepsi2;

        $BiodataKeluargaBesarPria = BiodataKeluargaBesarPria::create([
            'mengundang_pria' => $request->mengundang_pria,
            'nama_keluarga_pria' => $request->nama_keluarga_pria,
        ]);
        // mengambil id Keluarga Besar Pria
        $IdKeluargaBesarPria = $BiodataKeluargaBesarPria->id_keluarga_besar_pria;

        $BiodataKeluargaBesarWanita = BiodataKeluargaBesarWanita::create([
            'mengundang_wanita' => $request->mengundang_wanita,
            'nama_keluarga_wanita' => $request->nama_keluarga_wanita,
        ]);
        // mengambil id Keluarga Besar Wanita
        $IdKeluargaBesarWanita = $BiodataKeluargaBesarWanita->id_keluarga_besar_wanita;

        if ($request->musik) {
            $BiodataMusik = BiodataMusik::create([
                'musik' => $request->musik,
            ]);
            // mengambil id Biodata Musik
            $IdBiodataMusik = $BiodataMusik->id_musik;
        }
        // $IdBiodataMusik = $BiodataMusik->id_musik;

        if ($request->file('musik1')) {
            $musik1 = time();
            // Upload file dengan Helpers Laravel
            $audio1 = uploadImage($request->file('musik1'), 'user_page/template/public/biodata_pelanggan/musik/', $musik1);
            $BiodataMusik = new BiodataMusik;
            $BiodataMusik->musik = $audio1;
            $BiodataMusik->save();
            // mengambil id Biodata Musik
            $IdBiodataMusik = $BiodataMusik->id_musik;
        }

        $BiodataPelanggan = BiodataPelanggan::create([
            'nomor_telepon' => $request->nomor_telepon,
            'id_user' => Auth::user()->id,
            'id_biodata_home_page' => $IdhomePage,
            'id_kutipan_ayat' => $IdKutipanAyat,
            'id_pasangan_pria' => $IdPasanganPria,
            'id_pasangan_wanita' => $IdPasanganWanita,
            'id_galeri_foto' => $IdGaleriFoto,
            'id_jadwal_akad' => $IdJadwalAkad,
            'id_jadwal_resepsi' => $IdJadwalResepsi,
            'id_jadwal_resepsi_2' => $IdJadwalResepsi2,
            'id_keluarga_besar_pria' => $IdKeluargaBesarPria,
            'id_keluarga_besar_wanita' => $IdKeluargaBesarWanita,
            'id_musik' => $IdBiodataMusik,
        ]);
        // mengambil id Biodata Pelanggan
        $IdBiodataPelanggan = $BiodataPelanggan->id_biodata_pelanggan;

        // insert data ke database pemesanan
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('Y-m-d');
        $previewTemplatePemesanan = DB::table('preview_template_pemesanan')->where('id_preview_template_pemesanan', $request->IdpreviewTemplate)->first();
        $PemesananInvitation = PemesananInvitation::create([
            'id_template' => $previewTemplatePemesanan->id_template,
            'id_biodata_pelanggan' => $IdBiodataPelanggan,
            'kategori_template' => $kategori,
            'email' => Auth::User()->email,
            'link_hosting' => $request->nama_link,
            'tanggal_pemesanan' => $tgl,
        ]);
        // mengambil id Biodata Pemesanan
        $IdPemesananInvitation = $PemesananInvitation->id_pemesanan;

        $detailPreviewTemplate = DB::table('detail_preview_template')->where('id_preview_template_pemesanan', $request->IdpreviewTemplate)->get();
        foreach ($detailPreviewTemplate as $detailPreview) {
            DetailPemesananInvitation::create([
                'id_pemesanan' => $IdPemesananInvitation,
                'file_template' => $detailPreview->file_template,
            ]);
        }
        DB::table('preview_template_pemesanan')->where('id_preview_template_pemesanan', $request->IdpreviewTemplate)->delete();

        DB::table('detail_preview_template')->where('id_preview_template_pemesanan', $request->IdpreviewTemplate)->delete();


        return response()->json(["success" => "Data berhasil Disimpan"]);
    }
}
