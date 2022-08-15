<?php

namespace App\Http\Controllers\User\Home;

use Illuminate\Http\Request;
use App\Models\BiodataPelanggan;
use App\Models\TemplateInvitation;
use App\Models\PemesananInvitation;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    public function home_page()
    {
        $TemplateInvitation = TemplateInvitation::leftjoin('kategori_template', 'template_invitation.id_kategori', '=', 'kategori_template.id_kategori_template')
            ->select(
                'template_invitation.id_kategori',
                'template_invitation.id_template',
                'template_invitation.id_user',
                'template_invitation.link_hosting',
                'gambar_cover',
                'kategori_template.kategori'
            )->get();

        $data =  PemesananInvitation::leftjoin('template_invitation', 'pemesanan_invitation.id_template', '=', 'template_invitation.id_template')
            ->leftjoin('biodata_pelanggan', 'pemesanan_invitation.id_biodata_pelanggan', '=', 'biodata_pelanggan.id_biodata_pelanggan')
            ->leftjoin('biodata_pasangan_pria', 'biodata_pelanggan.id_pasangan_pria', '=', 'biodata_pasangan_pria.id_pasangan_pria')
            ->leftjoin('biodata_pasangan_wanita', 'biodata_pelanggan.id_pasangan_wanita', '=', 'biodata_pasangan_wanita.id_pasangan_wanita')
            ->select(
                'pemesanan_invitation.kategori_template',
                'pemesanan_invitation.link_hosting',
                'biodata_pasangan_pria.nama_lengkap_pria as nama_pria',
                'biodata_pasangan_wanita.nama_lengkap_wanita as nama_wanita',
                'biodata_pelanggan.id_user',
                'template_invitation.file_master',
            );
        if (isset(Auth::User()->id)) {
            $result = $data
                ->where('biodata_pelanggan.id_user', Auth::User()->id)
                ->orderBy('pemesanan_invitation.id_template', 'desc');
        } else {
            $result = $data->orderBy('pemesanan_invitation.id_template', 'desc');
        }
        $biodata_pelanggan = $result->first();


        $blog = Blog::where('isActive', '1')->orderBy('id_blog', 'desc')->first();
        $blogLain = Blog::where('isActive', '1')
            ->orderBy('id_blog', 'desc')->get();
        return view('frontend.home_page', compact('TemplateInvitation', 'biodata_pelanggan', 'blog', 'blogLain'));
    }
}
