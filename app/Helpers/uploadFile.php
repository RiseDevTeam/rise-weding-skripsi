<?php

// $file di kirim dari parameter di controller contoh $request->file('file');
// $path di kirim dari parameter di controller contoh 'public/upload/';
// $name di kirim dari parameter di controller yang akan menjadi nama baru file contoh gamar123.png';
if (!function_exists('uploadFile')) {
    function uploadFile($file, $path, $name = null)
    {
        $fileNamephp = time() . rand(1, 100) . '.' . $file->getClientOriginalExtension();
        // $extension = $file->getClientOriginalExtension();
        // $fileNamephp = $name ? $name . '.' .  : $fileNamephp;
        $file->move($path, $fileNamephp);
        return $fileNamephp;
    }
}

// contoh untuk controllers uploadFile($request->file('file'), 'public/upload/', 'gambar123');
