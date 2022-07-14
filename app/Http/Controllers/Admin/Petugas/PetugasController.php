<?php

namespace App\Http\Controllers\Admin\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;

class PetugasController extends Controller
{
    public function index(){
        $dataPetugas = User::where('status', 'petugas')->paginate(10);
        return view('backend.admin.petugas.index', compact('dataPetugas'));
    }

    public function create(){
        return view('backend.admin.petugas.create');
    }

    public function store(Request $request){
        //validasi
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt('12345678'),
            'status' => 'petugas'
        ]);

        return response()->json(['success' => 'Petugas Berhasil Ditambahkan']);
    }

    public function edit($id){
        $id_petugas = Crypt::decrypt($id);
        $edit = User::where('id', $id_petugas)->first();
        return view('backend.admin.petugas.edit', compact('edit'));
    }

    public function update(Request $request, $id){
        //validasi
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'email' => 'required|email'
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->getMessageBag()->toArray()]);
        }

        $id_petugas = Crypt::decrypt($id);
        User::where('id', $id_petugas)->update([
            'name' => $request->nama,
            'email' => $request->email
        ]);

        return response()->json(['success' => 'Data Petugas Berhasil Diupdate']);
    }

    public function destroy($id){
        User::where('id', $id)->delete();
        return response()->json(['success' => 'Data Petugas Berhasil Dihapus']);
    }
}
