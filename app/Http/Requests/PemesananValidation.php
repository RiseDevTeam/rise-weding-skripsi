<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PemesananValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
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
            'tanggal_resepsi_2' => 'required',
            'jam_mulai_resepsi_2' => 'required',
            'waktu_wilayah_resepsi_2' => 'required',
            'lokasi_resepsi_2' => 'required',
            'mengundang_pria' => 'required',
            'nama_keluarga_pria' => 'required',
            'mengundang_wanita' => 'required',
            'nama_keluarga_wanita' => 'required',
            'nama_link' => 'required',
        ];
    }
}
