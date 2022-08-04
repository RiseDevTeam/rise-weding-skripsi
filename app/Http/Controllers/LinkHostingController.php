<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemesananInvitation;
use Illuminate\Support\Facades\Auth;

class LinkHostingController extends Controller
{
    public function hostingan_user($link_hosting)
    {
        if (Auth::User()) {
            # code...
            $hostingan =  PemesananInvitation::leftjoin('template_invitation', 'pemesanan_invitation.id_template', '=', 'template_invitation.id_template')
                ->leftjoin('biodata_pelanggan', 'pemesanan_invitation.id_biodata_pelanggan', '=', 'biodata_pelanggan.id_biodata_pelanggan')
                ->select(
                    'pemesanan_invitation.kategori_template',
                    'pemesanan_invitation.link_hosting',
                    'template_invitation.file_master',
                    'biodata_pelanggan.id_user',
                )
                ->where('pemesanan_invitation.link_hosting', $link_hosting)
                ->where('biodata_pelanggan.id_user', Auth::User()->id)
                ->orderBy('pemesanan_invitation.id_pemesanan', 'desc')
                ->first();
            return view('frontend.hostingan', compact('hostingan'));
        } else {
            # code...
        }
    }
}
