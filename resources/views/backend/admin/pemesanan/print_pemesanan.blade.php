<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.</title>
    <!--- include CSS --->
    @include('includes.backend.css')
    <!--- include CSS --->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
@include('includes.backend.script')

<body onload="print();">

    <center>
        <table width="70%">
            <tr>
                <td align="center">
                    <br>
                    <b>
                        <h2>Laporan Pemesanan</h2>

                        @if (isset($pilih_tahun) && isset($pilih_tahun))
                            @if ($pilih_bulan == '1')
                                <span>Bulan : {{ 'January' }} / Tahun : {{ $pilih_tahun }}</span>
                            @elseif($pilih_bulan == '2')
                                <span>Bulan : {{ 'February' }} / Tahun : {{ $pilih_tahun }} </span>
                            @elseif($pilih_bulan == '3')
                                <span>Bulan : {{ 'Maret' }} / Tahun : {{ $pilih_tahun }} </span>
                            @elseif($pilih_bulan == '4')
                                <span>Bulan : {{ 'April' }} / Tahun : {{ $pilih_tahun }} </span>
                            @elseif($pilih_bulan == '5')
                                <span>Bulan : {{ 'Mei' }} / Tahun : {{ $pilih_tahun }}</span>
                            @elseif($pilih_bulan == '6')
                                <span>Bulan : {{ 'Juni' }} / Tahun : {{ $pilih_tahun }}</span>
                            @elseif($pilih_bulan == '7')
                                <span>Bulan : {{ 'Juli' }} / Tahun : {{ $pilih_tahun }}</span>
                            @elseif($pilih_bulan == '8')
                                <span>Bulan : {{ 'Agustus' }} / Tahun : {{ $pilih_tahun }}</span>
                            @elseif($pilih_bulan == '9')
                                <span>Bulan : {{ 'September' }} / Tahun : {{ $pilih_tahun }}</span>
                            @elseif($pilih_bulan == '10')
                                <span>Bulan : {{ 'October' }} </span>
                            @elseif($pilih_bulan == '11')
                                <span>Bulan : {{ 'November' }} / Tahun : {{ $pilih_tahun }}</span>
                            @elseif($pilih_bulan == '12')
                                <span>Bulan : {{ 'Desember' }} / Tahun : {{ $pilih_tahun }}</span>
                            @endif
                        @endif
                    </b>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr style="border: 2px solid black;">
                </td>
            </tr>
        </table>
    </center>


    <div class="card mb-4">
        <div class="card-body px-0 pt-0 pb-2">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Nomor</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Nama Pelanggan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Email Pelanggan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Kategori Template</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Link Hosting</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Tanggal Pemesanan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Status Pemesanan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action</th>
                        {{-- <th class="text-secondary opacity-7"></th> --}}
                    </tr>
                </thead>
                <tbody>
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
                                        <button type="button" onclick="hapusPesanan('{{ $pemesanan->id_pemesanan }}')"
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
    @php
        $tgl = date('d-m-Y');
    @endphp

    {{-- </section> --}}
    <div class="d-flex justify-content-end">
        Padang, {{ $tgl }}
        <br> Hormat Kami
        <br> <br><br><br><br>
        Rise Development
    </div>


</body>

</html>
