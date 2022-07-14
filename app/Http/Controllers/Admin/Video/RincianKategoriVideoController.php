<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use App\Models\RincianKategoriVideo;
use Illuminate\Http\Request;
use App\Models\KategoriVideo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;

class RincianKategoriVideoController extends Controller
{
    public function index()
    {
        $rincian_kategori_video = RincianKategoriVideo::leftjoin('kategori_video', 'rincian_kategori_video.id_kategori_video', '=', 'kategori_video.id_kategori_video')
            ->select('rincian_kategori_video.rincian_kategori_video', 'rincian_kategori_video.id_rincian_kategori_video', 'kategori_video.kategori')
            ->paginate(10);
        
        return view('backend.admin.rincian_kategori_video.index', compact('rincian_kategori_video'));
    }

    public function create()
    {
        $data_kategori_video = KategoriVideo::all();
        return view('backend.admin.rincian_kategori_video.create', compact('data_kategori_video'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'rincian_kategori' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        RincianKategoriVideo::create([
            'id_kategori_video' => $request->kategori,
            'rincian_kategori_video' => $request->rincian_kategori
        ]);

        return response()->json(['success' => 'Rincian Kategori Video Berhasil Ditambahkan']);
    }

    public function edit($id)
    {
        //data rincian kategori video
        $id_rincian_kategori_video = Crypt::decrypt($id);
        $edit = RincianKategoriVideo::leftjoin('kategori_video', 'rincian_kategori_video.id_kategori_video', '=', 'kategori_video.id_kategori_video')
            ->select('rincian_kategori_video.rincian_kategori_video', 'rincian_kategori_video.id_rincian_kategori_video', 'kategori_video.kategori', 'kategori_video.id_kategori_video')
            ->where('rincian_kategori_video.id_rincian_kategori_video', '=', $id_rincian_kategori_video)
            ->get()->first();

        //data kategori video
        $data_kategori_video = KategoriVideo::all();

        return view('backend.admin.rincian_kategori_video.edit', compact('edit', 'data_kategori_video'));
    }

    public function update(Request $request, $id)
    {
        $id_rincian_kategori_video = Crypt::decrypt($id);

        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'rincian_kategori' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        RincianKategoriVideo::where('id_rincian_kategori_video', $id_rincian_kategori_video)->update([
            'id_kategori_video' => $request->kategori,
            'rincian_kategori_video' => $request->rincian_kategori
        ]);

        return response()->json(['success' => 'Rincian kategori video berhasil diedit']);
    }

    public function destroy($id)
    {
        RincianKategoriVideo::where('id_rincian_kategori_video', $id)->delete();
        return response()->json(['success' => 'Rincian Kategori Video Berhasil Dihapus']);
    }
}
