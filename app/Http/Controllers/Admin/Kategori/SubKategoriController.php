<?php

namespace App\Http\Controllers\Admin\Kategori;

use App\Models\SubKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\KategoriTemplate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SubKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_kategori = SubKategori::leftjoin('kategori_template', 'sub_kategori.id_kategori', '=', 'kategori_template.id_kategori_template')
            ->select('kategori_template.kategori', 'sub_kategori.icon', 'sub_kategori.id_sub_kategori', 'sub_kategori.icon', 'sub_kategori.keterangan')
            ->paginate(10);
        return view('backend.admin.sub_kategori.index', compact('sub_kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_template = KategoriTemplate::all();
        return view('backend.admin.sub_kategori.create', compact('kategori_template'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        if ($request->file('gambar')) {

            $fileName = time();
            // contoh untuk controllers uploadFile($request->file('file'), 'public/upload/', 'gambar123');
            $image = uploadImage($request->file('gambar'), 'gambar/icon_template/', $fileName);
        }

        SubKategori::create([
            "id_kategori" => $request->kategori,
            "keterangan" => $request->keterangan,
            "icon" => $image,
        ]);


        return response()->json(['success' => 'Sub Kategori Berhasil Disimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // pengampilan data sub kategori
        $edit = SubKategori::where('id_sub_kategori', $id)->first();
        // pengampilan data kategori template
        $kategori_template = KategoriTemplate::all();
        // pengampilan data kategori template yg sudah ada di table kategori template
        $data =  KategoriTemplate::where('id_kategori_template', $edit->id_kategori)->select('kategori', 'id_kategori_template')->first();
        return view('backend.admin.sub_kategori.edit', compact('edit', 'kategori_template', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        SubKategori::where('id_sub_kategori', $id)->update([
            "id_kategori" => $request->kategori,
            "keterangan" => $request->keterangan,
        ]);

        if ($request->file('gambar')) {

            $fileName = time();
            // contoh untuk controllers uploadFile($request->file('file'), 'public/upload/', 'gambar123');
            $image = uploadImage($request->file('gambar'), 'gambar/icon_template/', $fileName);

            $gambarKategori = SubKategori::findOrFail($id);
            // File::delete(uploadImage($request->file('gambar'), 'gambar/halaman_admin/', $fileName));
            File::delete(public_path() . '/gambar/icon_template/' . $gambarKategori->icon);

            SubKategori::where('id_sub_kategori', $id)->update([
                "id_kategori" => $request->kategori,
                "keterangan" => $request->keterangan,
                "icon" => $image,
            ]);
        }



        return response()->json(['success' => 'Sub Kategori Berhasil Diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubKategori::where('id_sub_kategori', $id)->delete();

        return response()->json(["success" => "Data berhasil dihapus"]);
    }
}
