<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use File;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index(){
        $dataBlog = Blog::paginate(10);
        return view('backend.admin.blog.index', compact('dataBlog'));
    }

    public function create(){
        return view('backend.admin.blog.create');
    }

    //function untuk menyimpan/upload gambar yang diupload dalam CKEDITOR kedalam server
    public function upload(Request $request){
        if($request->hasFile('upload')){
            $namaAsli = $request->file('upload')->getClientOriginalName();
            $namaFile = pathinfo($namaAsli, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $namaFile = $namaFile."_".time().'.'.$extension;

            $request->file('upload')->move(public_path('gambar/gambar_blog/konten/'), $namaFile);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('gambar/gambar_blog/konten/'.$namaFile);
            $msg = 'Image Uploaded Successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset-utf-8');
            echo $response;
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'thumbnail' => 'mimes:jpeg,png,jpg,gif,svg',
            'judul' => 'required|min:1',
            'isi' => 'required',
            'tanggal' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        $thumbName = null;

        if($request->thumbnail){
            $thumbName = time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('gambar/gambar_blog/thumbnail'), $thumbName);
        }

        Blog::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'isi_blog' => $request->isi,
            'isActive' => "0",
            'thumbnail' => $thumbName,
            'tanggal' => $request->tanggal    
        ]);

        return response()->json(['success' => 'Blog Berhasil Disimpan']);
    }

    public function edit($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('backend.admin.blog.edit', compact("blog"));
    }

    public function update(Request $request, $slug)
    {

        Blog::where('slug', $slug)->update([
            "judul" => $request->judul,
            "isi_blog" => $request->isi,
            "tanggal" => $request->tanggal,
        ]);

        if ($request->file('thumbnail')) {

            $fileName = time();
            // contoh untuk controllers uploadFile($request->file('file'), 'public/upload/', 'gambar123');
            $image = uploadImage($request->file('thumbnail'), 'gambar/gambar_blog/thumbnail/', $fileName);

            // $thumbnailBlog = Blog::findOrFail($slug);
            $data =  Blog::where('slug', $slug)->first();
            File::delete(public_path() . '/gambar/gambar_blog/thumbnail/' . $data->thumbnail);

            Blog::where('slug', $slug)->update([
                "judul" => $request->judul,
                "isi_blog" => $request->isi,
                "thumbnail" => $image,
                "tanggal" => $request->tanggal
            ]);
        }

        return response()->json(['success' => 'Blog Berhasil Diupdate']);
    }

    public function destroy($slug)
    {
        $data =  Blog::where('slug', $slug)->first();
        File::delete(public_path().'/gambar/gambar_blog/thumbnail/' . $data->thumbnail); // untuk menghapus file nya
        
        Blog::where('slug', $slug)->delete();
        return response()->json(["success" => "Data berhasil dihapus"]);
    }

    // function mengupdate status blog [aktif/arsip]
    public function changeStatus(Request $request)
    {
        Blog::where('id_blog', $request->id_blog)->update([
            "isActive" => $request->status
        ]);
  
        return response()->json(['success'=>'Status change successfully.']);
    }

    //preview blog
    public function preview($slug){
        $blog = Blog::where('slug', $slug)->first();
        return view('backend.admin.blog.preview', compact("blog"));
    }
}
