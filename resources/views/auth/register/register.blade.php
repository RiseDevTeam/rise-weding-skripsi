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
    <!-- Form Registrasi -->
    <section class="form">
        <div class="container">
            <img src="{{ asset('user_page/template/public/img/daun2.png') }}" class="bg"
                alt="Background Form Registrasi" />
            <h3>Registrasi</h3>
            <p>Please Register Using Your Email</p>
            <form method="POST" id="form-register" class="mx-auto">
                <div class="row">
                    <!-- 1 -->
                    <div class="col-lg-6 col-md-6 px-5">
                        <div class="mb-4">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" id="nama" class="form-control" placeholder="Nama Lengkap"
                                autofocus />
                            <div id="validationNama" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-4">
                            <label for="username" class="form-label">Email</label>
                            <input type="text" id="email" class="form-control" placeholder="email" />
                            <div id="validationEmail" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-4">
                            <label for="nowa" class="form-label">Nomor WhatsApp</label>
                            <input type="text" id="nomor_telepon" class="form-control"
                                placeholder="Nomor WhatsApp" />
                            <div id="validationNomorTelepon" class="invalid-feedback"></div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label for="foto" class="form-label">Upload Foto Diri</label>
                                <input type="file" id="foto_diri" onchange="fotoDiri()" class="form-control"
                                    placeholder="Foto Diri" />
                                <div id="validationFotoDiri" class="invalid-feedback"></div>
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
                            <input type="text" id="alamat" class="form-control" placeholder="Alamat" />
                            <div id="validationAlamat" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control" placeholder="Password" />
                            <div id="validationPassword" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-4">
                            <label for="noktp" class="form-label">Nomor KTP</label>
                            <input type="text" id="nomor_ktp" class="form-control" placeholder="Nomor KTP" />
                            <div id="validationNomorKtp" class="invalid-feedback"></div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label for="fotoktp" class="form-label">Upload Foto Diri dengan KTP</label>
                                <input type="file" onchange="fotoKTP()" id="foto_ktp" class="form-control"
                                    placeholder="Foto Diri Dengan KTP" />
                                <div id="validationFotoKtp" class="invalid-feedback"></div>
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
</body>

<script>
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

<script>
    let formRegister = document.getElementById('form-register');
    formRegister.addEventListener('submit', function(e) {
        e.preventDefault()

        let nama = document.getElementById('nama');
        let email = document.getElementById('email');
        let nomor_telepon = document.getElementById('nomor_telepon');
        let foto_diri = document.getElementById('foto_diri');
        let alamat = document.getElementById('alamat');
        let password = document.getElementById('password');
        let nomor_ktp = document.getElementById('nomor_ktp');
        let foto_ktp = document.getElementById('foto_ktp');

        const formData = new FormData()
        formData.append("nama", nama.value)
        formData.append("email", email.value)
        formData.append("nomor_telepon", nomor_telepon.value)
        formData.append("foto_diri", foto_diri.files[0])
        formData.append("alamat", alamat.value)
        formData.append("password", password.value)
        formData.append("nomor_ktp", nomor_ktp.value)
        formData.append("foto_ktp", foto_ktp.files[0])

        axios.post("{{ route('register.proses') }}", formData)
            .then(function(response) {
                if (response.status == 200) {
                    const data = response.data
                    const dataError = response.data.errors
                    if (dataError) {
                        if (dataError.nama) {
                            let validationNama = document.getElementById('validationNama')
                            nama.classList.add("is-invalid")
                            validationNama.innerText = dataError.nama[0]
                            validationNama.style.display = "block"
                        }

                        if (dataError.email) {
                            let validationEmail = document.getElementById('validationEmail')
                            email.classList.add("is-invalid")
                            validationEmail.innerText = dataError.email[0]
                            validationEmail.style.display = "block"
                        }

                        if (dataError.nomor_telepon) {
                            let validationNomorTelepon = document.getElementById('validationNomorTelepon')
                            nomor_telepon.classList.add("is-invalid")
                            validationNomorTelepon.innerText = dataError.nomor_telepon[0]
                            validationNomorTelepon.style.display = "block"
                        }

                        if (dataError.foto_diri) {
                            let validationFotoDiri = document.getElementById('validationFotoDiri')
                            foto_diri.classList.add("is-invalid")
                            validationFotoDiri.innerText = dataError.foto_diri[0]
                            validationFotoDiri.style.display = "block"
                        }

                        if (dataError.alamat) {
                            let validationAlamat = document.getElementById('validationAlamat')
                            alamat.classList.add("is-invalid")
                            validationAlamat.innerText = dataError.alamat[0]
                            validationAlamat.style.display = "block"
                        }

                        if (dataError.password) {
                            let validationPassword = document.getElementById('validationPassword')
                            password.classList.add("is-invalid")
                            validationPassword.innerText = dataError.password[0]
                            validationPassword.style.display = "block"
                        }

                        if (dataError.nomor_ktp) {
                            let validationNomorKtp = document.getElementById('validationNomorKtp')
                            nomor_ktp.classList.add("is-invalid")
                            validationNomorKtp.innerText = dataError.nomor_ktp[0]
                            validationNomorKtp.style.display = "block"
                        }

                        if (dataError.foto_ktp) {
                            let validationFotoKtp = document.getElementById('validationFotoKtp')
                            foto_ktp.classList.add("is-invalid")
                            validationFotoKtp.innerText = dataError.foto_ktp[0]
                            validationFotoKtp.style.display = "block"
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
                            })
                            .then(function() {
                                window.location.href = "{{ route('login') }}"
                            })
                    }
                }
            })
            .catch(function(error) {
                console.log(error);
            });
    })
</script>

</html>
