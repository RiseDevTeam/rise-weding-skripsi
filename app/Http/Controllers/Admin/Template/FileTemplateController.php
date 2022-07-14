<?php

namespace App\Http\Controllers\Admin\Template;

use App\Models\SubKategori;
use App\Models\FileTemplate;
use Illuminate\Http\Request;
use App\Models\TemplateInvitation;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FileTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $id_template_session = $id;
        $templateKategori = TemplateInvitation::leftjoin('sub_kategori', 'template_invitation.id_kategori', '=', 'sub_kategori.id_kategori')->where('id_template', $id_template_session)->get();
        return view('backend.admin.file_template.create', compact('templateKategori', 'id_template_session'));
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
            'idSubKategori' => 'required',
            'fileTemplate' => 'required|mimes:html,sql,php',
            'gambarTemplate' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        if ($request->file('fileTemplate')) {
            $fileTemplate = time();
            // Upload file dengan Helpers Laravel
            $file = uploadImage($request->file('fileTemplate'), 'file/file_template/', $fileTemplate);
        }

        if ($request->file('gambarTemplate')) {
            $fileName = time();
            // Upload file dengan Helpers Laravel
            $image = uploadImage($request->file('gambarTemplate'), 'gambar/gambar_template/', $fileName);
        }

        // Insert Data
        FileTemplate::create([
            'id_template' => $request->idTemplate,
            'id_sub_kategori' => $request->idSubKategori,
            'file' => $file,
            'gambar_template' => $image,
        ]);

        return response()->json(['success' => 'File Template Berhasil Disimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_template = $id;
        Session::put('id_template', $id);
        $TemplateIndex = FileTemplate::leftjoin('sub_kategori', 'file_template.id_sub_kategori', '=', 'sub_kategori.id_sub_kategori')->leftjoin('kategori_template', 'sub_kategori.id_kategori', '=', 'kategori_template.id_kategori_template')
            ->leftjoin('template_invitation', 'file_template.id_template', '=', 'template_invitation.id_template')
            ->select('file_template.id_file_template', 'file_template.file', 'file_template.gambar_template', 'sub_kategori.icon', 'kategori_template.kategori', 'template_invitation.id_template')->where('template_invitation.id_template', $id_template)->paginate(10);
        return view('backend.admin.file_template.index', compact('TemplateIndex', 'id_template'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = FileTemplate::leftjoin('sub_kategori', 'file_template.id_sub_kategori', '=', 'sub_kategori.id_sub_kategori')->where('id_file_template', $id)
            ->select(
                'sub_kategori.id_sub_kategori',
                'sub_kategori.keterangan',
                'sub_kategori.icon',
                'file_template.id_file_template',
                'file_template.id_template',
                'file_template.file',
                'file_template.gambar_template',
            )->first();
        $templateKategori = TemplateInvitation::leftjoin('sub_kategori', 'template_invitation.id_kategori', '=', 'sub_kategori.id_kategori')->where('id_template', $edit->id_template)->get();
        return view('backend.admin.file_template.edit', compact('templateKategori', 'edit'));
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
        FileTemplate::where('id_file_template', $id)->update([
            'id_sub_kategori' => $request->idSubKategori,
        ]);

        if ($request->file('fileTemplate')) {
            $fileTemplate = time();
            // Upload file dengan Helpers Laravel
            $file = uploadImage($request->file('fileTemplate'), 'file/file_template/', $fileTemplate);

            // delete gambar awal ketika di update gambar baru
            $fileTemplate = FileTemplate::findOrFail($id);
            File::delete(public_path() . '/file/file_template/' . $fileTemplate->file);

            // update data
            FileTemplate::where('id_file_template', $id)->update([
                'file' => $file,
            ]);
        }

        if ($request->file('gambarTemplate')) {
            $gambarName = time();
            // Upload file dengan Helpers Laravel
            $image = uploadImage($request->file('gambarTemplate'), 'gambar/gambar_template/', $gambarName);

            // delete gambar awal ketika di update gambar baru
            $gambarTemplate = FileTemplate::findOrFail($id);
            File::delete(public_path() . '/gambar/gambar_template/' . $gambarTemplate->gambar_template);

            // update data
            FileTemplate::where('id_file_template', $id)->update([
                'gambar_template' => $image,
            ]);
        }

        return response()->json(['success' => 'File Template Berhasil Diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FileTemplate::where('id_file_template', $id)->delete();

        return response()->json(['success' => 'File Template Berhasil Dihapus']);
    }

    public function kategori_template(Request $request)
    {
        $kategoriTemplateIcon = SubKategori::where('id_sub_kategori', $request->idSubKategori)
            ->select('sub_kategori.keterangan', 'sub_kategori.id_sub_kategori', 'sub_kategori.icon')->first();

        return response()->json($kategoriTemplateIcon);
    }
}
