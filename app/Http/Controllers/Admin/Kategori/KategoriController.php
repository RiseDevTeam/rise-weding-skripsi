<?php

namespace App\Http\Controllers\Admin\Kategori;

use Illuminate\Http\Request;
use App\Models\KategoriTemplate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = KategoriTemplate::paginate(10);
        return view('backend.admin.kategori_template.index', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.kategori_template.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi
        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'harga' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }
        // menghilangkan RP. pada harga
        $harga = explode("Rp.", $request->harga)[1];
        $harga_baru = explode(".", $harga);
        $harga_template = (int) implode($harga_baru);

        // insert data kategori template
        KategoriTemplate::create([
            'kategori' => $request->kategori,
            'harga' => $harga_template,
        ]);

        return response()->json(['success' => 'Kategori Berhasil Disimpan']);
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
        $edit = KategoriTemplate::where('id_kategori_template', $id)->first();
        return view('backend.admin.kategori_template.edit', compact('edit'));
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
        // validasi
        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'harga' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        KategoriTemplate::where('id_kategori_template', $id)->update([
            'kategori' => $request->kategori,
            'harga' => $request->harga,
        ]);

        return response()->json(['success' => 'Kategori Berhasil Diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KategoriTemplate::where('id_kategori_template', $id)->delete();

        return response()->json(["success" => "Data berhasil dihapus"]);
    }
}
