<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- pemanggilan CSS -->
    @include('includes.frontend.css')
    <link rel="stylesheet" href="{{ asset('user_page/template/public/css/custom-template.css') }}" />
    <!-- pemanggilan JS -->
    @include('includes.frontend.script')
    <title>Wedding | Custom Template</title>
</head>

<body>
    <!-- Chat -->
    <a href="https://api.whatsapp.com/send?phone=6289514640148&text=Hallo%20kak%20Saya%20ingin%20memesan%20Template"
        target="__blank" id="chatButton">
        <i class="bi bi-chat-right-text"></i>
        &nbsp; Chat dengan Lara
    </a>
    <!-- End Chat -->


    <form id="formPemesanan" method="POST" enctype="multipart/form-data"
        action="{{ route('pemesanan_template', $id_kategori) }}">
        @csrf
        <section>
            <div class="container">
                <!-- Header -->
                <div class="kepala">
                    <div class="logo">
                        <img src="{{ asset('user_page/template/public/img/logo.png') }}" alt="Logo">
                        <span>Custom Template</span>
                    </div>

                    <button type="submit" class="btn"
                        style="background: var(--warna1); color: var(--warna2)">Selesai</button>
                </div>
            </div>
        </section>

        <div class="data">

        </div>

        <!-- End Isi -->
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
        integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var id_kategori = "{{ $id_kategori }}";

        var id_user = "{{ Auth::user()->id }}";

        getAllData()

        function getAllData() {
            axios({
                    method: 'GET',
                    url: `${window.location.origin}/api/risedev-wedding-users/template-invitation/detail-template/${id_kategori}`
                })
                .then((response) => {
                    let data = response.data

                    data.forEach(element => {
                        document.querySelector('.data').innerHTML += `
                    <ul>
                        <li>
                            <a href="#"><img src="{{ asset('gambar/icon_template/${element.id_sub_kategori.icon}') }}" alt=""></a>
                        </li>
                        <li class="field-button-tambah-${element.id_file_template}">

                        </li>
                    </ul>
                    
                    <section class="isi_${element.id_file_template}">
                        <div class="container" id="template_${element.id_file_template}">
                            <input type="hidden" name="id_template[]" class="form-control" id="id_template" width="100" value="${element.id_template}">
                            <input type="hidden" name="file_template[]" class="form-control" id="file_template" width="100" value="${element.file}">
                            <input type="hidden" name="id_user" class="form-control" id="file_template" width="100" value="${id_user}">
                            <button type="button" onclick="hapusTemplate(this)" id="${element.id_file_template}" class="badge badge-sm bg-danger mt-2"><i class="bi bi-trash"></i></button>
                            <img src="{{ asset('gambar/gambar_template/${element.gambar_template}') }}" alt="Gambar Template">
                        </div>
                    </section>
                    `
                    });

                })

        }

        function hapusTemplate(e) {

            let isi = document.querySelector(`#template_${e.id}`)
            isi.remove();

            document.querySelector(`.field-button-tambah-${e.id}`).innerHTML = `
                <button type="button" class="btn btn-primary btn-tambah_${e.id}" onclick="tambahTemplate(this)" id="${e.id}">Tambah</button>
            `
        }

        function tambahTemplate(e) {

            axios({
                    method: 'GET',
                    url: `${window.location.origin}/api/detail-template/ambil_satu/${e.id}/${id_kategori}`
                })
                .then((response) => {
                    let data = response.data

                    document.querySelector(`.isi_${e.id}`).innerHTML = `
                    <div class="container" id="template_${data.id_file_template}">
                        <input type="hidden" name="id_template[]" class="form-control" id="id_template" value="${data.id_template}">
                        <input type="hidden" name="file_template[]" class="form-control" id="file_template" value="${data.file}">
                        <input type="hidden" name="id_user" class="form-control" id="file_template" width="100" value="${id_user}">
                        <button type="button" onclick="hapusTemplate(this)" id="${data.id_file_template}" class="badge badge-sm bg-danger mt-2"><i class="bi bi-trash"></i></button>
                        <img src="{{ asset('gambar/gambar_template/${data.gambar_template}') }}" alt="Gambar Template">
                    </div>
                `
                    document.querySelector(`.btn-tambah_${data.id_file_template}`).remove()

                })

        }
    </script>
</body>

</html>
