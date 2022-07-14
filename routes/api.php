<?php

use Illuminate\Http\Request;
use App\Models\TemplateInvitation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/risedev-wedding-users/template-invitation/detail-template/{id_kategori}', function ($id_kategori) {
    // return $id_kategori;
    $id_kategori = Crypt::decrypt($id_kategori);
    $gambar_template = TemplateInvitation::leftjoin('file_template', 'template_invitation.id_template', '=', 'file_template.id_template')
        ->where('template_invitation.id_kategori', $id_kategori)
        ->groupby('file_template.id_sub_kategori')
        ->select('template_invitation.id_template', 'file_template.file', 'file_template.gambar_template', 'file_template.id_file_template', 'file_template.id_sub_kategori', 'template_invitation.id_template')
        ->get();

    foreach ($gambar_template as $key => $value) {
        $sub = DB::table('sub_kategori')
            ->where('id_sub_kategori', $value->id_sub_kategori)
            ->first();
        $gambar_template[$key]->id_sub_kategori = $sub;
    }

    return response()->json($gambar_template);
});

Route::get('/detail-template/ambil_satu/{id}/{id_kategori}', function ($id, $id_kategori) {

    // return response()->json([$id, $id_kategori]);

    $id_kategori = Crypt::decrypt($id_kategori);
    $gambar_template = TemplateInvitation::leftjoin('file_template', 'template_invitation.id_template', '=', 'file_template.id_template')
        ->where('template_invitation.id_kategori', $id_kategori)
        ->where('file_template.id_file_template', $id)
        ->groupby('file_template.id_sub_kategori')
        ->select('template_invitation.id_template', 'file_template.file', 'file_template.gambar_template', 'file_template.id_file_template', 'file_template.id_sub_kategori', 'template_invitation.id_template')
        ->first();

    return response()->json($gambar_template);
});
