@extends('layouts.user')
@section('css_khusus')
    <link rel="stylesheet" href="{{ asset('user_page/template/public/css/data-undangan.css') }}" />
@section('title', 'Template Invitation')

@section('content_user')

    <a href="{{ route('preview_template', $id_kategori_template) }}" target="_blank" class="btn btn-danger">Check Preview
        Template</a>

    <form method="POST" id="form-biodata-pelanggan" enctype="multipart/form-data">
        @csrf
        <section class="isi-data-undangan">
            <div class="container">
                <h3>Dapatkan <span>Kartu Undangan</span> Kamu Sekarang Juga</h3>
                <!-- Gambar Kiri -->
                <div class="col-lg-8 mx-auto data-undangan">
                    <div class="accordion accordion-flush" id="accordionFlush">
                        <!-- Homepage -->
                        <div class="accordion-item profil-mempelai">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="true"
                                    aria-controls="flush-collapseOne">
                                    <p>
                                        <i class="bi bi-person-badge pr-2"></i>
                                        Homepage
                                    </p>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlush">
                                <div class="accordion-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="ju" class="form-label">Judul Undangan</label>
                                                <input type="text" id="title" class="form-control"
                                                    placeholder="ex: Undangan Pernikahan" value="{{ old('title') }}"
                                                    autofocus />
                                                <div id="validationTitle" class="invalid-feedback"></div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="wa" class="form-label">Nomor What's App</label>
                                                <input type="text" id="nomor_telepon"
                                                    value="{{ old('nomor_telepon') ?? '' }}" class="form-control"
                                                    placeholder="Nomor What's App" />
                                                <div id="validationNomorTelepon" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="npp" class="form-label">Nama Panggilan Pria</label>
                                                <input type="text" id="nama_panggilan_pria" class="form-control"
                                                    placeholder="Nama Panggilan Pria" />
                                                <div id="validationPanggilanPria" class="invalid-feedback"></div>

                                            </div>
                                            <div class="mb-3">
                                                <label for="npw" class="form-label">Nama Panggilan
                                                    Wanita</label>
                                                <input type="text" id="nama_panggilan_wanita" class="  form-control"
                                                    placeholder="Nama Panggilan Wanita" />
                                                <div id="validationPanggilanWanita" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="fm" class="form-label">Foto Mempelai</label>
                                                <input type="file" id="foto_mempelai" class="form-control"
                                                    id="gambar_mempelai" onchange="gambarMempelai()" />
                                                <img src="{{ asset('user_page/template/public/img/img.png') }}"
                                                    class="img-fluid mt-1" id="img_mempelai" alt="background image" />
                                                <div id="validationImgMempelai" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="kp" class="form-label">Kata Pembuka</label>
                                                <div class="form-floating">
                                                    <textarea class="form-control" id="kata_pembuka" style="height: 200px; width: 100%"> Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami. </textarea>
                                                    <div id="validationKataPembuka" class="invalid-feedback"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Kutipan Ayat -->
                        <div class="accordion-item galeri">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    <p>
                                        <i class="bi bi-book pr-2"></i>
                                        Kutipan Ayat
                                    </p>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlush">
                                <div class="accordion-body">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <div class="form-floating">
                                                <textarea class="form-control" id="kutipan_ayat" placeholder="Kutipan Ayat" id="floatingTextarea"
                                                    style="height: 200px; width: 100%"> “Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”
    
                                                    QS. An Nahl Ayat 72 </textarea>
                                                <div id="validationKutipanAyat" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Profil Mempelai -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    <p>
                                        <i class="bi bi-people-fill pr-2"></i>
                                        Profil Mempelai
                                    </p>
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlush">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-md-6 mempelai-pria">
                                            <div class="mb-3">
                                                <label for="nl" class="form-label">Nama Lengkap Pria</label>
                                                <input type="text" id="nama_lengkap_pria" class="form-control"
                                                    placeholder="Nama Lengkap Pria" />
                                                <div id="validationNamaLengkapPria" class="invalid-feedback"></div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nl" class="form-label">Keterangan Pasangan Pria</label>
                                                <input type="text" id="putra_dari" class="form-control"
                                                    placeholder="ex : Putra Pertama Dari" />
                                                <div id="validationKeteranganPasanganPria" class="invalid-feedback"></div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="na" class="form-label">Nama Ayah (Mempelai Pria)</label>
                                                <input type="text" id="nama_bapak_pria" class="form-control"
                                                    placeholder="Nama Ayah" />
                                                <div id="validationNamaAyahPria" class="invalid-feedback"></div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="ni" class="form-label">Nama Ibu (Mempelai Pria)</label>
                                                <input type="text" id="nama_ibu_pria" class="form-control"
                                                    placeholder="Nama Ibu" />
                                                <div id="validationNamaIbuPria" class="invalid-feedback"></div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="fml" class="form-label">Foto Mempelai Pria</label>
                                                <input type="file" id="gambar_mempelai_pria"
                                                    onchange="gambarMempelaiPria()" class="form-control" />
                                                <img src="{{ asset('user_page/template/public/img/img.png') }}"
                                                    class="img-fluid mt-1" id="imgMempelaiPria" alt="background image" />
                                                <div id="validationImgMempelaiPria" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mempelai-wanita">
                                            <div class="mb-3">
                                                <label for="nl" class="form-label">Nama Lengkap Wanita</label>
                                                <input type="text" id="nama_lengkap_wanita" class="form-control"
                                                    placeholder="Nama Lengkap Wanita" />
                                                <div id="validationNamaLengkapWanita" class="invalid-feedback"></div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nl" class="form-label">Keterangan Pasangan
                                                    Wanita</label>
                                                <input type="text" id="putri_dari" class="form-control"
                                                    placeholder="ex : Putri Pertama Dari" />
                                                <div id="validationKeteranganPasanganWanita" class="invalid-feedback">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="na" class="form-label">Nama Ayah</label>
                                                <input type="text" id="nama_bapak_wanita" class="form-control"
                                                    placeholder="Nama Ayah" />
                                                <div id="validationNamaAyahWanita" class="invalid-feedback"></div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="ni" class="form-label">Nama Ibu</label>
                                                <input type="text" id="nama_ibu_wanita" class="form-control"
                                                    placeholder="Nama Ibu" />
                                                <div id="validationNamaIbuWanita" class="invalid-feedback"></div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="fml" class="form-label">Foto Mempelai Wanita</label>
                                                <input type="file" id="gambar_mempelai_wanita"
                                                    onchange="gambarMempelaiWanita()" class="form-control" />
                                                <img src="{{ asset('user_page/template/public/img/img.png') }}"
                                                    class="img-fluid mt-1" id="imgMempelaiWanita"
                                                    alt="background image" />
                                                <div id="validationGambarMempelaiWanita" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    <p>
                                        <i class="bi bi-images pr-2"></i>
                                        Gallery
                                    </p>
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlush">
                                <div class="accordion-body">
                                    <div class="mb-3">
                                        <label for="fp" class="form-label">Foto Pernikahan (Masukkan Foto Pernikahan
                                            Maksimal 10
                                            Foto)</label>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <input type="file" id="galeri_foto1" class="form-control" />
                                                <div id="validationgaleri_foto1" class="invalid-feedback"></div>
                                                <br />
                                                <input type="file" id="galeri_foto2" class="form-control" />
                                                <div id="validationgaleri_foto2" class="invalid-feedback"></div>
                                                <br />
                                                <input type="file" id="galeri_foto3" class="form-control" />
                                                <div id="validationgaleri_foto3" class="invalid-feedback"></div>
                                                <br />
                                                <input type="file" id="galeri_foto4" class="form-control" />
                                                <div id="validationgaleri_foto4" class="invalid-feedback"></div>
                                                <br />
                                                <input type="file" id="galeri_foto5" class="form-control" />
                                                <div id="validationgaleri_foto5" class="invalid-feedback"></div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <input type="file" id="galeri_foto6" class="form-control" />
                                                <div id="validationgaleri_foto6" class="invalid-feedback"></div>
                                                <br />
                                                <input type="file" id="galeri_foto7" class="form-control" />
                                                <div id="validationgaleri_foto7" class="invalid-feedback"></div>
                                                <br />
                                                <input type="file" id="galeri_foto8" class="form-control" />
                                                <div id="validationgaleri_foto8" class="invalid-feedback"></div>
                                                <br />
                                                <input type="file" id="galeri_foto9" class="form-control" />
                                                <br />
                                                <input type="file" id="galeri_foto10" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Jadwal Akad Nikah -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    <p>
                                        <i class="bi bi-calendar-heart pr-2"></i>
                                        Jadwal Akad Nikah
                                    </p>
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlush">
                                <div class="accordion-body">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="tanggal" class="form-label">Tanggal</label>
                                            <input type="date" id="tanggal_akad" class="form-control" />
                                            <div id="validationTanggalAkad" class="invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="jm" class="form-label">Jam Mulai</label>
                                                <input type="time" id="jam_mulai_akad" class="form-control" />
                                                <div id="validationJamMulaiAkad" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="js" class="form-label">Selesai</label>
                                                <input type="checkbox" value="Selesai" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="tanggal" class="form-label">Waktu Wilayah</label>
                                            <select class="form-control" id="waktu_wilayah_akad"
                                                aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="WIB">WIB</option>
                                                <option value="WIT">WIT</option>
                                                <option value="WITA">WITA</option>
                                            </select>
                                            <div id="validationWaktuWilayahAkad" class="invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="pldp" class="form-label"> Alamat Lengkap (Untuk
                                            Ditampilkan di
                                            Undangan
                                            Online)</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" id="lokasi_akad" id="floatingTextarea" style="height: 80px; width: 100%"></textarea>
                                            <label for="floatingTextarea">ex : Jl. Khatib Sulaiman Kel No.1,Lolong
                                                Belanti,
                                                Kec. Padang Utara, Kota Padang</label>
                                        </div>
                                        <div id="validationLokasiAkad" class="invalid-feedback"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Jadwal Resepsi 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    <p>
                                        <i class="bi bi-calendar-heart pr-2"></i>
                                        Jadwal Resepsi 1 (Optional)
                                    </p>
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlush">
                                <div class="accordion-body">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="tanggal" class="form-label">Tanggal</label>
                                            <input type="date" id="tanggal_resepsi" class="form-control" />
                                            <div id="validationTanggalResepsi" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="jm" class="form-label">Jam Mulai</label>
                                                <input type="time" id="jam_mulai_resepsi" class="form-control" />
                                                <div id="validationJamMulaiResepsi" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="js" class="form-label">Selesai</label>
                                                <input type="checkbox" value="Selesai" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="tanggal" class="form-label">Waktu Wilayah</label>
                                            <select class="form-control" id="waktu_wilayah_resepsi"
                                                aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="WIB">WIB</option>
                                                <option value="WIT">WIT</option>
                                                <option value="WITA">WITA</option>
                                            </select>
                                            <div id="validationWaktuWilayahResepsi" class="invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="pldp" class="form-label"> Alamat Lengkap (Untuk
                                            Ditampilkan di
                                            Undangan
                                            Online)</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" id="lokasi_resepsi" id="floatingTextarea" style="height: 80px; width: 100%"></textarea>
                                            <label for="floatingTextarea">ex : Jl. Khatib Sulaiman Kel No.1,Lolong
                                                Belanti,
                                                Kec. Padang Utara, Kota Padang</label>
                                        </div>
                                        <div id="validationLokasiResepsi" class="invalid-feedback"></div>
                                    </div>
                                    <br />
                                </div>
                            </div>
                        </div>
                        <!-- Jadwal Resepsi 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                    aria-controls="flush-collapseSeven">
                                    <p>
                                        <i class="bi bi-calendar-heart pr-2"></i>
                                        Jadwal Resepsi 2 (Optional)
                                    </p>
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlush">
                                <div class="accordion-body">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="tanggal" class="form-label">Tanggal</label>
                                            <input type="date" id="tanggal_resepsi_2" class="form-control" />
                                            <div id="validationTanggalResepsi2" class="invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="jm" class="form-label">Jam Mulai</label>
                                                <input type="time" id="jam_mulai_resepsi_2" class="form-control" />
                                                <div id="validationJamMulaiResepsi2" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="tanggal" class="form-label">Waktu Wilayah</label>
                                            <select class="form-control" id="waktu_wilayah_resepsi_2"
                                                aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="WIB">WIB</option>
                                                <option value="WIT">WIT</option>
                                                <option value="WITA">WITA</option>
                                            </select>
                                            <div id="validationWaktuWilayahResepsi2" class="invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="pldp" class="form-label"> Alamat Lengkap (Untuk
                                            Ditampilkan di
                                            Undangan
                                            Online)</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" id="lokasi_resepsi_2" id="floatingTextarea" style="height: 80px; width: 100%"></textarea>
                                            <label for="floatingTextarea">ex : Jl. Khatib Sulaiman Kel No.1,Lolong
                                                Belanti,
                                                Kec. Padang Utara, Kota Padang</label>
                                        </div>
                                        <div id="validationLokasiResepsi2" class="invalid-feedback"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Undangan Keluarga Besar Mempelai Pria -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseEight" aria-expanded="false"
                                    aria-controls="flush-collapseEight">
                                    <p>
                                        <i class="bi bi-envelope pr-2"></i>
                                        Undangan Keluarga Besar Mempelai Pria
                                    </p>
                                </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlush">
                                <div class="accordion-body">
                                    <div class="mb-3">
                                        <label for="kpm" class="form-label">Turut Menundang</label>
                                        <input type="text" id="mengundang_pria" class="form-control"
                                            value="Keluarga Besar Mempelai Pria" />
                                        <div id="validationMengundangPria" class="invalid-feedback"></div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-floating">
                                            <label for="dnkbp"></label>
                                            <textarea class="form-control" id="nama_keluarga_pria" placeholder="Daftar Nama Keluarga Besar Mempelai Pria"
                                                id="floatingTextarea" style="height: 200px; width: 100%"></textarea>
                                            <label for="floatingTextarea">Daftar Nama Keluarga Besar Mempelai
                                                Pria</label>
                                        </div>
                                        <div id="validationNamaKeluargaPria" class="invalid-feedback"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Undangan Keluarga Besar Mempelai Wanita -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseNine" aria-expanded="false"
                                    aria-controls="flush-collapseNine">
                                    <p>
                                        <i class="bi bi-envelope pr-2"></i>
                                        Undangan Keluarga Besar Mempelai Wanita
                                    </p>
                                </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlush">
                                <div class="accordion-body">
                                    <div class="mb-3">
                                        <label for="kpm" class="form-label">Turut Mengundang</label>
                                        <input type="text" id="mengundang_wanita" class="form-control"
                                            value="Keluarga Besar Mempelai Wanita" />
                                        <div id="validationMengundangWanita" class="invalid-feedback"></div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-floating">
                                            <label for="dnkbw"></label>
                                            <textarea class="form-control" id="nama_keluarga_wanita" placeholder="Daftar Nama Keluarga Besar Mempelai Wanita"
                                                id="floatingTextarea" style="height: 200px; width: 100%"></textarea>
                                            <label for="floatingTextarea">Daftar Nama Keluarga Besar Mempelai
                                                Wanita</label>
                                        </div>
                                        <div id="validationNamaKeluargaWanita" class="invalid-feedback"></div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <!-- Masukkan Lagu Pernikahan -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTen" aria-expanded="false"
                                    aria-controls="flush-collapseTen">
                                    <p>
                                        <i class="bi bi-envelope pr-2"></i>
                                        Masukkan Lagu Pernikahan
                                    </p>
                                </button>
                            </h2>

                            <div id="flush-collapseTen" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlush">
                                <div class="accordion-body">
                                    <div class="mb-3">
                                        <label for="kpm" class="form-label">Pilih Lagu :</label>
                                    </div>
                                    @php
                                        // dd($musikTemplate);
                                    @endphp
                                    <div class="mb-3">
                                        <div class="form-floating">
                                            <label for="dnkbw"></label>
                                            @forelse ($musikTemplate as $musik)
                                                <ul class="list-group">
                                                    <li class="list-group-item">{{ $musik->judul_musik }}</li>
                                                    <li class="list-group-item">
                                                        <audio controls>
                                                            <source
                                                                src="{{ asset("file/audio_template/$musik->musik") }}"
                                                                type="audio/mpeg">
                                                        </audio>
                                                        <input type="radio" class="btn btn-danger" id="musik"
                                                            value="{{ $musik->musik }}">
                                                        {{-- <input type="text" class="btn btn-danger" id="musik"
                                                            value="{{ $musik->musik }}"> --}}
                                                </ul>
                                                <li class="list-group-item">
                                                @empty
                                                    <p>Musik Tidak Tersedia</p>
                                            @endforelse
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="lagu" class="form-label">Masukkan Lagu
                                                    Pernikahan</label>
                                                <input type="file" id="musik1" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Alamat URL Website -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseEleven" aria-expanded="false"
                                    aria-controls="flush-collapseEleven">
                                    <p>
                                        <i class="bi bi-envelope pr-2"></i>
                                        Alamat URL Website
                                    </p>
                                </button>
                            </h2>

                            <div id="flush-collapseEleven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlush">
                                <div class="accordion-body">
                                    <div class="mb-3">
                                        <label for="kpm" class="form-label">Nama Link :</label>
                                        <input type="text" id="nama_link" class="form-control"
                                            placeholder="ex : Nama LINK" />

                                        <input type="hidden" id="IdpreviewTemplate" value="{{ $IdpreviewTemplate }}"
                                            class="form-control" placeholder="ex : Nama LINK" />
                                        <div id="validationNamaLink" class="invalid-feedback"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <!-- Button trigger modal -->
                                                <button type="submit" class="pesan-undangan btn float-end">
                                                    Pesan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </section>

    </form>
    <script>
        // menampilkan gambar mempelai
        function gambarMempelai() {
            document.getElementById("img_mempelai").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("foto_mempelai").files[0]);
            oFReader.onload = function(oFREvent) {
                document.getElementById("img_mempelai").src = oFREvent.target.result;
            };
        };

        function gambarMempelaiPria() {
            document.getElementById("imgMempelaiPria").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("gambar_mempelai_pria").files[0]);
            oFReader.onload = function(oFREvent) {
                document.getElementById("imgMempelaiPria").src = oFREvent.target.result;
            };
        };

        function gambarMempelaiWanita() {
            document.getElementById("imgMempelaiWanita").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("gambar_mempelai_wanita").files[0]);
            oFReader.onload = function(oFREvent) {
                document.getElementById("imgMempelaiWanita").src = oFREvent.target.result;
            };
        };
    </script>

    <script>
        let formBiodataPelanggan = document.getElementById('form-biodata-pelanggan');
        formBiodataPelanggan.addEventListener('submit', function(e) {
            e.preventDefault()
            let title = document.getElementById('title');
            let nomor_telepon = document.getElementById('nomor_telepon');
            let nama_panggilan_pria = document.getElementById('nama_panggilan_pria');
            let nama_panggilan_wanita = document.getElementById('nama_panggilan_wanita');
            let foto_mempelai = document.getElementById('foto_mempelai');
            let kata_pembuka = document.getElementById('kata_pembuka');
            let kutipan_ayat = document.getElementById('kutipan_ayat');
            let nama_lengkap_pria = document.getElementById('nama_lengkap_pria');
            let putra_dari = document.getElementById('putra_dari');
            let nama_bapak_pria = document.getElementById('nama_bapak_pria');
            let nama_ibu_pria = document.getElementById('nama_ibu_pria');
            let gambar_mempelai_pria = document.getElementById('gambar_mempelai_pria');
            let nama_lengkap_wanita = document.getElementById('nama_lengkap_wanita');
            let putri_dari = document.getElementById('putri_dari');
            let nama_bapak_wanita = document.getElementById('nama_bapak_wanita');
            let nama_ibu_wanita = document.getElementById('nama_ibu_wanita');
            let gambar_mempelai_wanita = document.getElementById('gambar_mempelai_wanita');
            let galeri_foto1 = document.getElementById('galeri_foto1');
            let galeri_foto2 = document.getElementById('galeri_foto2');
            let galeri_foto3 = document.getElementById('galeri_foto3');
            let galeri_foto4 = document.getElementById('galeri_foto4');
            let galeri_foto5 = document.getElementById('galeri_foto5');
            let galeri_foto6 = document.getElementById('galeri_foto6');
            let galeri_foto7 = document.getElementById('galeri_foto7');
            let galeri_foto8 = document.getElementById('galeri_foto8');
            let galeri_foto9 = document.getElementById('galeri_foto9');
            let galeri_foto10 = document.getElementById('galeri_foto10');
            let tanggal_akad = document.getElementById('tanggal_akad');
            let jam_mulai_akad = document.getElementById('jam_mulai_akad');
            let waktu_wilayah_akad = document.getElementById('waktu_wilayah_akad');
            let lokasi_akad = document.getElementById('lokasi_akad');
            let tanggal_resepsi = document.getElementById('tanggal_resepsi');
            let jam_mulai_resepsi = document.getElementById('jam_mulai_resepsi');
            let waktu_wilayah_resepsi = document.getElementById('waktu_wilayah_resepsi');
            let lokasi_resepsi = document.getElementById('lokasi_resepsi');
            let tanggal_resepsi_2 = document.getElementById('tanggal_resepsi_2');
            let jam_mulai_resepsi_2 = document.getElementById('jam_mulai_resepsi_2');
            let waktu_wilayah_resepsi2 = document.getElementById('waktu_wilayah_resepsi2');
            let lokasi_resepsi_2 = document.getElementById('lokasi_resepsi_2');
            let mengundang_pria = document.getElementById('mengundang_pria');
            let nama_keluarga_pria = document.getElementById('nama_keluarga_pria');
            let mengundang_wanita = document.getElementById('mengundang_wanita');
            let nama_keluarga_wanita = document.getElementById('nama_keluarga_wanita');
            let musik = document.getElementById('musik');
            let musik1 = document.getElementById('musik1');
            let nama_link = document.getElementById('nama_link');
            let IdpreviewTemplate = document.getElementById('IdpreviewTemplate');
            const formData = new FormData()
            formData.append("title", title.value)
            formData.append("nomor_telepon", nomor_telepon.value)
            formData.append("nama_panggilan_pria", nama_panggilan_pria.value)
            formData.append("nama_panggilan_wanita", nama_panggilan_wanita.value)
            formData.append("foto_mempelai", foto_mempelai.files[0])
            formData.append("kata_pembuka", kata_pembuka.value)
            formData.append("kutipan_ayat", kutipan_ayat.value)
            formData.append("nama_lengkap_pria", nama_lengkap_pria.value)
            formData.append("putra_dari", putra_dari.value)
            formData.append("nama_bapak_pria", nama_bapak_pria.value)
            formData.append("nama_ibu_pria", nama_ibu_pria.value)
            formData.append("gambar_mempelai_pria", gambar_mempelai_pria.files[0])
            formData.append("nama_lengkap_wanita", nama_lengkap_wanita.value)
            formData.append("putri_dari", putri_dari.value)
            formData.append("nama_bapak_wanita", nama_bapak_wanita.value)
            formData.append("nama_ibu_wanita", nama_ibu_wanita.value)
            formData.append("gambar_mempelai_wanita", gambar_mempelai_wanita.files[0])
            formData.append("galeri_foto1", galeri_foto1.files[0])
            formData.append("galeri_foto2", galeri_foto2.files[0])
            formData.append("galeri_foto3", galeri_foto3.files[0])
            formData.append("galeri_foto4", galeri_foto4.files[0])
            formData.append("galeri_foto5", galeri_foto5.files[0])
            formData.append("galeri_foto6", galeri_foto6.files[0])
            formData.append("galeri_foto7", galeri_foto7.files[0])
            formData.append("galeri_foto8", galeri_foto8.files[0])
            formData.append("galeri_foto9", galeri_foto9.files[0])
            formData.append("galeri_foto10", galeri_foto10.files[0])
            formData.append("tanggal_akad", tanggal_akad.value)
            formData.append("jam_mulai_akad", jam_mulai_akad.value)
            formData.append("waktu_wilayah_akad", waktu_wilayah_akad.value)
            formData.append("lokasi_akad", lokasi_akad.value)
            formData.append("tanggal_resepsi", tanggal_resepsi.value)
            formData.append("jam_mulai_resepsi", jam_mulai_resepsi.value)
            formData.append("waktu_wilayah_resepsi", waktu_wilayah_resepsi.value)
            formData.append("lokasi_resepsi", lokasi_resepsi.value)
            formData.append("tanggal_resepsi_2", tanggal_resepsi_2.value)
            formData.append("jam_mulai_resepsi_2", jam_mulai_resepsi_2.value)
            formData.append("waktu_wilayah_resepsi_2", waktu_wilayah_resepsi_2.value)
            formData.append("lokasi_resepsi_2", lokasi_resepsi_2.value)
            formData.append("mengundang_pria", mengundang_pria.value)
            formData.append("nama_keluarga_pria", nama_keluarga_pria.value)
            formData.append("mengundang_wanita", mengundang_wanita.value)
            formData.append("nama_keluarga_wanita", nama_keluarga_wanita.value)
            formData.append("musik", musik.value)
            formData.append("musik1", musik1.files[0])
            formData.append("nama_link", nama_link.value)
            formData.append("IdpreviewTemplate", IdpreviewTemplate.value)
            axios.post("{{ route('data_undangan_store_premium', $kategori) }}", formData)
                .then(function(response) {
                    console.log(response);
                    if (response.status == 200) {
                        const data = response.data
                        const dataError = response.data.errors
                        if (dataError) {
                            if (dataError.title) {
                                let validationTitle = document.getElementById('validationTitle')
                                title.classList.add("is-invalid")
                                validationTitle.innerText = dataError.title[0]
                                validationTitle.style.display = "block"
                            }
                            if (dataError.nomor_telepon) {
                                let validationNomorTelepon = document.getElementById('validationNomorTelepon')
                                nomor_telepon.classList.add("is-invalid")
                                validationNomorTelepon.innerText = dataError.nomor_telepon[0]
                                validationNomorTelepon.style.display = "block"
                            }
                            if (dataError.foto_mempelai) {
                                let validationImgMempelai = document.getElementById('validationImgMempelai')
                                foto_mempelai.classList.add("is-invalid")
                                validationImgMempelai.innerText = dataError.foto_mempelai[0]
                                validationImgMempelai.style.display = "block"
                            }
                            if (dataError.nama_panggilan_pria) {
                                let validationPanggilanPria = document.getElementById('validationPanggilanPria')
                                nama_panggilan_pria.classList.add("is-invalid")
                                validationPanggilanPria.innerText = dataError.nama_panggilan_pria[0]
                                validationPanggilanPria.style.display = "block"
                            }
                            if (dataError.nama_panggilan_wanita) {
                                let validationPanggilanWanita = document.getElementById(
                                    'validationPanggilanWanita')
                                nama_panggilan_wanita.classList.add("is-invalid")
                                validationPanggilanWanita.innerText = dataError.nama_panggilan_wanita[0]
                                validationPanggilanWanita.style.display = "block"
                            }
                            if (dataError.gambar_mempelai) {
                                let validationImgMempelai = document.getElementById(
                                    'validationImgMempelai')
                                gambar_mempelai.classList.add("is-invalid")
                                validationImgMempelai.innerText = dataError.gambar_mempelai[0]
                                validationImgMempelai.style.display = "block"
                            }
                            if (dataError.kata_pembuka) {
                                let validationKataPembuka = document.getElementById(
                                    'validationKataPembuka')
                                kata_pembuka.classList.add("is-invalid")
                                validationKataPembuka.innerText = dataError.kata_pembuka[0]
                                validationKataPembuka.style.display = "block"
                            }
                            if (dataError.kutipan_ayat) {
                                let validationKutipanAyat = document.getElementById(
                                    'validationKutipanAyat')
                                kutipan_ayat.classList.add("is-invalid")
                                validationKutipanAyat.innerText = dataError.kutipan_ayat[0]
                                validationKutipanAyat.style.display = "block"
                            }
                            if (dataError.nama_lengkap_pria) {
                                let validationNamaLengkapPria = document.getElementById(
                                    'validationNamaLengkapPria')
                                nama_lengkap_pria.classList.add("is-invalid")
                                validationNamaLengkapPria.innerText = dataError.nama_lengkap_pria[0]
                                validationNamaLengkapPria.style.display = "block"
                            }
                            if (dataError.putra_dari) {
                                let validationKeteranganPasanganPria = document.getElementById(
                                    'validationKeteranganPasanganPria')
                                putra_dari.classList.add("is-invalid")
                                validationKeteranganPasanganPria.innerText = dataError.putra_dari[0]
                                validationKeteranganPasanganPria.style.display = "block"
                            }
                            if (dataError.nama_bapak_pria) {
                                let validationNamaAyahPria = document.getElementById(
                                    'validationNamaAyahPria')
                                nama_bapak_pria.classList.add("is-invalid")
                                validationNamaAyahPria.innerText = dataError.nama_bapak_pria[0]
                                validationNamaAyahPria.style.display = "block"
                            }
                            if (dataError.nama_ibu_pria) {
                                let validationNamaIbuPria = document.getElementById(
                                    'validationNamaIbuPria')
                                nama_ibu_pria.classList.add("is-invalid")
                                validationNamaIbuPria.innerText = dataError.nama_ibu_pria[0]
                                validationNamaIbuPria.style.display = "block"
                            }
                            if (dataError.gambar_mempelai_pria) {
                                let validationImgMempelaiPria = document.getElementById(
                                    'validationImgMempelaiPria')
                                gambar_mempelai_pria.classList.add("is-invalid")
                                validationImgMempelaiPria.innerText = dataError.gambar_mempelai_pria[0]
                                validationImgMempelaiPria.style.display = "block"
                            }
                            if (dataError.nama_lengkap_wanita) {
                                let validationNamaLengkapWanita = document.getElementById(
                                    'validationNamaLengkapWanita')
                                nama_lengkap_wanita.classList.add("is-invalid")
                                validationNamaLengkapWanita.innerText = dataError.nama_lengkap_wanita[0]
                                validationNamaLengkapWanita.style.display = "block"
                            }
                            if (dataError.putri_dari) {
                                let validationKeteranganPasanganWanita = document.getElementById(
                                    'validationKeteranganPasanganWanita')
                                putri_dari.classList.add("is-invalid")
                                validationKeteranganPasanganWanita.innerText = dataError.putri_dari[0]
                                validationKeteranganPasanganWanita.style.display = "block"
                            }
                            if (dataError.nama_bapak_wanita) {
                                let validationNamaAyahWanita = document.getElementById(
                                    'validationNamaAyahWanita')
                                nama_bapak_wanita.classList.add("is-invalid")
                                validationNamaAyahWanita.innerText = dataError.nama_bapak_wanita[0]
                                validationNamaAyahWanita.style.display = "block"
                            }
                            if (dataError.nama_ibu_wanita) {
                                let validationNamaIbuWanita = document.getElementById(
                                    'validationNamaIbuWanita')
                                nama_ibu_wanita.classList.add("is-invalid")
                                validationNamaIbuWanita.innerText = dataError.nama_ibu_wanita[0]
                                validationNamaIbuWanita.style.display = "block"
                            }
                            if (dataError.gambar_mempelai_wanita) {
                                let validationGambarMempelaiWanita = document.getElementById(
                                    'validationGambarMempelaiWanita')
                                gambar_mempelai_wanita.classList.add("is-invalid")
                                validationGambarMempelaiWanita.innerText = dataError.gambar_mempelai_wanita[0]
                                validationGambarMempelaiWanita.style.display = "block"
                            }
                            if (dataError.galeri_foto1) {
                                let validationgaleri_foto1 = document.getElementById(
                                    'validationgaleri_foto1')
                                galeri_foto1.classList.add("is-invalid")
                                validationgaleri_foto1.innerText = dataError.galeri_foto1[0]
                                validationgaleri_foto1.style.display = "block"
                            }
                            if (dataError.galeri_foto2) {
                                let validationgaleri_foto2 = document.getElementById(
                                    'validationgaleri_foto2')
                                galeri_foto2.classList.add("is-invalid")
                                validationgaleri_foto2.innerText = dataError.galeri_foto2[0]
                                validationgaleri_foto2.style.display = "block"
                            }
                            if (dataError.galeri_foto3) {
                                let validationgaleri_foto3 = document.getElementById(
                                    'validationgaleri_foto3')
                                galeri_foto3.classList.add("is-invalid")
                                validationgaleri_foto3.innerText = dataError.galeri_foto3[0]
                                validationgaleri_foto3.style.display = "block"
                            }
                            if (dataError.galeri_foto4) {
                                let validationgaleri_foto4 = document.getElementById(
                                    'validationgaleri_foto4')
                                galeri_foto4.classList.add("is-invalid")
                                validationgaleri_foto4.innerText = dataError.galeri_foto4[0]
                                validationgaleri_foto4.style.display = "block"
                            }
                            if (dataError.galeri_foto5) {
                                let validationgaleri_foto5 = document.getElementById(
                                    'validationgaleri_foto5')
                                galeri_foto5.classList.add("is-invalid")
                                validationgaleri_foto5.innerText = dataError.galeri_foto5[0]
                                validationgaleri_foto5.style.display = "block"
                            }
                            if (dataError.galeri_foto6) {
                                let validationgaleri_foto6 = document.getElementById(
                                    'validationgaleri_foto6')
                                galeri_foto6.classList.add("is-invalid")
                                validationgaleri_foto6.innerText = dataError.galeri_foto6[0]
                                validationgaleri_foto6.style.display = "block"
                            }
                            if (dataError.galeri_foto7) {
                                let validationgaleri_foto7 = document.getElementById(
                                    'validationgaleri_foto7')
                                galeri_foto7.classList.add("is-invalid")
                                validationgaleri_foto7.innerText = dataError.galeri_foto7[0]
                                validationgaleri_foto7.style.display = "block"
                            }
                            if (dataError.galeri_foto8) {
                                let validationgaleri_foto8 = document.getElementById(
                                    'validationgaleri_foto8')
                                galeri_foto8.classList.add("is-invalid")
                                validationgaleri_foto8.innerText = dataError.galeri_foto8[0]
                                validationgaleri_foto8.style.display = "block"
                            }
                            if (dataError.tanggal_akad) {
                                let validationTanggalAkad = document.getElementById(
                                    'validationTanggalAkad')
                                tanggal_akad.classList.add("is-invalid")
                                validationTanggalAkad.innerText = dataError.tanggal_akad[0]
                                validationTanggalAkad.style.display = "block"
                            }
                            if (dataError.jam_mulai_akad) {
                                let validationJamMulaiAkad = document.getElementById(
                                    'validationJamMulaiAkad')
                                jam_mulai_akad.classList.add("is-invalid")
                                validationJamMulaiAkad.innerText = dataError.jam_mulai_akad[0]
                                validationJamMulaiAkad.style.display = "block"
                            }
                            if (dataError.waktu_wilayah_akad) {
                                let validationWaktuWilayahAkad = document.getElementById(
                                    'validationWaktuWilayahAkad')
                                waktu_wilayah_akad.classList.add("is-invalid")
                                validationWaktuWilayahAkad.innerText = dataError.waktu_wilayah_akad[0]
                                validationWaktuWilayahAkad.style.display = "block"
                            }
                            if (dataError.waktu_wilayah_akad) {
                                let validationWaktuWilayahAkad = document.getElementById(
                                    'validationWaktuWilayahAkad')
                                waktu_wilayah_akad.classList.add("is-invalid")
                                validationWaktuWilayahAkad.innerText = dataError.waktu_wilayah_akad[0]
                                validationWaktuWilayahAkad.style.display = "block"
                            }
                            if (dataError.lokasi_akad) {
                                let validationLokasiAkad = document.getElementById(
                                    'validationLokasiAkad')
                                lokasi_akad.classList.add("is-invalid")
                                validationLokasiAkad.innerText = dataError.lokasi_akad[0]
                                validationLokasiAkad.style.display = "block"
                            }
                            if (dataError.tanggal_resepsi) {
                                let validationTanggalResepsi = document.getElementById(
                                    'validationTanggalResepsi')
                                tanggal_resepsi.classList.add("is-invalid")
                                validationTanggalResepsi.innerText = dataError.tanggal_resepsi[0]
                                validationTanggalResepsi.style.display = "block"
                            }
                            if (dataError.jam_mulai_resepsi) {
                                let validationJamMulaiResepsi = document.getElementById(
                                    'validationJamMulaiResepsi')
                                jam_mulai_resepsi.classList.add("is-invalid")
                                validationJamMulaiResepsi.innerText = dataError.jam_mulai_resepsi[0]
                                validationJamMulaiResepsi.style.display = "block"
                            }
                            if (dataError.waktu_wilayah_resepsi) {
                                let validationWaktuWilayahResepsi = document.getElementById(
                                    'validationWaktuWilayahResepsi')
                                waktu_wilayah_resepsi.classList.add("is-invalid")
                                validationWaktuWilayahResepsi.innerText = dataError.waktu_wilayah_resepsi[0]
                                validationWaktuWilayahResepsi.style.display = "block"
                            }
                            if (dataError.lokasi_resepsi) {
                                let validationLokasiResepsi = document.getElementById(
                                    'validationLokasiResepsi')
                                lokasi_resepsi.classList.add("is-invalid")
                                validationLokasiResepsi.innerText = dataError.lokasi_resepsi[0]
                                validationLokasiResepsi.style.display = "block"
                            }
                            if (dataError.mengundang_pria) {
                                let validationMengundangPria = document.getElementById(
                                    'validationMengundangPria')
                                mengundang_pria.classList.add("is-invalid")
                                validationMengundangPria.innerText = dataError.mengundang_pria[0]
                                validationMengundangPria.style.display = "block"
                            }
                            if (dataError.nama_keluarga_pria) {
                                let validationNamaKeluargaPria = document.getElementById(
                                    'validationNamaKeluargaPria')
                                nama_keluarga_pria.classList.add("is-invalid")
                                validationNamaKeluargaPria.innerText = dataError.nama_keluarga_pria[0]
                                validationNamaKeluargaPria.style.display = "block"
                            }
                            if (dataError.mengundang_wanita) {
                                let validationMengundangWanita = document.getElementById(
                                    'validationMengundangWanita')
                                mengundang_wanita.classList.add("is-invalid")
                                validationMengundangWanita.innerText = dataError.mengundang_wanita[0]
                                validationMengundangWanita.style.display = "block"
                            }
                            if (dataError.nama_keluarga_wanita) {
                                let validationNamaKeluargaWanita = document.getElementById(
                                    'validationNamaKeluargaWanita')
                                nama_keluarga_wanita.classList.add("is-invalid")
                                validationNamaKeluargaWanita.innerText = dataError.nama_keluarga_wanita[0]
                                validationNamaKeluargaWanita.style.display = "block"
                            }
                            if (dataError.nama_link) {
                                let validationNamaLink = document.getElementById(
                                    'validationNamaLink')
                                nama_link.classList.add("is-invalid")
                                validationNamaLink.innerText = dataError.nama_link[0]
                                validationNamaLink.style.display = "block"
                            }
                            swal({
                                title: "Oops...",
                                text: "Data nya kurang nih, silahkan cek dulu yaaa",
                                icon: "warning",
                                dangerMode: true,
                            })
                        } else {
                            swal({
                                position: 'center',
                                icon: 'success',
                                title: data.success,
                                showConfirmButton: false,
                                timer: 1000
                            }).then(function() {
                                window.location.href =
                                    "{{ route('pembayaran_template', $id_kategori_template) }}"
                            })
                        }
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });
        })
    </script>

@endsection
