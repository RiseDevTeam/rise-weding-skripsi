<?php

namespace App\Http\Controllers\User\Users;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\KategoriTemplate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use App\Models\RincianKetegoriTemplate;

class UserPageController extends Controller
{
    public function kategori_template()
    {
        // menampilkan kategori template pada halaman utama
        $KategoriTemplate = KategoriTemplate::leftjoin('rincian_kategori_template', 'kategori_template.id_kategori_template', '=', 'rincian_kategori_template.id_kategori')->select('id_kategori_template', 'kategori', 'harga', 'rincian_kategori_template')->get();
        // menampilkan kategori template pada halaman utama
        return view('frontend.template_invitation.kategori_template', compact('KategoriTemplate'));
        // return view('frontend.template_invitation.kategori_template');
    }

    public function video_invitation()
    {
        return view('frontend.video_invitation.video_invitation');
    }

    public function portfolio()
    {
        return view('frontend.portfolio.portfolio');
    }

    public function blog()
    {
$blog = Blog::where('isActive', '1')->orderBy('id_blog', 'desc')->first();
        $blogLain = Blog::where('isActive', '1')
            ->orderBy('id_blog', 'desc')->get();

        if ($blogLain == Null || $blog == Null) {
            return redirect('/')->with('blog', 'Blog Belum Ada!');
        } else {
            return view('frontend.blog.blog', compact('blog', 'blogLain'));
        }
    }

    public function detail_blog($id_blog)
    {
       $blog = Crypt::decrypt($id_blog);
        $blogDetail = blog::where('id_blog', $blog)->first();
        $blogLain = Blog::where('isActive', '1')
            ->orderBy('id_blog', 'desc')->get();
        return view('frontend.blog.detail_blog', compact('blogDetail', 'blogLain'));
    }
}
