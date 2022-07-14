<?php

namespace App\Http\Controllers\Admin\kategori;

use App\Http\Controllers\Controller;
use App\Models\KategoriTemplate;
use App\Models\RincianKetegoriTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RincianKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rincian_kategori = RincianKetegoriTemplate::leftjoin('kategori_template', 'rincian_kategori_template.id_kategori', '=', 'kategori_template.id_kategori_template')
            ->select('rincian_kategori_template.rincian_kategori_template', 'rincian_kategori_template.id_rincian_kategori', 'kategori_template.kategori')->paginate(10);
        return view('backend.admin.rincian_kategori_template.index', compact('rincian_kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_template = KategoriTemplate::all();
        return view('backend.admin.rincian_kategori_template.create', compact('kategori_template'));
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
            'rincianKategori' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        RincianKetegoriTemplate::create([
            'id_kategori' => $request->kategori,
            'rincian_kategori_template' => $request->rincianKategori,
        ]);

        return response()->json(['success' => 'Rincian Kategori Berhasil Disimpan']);
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
        // pengampilan data rincian kategori template
        $edit = RincianKetegoriTemplate::where('id_rincian_kategori', $id)->first();
        // pengampilan data kategori template
        $kategori_template = KategoriTemplate::all();
        // pengampilan data kategori template yg sudah ada di table rincian kategori
        $data =  KategoriTemplate::where('id_kategori_template', $edit->id_kategori)->select('kategori', 'id_kategori_template')->first();

        return view('backend.admin.rincian_kategori_template.edit', compact('edit', 'kategori_template', 'data'));
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
        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'rincianKategori' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }
        RincianKetegoriTemplate::where('id_rincian_kategori', $id)->update([
            'id_kategori' => $request->kategori,
            'rincian_kategori_template' => $request->rincianKategori,
        ]);

        return response()->json(['success' => 'Rincian Kategori Berhasil Disimpan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RincianKetegoriTemplate::where('id_rincian_kategori', $id)->delete();
        return response()->json(['success' => 'Rincian Kategori Berhasil Dihapus']);
    }
}
