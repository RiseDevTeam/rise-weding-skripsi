<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriVideo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;

class KategoriVideoController extends Controller
{
    public function index(){
        $kategoriVideo = KategoriVideo::paginate(10);
        return view('backend.admin.kategori_video.index', compact('kategoriVideo'));
    }

    public function create(){
        return view('backend.admin.kategori_video.create');
    }

    public function store(Request $request){
        //validasi
        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'harga' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        // menghilangkan RP pada harga
        $harga = explode("Rp.", $request->harga)[1];
        $hargaBaru = explode(".", $harga);
        $hargaVideo = (int) implode($hargaBaru);

        //insert DB
        KategoriVideo::create([
            'kategori' => $request->kategori,
            'harga' => $hargaVideo
        ]);

        return response()->json(['success' => 'Kategori Video Berhasil Disimpan']);
    }

    public function edit($id){
        $id_kategori_video = Crypt::decrypt($id);
        // dd($id_kategori_video);
        $edit = KategoriVideo::where('id_kategori_video', $id_kategori_video)->first();
        return view('backend.admin.kategori_video.edit', compact('edit'));
    }

    public function update(Request $request, $id){
        //validasi
        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'harga' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->getMessageBag()->toArray()]);
        }

        // menghilangkan RP. pada harga
        $harga = explode("Rp.", $request->harga)[1];
        $harga_baru = explode(".", $harga);
        $harga_kategori = (int) implode($harga_baru);

        $id_kategori_video = Crypt::decrypt($id);
        KategoriVideo::where('id_kategori_video', $id_kategori_video)->update([
            'kategori' => $request->kategori,
            'harga' => $harga_kategori
        ]);

        return response()->json(['success' => 'Kategori Video Berhasil Diupdate']);
    }

    public function destroy($id){
        KategoriVideo::where('id_kategori_video', $id)->delete();
        return response()->json(['success' => "Kategori Video Berhasil Dihapus"]);
    }
}
