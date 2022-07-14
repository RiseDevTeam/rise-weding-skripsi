<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\KategoriVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;

class VideoController extends Controller
{
    public function index()
    {
        $videoWedding = Video::leftjoin('kategori_video', 'kategori_video.id_kategori_video', '=', 'video.id_kategori_video')
            ->select('video.id_video', 'video.link_youtube', 'kategori_video.kategori')
            ->paginate(10);

        return view('backend.admin.video_wedding.index', compact('videoWedding'));
    }

    public function create()
    {
        $data_kategori_video = KategoriVideo::all();
        return view('backend.admin.video_wedding.create', compact('data_kategori_video'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'link_youtube' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        $result = "";
        $ytlink = $request->link_youtube;
        $result = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","https://www.youtube.com/embed/$1",$ytlink);

        Video::create([
            'id_kategori_video' => $request->kategori,
            'link_youtube' => $result
        ]);

        return response()->json(['success' => 'Video Wedding Berhasil Ditambahkan']);
    }

    public function edit($id)
    {
        $id_video = Crypt::decrypt($id);

        // data video
        $edit = Video::leftjoin('kategori_video', 'kategori_video.id_kategori_video', '=', 'video.id_kategori_video')
            ->select('video.id_video', 'video.link_youtube', 'kategori_video.kategori')
            ->where('video.id_video', '=', $id_video)
            ->get()->first();

        //data kategori video
        $data_kategori_video = KategoriVideo::all();

        return view('backend.admin.video_wedding.edit', compact('edit', 'data_kategori_video'));
    }

    public function update(Request $request, $id)
    {
        $id_video = Crypt::decrypt($id);

        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'link_youtube' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        $result = "";
        $ytlink = $request->link_youtube;
        $result = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","https://www.youtube.com/embed/$1",$ytlink);

        Video::where('id_video', $id_video)->update([
            'id_kategori_video' => $request->kategori,
            'link_youtube' => $result
        ]);

        return response()->json(['success' => 'Video Wedding Berhasil Diedit']);
    }

    public function destroy($id)
    {
        Video::where('id_video', $id)->delete();
        return response()->json(['success' => 'Video Wedding Berhasil Dihapus']);
    }
}
