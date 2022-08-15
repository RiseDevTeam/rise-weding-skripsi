<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('includes.frontend.css')
    <link rel="stylesheet" href="{{ asset('user_page/template/public/css/form-mitra.css') }}" />

    @include('includes.frontend.script')
    <title>Form Registrasi Mitra</title>
</head>

<body>
    @if (isset($menampilkanUser))
        @include('sweetalert::alert')
    @endif
    <!-- Syarat Menjadi Mitra-->
    <section class="syarat">
        <div class="container">
            <div class="tulisan">
                <h3>Syarat Menjadi Mitra</h3>
                <p>
                    Yuukk Baca Dulu Syarat Untuk Menjadi Mitra Pada Marketplace Ini !
                </p>
            </div>
            <div class="kartu-syarat">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="nomor">
                                <span style="padding-right: 15px">1</span>
                            </div>
                            <p>
                                Template undangan yang akan mitra jual hendaknya menyesuaikan
                                dengan ketentuan template yang ada pada marketplace
                            </p>
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#sm1">
                                Klik Disini
                                <i class="bi bi-door-open-fill"></i>
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="sm1" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabelsm1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabelsm1">
                                            Syarat Mitra 1
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Vitae dolores, provident veniam deleniti dolor
                                            nemo adipisci! Cum, omnis est! Aperiam.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn">Gotchu</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="nomor"><span>2</span></div>
                            <p>
                                Harga template yang akan dijual telah ditetapkan oleh
                                marketplace
                            </p>
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#sm2"">
                                Klik Disini
                                <i class="bi bi-door-open-fill"></i>
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="sm2" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabelsm2" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabelsm2">
                                            Syarat Mitra 2
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Vitae dolores, provident veniam deleniti dolor
                                            nemo adipisci! Cum, omnis est! Aperiam.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn">Gotchu</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="nomor"><span>3</span></div>
                            <p>
                                Setelah melakukan registrasi silahkan tunggu konfirmasi dari
                                admin marketplace
                            </p>
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#sm3">
                                Klik Disini
                                <i class="bi bi-door-open-fill"></i>
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="sm3" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabelsm3" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabelsm3">
                                            Syarat Mitra 3
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Vitae dolores, provident veniam deleniti dolor
                                            nemo adipisci! Cum, omnis est! Aperiam.
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt facilis
                                            nihil ex expedita quod commodi architecto, autem ipsam cum earum vel
                                            dignissimos? Doloribus maxime consequatur provident error voluptatem
                                            consequuntur quisquam aliquam at asperiores? Eos excepturi perspiciatis aut,
                                            possimus dicta earum.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn">Gotchu</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Syarat Menjadi Mitra -->

    <!-- Form Registrasi -->
    <section class="form">
        <div class="container">
            <img src="{{ asset('user_page/template/public/img/daun2.png') }}" class="bg"
                alt="Background Form Registrasi" />
            <h3>Registrasi</h3>
            <p>Please Register Using Your Email</p>
            <form method="POST" id="form-register" class="mx-auto" action="{{ route('register.proses') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-- 1 -->
                    <div class="col-lg-6 col-md-6 px-5">
                        <div class="mb-4">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" class="form-control"
                                placeholder="Nama Lengkap" autofocus />
                            <div class="text-danger">
                                @error('nama')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="username" class="form-label">Email</label>
                            <input type="text" id="email" name="email" class="form-control"
                                placeholder="email" />
                            <div class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="nowa" class="form-label">Nomor WhatsApp</label>
                            <input type="text" id="nomor_telepon" name="nomor_telepon" class="form-control"
                                placeholder="Nomor WhatsApp" />
                            <div class="text-danger">
                                @error('nomor_telepon')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label for="foto" class="form-label">Upload Foto Diri</label>
                                <input type="file" id="foto_diri" name="foto_diri" onchange="fotoDiri()"
                                    class="form-control" placeholder="Foto Diri" />
                                <div class="text-danger">
                                    @error('foto_diri')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <img src="{{ asset('user_page/template/public/img/img.png') }}" id="img_foto_diri"
                                    class="image" alt="image" />
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="col-lg-6 col-md-6 px-5">
                        <div class="mb-4">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" id="alamat" name="alamat" class="form-control"
                                placeholder="Alamat" />
                            <div class="text-danger">
                                @error('alamat')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control"
                                placeholder="Password" />
                            <div class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="noktp" class="form-label">Nomor KTP</label>
                            <input type="text" id="nomor_ktp" name="nomor_ktp" class="form-control"
                                placeholder="Nomor KTP" />
                            <div class="text-danger">
                                @error('nomor_ktp')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label for="fotoktp" class="form-label">Upload Foto Diri dengan KTP</label>
                                <input type="file" onchange="fotoKTP()" id="foto_ktp" name="foto_ktp"
                                    class="form-control" placeholder="Foto Diri Dengan KTP" />
                                <div class="text-danger">
                                    @error('foto_ktp')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <img src="{{ asset('user_page/template/public/img/img.png') }}" id="img_foto_ktp"
                                    class="image" alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-register">
                    <button type="submit" class="btn">Register</button>
                </div>
            </form>
        </div>
    </section>
    <!-- End Form Registrasi -->

</body>
<script>
    var menampilkanUser = {{ 'menampilkanUser' }}
    // menampilkan foto diri
    function fotoDiri() {
        document.getElementById("img_foto_diri").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("foto_diri").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("img_foto_diri").src = oFREvent.target.result;
        };
    };

    function fotoKTP() {
        document.getElementById("img_foto_ktp").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("foto_ktp").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("img_foto_ktp").src = oFREvent.target.result;
        };
    };
</script>

</html>
