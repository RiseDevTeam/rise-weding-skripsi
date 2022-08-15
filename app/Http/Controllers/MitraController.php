<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mitra;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mitra = User::leftjoin('mitra', 'users.id', '=', 'mitra.id_user')->where('status', 'mitra')->get();
        return view('backend.admin.mitra.index', compact('mitra'));
    }

    public function validasi_mitra($id_user)
    {
        Mitra::where('id_user', $id_user)->update([
            'status_mitra' => "validasi"
        ]);
        Alert::success('Selesai', 'Mitra Berhasil Divalidasi');
        return back();
    }
}
