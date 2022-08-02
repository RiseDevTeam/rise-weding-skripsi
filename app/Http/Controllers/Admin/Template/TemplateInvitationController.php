<?php

namespace App\Http\Controllers\Admin\Template;

use App\Models\SubKategori;
use App\Models\FileTemplate;
use Illuminate\Http\Request;
use App\Models\KategoriTemplate;
use App\Models\TemplateInvitation;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TemplateInvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TemplateInvitation = TemplateInvitation::leftjoin('kategori_template', 'template_invitation.id_kategori', '=', 'kategori_template.id_kategori_template')
            ->select('kategori_template.kategori', 'template_invitation.id_template', 'template_invitation.link_hosting', 'template_invitation.gambar_cover', 'template_invitation.file_master')
            ->where('template_invitation.id_user', Auth::User()->id)->get();

        $FileTemplate = FileTemplate::select(DB::raw('count(id_file_template) as file_template'))
            ->first();
        return view('backend.admin.template_invitation.index', compact('TemplateInvitation', 'FileTemplate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = KategoriTemplate::select('kategori_template.kategori', 'kategori_template.id_kategori_template')->get();
        return view('backend.admin.template_invitation.create', compact('kategoris'));
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
            'idKategori' => 'required',
            'linkHosting' => 'required',
            'fileMaster' => 'required|mimes:php,html',
            'gambarTemplate' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        if ($request->file('gambarTemplate')) {

            $fileName = time();
            // contoh untuk controllers uploadFile($request->file('file'), 'public/upload/', 'gambar123');
            $image = uploadImage($request->file('gambarTemplate'), 'gambar/gambar_cover_template/', $fileName);
        }

        if ($request->file('fileMaster')) {

            $NameFile = time();
            // contoh untuk controllers uploadFile($request->file('file'), 'public/upload/', 'gambar123');
            $uploadFile = uploadFile($request->file('fileMaster'), 'file/file_master_template/', $NameFile);
        }

        TemplateInvitation::create([
            'id_kategori' => $request->idKategori,
            'id_user' => Auth::User()->id,
            'link_hosting' => $request->linkHosting,
            'file_master' => $uploadFile,
            'gambar_cover' => $image,
        ]);

        return response()->json(['success' => 'Template Invitation Berhasil Disimpan']);
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
        $edit = TemplateInvitation::where('id_template', $id)->select('template_invitation.link_hosting', 'template_invitation.id_template', 'template_invitation.gambar_cover', 'template_invitation.file_master', 'template_invitation.id_kategori')->first();
        $kategori = KategoriTemplate::where('id_kategori_template', $edit->id_kategori)->first();
        $templateKategori = KategoriTemplate::select('kategori_template.kategori', 'kategori_template.id_kategori_template')->get();
        return view('backend.admin.template_invitation.edit', compact('edit', 'templateKategori', 'kategori'));
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
        // update data template
        TemplateInvitation::where('id_template', $id)->update([
            'id_kategori' => $request->idKategori,
            'id_user' => Auth::User()->id,
            'link_hosting' => $request->linkHosting,
        ]);

        // update data template jika ada gambar
        if ($request->file('gambarTemplate')) {

            $fileName = time();
            // contoh untuk controllers uploadFile($request->file('file'), 'public/upload/', 'gambar123');
            $image = uploadImage($request->file('gambarTemplate'), 'gambar/gambar_cover_template/', $fileName);

            // delete gambar awal ketika di update gambar baru
            $gambarTemplate = TemplateInvitation::findOrFail($id);
            File::delete(public_path() . '/gambar/gambar_cover_template/' . $gambarTemplate->gambar_cover);

            TemplateInvitation::where('id_template', $id)->update([
                'gambar_cover' => $image,
            ]);
        }

        // update data template jika ada PHP
        if ($request->file('fileMaster')) {

            $NameFile = time();
            // contoh untuk controllers uploadFile($request->file('file'), 'public/upload/', 'gambar123');
            $uploadFile = uploadFile($request->file('fileMaster'), 'file/file_master_template/', $NameFile);

            // delete gambar awal ketika di update gambar baru
            $fileTemplate = TemplateInvitation::findOrFail($id);
            File::delete(public_path() . '/file/file_master_template/' . $fileTemplate->file_master);

            TemplateInvitation::where('id_template', $id)->update([
                'file_master' => $uploadFile,
            ]);
        }

        return response()->json(['success' => 'Template Invitation Berhasil Diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TemplateInvitation::where('id_template', $id)->delete();
        return response()->json(["success" => "Data berhasil dihapus"]);
    }

    public function kategori_template(Request $request)
    {
        $kategoriTemplateIcon = SubKategori::where('id_kategori', $request->pilihKategori)
            ->select('sub_kategori.keterangan', 'sub_kategori.id_kategori', 'sub_kategoridKategori.icon')->get();

        return response()->json($kategoriTemplateIcon);
    }
}
