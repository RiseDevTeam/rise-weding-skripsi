<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Sistem

<p> Aplikasi Wedding ini dibikin dengan banyak kontrobutor, jadi untuk kontributor jika mau edit sistem jangan lupa :
1. setelah di push buat branch baru
<br>
2. push branch baru tersebut, jikalau mau edit kembali maka harus di buatkan new branch lagii..
<br>
3. untuk database boleh digunakan migration
<br>
4. dan jangan lupa untuk mengaktifkan login dengan google nya : composer require laravel/socialite
<br>
5. dan jangan lupa cek pada config/services.php : google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ]
<br>
6. dan terakhir .env nya, di buat kan saja baru, copy .env.example
<br>
