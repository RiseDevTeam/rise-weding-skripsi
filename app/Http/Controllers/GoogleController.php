<?php

namespace App\Http\Controllers;

use Str;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            // dd($user);
            $finduser = User::where('email', $user->email)->first();
            // dd($finduser->status);
            if ($finduser) {
                Auth::login($finduser);
                if ($finduser->status == "admin") {
                    return redirect()->route('dashboard');
                } else {
                    session()->put('status_user', $finduser->status);
                    return redirect()->route('/');
                }
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'foto' => $user->avatar,
                    'password' => bcrypt('12345678'),
                    'status' => 'pelanggan'
                ]);

                Auth::login($newUser);
                session()->put('status_user', 'pelanggan');
                return redirect()->route('/');
            }
        } catch (\Throwable $th) {
        }
    }


    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        session()->flush();
        return redirect()->route('login');
    }
}
