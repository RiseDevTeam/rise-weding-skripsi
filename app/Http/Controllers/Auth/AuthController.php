<?php

namespace App\Http\Controllers\Auth;

use uploadImageKTP;
use App\Models\User;
use App\Models\Mitra;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login.index');
    }

    public function proses_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $password = $request->password;
        $proses_login = User::where('email', $request->email)->first();
        if (isset($proses_login)) {
            $status_mitra = Mitra::where('id_user', $proses_login->id)->first();
        }
        // dd($status_mitra->status_mitra);
        if ($proses_login) {
            if (Crypt::decrypt($proses_login->password) == $password) {
                Auth::login($proses_login);
                if ($proses_login->status == 'mitra' && $status_mitra->status_mitra == 'validasi') {
                    return redirect()->route('dashboard');
                } elseif ($proses_login->status == 'mitra' && $status_mitra->status_mitra == 'pending') {
                    Alert::error('Gagal', 'Mitra Belum Divalidasi');
                    return back();
                }
            } else {
                Alert::error('Gagal', 'Login Mitra Salah');
                return redirect('/');
            }
        } else {
            Alert::error('Gagal', 'Authentication Tidak Ada');
            return redirect('/');
        }
    }

    public function register()
    {
        return view('auth.register.register');
    }

    public function proses_register(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'alamat' => 'required',
            'nomor_ktp' => 'required',
            'foto_diri' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'foto_ktp' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->file('foto_diri')) {
            // $foto_diri = time();
            // Upload file dengan Helpers Laravel
            $fotoDiri = uploadImageKTP($request->file('foto_diri'), 'mitra/');
        }

        if ($request->file('foto_ktp')) {
            // $foto_ktp = date("Y-m-d");
            // Upload file dengan Helpers Laravel
            $gambarKTP = uploadImageKTP($request->file('foto_ktp'), 'mitra/');
        }
        $menampilkanUser = User::where('email', $request->email)->first();
        if ($menampilkanUser == Null) {
            $user = User::create([
                'name' => $request->nama,
                'email' => $request->email,
                'password' => Crypt::encrypt($request->password),
                'foto' => $fotoDiri,
                'status' => 'mitra',
            ]);
            $idUser = $user->id;
            Mitra::create([
                'id_user' => $idUser,
                'nomor_ktp' => $request->nomor_ktp,
                'nomor_telepon' => $request->nomor_telepon,
                'foto_ktp' => $gambarKTP,
                'alamat' => $request->alamat,
                'status_mitra' => 'pending',
            ]);
            Alert::success('Selesai', 'Data berhasil ditambahkan');
            return redirect()->route('login');
        } else {
            Alert::error('Gagal', 'Mitra Sudah Ada');
            return view('auth.register.register', compact('menampilkanUser'));
        }
    }

    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        session()->flush();
        return redirect()->route('login');
    }
}
