<?php

namespace App\Http\Controllers\Admin\Template;

use Illuminate\Http\Request;
use App\Models\MusikTemplate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class MusikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musiks = MusikTemplate::paginate(10);
        return view('backend.admin.musik_template.index', compact('musiks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.musik_template.create');
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
            'Judulmusik' => 'required',
            'musik' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        if ($request->file('musik')) {

            $fileName = time();
            // Upload file dengan Helpers Laravel
            $audio = uploadImage($request->file('musik'), 'file/audio_template/', $fileName);
        }

        // insert data kategori template
        MusikTemplate::create([
            'judul_musik' => $request->Judulmusik,
            'musik' => $audio,
        ]);

        return response()->json(['success' => 'Musik Template Berhasil Disimpan']);
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
        $id_musik_template = Crypt::decrypt($id);

        $edit =  MusikTemplate::where('id_musik_template', $id_musik_template)->first();
        return view('backend.admin.musik_template.edit', compact('edit'));
        // dd($id_musik_template);
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
        MusikTemplate::where('id_musik_template', $id)->update([
            'judul_musik' => $request->Judulmusik
        ]);

        if ($request->musik) {

            $fileName = time();
            // Upload file dengan Helpers Laravel
            $audio = uploadImage($request->file('musik'), 'file/audio_template/', $fileName);

            MusikTemplate::where('id_musik_template', $id)->update([
                'musik' => $audio
            ]);
        }

        return response()->json(['success' => 'Musik Template Berhasil Diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MusikTemplate::where('id_musik_template', $id)->delete();
        return response()->json(["success" => "Data berhasil dihapus"]);
    }
}
