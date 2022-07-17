@extends('layouts.admin')
@section('title', 'Pembayaran')


@section('content')

    <div class="container-fluid py-4">

        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="active btn btn-outline-primary mx-3" id="pills-semua-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-semua" type="button" role="tab" aria-controls="pills-semua"
                    aria-selected="true">Semua</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class=" btn btn-outline-primary mx-3" id="pills-template-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-template" type="button" role="tab" aria-controls="pills-template"
                    aria-selected="false">Template Invitation</button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">

            {{-- Bagian Semua --}}
            <div class="tab-pane fade show active" id="pills-semua" role="tabpanel" aria-labelledby="pills-semua-tab"
                tabindex="0">
                <section class="pesanan">
                    @forelse ($dataPembayaranInvitation as $pembayaranSemua)
                        <div class="card" id="tSelesai">
                            <div class="row">
                                <div class="col-lg-3 template">
                                    <img src="{{ asset("gambar/gambar_cover_template/$pembayaranSemua->gambar_cover") }}"
                                        class="img-fluid mx-auto" alt="" />
                                </div>
                                <div class="col-lg-9 isi">
                                    <div class="kas">
                                        <span>Kategori : <b>Template {{ $pembayaranSemua->kategori_template }}</b></span>
                                        <span>Template {{ $pembayaranSemua->status }}</span>
                                    </div>
                                    <div class="npalw">
                                        <h3 class="my-4">{{ $pembayaranSemua->nama_pasangan_pria }} &
                                            {{ $pembayaranSemua->nama_pasangan_wanita }}</h3>
                                        <a href="#">https://www.risewedding.com</a>
                                    </div>
                                    <div class="bagikan">
                                        <h4 class="harga">Total : <b>Rp. {{ number_format($pembayaranSemua->total) }}</b>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-warning text-center" role="alert">
                            Data Masih kosong
                        </div>
                    @endforelse
                </section>
            </div>


            {{-- Bagian Template --}}
            <div class="tab-pane fade" id="pills-template" role="tabpanel" aria-labelledby="pills-template-tab"
                tabindex="0">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Nomor</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Kode Transaksi</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Nama Pelanggan</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Email Pelanggan</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Kategori Template</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Tanggal Pembayaran</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Tipe Pembayaran</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Bukti Pembayaran</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Total Pembayaran</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Status Pembayaran</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Action</th>
                                                {{-- <th class="text-secondary opacity-7"></th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @if ($FileTemplate->file_template == '0')
                                            <script>
                                                alert("Belum ada Data Pemesanan!")
                                            </script>
                                        @endif --}}
                                            @forelse ($dataPembayaranInvitation as $PembayaranTemplate)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="text-xs font-weight-bold mb-0">
                                                                    {{ $loop->iteration }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $PembayaranTemplate->kode_transaksi }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $PembayaranTemplate->name }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $PembayaranTemplate->email }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $PembayaranTemplate->kategori_template }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $PembayaranTemplate->tanggal_pembayaran }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $PembayaranTemplate->tipe_pembayaran }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <p class="text-xs font-weight-bold mb-0">
                                                            <a href="#"
                                                                onclick="showBuktiPembayaran('{{ $PembayaranTemplate->bukti_pembayaran }}')">
                                                                <img src='{{ asset("user_page/template/public/bukti_pembayaran/$PembayaranTemplate->bukti_pembayaran") }}'
                                                                    width="100" alt="Bukti Pembayaran">
                                                            </a>
                                                        </p>
                                                    </td>



                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    Rp.{{ number_format($PembayaranTemplate->total) }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $PembayaranTemplate->status }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center">

                                                        @if ($PembayaranTemplate->status == 'pending')
                                                            <form method="POST" id="tombol-setujui">
                                                                @method('PUT')
                                                                @csrf
                                                                <button type="button"
                                                                    onclick="setujuiPembayaran('{{ $PembayaranTemplate->id_pembayaran }}')"
                                                                    class="btn btn-success">Setujui</button>
                                                            </form>

                                                            <form method="POST" id="tombol-tolak">
                                                                @method('PUT')
                                                                @csrf
                                                                <button type="button"
                                                                    onclick="tolakPembayaran('{{ $PembayaranTemplate->id_pembayaran }}')"
                                                                    class="btn btn-danger">Tolak</button>
                                                            </form>
                                                        @endif

                                                        @if ($PembayaranTemplate->status == 'lunas')
                                                            <div class="alert alert-success" role="alert">
                                                                Pembayaran Sudah Lunas!
                                                            </div>
                                                        @endif

                                                        @if ($PembayaranTemplate->status == 'ditolak')
                                                            <div class="alert alert-warning" role="alert">
                                                                Pembayaran Ditolak!
                                                            </div>
                                                        @endif

                                                    </td>
                                                </tr>



                                            @empty
                                                <tr>
                                                    <td colspan="10" class="text-center">Data Masih Kosong</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <nav class="app-pagination">
                            <ul class="pagination justify-content-center">
                                {{-- {!! $TemplateInvitation->links() !!} --}}
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
            {{-- akhir bagian template --}}


            {{-- Bagian Video Invitation --}}
            <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab"
                tabindex="0">
                <div class="alert alert-warning text-center" role="alert">
                    <b>Masih dalam tahap </b> <b style="color: white">Pengembangan...</b> !
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" class="img-fluid" alt="Bukti Pembayaran" id="showBuktiPembayaran">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



@endsection

@push('script')
    <script>
        function setujuiPembayaran(id) {
            Swal.fire({
                title: 'Yakin Anda Menyetujui Pembayaran ini?',
                text: "Menyetujui, berarti anda menerima pembayaran ini...",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Setujui!',
                cancelButtonText: 'Nggak jadi deh'
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.put(`pembayaran/setujui/${id}`)
                        .then(function(response) {
                            if (response.status == 200) {
                                Swal.fire(
                                    'Berhasil!',
                                    response.data.success,
                                    'success'
                                ).then(function() {
                                    window.location.href = "{{ route('data-pembayaran') }}"
                                })
                            }
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                }
            })
        }

        function tolakPembayaran(id) {
            Swal.fire({
                title: 'Yakin Anda Ingin Menolak Pembayaran ini?',
                text: "Pembayaran akan di tolak",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Tolak!',
                cancelButtonText: 'Nggak jadi deh'
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.put(`pembayaran/tolak/${id}`)
                        .then(function(response) {
                            if (response.status == 200) {
                                Swal.fire(
                                    'Berhasil!',
                                    response.data.success,
                                    'success'
                                ).then(function() {
                                    window.location.href = "{{ route('data-pembayaran') }}"
                                })
                            }
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                }
            })
        }

        function showBuktiPembayaran(namaFile) {
            document.getElementById("showBuktiPembayaran").src =
                `{{ asset('user_page/template/public/bukti_pembayaran/${namaFile}') }}`;

            $('#exampleModal').modal('show');
        }
    </script>
