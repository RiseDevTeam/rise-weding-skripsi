@extends('layouts.admin')
@section('title', 'Mitra')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                @if (session('cash_out_admin'))
                    <div class="alert alert-warning">
                        <center>
                            {{ session('cash_out_admin') }}
                        </center>
                    </div>
                @endif
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        Laporan Penjualan <br>
                        <hr>
                        <form action="{{ route('cari_penjualan') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-6">
                                    <select class="form-control" name="tahun" aria-label="Default select example">
                                        @php
                                            $tahun_sekarang = date('Y');
                                            $tgl_kemarin = date('Y', strtotime('-1 Year', strtotime(date('Y'))));
                                        @endphp
                                        <option value="{{ $tahun_sekarang }}">Pilih Tahun</option>
                                        <option value="{{ $tahun_sekarang }}">{{ $tahun_sekarang }}</option>
                                        <option value="{{ $tgl_kemarin }}">{{ $tgl_kemarin }}</option>
                                    </select>
                                </div>

                                <div class="col-6">
                                    <select class="form-control" name="bulan" aria-label="Default select example">
                                        @php
                                            date_default_timezone_set('Asia/Jakarta');
                                            $tgl = date('m');
                                            $bulan = ['Januari' => '1', 'Februari' => '2', 'Maret' => '3', 'April' => '4', 'Mei' => '5', 'Juni' => '6', 'Juli' => '7', 'Agustus' => '8', 'September' => '9', 'Oktober' => '10', 'November' => '11', 'Desember' => '12'];
                                        @endphp
                                        <option value="{{ $tgl }}">Pilih Bulan</option>
                                        @foreach ($bulan as $b => $value_bulan)
                                            <option value="{{ $value_bulan }}">{{ $b }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Cari</button>
                            @if (isset($tahun_print) && isset($bulan_print))
                                <a href="{{ route('print_laporan_penjualan_tahun_bulan', ['tahun_print' => $tahun_print, 'bulan_print' => $bulan_print]) }}"
                                    target="_blank" class="btn btn-danger">Print</a>
                            @else
                                <a href="{{ route('print_laporan_penjualan') }}" target="_blank"
                                    class="btn btn-danger">Print</a>
                            @endif
                            <a href="{{ route('laporan_penjualan') }}" class="btn btn-info">Reset</a>
                        </form>
                        <br>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nomor</th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Pelanggan
                                        </th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email
                                        </th>

                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kategori Template
                                        </th>

                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Gambar Template
                                        </th>

                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tanggal Pemesanan
                                        </th>

                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Harga Template
                                        </th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($laporan_penjualan as $cash)
                                        @php
                                            $cash_out = DB::table('cash_out')
                                                ->where('id_pembayaran', $cash->id_pembayaran)
                                                ->first();
                                        @endphp
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>

                                            <td class="text-center">
                                                <h6 class="mb-0 text-sm">{{ $cash->name }}</h6>
                                            </td>

                                            <td class="text-center">
                                                <h6 class="mb-0 text-sm">{{ $cash->email }}</h6>
                                            </td>

                                            <td class="text-center">
                                                <h6 class="mb-0 text-sm">{{ $cash->kategori_template }}</h6>
                                            </td>


                                            <td class="text-center">
                                                <img src='{{ asset("gambar/gambar_cover_template/$cash->gambar_cover") }}'
                                                    width="100" alt="Icon Template">
                                            </td>

                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    @php
                                                        date_default_timezone_set('Asia/Jakarta');
                                                    @endphp
                                                    {{ date('d F Y', strtotime($cash->tanggal_pemesanan)) }}
                                                </span>
                                            </td>

                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    Rp.{{ number_format($cash->total) }}
                                                </span>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <nav class="app-pagination">
                    <ul class="pagination justify-content-center">
                        {{-- {!! $dataPetugas->links() !!} --}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
