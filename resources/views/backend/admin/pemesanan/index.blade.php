@extends('layouts.admin')
@section('title', 'Pemesanan')


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
                    @forelse ($dataPemesananInvitation as $pesananSemua)
                        <div class="card" id="tSelesai">
                            <div class="row">
                                <div class="col-lg-3 template">
                                    <img src="{{ asset("gambar/gambar_cover_template/$pesananSemua->gambar_cover") }}"
                                        class="img-fluid mx-auto" alt="" />
                                </div>
                                <div class="col-lg-9 isi">
                                    <div class="kas">
                                        <span>Kategori : <b>Template {{ $pesananSemua->kategori_template }}</b></span>
                                        <span>{{ $pesananSemua->status }}</span>
                                    </div>
                                    <div class="npalw">
                                        <h3 class="my-4">{{ $pesananSemua->nama_pasangan_pria }} &
                                            {{ $pesananSemua->nama_pasangan_wanita }}</h3>
                                        <a href="#">https://www.risewedding.com</a>
                                    </div>
                                    <div class="bagikan">
                                        <h4 class="harga">Harga : <b>Rp. {{ number_format($pesananSemua->harga) }}</b>
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
                                                    Link Hosting</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Tanggal Pemesanan</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Cover Template</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Status Pemesanan</th>
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
                                            @forelse ($dataPemesananInvitation as $pemesanan)
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
                                                                    {{ $pemesanan->name }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $pemesanan->email }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $pemesanan->kategori_template }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $pemesanan->link_hosting }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $pemesanan->tanggal_pemesanan }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <p class="text-xs font-weight-bold mb-0">
                                                            <img src='{{ asset("gambar/gambar_cover_template/$pemesanan->gambar_cover") }}'
                                                                width="100" alt="Icon Template">
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $pemesanan->status }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center">

                                                        @if ($pemesanan->status == 'pending')
                                                            <form method="POST" id="tombol-hapus">
                                                                @method('delete')
                                                                @csrf
                                                                <button type="button"
                                                                    onclick="hapusPesanan('{{ $pemesanan->id_pemesanan }}')"
                                                                    class="btn btn-danger">Hapus Pesanan</button>
                                                            </form>
                                                        @endif

                                                        @if ($pemesanan->status == 'sudah bayar')
                                                            <div class="alert alert-warning" role="alert">
                                                                Menunggu Konfirasi dari Admin
                                                            </div>
                                                        @endif

                                                        @if ($pemesanan->status == 'selesai')
                                                            <div class="alert alert-success" role="alert">
                                                                Pesanan Selesai
                                                            </div>
                                                        @endif

                                                        @if ($pemesanan->status == 'ditolak')
                                                            <div class="alert alert-danger" role="alert">
                                                                Pesanan Ditolak
                                                            </div>
                                                        @endif


                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="9" class="text-center">Data Masih Kosong</td>
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

@endsection

@push('script')
    <script>
        function hapusPesanan(id) {
            Swal.fire({
                title: 'Yakin akan menghapus Pesanan ini?',
                text: "Ini seperti kenangan, kamu tidak dapat mengembalikannya",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Nggak jadi deh'
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.delete(`pemesanan/delete/${id}`)
                        .then(function(response) {
                            if (response.status == 200) {
                                Swal.fire(
                                    'Deleted!',
                                    response.data.success,
                                    'success'
                                ).then(function() {
                                    window.location.href = "{{ route('data-pemesanan') }}"
                                })
                            }
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                }
            })
        }
    </script>
