<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- pemanggilan CSS -->
    @include('includes.frontend.css')
    <link rel="stylesheet" href="{{ asset('user_page/template/public/css/pembayaran.css') }}" />
    <!-- pemanggilan JS -->
    @include('includes.frontend.script')
    <title>Wedding | Pembayaran</title>
</head>

<body>
    <!-- Chat -->
    <a href="https://api.whatsapp.com/send?phone=6289514640148&text=Hallo%20kak%20Saya%20ingin%20memesan%20Template"
        target="__blank" id="chatButton" tip="Chat dengan Lara">
        <i class="bi bi-chat-right-text"></i>
    </a>
    <!-- End Chat -->

    <!-- Daftar Paket -->
    <section class="paket">
        <img src="{{ asset('user_page/template/public/img/daun3.png') }} " class="daun-atas" alt="Daun Atas">
        <div class="container">
            <h5 class="tpp">Pilih Paket</h5>
            <div class="row align-items-center">
                <!-- Harga -->
                <div class="col-lg-4 col-md-4 harga">
                    <button class="btn card premium">
                        <span>{{ $KategoriTemplate->kategori }}</span>
                        <h2>Rp. {{ number_format($KategoriTemplate->harga) }}</h1>
                    </button>
                </div>
                <!-- Benefit Premium -->
                <div class="col-lg-8 col-md-8 benefitpre">
                    <img src="{{ asset('user_page/template/public/img/segitigapre.png') }}" class="segitigapre me-4"
                        alt="Segitiga">
                    <div class="card">
                        <h5>Benefit Premium :</h5>
                        <div class="row">
                            <div class="col-md-12">
                                @foreach ($RincianKetegoriTemplate as $RincianKetegori)
                                    {{-- <span> --}}
                                    <ul>
                                        <li>
                                            <span></span>
                                            {{-- tambahkan button <p> pada css supaya bisa ke bawah --}}
                                            {{ $RincianKetegori->rincian_kategori_template }}
                                            {{-- {{ $RincianKetegori->rincian_kategori_template }} --}}
                                        </li>
                                    </ul>
                                    {{-- </span> --}}
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <form method="POST" id="form-pembayaran">
        <!-- Pembayaran Paket -->
        <section class="bayar col-12">
            <div class="container">
                <h5 class="tpyd">Paket Yang Dipilih : <span>{{ $KategoriTemplate->kategori }}</span></h5>
                <div class="card">
                    <h5 class="tmt">Manual Transfer</h5>
                    <div class="total">
                        <h6>Total Pembayaran</h6>
                        <h2>Rp. {{ number_format($KategoriTemplate->harga) }},-</h2>
                    </div>
                    <div class="data-pembayaran">
                        <div class="accordion accordion-flush" id="accordionFlush">
                            <!-- Bank BRI -->
                            <div class="accordion-item bank-bri">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="true"
                                        aria-controls="flush-collapseOne">
                                        <p>
                                            <img src="{{ asset('user_page/template/public/img/BRI.png') }}"
                                                class="bri w-50" alt="Bank BRI">
                                        </p>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlush">
                                    <div class="accordion-body">

                                        <span>Nomor Rekening dsfs</span>
                                        <h5>2100-0210-51981-6</h5>
                                        <span>Nama Rekening</span>
                                        <h5>Yoga Tri Wahyudi</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Bank Nagari -->
                            <div class="accordion-item bank-nagari">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        <p>
                                            <img src="{{ asset('user_page/template/public/img/Nagari.png') }}"
                                                class="nagari w-25" alt="Bank Nagari">
                                        </p>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlush">
                                    <div class="accordion-body">
                                        <span>Nomor Rekening</span>
                                        <h5>1840-01-002018-50-3</h5>
                                        <span>Nama Rekening</span>
                                        <h5>Yoga Tri Wahyudi</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn ubp">Upload Bukti
                Pembayaran</button>
            <p>
                <button type="submit" class="btn ubp"> Selesai Pembayaran </button>

                <img src="{{ asset('user_page/template/public/img/daun3.png') }}" class="daun-bawah"
                    alt="Daun Bawah">

                <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">
                                Silahkan Upload Bukti Pembayaran
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-5 mx-auto">
                                <label for="fotoPria" class="form-label">Bukti Pembayaran</label>
                                <input type="hidden" id="total" value="{{ $KategoriTemplate->harga }}">
                                <input class="form-control" type="file" id="bukti_pembayaran"
                                    onchange="buktiPembayaran()" />
                                <img src="{{ asset('user_page/template/public/img/img.png') }}"
                                    class="img-fluid mt-1" alt="background image" id="imgPembayaran" />
                                <div id="validationImg" class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->
        </section>
    </form>
</body>
<script>
    // menampilkan gambar mempelai
    function buktiPembayaran() {
        document.getElementById("imgPembayaran").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("bukti_pembayaran").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("imgPembayaran").src = oFREvent.target.result;
        };
    };
</script>
<script>
    let formPembayaran = document.getElementById('form-pembayaran');
    formPembayaran.addEventListener('submit', function(e) {
        e.preventDefault()
        let total = document.getElementById('total');
        let buktiPembayaran = document.getElementById('bukti_pembayaran');

        const formData = new FormData()
        formData.append("total", total.value)
        formData.append("buktiPembayaran", buktiPembayaran.files[0])

        axios.post("{{ route('pembayaran_template_store') }}", formData)
            .then(function(response) {
                if (response.status == 200) {
                    const data = response.data
                    const dataError = response.data.errors
                    if (dataError) {
                        swal({
                            title: "Ooops...",
                            text: "Silahkan Cek Upload Bukti Pembayarannyaaa....",
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
                            window.location.href = "{{ route('pemesanan_saya') }}"
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
